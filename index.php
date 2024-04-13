<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="">
<style type="text/css">
         :root
        {
                --bgcolor-1: #150734;
                --bgcolor-2: #0F2557;
                --maincolor: #000000;
                --btncolor: #0f2557;

        }

  .login1{
     
    width: 500px;
    border: 2px solid #ccc;
     margin: 150px auto;
    padding: 30px;
    border-radius: 15px;

   
    align-content: center;

    }
    h1{
        text-align: center;
        font-family: Comic Sans MS;
    }
    h2{
        font-family: Comic Sans MS;
        text-align: center;
        margin-bottom: 40px;
    }
    label{
        margin-left: 10px;
    }
    label, input {
      display: block;
      margin-bottom: 20px;
      margin-left: 165px;

    }
    input[type="submit"] {
      background-color: #0f2557;
      color: white;
      border: none;
      padding: 10px 10px;
      border-radius: 5px;
      cursor: pointer;
    display: block;
    border: 2px solid #ccc;
    width: 30%;
    margin: 10px auto;
      
    
    }
     </style>
</head>
<body>
<h1>Welcome To Government Polytechnic Ratnagiri</h1>
      <div class="login1">
    
    <h2>USER LOGIN</h2>
    <form method="post" action="">
      <label>Username:</label>
      <input type="text" name="username" required>
      <label>Password:</label>
      <input type="password" name="password" required>
      <input type="submit" value="LOGIN " onclick="">
  
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
       
        // Redirect to protected page
        header("Location: dashboard.php");
        //exit();
    } else {
        // Login unsuccessful, display error message
        echo '<script>';
        echo 'alert("Invalid username or password.");';
        echo '</script>';
    }
}

mysqli_close($conn);
        ?>
</body>
</html> 