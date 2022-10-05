

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="style1.css">
  </head>



  <body>
    <?php require 'partials/_nav.php'?>
    <form>
      <?php 
      $server = "localhost";
      $username = "root";
      $password ="";
      $dbname ="info";

      $conn =mysqli_connect($server , $username , $password , $dbname);

      if(isset($_POST['login'])){

        if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['username']) && !empty($_POST['pname']) 
        && !empty($_POST['password']) && !empty($_POST['cpassword'])){

          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $username = $_POST['username'];
          $pname = $_POST['pname'];
          $password = $_POST['password'];
          $cpassword = $_POST['cpassword'];

          $query = "insert into form(fname,lname,username,pname,password,cpassword) values('$fname','$lname','$username','$pname','$password','$cpassword')";

          $run = mysqli_query($conn,$query) or die(mysqli_error());

          if($run){
            echo "Form Submitted";
          }else{
            echo "error";
          }
        }else{
          echo "All fields required";
        }
      }
      ?>

    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Register</span></div>
        <form action="#">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="First Name" name="fname" required>
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Last Name" name="lname" required>
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" required>
          </div>

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Phone Number" name="pname" required>
          </div>

          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required>
          </div>

          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" name="cpassword" required>
          </div>


          <!-- <div class="pass"><a href="#">Forgot password?</a></div> -->
          <div class="row button">
            <input type="submit" name="login" value="Login">
          </div>
          <!-- <div class="signup-link">Not a member? <a href="#">Signup now</a></div> -->
        </form>
      </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
      </form> 
       </body>
</html>