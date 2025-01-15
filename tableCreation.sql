CREATE TABLE users (
    id_user SERIAL PRIMARY KEY,
    user_name VARCHAR (50) NOT NULL,
    email VARCHAR (50) NOT NULL,
    mdp VARCHAR (1024) NOT NULL
);

CREATE TABLE admins (
    id_admin SERIAL PRIMARY KEY,
    admin_name VARCHAR (50) NOT NULL,
    email VARCHAR (50) NOT NULL,
    mdp VARCHAR (1024) NOT NULL
);

CREATE TABLE posts (
    id_post SERIAL PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    content TEXT,
    id_user INT REFERENCES users(id_user) NOT NULL,
    date_create DATE NOT NULL
);

CREATE TABLE images (
    id_image SERIAL PRIMARY KEY,
    link_image VARCHAR(100),
    id_post INT REFERENCES posts(id_post) NOT NULL
);