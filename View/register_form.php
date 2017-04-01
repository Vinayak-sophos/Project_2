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
  position : absolute;
  top:50%;
  left : 37%;
}
#clg{
  position:absolute;
  top:29%;
  left:37%;
}
#fname{
  position : absolute;
  top :15%;
  left : 42%;
}
#em1{
  position:absolute;
  top:22%;
  left:42%;
}
#clg1{
  position : absolute;
  top : 30%;
  left: 40%;
}
#pass1{
  position : absolute;
  top : 36%;
  left:42%;
}
#conf{
  position : absolute;
  top : 43%;
  left:42%;
}
#gn1{
  position :absolute;
  top : 50%;
  left:42%;
}
.button3{
  position : absolute;
  padding: 5px 96px;
  background-color: #09f;
  top:55%;
  left:42%;
}
.button3:hover {
    background-color: #ff33cc;
    color: white;
}
</style>
<html>
<body>
  <link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style.css">
<form action="<?php echo(generate_url("personalize", "register")); ?>" method="post">
      <div id = "fname">
        <input autocomplete="on" name="name" placeholder="First Name" type="text" required/>
      </div>
      <div id = "em1">
        <input autocomplete="on" name="email" placeholder="E-mail Address" type="email" required/>
      </div>
      <div id = "clg">College - </div>
      <div id = "clg1">
      <select name="college" style="margin-left:42%; margin-top:.5%; size=35;" required>
        <option value="c1">Name1</option>
        <option value="c2">Name2</option>
        <option value="c3">Name3</option>
        <option value="c4">Name4</option>
      </select>
      </div>
      <div id = "pass1">
        <input autocomplete="on" name="password" placeholder="Password" type="password" required/>
      </div>
      <div id = "conf">
        <input autocomplete="on" name="confirmation" placeholder="Confirmation" type="password" required/>
      </div>
      <div id>
        <div id = "gn">Gender - </div>        
          <div id = "gn1">
            <input type="radio" name="gender" value="Male" /> Male
            <input type="radio" name="gender" value="Female" /> Female
          </div>
        </div>
      <div>
          <button type="submit" class = "button button3">
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