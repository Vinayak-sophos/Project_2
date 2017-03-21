<h1>Register Form</h1>
<form action="<?php echo(generate_url("personalize", "register")); ?>" method="post">
      <div>
        First Name: <input autocomplete="on" name="name" placeholder="First Name" type="text"/>
      </div>
      <div>
        E-mail address: <input autocomplete="on" name="email" placeholder="E-mail Address" type="email"/>
      </div>
      College: 
      <select name="college">
        <option value="c1">Name1</option>
        <option value="c2">Name2</option>
        <option value="c3">Name3</option>
        <option value="c4">Name4</option>
      </select>
      <div>
        Password: <input autocomplete="on" name="password" placeholder="Password" type="password"/>
      </div>
      <div>
        Retype Password: <input autocomplete="on" name="conformation" placeholder="Confirmation" type="password"/>
      </div>
      Gender:
      <br>
        <input type="radio" name="gender" value="Male" /> Male
        <input type="radio" name="gender" value="Female" /> Female
      <div>
          <button type="submit">
                Register
          </button>
      </div>
</form>
<div>
    or <a href=<?php echo(generate_url("personalize", "login_form")); ?>>Login</a> to your account
</div>