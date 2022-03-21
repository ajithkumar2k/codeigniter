<!doctype html>
<html lang="en">
  <head>
    <title>Login Page</title>

    
<link href="css/signup1.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <script src="js/jquery-3.6.0.min.js" ></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
  </head>
 
  <body class="text-center">
   
<main class="form-signin">
  <form method = "post" action =  "auth.php"> 
    <img class="mb-4" src="https://skill-lync.com/images/header_logo.png" alt="" width="150" height="30">
    <h1 class="h3 mb-3 fw-normal"> PLEASE LOGIN HERE</h1>
    <!-- <div> here echo the value </div> -->
    <!-- <div class="alert alert-success" role="alert"> YOUR SIGNUP SUCESSFULLY DONE  </div>  -->

    <div class="form-floating">
      <input type="email" name = "email_add"  class="form-control" placeholder="Phone">
      <label >Email</label>
    </div>

    <div class="form-floating">
      <input type="password"  name ="pswd"  class="form-control"  placeholder="password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
      <label>Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" > LOGIN </button>    
</form>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
