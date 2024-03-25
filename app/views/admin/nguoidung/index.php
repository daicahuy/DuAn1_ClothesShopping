<div class="card">
    <div class="card-body">
        <h5 class="card-title">Danh sách người dùng</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ảnh</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Số lượng đơn</th>
                        <th>Quyền</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <img
                                src="assets/images/users/1.png"
                                alt="ảnh sản phẩm"
                                style="object-fit: cover; width: 60px; height:60px;"
                            >
                        </td>
                        <td>Nguyen Huu Huy</td>
                        <td>Áo Thun SUPIMA COTTON Cổ Tròn Ngắn Tay</td>
                        <td>Quần</td>
                        <td>Quần</td>
                        <td>
                            <button type="button" class="btn btn-warning margin-5 text-white" data-toggle="modal" data-target="#Modal1">
                                Sửa
                            </button>
                            <button type="button" class="btn btn-danger margin-5 text-white" data-toggle="modal" data-target="#Modal2">
                                Xóa
                            </button>
                            <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Nguyen Huu Huy [ 1 ]</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <h5 class="col-lg-6">Phân quyền</h5>
                                                <div class="col-lg-3">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked" required>
                                                        <label class="custom-control-label" for="customControlValidation1">Admin</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                                        <label class="custom-control-label" for="customControlValidation2">Khách hàng</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" id="ts-success">Cập nhật</button>
                                            <a href="?url=admin/nguoidung/doimatkhau"><button type="button" class="btn btn-primary">Thay đổi mật khẩu</button></a>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Xóa người dùng</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Bạn có chắc muốn xóa Nguyen Huu Huy [ 1 ] không ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger">Xóa</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    
                    
                    
                    
            </table>
        </div>

    </div>
</div>