<?php


// Thống kê sản phẩm theo danh mục của nam
function getSanPhamDanhMuc( $maLoai)
{
    $sql = "SELECT A.*, COUNT(B.ma_san_pham) so_luong FROM danh_muc A JOIN chi_tiet_danh_muc B 
            ON A.ma_danh_muc = B.ma_danh_muc
            WHERE A.ma_loai = $maLoai AND A.trang_thai =1
            GROUP BY A.ma_danh_muc";
    return getData($sql);
}
