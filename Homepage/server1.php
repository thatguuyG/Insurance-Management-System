<?php
session_start();
$firstname = "";
$lastname = "";
$email    = "";
$covers = "";
$comment = "";
$errors = array(); 
$db = mysqli_connect('localhost', 'root', '', 'enquiries');

if (isset($_POST['submit_form'])) {
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $covers = mysqli_real_escape_string($db, $_POST['covers']);
  $comment = mysqli_real_escape_string($db, $_POST['comment']);

  if (empty($firstname)) { array_push($errors, "Firstname is required"); }
  if (empty($lastname)) { array_push($errors, "Last name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($covers)) { array_push($errors, "Cover is required"); }
 
}

//user enters the enquiry
if (isset($_POST['user_enquiry'])) {
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $covers = mysqli_real_escape_string($db, $_POST['cover']);
    $comment = mysqli_real_escape_string($db, $_POST['comment']);


  
    if (empty($firstname)) {
        array_push($errors, "Firstname is required");
    }
    if (empty($lastname)) {
        array_push($errors, "Lastname is required");
    }
    if (empty($email)) {
      array_push($errors, "Email is required");
    }
    if (empty($covers)) {
    array_push($errors, "Cover is required");
    }
    
  
    
  }
  
  ?>