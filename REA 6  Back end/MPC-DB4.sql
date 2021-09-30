use mpc_db; 

create table `belong to`(

id_recipe_page bigint (20) not null,
id_category bigint (20) not null, 

primary key (id_recipe_page, id_category),

foreign key (id_recipe_page) references recipe_page (id_recipe_page), 
foreign key (id_category) references category (id_category)
);



create table `include`(

id_order bigint (20) not null,
id_menu bigint (20) not null, 

primary key (id_order, id_menu),

foreign key (id_order) references `order` (id_order), 
foreign key (id_menu) references menu (id_menu)
);

create table `couple with`(

id_recipe_page bigint (20) not null,
id_photo bigint (20) not null, 

primary key (id_recipe_page, id_photo),

foreign key (id_recipe_page) references recipe_page (id_recipe_page), 
foreign key (id_photo) references photo (id_photo)
);

create table `classified by`(

id_category bigint (20) not null,
id_recipe_name bigint (20) not null, 

primary key (id_category, id_recipe_name)

);

alter table `classified by`
add constraint foreign key (id_category) references category (id_category),
add constraint foreign key (id_recipe_name) references recipe_name (id_recipe_name);


create table `associated`(

id_ingredient bigint (20) not null,
id_recipe_name bigint (20) not null, 

primary key (id_ingredient, id_recipe_name),

foreign key (id_ingredient) references ingredient (id_ingredient), 
foreign key (id_recipe_name) references recipe_name (id_recipe_name)
);


