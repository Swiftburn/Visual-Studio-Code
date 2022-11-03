<?php

if(isset($_POST['submit'])){
   $number = $_POST['number'];
   function prime($number){
    if ($number == 1)
        return 0;

    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
   } 
   
   $check = prime($number);
   if ($check == 1)
    echo "Prime";
   else
    echo "Not Prime";
}

?>


<form action="<?php echo$_SERVER['PHP_SELF'];?>" method="POST">
    
    <div>
        <label for="number">Number:</label>
        <input type="number" name="number">
    </div>

    <input type="submit" value="Submit" name="submit">
</form>