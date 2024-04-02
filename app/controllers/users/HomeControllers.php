<?php

function homePage()
{
    $listSanPhamhot = getAllSanPhamBanChay();
    // debug($listSanPhamhot);
    $listSanPham = getAllSanPhamNew();
    include VIEWS_URL . "users/index.php";
}
// function SanPhamID() {
//     $ma_san_pham =$_GET['ma_san_pham'];
//     $listSanPhamID = getOneSanPham($ma_san_pham);
//     debug($listSanPhamID);
//      $listKichThuoc = getAllKichThuoc();
//     $listMauSac = getAllMauSac();
//     $listBinhLuan= getBinhLuanID($ma_san_pham);
//     include VIEWS_URL . "users/chitietsanpham.php";
// }
