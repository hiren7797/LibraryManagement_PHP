<!DOCTYPE html>
<html>
    <head>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-104414893-2"></script>
        
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="theme-color" content="#03a9f4">
        <link rel="stylesheet" href="csss/css/main.1.0.css">
        <link rel="stylesheet" href="csss/css/materialize.min.css">
        <link rel="stylesheet" href="csss/css/main.1.0.min.css">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Anton|Roboto:300,400,500" rel="stylesheet">
        <link rel="canonical" href="<?php echo $canonUrl; ?>" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <nav class="nav-extended light blue" style="background-image:url("images/navBackground.jpg");">

            <div class="nav-wrapper">
                <span class="font-weight-bold" style="font-size:80px;margin-top:20px;">Library</span>
                <ul class="right hide-on-med-and-down">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="/cart.php"><i class="fa fa-shopping-cart left" aria-hidden="true"></i>My Cart</a></li>
                    <li><a href="#contact-form">Special Order</a></li>
                    <li><a href="review.php">Review Us</a></li>
                    <li><a href="#contact-form">Contact</a></li>
                    <li><a href="about.php">About Us</a></li>
                </ul>
                <div></div>
            </div>

            <form action="search.php" method="get" id="search_form">
                <div>
                    <div class="col s8 l4 offset-s2 offset-l4 input-field">
                        <input id="search" type="text" name="q" placeholder="Search" style="width:500px;margin-left:500px;" class="white grey-text text-darken-3" autocomplete="off">
                    </div>
                </div>
            </form>

            <div class="nav-content">
                <ul class="tabs tabs-fixed-width grey lighten-5">
                    <li class="tab"><a target="_self" href="categories.php?q=ce" class="grey-text text-darken-2">Computer</a></li>
                    <li class="tab"><a target="_self" href="categories.php?q=it" class="grey-text text-darken-2">Information Technology</a></li>
                    <li class="tab"><a target="_self" href="categories.php?q=Controllers" class="grey-text text-darken-2">Civil</a></li>
                    <li class="tab"><a target="_self" href="categories.php?q=Sensors" class="grey-text text-darken-2">Chemical</a></li>
                    <li class="tab"><a target="_self" href="categories.php?q=IC" class="grey-text text-darken-2">IC</a></li>
                    <li class="tab"><a target="_self" href="categories.php?q=Kits" class="grey-text text-darken-2">Mechanical</a></li>
                    <li class="tab"><a target="_self" href="categories.php?q=EG+Kits" class="grey-text text-darken-2">Electronic</a></li>
                    <li class="tab hide"><a href="#" class="active"></a></li>
                </ul>
            </div>

        </nav>

        