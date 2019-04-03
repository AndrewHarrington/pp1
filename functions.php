<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 4/3/2019
 * Time: 2:15 PM
 */
function printArr($arr){
    foreach ($arr as $key => $value){
        echo "$key => $value <br>";
    }
}

function largest($arr){
    $largest = 0;
    foreach ($arr as $element){
        if($element > $largest){
            $largest = $element;
        }
    }
    return $largest;
}

function average($arr){
    $total = 0;
    $size = 0;
    foreach ($arr as $element){
        $size += 1;
        $total += $element;
    }
    return ($total/$size);
}

function removeDups($arr){
    return array_unique($arr);
}

function distribution($arr){
    $limited = array();

    foreach ($arr as $key => $value){
        if(isset($limited[$value])){
            $limited[$value] += 1;
        }
        else{
            $limited[$value] = 1;
        }
    }
    ksort($limited);
    return $limited;
}
