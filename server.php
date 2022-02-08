<?php 
//require('phpmailer.php/PHPMailerAutoload.php');
//the error variables will be here


$error = ['firstname' => '', 'lastname' => '', 'email' => '', 'password' => '', 'conpassword' => '','success' => ''];

//connect db
$conn = mysqli_connect('localhost', 'okingdavid', 'hahapassword042', 'all_star');

// check connection

//  if (!$conn) {
//       echo 'connection error : '.  mysqli_connect_error();
//  }


// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

include 'PHPMailer-master/src/Exception.php';
include 'PHPMailer-master/src/PHPMailer.php';
include 'PHPMailer-master/src/SMTP.php';



//registration
if(isset($_POST['submit'])) {
     //all inputs
     $firstname = mysqli_real_escape_string($conn, $_POST['first_name']);
     $lastname = mysqli_real_escape_string($conn, $_POST['last_name']);
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $password = mysqli_real_escape_string($conn, $_POST['password']);
     $conpassword= mysqli_real_escape_string($conn, $_POST['con_password']);
     $mail = new PHPMailer(true);

     // check first name
if (empty($_POST['first_name'])) {
	$error["first_name"] = 'pls enter your first_name<br />';
} else {
    if (!preg_match ('/^[a-zA-Z\s]+$/', $firstname)) {
	    $error["first_name"] = 'first_name most be letters and spaces only <br />';
    }
}
//check last name
if (empty($_POST['last_name'])) {
	$error["last_name"] = 'pls enter your last name<br />';
} else {
    if (!preg_match ('/^[a-zA-Z\s]+$/', $lastname)) {
	    $error["last_name"] = 'last_name most be letters and spaces only <br />';
    }
}
//check password
if (empty($_POST['password'])) {
	$error["password"] = 'pls enter your password<br />';
} else {
    if (!preg_match ('/^[a-zA-Z\s]+$/', $password)) {
	    $error["password"] = 'password most be letters and spaces only <br />';
    }else{

    }
}

     
     if ($password != $conpassword) {
          $error['password'] =  'password does not match';
          exit();
     }else{
          $password = md5($password); //encrypt password
     
     
     $user_check_query = "SELECT * FROM allstar_registration WHERE email = '$email' LIMIT 1";
     $result = mysqli_query($conn, $user_check_query) or mysqli_error($conn);
     if (mysqli_num_rows($result) > 0) {
          $error['email'] = "user already exists";
     }else{
          //insert into table
          if (!array_filter($error)) {
               $query = "INSERT INTO allstar_registration (first_name, last_name, email, password) VALUE('$_POST[first_name]', '$_POST[last_name]', '$_POST[email]', '$_POST[password]')";
               $result2 = mysqli_query($conn, $query) || die(mysqli_error($conn));
                    if($result2){

                         $otp = rand(100000,999999);
                         $_SESSION['otp'] = $otp;
                         $_SESSION['mail'] = $email;
                         include('phpmailer.php/PHPMailerAutoload.php');
                         $mail = new PHPMailer(true);
         
                         //$mail->isSMTP();
                         $mail->Host='smtp.gmail.com';
                         $mail->Port=587;
                         $mail->SMTPAuth=true;
                         $mail->SMTPSecure='tls';
         
                         $mail->Username='okingdavid6@gmail.com';
                         $mail->Password='hahapassword';
         
                         $mail->setFrom('okingdavid6@gmail.com', 'OTP Verification');
                         $mail->addAddress($_POST["email"]);
         
                         $mail->isHTML(true);
                         $mail->Subject="Your verify code";
                         $mail->Body="<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>
                         <br><br>
                         <p>With regrads,</p>
                         <b>All S football Club</b>
                         https://www.youtube.com/channel/UCKRZp3mkvL1CBYKFIlxjDdg";
         
                                 if(!$mail->send()){
                                     ?>
                                         <script>
                                             alert("<?php echo "Register Failed, Invalid Email "?>");
                                         </script>
                                     <?php
                                 }else{
                                     ?>
                                     <script>
                                         alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
                                         window.location.replace('verification.php');
                                     </script>
                                     <?php
                                 }

                        

                              }
                         }
                    }
               }
}               
     






//verification
    if(isset($_POST["verify"])){
     $otp = $_SESSION['otp'];
     $email = $_SESSION['mail'];
     $otp_code = $_POST['otp_code'];

     if(!$otp === $otp_code){
         ?>
        <script>
            alert("Invalid OTP code");
        </script>
        <?php
     }else{
         //mysqli_query($connect, "UPDATE allstar_registration SET status = 1 WHERE email = '$email'");
         ?>
          <script>
              alert("Verfiy account done, you may sign in now");
                window.location.replace("login.php");
          </script>
          <?php
     }

 }



 
    include('connect/connection.php');

    if(isset($_POST["login"])){
        $email = mysqli_real_escape_string($conn, trim($_POST['email']));
        $password = trim($_POST['password']);

        $sql = mysqli_query($conn, "SELECT * FROM allstar_registration where email = '$email'");
        $count = mysqli_num_rows($sql);

            if($count > 0){
                $fetch = mysqli_fetch_assoc($sql);
                $hashpassword = $fetch["password"];
    
                if($fetch["status"] == 0){
                    ?>
                    <script>
                        alert("Please verify email account before login.");
                    </script>
                    <?php
                }else if(password_verify($password, $hashpassword)){
                    header("location: index.php");
                }else{
                    ?>
                    <script>
                        alert("email or password invalid, please try again.");
                    </script>
                    <?php
                }
            }
                
    }

     ?>

                    
          

    

