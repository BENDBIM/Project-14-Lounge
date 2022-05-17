<?php
session_start();
include('config.php');
error_reporting(0);
?>
    
<html lang="en">
<head>
  <title>Horizon Lounge</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  
			<style>
			.navbar-header{
				padding-bottom:10px;
				}


			.item-active {
			height: 550px;
			padding-top: 0px;
			}
      
  
            body{
                background-color: black;
               
            }
            
            .img {
                object-fit: cover;
             
                   
            }

            .carousel-inner img {
					width: 100%; /* Set width to 100% */
					margin: auto;
					min-height:100px;
				}
            #about{
				padding:25px;
				margin:25px;
				border:2px solid grey;
				border-radius:5px;
				}
                
                .login{ 
                    opacity:0.8;
		          border:solid gray 3px;
                    border-radius:10px;
                    background:url(img/c.jpg);
                    width: 70%;
                    height:45%;
                    text-align: center;
                    margin-left:15%;
                    margin-bottom:7%;
                    margin-top:1%;
                    } 
   
                .login form table{
     
                    text-align: center;
                    border-radius:10px;
                    margin:20px auto;  

                    }
	
    
    .login form table tr{
      padding-top:50px;
      color:white;
      text-shadow: 2px 2px black; 
      font-size:23px;
      font-family:georgia;
      font-style:italic;
      margin:5px;
    }
	
    input{
		
      border-radius:10px;
      margin-top:20px;
      padding:10px;
      background-color:#F7F4F0;
      color:black;
    }
                
	.login form table tr td{
		margin:20px;
		padding:5px;
	}
                
    .bg1{
			
			font-family:georgia;
			font-style:italic;
			background:url('img/b.jpg');
			
  }
		.container text-center{
			text-shadow: 2px 2px black;  
		}
#info{
	background-color:white;
}

            
          
  
		</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Horizon<br/>Lounge</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li> <a  href="#about">About</a>
        
      </li>
      <li><a href="#contact">Contacts</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
     
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

  <!-- Wrapper for slides -->
  <div class= "carousel-inner" role="listbox">
    <div class= "item-active">
      <img src="img/a2.jpg" alt="Image" width="100%"  > 
      <div class="carousel-caption">
        <h3>Horizon</h3>
        <p>Where moments are made!</p>
      </div> 
    </div>

       <div class="item">
		<img src="img/a.jpg" alt="Image">
		<div class="carousel-caption">
			<h3>Horizon</h3>
			<p>asd</p>
		</div> 
		</div>
	</div>
    
  <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div id="about">Information about the Lounge is written here.</br>
</br>Information about the Lounge is written here.
 Information about the Lounge is written here.
 Information about the Lounge is written here.
 Information about the Lounge is written here.
 Information about the Lounge is written here.
 Information about the Lounge is written here.
 Information about the Lounge is written here.
 Information about the Lounge is written here.
 Information about the Lounge is written here.
 Information about the Lounge is written here.
 Information about the Lounge is written here.
 Information about the Lounge is written here.
 Information about the Lounge is written here.
 Information about the Lounge is written here.
 Information about the Lounge is written here.
 </br>Information about the Lounge is written here.
 Information about the Lounge is written here.
 Information about the Lounge is written here.
 Information about the Lounge is written here.
 Information about the Lounge is written here.
 Information about the Lounge is written here.</div>
	</div>
</div>
		
	<div id="contact" class="container" >
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em></em></p>
  <div class="row test">
    <div class="col-md-4">
      <p>Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>BMl, KTM</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +977 980xxxxxxx</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@gmail.com</p> 
    </div>
    <!-- <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div> -->
  </div>
</div>	
	<footer>
		  <p>&copy; 2019 - Bibek Baidya</p>
	</footer>

</body>
</html>