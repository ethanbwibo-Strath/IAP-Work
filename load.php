<?php
session_start();
require "includes/constants.php";
require "includes/dbConnection.php";

// Class Auto Load 

function classAutoLoad($classname){

    $directories = ["Contents", "Layouts", "Menus", "Forms", "Processes", "Global"];

    foreach($directories AS $dir){
        $filename = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $classname . ".php";
        if(file_exists($filename) AND is_readable($filename)){
            require_once $filename;
        }
    }
}

spl_autoload_register('classAutoLoad');

    $ObjGlob = new fncs();

// Create instances of all classes
    $ObjLayouts = new layout();
    $ObjMenus = new menu();
    $ObjHeadings = new heading();
    $ObjCont = new content();
    $ObjForm = new user_forms();
    $conn = new dbConnection(DBTYPE, HOSTNAME, DBPORT, HOSTUSER, HOSTPASS, DBNAME);


// Create process instances

    $ObjAuth = new auth();
    $ObjAuth->signup($conn, $ObjGlob);

<!-- <php
function classAutoLoad($classname){
    $directories = ["Contents", "Layouts", "Menus"];

    foreach($directories as $dir){
        $filename = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir. DIRECTORY_SEPARATOR . $classname. ".php";

        if(file_exists($filename) AND is_readable($filename)){
            require_once$filename;
        }
    }


}

spl_autoload_register("classAutoLoad");


//Instances of classes
require_once "Layout/layout.php";
$ObjLayouts = new layout();

require_once "Menu/menus.php";
$ObjMenus = new menus(); 

require_once"Contents/heading.php";
$ObjHeadings = new headings();

require_once "Contents/contents.php";
$ObjContents = new contents();

require "Includes/constants.php";
require "Includes/dbConnection.php";

$conn = new dbConnection(DB_NAME, HOSTNAME, DBPORT, USERNAME, DBPASS, DBNAME);

// require_once "user_details.php";
// $obj = new user_details();

// $arr = ["black", "white", "green", "red"];

// foreach($arr as $color){
//   print $color . "<br>";
// }

// print dirname(__FILE__);
// print "<br>";
// print "<br>";
// print $_SERVER["PHP_SELF"];
// print "<br>";
// print "<br>";
// print basename($_SERVER["PHP_SELF"]);
// print "<br>";
// print "<br>";

// if(file_exists("index.php")AND is_readable("index.php")){
//   print "yes";
// }else{
//   print "no";
// }

?> -->