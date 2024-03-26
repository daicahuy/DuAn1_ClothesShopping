<?php
require_once "pdo.php";
//Lấy toàn bộ người dùng
function getAllNguoiDung(){
    // $sql = "SELECT A.*, B.so_luong FROM nguoi_dung AS A 
    //  JOIN chi_tiet_don_hang AS B ON B.ma_chi_tiet_san_pham = A.ma_nguoi_dung ";
    $sql = "SELECT * FROM `nguoi_dung` ";
return getData($sql);
}
//Lấy người dùng theo ID
function getNguoiDungID($ma_nguoi_dung){
    $sql = "SELECT * FROM nguoi_dung WHERE ma_nguoi_dung = $ma_nguoi_dung";
    return getData($sql, false);
}
//Thêm người dùng
function updateNguoiDung($ma_nguoi_dung,$quyen){
    $sql = "UPDATE `nguoi_dung` SET `quyen`= '$quyen'  WHERE ma_nguoi_dung=$ma_nguoi_dung";
    
    return executeCommand($sql);
}
//Resset mk người dùng
function RessetMK($ma_nguoi_dung){
    $sql = "UPDATE `nguoi_dung` SET `mat_khau`= '123'  WHERE ma_nguoi_dung=$ma_nguoi_dung";
    
    return executeCommand($sql);
}
//Khóa tài khoản người dùng và mở tk người dùng
function AnTaiTKhoan($ma_nguoi_dung,$trangthai){
    $sql = "UPDATE `nguoi_dung` SET `trang_thai`='$trangthai'  WHERE ma_nguoi_dung=$ma_nguoi_dung";
    
    return executeCommand($sql);
}


?>