<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <?php require 'partials/_navbar.php' ?>
</head>

<style type="text/css">

    :root
    {
        --bgcolor-1: #150734;
        --bgcolor-2: #0F2557;
        --maincolor: #000000;
        --btncolor: #0f2557;

    }

    .page-title{
        margin-left:27rem;
        margin-top:6rem;
        font-size:2.2rem;
        color:var(--bgcolor-1);
        border-bottom: 2px solid var(--bgcolor-1);
        width:7rem;

      }
/*login*/
      
   
    .login1{
     
    width: 500px;
    border: 2px solid #ccc;
    padding: 40px;
    margin:6rem auto;
    border-radius: 15px;

    }
    h2{
      text-align: center;
    margin-bottom: 40px;
     font-size:4rem;
    }
    label{
    margin-left:-100px;
     font-size:2rem;
    }
   
    label, input {
      display: block;
      margin-bottom: 10px;
      padding:2px 30px;

    }
    input[type="submit"] {
      background-color: #0f2557;
      color: white;
      border: none;
      font-size:1.5rem;
      margin-top:20px;
      padding: 1.2rem 4rem;
      border-radius: 5px;
      cursor: pointer;

    }
 
  </style>
</head>

<body>
  <div class="page-title">
    Admin
  </div>
<div class="login1">
  <center>
    <h2>Change Password</h2>
    <form method="post" action="">
      <label>Enter Password:</label>
      <input type="password" name="p1" required>
      <label>Retype Password:</label>
      <input type="password" name="rp1" required>
      <input type="submit" value="Change password" onclick="">
    </form>
    </center>
</div>

<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get the form data
    $password = $_POST['p1'];
    $retype_password = $_POST['rp1'];

    // Check if the passwords match
    if ($password === $retype_password) {

        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "", "cpp");

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Update the password for the 'admin' user
        $sql = "UPDATE login SET password='$password' WHERE username='admin'";

        if (mysqli_query($conn, $sql)) {
            echo '<script>';
            echo 'alert("Password Updated Successfully✔");';
            echo '</script>';

            echo '<script>';
            echo 'window.location.href = "index.php"';
            echo '</script>';

        } else {

            echo '<script>';
            echo 'alert("Error In Updating Password...!");';
            echo '</script>'; 
        }

        // Close the database connection
        mysqli_close($conn);

    } else {

        echo '<script>';
        echo 'alert("Password Mismatched!");';
        echo '</script>'; 
    }
}
?>


</script>
</body>
</html>