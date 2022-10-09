<?php
function insert_($tenloai)
{
    $sql = "INSERT INTO ` commodities`(`name`) VALUES ('$tenloai')";
    pdo_execute($sql);
}
function delete_($id)
{
    $sql = "DELETE FROM ` commodities` WHERE id_commodities=$id";
    pdo_execute($sql);
}
function loadall()
{
    $sql = "SELECT * FROM ` commodities` order by id_commodities desc";
    $list = pdo_query($sql);
    return $list;
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
