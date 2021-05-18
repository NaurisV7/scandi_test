<?php




// Create connection


// Check connection

class DB {
  protected $conn;

  public function __construct () {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "scandi";
  
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  }

  $sql = "INSERT INTO furniture VALUES (
      
  )";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}

