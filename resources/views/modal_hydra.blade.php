@if(session()->has('flash_message'))
<div id="modalMessage" class="modal show" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Konfirmasi</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        {{ Session::get('flash_message') }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(window).on('load',function(){
        $('#modalMessage').modal('show');
    });
</script>
@endif