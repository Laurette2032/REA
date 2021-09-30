create database `mpc_db`;
use mpc_db;

create table `user`(
id_user bigint (20) auto_increment primary key, 
name_user varchar (50),
first_name_user varchar (50), 
pseudo_user varchar (50),
pswd_user varchar (50),
id_user_rights bigint (20)
);

create table `recipe_page`(

id_recipe_page bigint (20) auto_increment primary key, 
name_recipe_page varchar (50),
url_recipe_page varchar (100),
date_recipe_page date,
subject_recipe_page text,
id_user bigint (20)
);

create table `comment`(
id_comment bigint (20) auto_increment primary key, 
date_comment date, 
subject_comment varchar (100),
id_user bigint (20),
id_recipe_page bigint (20)
);

create table `category`(
id_category bigint (20) auto_increment primary key, 
name_category varchar (50)

);

create table `order`(
id_order bigint (20) auto_increment primary key, 
name_order varchar (50), 
id_user bigint (20)
);

create table `user_rights`(
id_user_rights bigint (20) auto_increment primary key, 
name_user_rights varchar (50)
);


create table `menu` ( 
id_menu bigint (20) auto_increment primary key,
name_menu varchar (50), 
quantity_menu int

);

create table `ingredient` (
id_ingredient bigint (20) auto_increment primary key, 
name_ingredient varchar (100) 
);

create table `recipe` (
id_recipe bigint (20) auto_increment primary key, 
name_recipe varchar (100), 
date_recipe date
);

create table `photo` (
id_photo bigint (20) auto_increment primary key, 
url_photo text
);