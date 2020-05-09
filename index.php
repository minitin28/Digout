<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <title>Homepage</title>
</head>
<body>
    
    <div class="container">
        <div class="title">
            <span class="heading">DIGOUT</span>
        </div>
        
        <div class="nav">
            <ul>
                <li>
                    <a href="index.php">Home</a>

                </li>
                
				<li class="dropdown" onclick="toggleDisplay('2')">
                    <a href="./search.php" class="dropbtn">Search &nbsp
                    </a>

                </li>


                <li class="dropdown" onclick="toggleDisplay('1')">
                    <a href="#" class="dropbtn">Services Provided &nbsp
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-content" id="1">
                        <a href="./login.php">Hire a service</a>
                        <a href="./loginv.php">Post a service</a>
                        <a href="./login.php">Enquire a service</a>
                        <a href="">Services available</a>
                        <a href="">Premium services</a>
                        <a href="./login.php">Others</a>
                    </div>
                </li>

                <li class="dropdown" onclick="toggleDisplay('2')">
                    <a href="#" class="dropbtn">Membership &nbsp
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-content" id="2">
                        <a href="">Become a Gold Member </a>
                    </div>
                </li>

                <li class="dropdown" onclick="toggleDisplay('2')">
                    <a href="#" class="dropbtn">Login &nbsp
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-content" id="2">
                        <a href="login.php">Customer </a>
                        <a href="loginv.php">Vendor </a>
                    </div>
                </li>
            </ul>
        </div>
    
        <div class="slider">
            <img src="images/need.jpg" height="400" width="500' class="slider-image" alt="img">
        </div>
    
        <div class="main">
            <span>About the Community</span>
            <p>In current market scenario and so hectic schedule ,nobody actually wants to go physically anywhere in order to search for any basic services used in there day to  day life.Everybody now wants that service to be deliverd to them in just a single tap over mobile phone.
            This is a community designed and developed by DIGOUT community in order to provide ease for the same .</p>
    
            <div class="info" >
                <div>
                    <span>Services</span> <hr>
                    <p>We provide all the services what you may need in your day to day life. </p>
                </div>
                <div>
                    <span>History</span> <hr>
                    <p>The Idea was to provide ease to the students/working persons living away from thier homes.</p>
                </div>
                <div>
                    <span>Founder's Desk</span> <hr>
                    <p>Be the first to know.Get awared to the services near to you by clicking the link</p>
                </div>
                <div>
                    <span>Company location</span> <hr>
                    <p>Welcome to Digout,It's an online company and we are trying to inaugrate our first branch at Delhi.</p>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="footer--contact">
                <span>Contact Us</span>
                <p>nitinprofesional28@gmail.com</p>
                <p>+91-7985067960</p>
                <p></p>
            </div>
            
        </div>

    </div>


<div id="footer">
             <div class="footer--info" align="right">
                <span>Important Links</span>
                <a href="index.php">Home</a>
                <a href="login.php">Login</a>
                <a href="services.php">Services</a>
            </div>
            <div id="copy" align="left">
                   <a href="" class="active">Copyright2019@
                   DIGOUT</a>
            </div> 
    </div>


</body>
</html>