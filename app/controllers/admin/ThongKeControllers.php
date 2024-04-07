<?php
    
    // QUAN LY THONG KE
    function quanLyThongKe() {
        $maLoai = isset($_GET['ma_loai'])? $_GET['ma_loai']: 1;
        $thongKe = getSanPhamDanhMuc( $maLoai);
        include VIEWS_URL . "admin/thongke/index.php";
    }

?>