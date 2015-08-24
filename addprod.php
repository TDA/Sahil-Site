<?php
require_once('dbconn.php');
$name=$_POST['name'];
$prod_img=$_POST['imgname'];
$prod_cat=$_POST['catname'];
$prod_price=$_POST['price'];
$prod_stock=$_POST['stock'];
$prod_desc=$_POST['desc'];
@$prod_id=$_POST['id'];

if(!isset($prod_id)){
if(empty($name)||empty($prod_img)||empty($prod_cat)||empty($prod_price)||empty($prod_stock)||empty($prod_desc))
echo 0;
else{
$q1="select * from 	product_list where prod_name='$name'";
$res=mysqli_query($dbconn,$q1) or die("q1");
	if(mysqli_num_rows($res)!=0)
	echo 1;
	else{		
	$query="insert into product_list values ('','$name',$prod_price,'$prod_desc','$prod_img',$prod_stock,'$prod_cat')";
	$res=mysqli_query($dbconn,$query) or die('21');
	echo 2;
		}
	}
}
else{
		$updatequery="update product_list set prod_name='$name',
		prod_price=$prod_price,
		prod_desc='$prod_desc',
		prod_img='$prod_img',
		prod_stock=$prod_stock,
		prod_category='$prod_cat'
		where prod_id=$prod_id";
		$res=mysqli_query($dbconn,$updatequery) or die('21');
		echo 2;
	}
?>

