<html>
    <head>
        <title><?php echo($title); ?></title>
    </head>
    <body>
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style1.css">
        <link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style.css">
        <div id = "navigation">
            <ul>
               <div id = "icon"><li>DilseDeal</li></div>
               <li><a href="<?php echo(generate_url('personalize', 'logout')); ?>">LOGOUT</a></li>
               <li><a href="<?php echo(generate_url('store', 'add_items')); ?>">SELL</a</li>
               <li><a href="<?php echo(generate_url('store', 'store')); ?>">STORE</a></li>
               <li><a href="<?php echo(generate_url("store", "home")); ?>"><?php echo ("HOME")//echo($name); //?></a></li>
            </ul>
        </div>
