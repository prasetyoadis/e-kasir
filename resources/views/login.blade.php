<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container" id="container">
    <!-- LEFT : FORM -->
    <div class="form-wrapper">
      <div class="form-container sign-in">
        <form>
          <h1>Sign In</h1>
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <a href="#">Forgot Password?</a>
          <button>Login</button>

          <p class="switch">
            Don’t have an account?
            <span id="toRegister">Sign Up</span>
          </p>
        </form>
      </div>

      <div class="form-container sign-up">
        <form>
          <h1>Create Account</h1>
          <input type="text" placeholder="Name" />
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <button>Register</button>

          <p class="switch">
            Already have an account?
            <span id="toLogin">Sign In</span>
          </p>
        </form>
      </div>
    </div>

    <!-- RIGHT : IMAGE / INFO -->
    <div class="right-panel">
      <div class="panel-content">
        <img src="img/dashboard.png" alt="Dashboard" />
        <h2>The easiest way to manage your portfolio</h2>
        <p>Join the Conto community now</p>
      </div>
    </div>
  </div>

  <script src="js/main.js"></script>
</body>

</html>