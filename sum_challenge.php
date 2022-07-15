<?php
/*
 * File: sum_challenge.php
 * Project: Coding Challenge
 * File Created: Friday, 15th July 2022 00:13:52 AM
 * Author: Wisdom 
 * Version: 1.0
 * Brief: Given an array of integers numbers and an integer target, this program creates a function that returns the two numbers such that they add up to target
 * -----
 * Last Modified: Friday, 03 July 2019 04:00:02 PM
 * Modified By: Wisdom 
 * -----
 * Copyright ©2022 Wisdom 
 */

/*
* The function below creates a hashmap of integer pairs and values. The function contains a foorlop that iterates through each item
* in the array specified by the user, and checks to see if the needed number is present in the array. Tis needed number is gotten 
* by subtracting the target number from each of the given elements in the array. This method is based on the premise that the inverse
* of addition is subtraction, thus making it possible for us to identify the correct pairs. If the algorithm finds it, it returns the
* two numbers that gave us the needed number. If it does not, it returns nothing.
*/

function AddUpToTarget($arr, $target)
{
    // Creating a hashmap (PHP Arrays by default uses key->value pairs, which is the equivalent of a hash map or hash table in Java)
    $hashMap = array();

    // Temporary array to store the two numbers that returns the needed target
    $toReturn = array();

    // Loop through the array of input specified by user
    for($i = 0; $i<count($arr); $i++)
    {
        $searchItem = $target - $arr[$i]; // searchItem is the targetNumber - TheCurrentNumberAtEachIterationOfTheLoop
        
        if (in_array($searchItem, $hashMap)) { // if the number is found in the hashmap...

            array_push($toReturn, $searchItem, $arr[$i]); // add the two pairs that gave us the needed numbers into an array
           
            print_r(" The two integers that sums up to the required target, " . $target . ", 
             are [ " . $toReturn[0] . ", " . $toReturn[1] . " ]"); // print the pairs out
        } else {
            array_push($hashMap, $arr[$i]); // if the required number is not found, then add the current index as key and its corresponding number as value to the hashmap
        }
        
    } 
    return null; 

}

/* 
*************************************************************************************************
* Main Code
* The user can modify the first two lines. You can supply a target and any array of your choice
************************************************************************************************* 
*/

$t = 11; // target number. Please don't forget to set it here
$a = array( 7, 4, 45, 6, 10, 8 ); // user-supplied array

/*
* Function Call
*/
$result = AddUpToTarget($a, $t);


?>
