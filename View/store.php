<h1>Store</h1>
<form method="post" action="<?php echo($_SEVRER['PHP_SELF']); ?>">
    <input type="text" name="search" placeholder="Search" />
    <button type="submit">Search</button>
</form>
<!-- // show data and links for contact seller -->
<h3><?php if (!$len) {
    echo("Sorry, no item found, <a href='".generate_url("store", "add_items")."'>add items</a>");
    exit;
} else if ($len == 1) {
    echo("Showing {$len} result");
}
else {
    echo("Showing {$len} results");
} ?></h3>
<table>
    <tr><th>Image</th><th>Title</th><th>Price</th><th>College</th><th>Category</th><th>Date</th><th>Contact Seller</th></tr>
    <?php for($i = 0; $i < $len; $i++){
        $name = "num_".$i;
        echo("<tr><td><img src='".UPLOAD_PATH.${$name}['image']."' alt='".${$name}['image']."' width='70px' height='70px' /></td><td>{${$name}['item_name']}</td>
        <td>{${$name}['price']}</td><td>{${$name}['college']}</td><td>{${$name}['category']}</td><td>{${$name}['date']}</td>
        <td><a href='".generate_url('store', 'contact_seller')."&item_id={${$name}['item_id']}'>Contact Seller</a></td></tr>");
    } ?>
</table>