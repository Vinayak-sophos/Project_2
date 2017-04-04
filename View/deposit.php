<link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style6.css">
<div id = "depositform">
    <form action="<?php echo(generate_url('store', 'deposit')); ?>" method="post">
        <div id = "enteramount">Amount(Rs.)</div><input type="number" name="deposit"/>
        <button type="submit"> Deposit Money</button>
    </form>
</div>