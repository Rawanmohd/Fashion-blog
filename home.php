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
    <br><br>
</center>
<center>
<img  src="G11.jpg" width="160" height="180">
<img  src="G2.jpg" width="160" height="180">
<img  src="G3.jpg" width="160" height="180">
 <br>
<img  src="G4.jpg" width="160" height="180">
<img  src="G5.jpg" width="160" height="180">

</center>
<h2 style=" text-align:center;" > Written by Norah AL-Shammari</h2>
<center>
<a href="mailto:Haraon7878@gmail.com" > Email Me! </a><br>
</center>
    <hr>
<br>
<img src="burberry.jpg" alt="burberry logo" width="150" hight="130">
<h1>
<br>
 Burberry is a high end fashion house based in London. 
 Established by Thomas Burberry, the fashion brand is an embodiment of high quality clothing,
 fragrances, eyewear,cosmetics, and accessories. 
</h1>
<br>
<center>
<img id="bboot" onclick="changeImage1()" src="bboot.webp" width="160" height="200">
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
    <br><br>
</center>
<img src="G0.png"  width="150" hight="130">

<br>
<h1>
 Gucci is a luxury luxury goods brand and part of the Gucci Group, which is owned by the French company Kring known as PPR.
 The Gucci company was founded by Guccio Gucci in Florence in 1921.
 Its product lines include handbags, ready-to-wear, shoes and accessories, make-up, perfume, and home décor
</h1>
<br>
<center>
<img  src="G11.jpg" width="160" height="180">
<img  src="G2.jpg" width="160" height="180">
<img  src="G3.jpg" width="160" height="180">
 <br>
<img  src="G4.jpg" width="160" height="180">
<img  src="G5.jpg" width="160" height="180">
</center>
<h2 style=" text-align:center;" > Written by Norah AL-Shammari</h2>
<center>
<a href="mailto:Haraon7878@gmail.com" > Email Me! </a><br>
</center>
    <hr>
<br>
<img src="burberry.jpg" alt="burberry logo" width="150" hight="130">
<h1>
<br>
 Burberry is a high end fashion house based in London. 
 Established by Thomas Burberry, the fashion brand is an embodiment of high quality clothing,
 fragrances, eyewear,cosmetics, and accessories. 
</h1>
<br>
<center>
<img id="bboot" onclick="changeImage1()" src="bboot.webp" width="160" height="200">
<script>
function changeImage1() {
 var image = document.getElementById('bboot');
 if (image.src.match("bulbon")) {
 image.src = "bboot2.webp";
 } else {
 image.src = "bboot2.webp";
 }
}
</script>
</center>
<center>
<img  src="bbag.webp" width="160" height="180">
<img  src="cbag2.webp" width="160" height="180">
<img  src="gboot.webp" width="160" height="200">
 <br>
<img  src="kbag.webp" width="160" height="180">
<img  src="ldress.JPG" width="160" height="200">
</center>
<h2 style=" text-align:center;" > Written by Kadi Al-Wabel</h2>
<center>
<a href="mailto:kady.wa13@gmail.com" > Email Me! </a><br>
</center>
    <br> <br>
<center>
<img src="Diorlogo. jpeg.jpeg" alt="Dior logo" width="150" hight="130">
</Center>
<h1> <pre>
Dior is a French luxury fashion house. 
The company was founded in 1946 by French fashion designer Christian Dior.
This brand just sells shoes, Makeup, Bags, Perfumes, Jewelry, and clothing and can only be bought in Dior stores.
</pre></h1>
<br>
<center>
    <p>Sauvage is one of the most famous perfume.</p> <br>
    <img  src="Sauvage. jpeg.jpg" width="200" height="250"> <br>
    <img  src="Makeup1.jpg" width="200" height="250">
    <img  src="Makeup2.jpg" width="200" height="250">
    <img  src="Makeup3.jpg" width="200" height="230">
    <br>
    <img  src="dress.jpg" width="200" height="250">
    <img  src="Jewelry.jpg" width="200" height="250">
    <img  src="Lady dior.jpg" width="200" height="250">
    <img  src="shoes.jpg" width="200" height="250">
     <br>
  
    </center>
    <h2 style=" text-align:center;" > Written by Raghad Al Jaithen</h2>
    <center>
    <a href="mailto:jeraghad@gmail.com" > Email Me! </a><br>
    </center>
</body>
</html>
