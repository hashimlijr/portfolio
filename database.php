<?php

$DB = array(
  "hostname" => "localhost",
  "username" => "root",
  "password" => "nocode0911",
  "database" => "portfolio",
);

$connection = mysqli_connect($DB["hostname"], $DB["username"], $DB["password"], $DB["database"]);
