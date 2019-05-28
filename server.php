<?php
session_start();
$firstname = "";
$lastname = "";
$email = "";
$errors = array();

  //connect to the db
$db = mysqli_connect('localhost', 'root', '', 'g_farm');
  //on clicking register button
if (isset($_POST['register'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];

  	//requirement
  if (empty($firstname)) {
    array_push($errors, "first name is required");
  }
  if (empty($lastname)) {
    array_push($errors, "last name is required");
  }
  if (empty($phone)) {
    array_push($errors, "Phone number is required");
  }
  if (empty($email)) {
    array_push($errors, "email is required");
  }
  if (empty($password_1)) {
    array_push($errors, "password is required");
  }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }
  if (count($errors) == 0) {
    $password = md5($password_1); //encrypt password before storage
    $sql = "INSERT INTO users (firstname, lastname, phone, email, password) 
 		       VALUES ('$firstname','$lastname', '$phone_no','$email','$password')";
    mysqli_query($db, $sql);
    header('location: dashboard.php');//back to home page
  }

}

  //log user in from login page
if (isset($_POST['login'])) {
  $firstname = ($_POST['firstname']);
  $password = ($_POST['password']);

  	//requirement
  if (empty($firstname)) {
    array_push($errors, "first name is required");
  }

  if (empty($password)) {
    array_push($errors, "password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE firstname = '$firstname' AND password ='$password'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) == 1) {
             //log user in
      $_SESSION['firstname'] = $firstname;
      $_SESSION['success'] = "You have successfully logged in";
      header('location: dashboard.php');//back to home page
    } else {
      array_push($errors, "The password or username is incorrect");
			//header('location: login.php');
    }
  }
}

  //logout
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['firstname']);
  header('location: index.php');
}

//Animal entry
if (isset($_POST['newEntry'])) {
  $animal_name = $_POST['animal_name'];
  $animal_tag = $_POST['animal_tag'];
  $breed = $_POST['breed'];
  $Weight = $_POST['Weight'];
  $dob = $_POST['dob'];
  $category = $_POST['category'];
  $sql4 = " INSERT INTO animal (animal_name, first_name, breed, Weight, dob, category)
	VALUES ('$animal_name','$animal_tag','$breed','$Weight','$dob','$category') ";
  mysqli_query($db, $sql4);
  header(('Location:cow_report.php'));
}


//milk entry
if (isset($_POST['newEntry'])) {
  $animal_name = $_POST['animal_name'];
  $animal_tag = $_POST['animal_tag'];
  $breed = $_POST['breed'];
  $Weight = $_POST['Weight'];
  $dob = $_POST['dob'];
  $category = $_POST['category'];
  $sql4 = " INSERT INTO animal (animal_name, first_name, breed, Weight, dob, category)
	VALUES ('$animal_name','$animal_tag','$breed','$Weight','$dob','$category') ";
  mysqli_query($db, $sql4);
  header(('Location:cow_report.php'));
}


//staff records database
$sql4 = " SELECT * FROM users ";
$users1 = $db->query($sql4);


//deleting farmer_records.php content
if (isset($_GET['deleteButton'])) {
  $delete_id = (int)$_GET['deleteButton'];
  $sqldelete = " DELETE FROM famers WHERE id='$delete_id' ";
  $db->query($sqldelete);
  header('Location:farmer_records.php');
}

//posting to delivery records from new entry
$sql5 = " SELECT * FROM delivery ";
$row = $db->query($sql5);

//Deleting from delivery records
if (isset($_GET['delete_delivery_records'])) {
  $delete_delivery_id = (int)$_GET['delete_delivery_records'];
  $sql6 = "DELETE FROM delivery WHERE member_number = '$delete_delivery_id' ";
  $db->query($sql6);
  header('Location:delivery_records.php');
}

//delete from staff record
if (isset($_GET['delete_staff'])) {
  $delete_id = (int)$_GET['delete_staff'];
  $sql6 = "DELETE FROM users WHERE id='$delete_id'";
  $db->query($sql6);
}
?>