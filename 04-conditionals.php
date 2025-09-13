<?php

/* if else + comparison
 ==
 ===
 != or <>
 !==
 <
 <=
 >
 >=

//  Logical operators

&& - and || -  ! - not

Switch

*/


// if else statement

// $age = 20;

// if($age <= 12){
//     echo "Too young to watch Harry poter";
// }
// elseif ($age < 15) {
//     echo "You may watch Harry Poter";
// }
// else{
//     echo "you should watch Harry Poter";
// }


//  Logical operators


$age = 15;
$watched = false;

// if ($age >=15 && !$watched){
//     echo "you must watch Harry Poter";
// }


// if ( $age >= 15 || $watched){
//     echo "You should Watch Harry Poter";
// }

// Switch

$day = 3;

switch($day){
    case 1 :
        echo "Monday";
        break ;

    case 2 :
        echo "Tuesday";
        break;
    case 3 :
        echo "Wed";
        break;
    default:
        echo "invalid day"  ;
}

?>