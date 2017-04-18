<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style.css">
<link rel="stylesheet" type="text/css" href="jquery.fullPage.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="vendors/jquery.easings.min.js"></script>
<script type="text/javascript" src="jquery.fullPage.min.js"></script>
<link rel='stylesheet prefetch' href='https://rawgit.com/alvarotrigo/fullPage.js/master/jquery.fullPage.css'>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://rawgit.com/alvarotrigo/fullPage.js/master/vendors/scrolloverflow.min.js'></script>
<script src='https://rawgit.com/alvarotrigo/fullPage.js/master/jquery.fullPage.js'></script>
<script src="<?php echo(JS_PATH); ?>index.js"></script>
    <div class = "topbtn">
          <a href="<?php echo(generate_url("personalize", "login_form")); ?>"><button class="button button3">Log In</button></a>
          <a href="<?php echo(generate_url("personalize", "register_form")); ?>"><button class="button button4">Sign Up</button></a>
    </div>
    <div id="fullpage"> <!-- fullpage.js used for home page -->
        <div class="section" id ="page1">
          <div id ="title" class = "in">
            <b>DilseDeal</b>
          </div>
          <div id = "subtitle">
            <b>Buy/Sell anything</b>
          </div>
          <!--<div class="box blue"></div>-->
          <a href="<?php echo(generate_url("personalize", "login_form")); ?>"><button class="button button2">Log In</button></a><br/>
          <a href="<?php echo(generate_url("personalize", "register_form")); ?>"><button class="button button1">Sign Up</button></a>
        </div>
        <div class="section">
            Welcome to DilseDeal, the no.1 online platform for buying and selling products<br>
            <img src = "../img/first.png" width = "300" style = "margin-top : 100px">
            <!--<span style  ="font-size : 5em;top : -300px; color : #fff">Welcome to DilseDeal</span><div class = "details"><br> the no.1 online platform for buying and selling products<br>-->
            <!--Find lucrative deals for things that you want and sell stuff that you no longer find useful<br>-->
            <!--All at the click of a button<br>-->
            <!--Track your transactions with utmost ease<br>-->
            <!--Want to buy something but you're out of cash? Fear not, as adding cash has never been easier<br>-->
        </div>
        <div class="section" style = "background-color : #6f9;">
          Find lucrative deals for things that you want and sell stuff that you no longer find useful<br>
          <img src = "../img/buyitem.png" width = "300" style = "margin-top : 100px">
        </div>
        <div class="section" style = "background-color : rgb(195, 211, 12); color : #000">
          <div id ="div3">
            All at the click of a button<br>
            <img src = "../img/click.png" width = "300" style = "margin-top : 100px">
          </div>
        </div>
        <div class="section" style = "background-color : rgb(226, 65, 157); color : #fff">
          <div id ="div3">
            Track your transactions with utmost ease<br>
            <img src = "../img/transactions.png" width = "300" style = "margin-top : 100px">
          </div>
        </div>
        <div class="section" style = "background-color : #19194d; color : #fff">
          <div id ="div3">
            Want to buy something but you're out of cash? Fear not, as adding cash has never been easier<br>
            <img src = "../img/deposit.png" width = "300" style = "margin-top : 100px">
          </div>
        </div>
        <div class="section" style = "background-color : #ff8533;">
          <div id = "waittext">So what are you waiting for</div>
          <a href="<?php echo(generate_url("personalize", "login_form")); ?>"><button class="button button2">Log In</button></a>
          <a href="<?php echo(generate_url("personalize", "register_form")); ?>"><button class="button button1">Sign Up</button></a>
          </div>
    </div>