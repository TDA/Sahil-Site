<?php 
session_start();
$title="Admin Home";
$nav=1;
require_once('header.php');
require_once('dbconn.php');
$query="select password from admlog";
$res=mysqli_query($dbconn,$query) or die('error in query');
$storedpass=mysqli_fetch_array($res);
echo '<a href="admin.php" class="back">Back to Admin Home</a>';
if($_SESSION['pass']==$storedpass['password'])
{
	?>
	<?php
	$action=$_GET['action'];
	if($action=='add')
	{
		?>
        
        <form>
        <fieldset><label for="name">Product Name</label><input type="text" placeholder="name" name="name" id="name" required><br>
        <label for="imgname">Image Name</label><input type="text" placeholder="image name" name="imgname" id="imgname" required><br>
        <label for="catname">Category Name</label><input type="text" placeholder="category name" name="catname" id="catname" required>
        </fieldset>
        <fieldset>
        <label for="price">Price</label><input type="number" placeholder="price" name="price" id="price" required><br>
        <label for="stock">Stock</label><input type="number" placeholder="stock" name="stock" id="stock" required>
        </fieldset>
        <fieldset>
        <label for="desc">Product Description</label><textarea name="desc" id="desc" rows="10" cols="70" placeholder="Type in the description" required></textarea>
        </fieldset>
        <input type="button" value="ADD" id="add">
        </form>
        
        <?php
	}
	else if($action=='edit')
	{
		$query="select * from product_list";
		$res=mysqli_query($dbconn,$query) or die('error in query');
		?>
    <div id="editor">
    <form>
    	<fieldset>
    	<label>Product ID</label><input type="text" disabled="disabled" id="id">
        </fieldset>
        <fieldset><label for="name">Product Name</label><input type="text" placeholder="name" name="name" id="name" required><br>
        <label for="imgname">Image Name</label><input type="text" placeholder="image name" name="imgname" id="imgname" required><br>
        <label for="catname">Category Name</label><input type="text" placeholder="category name" name="catname" id="catname" required>
        </fieldset>
        <fieldset>
        <label for="price">Price</label><input type="number" placeholder="price" name="price" id="price" required><br>
        <label for="stock">Stock</label><input type="number" placeholder="stock" name="stock" id="stock" required>
        </fieldset>
        <fieldset>
        <label for="desc">Product Description</label><textarea name="desc" id="desc" rows="10" cols="70" placeholder="Type in the description" required></textarea>
        </fieldset>
        <input type="button" value="UPDATE" id="update">
        </form>
        </div>
	    
		<table>
        <tr>
			<th>Product ID</th>
            <th>Product Name</th>
            <th>Category</th>
			<th>Price</th>
			<th>Stock</th>
			<th>Desc</th>
			<th>Product Image</th>
            <th>Edit</th>
            <th>Remove</th>
		</tr>
	
        <?php
		while($row=mysqli_fetch_array($res))
		{
			echo "<tr>"."<td class='id'>".$row['prod_id']."</td>"."<td class='pname'>".$row['prod_name']."</td>"."<td class='catname'>".$row['prod_category']."</td>"."<td class='price'>".$row['prod_price']."</td>"."<td class='stock'>".$row['prod_stock']."</td>"."<td class='desc'>".$row['prod_desc']."</td>"."<td class='pimage'>".$row['prod_img']."</td>"."<td><a href='' class='edit' value='".$row['prod_id']."'>Edit</a></td>"."<td><a href='' class='remove' value='".$row['prod_id']."'>Remove</a></td></tr>";
		}
		?>
        </table>
        <?php
	}
}
else
{
echo AUTHERR;
}

require_once('footer.php');

?>

