<?php

require_once('./config/database.php');

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

Class User{

    private $db;

    //Constructor to Initiate database connection
    public function __construct(){

      $db = new DB;

      $this->db = $db->get_connection();

    }

    //Method to create Users.
    public function CreateUser($fullname, $email, $role, $password, $confirm_password){
            $errors = array();
            $message = '';

            //check if email in database
              $email_sql = "SELECT * FROM users WHERE email = '$email'";
                    $email_query = $this->db->query($email_sql);
                    
              $emailCount = mysqli_num_rows($email_query);

              if($emailCount != 0){

                $errors[] = "Email already used. Please try another.";
                    }
                    
                    //check password length
              if(strlen($password) < 6){

                $errors[] = "Password must be at least 6 characters long.";
                    }
                    
                    //check password match
              if($password != $confirm_password){

                $errors[] = "Your passwords do not match";
              }


                    //validate email
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

                $errors[] = "Invalid email";
              }


                    if(!empty($errors)){

                return $errors;
                    }
                    else{
                //add user to database
                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                        $hash = md5(rand(0,1000));
                        $created_at = date('Y-m-d');
                        $status = 0;
                        $id_number = substr($role,0,3).rand(10000,500000);
                        $courses = '';
                        $dept_code = '';
                        $faculty_code = '';
                        $image = '';
                        $gender ='';
                        $insert_sql = "INSERT INTO users (user_id,email,fullname,role,id_number,courses, dept_code,faculty_code,password,image, hash,created_at,status) 
                        VALUES(NULL,'$email','$fullname','$role','$id_number','$courses','$dept_code','$faculty_code','$hashed_password','$image','$hash','$created_at','$status')" ;


                        //if insert success, send verification mail
                        if($insert_query = $this->db->query($insert_sql)){
                            
                            $from = '';  
                            $headers = "MIME-Version: 1.0" . "\r\n";
                            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                            $headers .= "From: <" . $from . ">\r\n";
                            $headers .= "Reply-To: \r\n";
                            $headers .= "Return-Path: \r\n";
                            $headers .= "CC: \r\n";
                            $headers .= "BCC: \r\n";
                        
                            $to = $email;
                            $body = '<!doctype html>
                            <html>
                              <head>
                                <meta name="viewport" content="width=device-width">
                                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                                <title>Simple Transactional Email</title>
                                <style>
                                /* -------------------------------------
                                    INLINED WITH htmlemail.io/inline
                                ------------------------------------- */
                                /* -------------------------------------
                                    RESPONSIVE AND MOBILE FRIENDLY STYLES
                                ------------------------------------- */
                                @media only screen and (max-width: 620px) {
                                  table[class=body] h1 {
                                    font-size: 28px !important;
                                    margin-bottom: 10px !important;
                                  }
                                  table[class=body] p,
                                        table[class=body] ul,
                                        table[class=body] ol,
                                        table[class=body] td,
                                        table[class=body] span,
                                        table[class=body] a {
                                    font-size: 16px !important;
                                  }
                                  table[class=body] .wrapper,
                                        table[class=body] .article {
                                    padding: 10px !important;
                                  }
                                  table[class=body] .content {
                                    padding: 0 !important;
                                  }
                                  table[class=body] .container {
                                    padding: 0 !important;
                                    width: 100% !important;
                                  }
                                  table[class=body] .main {
                                    border-left-width: 0 !important;
                                    border-radius: 0 !important;
                                    border-right-width: 0 !important;
                                  }
                                  table[class=body] .btn table {
                                    width: 100% !important;
                                  }
                                  table[class=body] .btn a {
                                    width: 100% !important;
                                  }
                                  table[class=body] .img-responsive {
                                    height: auto !important;
                                    max-width: 100% !important;
                                    width: auto !important;
                                  }
                                }
                                /* -------------------------------------
                                    PRESERVE THESE STYLES IN THE HEAD
                                ------------------------------------- */
                                @media all {
                                  .ExternalClass {
                                    width: 100%;
                                  }
                                  .ExternalClass,
                                        .ExternalClass p,
                                        .ExternalClass span,
                                        .ExternalClass font,
                                        .ExternalClass td,
                                        .ExternalClass div {
                                    line-height: 100%;
                                  }
                                  .apple-link a {
                                    color: inherit !important;
                                    font-family: inherit !important;
                                    font-size: inherit !important;
                                    font-weight: inherit !important;
                                    line-height: inherit !important;
                                    text-decoration: none !important;
                                  }
                                  #MessageViewBody a {
                                    color: inherit;
                                    text-decoration: none;
                                    font-size: inherit;
                                    font-family: inherit;
                                    font-weight: inherit;
                                    line-height: inherit;
                                  }
                                  .btn-primary table td:hover {
                                    background-color: #34495e !important;
                                  }
                                  .btn-primary a:hover {
                                    background-color: #34495e !important;
                                    border-color: #34495e !important;
                                  }
                                }
                                </style>
                              </head>
                              <body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
                                <table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;">
                                  <tr>
                                    <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
                                    <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;">
                                      <div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">
                            
                                        <!-- START CENTERED WHITE CONTAINER -->
                                        <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">Sign up notification mail</span>
                                        <table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;">
                            
                                          <!-- START MAIN CONTENT AREA -->
                                          <tr>
                                            <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;">
                                              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                                                <tr>
                                                  <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">
                                                    <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Thank you for Signing up!</p>
                                                    <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Your account has been created but you will need to verify your email before trading!
                                                  </p>
                                                    <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">
                                                      <tbody>
                                                        <tr>
                                                          <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                                                              <tbody>
                                                                <tr>
                                                                  <td style="font-family: sans-serif; font-size: 14px; vertical-align: top; background-color: #3498db; border-radius: 5px; text-align: center;"> <a href="http://www.fxtraderoptions.com/verify.php?email='.$email.'&hash='.$hash.'" target="_blank" style="display: inline-block; color: #ffffff; background-color: #3498db; border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-transform: capitalize; border-color: #3498db;">Verify Email</a> </td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                            
                                        <!-- END MAIN CONTENT AREA -->
                                        </table>
                            
                                        <!-- START FOOTER -->
                                        <div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;">
                                          <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                                            <tr>
                                              <td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">
                                                <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">FxOptions Trading Platform</span>
                                    
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">
                                                Powered by <a href="http://htmlemail.io" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;">HTMLemail</a>.
                                              </td>
                                            </tr>
                                          </table>
                                        </div>
                                        <!-- END FOOTER -->
                            
                                      <!-- END CENTERED WHITE CONTAINER -->
                                      </div>
                                    </td>
                                    <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
                                  </tr>
                                </table>
                              </body>
                            </html>';

                            /**
                            * This example shows sending a message using PHP's mail() function.
                            */
                          
                            $subject = 'Mini_Class Sign Up | Verification';
                            
                            //Create a new PHPMailer instance
                            $mail = new PHPMailer;
                            
                            //SMTP settings
                            $mail->isSMTP();
                            $mail->Host = 'localhost';
                            $mail->Port = 25;
                            $mail->SMTPAuth = true;
                            $mail->Username = 'agughalamdavis@yahoo.com';
                            $mail->Password = '';

                            //Set who the message is to be sent from
                            $mail->setFrom('agughalamdavis@yahoo.com', 'Mini_Class');
                            //Set an alternative reply-to address
                            $mail->addReplyTo('agughalamdavis@yahoo.com', 'Mini_Class');
                            //Set who the message is to be sent to
                            $mail->addAddress($email);
                            //Set the subject line
                            $mail->Subject = $subject;
                            //Read an HTML message body from an external file, convert referenced images to embedded,
                            //convert HTML into a basic plain-text alternative body
                          // $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
                          //body
                          $mail->isHTML(true);
                          $mail->Body = $body;
                            //Replace the plain text body with one created manually
                            $mail->AltBody = strip_tags($body);
                            //Attach an image file
                          // $mail->addAttachment('images/phpmailer_mini.png');
                            //send the message, check for errors
                            if (!$mail->send()) {
                                echo "Mailer Error: " . $mail->ErrorInfo;

                                header('Location: login.php') ;

                                $_SESSION['register_message'] = 'Registration Successful, Please check your mail to verify your 
                                account before you can login';

                                }
                            } else {
                                 
                                //the above will go here. I am just testing.
                              
                              
                          }         
                    
                } 

            } 

            /* this will not work now because i dont have settings for SMTP because we have not hosted so please bear with me */
            public function VerifyUser($hash, $email){
                $sql = "SELECT * FROM users WHERE email = '$email' and hash = '$hash' and status = 0";
                $query = $this->db->query($sql);
                $rows = mysqli_num_rows($query);

                if($rows == 1){


                    $update_sql = "UPDATE users SET status = 1 where email = '$email' and hash = '$hash'";

                    if($query = $this->db->query($update_sql)){

                        $message = 'Your account has been activated successfully. 
                        You can proceed to log in now';

                        return $message;

                        }   

                }else{

                    $message = 'Invalid Activation Link. Please follow the email sent to you. 
                    If you didn\'t receive any mail, Please contact support';

                    return $message;

                }

            }

            //Method to login Users
            public function UserLogin($email, $password){
                $errors = array();
                $message = '';

               

                //check if email exists
                $sql = "SELECT * FROM users WHERE email = '$email' and status = 1";
                $query = $this->db->query($sql);
                $UserDetails = mysqli_fetch_assoc($query);
                $count = mysqli_num_rows($query);

                if($count < 1){

                    $errors[] = 'Incorrect Email';

                }else{
                    if(!password_verify($password, $UserDetails['password'])){
                        $errors[] = "Incorrect Password";
                    }
                }

                //check for errors
                if (!empty($errors)) {

                    return $errors;
                    
                }else{
                    //log user in
                    $user_id = $UserDetails['user_id'];
                
                    $_SESSION['User'] = $user_id;
                    $_SESSION['success_flash'] = "You are logged in successfully.";
                    $_SESSION['id_number'] = $UserDetails['id_number'];
                    $person = $UserDetails['role'];
                    

                    if($person == 'student'){

                      header('Location: student-area/dashboard.php');

                    }else{

                    
                      header('Location: teacher-area/dashboard.php');

                    }
                    
                }

            }


            

        }

    

?>
