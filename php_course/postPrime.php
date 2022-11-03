<?php
    //when submit button is hit do this
if(isset($_POST['submit'])){
        //calls number user has submitted
   $number = $_POST['number']; 
        
        //checks for prime
   function prime($number){ 
    
        //if number is 1, then not prime
    if ($number == 1) 
        return 0;

        //divide by 2 until it is equal to 0
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0; //return false
    }
    return 1; //returns true
   } 
   
   //calls function to check number
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
        <input type="number" name="number" placeholder="checks if number is prime">
    </div>

    <input type="submit" value="Submit" name="submit">
</form>