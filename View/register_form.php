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
.lgn{
    width:7%;
    height : 5%;
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    position: absolute;
    cursor: pointer;
    background-color: #09f;
    color: #000;
    top:1%;
    left:91.5%;
    opacity: 0.5;
    filter: alpha(opacity=50);
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.lgn:hover{
    top:.6%;
}
#gn{
  position : fixed;
  top:60%;
  left : 37%;
}
#clg{
  position:fixed;
  top:43%;
  left:37%;
}
</style>
<html>
<body>
  <link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style.css">
<form action="<?php echo(generate_url("personalize", "register")); ?>" method="post">
      <div style="margin-left:42%; margin-top:15%; size=35;">
        <input autocomplete="on" name="name" placeholder="First Name" type="text"/>
      </div>
      <div style="margin-left:42%; margin-top:.5%;">
        <input autocomplete="on" name="email" placeholder="E-mail Address" type="email"/>
      </div>
      <div id = "clg">College - </div>
      <select name="college"style="margin-left:42%; margin-top:.5%; size=35;">
        <option value="c1">Name1</option>
        <option value="c2">Name2</option>
        <option value="c3">Name3</option>
        <option value="c4">Name4</option>
      </select>
      <div style="margin-left:42%; margin-top:.5%;">
        <input autocomplete="on" name="password" placeholder="Password" type="password"/>
      </div>
      <div style="margin-left:42%; margin-top:.5%;">
        <input autocomplete="on" name="conformation" placeholder="Confirmation" type="password"/>
      </div>
      <div style="margin-left:42%; margin-top:.5%;">
        <div id = "gn">Gender - </div>        
        <input type="radio" name="gender" value="Male" /> Male
        <input type="radio" name="gender" value="Female" /> Female
      </div>
      <div>
          <button type="submit" class = "button button2">
                  Sign Up
            </button>
      </div>
</form>
<div>
    <a href=<?php echo(generate_url("personalize", "login_form")); ?>><button class = "lgn">Login</button></a>
</div>
<div>
  <a href = "../index.php">Go home</a>
</div>
</body>
</html>