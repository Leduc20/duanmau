<?php
include "../model/pdo.php";
include "../model/products.php";
w-full
include "global.php";
include "header.php";
$showProducts=loadall_products_content();
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'dktv':
            include "./dangky/form.php";
            break;
        case 'qmk':
            include "./Forgotpassword/form.php";
            break;
        case 'lh':
            include "lienhe.php";
            break;
        default:
            include "slide.php";
            include "content.php";
            break;
    }
} else {
    include "slide.php";
    include "content.php";
}

include "footer.php";
