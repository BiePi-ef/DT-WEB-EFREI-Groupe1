-- ## Insertions ##

-- INSERT INTO users(user_name, email, mdp) VALUES ('Test1', 'test@test.test', '$2y$10$crm4XyvAKCINIAuCK2W/6esN8IHrOY6YYEfakP2rDK36v0dwXbw4u');
-- INSERT INTO posts(title, content, id_user) VALUES ('Post_test1', 
-- 	'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt magnam accusantium cumque mollitia. Fugiat asperiores adipisci sed exercitationem maiores odit excepturi autem accusamus quidem culpa ab, dolorem quas ullam eligendi!',
-- 	1
-- );
-- INSERT INTO images(link_image, id_post) VALUES ('imageTest1', 1), ('imageTest2', 1), ('imageTest2', 1);
-- INSERT INTO admins(admin_name, email, mdp) VALUES ('adminTest1', 'admin@test.test', '$2y$10$crm4XyvAKCINIAuCK2W/6esN8IHrOY6YYEfakP2rDK36v0dwXbw4u');

-- INSERT INTO posts(title, content, id_user) VALUES ('Post_test2', 
-- 	'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt magnam accusantium cumque mollitia. Fugiat asperiores adipisci sed exercitationem maiores odit excepturi autem accusamus quidem culpa ab, dolorem quas ullam eligendi!',
-- 	3
-- );
-- INSERT INTO images(link_image, id_post) VALUES ('imageTest2', 4), ('imageTest22', 4), ('imageTest222', 5);
-- INSERT INTO admins(admin_name, email, mdp) VALUES ('adminTest1', 'admin@test.test', '$2y$10$crm4XyvAKCINIAuCK2W/6esN8IHrOY6YYEfakP2rDK36v0dwXbw4u');


-- ## Delete ## --

-- DELETE FROM posts WHERE id_post = 4;


-- ## Select ## --

-- SELECT posts.*, images.link_image FROM posts INNER JOIN images ON posts.id_post = images.id_post;
-- select * from users;
-- select * from admins;
-- select * from posts;

-- DELETE FROM posts WHERE id_post = 4;