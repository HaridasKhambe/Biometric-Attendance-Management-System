<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
 <?php require 'partials/_navbar.php'?>

 <!-- Required TableExport dependencies -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

TableExport library -->
<!-- <script src="https://cdn.jsdelivr.net/npm/tableexport@5.2.0/dist/js/tableexport.min.js"></script> -->
 -->
 -->



<style type="text/css">


		:root
		{
				--bgcolor-1: #150734;
				--bgcolor-2: #0F2557;
				--maincolor: #000000;

		}


		.page-title{
				margin-left:27rem;
				margin-top:6rem;
				font-size:2.2rem;
				color:var(--bgcolor-1);
				border-bottom: 2px solid var(--bgcolor-1);
				width:8rem;

			}
	</style>

	<style type="text/css">
		.box-1 {

			margin-left:26rem;
			border:2px solid gray;
			width:100%;
			margin-top:3rem;
			height:4rem;

		}
		.box-1 h2
		{

			font-size:1.8rem;
			font-weight:500;
			padding:1rem;
			color:var(--bgcolor-1);

		}
		.box-1 h2:hover
		{
			color:white;
			background-color:var(--bgcolor-2);
			padding-left:5rem;
			transition: 0.5s;
		}

		.container
		{
			margin-left:26rem;

		}
		.btn-1
		{
			margin:auto;
			
		}
		.export
		{	
			margin-top:2rem;
		}
		.export button
		{
			background-color: #0f2557;
      		color: white;
      		border: none;
      		font-size:1.5rem;
     		margin-top:1.5rem;
     		padding: .6rem 3rem;
     		border-radius: 5px;
      		cursor: pointer;

		}

	/*	#reportTable .tableexport-button-group {
   			 display: none !important;
		}*/

	</style>

 <script type="text/javascript" src="table2excel.js"></script>

 <script type="text/javascript">


document.getElementById("exportBtn").addEventListener("click", function() {

  var table2excel = new Table2Excel();
  table2excel.export(document.querySelectorAll("reportTable"));
}

 </script>
</head>

<body>
	<div class="page-title">
		Reports
	</div>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card mt-5">
					<div class="card-header">
						<h3>Fill Neccessary Information to Generate  a Report.</h3>
					</div>

					<div class="card-body">
						<form action="" method="get">
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label>Class</label>
										<select name="r-class" id="r-class" class="form-control">
											<option>Class-1</option>
											<option>Class-2</option>
										</select>
									</div>
									
								</div>

								<div class="col-md-3">
									<div class="form-group">
										<label>Subject</label>
										<select name="r-subject" id="r-subject" class="form-control">
											<option value="MAN">MAN</option>
											<option value="CND">CND</option>
											<option value="MEC">MEC</option>
											<option value="VWV">VWV</option>
											<option value="ETE">ETE</option>
											<!-- <option value="MGT">MGT</option> -->
										</select>
									</div>
									
								</div>

								<div class="col-md-3">
									<div class="form-group">
										<label>Date</label>
										<input type="date" name="r-date" class="form-control">
									</div>
									
								</div>

								<div class="col-md-3">
									<div class="form-group">
										<label>Time</label>
										<select name="r-time" id="r-time" class="form-control">
											<option value="1">10:00 11:00</option>
											<option value="2">11:15 12:15</option>
											<option value="3">12:15 01:15</option>
											<option value="4">02:00 03:00</option>
											<option value="5">03:00 04:00</option>
											<option value="6">04:15 05:15</option>
											<option value="7">05:15 06:15</option>
										</select>
									</div>
									
								</div>
								
								<div class="btn-1">
									<div class="col-md-4">
									<div class="form-group">
										
										<button type="submit" class="btn btn-primary">Generate Report</button>
									</div>
									
									</div>
								</div>

							</div>
						</form>
					</div>

				</div>
				
				<div class="card mt-5" >
					<div class="card-body">
						<table class="table " >
							<thead>
								<tr>
									<th>Sr. NO</th>
									<th>Roll NO</th>
									<th>Enrollment</th>
									<th>Name</th>   
									<th>Contact</th>
									<th>Subject</th>
									<th>Date</th>
									<th>Time</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								
						<?php
							// $slot = 2;
							// Set timezone to GMT+5:30
                            date_default_timezone_set('Asia/Kolkata');

                            // Database connection details
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "cpp";

                             // Create connection
                            $con = mysqli_connect($servername,$username,$password,$dbname);

                            // // // Check connection
                            if ($con->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                                // $r_subject = "PWP";
								//$r_date = "03-04-2023";
								//$r_time = "1";



							if(isset($_GET['r-subject']) && isset($_GET['r-date']) && isset($_GET['r-time']))
							 {
								// $r_class = $_GET['r-class'];
								$r_subject = $_GET['r-subject'];
								$r_date = $_GET['r-date'];
								//$r_date = "29-04-2023";
								 $r_time = $_GET['r-time'];

								$new_date = date("d-m-Y",strtotime($r_date));
							   

								 // print($r_subject);
								 // print($new_date);
								 // print($r_time);

							

								// $query = "SELECT * FROM present_table WHERE subject='$r_subject' AND datee='$r_date' AND timee='$r_time' "; 
								$query = "SELECT * FROM student join present_table on student.s_id = present_table.id WHERE subject='$r_subject' AND datee='$new_date' AND timee='$r_time' ORDER BY student.s_id";

								$query_run = mysqli_query($con,$query);
								
								if(mysqli_num_rows($query_run) > 0)
								{
									$slot_time = ['10: 00 to 11:00','11: 15 to 12:15','12: 15 to 01:15','02: 00 to 03:00','03: 00 to 04:00','04: 15 to 05:15','05: 15 to 06:15'];
									
									foreach ($query_run as $row)
								   {
									
									for ($i=0; $i < count($slot_time); $i++) { 
										
									if ($row['timee']==($i+1)) {
										$slot = $slot_time[$i];
									}
									}

										?>
											<tr>
				     							<!-- <th>1</th> -->
				     							
				     							<td><?= $row['id'] ?></td>
				     							<td><?= $row['roll_no'] ?></td>
				     							<td><?= $row['enroll_no'] ?></td>
				     							<td><?= $row['name'] ?></td>
				     							<td><?= $row['contact'] ?></td>
				     							<td><?= $row['subject'] ?></td>
				     							<td><?= $row['datee'] ?></td>
				     							<td><?php print($slot) ?></td>
				     							
								            </tr>
										<?php
									}
								}
								else
								{
									?>

									<div class="card-body">

										 <h3>NO Record Found..!</h3>
									</div>

									<?php
								}

							 }


						?>
						
							</tbody>
						</table> 
					</div>
				</div>

			</div>

			<div class="export">
				<button onClick="tableToExcel()" id="export" >EXPORT TO EXCEL</button>
			</div>
		</div>
	</div>

<script type="text/javascript">

// function exportTableToExcel(){

// 	document.getElementById("exportBtn").addEventListener("click", function() {
//     TableExport(document.getElementById("reportTable"), {
//         formats: ["xlsx"], // Export to Excel file format
//         filename: "myExcelFile", // File name
//         sheetname: "Sheet1", // Sheet name
//     }).export(); // Trigger the export
    
//     // Hide the TableExport button
//     document.querySelector('#reportTable .tableexport-button-group').style.display = 'none';
// });
//}
 
document.getElementById("export").addEventListener("click", function() {
 // alert("Button clicked!");
  var table2excel = new Table2Excel();
  table2excel.export(document.querySelectorAll("table.table"));
});


</script>

</body>
</html>