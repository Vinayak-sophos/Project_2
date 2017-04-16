<style>
.cartbody{
    position : relative;
    top : 80px;
}
tr{
    height : 80px;
}
</style>
<div class = "cartbody">
<h3 style = "text-align : center;"><?php if (!$len) {
    echo("Sorry, no item found, <a href='".generate_url("store", "store")."'>Buy Items</a>");
    exit;
} else if ($len == 1) {
    echo("Showing {$len} item");
}
else {
    echo("Showing {$len} items");
} ?></h3>
<table border="1" width = "100%">
    <tr><th>Image</th><th>Title</th><th>Price</th><th>Category</th></tr>
    <?php for($i = 0; $i < $len; $i++){
        $name = "num_".$i;
        echo("<tr align = \"center\">
                <td>
                    <img src='".UPLOAD_PATH.${$name}['image']."' alt='".${$name}['image']."' width='70px' height='70px' />
                </td>
                <td>{${$name}['item_name']}</td>
                <td>{${$name}['price']}</td>
                <td>{${$name}['category']}</td>
            </tr>");
    } ?>
</table>
</div>