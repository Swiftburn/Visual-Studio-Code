<?php

// I want to know the best places to go in a city... (from file)

    if(isset($_GET["city"])){ // If I have a valid city...
        $city = $_GET["city"]; // Get city and save in attractions variable

        $attractions = get_list_from_file();

        if(strcmp($city, "all") == 0){
            header("Content-type: application/json");
            print_r(json_encode($attractions));
        }
        else{
            header("Content-type: text/plain");

            if(array_key_exists($city, $attractions)){ //Go to attractions and print attractions in that city
                echo "The best place to visit in ". $city ." is ". $attractions[$city]. ".\n";
            }
            else{
                echo "I did not find that on my list! Perhaps we can add it someday.";
            }
        }
    }

    function get_list_from_file(){
        $contents = file("cities.txt", FILE_IGNORE_NEW_LINES);
        $attractions = array();
        foreach ($contents as $line){
            $parts = explode(",", $line);
            $attractions[$parts[0]] = $parts[1];
        }
        return $attractions;
    }







// I want to know the best places to go in a city... (hard coded)

    // if(isset($_GET["city"])){//If I have a valid city... 
    //     $city = $_GET["city"]; //if city is in list

    //     $attractions = get_list();

    //     if(strcmp($city, "all") == 0){
    //         header("Content-type: application/json");
    //         print_r(json_encode($attractions));
    //     }
    //     else{
    //         header("Content-type: text/plain");
        

    //         if(array_key_exists($city, $attractions)){ //print city
    //             echo "The best place to visit in ". $city ." is " .$attractions[$city]. ".\n";
    //         }
    //         else{
    //             echo "I did not find that on my list! Perhaps we can add it someday.";
    //         }
    //     }

    // }

    // function get_list(){
    //     /* Hard code all the places and the attractions in those cities... */
    //     $attractions = array( "Seattle" => "Space Needle",
    //                             "New York" => "Ellis Island",
    //                             "Boston" => "Boston Harbor",
    //                             "Philadelphia" => "Valley Forge",
    //                             "Detroit" => "The Henry Ford Museum",
    //                             "Paris" => "Eiffel Tower",
    //                             "Vancouver BC" => "Stanley Park",
    //                             "Tokyo" => "Mt. Fuji",
    //                             "Beijing" => "Great Wall",
    //                             "London" => "Big Ben");

    //     return $attractions;
        
    // }

?>