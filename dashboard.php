<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php require 'partials/_navbar.php' ?>


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
				width:10rem;

			}

		.calender{
			margin-left: 132rem;
			margin-top:-60rem;
			height:25rem;
			width:35rem;
			z-index:100;
			padding:3rem;
			font-size:18px;
			color:white;
			background: var(--bgcolor-2);
			border:2px solid grey;
		}
		.today {
  			  background-color: white;
  			  color:var(--bgcolor-1);
  			  padding:.3rem;
		}
		.background
		{
			margin-top:8rem;

			margin-left:35rem;
			height: 60%;
   			width: 55%;

			border:2px solid gray;
		}
		.background img
		{
			object-fit:cover;
			max-width: 100%;
         	max-height: 100%;
		}
		.Footer
		{	margin-top:1rem;
			margin-left:55rem;
			background: 
		}
		.Footer h2
		{

			font-size:4rem;
			color:var(--bgcolor-1);
			font-weight:600;

		}
	</style>
</head>

<body>
	<div class="page-title">
		Dashboard
	</div>

	<div class="background">

	<img src="partials\Images\dashboard_bg.jpg" >
	
	</div>

	<div class="Footer">
		<h2>Welcome To Government Polytechnic Ratnagiri</h2>
	</div>
	
<div class="calender">
 
 <?php
// Set timezone
date_default_timezone_set('UTC');

// Get current month and year
$month = date('m');
$year = date('Y');

// Get the number of days in the current month
$numDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);

// Get the name of the current month
$monthName = date('F', mktime(0, 0, 0, $month, 1, $year));

// Get the current day
$today = date('j');

// Create the calendar table
echo "<table >";

// Create the table header
echo "<tr><th colspan='7'>" . $monthName . " " . $year . "</th></tr>";
echo "<tr><th>Sun</th><th>&nbsp;Mon&nbsp;</th><th>&nbsp;Tue&nbsp;</th><th>&nbsp;Wed&nbsp;</th><th>&nbsp;Thu&nbsp;</th><th>&nbsp;Fri&nbsp;</th><th>&nbsp;Sat&nbsp;</th></tr>";

// Create the table rows
$dayOfWeek = 0;
echo "<tr>";
for ($i = 1; $i <= $numDays; $i++) {
    // Check if we need to start a new row
    if ($dayOfWeek == 7) {
        echo "</tr><tr>";
        $dayOfWeek = 0;
    }

    // Highlight the current day
    $class = '';
    if ($i == $today) {
        $class = 'today';
    }

    // Print the day
    echo "<td class='" . $class . "'>" . $i . "</td>";

    // Increment the day of the week
    $dayOfWeek++;
}

// Complete the last row if necessary
if ($dayOfWeek != 7) {
    for ($i = $dayOfWeek; $i < 7; $i++) {
        echo "<td>&nbsp;</td>";
    }
}
echo "</tr>";

// Close the table
echo "</table>";
?>

</div>



</body>
</html>