<!DOCTYPE html>
<html>
<head>
<title>index.php</title>
</head>
<style>
h1{
background-color:#9999ff;
color:white;
margin: 30px;
padding: 20px;
font-family:Trebuchet MS;}

h4{
background-color:#9999ff;
color:white;
padding: 5px;
width: 340px;
font-size: 20px;
margin-bottom: 50px;
font-family:Trebuchet MS;}

</style>
<body>
<center><h1>E V E N T S</h1></center>

<h3 style="padding:20px;">Events:</h3>


<div style="width:100%;">
   <div style="border-left:6px solid #9999ff;padding:20px;"> 
       It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.
   </div>
</div>

<div class="container" style="display:flex;max-width:1400px;width:100%; flex-wrap:wrap;justify-content:center;">

<a><img src="annual.jpg" style="width: 350px;
    height: 300px;padding:20px;"><center><h4>ANNUAL DAY</h4></center></a>
	
<a><img src="sports.jpg" style="width: 350px;
    height: 300px;padding:20px;"><center><h4>SPORTS DAY</h4></center></a>

<a><img src="food.jpg" style="width: 350px;
    height: 300px;padding:20px;"><center><h4>FOOD FEST</h4></center></a>
	
<a><img src="fest.jpg" style="width: 350px;
    height: 300px;padding:20px;"><center><h4>SCIENCE CAMP</h4></center></a>
	
<a><img src="social.jpg" style="width: 350px;
    height: 300px;padding:20px;"><center><h4>SOCIAL ACTIVITIES</h4></center></a>
</div>

<center><h1>S C H O O L   C L U B S</h1></center>

<form action="index.php" method="get">
Name: <input type="text" name="name">
<input type="submit">
<br>
<?php echo $_GET["name"]
?>
</form>
</body>
</html>