<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="https://kit.fontawesome.com/14df1a65dd.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/all.css">


<style type="text/css">
	
:root
{
	--bgcolor-1: #150734;
	--bgcolor-2: #0F2557;

	
}

*{
	margin:0;
	padding: 0;
	user-select: none;
	box-sizing:border-box;


}
html
{
 font-size:62.5%;   /*  = 10px */
 overflow-x:hidden ;
}
.topbar
{
	width: 100%;
	height:5rem;
	background-color: var(--bgcolor-1);
	top:0;
	margin-left:0;
	z-index: 100;
	position:fixed;


}
.topbar header
{
	font-size: 2.5rem;
	color:white;
	margin-left:10rem;
	line-height:4.5rem;


}
.sidebar
{
	position:fixed;
	width:25.0rem;
	height: 100%;
	left: 0;
	top:5rem;
 background-color: var(--bgcolor-2);

}
.sidebar i
{
	padding-right: 1rem;
	font-size: 2.5rem;

}
.sidebar .head1
{
  color: white;
 font-size:1.5rem;
 font-weight:600;
 line-height:6.5rem;
 text-align: center;
 background-color: var(--bgcolor-2);

}

.sidebar ul
{
	 background-color: var(--bgcolor-2);
	height: 100%;
	width: 100%;
	list-style: none;
}

.sidebar ul li
{
	line-height:6.5rem;
	border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

.sidebar ul li a
{
	position: relative;
	color:white;
	text-decoration: none;
	font-size:1.8rem;
	padding-left:4.0rem;
	font-weight:500;
	display: block;
	widows: 100%;
	border-left:3px solid transparent;
}
.sidebar ul li a:hover
{
	color:cyan;
	background-color: var(--bgcolor-1);
	border-left-color:cyan;
	padding-left:5rem;
	transition: 0.5s;

}

.sidebar .at-show li a:hover
{
	padding-left:9rem;
	transition: 0.5s;

}

.sidebar ul ul {
	position: static;
	display: none;
}

.sidebar ul .at-show.show
{
	display: block;
}
.sidebar ul ul li
{
	line-height:4.2rem;
	border-bottom:none;

}

.sidebar ul ul li a
{
	font-size:1.7rem;
	padding-left:8.0rem;
	color:#e6e6e6;
}

.sidebar ul li a span
{
	position:absolute;
	top: 50%;
	right: 2.0rem;
	
}


</style>
</head>
<body>
	 <div class="topbar">
  	  <header>GPR</header>
  </div>
	<div class="sidebar"> <!--  main sidebar  -->
		<div class="head1">
			Government Polytechnic Ratnagiri
		</div>
		
		<ul>  <!--  1st ul  <i class="fas fa-qrcode">-->
			<li><a href="/CPP/dashboard.php"><i class="fas fa-qrcode"></i>Dashboard</a></li>

			<li>

				<a href="#" class="at-btn"><i class="fa-solid fa-clipboard-user"></i>Attendace
					<span class="fas fa-caret-down first"></span>
				</a>

				<ul class="at-show"> <!--  2nd ul  -->
					<li><a href="/cpp/class-1.php"><i class="fa-solid fa-graduation-cap"></i>Class-1</a></li>
					<li><a href="#"><i class="fa-solid fa-graduation-cap"></i>Class-2</a></li>
				</ul>

			</li>

			<li><a href="/cpp/reports.php"><i class="fa-solid fa-chart-simple"></i>Reports</a></li>
			<li><a href="/cpp/manage-std.php"><i class="fa-solid fa-user-pen"></i>Manage Student</a></li>
			<li><a href="/cpp/admin.php"><i class="fa-solid fa-lock"></i>Admin</a></li>

			
		</ul>
	</div>
 
	<script>
		 document.querySelector(".sidebar .at-btn").addEventListener("click",function()
		 {
		 		document.querySelector(".sidebar ul .at-show").classList.toggle("show");

		 });
			
	</script>
</body>
</html>