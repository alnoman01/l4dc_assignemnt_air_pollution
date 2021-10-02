<?php session_start()?>
<body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary " id="mainNav">
            <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">Air Pollution</a>
                <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Home</a>
                        </li>
                        <?php 
                        if(isset($_SESSION['loggedin'])){ 
                        
                         }else{ ?>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login.php">Sign In</a></li>
                        <?php } 
                        ?>

                        <?php 
                        if(isset($_SESSION['loggedin'])){ 
                        
                         }else{ ?>
                        
                        <li class="nav-item mx-0 mx-lg-1"><a id="button" aria-describedby="tooltip" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"  href="reg.php">Sign Up</a>
                            <div id="tooltip" role="tooltip">
                                Sign Up & Get a Free  Home Pollution Testing Kit
                                <div id="arrow" data-popper-arrow></div>
                            </div>
                        </li>
                        <?php } 
                        ?>

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="contact_us.php">Contact Us</a></li>
                        <li class="nav-item mx-0 mx-lg-1 dropdown">
                            <a href="#" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger dropdown-toggle" data-toggle="dropdown">City</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="london_update.php" class="dropdown-item">London</a>
                                <a href="birmingham_update.php" class="dropdown-item">Birmingham</a>
                                <a href="leeds_update.php"class="dropdown-item">Leeds</a>
                                <a href="manchester_update.php"class="dropdown-item">Manchester</a>
                                <a href="newcastle_update.php"class="dropdown-item">New Castle</a>
                            </div>
                        </li>
                        <?php 
                            if(isset($_SESSION['loggedin'])){ ?>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">Log Out</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        