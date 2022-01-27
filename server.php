<?php 
//the error variables will be here
$error = ['firstname' => '', 'lastname' => '', 'email' => '', 'password' => '', 'conpassword' => ''];

//connect db
$conn = mysqli_connect('localhost', 'okingdavid', 'hahapassword042', 'all_star');

// check connection

//  if (!$conn) {
//       echo 'connection error : '.  mysqli_connect_error();
//  }





//registration
if(isset($_POST['submit'])){
     //all inputs
     $firstname = mysqli_real_escape_string($conn, $_POST['first_name']);
     $lastname = mysqli_real_escape_string($conn, $_POST['last_name']);
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $password = mysqli_real_escape_string($conn, $_POST['password']);
     $conpassword= mysqli_real_escape_string($conn, $_POST['con_password']);
     $login = mysqli_real_escape_string($conn, $_POST['login']);
     
     if ($password != $conpassword) {
          $error['conpassword'] = 'password does not match';
          die;
     }
     
     $user_check_query = "SELECT * FROM allstar_registration where email = '$email' LIMIT 1";
     $result = mysqli_query($conn, $user_check_query);
     $user = mysqli_fetch_assoc($result);
     
     if ($user) { //if user exists
     if ($user['email'] === $email) {
          $error['email'] = "user already exists";
     }
     else {
          $password = md5($password); //encrypt password
     }
     }
     
          //insert into table
          if (!array_filter($error)) {
               $query = "INSERT INTO allstar_registration (first_name, last_name, email, password) VALUE($firstname, $lastname, $email, $password)";
               mysqli_query($conn, $query);
               // $_SESSION['firstname'] = $firstname;
               // $_SESSION['success'] = 'you are now logged in';
               //header('location: login.php');
          }else{
               echo 'did not work';
          }
          
     }



     //login user
if (isset($_POST['login'])) {
     $email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


if (empty($email)) {
     $error['email'] = 'Email is required';
}
if (empty($password)) {
     $error['password'] = 'password is required';
}

if (array_filter($error)) {
     $password = md5($password);
     $query ="SELECT * FROM allstar_registration WHERE email = '$email' AND password = '$password'";
     $result = mysqli_query($conn, $query);
     if (mysqli_num_rows($result) == 1) {
          $_SESSION['email'] = $email;
          $_SESSION['success'] = "you are now lggedin";
          header("location: index.php");
     }else{
          $error['email']['password'] = 'Wrong email and password combination';
     }
}

}
     
     ?>

