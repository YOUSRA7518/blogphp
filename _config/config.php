<?php
//-------------------------------------//
//              ERRORS DISPLAY        //


//!\\ A enlever lors du déploiement , (de la production)
error_reporting(E_ALL);
ini_set('display_errors',true);


// ----------------------------------//
//               SESSIONS            //
//-----------------------------------//

session_start();
ini_set('session.cookie_lifetine', false);



//-------------------------------------//
//          CONSTANTS                 //
//-------------------------------------//

// Paths
define("PATH_REQUIRE",substr($_SERVER['SCRIPT_FILENAME'],0,-9));// Pour fonctions d'inclusion php
define("PATH",substr($_SERVER['PHP_SELF'],0,-9)); // Pour images ,fichiers etc (html)

// Website informations 
define("WEBSITE_TITLE", "Mon site");
define("WEBSITE_NAME","https://monsite.com");
define("WEBSITE_DESCRIPTION","T");
define("WEBSITE_KEYWORDS","");
define("WEBSITE_LANGUAGE","");
define("WEBSITE_AUTHOR", "");
define("WEBSITE_AUTHOR_MAIL","");

// Facebook Open Graph tags 
define("WEBSITE_FACEBOOK_NAME","");
define("WEBSITE_FACEBOOK_DESCRIPTION","");
define("WEBSITE_FACEBOOK_URL","");
define("WEBSITE_FACEBOOK_IMAGE","");

// DataBase informations
define("DATABASE_HOST","localhost");
define ("DATABASE_NAME","MVC");
define ("DATABASE_USER","root");
define ("DATABASE_PASSWORD","root");