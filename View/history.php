<br/><br/><br/><br/><table border = "1"width = "100%">
    <tr><th>Image</th><th>Item Name</th><th>Category</th><th>Price</th><th>Date</th><th>Status</th></tr>
    <?php for($i = 0; $i < $len; $i++){
        $name = "num_".$i;
    ?>
                <tr align = "center">
                        <td><img src="<?php echo(UPLOAD_PATH.${$name}['image']); ?>" alt="<?php echo(${$name}['image']); ?>" width='70px' height='70px'/></td>
                        <td><?php echo(${$name}['item_name']); ?></td>
                        <td><?php echo(${$name}['category']); ?></td>
                        <td>Rs. <?php echo(number_format(${$name}['price'], 2, '.', '')); ?></td>
                        <td><?php echo(${$name}['date']); ?></td>
                        <td><?php echo(${$name}['status']); ?></td>
                </td>
                </tr>
    <?php } ?>
</table>