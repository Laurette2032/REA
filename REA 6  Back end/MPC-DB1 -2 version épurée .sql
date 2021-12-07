create database `mpc_db`;
use mpc_db;

create table `user`(
id_user int (20) auto_increment primary key, 
name_user varchar (50),
first_name_user varchar (50), 
email_user varchar (250),
pseudo_user varchar (50),
pswd_user varchar (50),
id_user_rights int (20)
);

create table `recipe_page`(

id_recipe_page int (20) auto_increment primary key, 
name_recipe_page varchar (50),
url_recipe_page varchar (100),
date_recipe_page date,
subject_recipe_page text,
id_user int (20)
);

create table `comment`(
id_comment int (20) auto_increment primary key, 
date_comment date, 
subject_comment varchar (100),
id_user bigint (20),
id_recipe_page int (20)
);

create table `category`(
id_category int (20) auto_increment primary key, 
name_category varchar (50)

);

create table `user_rights`(
id_user_rights int (20) auto_increment primary key, 
name_user_rights varchar (50)
);


create table `menu` ( 
id_menu int (20) auto_increment primary key,
name_menu varchar (50), 
quantity_menu int

);

create table `ingredient` (
id_ingredient int (20) auto_increment primary key, 
name_ingredient varchar (100) 
);

create table `recipe_name` (
id_recipe_name int (20) auto_increment primary key, 
name_recipe_name varchar (100), 
date_recipe_name date
);

create table `photo` (
id_photo int (20) auto_increment primary key, 
url_photo text
);

create table `include`(
number_order int ,
id_user int, 
id_menu int


);