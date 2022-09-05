<?php

function Con()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "ShayRay0*";
    $db = "travnal";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connection has failed: %s\n". $conn ->error);

    return $conn;
}

function ConExit($conn)
{
    $conn -> close();
}

?>