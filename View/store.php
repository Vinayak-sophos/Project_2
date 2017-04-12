<link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style2.css">
<h1><a href="<?php echo(generate_url('store', 'store')); ?>">Store</a></h1>
<form id = "searchbar" method="post" action="<?php echo(generate_url('store', 'store')); ?>">
    <input type="text" name="q" placeholder="Search" />
    <button type="submit">Search</button>
</form>

<!--<button onclick="advanced()" id="togg">Advanced Search</button>-->

<!--<div id="advanced" style="display:none">-->
<!-- Use Search form field-->

<!-- SECTION CATEGORIES -->
<div id = "advanced">
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

<form action="">
<?php foreach($categories as $category) { ?>
        <a href="<?php echo(generate_url("store", "store").'&category='.lcfirst($category)); ?>"><?php echo($category); ?></a><br>
    <?php } ?>
</form>



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
<form action = "">
    <?php foreach($colleges as $college) { ?>
        <a href="<?php echo(generate_url("store", "store").'&college='.$college); ?>"><?php echo($college); ?></a><br>
    <?php } ?>
</form>
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
    echo("Sorry, no item found, Add Item  <a href='".generate_url("store", "add_items")."'>here</a>");
    exit;
} else if ($len == 1) {
    echo("Showing {$len} result");
}
else {
    echo("Showing {$len} results");
} ?></h3>
</div>
    <!--<tr><th>Image</th><th>Title</th><th>Price</th><th>College</th><th>Category</th><th>Date</th><th>Contact Seller</th></tr>-->
<?php
    if($len==1)
    {
?>
    <table width = "23%" align = "center" style="border: 1px solid transparent">
<?php
    }
    else
    if($len==2)
    {
?>
    <table width = "46%" align = "center" style="border: 1px solid transparent">
<?php
    }
    else
    {
?>    
    <table width = "70%" align = "center" style="border: 1px solid transparent">
<?php
    }
?>
    <?php for($i = 0; $i < $len; $i++){
        $name = "num_".$i;
        if($i%3==0)
        {
            echo("<tr>");
        }
        echo("  <td width=\"20%\">
                <a href='".generate_url('store', 'more_info')."&item_id={${$name}['item_id']}'>
                    <div class = \"element\">    
                        <img src='".UPLOAD_PATH.${$name}['image']."' alt='".${$name}['image']." height='70px'/>
                        <div id = \"name\">
                            <b>{${$name}['item_name']}</b>  
                        </div>
                        <div id = \"category\">
                            ({${$name}['category']})
                        </div>
                        <div id = \"price\">
                            Price - Rs. {${$name}['price']}
                        </div>
                        <div id = \"clg\">
                            College - {${$name}['college']}
                        </div>
                    </div>
                </a>
                </td>                                                                                       
            ");
            if($i%3==2)
            {
                echo("</tr>");
            }
    } ?>
</table>
</body>

