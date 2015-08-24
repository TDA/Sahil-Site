<?php
$title="Admin Login";
$nav=1;
require_once('header.php');

?>
<form id="login" action="admin.php" method="post">

<h3>Log In</h3>
<fieldset>
<input type="text" name="username" placeholder="Username" value="admin" disabled>
<input type="password" name="password" placeholder="Password">
</fieldset>
<input type="submit" value="submit" name="submit">
</form>
<?php
require_once('footer.php');
?>