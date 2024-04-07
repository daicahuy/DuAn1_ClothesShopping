
<style>
    .actions-search-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 20px 10px;
    }

    .action-buttons a {
        margin-right: 10px;
        /* Tạo khoảng cách giữa các nút */
    }

    .search-container form {
        display: flex;
    }

    .search-container input[type="text"] {
        padding: 5px 10px;
        border: 1px solid #ccc;
        border-radius: 5px 0 0 5px;
        /* Bo tròn góc bên trái */
    }

    .search-container button {
        padding: 5px 10px;
        border: none;
        background: #007bff;
        color: white;
        border-radius: 5px;
        /* Bo tròn góc bên phải */
        cursor: pointer;
    }

    .search-container button:hover {
        background: #0056b3;
    }
</style>

<div class="content-wrapper">
    <div class="card" style="border: 1px solid gray; width: 98%; margin: 10px auto;">
        <div class="card-header border-0">
            <h3>Đóng gói đơn hàng</h3>
        </div>
        <div class="actions-search-container" style="display: flex; justify-content: space-between; align-items: center; margin: 20px 10px;">
            <div class="action-buttons">
            <a href="?url=admin/donhang" class="btn btn-primary">Chờ xác nhận</a>
                <a href="?url=admin/donhang/donggoi" class="btn btn-warning">Đang đóng gói</a>
                <a href="?url=admin/donhang/vanchuyen" class="btn btn-info">Đang vận chuyển</a>
                <a href="?url=admin/donhang/thanhcong" class="btn btn-success">Giao thành công</a>
                <a href="?url=admin/donhang/huy" class="btn btn-danger">Hủy</a>
            </div>
            <div class="search-container">
                <form action="#" method="GET">
                    <input type="text" placeholder="Tìm kiếm..." name="searchQuery" style="margin-right: 5px;">
                    <button type="submit">Tìm</button>
                </form>
            </div>
        </div>



        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ngày lập hóa đơn</th>
                        <th>Tên khách hàng</th>
                        <!-- <th>Tổng hóa đơn</th> -->
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>

                </thead>
                <tbody>
                    <!-- Dữ liệu mẫu -->
                    <tr>
                        <td>1</td>
                        <td>2022-01-01</td>
                        <td>Nguyễn Văn A</td>
                        <!-- <td>2</td> -->
                        <td>500,000 VND</td>
                        <td>Đang đóng gói</td>
                        <td>
                            <a href="?url=admin/donhang/chitietdonhang" class="btn btn-primary">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                            <a href="VanChuyenDonHang.html" class="btn btn-success" style="margin: 0 10px;">
                                <i class="bi bi-check-lg"></i>
                            </a>

                        </td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>2022-01-01</td>
                        <td>Nguyễn Văn A</td>
                        <!-- <td>2</td> -->
                        <td>500,000 VND</td>
                        <td>Đang đóng gói</td>
                        <td>
                            <a href="?url=admin/donhang/chitietdonhang" class="btn btn-primary">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                            <a href="VanChuyenDonHang.html" class="btn btn-success" style="margin: 0 10px;">
                                <i class="bi bi-check-lg"></i>
                            </a>

                        </td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>2022-01-01</td>
                        <td>Nguyễn Văn A</td>
                        <!-- <td>2</td> -->
                        <td>500,000 VND</td>
                        <td>Đang đóng gói</td>
                        <td>
                            <a href="?url=admin/donhang/chitietdonhang" class="btn btn-primary">
                                <i class="bi bi-eye-fill"></i> <!--Chi tiết-->
                            </a>
                            <a href="VanChuyenDonHang.html" class="btn btn-success" style="margin: 0 10px;">
                                <i class="bi bi-check-lg"></i> <!--Sửa-->
                            </a>

                        </td>
                    </tr>
                    <!-- Thêm các hàng khác theo mẫu trên nếu cần -->
                </tbody>
            </table>
        </div>
        <div class="card-footer clearfix">
            <div class="pagination-container" style="display: flex; justify-content: center;">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">&laquo; Trước</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Tiếp theo &raquo;</a></li>
                </ul>
            </div>
        </div>

    </div>
    <!-- /.card -->
</div>