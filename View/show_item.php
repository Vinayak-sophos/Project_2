<link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style7.css">
<script>
    function advanced() {
    //     if (document.getElementById('togg').innerHTML == 'Advanced Search') {
    //         document.getElementById('togg').innerHTML = "Close";
            document.getElementById('advanced').style.display = "initial";
        // }
        // else {
        //     document.getElementById('togg').innerHTML = "Advanced Search";
        //     document.getElementById('advanced').style.display = "none";
        // }
    }
</script>
<?php
    $name = "num_0";
    echo("<img src='".UPLOAD_PATH.${$name}['image']."' alt='".${$name}['image']."' width='350vw' /><br/>
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
        <img class = \"contactseller\" id = \"togg\" src = \"../img/contactseller.png\" onclick=\"advanced()\" style=\"height:80px; cursor : pointer;\"><br/>
        <a href='".generate_url('store', 'buy')."&item_id=".${$name}['item_id']."'><img class = \"addtocart\" src = \"../img/addtocart.png\" width = \"80px\"></a>
        <div id = \"contacttext\">Contact Seller</div>
        <div id = \"addtext\">Add to Cart</div>
        <div id=\"advanced\" style=\"display:none;\">
            email - {$email}<br><br>Phone - {${$name}['contact']}");
        ?>
        <a style="color : rgb(226, 59, 61);" style="top : 2%;" href="<?php echo(generate_url("store", "store")."&id=".$id); ?>">View other items from this Seller</a>
        </div>
    </div>
<!--<a href='".generate_url('store', 'contact_seller')."&item_id={${$name}['item_id']}'><img class = \"contactseller\" src = \"../img/contactseller.png\" width = \"80px\"></a><br/>-->
    <!--<button onclick="advanced()" id="togg">A</button>-->