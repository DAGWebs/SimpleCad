# Hello and Welcome to the Quantum Coin Basic Setup

**First Legs Get Started With Installing on a local Computer**

```
1. First Start Out by downloading the software. Dont worry just follow the instructions when downloading.Link at bottom of page
2. Get github desktop (Link at bottom of page). You need a github account!
3. When it launches go to File => Clone Repository => Select ms2.0
4. Select Directory Location under Local Path (Find Where you installed xampp then select htdocs) then click clone
5. Go to the Home Page
```

## Configuring the Needed Info
**If You Dont get an error (SKIP THIS)**
```

1. Go the the directory you installed xampp in => htdocs => ms2.0 => config
2. Use notepad or notepad++ to edit the config.php file
3. **Locate the area that looks like this below!**
> /**
> *
> * DATABASE INFO
> *
> */

> $db_host = '127.0.0.1';
> $db_name = 'ms';
> $db_user = 'root';
> $db_pass = '';

4. Edit only the parts between the '' with your database info

```

## Give your self Admin perms
```

1. Go this PHPmyadmin
2. drag and drop the ms.sql file 
3. Register An Account
4. Go back to PHPmyadmin
5. find the ms database => users => your username
6. double click in the acl column that is associalted with your name
7. Set this rank owner (must be lowercase)

```

1. [Register An Account](http://localhost/ms2.0/register)
2. [PHPmyadmin](http://localhost/phpmyadmin)
3. [Home Page](http://localhost/ms2.0)
4. [Needed Software](https://www.apachefriends.org/index.html)
5. [github Desktop](https://desktop.github.com/)
