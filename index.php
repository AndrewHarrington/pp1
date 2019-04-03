<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 4/3/2019
 * Time: 2:10 PM
 */
include("functions.php");

$numbers = array(7, 9, 8, 9, 8, 8, 6);
echo 'printArr <br>';
printArr($numbers);

echo '<br>largest <br>';
$largest = largest($numbers);
echo "$largest <br>";

echo '<br>average <br>';
$average = average($numbers);
echo "$average <br>";

echo '<br>removeDups <br>';
$newNums = removeDups($numbers);
printArr($newNums);

echo '<br>distribution <br>';
$numCount = distribution($numbers);
printArr($numCount);
