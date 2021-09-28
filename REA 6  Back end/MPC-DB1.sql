create database `mpc_db`;
use mpc_db;

create table `user`(
id_user bigint (20) auto_increment primary key, 
name_user varchar (50),
first_name_user varchar (50), 
pseudo_user varchar (50),
pswd_user varchar (50)
);

create table `page_of_recipe`(

id_page_of_recipe bigint (20) auto_increment primary key, 
name_page_of_recipe varchar (50),
url_page_of_recipe varchar (100),
date_page_of_recipe date,
subject_page_of_recipe text 
);

create table `commentary`(
id_commentary bigint (20) auto_increment primary key, 
date_commentary date, 
subject_commentary varchar (100)
);

create table `category`(
id_category bigint (20) auto_increment primary key, 
name_category varchar (50)

);

create table `booking`(
id_booking bigint (20) auto_increment primary key, 
name_booking varchar (50) 

);

create table `user_right`(
id_user_right bigint (20) auto_increment primary key, 
name_user_right varchar (50)
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