<h1>Add Item</h1>
<form action="<?php echo(generate_url("store", "add_item_db")); ?>" method="post" enctype="multipart/form-data">
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
    <input type="text" name="item_name" placeholder="Item Title"/><br/>
    <textarea placeholder="Item Description" name="description"></textarea><br/>
    <textarea placeholder="Contact Info" name="contact"></textarea><br/>
    <input type="radio" name="choice" value="donate" />I Want to Donate
    <input type="radio" name="choice" value="sell" />I Want to Sell<br/>
    <input type="text" name="price" placeholder="Price(in Rs.)"/><br/>
    <input type="file" name="fileToUpload"><br/>
    <button type="submit">Add Item</button><br/>
</form>