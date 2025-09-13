<?php
// functions

//Simple function

// function sayHello(){
//     echo "Hello World";
// }

// sayHello();

//  with parameters

// function greet($name){
//     echo "hello " . $name;
// }

// greet("kooshin");

// parameter default value


function greet($name = "yaya"){
    echo "hello " . $name;
}

greet("kooshin");
echo "<br>";
greet();
echo "<br>";


function multiply($a,$b){
    echo $a * $b;
}

multiply(2,5)








?>