<style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');
@import url('https://fonts.googleapis.com/css?family=Shadows+Into+Light');
input[type=text], input[type=password], input[type=email] {
    font-size: 15px;
    background : #fff;
    height: 42px;
    width:250px;
    display: inline-block;
    border: 1px solid #000 !important;
    border-radius: 2px;
    box-sizing: border-box;
} 
body{
    background : #fff;
    font-family: 'Josefin Sans';
}
.reg{
    width:7%;
    height : 5%;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    position: absolute;
    cursor: pointer;
    background-color: #09f;
    top:1%;
    left:91.5%;
    opacity: 0.5;
    filter: alpha(opacity=50);
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    border-radius : 3px;
    border-width : 0px;
}
.reg:hover{
    top:.6%;
}
#em{
    position: absolute;
    top : 42%;
    left : 41.5%;
}
#pass{
    position:absolute;
    top:49%;
    left:41.5%;
}
.button3{
    padding: 5px 102px;
    background-color: #09f;
    top:58%;
    left:41.5%;
    border-radius : 3px;
}
.button3:hover {
    background-color: #ff33cc;
    color: white;
}
#newhere{
    position : relative;
    text-align : center;
    top : 54%;
    font-size : 1.2em;
}
#gohome{
     font-family: 'Shadows Into Light';
     color:#000;
     position :absolute;
     z-index: 10;
     left:38%;
     font-size: 120px;
     top:5%;
     text-decoration : none;
}
#titledisp{
    position : relative;
    top : 33%;
    text-align : center;
    left : -5%;
    font-size : 3em;
    text-decoration : bold;
}
a{ 
    color: inherit; 
} 
</style>
<html>
<body>
<link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style.css">
<div id = "gohome">
  <a href = "../index.php" style="text-decoration:none"><b>DilseDeal</b></a>
</div>
<div id = "titledisp">
    Login
</div>
<div class = "form1">
<form method="post" action="<?php echo(generate_url("personalize", "login")); ?>">
        <!--<div style="posiiton : absolute; margin-left:41.5%; margin-top:20%;">-->
        <div id = "em">    
            <input autocomplete="on" name="email" placeholder="E-mail" type="email" width = "50px" height = "10px" required/>
        </div>
        <div id = "pass">
        <!--<div style = "posiiton : absolute; margin-left:41.5%; margin-top:.5%;">-->
            <input name="password" placeholder="Password" type="password" width = "50px" height = "10px" required/>
        </div>
        <div>
            <button type="submit" class = "button button3">
                  Log In
            </button>
        </div>
</form>
</div>
<div>
    <a href=<?php echo(generate_url("personalize", "register_form")); ?>><button class = "reg">Sign Up</button></a>
</div>
<div id = "newhere">
    New here? <a href=<?php echo(generate_url("personalize", "register_form")); ?>>Sign Up</a>
</div>
</body>
</html>
