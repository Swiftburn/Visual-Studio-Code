<?php
#echo "Hello World"; 
#print "Text";
#This is a single line comment
//This is also a single line comment

/*
This is how a
multiline
comment looks
like
*/

$numbers = [1,3,4,5];
$fruits = array('apple', 'orange');

#print_r($numbers); //lets you see what's inside array

#var_dump($numbers); //shows you inside array w/ more info

$color = [
    1 => 'red',
    2 => 'blue',
    3 => 'green'
];

echo $color[1];
echo "<br>";

$person = [
    'first_name' => 'Adolfo',
    'last_name' => 'Barrientos',
    'email' => 'ebarrientos@atu.edu'
];

echo $person['first_name'];
echo "<br>";
echo $person['email'];
echo "<br>";


# If condition... 

$age = 10;

if($age>=18){
    echo "You are good to vote!";
}
else {
    echo "Sorry! Can't vote yet!";
}
echo "<br>";

$posts = ['First Post'];

$first_post = !empty($posts) ? $posts[0] : 'No posts';

echo $first_post;
echo "<br>";

$string = "Hello World!";

echo strlen($string);
echo "<br>";
echo strrev($string);

function registerUser(){
    $x = 10;
    echo 'User Registered;';
}

#echo $x;
registerUser();
echo "<br>";

function registeredUser($email){
    echo $email.' registered';
}

registeredUser($posts[0]);
echo "<br>";


#echo 5 + "7"; //Prints out 12

$user_name = "Pokemon4lyfe";
$age = 25;
$age_in_dog_years = $age/7;
$this_class_is_fun = true;

"1" + 1 == 2;

#$age = (int) "21";

#echo $user_name[0]; #prints out p
#echo $user_name[5]; # prints out o

#5+"2 turtle doves"; //7 turtle doves
5 . "2 turtle doves"; # 52 turtle doves

#strlen($user_name); #length is 12
//str.substring($user_name,0, 3);
?>