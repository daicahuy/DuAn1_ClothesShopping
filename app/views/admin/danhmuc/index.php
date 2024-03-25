<div class="card">
    <div class="card-body">
        <div class="alert alert-danger" role="alert">
            Xóa thất bại !
        </div>
        <h5 class="card-title">Bảng danh mục</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Tên danh mục</th>
                        <th>Tên loại</th>
                        <th>
                            Hành động
                            <a href="?url=admin/danhmuc/them">
                                <button style="margin-left: 12px;" type="button" class="btn btn-success">
                                    Thêm
                                </button>
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Quần</td>
                        <td>Nam, Nữ</td>
                        <td>
                            <a
                                href="?url=admin/danhmuc/sua"
                                type="button"
                                class="btn btn-warning"
                            >
                                Sửa
                            </a>
                            <!-- <a
                                href="?url=admin/danhmuc/xoa"
                                type="button"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Bạn có chắc muốn xóa Quần [ Nam, Nữ ] không ?')"
                            >
                                Xóa
                            </a> -->
                            <button type="button" class="btn btn-danger margin-5 text-white" data-toggle="modal" data-target="#Modal2">
                                Xóa
                            </button>
                            <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Xóa danh mục</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <h5 class="col-lg-6">Tên loại</h5>
                                                <div class="col-lg-3">
                                                    <div class="custom-control custom-checkbox mr-sm-2">
                                                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing1">
                                                        <label style="display: block;" class="custom-control-label" for="customControlAutosizing1">Nam</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="custom-control custom-checkbox mr-sm-2">
                                                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
                                                        <label style="display: block;" class="custom-control-label" for="customControlAutosizing2">Nữ</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="?url=admin/danhmuc/xoa" class="btn btn-danger">Xóa</a>
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

