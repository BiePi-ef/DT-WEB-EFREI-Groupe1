    DROP DATABASE IF EXISTS "challenge_web";

    CREATE DATABASE "challenge_web"
        WITH
        OWNER = postgres
        ENCODING = 'UTF8'
        LC_COLLATE = 'C'
        LC_CTYPE = 'C'
        LOCALE_PROVIDER = 'libc'
        TABLESPACE = pg_default
        CONNECTION LIMIT = -1
        IS_TEMPLATE = False;

    CREATE TABLE users (
        id_user SERIAL PRIMARY KEY,
        user_name VARCHAR (50) NOT NULL,
        email VARCHAR (50) UNIQUE NOT NULL,
        mdp VARCHAR (1024) NOT NULL,
        date_create DATE DEFAULT NOW()
    );

    CREATE TABLE admins (
        id_admin SERIAL PRIMARY KEY,
        admin_name VARCHAR (50) NOT NULL,
        email VARCHAR (50) UNIQUE NOT NULL,
        mdp VARCHAR (1024) NOT NULL,
        date_create DATE DEFAULT NOW()
    );

    CREATE TABLE posts (
        id_post SERIAL PRIMARY KEY,
        title VARCHAR(50) NOT NULL,
        content TEXT,
        id_user INT REFERENCES users(id_user),
        date_create DATE DEFAULT NOW()
    );

    CREATE TABLE images (
        id_image SERIAL PRIMARY KEY,
        link_image VARCHAR(100),
        id_post INT REFERENCES posts(id_post) ON DELETE CASCADE NOT NULL 
    );
