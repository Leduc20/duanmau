<?php
include "../model/pdo.php";
include "header.php";
include "nav.php";
// $VIEW_NAME="header.php";
// controler
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            //loại hàng
        case 'addlh':
            if (isset($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $sql = "INSERT INTO ` commodities`(`name`) VALUES ('$tenloai')";
                pdo_execute($sql);
                $error = "Thêm thành công";
            }
            include "./line/add.php";
            break;
        case 'dslh':
            $sql = "SELECT * FROM ` commodities`";
            $listline = pdo_query($sql);
            include "./line/list.php";
            break;
        case 'deletelh':
            if(isset($_GET['deletelh'])){
                $delete=$_GET['deletelh'];
                $sql="delete from line where id_ commodities=$delete";
                pdo_execute($sql);
            }
            
            include "./line/list.php";
            break;
            //hàng hoa
        case 'addhh':
            include "./products/add.php";
            break;
        case 'dshh':
            include "./products/list.php";
            break;
            //khach hang
        case 'addkh':
            include "./listuser/add.php";
            break;
        case 'dskh':
            include "./listuser/list.php";
            break;
            //Binh luan
        case 'dsbl':
            include "./comment/list.php";
            break;
        case 'blct':
            include "./comment/detail.php";
            break;
            //thong kê
        case 'dstk':
            include "./statistic/list.php";
            break;
        case '':
            include "./thongke/danhsach.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
