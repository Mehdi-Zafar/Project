<?php
include('connect.php');
$ids = mysqli_query($con, "SELECT * from cards2");
$row = mysqli_fetch_array($ids, MYSQLI_ASSOC);
$count = mysqli_num_rows($ids);
$result = $con->query("SELECT Picture FROM cards ORDER BY id DESC");
?>
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
  <title>🏠 Real Estate</title>
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
  <!-- <div class="homepage">
  <img class="homeimg" src="https://source.unsplash.com/random/1400x500/?hands" alt="Black and White">
  <button id="readmore">Read More</button>
</div> -->
  <br>
  <div>
    <?php for ($i = 1; $i < $count + 1; $i++) : ?>
      <div class="card">
        <img src="<?php $img = mysqli_query($con, " SELECT Picture FROM cards2 where Card_id = '$i'");
                  while ($row = mysqli_fetch_array($img)) {
                    $image = $row['Picture'];
                    echo "images\\$image";
                  } ?>" alt="" style=" width: 100%; height: 200px;">
        <h2><b><?php $heading = mysqli_query($con, " SELECT Heading FROM cards2 where Card_id = '$i'");
                while ($row1 = mysqli_fetch_array($heading)) {
                  $head = $row1[0];
                  echo "$head";
                } ?></b></h2>
        <p><?php $description = mysqli_query($con, " SELECT Description FROM cards2 where Card_id = '$i'");
            while ($row2 = mysqli_fetch_array($description)) {
              $desc = $row2[0];
              echo "$desc";
            } ?></p>
        <button onclick="func3()">Click Me!</button>
      </div>
    <?php endfor ?>
  </div>
  </div>
  <a href="#navbar-brand" class="backtotop">Back to top</a>
  <footer>
    <h3>Copyright 2022 Real Estate</h3>
  </footer>
  <script>
    function func1() {
      window.location.href = "SignIn.php";
    }

    function func2() {
      window.location.href = "SignUp.php";
    }

    function func3() {
      alert("You clicked a button!");
    }
  </script>
</body>

</html>