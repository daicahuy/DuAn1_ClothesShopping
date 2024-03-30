<?php
    // Lay chi tiet san pham theo id san pham
    function getChiTietSanPhamIDSanPham($idSanPham) {
        $sql = "SELECT A.ma_chi_tiet_san_pham, A.gia_bien_dong, A.so_luong,
                A.anh_chi_tiet, B.ten_kich_thuoc, C.ten_mau
                FROM chi_tiet_san_pham A
                JOIN kich_thuoc B ON A.ma_kich_thuoc = B.ma_kich_thuoc
                JOIN mau_sac C ON A.ma_mau_sac = C.ma_mau_sac
                WHERE A.ma_san_pham = $idSanPham
                ";

        return getData($sql);
    }

    // Lay chi tiet san pham theo ma san pham, kich thuoc, mau sac
    function get3ChiTietSanPham($ma_san_pham, $ma_kich_thuoc, $ma_mau_sac) {
        $sql = "SELECT * FROM chi_tiet_san_pham
                WHERE ma_san_pham = $ma_san_pham AND ma_kich_thuoc = $ma_kich_thuoc AND ma_mau_sac = $ma_mau_sac";
        return getData($sql, false);
    }

    // Dem so luong chi tiet san pham
    function countSoLuongChiTietSanPham($id) {
        $sql = "SELECT SUM(so_luong) AS so_luong 
                FROM chi_tiet_san_pham
                WHERE ma_san_pham = $id";
        return getData($sql,false);
    }

    // Them chi tiet san pham
    function insertChiTietSanPham(
        $ma_san_pham,
        $ma_kich_thuoc = 'NULL',
        $ma_mau_sac = 'NULL',
        $gia_bien_dong = 'NULL',
        $so_luong = 'NULL',
        $anh_chi_tiet = 'NULL'
    )
    {
        $sql = "INSERT INTO chi_tiet_san_pham VALUES
                (NULL, $ma_san_pham, $ma_kich_thuoc, $ma_mau_sac, $gia_bien_dong, $so_luong, $anh_chi_tiet)";
        return executeCommand($sql);
    }

    // Update Gia Bien Dong, So Luong, Anh Chi Tiet
    function update3ChiTietSanPham($ma_chi_tiet_san_pham ,$gia_bien_dong, $so_luong, $anh_chi_tiet) {
        $sql = "UPDATE chi_tiet_san_pham
                SET
                gia_bien_dong = $gia_bien_dong,
                so_luong = $so_luong,
                anh_chi_tiet = '$anh_chi_tiet'
                WHERE ma_chi_tiet_san_pham = $ma_chi_tiet_san_pham
                ";
        return executeCommand($sql);
    }

    // Xoa chi tiet san pham
    function deleteChiTietSanPham($id) {
        $sql = "DELETE FROM chi_tiet_san_pham WHERE ma_chi_tiet_san_pham = $id";
        return executeCommand($sql);
    }

?>