<?php

?>


<form action="<?php echo$_SERVER['PHP_SELF'];?>" method="POST">
    
    <div>
        <label for="number">Number:</label>
        <input type="number" name="number">
    </div>

    <input type="submit" value="Submit" name="submit">
</form>