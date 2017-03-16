<form method="post" action="<?php echo(generate_url("personalize", "login")); ?>">
        <div>
            <input autocomplete="on" name="email" placeholder="E-mail" type="email"/>
        </div>
        <div>
            <input name="password" placeholder="Password" type="password"/>
        </div>
        <div>
            <button type="submit">
                  Log In
            </button>
        </div>
</form>
<div>
    or <a href=<?php echo(generate_url("personalize", "register_form")); ?>>register</a> for an account
</div>
