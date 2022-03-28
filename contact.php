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
  <title>🏠 Real Estate | Contact</title>
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
        <button class="SignIn" onclick="func1()">Sign In</button>
        <button class="SignUp" onclick="func2()">Sign Up</button>
      </ul>
    </nav>
  </div>
  <h2 style="display: inline;">Contact</h2>
  <div>
    <img class="phone" style="vertical-align: middle;" src="images\phone.jpg" alt="">
    <span class="contactdesc">Call us: 033234935331</span>
  </div>
  <div>
    <img class="handshake" style="vertical-align: middle;" src="images\handshake.jpg" alt="">
    <span class="contactdesc">Visit Us: B-34, PECHS, Karachi</span>
  </div>
  <script>
    function func1() {
      window.location.href = "SignIn.php";
    }

    function func2() {
      window.location.href = "SignUp.php";
    }
  </script>
</body>
<footer>
  <h3>Copyright &copy; 2022 Real Estate</h3>
</footer>

</html>