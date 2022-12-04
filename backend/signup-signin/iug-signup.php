<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    //print_r($_POST);
    $err = "";
    $error = "";

    if(isset($_POST['btnsignup']) == true) {
       //print_r($_POST); 
    $Account = $_POST['Account'];
    $Password = $_POST['Password'];
    $Fullname = $_POST['Fullname'];
    $Gender = $_POST['Gender'];
    $Birth = $_POST['Birth'];
    $Email = $_POST['Email'];
    $Telephone = $_POST['Telephone'];
    $National = $_POST['National'];


    if (strlen($Account)<6 && strlen($Account)!=0) {
        $err = "Account: Too short!!</br>"; 
    }
    if (strlen($Account)==0) {
        $err.= "Account: Cannot be left blank!!</br>";
    }
    if (strlen($Password)<6 && strlen($Password)!=0) {
        $err.= "Password: Too short!!</br>";
    }
    if (strlen($Password)==0) {
        $err.= "Password: Cannot be left blank!!</br>";
    }
    if (strlen($Fullname)==0) {
        $err.= "Fullname: Cannot be left blank!!</br>";
    }

    if ($Gender != "Male" && $Gender != "Female") {
        $err.= "Gender: Please choose the correct one!!</br>";
    }

    if (strlen($Email)==0) {
        $err.= "Email: Cannot be left blank!!</br>";
    }
    if (strlen($Telephone)==0) {
        $err.= "Telephone: Cannot be left blank!!";
    }

    
    
    // echo "Account: $Account, Password: $Password, $Fullname, $Gender, $Birth, $Email, $National $Telephone";

        if($err == "") {
            $conn = new PDO("mysql:host = localhost; dbname=datamanage; charset=utf8", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM users WHERE Account=?";
            $st = $conn->prepare($sql);
            $st->execute([$Account]);
            //check thu tai khoan co localhost
            $result = $st->fetchAll(\PDO::FETCH_ASSOC);
            if (count($result) != 0) {
                echo "<script>
                    if (confirm('This account has already existed')) {
                        window.location.href = 'http://localhost:3000/iug-signup.php';
                    }
                </script>";
                exit();
            }

            $conn = new PDO("mysql:host = localhost; dbname=datamanage; charset=utf8", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM users WHERE Email=?";
            $st = $conn->prepare($sql);
            $st->execute([$Email]);
            //check thu tai khoan co localhost
            $result = $st->fetchAll(\PDO::FETCH_ASSOC);
            if (count($result) != 0) {
                echo "<script>
                    if (confirm('The email you used to register your account is already in use by another account!')) {
                        window.location.href = 'http://localhost:3000/iug-signup.php';
                    }
                </script>";
                exit();
            }

            $conn = new PDO("mysql:host = localhost; dbname=datamanage; charset=utf8", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM users WHERE Telephone=?";
            $st = $conn->prepare($sql);
            $st->execute([$Telephone]);
            //check thu tai khoan co localhost
            $result = $st->fetchAll(\PDO::FETCH_ASSOC);
            if (count($result) != 0) {
                echo "<script>
                    if (confirm('The phone number you used to register your account is already used by another account')) {
                        window.location.href = 'http://localhost:3000/iug-signup.php';
                    }
                </script>";
                exit();
            }

            $conn = new PDO("mysql:host = localhost; dbname=datamanage; charset=utf8", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO users SET Account =?, Password =?, Fullname =?, Birth =?, Gender =?, Email =?, National =?, Telephone =?, Verification =?";
            $st = $conn->prepare($sql);
            $st->execute([$Account, $Password, $Fullname, $Birth, $Gender, $Email, $National, $Telephone, 0]);
            // header('Location: sendmail.php');
            //dua tai khoan vao localhost

            //send email
            require 'PHPMailer\src\PHPMailer.php';
            require 'PHPMailer\src\Exception.php';
            require 'PHPMailer\src\SMTP.php';

            $vocative;
            if($Gender == "Male") {
                $vocative = "Mr.";
            }
            else {
                $vocative = "Ms.";
            }
            
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
                

                $message= "Dear $vocative $Fullname, you have successfully registered for a car engine maintenance service account of company INTERNATIONAL ULTRA GARAGE.
                We will use your registered '$Email' to notify about promotions and events from now until later. 
                
                If there are any changes or problems, please contact email: 'dtthuan.test@gmail.com' to get help as soon as possible.
                
                This is a private account, you should not trust any website that asks for an account password.
                
                Thank you for trusting and choosing to become our member.
                
                If action is not taken by you, click here: http://localhost:3000/iug-needhelp.php
                .This is an automated email, please do not reply in any way.
                Have a nice day.
                ";


                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Account registration [MOTOR SERVICING AT HOME] successful!';
                $mail->Body = $message;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo 'Message has been sent';
                header('Location: http://localhost:3000/iug-signin.php');
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }    

            
        }
    }


?>


<br>
<br>
<h1><center><strong><span style = "font-family:'LEMON MILK Medium', LEMON MILK, Serif">INTERNATIONAL ULTRA GARAGE</span></strong></h1></center>
<h6><center><span style = "font-family:'LEMON MILK', LEMON MILK, Serif">Web Portal for Motor Servicing At Home</span></center></h6>
<h6><center><span style = "font-family:'Raleway SemiBold', Raleway, Serif">-Create New Account-</span></center></h6>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

<form style="width: 500px" class="border border-success border-5 rounded-5 m-auto p-5" method="post">


<i><p><center>Your information</center></p></i>

<form class="row g-3 needs-validation" novalidate>


    <div class="form-floating mb-3">
        <input onblur="checkacc(this)" value="<?=isset($Account)? $Account:"" ?>" type="text" class="form-control" id="Account" name="Account" placeholder="Account", autocomplete="new-Account">
        <label for="Account">Account</label>
        <em id="ErrAccount" class="form-text text-danger pl-5"></em>
        <div id="ValAccount" class="form-text text-primary pl-5"></em>
    </div>
    <br>

    <div class="form-floating mb-3">
        <input value="<?=isset($Password)? $Password:"" ?>" type="Password" class="form-control" id="Password" name="Password" placeholder="Password", autocomplete="new-password", required>
        <label for="Password">Password</label>
    </div>

    <div class="form-floating mb-3">
        <input value="<?=isset($Fullname)? $Fullname:"" ?>" type="text" class="form-control" id="Fullname" name="Fullname" placeholder="Fullname">
        <label for="Fullname">Fullname</label>
        <div id="ErrFullname" class="form-text"></div>
    </div>
    
    
    <div class="form-floating mb-3">
        <input value="<?=isset($Birth)? $Birth:"" ?>" type="date" class="form-control" id="Birth" name="Birth">
        <div id="ErrBirth" class="form-text"></div>
        <label for="Birth">Birthday</label>
    </div>

    <div class="form-floating">
        <select class="form-select" id="Gender" name="Gender" aria-label="Your gender...">
            <option selected>Open this select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
    </select>
    <label for="floatingSelect">Your gender: </label>
</div>

<i><p><center>We may contact you via...</center></p></i>
        
<div class="form-floating mb-3">
    <input onblur="checkem(this)" value="<?=isset($Email)? $Email:"" ?>" type="email" class="form-control" id="Email" name="Email" placeholder="email.vn@example.com">
    <label for="Email">Email</label>
    <em id="ErrEmail" class="form-text text-danger pl-5"></em>
    <div id="ValEmail" class="form-text text-primary pl-5"></div>
</div>

    <div class="form-floating mb-3">
        <select class="form-select" id="National" name="National" aria-label="Choose your national...">
        <option selected>Open this select National</option>
        <option value="0">...</option>
        <option value="+84">Vietnam: +84</option>
    </select>
    <label class="font" for="floatingSelect">Your national: </label>
</div>
    


    <div class="form-floating mb-3">
            <input onblur="checkno(this)" value="<?=isset($Telephone)? $Telephone:"" ?>" type="text" class="form-control" id="Telephone" name="Telephone" placeholder="Telephone">
            <em id="ErrTelephone" class="form-text text-danger pl-5"></em>
            <div id="ValTelephone" class="form-text text-primary pl-5"></div>
            <label for="Telephone">Telephone</label>
    </div>
</br>
        
</br>
<center><button id="btnsignup" name="btnsignup" font-size:medium; 
style="font-family:'Raleway SemiBold', Raleway, Serif; height:40px; width:350px" 
type="submit" class="btn btn-success">Sign up</button><center>
</br>

<?php
    if ($err != "") { 
?>
        <div class ="alert alert-danger"><?php echo $err ?></div>

<?php

    }
?>
<?php
    if ($error != "") { 
?>
        <div class ="alert alert-danger"><?php echo $error ?></div>

<?php

    }
?>
</form>

<script> 
    function checkacc(obj) {
        var Account = obj.value;
        var url = "http://localhost:3000/iug-signup-checkacc.php?Account=" + Account;
        fetch(url)
        .then(a => a.json())
        .then(account => {
            console.log(account)
            if(account.count>0) {
                document.getElementById('ErrAccount').innerText = "'"+ Account + "' " + "is already set by a user, please give it a different name!!";
            }
    
            else {
                document.getElementById('ErrAccount').innerText = "";
            }
            if(account.count!=1) {
                document.getElementById('ValAccount').innerText = "Valid account!";
            }
            else {
                document.getElementById('ValAccount').innerText = "";
            }
        })
    }
</script>

<script> 
    function checkem(obj) {
        var Email = obj.value;
        var url = "http://localhost:3000/iug-signup-checkem.php?Email=" + Email;
        fetch(url)
        .then(e => e.json())
        .then(email => {
            if(email.count>0) {
                document.getElementById('ErrEmail').innerText = "This email is already registered by another account, please enter another email!!";
            }
            else {
                document.getElementById('ErrEmail').innerText = "";
            }
            if(email.count!=1) {
                document.getElementById('ValEmail').innerText = "Valid email!!";
            }
            else {
                document.getElementById('ValEmail').innerText ="";
            }
        })
    }

</script>

<script> 
    function checkno(obj) {
        var Telephone = obj.value;
        var url = "http://localhost:3000/iug-signup-checkno.php?Telephone=" + Telephone;
        fetch(url)
        .then(n => n.json())
        .then(telephone => {
            if(telephone.count>0) {
                document.getElementById('ErrTelephone').innerText = "This telephone number is already registered by another account, please enter another number!!";
            }
            else {
                document.getElementById('ErrTelephone').innerText = "";
            }
            if(telephone.count!=1) {
                document.getElementById('ValTelephone').innerText = "Valid telephone number!!";
            }
            else {
                document.getElementById('ValTelephone').innerText ="";
            }
        })
    }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IUG - Sign up</title>
</head>
<body>
    
</body>
</html>
        