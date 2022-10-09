<?php
function insert_products($tenloai)
{
    $sql = "INSERT INTO ` `(`name`) VALUES ('$tenloai')";
    pdo_execute($sql);
}
function delete_products($id)
{
    $sql = "DELETE FROM ` ` WHERE id_=$id";
    pdo_execute($sql);
}
function loadall()
{
    $sql = "SELECT * FROM ` ` order by id_ desc";
    $listproducts = pdo_query($sql);
    return $listproducts;
}
function loadone($id)
{
    $sql = "SELECT * FROM ` ` WHERE id_ =$id";
    $dm = pdo_query_one($sql);
    return $dm;
}
function update($id,$tenloai)
{
    $sql = "UPDATE ` ` SET name='" . $tenloai . "' WHERE id_=" . $id;
    pdo_execute($sql);
}
