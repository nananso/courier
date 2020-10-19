<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPS</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    
        <header class="header">
            <div class="topbar">
                <div class="lt">
                    <div class="upleft"><a href="home.php">UPS<span>Owerri</span></a></div>
                    <div class="lowerleft">
                        <nav>
                            <div class="menu">
                                <ul>
                                    <li><a href="<? echo home.php ?>">Quick Start</a>
                                        <ul class="submenu">
                                            <li><a href="login.php">Signup / Login</a></li>
                                            <li><a href="ship.php">Shipment Status</a></li>
                                            <li><a href="bills.php">View & Pay Bills</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="track.php">Tracking</a>
                                        <ul class="submenu">
                                            <li><a href="track.php">Track Your Goods</a></li>
                                            <li><a href="customer.php">Manage Delivery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="ship.php">Shipping</a>
                                        <ul class="submenu">
                                            <li><a href="ship.php">Create Shipment</a></li>
                                            <li><a href="ship.php">Shipping Rates</a></li>
                                            <li><a href="customer.php">Schedule Pickups</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            
                        </nav>
                    </div>
                </div>
                <div class="rt">
                    <div class="upright">
                        <ul class="signin">
                            <li><a href="home.php">Home</a></li>
                            <li><a href="login.php">Sign Up / Log In</a></li>
                        </ul>
                    </div>
                    <div class="lowerright">
                        <button type="submit">Customer Support</button>
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            <div class="leftside"></div>
            <div class="centerside">
                <div class="center">
                    <div class="manage">
                        <h2>Manage Delivery</h2>
                        <form action="#">
                            <p>
                                <input type="text" placeholder="Enter Username">
                            </p>
                            <p>
                                <input type="password" placeholder="Enter Password">
                            </p>
                            <p>
                                <input type="text" placeholder="Enter Convenient Receiving Point">
                            </p>
                            <p>
                                <input type="text" placeholder="Enter Convenient Receiving Date">
                            </p>
                            <p>
                                <input type="submit" value="Submit">
                            </p>                            
                        </form>
                        
                    </div>
                    <div class="pickup">
                        <h2>Schedule Pickup</h2>
                        <form action="#">
                            <p>
                                <input type="text" placeholder="Enter Username">
                            </p>
                            <p>
                                <input type="text" placeholder="Enter Code">
                            </p>
                            <p>
                                <input type="text" placeholder="Enter Convenient Receiving Point">
                            </p>
                            <p>
                                <input type="text" placeholder="Enter Convenient Receiving Date">
                            </p>
                            <p>
                                <input type="submit" value="Submit">
                            </p>                            
                        </form>
                    </div>
                    <div class="complaint">
                        <h2>Post Complaint</h2>
                        <form action="#">
                            <p>
                                <input type="text" placeholder="Enter Username">
                            </p>
                            <p>
                                <input type="text" placeholder="Enter Code">
                            </p>
                            <p>
                                <input type="text" placeholder="Title of Complaint">
                            </p>
                            <p>
                                <textarea name="complaint" id="complaint" cols="30" rows="10" placeholder="Type your complaint here..."></textarea>
                            </p>
                                <input type="submit" value="Submit">
                            </p>                            
                        </form>
                    </div>
                </div>                
            </div>
            <div class="rightside"></div>
        </main>
        <div class="grey-area">
            <div class="customer">
                <h3>Customer Service</h3>
                <ul>
                    <li>
                        <a href="#">Help and Support Center</a>
                    </li>
                    <li>
                        <a href="#">Get Started With UPS Owerri</a>
                    </li>
                    <li>
                        <a href="#">Change Delivery</a>
                    </li>
                    <li>
                        <a href="#">Claims Support</a>
                    </li>
                </ul>
            </div>
            <div class="info">
                <h3>Company Info</h3>
                <ul>
                    <li>
                        <a href="#">About US</a>
                    </li>
                    <li>
                        <a href="#">Investor Relations</a>
                    </li>
                    <li>
                        <a href="#">Careers</a>
                    </li>
                    <li>
                        <a href="#">Community Support Programs</a>
                    </li>
                </ul>
            </div>
            <div class="contact">
                <h3>Connect With Us</h3>
                <ul>
                    <li>
                        <a href="#">Help and Support Center</a>
                    </li>
                    <li>
                        <a href="#">Get Started With UPSOwerri</a>
                    </li>
                    <li>
                        <a href="#">Change Delivery</a>
                    </li>
                    <li>
                        <a href="#">Claims Support</a>
                    </li>
                </ul>
            </div>
        </div>
        <footer class="footer">
            <div class="footerleft"></div>
            <div class="footercenter">
                <div class="left">&copy;UPSOwerri 2020</div>
                <div class="right">
                    <a href="#">Site Map</a> | <a href="#">Terms of Use</a> | <a href="#">
                        Privacy & Security</a>
                </div>                
            </div>
            <div class="footerright"></div>
        </footer>
       
</body>
</html>