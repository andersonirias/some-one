<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#alertaErro').modal('show');
    });
</script>
<div class="modal fade" id="alertaErro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="col-sm-10">
          <h3 class="mensagem-erro"><?= $message ?></h3>
        </div>
        <div class="col-sm-2">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>
    </div>
  </div>