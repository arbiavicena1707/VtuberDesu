<?php

function ValidasiData($Data){
    foreach($Data as $Product => $Value){
        $Value = trim($Value);
        if($Value === '' || $Value === 0 || $Value === null || $Value == False){
            Return $Product;
        }
    }
    return 0;
}
?>