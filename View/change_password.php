<style>
@import url('https://fonts.googleapis.com/css?family=Shadows+Into+Light');
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
</style>
<link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style7.css">
<div id = "gohome">
  <a href = "../index.php" style="text-decoration:none"><b>DilseDeal</b></a>
</div>
<form action="<?php echo(generate_url("personalize", "change_password")); ?>" method="post">
    <input type="password" name="old" placeholder="Old Password">
    <br><input type="password" name="new" placeholder="New Password">
    <br><input type="password" name="confirm" placeholder="Confirm Password">
    <br><button type="submit">Update Password</button>
</form>