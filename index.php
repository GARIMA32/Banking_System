<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
    <link rel="stylesheet" href="style.css">
         <link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.bg-image {
    /* The image used */
    /* background-image: url("img2.jpg"); */
    
    /* Add the blur effect */
    filter: blur(8px);
    -webkit-filter: blur(8px);
    
    /* Full height */
    height: 100%; 
    
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  
  /* Position text in the middle of the page/image */
  .bg-text {
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
    color: rgb(0, 0, 0);
    font-weight: bold;
    border: 5px solid #000;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 80%;
    padding: 20px;
    text-align: center;
    margin-top: 100px;
    text-shadow: 1px 1px 1px #729ce0;
  }
  .container{
    margin-top: 20px;
}
  </style>
  </head>
<body>

<div class="header">
    

<div class="container">
    <div class="navbar ">
       
        <div class="logo">
            <img src="image/image1.png" width="180px">
            
        </div>
        <nav>
            <p><b> Digital Banking<b></p>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="list_customers.php">Customers</a></li>
                <!-- <li><a href="transection.php">Transections</a></li> -->
                <!-- <li><a href="transection_list.php">view All Transections</a></li> -->
                
                <!-- <li><p>&#10148;</p></li> -->
            </ul>
        </nav>
        
    </div>
    <div class="bg-image">
<img src="image/img3.jpg" width="100%" height="600px">
</div>

<div class="bg-text">
  <h1 style="font-size:50px">Digital Banking System</h1>
  <h2 >Here you can easily transfer money ! </h2>
  <h2 style="background-color:#010234; color:#fff" >Your Privacy - Our Concern </h2>
  <!-- <p>And I'm a Photographer</p> -->
</div>

</div>

<div class="third">
<button class="button"><span> <a href="transection.php">Direct Transfer</a> </span></button>
</div>

    <div class="footer">
  <ul>
    <li><a href="https://twitter.com/GarimaC18299418">Twitter</a></li>
    
    <li><a href="mailto:chauhangarima525@gmail.com">Email</a></li>
    <li><a href="https://www.linkedin.com/in/garima-chauhan-9a07441a7/">Linkedin</a></li>
    <li><a href="https://github.com/garima32">Github</a></li>
    <li>
      <p>👋</p>
    </li>
  </ul>
</div>
<hr>
<div class="forth">
    <p>Created by |<mark style="background-color:red">Garima Chauhan</mark>| <i class="fa fa-copyright"></i> 2020 All Rights Reserved.
</div>

</body>
</html>