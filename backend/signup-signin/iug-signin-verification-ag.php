<?php
  session_start();

  

  if(isset($_POST['btnsignin']) == true) {
    $newPassword = $_POST['newPassword'];
    $Account = $_POST['Account'];
    $Password = $_POST['Password'];
    // echo $Account;
    $conn = new PDO("mysql:host = localhost; dbname=datamanage; charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM users WHERE Account =? AND Password =?";
    $st = $conn->prepare($sql);
    $st->execute([$Account, $Password]);
    if($st->rowCount() == 1) {
      $user = $st->fetch();
      $_SESSION['login_Fullname']  = $user['Fullname'];
      $_SESSION['login_Birth']     = $user['Birth'];
      $_SESSION['login_Gender']    = $user['Gender'];
      $_SESSION['login_Email']     = $user['Email'];
      $_SESSION['login_Telephone'] = $user['Telephone'];
      $_SESSION['login_Verification'] = $user['Verification'];
      // echo "Chào " . $_SESSION['login_Fullname'];
      // echo " passmoinhap " . $newPassword . " ";
      // echo "Verification: " . $user['Verification'] . " ";
      // echo "user['Password']: " . $user['Password'] . " ";

      $user['Password'] = $newPassword;
      $sql = "UPDATE users SET Password = ? WHERE Verification = ?";
      $st = $conn->prepare($sql);
      $st->execute([$_POST['newPassword'], $user['Verification']]);
      // header('Location: http://localhost:3000/changeyourpass.php');
      // echo "sau khi execute " . $user['Password'];
      header('Location: http://localhost:3000/iug-signin-newpass.php');
      exit();
    }
    else { ?>
      <!-- <i><center>Your account or password does not exist</center></i> -->
      <?php
        header('Location: http://localhost:3000/iug-signin-verification-ag.php');
        // exit();
      }

  }
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
<br>

<h1><center><strong><span style = "font-family:'LEMON MILK Medium', LEMON MILK, Serif">INTERNATIONAL ULTRA GARAGE</span></strong></h1></center>
<h6><center><span style = "font-family:'LEMON MILK', LEMON MILK, Serif">Web Portal for Motor Servicing At Home</span></h6></center>
<h6><center><span style = "font-family:'Raleway SemiBold', Raleway, Serif">-Create a new password-</span></center></h6>

<form style="width: 500px; height: 650px" class="border border-danger border-5 rounded-5 m-auto p-5" method="post">
<center><i>Verification...</i></center>
</br>
  <div class="form-floating mb-3">
    <input value="<?php if(isset($Account) == true) echo $Account; ?>" type="text" class="form-control is-invalid" id="Account" name="Account" placeholder="Account", autocomplete="new-Account">
    <label for="Account">Account</label>
    <em class="invalid-feedback">Double check your Account!</em>
  </div>

  <div class="form-floating mb-3">
    <input value="<?php if(isset($Password) == true) echo $Password; ?>" type="password" class="form-control is-invalid" id="Password" name ="Password" placeholder="Password", autocomplete="new-Password">
    <label for="Password">Verification code</label>
    <em class="invalid-feedback">Double check your Verification code!</em>
  </div>

  <div class="form-floating mb-3">
    <input value="<?php if(isset($newPassword) == true) echo $newPassword; ?>" type="password" class="form-control is-invalid" id="newPassword" name ="newPassword" placeholder="newPassword", autocomplete="new-Password">
    <label for="newPassword">New Password</label>
    <em class="invalid-feedback">Double check your Password!</em>
  </div>
  
  <!-- <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="Remember" name = "Remember">
      <label class="form-check-label" for="Remember">Remember me</label>
  </div> -->
<center><i>We have just sent you the password to log in with the email you registered</i></center>
</br>

  <center><button id="btnsignin" name="btnsignin" font-size:medium;
  font-size:medium ; style="font-family:'Raleway SemiBold', Raleway, Serif; height:40px; width:350px" 
  type="submit" class="btn btn-danger">Change my password</button><center>
</form>

<br>

<center><i>NOTES: PLEASE DON'T DISCLOSURE THE VERIFICATION CODE TO ANYONE EVEN OUR EMPLOYEES, TO AVOID TIMELY ATTACK TO YOUR ACCOUNT</i></center>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IUG - Login safe mode</title>
</head>
<body>
  
</body>
</html>