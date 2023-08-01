<?php include('header.php') ?>
<br><br><br>
<div class="container">
    <div class="row">
       <div class="col-lg-6 col-md-6 col-sm-12">
            <img class="w-75" src="img/loginpage.png" alt="">
       </div>
       <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="log-txt">
        <h3>Log in</h3>
        </div>
          <div class="log-form" style="margin-top:70px;">
            <form action="">
                    <label for="Email" class="text-danger"><b>Email:</b></label> <br> <br>
                    <input class="form-control rounded-pill border border-danger border border-1 p-3" type="email" placeholder="enter your email" name="Email"> <br>
                    <label for="password" class="text-danger"> <b>Password:</b> </label> <br> <br>
                    <input class="form-control rounded-pill border border-danger border border-1 p-3" type="email" placeholder="enter your password" name="password"><br>
                    <div  class=" col-md-12 forgot-pass w-100 text-end"> 
                        <a class=" text-danger" href="">Forgot Password ?</a>
                    </div>
                    <div class="col-12">
					    <button class="btn btn-danger rounded-pill text-white p-2" type="submit" style="background-image: linear-gradient(#F45051, #FFBA36); width:238.32px">Login  </button>
					  </div>
            </form> <br>
            <p class="text-center"> Need an account? <a href="sign-up.php">Sign up</a></p>
          </div>
       </div>
    </div>
</div>

<?php include('footer.php') ?>