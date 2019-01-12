#!/usr/bin/php
<?php
  $db_host = "localhost:1433";
  $db_user = "root";
  $db_pw = "root";
  $db_name = "db_minishop";
  $db_link = mysqli_connect($db_host, $db_user, $db_pw);

  if (!$db_link)
    die("Cannot connect: " . mysqli_connect_error());

  echo "Connected to MySQL server successfully"."\n";

  if (mysqli_select_db($db_link, $db_name))
  {
    echo "db_minishop already exisits"."\n";
    exit();
  }

  $db_create = "CREATE DATABASE $db_name";
  if (mysqli_query($db_link, $db_create))
    echo "Database $db_name created successfully\n";
  else
    die("Error creating database" . mysqli_error($db_link));

  mysqli_select_db($db_link, $db_name);
  
