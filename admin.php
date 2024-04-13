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
      margin-left:-150px;
     font-size:2rem;
    }
    label, input {
      display: block;
      padding:2px 30px;
      margin-bottom: 10px;

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
    <h2>Adminstrator</h2>
    <form method="post" action="">
      <label>Username:</label>
      <input type="text" name="username" required>
      <label>Password:</label>
      <input type="password" name="password" required>
      <input type="submit" value="Authenticate" >
  </center>
    </form>
</div>
 <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cpp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Validate user input
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username and password match database
    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
      http_response_code(302); //clears already sent output
    echo '<script>';
    echo 'window.location.href = "change.php"';
    echo '</script>';

    } else {
        // Login unsuccessful, display error message
         echo '<script>';
        echo 'alert("Invalid username or password...!");';
        echo '</script>'; 
    }
}

mysqli_close($conn);
        ?>
</body>
</html>