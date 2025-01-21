# School 'Challenge Web' Project

#### From the 14 to 17/01/2025

---

The challenge web is a project made by 3 students of the french EFREI school over the course of a week. It consists in a website application that allows for its users to post posts comprising in a title, a text space, and one or several images. It also comes with an admin site, that allows a limited amount of management, like deleting user accounts and posts.  
***Attention :** this site do not check the latest security requirement and is not safe to be oppened to all on the internet.*

## Index

1. [Introduction](#school-challenge-web-project)
2. [Setting Up The App](#setting-up-the-app)
    - [Initialise Postgres on Wamp64](#initialise-postgres-on-wamp64)
    - [Initiate the project](#initiate-the-project)
    - [Set up database](#set-up-database)
3. [Accessing the site](#accessiong-the-site)
4. [Team & Special Thanks](#team-&-special-thank)

<a id="setting-up-the-app"></a>

## Setting Up The App

If you intend to follow the setup instructions, for this project it is required to have installed :

- **Wamp64** (or its mac/linux equivalent)
- **php 8.2.18** at least, installed on your machine and in wamp64
- **PostgreSQL 16.4** at least

***Note :** This project was made under **windows**. The following explanations on its installation are specificaly made for the **Windows OS** using Wamp64. If you want too init it using mac or linux, try to use xampp.*

<a id="initialise-postgres-on-wamp64"></a>

### Initialise Postgres on Wamp64

You want to make sure Wamp works with PostgreSQL. You need to change the php and Apache settings to this end.  
Proceed as follow :

1. Go to the php file **for the version you are using**. From the root of the wamp64 folder, the path to it should look like that :   ```./bin/php/php8.2.18``` *(8.2.18 corresponds to the version of php you are using)*

<a id="liste2"></a>

2. Open the ```php.init``` file in a text editor 

<a id="liste3"></a>

3. Search for the following lines in the file : 
```
;extension=pdo_pgsql
;extension=pdo_sqlite
;extension=pgsql
```

<a id="liste4"></a>

4. Delete the semicolon at the begining of each line (';'). It allows your php version to use postgresql databases 

5. Navigate to the php.init file in the Appache folder. The path is like the following : ```./bin/apache/apache2.4.59/bin/php.init``` *(note that apache**2.4.59** matches whatever apache version you have installed with Wamp64)*

6. Repeat point [2](#liste2), [3](#liste3) and [4](#liste4) on this php.init file.

7. Launch or re-start Wamp.

To verify that the changes took place, open your browser and enter ```localhost``` in the search bar. The Wampserver page should appear, click **'phpinfo()'** under the 'Tools' category. On the page that opens, check if **'pgsql'** appears below 'Configuration'

<a id="initiate-the-project"></a>

### Initiate the project

Once you made sure Wamp64 was setup properly, you can go to the **./www** folder. Here, **create a new folder** called **'project_web'** in which you can copy the project repository. From the root of the wamp folder, the path to the project file should look like the following :

```
./www/project_web_folder
```

<a id="set-up-database"></a>

### Set up database

Now it is time to set up the database the site will use. Make sure you have installed **PostgreSQL** *at least* version **16.4**. (*To verify you can run the command **psql --version***)

To initialise the database, enter the following commande.

```bash
psql -U postgres -d challenge_web -f ./documents/tableCreation.sql
```

Next, you should open the file ```./backend/bdd/bdd.php``` and modify your port informations, user name and password at ligne 10 as follow :

```php
$bdd = new PDO("pgsql:host=localhost;port=[base port];dbname=challenge_web","[base username]","[base password]");
```

<a id="accessiong-the-site"></a>

## Accessing the site

To access the **user site**, go in your navigator and enter :
```
http://localhost/project_web/siteUser/indexUser.php
```
To access the admin site, type :
```
http://localhost/project_web/siteAdmin/indexAdmin.php
```

<a id="team-&-special-thank"></a>

## Team & Special Thanks

The app so far was developped by [**Bastien**](https://github.com/BiePi-ef), [**Cédric**](https://github.com/Dark01213) and [**Maxim**](https://github.com/Max-Aethras).

We thank all of them for the effort they put in the project !

This work is under CC-BY license. You are free to use, share or rework it, as long as the original authors above are mentionned.
