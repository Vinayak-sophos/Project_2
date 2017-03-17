<h3><?php if (!$len) {
    echo("You have not put any item on sale, <a href='".generate_url("store", "add_items")."'>sell now</a>");
    exit;
} else if ($len == 1) {
    echo("You put 1 item on sale");
}
else {
    echo("You put {$len} items on sale");
} ?></h3>
<table>
    <tr><th>Image</th><th>Title</th><th>Description</th><th>Price</th><th>Date</th><th>Remove</th></tr>
    <?php for($i = 0; $i < $len; $i++){
        $name = "num_".$i;
        echo("<tr><td><img src='".UPLOAD_PATH.${$name}['image']."' alt='".${$name}['image']."' width='70px' height='70px'/></td><td>{${$name}['item_name']}</td><td>{${$name}['description']}</td><td>{${$name}['price']}</td><td>{${$name}['date']}</td>
        <td><button onclick=location.href='".generate_url("store", "remove")."&item_id={${$name}['item_id']}'>Remove</button></td></tr>");
    } ?>
</table>