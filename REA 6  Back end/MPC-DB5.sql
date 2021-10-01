use mpc_db; 

insert into `ingredient`(name_ingredient) values
("pois chiche"),
("tahin"),
("citron"), 
("huile d'olive"),
("chocolat"), 
("farine"), 
("levure"),
("bicarbonate"),
("oeuf"); 

insert into `category` (name_category) values
("sucré"),
("salé"),
("boulange"),
("boissons"),
("petit dej"),
("en-cas");

insert into `menu` (name_menu, quantity_menu) values
("plat unique", (1)),
("entrée plat", (2)),
("plat dessert", (4));

insert into `user_rights` (name_user_rights) values
("visitor"),
("administrator"),
("user");

insert into `user` (name_user, first_name_user, pseudo_user, pswd_user) values
("bibi","lolo","lo","1234"),
("riri","duck","ri","456456"),
("fifi","canard","fifi","85285"),
("loulou","duckyducky","lou","7899"),
("zaza","pepette","zaza","4564");

insert into `recipe_page` (name_recipe_page,  url_recipe_page, date_recipe_page, subject_recipe_page) values
("pain d'épice","https://www.delscookingtwist.com/fr/pain-depices-tres-moelleux/#tasty-recipes-23302-jump-target","2021-10-01","dessert"), 
("biscuit","https://lalignegourmande.fr/biscuits-amande-avoine-sans-farine-ni-sucre/","2021-09-21","dessert"), 
("quiche","https://www.delscookingtwist.com/fr/quiche-a-la-courge-aux-epinards-et-au-chevre/","2017-10-03","salé"),
("pancake","https://lalignegourmande.fr/pancakes-a-la-courgette/", "2021-06-20", "salé");


insert into `photo` (url_photo) values
("C:\Users\Laure COSTA\Documents\GitHub\REA\REA 2 HTML CSS\images\plantepoischiche.jpg");

insert into `recipe_name` (name_recipe_name, date_recipe_name) values
("houmous", "2021-10-01");






