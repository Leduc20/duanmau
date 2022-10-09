<?php
session_start();
include "../model/pdo.php";
include "../model/line.php";
include "../model/products.php";
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
                insert_line($tenloai);
                $error = "Thêm thành công";
            }
            include "./line/add.php";
            break;
        case 'dslh':
            $listline = loadall_line();
            include "./line/list.php";
            break;
        case 'deletelh':
            if (isset($_GET['id_commodities'])) {
                delete_line($_GET['id_commodities']);
            }
            $listline = loadall_line();
            include "./line/list.php";
            break;
        case 'editlh':
            if (isset($_GET['id_commodities'])) {

                $dm = loadone_procuts_line($_GET['id_commodities']);
            }
            $sql = "SELECT * FROM ` commodities` order by id_commodities desc";
            $listline = pdo_query($sql);
            include "./line/upadate.php";
            break;
        case 'update':
            if (isset($_POST['update'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update($id, $tenloai);
                $error = "Cập nhật thành công";
            }
            $listline = loadall_line();
            include "./line/list.php";
            break;

            //hàng hoa\
            case 'addhh':
                if (isset($_POST['themmoi'])) {
                    $tenloai = $_POST['tenloai'];
                    insert_products($tenloai);
                    $error = "Thêm thành công";
                }
                include "./products/add.php";
                break;
            case 'dshh':
                $listproducts = loadallproducts();
                include "./products/list.php";
                break;
            case 'deletehh':
                if (isset($_GET['id_commodities'])) {
                    delete_products($_GET['id_commodities']);
                }
                $listproducts = loadallproducts();
                include "./products/list.php";
                break;
            case 'edithh':
                if (isset($_GET['id_commodities'])) {
    
                    $dm = loadone_procuts($_GET['id_commodities']);
                }
                $sql = "SELECT * FROM ` commodities` order by id_commodities desc";
                $listproducts = pdo_query($sql);
                include "./products/upadate.php";
                break;
            case 'updatehh':
                if (isset($_POST['update'])) {
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update($id, $tenloai);
                    $error = "Cập nhật thành công";
                }
                $listproducts = loadallproducts();
                include "./products/list.php";
                break;
        // case 'addhh':
        //     include "./products/add.php";
        //     break;
        // case 'dshh':
        //     include "./products/list.php";
        //     break;
        // case 'updatesp':
        //     include "./products/list.php";
        //     break;
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
