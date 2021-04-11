<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Bright Login</title>
    <meta content="https://i.imgur.com/TJVBH4d.jpg" property="og:image" />
    <link rel="stylesheet" href="../assets/styles/login.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
  </head>
  <body>
      
      <!-- *ALLE TEXT IN DE LOGIN PAGINA -->
      <h6>Sign in</h6>

      <form action="" method="POST">
        <div style="margin-bottom: 15px" class="textbox">
          <input type="text" id="name" placeholder="Username" name="name" />
          <span class="check-message hidden">Required</span>
        </div>

        <div style="margin-bottom: 15px" class="textbox">
          <input
            type="email"
            id="uname"
            placeholder="Email Address"
            name="ename"
          />
          <span class="check-message hidden">Required</span>
        </div>

        <div class="textbox">
          <input
            type="password"
            id="pname"
            placeholder="Password"
            name="pname"
          />
          <span class="check-message hidden">Required</span>
        </div>

        <div class="options">
          <label class="remember-me">
            <span class="checkbox">
              <input type="checkbox" />
              <span class="checked"></span>
            </span>
            Remember me
          </label>

          <a href="#" target="_blank">Forgot Your Password</a>
        </div>

        <input
          style="color: #e6e6e6"
          type="submit"
          value="Log In Now"
          class="login-btn"
          name="loginbtn"
          id="login-style"
          disabled
        />
        <div class="privacy-link">
          <span style="color:crimson;">
          <?php
          include "config.php";


          if(isset($_POST['loginbtn'])){

              $name = mysqli_real_escape_string($con,$_POST['name']);
              $uname = mysqli_real_escape_string($con,$_POST['ename']);
              $password = mysqli_real_escape_string($con,$_POST['pname']);


              if ($uname != "" && $password != "" && $name != ""){

                  $sql_query = "select count(*) as cntUser from users where email='".$uname."' and password='".$password."' and name='".$name."'";
                  $result = mysqli_query($con,$sql_query);
                  $row = mysqli_fetch_array($result);

                  $count = $row['cntUser'];

                  if($count > 0){
                      $_SESSION['ename'] = $uname;
                      $_SESSION['name'] = $name;
                      header('Location: ../index.php');
                  }else{
                      echo "Invalid username and password";
                  }
              }
          }
          ?>
          <br><br></span>
          <a href="signup.html">Create Account<br><br></a>
          <a href="Ecosy_-_Privacy_policy.pdf" target="_blank">Privacy Policy</a>
        </div>
      </form>
    </div>

    <!-- *LOGIN BUTTON KLEUR VERRANDERING -->
    <script type="text/javascript">
      $(".textbox input").focusout(function () {
        if ($(this).val() == "") {
          $(this).siblings().removeClass("hidden");
          $(this).css("background", "#554343");
        } else {
          $(this).siblings().addClass("hidden");
          $(this).css("background", "#484848");
        }
      });

      $(".textbox input").keyup(function () {
        var inputs = $(".textbox input");
        if (inputs[1].value.length > 7 && inputs[2].value.length > 7) {
          $(".login-btn").attr("disabled", false);
          $(".login-btn").addClass("active");
        } else {
          $(".login-btn").attr("disabled", true);
          $(".login-btn").removeClass("active");
        }
      });
    </script>
  </body>
</html>