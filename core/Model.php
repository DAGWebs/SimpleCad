<?php 
	
	class Model {
		protected $_db, $_table, $_modelName, $_softDelete = false, $_columnNames = [];

		public function __construct($table) {
			$this->_db = DB::getInstance();
			$this->_table = $table;
			$this->_setTableColumns();
			$this->_modelName = str_replace(' ', '', ucwords(str_replace('_', ' ', $this->_table)));
		}

		protected function _setTableColumns() {
			$columns = $this->get_columns();
			foreach($columns as $column) {
				$columnName = $column->Field;
				$this->_columnNames[] = $column->Field;
				$this->{$columnName} = null;
			}
		}

		public function get_columns() {
			return $this->_db->get_columns($this->_table);
		}

		public function find($params = []) {
			$results = [];
			$resultsQuery = $this->_db->find($this->_table, $params);

			foreach($resultsQuery as $result) {
				$obj = new $this->_modelName($this->_table);

				$obj->populateObjData($result);

				$results[] = $obj;
			}

			return $results;
		}

		public function findFirst($params = []) {
			$resultQuery = $this->_db->findFirst($this->_table, $params);
			$result = new $this->_modelName($this->_table);
			if($resultQuery) {
				$result->populateObjData($resultQuery);
			}

			return $result;
		}

		public function findById($id) {
			return $this->findFirst(['conditions' => 'id = ?', 'bind' => [$id]]);
		}

		public function save() {
			$fields = [];

			foreach($this->_columnNames as $column) {
				$fields[$column] = $this->$column;
			}

			if(property_exists($this, 'id') && $this->id != '') {
				return $this->update($this->id, $fields);
			} else {
				return $this->insert($fields);
			}
		}

		public function insert($fields) {
			if(empty($fields)) return false;

			return $this->_db->insert($this->_table, $fields);
		}

		public function update($id, $fields) {
			if(empty($fields) || $id == '') return false;

			return $this->_db->update($this->_table, $id, $fields);
		}

		public function delete($id = '') {
			if($id == '' && $this->id == '') return false;

			$id = ($id == '') ? $this->id : $id;

			if($this->_softDelete) {
				return $this->update($id, ['deleted' => 1]);
			} 
			return $this->delete($this->_table, $id);
		}

		public function query($sql, $bind = []) {
			return $this->_db->query($sql, $bind);
		}

		public function data() {
			$data = new stdClass();

			foreach($this->_columnName as $column) {
				$data->column = $this->column;
			}

			return $data;
		}

		public function assign($params) {
			if(!empty($params)) {
				foreach($params as $key => $value) {
					if(in_array($key, $this->_columnNames)) {
						$this->key = sanitize($value);
					}
				}
				return true;
			}
			return false;
		}

		protected function populateObjData($result) {
			foreach($result as $key => $value) {
				$this->$key = $value;
			}
		}
	}