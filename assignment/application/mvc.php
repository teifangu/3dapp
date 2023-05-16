<?php

require "view/load.php";
require "model/model.php";
require "controller/controller.php";

$pageURI = $_SERVER["REQUEST_URI"];
$pageURI = substr($pageURI, strrpos($pageURI, "index.php") + 10);

if (!$pageURI) {
	new Controller("home");
} elseif(substr($pageURI, 0, 6) == "drinks") {
	new Controller("drinks");
} elseif ($pageURI == "about") {
    new Controller("about"); // Add a new route for the "about" page
} else {
    new Controller($pageURI);
}

?>