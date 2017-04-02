<link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style2.css">
<h1><a href="<?php echo(generate_url('store', 'store')); ?>">Store</a></h1>
<form method="post" action="<?php echo(generate_url('store', 'store')); ?>">
    <input type="text" name="q" placeholder="Search" />
    <button type="submit">Search</button>
</form>

<button onclick="advanced()" id="togg">Advanced Search</button>

<div id="advanced" style="display:none">
    
    
<!-- SECTION CATEGORIES -->

<?php
    $categories = [
        "Bags",
        "Vehicle",
        "Sports",
        "Furniture",
        "Electronics",
        "Clothing",
        "Books"
        ];
?>
<h2>Search By Category</h2>
<ul>
    <?php foreach($categories as $category) { ?>
        <li><a href="<?php echo(generate_url("store", "store").'&category='.lcfirst($category)); ?>"><?php echo($category); ?></a></li>
    <?php } ?>
</ul>





<!-- SECTION COLLEGES -->

<?php
    $colleges = [
        "c4",
        "c3",
        "c2",
        "c1"
        ];
?>
<h2>Search By College</h2>
<ul>
    <?php foreach($colleges as $college) { ?>
        <li><a href="<?php echo(generate_url("store", "store").'&college='.$college); ?>"><?php echo($college); ?></a></li>
    <?php } ?>
</ul>

</div>


<script>
    function advanced() {
        if (document.getElementById('togg').innerHTML == 'Advanced Search') {
            document.getElementById('togg').innerHTML = "Close";
            document.getElementById('advanced').style.display = "initial";
        }
        else {
            document.getElementById('togg').innerHTML = "Advanced Search";
            document.getElementById('advanced').style.display = "none";
        }
    }
</script>


    <link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style2.css">
<!-- // show data and links for contact seller -->
<div id = "headstore">
<h3><?php if (!$len) {
    echo("Sorry, no item found, <a href='".generate_url("store", "add_items")."'>Add Items</a>");
    exit;
} else if ($len == 1) {
    echo("Showing {$len} result");
}
else {
    echo("Showing {$len} results");
} ?></h3>
</div>
    <!--<tr><th>Image</th><th>Title</th><th>Price</th><th>College</th><th>Category</th><th>Date</th><th>Contact Seller</th></tr>-->

    <?php for($i = 0; $i < $len; $i++){
        $name = "num_".$i;
        echo("  <div class = \"element\">    
                    <img src='".UPLOAD_PATH.${$name}['image']."' alt='".${$name}['image']."' width='70px' height='70px'/>
                    <div class=\"desc-div\">
                        <div id = \"name\">
                            <b>{${$name}['item_name']}</b>({${$name}['category']})
                        </div>
                        <div id = \"price\">
                            Price - Rs. {${$name}['price']}
                        </div>
                        <div id = \"clg\">
                            College - {${$name}['college']}
                        </div>
                        <div id = \"con\">
                            <a href='".generate_url('store', 'contact_seller')."&item_id={${$name}['item_id']}'>Contact Seller</a>
                        </div>
                    </div>

            ");
    } ?>
                 <hr class = \"horizontal\">
                
        
</body>

