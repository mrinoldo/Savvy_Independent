<?php
  $firstname = filter_input(INPUT_POST, 'firstname');
  $lastname = filter_input(INPUT_POST, 'lastname');
  echo $firstname\n;
  echo $lastname\n;

  $host = "savvyindependent.c7hofmfumtkm.us-east-2.rds.amazonaws.com";
  $dbusername = "username";
  $dbpassword = "hackathon";
  $dbname = "Savvy_Independent";

  echo $host\n;
  echo $dbusername\n;
  echo $dbpassword\n;
  echo $dbname\n;

  $conn = mysqli_connect($host, $dbusername, $dbpassword);
  mysql_select_db('Savvy_Independent', $conn);
  echo $conn;
  if(!$conn){
    die('Connect Error ('. mysqli_connect_errorno() .') ' . mysqli_connect_error());
  }
  else {
    $sql = "INSERT INTO user (first_name, last_name) values ('$firstname', '$lastname')";
    if($conn->query($sql)){
      echo "New record has been inserted";
    }
    else{
      echo "Error: ".$sql."<br>".$conn->error;
    }
    $conn->close();
  }
?>
