<?php

if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['school'];
}

?>

<!--<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=Adolfo&school=ATU"> Click Me! </a>-->

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

<div>
    <label for="name">Name: </label>
    <input type="text" name="name">
</div>
<div>
    <label for="school">Name of School: </label>
    <input type="text" name="school">
</div>
<input type="submit" value="Submit" name="submit">
</form>