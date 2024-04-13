<?php

// Set timezone to GMT+5:30
date_default_timezone_set('Asia/Kolkata');

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cpp";

 // Create connection
$con = mysqli_connect($servername,$username,$password,$dbname);

// // Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_GET['finger_id'])) {
// // Get finger ID and current date/time
     $finger_id = $_GET['finger_id'];
     $teacher_id= intval($_GET['teacher_id']);
   //  print($teacher_id);
// $teacher_id="101";

$sub  = array('101' => 'MAN','102' => 'CND','103' => 'MEC','104' => 'VWV','105' => 'ETE' );
$time_slot = [1000,1100,1115,1215,1315,1400,1500,1600,1615,1715,1815];
if (($teacher_id>=101) && ($teacher_id <=105)) {
    foreach ($sub as $key => $value) {
        if ($teacher_id==$key) {
            $subject = $value;
        }
    }
}

    // $finger_id = "01";
    

    $date = date('d-m-Y');
    //$time = date('H:i');
     $time = date('Hi');
     //print_r(gettype($time));
     $day = date('l');

     $temp_slot=1 ;

    $time_int = intval($time);
   //$time_int = 1000;
   // print_r(gettype($time_int));
    //print( $time_int);
   $slot = 0;

for ($i=0; $i < count($time_slot)-1; $i++) { 
    $system_start = True;

    if($time_slot[$i] == (1100)||$time_slot[$i] == (1315)||$time_slot[$i] == (1600) )
    {
        continue;

    }

    if ( $time_int>=$time_slot[$i] &&  $time_int <$time_slot[$i+1]) {
          
          $slot = $temp_slot;  
        
    }

   $temp_slot++;
}




 //if(isset($_GET['teacher_id']))
// if (isset($teacher_id)) 
//  {
//     foreach ($sub as $key => $value) {

//         if ($key==$teacher_id) {
//             $subject = $value;
//         }
//     }

//  }


    
// Check if data was received from NodeMCU
 //if(isset($_GET['student_id'])) {
    

//     // Insert data into database
//     $sql = "INSERT INTO finger_logs (finger_id, date_time) VALUES ('$finger_id', '$date_time')";


if(($slot != 0)&&(!($finger_id >= 101 &&  $finger_id<= 105) ))
{

     $sql = "INSERT INTO present_table (id, subject, datee, dayy, timee) VALUES ('$finger_id','$subject','$date','$day','$slot')";
     $query_run = mysqli_query($con,$sql);

}




//}



//     if ($conn->query($sql) === TRUE) {
//         echo "Data inserted successfully";
//     } else {
//         echo "Error inserting data: " . $conn->error;
//     }
    
//     // Reset autoincrement if all data is deleted
//     $result = $conn->query("SELECT COUNT(*) AS count FROM finger_logs");
    
//     $count = $result->fetch_assoc()['count'];
//     if ($count == 0) {
//         $conn->query("ALTER TABLE finger_logs AUTO_INCREMENT = 1");
//     }
    
} else {
    echo "No data received from NodeMCU";
}

// // Close database connection
      $con->close();

?>
