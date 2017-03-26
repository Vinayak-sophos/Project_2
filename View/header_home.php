<html>
    <head>
        <title><?php echo($title); ?></title>
    </head>
    <body>
        <link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style1.css">
        <div class = "name">
            <h1>Welcome, <a href="<?php echo(generate_url("store", "home")); ?>"><?php echo($name); ?></a></h1>
        </div>
        <ul>
          <li> <a href="<?php echo(generate_url('store', 'add_items')); ?>">Sell Item</a</li>
          <li><a href="<?php echo(generate_url('store', 'store')); ?>">Go to Store</a></li>
          <li id = "lgout"><a href="<?php echo(generate_url('personalize', 'logout')); ?>">Logout</a></li>
        </ul>
