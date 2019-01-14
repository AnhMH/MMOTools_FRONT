<div id="cartMessage" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thông báo</h4>
      </div>
      <div class="modal-body">
        <p>Sản phẩm đã được thêm vào giỏ hàng</p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-danger" onclick="window.location.href='<?php echo $BASE_URL;?>/gio-hang';">Xem giỏ hàng</button>
      </div>
    </div>

  </div>
</div>

<div id="errorModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Lỗi</h4>
      </div>
      <div class="modal-body">
        <p>Đã có lỗi xảy ra</p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
      </div>
    </div>

  </div>
</div>
