<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
  <style>
    nav li a.navbar-brand:hover {
      text-decoration: none;
    }
  </style>
  <title>🏠 Real Estate | Sign In</title>
</head>

<body>
  <div>
    <nav>
      <ul>
        <li>
        <li>
          <a class="navbar-brand" href="#">🏠 Real Estate</a>
        </li>
        <li>
          <a class="home" href="index.php">Home</a>
        </li>
        <li>
          <a class="about" href="about.php">About</a>
        </li>
        <li>
          <a class="contact" href="contact.php">Contact</a>
        </li>
        </li>
      </ul>
    </nav>
  </div>

  <center>
    <div>
      <form class="SignInForm" action="si.php" method="post">
        <h2><strong>Welcome to Sign In</strong></h2>
        <li><input type="email" placeholder="Enter your email" name="email" required></li>
        <br><br>
        <li><input type="password" placeholder="Enter your password" name="password" required></li>
        <br><br>
        <center><button>Sign In</button></center>
        <h4>Create new account? <a href="SignUp.php">Sign Up</a></h4>
      </form>
    </div>
  </center>
</body>
<footer>
  <h3>Copyright &copy; 2022 Real Estate</h3>
</footer>

</html>