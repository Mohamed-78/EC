<div class="modal fade affiche" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">INFOS COMMANDE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="form-group col-sm-6">
               <label class="control-label">Nom du client</label>
                <input type="text" class="form-control" value="{{ $single->User->name }}">
            </div>
            <div class="form-group col-sm-6">
               <label class="control-label">Prénom</label>
                <input type="text" class="form-control"  value="{{ $single->User->prenom }}">
            </div>
            <div class="form-group col-sm-6">
               <label class="control-label">Contact</label>
                <input type="text" class="form-control"  value="{{ $single->User->contact }}" placeholder="Le prix" required="">
            </div>
            <div class="form-group col-sm-6">
               <label class="control-label">Lieu d'habitation</label>
                <input type="date" class="form-control" name="date_ajout" value="{{ $single->User->residence }}" placeholder="Le prix" required="">
            </div>
          </div>
          <br><br>
          </div>
        </form>
    </div>
  </div>
</div>
<script type="text/javascript">      
  $('#modifSelect').select2();
  $('.modifSelect').select2();
</script>