use mpc_db; 

create table `belong to`(

id_recipe_page int (20) not null,
id_category int (20) not null, 

primary key (id_recipe_page, id_category),

foreign key (id_recipe_page) references recipe_page (id_recipe_page), 
foreign key (id_category) references category (id_category)
);


create table `couple with`(

id_recipe_page int (20) not null,
id_photo int (20) not null, 

primary key (id_recipe_page, id_photo),

foreign key (id_recipe_page) references recipe_page (id_recipe_page), 
foreign key (id_photo) references photo (id_photo)
);

create table `classified by`(

id_category int (20) not null,
id_recipe_name int (20) not null, 

primary key (id_category, id_recipe_name)

);

alter table `classified by`
add constraint foreign key (id_category) references category (id_category),
add constraint foreign key (id_recipe_name) references recipe_name (id_recipe_name);


create table `associated`(

id_recipe_name int (20) not null,
id_ingredient int (20) not null,
primary key (id_recipe_name, id_ingredient) 
);
 
alter table `associated`

add constraint foreign key (id_recipe_name) references recipe_name (id_recipe_name), 
add constraint foreign key (id_ingredient) references ingredient (id_ingredient);


