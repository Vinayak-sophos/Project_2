<body>
    <link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style3.css">
    <div class = "notnavigation">
    <h3><?php if (!$len) {
        echo("You have not put any item on sale, <a href='".generate_url("store", "add_items")."'>sell now</a>");
        exit;
    } 
    else if ($len == 1) {
        echo("<div id = \"numitems\">You have put 1 item on sale</div>");
    }
    else {
        echo("<div id = \"numitems\">You have put {$len} items on sale</div>");
    } ?></h3>
        
        <?php for($i = 0; $i < $len; $i++){
            $name = "num_".$i;
            echo("
                <div id = \"item\">
                    <img src='".UPLOAD_PATH.${$name}['image']."' alt='".${$name}['image']."' width='70px' height='70px'/>
                    
                    <div class=\"desc-div\">
                        <div id = \"name\">
                            {${$name}['item_name']}
                        </div>
                        <div id = \"desc\">
                            {${$name}['description']}
                        </div>
                        <div id = \"date\">
                            Uploaded for selling on {${$name}['date']}
                        </div>
                    </div>
                </div>
                   <button class = \"buttn\" \"button\" onclick=location.href='".generate_url("store", "remove")."&item_id={${$name}['item_id']}'>Remove</button>
                <div id = \"line\"><hr></div>
                ");
            
        } ?>
    </div>
</body>