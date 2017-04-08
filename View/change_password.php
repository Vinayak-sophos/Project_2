<form action="<?php echo(generate_url("personalize", "change_password")); ?>" method="post">
    <br><br><br><input type="password" name="old" placeholder="Old Password">
    <br><input type="password" name="new" placeholder="New Password">
    <br><input type="password" name="confirm" placeholder="Confirm Password">
    <br><button type="submit">Update Password</button>
</form>