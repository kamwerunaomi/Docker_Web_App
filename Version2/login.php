<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if $username == "N" and $password == "nn" {
    echo "Hello, $name! Login success";
  }
  else {
    echo "This page can only be accessed through a form submission.";
  }


?>
