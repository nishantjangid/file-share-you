<?php
    /* Template Name: login */
?>
<?php
// echo DB_NAME;
    include("front-header.php");
?>

<section>
    <div class="container">
      <div class="row justify-content-center my-5">
        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
          <div class="row">
            <div class="col text-center text-white">
              <h1>Login</h1>
            </div>
          </div>
            <form id="loginForm" method="post">
                <div id="message"></div>
              <div class="row align-items-center">
                <div class="col mt-4">
                  <input type="text" class="form-control" placeholder="Username / email" name="username" required>
                </div>
              </div>
              <div class="row align-items-center mt-4">
                <div class="col">
                  <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
              </div>                
              <div class="row justify-content-start mt-4">
                <div class="col text-center">
                  <button class="btn btn-primary mt-4" type="submit" id="login" name="login">Login</button>
                </div>
              </div>
            </form>
        </div>
      </div>
    </div>
</section>
<?php
include("front-footer.php");
?>

<script>
    
// var token = localStorage.getItem("token");
// console.log(token);
// if(token != null){
//     window.location.href = "https://ramlogics.com/Defi_Hertz/";
// }
</script>