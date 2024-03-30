<?php

// function loc() {
//     include VIEWS_URL . "users/locChiTiet.php";
// }

function nam()
{
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $maLoai = $_GET['ma_loai'];
        $erros = [];
        if (isset($_POST['ma_mau_sac'])) {
            $maMauSacs = $_POST['ma_mau_sac'];
        } else {
            $erros['maMauSac'] = "Mời chọn màu";
        }
        // debug($maMauSacs);
        if (isset($_POST['ma_kich_thuoc'])) {
            $maKichThuocs = $_POST['ma_kich_thuoc'];
        } else {
            $erros['maKichThuoc'] = "Mời chọn kích thước";
        }
        // debug($maKichThuocs);
        if (empty($erros['maMauSac']) || empty($erros['maKichThuoc'])) {
            if (isset($maMauSacs) && isset($maKichThuocs)) {
                foreach ($maMauSacs as $key => $maMauSac) {
                    foreach ($maKichThuocs as $key => $maKichThuoc) {
                        $sanPhams = locSanPham($maLoai, $maMauSac, $maKichThuoc);
                        echo " màu AND size ///";
                    }
                }
            }
            if (isset($maMauSacs) && (!isset($maKichThuocs))) {
                foreach ($maMauSacs as $key => $maMauSac) {
                    $sanPhams = locSanPham($maLoai, $maMauSac, $maKichThuoc = 0);
                    echo "MÀU ///";
                }
                //  debug($maKichThuoc);
            }
            if ((!isset($maMauSacs)) && isset($maKichThuocs)) {
                foreach ($maKichThuocs as $key => $maKichThuoc) {
                    $sanPhams = locSanPham($maLoai, $maMauSac = 0, $maKichThuoc);
                    echo "SIZE ///";
                }
            }
            if (!isset($maMauSacs) && !isset($maKichThuocs)) {
                    $sanPhams = locSanPham($maLoai, $maMauSac = 0, $maKichThuoc=0);
                    echo "Ko size ko màu ///";
            }
        }
        // if (empty($erros['maMauSac']) && empty($erros['maKichThuoc'])) {

        //     $tbao = "Bạn chưa chọn màu sắc hoặc kích thước";
        //     // $isSusses = false;
        //     // nextPage("?url=nam&ma_loai=1&tb=$tbao&type=danger");
        // }


        // 
        $danhMucs = danhMuc($maLoai);
        // Đếm số lượng sản phẩm của tất cả danh mục (mã danh mục gán  = 0)
        $soLuongTatCaSanPham = soLuongSanPhamDanhMuc(0, $maLoai);
        // debug($soLuongTatCaSanPham);
        if (isset($_GET['ma_danh_muc'])) {
            $maDanhMuc = $_GET['ma_danh_muc'];
            //Hiện thị sản phẩm theo từng danh mục (nam)
            // $sanPhams = getSanPhamLoai($maLoai, $maDanhMuc);
            // Hiện size theo từng danh muc
            $getKichThuocs = getKichThuoc($maLoai, $maDanhMuc);
            // 
            $getMauSacs = getMauSac($maLoai, $maDanhMuc);
        } else {
            //Hiện thị sản phẩm của tất cả danh mục(gán mã danh mục = 0)
            // $sanPhams = getSanPhamLoai($maLoai, $maDanhMuc = 0);
            // Hiện size của tất cả danh mục
            $getKichThuocs = getKichThuoc($maLoai, $maDanhMuc = 0);
            // 
            $getMauSacs = getMauSac($maLoai, $maDanhMuc = 0);
        }
        // debug($sanPhams);
        include VIEWS_URL . "users/loc.php";
    } else {

        if (isset($_GET['ma_loai'])) {
            $maLoai = $_GET['ma_loai'];
            // Lấy danh sách danh mục theo mã loại 
            $danhMucs = danhMuc($maLoai);
            // Đếm số lượng sản phẩm của tất cả danh mục (mã danh mục gán  = 0)
            $soLuongTatCaSanPham = soLuongSanPhamDanhMuc(0, $maLoai);

            // debug($soLuongTatCaSanPham);
            if (isset($_GET['ma_danh_muc'])) {
                $maDanhMuc = $_GET['ma_danh_muc'];
                //Hiện thị sản phẩm theo từng danh mục (nam)
                $sanPhams = getSanPhamLoai($maLoai, $maDanhMuc);
                // Hiện size theo từng danh muc
                $getKichThuocs = getKichThuoc($maLoai, $maDanhMuc);
                // 
                $getMauSacs = getMauSac($maLoai, $maDanhMuc);
            } else {
                //Hiện thị sản phẩm của tất cả danh mục(gán mã danh mục = 0)
                $sanPhams = getSanPhamLoai($maLoai, $maDanhMuc = 0);
                // Hiện size của tất cả danh mục
                $getKichThuocs = getKichThuoc($maLoai, $maDanhMuc = 0);
                // 
                $getMauSacs = getMauSac($maLoai, $maDanhMuc = 0);
            }
            //    debug($sanPhams);
        }
        // debug($getKichThuocs);
        include VIEWS_URL . "users/loc.php";
    }
}


function nu()
{
    $maLoai = $_GET['ma_loai'];
    $danhMucs = danhMuc($maLoai);
    // Đếm số lượng sản phẩm của tất cả danh mục (mã danh mục gán  = 0)
    $soLuongTatCaSanPham = soLuongSanPhamDanhMuc(0, $maLoai);
    if (isset($_GET['ma_danh_muc'])) {
        $maDanhMuc = $_GET['ma_danh_muc'];
        $sanPhams = getSanPhamLoai($maLoai, $maDanhMuc);
        $getKichThuocs = getKichThuoc($maLoai, $maDanhMuc);
        $getMauSacs = getMauSac($maLoai, $maDanhMuc);
    } else {
        $sanPhams = getSanPhamLoai($maLoai, $maDanhMuc = 0);
        $getKichThuocs = getKichThuoc($maLoai, $maDanhMuc = 0);
        $getMauSacs = getMauSac($maLoai, $maDanhMuc = 0);
    }

    // debug($danhMucNam);
    include VIEWS_URL . "users/loc.php";
}
