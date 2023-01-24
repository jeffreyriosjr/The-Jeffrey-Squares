<?php
if(isset($_POST['name']) && isset($_POST['nickname'])){
  $name = $_POST['name'];
  $nickname = $_POST['nickname'];
  // Do something with the form data, such as insert it into a database, send an email, etc.
  echo "Form submitted successfully. Name: " . $name . " Nickname: " . $nickname;
  header('Location: thank-you-page.php');
}
?>
