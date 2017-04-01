<h2>CART</h2>
<h3><?php if (!$len) {
    echo("Sorry, no item found, <a href='".generate_url("store", "store")."'>Buy Items</a>");
    exit;
} else if ($len == 1) {
    echo("{$len} item");
}
else {
    echo("{$len} items");
} ?></h3>
<table>
    <tr><th>Image</th><th>Title</th><th>Price</th><th>Category</th></tr>
    <?php for($i = 0; $i < $len; $i++){
        $name = "num_".$i;
        echo("<tr>
                <td>
                    <img src='".UPLOAD_PATH.${$name}['image']."' alt='".${$name}['image']."' width='70px' height='70px' />
                </td>
                <td>{${$name}['item_name']}</td>
                <td>{${$name}['price']}</td>
                <td>{${$name}['category']}</td>
            </tr>");
    } ?>
</table>