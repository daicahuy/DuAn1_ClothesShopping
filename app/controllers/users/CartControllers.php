<?php
    // Gio hang cua toi
    function gioHang() {
        $params = getAllParam($_GET);

        $maNguoiDung = $_SESSION["user"]["ma_nguoi_dung"];
        $gioHang = getGioHangByIdUser($maNguoiDung);
        $maGioHang = $gioHang["ma_gio_hang"];

        // Xu ly xoa san pham da chon
        if(isset($_POST["btn-delete-product-selected"])) {
            $errors = [];
            if(isset($_POST["maChiTietSanPham"])) {
                $listMaChiTietSanPhamChecked = $_POST["maChiTietSanPham"]; 
            }
            else {
                $errors[] = "Vui lòng chọn sản phẩm để xóa";
            }
            
            if(empty($errors)) {
                foreach($listMaChiTietSanPhamChecked as $maChiTietSanPhamChecked) {
                    xoaSanPhamInGioHangById($maGioHang, $maChiTietSanPhamChecked);
                }
                $thongbao = "Xóa thành công sản phẩm đã chọn";
                $type = "success";
            }
        }

        // Xu ly tien hanh thanh toan
        if(isset($_POST["btn-checkout"])) {
            $errors = [];

            if(isset($_POST["maChiTietSanPham"])) {
                $listMaChiTietSanPhamChecked = $_POST["maChiTietSanPham"]; 
            }
            else {
                $errors[] = "Vui lòng chọn sản phẩm để tiến hành thanh toán";
            }

            if(empty($errors)) {
                $sanPhamDonHang = [];

                foreach($listMaChiTietSanPhamChecked as $maChiTietSanPhamChecked) {
                    array_push($sanPhamDonHang, [
                        "ma_chi_tiet_san_pham" => $maChiTietSanPhamChecked,
                        "so_luong_muon_mua" => $_POST["soLuongMuonMua$maChiTietSanPhamChecked"]
                    ]);
                }

                $_SESSION["donHang"]["san_pham"] = $sanPhamDonHang;
                $_SESSION["donHang"]["ma_nguoi_dung"] = $_SESSION["user"]["ma_nguoi_dung"];
                nextPage("?url=thanhtoan");
                die;
            }
        }

        
        $sumCart = 0;
        $productsInCart = getAllProductInCart($maGioHang);
        include VIEWS_URL . "users/giohang.php";
    }

    // Them san pham vao gio hang
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
            $thongbao = "Thêm sản phẩm thành công";
            $type = "success";
        }
        else {
            $thongbao = "Lỗi: Sản phẩm đã tồn tại trong giỏ hàng";
            $type = "danger";
        }

        nextPage("?$url&thongbao=$thongbao&type=$type");
        die;
    }

    // Xoa 1 san pham trong gio hang
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

    // Thanh toan
    function thanhToan() {
        if(isset($_POST["btn-payment"])) {
            echo "thanh toan !";
            die;
        }

        if(isset($_POST["btn-cancel"])) {
            echo "huy bo";
            die;
        }

        $listSanPham = $_SESSION["donHang"]["san_pham"];
        $sumProducts = 0;
        $shipping = 30000;
        include VIEWS_URL . "users/thanhtoan.php";
    }

?>