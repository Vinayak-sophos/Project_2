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

<!-- // show data and links for contact seller -->
<h3><?php if (!$len) {
    echo("Sorry, no item found, <a href='".generate_url("store", "add_items")."'>Add Items</a>");
    exit;
} else if ($len == 1) {
    echo("Showing {$len} result");
}
else {
    echo("Showing {$len} results");
} ?></h3>
<table>
    <tr><th>Image</th><th>Title</th><th>Price</th><th>College</th><th>Category</th><th>Date</th><th>Info</th></tr>
    <?php for($i = 0; $i < $len; $i++){
        $name = "num_".$i;
        echo("<tr>
                <td>
                    <a class=\"lightbox\" href=\"#full\">
                        <img src='".UPLOAD_PATH.${$name}['image']."' alt='".${$name}['image']."' width='70px' height='70px' />
                    </a>
                    <div class=\"lightbox-target\" id=\"full\">
                        <img src='".UPLOAD_PATH.${$name}['image']."' alt='".${$name}['image']."' />
                    <a class=\"lightbox-close\" href=\"#\"></a>
                    </div>
                </td>
                <td>{${$name}['item_name']}</td>
                <td>{${$name}['price']}</td>
                <td>{${$name}['college']}</td>
                <td>{${$name}['category']}</td>
                <td>{${$name}['date']}</td>
                <td><a href='".generate_url('store', 'more_info')."&item_id={${$name}['item_id']}'>More Info</a></td>
            </tr>");
    } ?>
</table>