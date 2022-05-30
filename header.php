
<?php include_once 'inc/function.php' ?>




<body class="home">
    <header class="header1">
        <div class="header-top-bar-area">
            <div class="container" >
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="header-left">
                            <address id='top-add'>11 Georgian Rd, 58/A Port Harcourt City</address>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="headr-bar-right">
                            <a href="tel:123456789" id='top-add'>123-456-7899</a>
                            <div class="serch-fl">
                                <a class="ccdda" href="#"><i class="fas fa-search"></i></a>
                            </div>
                            <a href="#"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                        <div class="searchh ccfdf">
                            <form id="search"><input type="text" placeholder="Search"><button type="submit"
                                    class="sbtn">Search Now</button>
                                <a href="javascript:void(0)" class="srch"><i class="far fa-search"></i></a></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav id="main-navigation-wrapper" style='height:70px;'
            class="navbar navbar-default header-middle header-area header-middle position-relative" >
            <div class="container" >
                <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 navbar-header" id='search-div'>
                    <div class="header-logo">
                        <a href="index.php"><img src="assets/img/logo1.jpg" alt=""></a>
                    </div>
                    <div class="search-arrea">
                        <form action="" method="get">
                            <div class="form-group" id='form-div'>
                            <input type="search" name="search" id="search" class='form-control'>
                            <button class='btn btn-dark'><i class='fa fa-search'></i></button>
                            </div>
                        </form>
                    </div>
                    <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false"
                        class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span
                            class="icon-bar"></span><span class="icon-bar"></span><span
                            class="icon-bar"></span></button>
                </div>
                
                <div id="main-navigation" class="col-xl-9 col-lg-12 col-md-12 collapse navbar-collapse ">
                    <ul class="nav navbar-nav">
                        <li class="dropdown ">
                            <a href="index.php" class= <?php echo get_base("index.php"); ?> id='navvy'>Home</a>
                        
                        
                        </li>
                        <li class="dropdown">
                            <a href="about.php"  class= <?php echo get_base("about.php"); ?>>About us</a><i class="fa fa-chevron-down"></i>
                            <ul class="dropdown-submenu">
                                <li><a href="about.php">About Us</a></li>
                                <li class="submenu_child">
                                    <a href="doctors.php">Our Doctor</a><i class="fa fa-chevron-down"></i>
                                    <ul class="dropdown-submenu second_submenu">
                                        <li><a href="doctors-details.php">Doctor's Detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="faq.php">FAQ</a></li>
                                <li><a href="pricing.php">Pricing</a></li>
                               
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="services.php"  class= <?php echo get_base("services.php"); ?>>Our Services</a><i class="fa fa-chevron-down"></i>
                            <ul class="dropdown-submenu">
                                <li class="submenu_child">
                                    <a href="services.php">Services</a><i class="fa fa-chevron-down"></i>
                                    <ul class="dropdown-submenu second_submenu">
                                        <li><a href="services-details.php">Services-Details</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="shop-detail.php"  class= <?php echo get_base("shop.php"); ?>>Shop</a></li>
                        <li class="dropdown"><a href="contact.php"  class= <?php echo get_base("contact.php"); ?>>Contact us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>