<?php

if (empty($_POST["name"])) {
    die("Name is required");
}
if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Validate email is required");
}
if (strlen($_POST["password"]) < 8) {
    die("Password must at least 8 chararters");
}
if(! preg_match("/[a-z]/i", $_POST["password"]))
{
    die("Password must be at least one letter");
}
if(! preg_match("/[0-9]/i", $_POST["password"]))
{
    die("Password must be at least one number");
}
if($_POST["password"] !== $_POST["password_confirmation"])
{
    die("Password must be match");
}

print_r($_POST);