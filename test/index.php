
<!doctype html>
<html lang="en">
  <head>
    <title>Signup</title>

    
<link href="css/signup1.css" rel="stylesheet">
    <link href="css/signup.css" rel="stylesheet">
    
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method = "post" action = "signup.php" onsubmit="return validation();">
    
    
    <img class="mb-4" src="https://skill-lync.com/images/header_logo.png" alt="" width="150" height="30">
    <h1 class="h3 mb-3 fw-normal"> PLEASE SIGNUP</h1>

    <div class="form-floating">
      <input type="text" name = "u_name" id='uname' class="form-control"  placeholder="Your Name" >
      <label>Name</label>
    </div>
    <div class="form-floating">
      <input type="email"  name = "email_add" class="form-control"  placeholder="name@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
      <label>Email address</label>
    </div>
    <div class="form-floating">
      <input type="password"  name = "pswd" id="pswd" class="form-control"    placeholder="password"  required>
      <label>Password</label>
    </div>
    <div class="form-floating">
      <input type="password"  name = "cn_pswd" id="cn_pswd" class="form-control"    placeholder="Confirm-password"  required>
      <label>Confirm-Password</label>
    </div>
    <div class="form-floating">
      <input type="tel" name = "phone" class="form-control" placeholder="Phone" pattern="[0-9]{10}" required>
      <label >Phone</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Signup</button>
    
  </form>
</main>
  </body>
  <script>
    function validation(){
      var pswd=document.getElementById('pswd').value;
      var cn_pswd=document.getElementById('cn_pswd').value;
      if(pswd!=cn_pswd)
      {
        alert("Password Not Matched")
        return false;
      }
      else{
        return true;
      }
      
      
    }
    </script>
</html>
