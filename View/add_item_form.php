<body>
    <link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style.css">
    <link rel="stylesheet" href="<?php echo(CSS_PATH); ?>style4.css">
    <div id = "headname">DilseDeal</div>
    <form action="<?php echo(generate_url("store", "add_item_db")); ?>" method="post" enctype="multipart/form-data">
        <div id = "category">
            <select name="category">
                <option value="0" selected disabled/>Select Category</option>
                <option value="books" />Books</option>
                <option value="clothing" />Clothing</option>
                <option value="electronics" />Electronics</option>
                <option value="furniture" />Furniture</option>
                <option value="sports" />Sports</option>
                <option value="vehicle" />Vehicle</option>
                <option value="bags" />Bags</option>
            </select><br/>
        </div>
        <div id ="title">
            <input type="text" name="item_name" placeholder="Item Title"/><br/>
        </div>
        <div id ="desc">
            <input type = "text" placeholder="Item Description" name="description"><br/>
        </div>
        <div id = "contact">
            <input type = "text"  placeholder="Contact Info" name="contact"><br/>
        </div>
        <div id ="radio">
            <input type="radio" name="choice" value="donate" />I Want to Donate
            <input type="radio" name="choice" value="sell" />I Want to Sell<br/>
        </div>
        <div id = "price">
            <input type="text" name="price" placeholder="Price(in Rs.)"/><br/>
        </div>
        <div id ="upload">
            <input type="file" name="fileToUpload"><br/>
        </div>
        <div id ="add">
            <button class = "button3 button" type="submit">Add Item</button><br/>
        </div>
    </form>
</body>