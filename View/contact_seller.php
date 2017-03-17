<h1>Store</h1>
<table>
    <tr><th>Image</th><th>Title</th><th>Description</th><th>Price</th><th>Date</th><th>Contact</th></tr>
    <?php
        echo("<tr><td><img src='".UPLOAD_PATH.$image."' alt='".$image."' width='70px' height='70px' /></td><td>{$item_name}</td>
        <td>{$description}</td><td>{$price}</td><td>{$date}</td><td>{$email}</td></tr>");
    ?>
    <tr><td colspan="6"><a href="<?php echo(generate_url("store", "store")."&id=".$id); ?>">View other items from this Seller</td></tr>
</table>