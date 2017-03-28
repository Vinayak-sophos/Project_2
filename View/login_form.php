<style>
   input[type=text], input[type=password], input[type=email] {
    font-size: 15px;
    background : #fff;
    height: 42px;
    width:250px;
    display: inline-block;
    border: 1px solid #000;
    border-radius: 2px;
    box-sizing: border-box;
} 
body{
    background : #cfc;
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

}
.reg:hover{
    top:.6%;
}
#em{
    position: absolute;
    top : 32%;
    left : 41.5%;
}
#pass{
    position:absolute;
    top:39%;
    left:41.5%;
}
.button3{
    padding: 5px 102px;
    background-color: #09f;
    top:48%;
    left:41.5%;
}
.button3:hover {
    background-color: #ff33cc;
    color: white;
}
</style>
<html>
<body>
<link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style.css">
<div class = "form1">
<form method="post" action="<?php echo(generate_url("personalize", "login")); ?>">
        <!--<div style="posiiton : absolute; margin-left:41.5%; margin-top:20%;">-->
        <div id = "em">    
            <input autocomplete="on" name="email" placeholder="E-mail" type="email" width = "50px" height = "10px"/>
        </div>
        <div id = "pass">
        <!--<div style = "posiiton : absolute; margin-left:41.5%; margin-top:.5%;">-->
            <input name="password" placeholder="Password" type="password" width = "50px" height = "10px"/>
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
<div>
  <a href = "../index.php">Go home</a>
</div>
</body>
</html>
