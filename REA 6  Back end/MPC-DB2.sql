use mpc_db;


alter table user
add constraint foreign key (id_user_rights) references user_rights (id_user_rights);

alter table recipe_page
add constraint foreign key (id_recipe_page) references user (id_user);

alter table comment
add constraint foreign key (id_comment) references user (id_user),
add constraint foreign key (id_comment) references recipe_page (id_recipe_page);

alter table `order`
add constraint foreign key (id_user) references user (id_user);


