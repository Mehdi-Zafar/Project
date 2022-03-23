<?php
include('connect.php');
$heading = $_POST['heading'];
$description = $_POST['description'];

if (isset($_POST['upload'])) {

    // Get name of images
    $Get_image_name = $_FILES['image']['name'];

    // image Path
    $image_Path = "images/" . basename($Get_image_name);

    $sql = "INSERT INTO cards2 (Heading, Description, Picture) VALUES ('$heading','$description','$Get_image_name')";

    // Run SQL query
    mysqli_query($con, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $image_Path)) {
        echo "<script>alert('New card added successfully!')</script>";
        echo "<script>location='index.php'</script>";
    } else {
        echo "<script>alert('Failed to add a new card!')</script>";
        echo "<script>location='about.php'</script>";
    }
}



?>






<!-- // while ($row = mysqli_fetch_array($image_details)) {

// echo "<img src='images/".$row[' imagename']."'>";

// } -->