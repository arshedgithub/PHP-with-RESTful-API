<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_REQUEST['name']);
    $pwd = htmlspecialchars($_REQUEST['pwd']);

    if (empty($name) || empty($pwd)) {
        echo "field empty";
    } else {
        // when success
    }
}

?>