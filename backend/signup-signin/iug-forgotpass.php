<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

$err="";
    if (isset($_POST['changepassword']) == true) {
        $Email = $_POST['Email'];
        $conn = new PDO("mysql:host = localhost; dbname=datamanage; charset=utf8", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM users WHERE Email = ?";
        $st = $conn->prepare($sql);
        $st->execute([$Email]);
        $count = $st->rowCount();
        // echo $count;
        if ($count == 0) {
            $err="Your email has not been used to register for an account!";
            header('Location: http://localhost:3000/iug-forgotpass-ag.php');
        }
        else {
            echo $Verification = (rand(0,999999));
            $sql = "UPDATE users SET Password = ?, Verification =? WHERE Email = ?";
            $st = $conn->prepare($sql);
            $st->execute([$Verification, $Verification, $Email]);
            

            require 'PHPMailer\src\PHPMailer.php';
            require 'PHPMailer\src\Exception.php';
            require 'PHPMailer\src\SMTP.php';

            // $vocative;
            // if($Gender == "Male") {
            //     $vocative = "Mr.";
            // }
            // else {
            //     $vocative = "Ms.";
            // }
            
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->isSMTP();                                     //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'noreply.iug@gmail.com';                     //SMTP username
                $mail->Password   = 'zlhwuoqqbbwxxkaz';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('from@example.com', 'INTERNATIONAL ULTRA GARAGE');
                $mail->addAddress($Email);     //Add a recipient
                

                $message= "Please do not disclose the code to anyone, including our staff. Your verification code is: '$Verification'.
                
                This is an automated email, please do not reply in any way.
                Have a nice day.
                ";


                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Change password [MOTOR SERVICING AT HOME]!';
                $mail->Body = $message;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                // echo 'Message has been sent';
                echo "<script>document.location = 'iug-signin-verification.php';</script>";
            } catch (Exception $e) {
                //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                header('Location: http://localhost:3000/iug-forgotpass-ag.php');
            }

            
        }
    }
?>
<br>
<br>
<br>
<br>
<h1><center><strong><span style = "font-family:'LEMON MILK Medium', LEMON MILK, Serif">INTERNATIONAL ULTRA GARAGE</span></strong></h1></center>
<h6><center><span style = "font-family:'LEMON MILK', LEMON MILK, Serif">Web Portal for Motor Servicing At Home</span></h6></center>
<h6><center><span style = "font-family:'Raleway SemiBold', Raleway, Serif">-Change password-</span></h6></center>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">



<form style="width: 500px; height: 300px" class="border border-danger border-5 rounded-5 m-auto p-5" method="post">
<h4><span style ="font-family:'Raleway Bold', Raleway, Serif">DETERMINE YOUR IDENTITY</span></h4>

<br>
  <div class="form-floating mb-3">
    <input value="<?php if(isset($Email) == true) echo $Email?>" type="email" class="form-control" id="Email" name="Email" aria-describedby="EmailRemind", placeholder ="Email">
    <label for="Email">Email</label>
  </div>
  

  <br>
  <center><button id="changepassword" name="changepassword" fontsize:medium
  style="font-family:'Raleway SemiBold', Raleway, Serif; height:40px; width:350px" 
  type="submit" class="btn btn-danger">Send Verification</button></center>


</form>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IUG - Forgotten password</title>
</head>
<body>
    
</body>
</html>