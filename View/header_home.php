<html>
    <head>
        <title><?php echo($title); ?></title>
    </head>
    <body>
        <h1>Welcome, <a href="<?php echo(generate_url("store", "home")); ?>"><?php echo($name); ?>!</a></h1>
        <a href="<?php echo(generate_url('store', 'add_items')); ?>">Sell Item</a><br/>
        <a href="<?php echo(generate_url('store', 'store')); ?>">Go to Store</a><br/>
        <a href="<?php echo(generate_url('personalize', 'logout')); ?>">Logout</a><br/>