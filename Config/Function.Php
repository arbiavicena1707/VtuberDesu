<?php

function ValidasiData($Data)
{
    foreach ($Data as $Product => $Value) {
        $Value = trim($Value);
        if ($Value === '' || $Value === 0 || $Value === null || $Value == False) {
            return $Product;
        }
    }
    return 0;
}

function InputProduct($Data, $Koneksi)
{
    $Name = $Data['Name'];
    $Description = $Data['Description'];
    $Price = $Data['Price'];
    $Stock = $Data['Stock'];
    $Category = $Data['Category'];
    $Image = $Data['Image'];

    $Tanggal =  date("Y-m-d H:i:s");;
    
    $sql = "INSERT INTO Product (Name, Description, Price, Stock, Categories_Id	,Image, Created_at) VALUES (?, ?, ?, ?, ?,?, ?)";
    $stmt = mysqli_prepare($Koneksi, $sql);
    if ($stmt == false) {
        return "FAILED";
    }

    mysqli_stmt_bind_param($stmt, 'ssiiiss', $Name, $Description, $Price, $Stock, $Category,$Image, $Tanggal);
    $result = mysqli_stmt_execute($stmt);

    if (!$result)
        return false;

    mysqli_stmt_close($stmt);
    return true;
}
