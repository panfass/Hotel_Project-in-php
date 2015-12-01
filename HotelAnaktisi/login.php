<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">


    <title>Login/Sign-In</title>
    
    
    <link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="logmod">
  <div class="logmod__wrapper">
    <span class="logmod__close">Close</span>
    <div class="logmod__container">
      <ul class="logmod__tabs">
        <li data-tabtar="lgm-2"><a href="#">Login</a></li>
        <li data-tabtar="lgm-1"><a href="#">Sign Up</a></li>
      </ul>
      <div class="logmod__tab-wrapper">
      <div class="logmod__tab lgm-1">
        <div class="logmod__heading">

<form action="add_new_user.php" id="registerform" method="get">
            <fieldset>
                <legend>Register Form</legend>
				<div>
                    <input type="text" name="username" placeholder="Username"/>
                </div>
				<div>
                    <input type="password" name="password" placeholder="Password"/>
                </div>
                <div>
                    <input type="text" name="first_name" placeholder="First Name"/>
                </div>
				<div>
                    <input type="text" name="last_name" placeholder="Last Name"/>
                </div>
				<div>
                    <input type="text" name="email" placeholder="Email"/>
                </div>
                <div>
                    <input type="text" name="location" placeholder="Location"/>
                </div>
				<div>
                    <input type="text" name="phone" placeholder="Phone"/>
                </div>
                <input type="submit" name="submit" value="Register"/>
            </fieldset>    
        </form>
        </div> 
              <div class="connect__icon">
               
              </div>
              <div class="connect__context">
                <span>By clicking Register You accept our Terms! <strong>Anaktisi 5* HOTELS</strong></span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your email and password <strong>to sign in</strong></span>
        </div> 
        <div class="logmod__form">
<form action="authenticate.php" id="loginform" method="get">
            <fieldset>
                <legend>Login Form</legend>
				<div>
                    <input type="text" name="login_usr" placeholder="Username"/>
                </div>
				<div>
                    <input type="password" name="login_pswd" placeholder="Password"/>
                </div>
				<input type="submit" name="submit" value="Login"/>
			</fieldset> 
		</form>
              </div>
            </div>
 
          </form>
        </div> 
        <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a href="#" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Facebook</strong></span>
              </div>
            </a>
            <a href="#" class="connect googleplus">
              <div class="connect__icon">
                <i class="fa fa-google-plus"></i>
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Google+</strong></span>
              </div>
            </a>
          </div>
        </div>
          </div>
      </div>
    </div>
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
