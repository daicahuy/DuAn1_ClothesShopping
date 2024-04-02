<?php
    function chiTietSanPham() {
        $maSanPham = $_GET['maSanPham'];
        $sanpham = getSanPhamID($maSanPham);
        $listBoSuuTap = getBoSuuTapIDSanPham($sanpham["ma_san_pham"]);

        include VIEWS_URL . "users/chitietsanpham.php";
    }

?>