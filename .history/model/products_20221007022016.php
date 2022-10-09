<?php
function insert_products($name, $filename, $price, $detail, $sale,$idlh)
{
    $sql="INSERT INTO products(`name_`, `image`, `price`, `detail`, `sale`, `id_commodities`) VALUES ('$name','$filename','$price','$detail','$sale','$idlh')";
    pdo_execute($sql);
}
function delete_products($id)
{
    $sql = "DELETE FROM `products` WHERE id_hh=".$id;
    pdo_execute($sql);
}
function loadall_products($key,$idlh)
{
    $sql = "SELECT * FROM `products` where 1";
    if($key!=""){
        $sql.=" and name like '%".$key."%'";
    }
    if($idlh>0){
        $sql.=" and id_commodities='".$idlh."'";
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
function update_products($id_hh,$name, $filename, $price, $detail, $sale, $idlh)
{
    if($filename!=""){
        $sql="UPDATE `products` SET `name_pro`='$name',`image`='$filename',`price`='$price',`detail`='$detail',`sale`='$sale',`id_commodities`='$idlh' WHERE id_hh=".$id_hh;
    }else{
        $sql="UPDATE `products` SET `name_pro`='$name',`price`='$price',`detail`='$detail',`sale`='$sale',`id_commodities`='$idlh' where `id_hh`=".$id_hh;
    }
    
    // $sql = "UPDATE ` products` SET name='" . $tenloai . "' WHERE id_hh=" . $id;
    pdo_execute($sql);
}
?>