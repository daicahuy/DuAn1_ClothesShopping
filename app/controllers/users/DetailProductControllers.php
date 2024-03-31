<?php

    function chiTietSanPham() {
            $ma_san_pham =$_GET['ma_san_pham'];
            $SanPhamID = getOneSanPham($ma_san_pham);
            // debug($SanPhamID);
            // $listKichThuoc = getAllKichThuoc();
            // $listMauSac = getAllMauSac();
            $listBinhLuan= getBinhLuanID($ma_san_pham);
        include VIEWS_URL . "users/chitietsanpham.php";
    }

?>