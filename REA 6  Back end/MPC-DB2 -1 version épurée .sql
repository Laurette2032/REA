use mpc_db;



alter table user
add constraint foreign key (id_user_rights) references user_rights (id_user_rights);

alter table recipe_page
add constraint foreign key (id_recipe_page) references user (id_user);

alter table comment
add constraint foreign key (id_comment) references user (id_user),
add constraint foreign key (id_comment) references recipe_page (id_recipe_page);


alter table include
add key (id_user,id_menu),
add primary key (id_user,id_menu),
add constraint foreign key (id_user) references user (id_user),
add constraint foreign key (id_menu) references menu (id_menu)
;


