<?php session_start();

require("../config.inc.php");
loadView('header_home', ["title" => "Captcha"]);

if(isset($_POST['Submit'])){
	// code for check server side validation
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		$msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.		
	}else{// Captcha verification is Correct. Final Code Execute here!		
    loadModel('personalize', 'deposit', $_SESSION['post']);
		$msg="<br><br><br><br><span style='color:green'>The Validation code has been matched and money deposition is successful.";		
		echo($msg);
    echo("<br/>Redirecting in 5 seconds....</span>");
    header("Refresh:5; url=".generate_url('store', 'home'));
    exit();
	}
}	

?>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style.css">
<script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
<body>
<div id="frame0">
  <h1>Validation</h1>
</div>
<br>

<form action="" method="post" name="form1" id="form1" >
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td align="right" valign="top"> Validation code:</td>
      <td><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
        <label for='message'>Enter the code above here :</label>
        <br>
        <input id="captcha_code" name="captcha_code" type="text">
        <br>
        <span id = "imagetext">Can't read the image? click <a href='javascript: refreshCaptcha();' style = "color : #f55">here</a> to refresh.</span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" onclick="return validate();" value="Submit" class="button1 button" style = "position: relative;top:-45px;"></td>
    </tr>
  </table>
</form>
</body>
</html>