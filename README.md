# BlogIt.

This is a simple blogging website, created for a college project.

REQUIREMENTS :
XAMPP

You can download it from this link : https://www.apachefriends.org/download.html

### For Database :

* Open XAMPP Control Panel. Start Apache and MySQL.

* Go to http://localhost/phpmyadmin/

* Create a new database. Name it 'blogit'.

* Create 2 tables :
  
  1. user 
  2. blogs

* The user table should contain 3 columns namely fullname,email and password.
(For Example: )
      `CREATE TABLE `blogit`.`user` ( `fullname` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(18) NOT NULL ) ENGINE = MyISAM;`

* The blogs table should contain 3 columns : email, title and content.

#### HOW TO START :

Save your project in C:\xampp\htdocs\

Start the website by going to http://localhost/ and select your website.

### Hosting :

* So as to host this site simply download it or clone it and then zip the content **inside** the folders, Then upload it on your favourite hosting provider,
* After that,``right-click > unzip ``
* Then goto cpanel and create a new database named as `blogit`
* And repeat procedure as explained above. 
  
  

##Demo Website can be found here: 

[Simple Blogging] http://blogit.rf.gd/




