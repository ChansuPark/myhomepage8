
<!DOCTYPE html>
<html>
<head>
<!-- 합쳐지고 최소화된 최신 CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- 부가적인 테마 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- 합쳐지고 최소화된 최신 자바스크립트 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<style> 
	
	#nav_menu ul{
		list-style-type: none;
		padding-right: 0px;
		float: right;
	}
	#nav_menu ul li{
		display: inline;
		border-right: 1px solid #c0c0c0;
		padding: 0px 10px 0px 10px;
		margin:  5px 0px 5px 0px;
	}
	#nav_meun ul li: first-child{
		border-right: none;
	}
	#main {
		margin-left: 500px; font-size: 70px; color: blue; margin-bottom: 10px;
	}
	#logo {
		 width: 100px; height: 160px; margin-left: 150px; margin-top : 10px; margin-bottom: 1px;
	}
	</style>
	<title>Soccer</title>
	<link rel="stylesheet" href="Style.css">
	<meta charset="utf-8">

		
		


	
	<div>
		<a href="main.php"></a><div id="logo"><img style="width : 200px; height : 200px; " src="real mark.png"></div></a>
		<div id="main"><h1><font size="8" face="돋움체" color="#0064FF" style="position: relative;bottom: 70px;right: 80px;">Tottenham Hotspur</font></h1></div>
	</div>
	<div>
		<nav>
			<ul style="max-width: 1100px;margin: auto;display: block;">


				<li><a href="Club.php">CLUB</a></li>
				<li><a href="News.php">NEWS</a></li>
				<li><a href="Team.php">TEAM</a></li>
				<li><a href="Plan.php">SPURSTV</a></li>
			</ul>
		</nav>
	</div>
		<!-- <img src="hotspur mark.png" width="70" height="150"> -->

<script type="text/javascript">
			var image1=new Image()
			image1.src="team1.png"
			var image2=new Image()
			image2.src="team2.png"
			var image3=new Image()
			image3.src="team3.png"
		</script>
	
</head>
	<body>
		<p style="text-align:center;">
		<img src="team1.png" name="slide" width="1100" height="700">
		<script type="text/javascript">
			var step=1
			function slideit(){document.images.slide.src=eval("image"+step+".src")
			if(step<3)
				step++
				else
					step=1
				setTimeout("slideit()",3500)
		}
		slideit()
		</script>
		</p>

		
		
		<div id="nav_menu" style="position: absolute;top: 50px;right: 100px;">
		<ul style="list-style-type:none">
			<span style="color:black">
			<a href="/login.php" style="color: black;display:inline">로그인</a>
			<a href="/person.php" style="color:black;display:inline">회원가입</a>
			</span>
		</ul>
		</div>
	
</body>
</html>