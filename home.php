<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fashion Blog</title>
  
  <style>
.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left; 
  display: block; 
  color: white; 
  text-align: center; 
  padding: 14px 20px; 
  text-decoration: none; 
}
.navbar a.right {
  float: right; 
}
.navbar a:hover {
  background-color: #ddd;
  color: black;
}
#loop{
  color : orange ; font-size: 30px;
}

#head{ text-align: center; color :#554439 ; font-family: Georgia; font-size: 25px;
background-image:url("backg.jpg") ;  background-attachment: fixed;  height:300px ;
}
ul { 
    list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  
  }


  li {
    float: left;
  }
  
  li a {
    display: block;
    color: rgb(121, 119, 119);
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  li a:hover:not(.active) {
    background-color: #111;
  }
  
  .active {
    background-color: #afd0df;
  } 
h1{
text-align:center;
color: black;
font-style:italic; }
  
 </style>

</head>
<body>

<div class="navbar">
            <a href="#">Home</a>
            <a href="#">Content</a>
            <a href="#" >About us</a>
          </div>

<header id="head"> 
      
    <a href="home.php">
        <img src="logo.png" alt="the website icon"
   width="100" height="100"></a> <br>
    <h1> Fashion Blog</h1> 
    <ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="about.asp">About</a></li>
</ul>
</header>
<hr>
<br>
<img src="Prada.png" alt="prada logo" width="150" hight="130">
<h1>
<br>
Prada is an Italin luxury fashion house that was founded in 1913 by Mario Prada.
 It specializes in leather handbags, travelaccessories, shos, ready-to-wear,perfumes and other fashion accessories.
</h1>
<br>
<center>
<img id="myImage" onclick="changeImage()" src="Bag2.JPEG" width="160" height="200">
<script>
function changeImage() {
 var image = document.getElementById('myImage');
 if (image.src.match("bulbon")) {
 image.src = "Bag1.JPEG";
 } else {
 image.src = "Bag1.JPEG";
 }
}
</script>
</center>
<center>
<img  src="Hels.JPEG" width="160" height="180">
<img  src="hels2.JPEG" width="160" height="180">
<img  src="sport.JPEG" width="160" height="180">
 <br>
<img  src="dress1.JPEG" width="160" height="180">
<img  src="dress2.JPEG" width="160" height="180">
<img  src="per1.JPEG" width="160" height="180">
<img  src="per2.JPEG" width="160" height="180">
</center>
<h2 style=" text-align:center;" > Written by Rawan Al-Harbi</h2>
<center>
<a href="mailto:Roorn.1422@gmail.com" > Email Me! </a><br>
</center>
</body>
</html>
