<footer>
	<p class="text-center">Copyright &copy; <?php echo $com_name; ?> 2019. All rights reserved! | <a href="#">Developed by SimpleCAD</a></p>
</footer>
<script>
	$(document).ready(function() {
		$('form.ajax').on('submit', function(e) {
			var that = $(this),
				url = that.attr('action'),
				type = that.attr('method'),
				id = that.attr('id'),
				data = {};

				that.find('[name]').each(function(index, value) {
					var that = $(this)
						name = that.attr('name'),
						value = that.val();

					data[name] = value;
				});

				$.ajax({
					url: url,
					type: type,
					data: data,
					success: function(response) {
						
					}
				});
			e.preventDefault();
		});
	});
</script>
</body>
</html>