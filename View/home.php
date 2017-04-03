<link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style5.css">
<div id = "balance">
    <img src = "../img/balance.png" class = "homeicon">
    <div id = "balancetext">
        <p>Current Balance</br>Rs. <?php echo($balance); ?></p><br/>
    </div>
</div>
<div id = "deposit">
    <a href="<?php echo(generate_url('store', 'deposit')); ?>"> 
    <img src = "../img/deposit.png" class = "homeicon">
    <div id = "deposittext">
        Deposit Money</a><br/>
    </div>
</div>  
<div id = "forsale">
    <a href="<?php echo(generate_url('store', 'my_items')); ?>">
    <img src = "../img/forsale.png" class = "homeicon">
    <div id = "forsaletext">
        Added By You</a><br/>
    </div>
</div>
<div id = "transactions">
    <a href="<?php echo(generate_url('store', 'history')); ?>">
    <img src = "../img/transactions.png" class = "homeicon">
    <div id = "transactionstext">
        Transactions</a><br/>
    </div>
</div>
