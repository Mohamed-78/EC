<div class="modal fade affiche" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">MODIFICATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/cogitech/updated/promo/{{ $single->id }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="form-group col-sm-6">
               <label class="control-label">Le titre</label>
                <input type="text" class="form-control" name="titre" placeholder="Titre" required="" value="{{ $single->titre }}">
            </div>
           <div class="form-group col-sm-6">
               <label class="control-label">La reduction</label>
                <input type="text" class="form-control" name="reduction" placeholder="Ex: -50%" required="" value="{{ $single->reduction }}">
            </div>
             <div class="form-group col-sm-6">
               <label class="control-label">Ancien prix [<span style="color: red;">Uniquement des chiffre, pas d'espace aussi</span>]</label>
                <input type="number" class="form-control" name="ancPrice" placeholder="Ancien prix" required="" value="{{ $single->ancPrice }}">
            </div>
            <div class="form-group col-sm-6">
               <label class="control-label">Nouveau prix [<span style="color: red;">Uniquement des chiffre, pas d'espace aussi</span>]</label>
                <input type="number" class="form-control" name="newPrice" placeholder="Nouveau prix" required="" value="{{ $single->newPrice }}">
            </div>
            <div class="form-group col-sm-6">
               <label class="control-label">Date debut</label>
                <input type="date" class="form-control" name="date_debut" placeholder="Le prix" required="" value="{{ $single->date_debut }}">
            </div>
            <div class="form-group col-sm-6">
               <label class="control-label">Date fin</label>
                <input type="date" class="form-control" name="date_fin" placeholder="Le prix" required="" value="{{ $single->date_fin }}">
            </div>
            <div class="form-group col-sm-6">
               <label class="control-label">Categories</label>
               <select name="categorie_id" class="form-control type_formation">
                @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->libelle }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-sm-6">
               <label class="control-label">Date d'ajout</label>
                <input type="date" class="form-control" name="date_ajout" placeholder="La" required="" value="{{ $single->date_ajout }}">
            </div>
            <div class="form-group col-sm-6">
              <label> Image principale (taille: 450*450)</label>
              <input type="file" class="form-control" name="photo" value="{{ $single->photo }}">
            </div>
            <div class="form-group col-sm-6">
              <label>Autres  images (Facultatif)</label>
              <input type="file" class="form-control" name="photos[]" multiple="" value="{{ $single->photos }}">
            </div>
          </div>
          
          <div class="row">
            <div class="col-12">
              <label class="control-label">La description</label>
              <textarea name="description" class="form-control" id="" cols="30" rows="4" required="">{{ $single->description }}</textarea>
            </div>
          </div>

          <br><br>
          <div class="form-group col-12" align="center">
            <button class="btn btn-primary" type="submit" style="width: 150px;">
            <i class="fa fa-save"></i>
              <font style="vertical-align: inherit;">MODIFIER</font></font>
            </button>
          </div> 
          </div>
        </form>
    </div>
  </div>
</div>
<script type="text/javascript">      
  $('#modifSelect').select2();
  $('.modifSelect').select2();
</script>