<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
		
	</script>

</head>
 <?php require 'partials/_navbar.php'?>
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

			html
			{
 				font-size:62.5%;   /*  = 10px */
 
			}
	</style>

	<style type="text/css">
		.current {
			margin-left:26rem;
			border:2px solid gray;
			width:100%;
			margin-top:3rem;
			height:4rem;


		}
		.current p{
			font-size:1.5rem;
			padding:0.7rem;
			font-weight: 700;
			color:white;
		    
			background-color:var(--bgcolor-1);
  			animation: blink 1s infinite;


		}
		@keyframes blink {
  		50% {
   			 background-color: red;
   		}

		}
		.time-table{
			margin-left:26rem;
		}

		.time-table-head
		{
			background-color: var(--bgcolor-2);
			color: white;

		}
		
		.box-2{
			margin-left:26rem;
			border:2px solid gray;
			padding:1rem;
			margin-top:5rem;
		}

		.at-title
		{
			border:2px solid gray;
			height:4rem;
			width:100%;
			padding:0.5rem;
			text-align: center;

		}
		.at-title:hover
		{
			color:white;
			background-color:var(--bgcolor-2);
			transition: 0.5s;
		}
		.refresh
		{
			
			text-align: center;

		}
		.refresh button
		{
			border:2px solid ;
			color: white;
			margin:.2rem;
			font-size:1.3rem;
			font-weight:500 ;
			padding:.7rem 4rem;
			border-radius:.8rem;
			margin-left:auto;
			background-color:var(--bgcolor-2);
		}

	</style>

</head>

<body>
	<div class="page-title">
		Class-1
	</div>

	<div class="current">
		
		<p><?php
			$timezone = date_default_timezone_set('Asia/Kolkata');
			$date=date('d/m/Y h:i a',time());
			echo $date."";
		?>
			&nbsp;&nbsp; Now <?php echo ".............."?> Lecture Is Conducted By <?php echo".............."?> 
		</p>


	</div>

	<div class="time-table">
		<table class="table mt-5 table-bordered table-hover" >
			<thead class="time-table-head" >
				<tr>
					<th>Day</th>
					<th>09.00am to 10.00am</th>
					<th>10.00am to 11.00am</th>
					<th>11.00am to 11.15am</th>
					<th>11.15am to 12.15pm</th>
					<th>12.15pm to 01.15pm</th>
					<th>01.15pm to 02.00pm</th>
					<th>02.00pm to 03.00pm</th>
					<th>03.00pm to 04.00pm</th>
					<th>04.00pm to 04.15pm</th>
					<th>04.15pm to 05.15pm</th>
					<th>05.15pm to 06.15pm</th>
				</tr>

			</thead>
			<tbody>
				<tr>
					<th>Monday</th>
					<td style="text-align: center;">-</td>
					<td>MAN</td>
					<td style="text-align: center;">-</td>
					<td colspan="2" style="text-align: center;">A-MEC, C-VWV</td>
					<td style="text-align: center;">-</td>
					<td>CND</td>
					<td>ETE</td>
					<td style="text-align: center;">-</td>
					<td>CPE</td>
					
				</tr>
				<tr>
					<th>Tuesday</th>
					<td style="text-align: center;">-</td>
					<td>MAN</td>
					<td style="text-align: center;">-</td>
					<td colspan="2" style="text-align: center;">A-CND, B-MEC</td>
					<td style="text-align: center;">-</td>
					<td>VWV</td>
					<td>MEC</td>
					<td style="text-align: center;">-</td>
					<td>CND</td>
					
				</tr>

				<tr>
					<th>Wednesday</th>
					<td style="text-align: center;">-</td>
					<td>ETE</td>
					<td style="text-align: center;">-</td>
					<td colspan="2" style="text-align: center;">A-EDE, B-VWV</td>
					<td style="text-align: center;">-</td>
					<td>MEC</td>
					<td>VWV</td>
					<td style="text-align: center;">-</td>
					<td>CPE</td>
					
				</tr>

				<tr>
					<th>Thursday</th>
					<td style="text-align: center;">-</td>
					<td>MAN</td>
					<td style="text-align: center;">-</td>
					<td colspan="2" style="text-align: center;">B-CND, C-MEC</td>
					<td style="text-align: center;">-</td>
					<td>ETE</td>
					<td>EDE</td>
					<td style="text-align: center;">-</td>
					<td>CPE</td>
					
				</tr>

				<tr>
					<th>Friday</th>
					<td style="text-align: center;"> -</td>
					<td>CND</td>
					<td style="text-align: center;">-</td>
					<td colspan="2" style="text-align: center;">B-EDE, C-CND</td>
					<td style="text-align: center;">-</td>
					<td>EDE</td>
					<td>MEC</td>
					<td style="text-align: center;">-</td>
					<td colspan="2" style="text-align: center;">A-VVWV, C-EDE</td>
					
				</tr>

				<tr>
					<th>Saturday</th>
					<td style="text-align: center;">-</td>
					<td style="text-align: center;">-</td>
					<td style="text-align: center;">-</td>
					<td colspan="2" style="text-align: center;">-</td>
					<td style="text-align: center;">-</td>
					<td style="text-align: center;">-</td>
					<td style="text-align: center;">-</td>
					<td style="text-align: center;">-</td>
					<td colspan="2" style="text-align: center;">-</td>
					
				</tr>


			</tbody>
		</table>
	</div>
	
<div class="box-2">
	<div class="at-title">
		<h2>Current Attendance</h2>
	</div>
	<div class="refresh">
		<form action="" method="POST">
			<button type="submit">Refresh</button>
		</form>
		
	</div>
	<div class="current-attendace-table mt-5 table-hover">
		<table class="table">
			<thead class="time-table-head">
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
                                                           //where present_table.datee='$c_date'
					
					$c_date=date('d-m-Y');

					$time_slot = [1000,1100,1115,1215,1315,1400,1500,1600,1615,1715,1815];

					  $time = date('Hi'); //time conversion 10:00 => 10000
					    $temp_slot=1 ;
					    $time_int = $time;
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

						// echo "$c_date";
						// echo "$slot";

					$con = mysqli_connect("localhost","root","","cpp");
					$query = "SELECT * FROM student join present_table on student.s_id = present_table.id  where present_table.datee='$c_date' AND present_table.timee = '$slot'  ORDER BY student.s_id";
					$query_run = mysqli_query($con,$query);
				
				  // if (mysqli_query($con,$query)) 
				  // {
				  // 	// code...
				  // }
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

						?>
						
			</tbody>
		</table>
			
	</div>
	
</div>

</body>
</html>