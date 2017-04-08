<br/><br/><br/><br/><table>
    <?php for($i = 0; $i < $len; $i++){
        $name = "num_".$i;
    ?>
                <tr>
                        <td><img src="<?php echo(UPLOAD_PATH.${$name}['image']); ?>" alt="<?php echo(${$name}['image']); ?>" width='70px' height='70px'/></td>
                        <td>Item Name - <?php echo(${$name}['item_name']); ?></td>
                        <td>Category - <?php echo(${$name}['category']); ?></td>
                        <td>Price - Rs. <?php echo(${$name}['price']); ?></td>
                        <td>Date - <?php echo(${$name}['date']); ?></td>
                        <td>Status - <?php echo(${$name}['status']); ?></td>
                </td>
                </tr>
    <?php } ?>
</table>