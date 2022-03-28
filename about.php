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

    a {
      font-size: 25px;
    }
  </style>
  <title>🏠 Real Estate | About</title>
</head>

<body>
  <div>
    <nav>
      <ul>
        <li>
        <li>
          <a class="navbar-brand" id="navbar-brand" href="#">🏠 Real Estate</a>
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
  <br>

  <center>
    <div>
      <form action="addcard.php" method="POST" enctype="multipart/form-data">
        <h2>Add a new card</h2>
        <li><input type="text" placeholder="Enter a heading" name="heading"></li><br><br>
        <li><input type="text" placeholder="Enter description" name="description"></li><br><br>
        <li><input type="file" name="image"></li><br><br>
        <button type="submit" name="upload">Submit</button>
      </form>
    </div>
  </center>


  <footer>
    <h3>Copyright &copy; 2022 Real Estate</h3>
  </footer>
  <script>
    function func1() {
      window.location.href = "SignIn.php";
    }

    function func2() {
      window.location.href = "SignUp.php";
    }
  </script>
</body>

</html>