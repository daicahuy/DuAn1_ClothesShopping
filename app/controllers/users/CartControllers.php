<?php
    // Gio hang cua toi
    function gioHang() {
        $maNguoiDung = $_SESSION["user"]["ma_nguoi_dung"];
        $gioHang = getGioHangByIdUser($maNguoiDung);
        $maGioHang = $gioHang["ma_gio_hang"];
        $sumCart = 0;

        $productsInCart = getAllProductInCart($maGioHang);
        // debug($productsInCart);
        $params = getAllParam($_GET);
        include VIEWS_URL . "users/giohang.php";
    }

    // Them gio hang
    function themGioHang() {
        $view = $_GET["view"];
        $url = str_replace("$", "&", $view);

        $maChiTietSanPham = $_GET["maChiTietSanPham"];
        $soLuongMuonMua = $_GET["soLuongMuonMua"];

        $maNguoiDung = $_SESSION["user"]["ma_nguoi_dung"];
        $gioHang = getGioHangByIdUser($maNguoiDung);
        $maGioHang = $gioHang["ma_gio_hang"];

        if(!getProductByIdAndMaGioHang($maGioHang,$maChiTietSanPham)) {
            insertCartDetail($maGioHang,$maChiTietSanPham,$soLuongMuonMua);
            echo "<script>alert('Thêm sản phẩm thành công')</script>";
        }
        else {
            echo "<script>alert('Sản phẩm đã tồn tại trong giỏ hàng')</script>";
        }

        nextPage("?$url");
        die;
    }

    // Xoa san pham trong gio hang
    function xoaSanPhamGioHang() {
        $view = $_GET["view"];
        $url = str_replace("$", "&", $view);

        $maChiTietSanPham = $_GET["maChiTietSanPham"];

        $maNguoiDung = $_SESSION["user"]["ma_nguoi_dung"];
        $gioHang = getGioHangByIdUser($maNguoiDung);
        $maGioHang = $gioHang["ma_gio_hang"];

        xoaSanPhamInGioHangById($maGioHang, $maChiTietSanPham);

        nextPage("?$url");
        die;
    }

    // Xoa toan bo gio hang
    function xoaToanBoGioHang() {
        $view = $_GET["view"];
        $url = str_replace("$", "&", $view);

        $maNguoiDung = $_SESSION["user"]["ma_nguoi_dung"];
        $gioHang = getGioHangByIdUser($maNguoiDung);
        $maGioHang = $gioHang["ma_gio_hang"];

        xoaAllSanPhamGioHang($maGioHang);

        nextPage("?$url");
        die;
    }

    // Thanh toan
    function thanhToan() {
        include VIEWS_URL . "users/thanhtoan.php";
    }

?>