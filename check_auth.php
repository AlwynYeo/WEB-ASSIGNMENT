<?php

if(isset($_SESSION["logged.in"])) {
    $userLoggedin = true;
}
else {
    $userLoggedin = false;
}