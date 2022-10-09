<?php
function insert_products($name, $filename, $price, $detail, $sale,$idlh)
{
    $sql="INSERT INTO products(`name`, `image`, `price`, `detail`, `sale`, `id_commodities`) VALUES ('$name','$filename','$price','$detail','$sale','$idlh')";
    pdo_execute($sql);
}
function delete_products($id)
{
    $sql = "DELETE FROM `products` WHERE id_hh=".$id;
    pdo_execute($sql);
}
function loadall_products($key,$idhh)
{
    $sql = "SELECT * FROM `products` where 1";
    if($key!=""){
        $sql.=" and name like '%".$key."%'";
    }
    if($idhh>0){
        $sql.=" and id_commodities='".$idhh."'";
    }
    $sql.= " order by id_hh desc";
    $listproducts = pdo_query($sql);
    return $listproducts;
}
function loadone_products($id)
{
    $sql = "SELECT * FROM `products` WHERE id_hh =".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_products($name, $filename, $price, $detail, $sale, $idlh)
{
    if($filename!=""){

    }
    $sql = "UPDATE ` products` SET name='" . $tenloai . "' WHERE id_hh=" . $id;
    pdo_execute($sql);
}
