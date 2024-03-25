<?php
    require_once "global.php";
    requireFiles(CONTROLLERS_URL . "admin");
    requireFiles(MODELS_URL);

    // ROUTER
    $url = isset($_GET["url"]) ? $_GET["url"] : 'admin';

    // Header admin
    if(strpos($url,"admin") == 0) {
        // Header admin
        $arrayDirectional = [];

        if (strpos($url,"danhmuc")) {
            $pageTitle = $textQuanLyDanhMuc;
            if(strpos($url,"them")) {
                array_push($arrayDirectional,$textThem);
            }
            else if(strpos($url,"sua")) {
                array_push($arrayDirectional,$textSua);
            }
        }
        else if(strpos($url,"sanpham")) {
            $pageTitle = $textQuanLySanPham;
            if(strpos($url,"danhsach")) {
                array_push($arrayDirectional,$textDanhSachSanPham);
                if(strpos($url,"chitiet")) {
                    if(isset($_POST["btn-add"])) {
                        array_push($arrayDirectional,$textThem);
                    }
                    else {
                        array_push($arrayDirectional,$textChiTietSanPham);
                    }
                }
            }
            else if(strpos($url,"mausac")) {
                array_push($arrayDirectional,$textMauSac);
            }
            else if(strpos($url,"kichthuoc")) {
                array_push($arrayDirectional,$textKichThuoc);
            }
        }
        else if (strpos($url,"nguoidung")) {
            $pageTitle = $textQuanLyNguoiDung;
            if(strpos($url,"doimatkhau")) {
                array_push($arrayDirectional,$textDoiMatKhau);
            }
        }
        else if (strpos($url,"binhluan")) {
            $pageTitle = $textQuanLyBinhLuan;
        }
        else if (strpos($url,"donhang")) {
            $pageTitle = $textQuanLyDonHang;
        }
        else if (strpos($url,"thongke")) {
            $pageTitle = $textThongKe;
        }
        else {
            $pageTitle = $textBangDieuKhien;
        }

        include "includes/admin/header.php";
    }
    else {
        // Header user
        include "includes/users/header.php";
    }

    // CONTENT
    switch($url) {
        // DASHBOARD
        case 'admin': {
            dashboard();
            break;
        }

        // QUAN LY DANH MUC
        case 'admin/danhmuc': {
            quanLyDanhMuc();
            break;
        }
        case 'admin/danhmuc/them': {
            themDanhMuc();
            break;
        }
        case 'admin/danhmuc/sua': {
            suaDanhMuc();
            break;
        }
        case 'admin/danhmuc/xoa': {
            xoaDanhMuc();
            break;
        }

        // QUAN LY SAN PHAM
        case 'admin/sanpham/danhsach': {
            danhSachSanPham();
            break;
        }
        case 'admin/sanpham/danhsach/binhthuong/them': {
            themBinhThuong();
            break;
        }
        case 'admin/sanpham/danhsach/bienthe/them': {
            themBienThe();
            break;
        }
        case 'admin/sanpham/danhsach/bienthe/chitiet': {
            chiTietBienThe();
            break;
        }
        case 'admin/sanpham/danhsach/sua': {
            suaSanPham();
            break;
        }
        case 'admin/sanpham/danhsach/xoaanh': {
            xoaBoSuuTap();
            break;
        }
        case 'admin/sanpham/danhsach/dsan': {
            danhSachSanPhamAn();
            break;
        }

        case 'admin/sanpham/danhsach/an': {
            anSanPham();
            break;
        }

        // QUAN LY NGUOI DUNG
        case 'admin/nguoidung': {
            quanLyNguoiDung();
            break;
        }
        case 'admin/nguoidung/doimatkhau': {
            doiMatKhauNguoiDung();
            break;
        }

        // QUAN LY BINH LUAN
        case 'admin/binhluan': {
            quanLyBinhLuan();
            break;
        }

        // QUAN LY DON HANG
        case 'admin/donhang': {
            quanLyDonHang();
            break;
        }

        // THONG KE
        case 'admin/thongke': {
            quanLyThongKe();
            break;
        }
    }


    // FOOTER
    if(strpos($url,"admin") == 0) {
        // Footer admin
        include "includes/admin/footer.php";
    }
    else {
        // Footer user
        include "includes/users/footer.php";
    }



?>