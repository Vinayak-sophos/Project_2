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
    <div id="fullpage">
        <div class="section" id ="page1">
          <div id ="title" class = "in">
            <b>OLX.com</b>
          </div>
          <div id = "subtitle">
            Buy/Sell anything
          </div>
          <div class="box blue"></div>
          <a href="<?php echo(generate_url("personalize", "register_form")); ?>"><button class="button button1">Sign Up</button></a>
          <a href="<?php echo(generate_url("personalize", "login_form")); ?>"><button class="button button2">Log In</button></a>
        </div>
        <div class="section">
          This section will talk about the webApp. How we can buy and sell everything here.
        </div>
        <div class="section">
          <div id = "topic">
            <h4>How to use</h4>
            <div class="screenshot" id = "s1">
              <img src = "../img/s1.png" style="width:400px;" class="screenshot"/>
            </div>
            <div class="screenshot" id = "s2">
              <img src = "../img/s2.png" style="width:400px;" class="screenshot"/>
            </div>
            <div class="screenshot" id = "s3">
              <img src = "../img/s2.png" style="width:400px;" class="screenshot"/>
            </div>
          </div>
        </div>
        <div class="section">
          <div id ="div3">
            How to use(part2)
          </div>
        </div>
        <div class="section">
          So what are waiting for, Sign up <a href=<?php echo(generate_url("personalize", "register_form")); ?>>here</a>
        </div>
    </div>