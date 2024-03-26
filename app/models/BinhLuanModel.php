<?php
require_once "pdo.php";

function getAllBinhLuan()
{
    // $sql = "SELECT * FROM `binh_luan`";
    $sql = "SELECT binh_luan.*, san_pham.ten_san_pham, count(san_pham.ten_san_pham) as tongbl
    FROM binh_luan
    JOIN san_pham ON binh_luan.ma_san_pham = san_pham.ma_san_pham
    GROUP BY ten_san_pham";
    return getData($sql);
}
function getBinhLuanID($ma_san_pham)
{
    $sql = "SELECT binh_luan.*, nguoi_dung.ho_va_ten, san_pham.ten_san_pham
     FROM binh_luan 
     JOIN nguoi_dung ON binh_luan.ma_nguoi_dung = nguoi_dung.ma_nguoi_dung 
     JOIN san_pham ON binh_luan.ma_san_pham = san_pham.ma_san_pham 
     WHERE binh_luan.ma_san_pham = $ma_san_pham ";
    return getData($sql);
}
function getAllChiTietBinhLuan($ma_binh_luan)
{
    $sql = "SELECT chi_tiet_binh_luan.*, nguoi_dung.ho_va_ten
    FROM chi_tiet_binh_luan
    JOIN nguoi_dung ON chi_tiet_binh_luan.ma_nguoi_dung = nguoi_dung.ma_nguoi_dung
    WHERE chi_tiet_binh_luan.ma_binh_luan = $ma_binh_luan";
    return getData($sql);
}
function deleteBinhLuan($ma_binh_luan)
{
    $sql = " DELETE FROM chi_tiet_binh_luan
    WHERE ma_binh_luan IN (
        SELECT ma_binh_luan
        FROM binh_luan
        WHERE ma_binh_luan = $ma_binh_luan);
             DELETE FROM binh_luan
    WHERE ma_binh_luan = $ma_binh_luan";
    return executeCommand($sql);
}
function deleteChiTietBinhLuan($ma_chi_tiet_binh_luan)
{
    $sql = "DELETE FROM chi_tiet_binh_luan WHERE ma_chi_tiet_binh_luan = $ma_chi_tiet_binh_luan";
    return executeCommand($sql);
}
