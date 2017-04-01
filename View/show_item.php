<?php
    $name = "num_0";
    echo("<img src='".UPLOAD_PATH.${$name}['image']."' alt='".${$name}['image']."' width='70px' height='70px' /><br/>
    {${$name}['item_name']}<br/>
    {${$name}['description']}<br/>
    {${$name}['contact']}<br/>
    {${$name}['choice']}<br/>
    {${$name}['price']}<br/>
    {${$name}['college']}<br/>
    {${$name}['category']}<br/>
    {${$name}['date']}<br/>
    <a href='".generate_url('store', 'contact_seller')."&item_id={${$name}['item_id']}'>Contact Seller</a><br/>
    <a href='".generate_url('store', 'buy')."&item_id=".${$name}['item_id']."'>Add this item to cart</a>");
?>