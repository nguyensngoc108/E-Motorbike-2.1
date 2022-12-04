<?php
  session_start();

  

  if(isset($_POST['btnsignin']) == true) {
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
      // echo "Chào " . $_SESSION['login_Fullname'];
      header('Location: http://localhost:3000/iug-mainpage.php');
      exit();
    }
    else { ?>
      <i><center>Your account or password does not exist</center></i>
      <?php
        header('Location: http://localhost:3000/iug-signin-ag.php');
        exit();
      }

  }
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

<br>
<br>
<br>

<h1><center><strong><span style = "font-family:'LEMON MILK Medium', LEMON MILK, Serif">INTERNATIONAL ULTRA GARAGE</span></strong></h1></center>
<h6><center><span style = "font-family:'LEMON MILK', LEMON MILK, Serif">Web Portal for Motor Servicing At Home</span></h6></center>
<h6><center><span style = "font-family:'Raleway SemiBold', Raleway, Serif">-Sign in-</span></center></h6>

<form style="width: 500px; height: 550px" class="border border-primary border-5 rounded-5 m-auto p-5" method="post">
<center><i>You have successfully changed your password!</i></center>
</br>
  <div class="form-floating mb-3">
    <input value="<?php if(isset($Account) == true) echo $Account; ?>" type="text" class="form-control" id="Account" name="Account" placeholder="Account", autocomplete="new-Account">
    <label for="Account">Account</label>
  </div>

  <div class="form-floating mb-3">
    <input value="<?php if(isset($Password) == true) echo $Password; ?>" type="password" class="form-control" id="Password" name ="Password" placeholder="Password", autocomplete="new-Password">
    <label for="Password">Password</label>
  </div>
  <i><center><a href="http://localhost:3000/forgottenpass.php">Forgotten password?</a></center></i>

  <!-- <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="Remember" name = "Remember">
      <label class="form-check-label" for="Remember">Remember me</label>
  </div> -->
</br>
  <center><button id="btnsignin" name="btnsignin" font-size:medium;
  font-size:medium ; style="font-family:'Raleway SemiBold', Raleway, Serif; height:40px; width:350px" 
  type="submit" class="btn btn-primary">Sign in</button><center>
</form>

<center><p>_____________________________________________</p></center>

  <a font-size:medium; style="font-family:'Raleway SemiBold', Raleway, Serif; height:40px; width:150px" class="btn btn-success" href="http://localhost:3000/iug-signup.php" role="button">Sign up</a>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IUG - Login</title>
</head>
<body>
  
</body>
</html>