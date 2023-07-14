<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reset_password" style="display:none;">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="reset_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Password reseted successfully.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Welcome Back!!</h6>
      </div>
      <div class="modal-footer">
        <a href="<?php echo base_url();?>" class="btn btn-primary">Back To Home</a>
      </div>
    </div>
  </div>
</div>