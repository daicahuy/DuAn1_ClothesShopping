<?php

    // QUAN LY DON HANG
    function quanLyDonHang() {
        include VIEWS_URL . "admin/donhang/index.php";
    }

    function dongGoiDonHang() {
        include VIEWS_URL . "admin/donhang/DangDongGoi.php";
    }
    
    function vanChuyenDonHang() {
        include VIEWS_URL . "admin/donhang/VanChuyenDonHang.php";
    }
    
    function giaoThanhCong() {
        include VIEWS_URL . "admin/donhang/GiaoThanhCong.php";
    }
    
    function huy() {
        include VIEWS_URL . "admin/donhang/GiaoKhongThanhCong.php";
    }
    
    function chiTietDonHang() {
        // $param = getAllParam($_GET);
        // debug($param);
        include VIEWS_URL . "admin/donhang/ChiTietDonHang.php";
    }

?>