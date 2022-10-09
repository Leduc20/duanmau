<?php
function insert_products($tenloai)
{
    $sql = "INSERT INTO ` commodities`(`name`) VALUES ('$tenloai')";
    pdo_execute($sql);
}
function delete_products($id)
{
    $sql = "DELETE FROM ` commodities` WHERE id_commodities=$id";
    pdo_execute($sql);
}
function loadall()
{
    $sql = "SELECT * FROM ` commodities` order by id_commodities desc";
    $listproducts = pdo_query($sql);
    return $listproducts;
}
function loadone($id)
{
    $sql = "SELECT * FROM ` commodities` WHERE id_commodities =$id";
    $dm = pdo_query_one($sql);
    return $dm;
}
function update($id,$tenloai)
{
    $sql = "UPDATE ` commodities` SET name='" . $tenloai . "' WHERE id_commodities=" . $id;
    pdo_execute($sql);
}
