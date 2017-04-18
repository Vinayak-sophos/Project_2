<style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');
@import url('https://fonts.googleapis.com/css?family=Shadows+Into+Light');
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
    background : #fff;
    font-family: 'Josefin Sans';
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
    top:1%;
    left:91.5%;
    opacity: 0.5;
    filter: alpha(opacity=50);
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    border-radius : 3px;
    border-width : 0px;
}
a{ 
    color: inherit; 
} 
.lgn:hover{
    top:.6%;
}
#gn{
  position : absolute;
  top:73%;
  left : 37%;
}
#clg{
  position:absolute;
  top:53%;
  left:37%;
}
#fname{
  position : absolute;
  top :38%;
  left : 42%;
}
#em1{
  position:absolute;
  top:45%;
  left:42%;
}
#clg1{
  position : absolute;
  top : 52.5%;
  left: 40%;
}
#pass1{
  position : absolute;
  top : 59%;
  left:42%;
}
#conf{
  position : absolute;
  top : 66%;
  left:42%;
}
#gn1{
  position :absolute;
  top : 73%;
  left:42%;
}
.button3{
  position : absolute;
  padding: 5px 96px;
  background-color: #09f;
  top:78%;
  left:42%;
  border-radius : 5px;
}
.button3:hover {
    background-color: #ff33cc;
    color: white;
}
#gohome{
     font-family: 'Shadows Into Light';
     color:#000;
     position :absolute;
     z-index: 10;
     left:38%;
     font-size: 120px;
     top:1%;
     text-decoration : none;
}
#titledisp{
    position : relative;
    top : 29%;
    text-align : center;
    left : -3%;
    font-size : 3em;
    text-decoration : bold;
}
select{
    width : 170%;
    height : 30px;
    border-radius : 3px;
}
</style>
<html>
<body>
<link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style.css">
<div id = "gohome">
  <a href = "../index.php" style="text-decoration:none"><b>DilseDeal</b></a>
</div>
<div id = "titledisp">
    Register
</div>
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
        <?php
          $colleges = [
            "MNIT Jaipur",
            "BITS Goa",
            "IIT Roorkee",
            "IIT Delhi",
            "IIT Mumbai",
            "MNNIT Allahabad",
            "NIT Warangal",
            "NIT Calicut"
            ];
            foreach($colleges as $college){
        ?>
        <option value="<?php echo $college; ?>"><?php echo $college; ?></option>
        <?php } ?>
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
</body>
</html>