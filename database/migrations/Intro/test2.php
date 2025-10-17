<?php
// define("PI", 3.14);

// // constant
// $age =10;
// $age="john";
// echo PI;

// if(true){
//     define("IS_Late",false);
// }
// var_dump(IS_Late);
//Margic constant give infor about the current script
echo __DIR__;
echo "<br />";
echo __FILE__;
echo "<br />";
echo __LINE__;
echo "<br />";
/** 
*Doc blocker comment extension:php doc blocker
* @param 
*/

function add($a, $b){
    return $a +$b;
}