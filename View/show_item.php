<link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style7.css">
<?php
    $name = "num_0";
    echo("<img src='".UPLOAD_PATH.${$name}['image']."' alt='".${$name}['image']."' width='400px' /><br/>
    <div class = \"info\">
        <div class = \"itemname\">
            <b>{${$name}['item_name']}</b><br/>
        </div>
        <div class = \"category\">    
            ({${$name}['category']})<br/>
        </div>
        <div class = \"desc\">
            {${$name}['description']}<br/>
        </div>");
        if (${$name}['choice']== "donate")
        {
            echo("<div class = \"sell\">Seller is donating this item.</div>");
        }
        else
        {
            echo("<div class = \"sell\">Selling at Rs. ".${$name}['price']."</div>");
        }
    echo("        
        <div class = \"college\">    
            College - {${$name}['college']}<br/>
        </div>
        <div class = \"date\">    
            Uploaded for sale on {${$name}['date']}<br/>
        </div>
        <a href='".generate_url('store', 'contact_seller')."&item_id={${$name}['item_id']}'><img class = \"contactseller\" src = \"../img/contactseller.png\" width = \"80px\"></a><br/>
        <a href='".generate_url('sctore', 'buy')."&item_id=".${$name}['item_id']."'><img class = \"addtocart\" src = \"../img/addtocart.png\" width = \"80px\"></a>
        <div id = \"contacttext\">Contact Seller</div>
        <div id = \"addtext\">Add to Cart</div>
    </div>"
        );
?>