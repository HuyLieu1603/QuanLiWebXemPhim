<?php
if (empty($service_list)) {
    $service_list = [];
}
?>
<a class="btn btn-primary mb-3" href="<?php echo _WEB ?>/admin/service/viewAdd/">Add</a>
<div class="card px-4 pb-4">
    <h5 class="card-header">Danh sách gói dịch vụ</h5>
    <div class="table-responsive text-nowrap">
        <table class="table" id="videoTable">
            <thead>
                <tr class="text-nowrap">
                    <th>#Mã</th>
                    <th>Tên gói dịch vụ</th>
                    <th>Giá</th>
                    <th>Ngày tạo</th>
                    <th>Độ phân giải tối đa</th>
                    <th>Quảng cáo</th>
                    <th>Lịch sử xem</th>
                    <th>Thời hạn</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($service_list as $key => $value) { ?>
                    <tr>
                        <th scope="row"><?php echo $value['id']; ?></th>
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo $value['price']; ?></td>
                        <td><?php echo $value['createDate']; ?></td>
                        <td><?php echo $value['maxResolution']; ?></td>
                        <td><?php echo $value['haveAds']; ?></td>
                        <td><?php echo $value['haveHistory']; ?></td>
                        <td><?php echo $value['duration']; ?></td>
                        <td>
                            <a class="btn" href="<?php echo _WEB ?>/admin/service/viewEdit/<?php echo $value['id'] ?>">Edit</a>
                            <a class="btn" href="<?php echo _WEB ?>/admin/service/deleteService/<?php echo $value['id'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    let table = new DataTable('#serviceTable', {
        paging: true,
        scrollX: 12000,
        language: {
            emptyTable: "Không có dữ liệu!",
            infoEmpty: "Hiện tại không có dữ liệu!",
            infoFiltered: "Lọc dữ liệu từ _MAX_ kết quả.",
            loadingRecords: "Đang tải...",
            lengthMenu: "Hiển thị _MENU_ kết quả.",
            info: "Hiển thị từ _START_ đến _END_ của _TOTAL_ kết quả.",
            paginate: {
                first: "Trang đầu",
                last: "Trang cuối",
                next: "Tiếp theo",
                previous: "Quay lại"
            },
            search: "Tìm kiếm"
        }
    });
</script>