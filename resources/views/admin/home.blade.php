@extends('admin.layouts.default',['title' => 'Admin'])

@section('content')
      <div class="app-title">
        <div>
          <h1 style="font-size: 16px;"><i class="fa fa-dashboard"></i> ADMINISTRATEUR : {{Auth::user()->name}}</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-3">
            <a href="{{ route('accueil') }}" style="text-decoration: none;">
            <div class="widget-small warning coloured-icon"><i class="icon fa fa-shopping-cart fa-3x"></i>
              <div class="info">
                <h4>PRODUITS</h4>
                <p><b>
                  @if($produit)
                  {{$produit->count()}}
                  @endif
                </b></p>
              </div>
            </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-3">
          <a href="/cogitech/liste/promo" style="text-decoration: none;">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-shopping-cart fa-3x"></i>
            <div class="info">
              <h4>PROMOTIONS</h4>
              <b>
                @if($promo)
                {{$promo->count()}}
                @endif
              </b>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-3">
          <a href="/cogitech/liste/commande" style="text-decoration: none;">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-shopping-cart fa-3x"></i>
            <div class="info">
              <h4>COMMANDES</h4>
              <b>
                @if($cmde)
                {{$cmde->count()}}
                @endif
              </b>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-3">
          <a href="/cogitech/liste/users">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>MES USERS</h4>
              <b>
                @if($users)
                {{$users->count()}}
                @endif
              </b>
            </div>
          </div>
          </a>
        </div>
      </div>


      <div class="row">
    <div class="col-12">
      <a href="/cogitech/ajouter/produit" class="btn btn-info ajouter_terrain"> <i class="fa fa-edit"></i> Ajouter un article</a><br><br>
    </div>

        <div class="col-md-12">
          <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Tous les articles</h3></div>
            <div class="tile-body">
              @if(session()->has('message'))
                <div class="bs-component">
                  <div class="alert alert-dismissible alert-success">
                    <button class="close" type="button" data-dismiss="alert">×</button><strong><i class="fa fa-ok"></i>SUCCES : <span style="font-size: 16px;">   Opération effectuée avec succès.</span></strong>.
                  </div>
                </div>
              @endif
              @if($produit)
               <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Titres</th>
                        <th>Prix</th>
                        <th>Date de publication</th>
                        <th>Description</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($produit as $ac)
                        <tr>
                          <td><img src="{{URL::asset('admin/media/'.$ac->photo)}}" alt="" style="max-height: 50px; max-width: 50px;"></td>
                          <td>{{$ac->titre}}</td>
                          <td>@if(isset($ac->prix))
                            {{number_format($ac->prix), 0, ',', ' '}} FCFA
                            @endif
                          </td>
                          <td>{{ (new DateTime($ac->date_ajout))->format('d/m/Y') }}</td>
                          <td>{{substr($ac->description,0,45)}}{{ (strlen($ac->description) >= 45) ? '...' : '' }}</td>
                          <td valign="center">
                            <div align="center" class="tools">

                              <a href="/cogitech/view/produit/{{$ac->id}}" class="btn bg-green btn-flat updated_terrain" style="width: 10px;">
                                <i class="fa fa-eye"></i>
                              </a> 
                              
                              <a href="/cogitech/delte/produit/{{$ac->id}}" class="btn bg-orange btn-flat delete_terrain" style="width: 10px;">
                                <i class="fa fa-trash"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <p>{{ $produit->links() }}</p>
               </table>
               @endif
            </div>
          </div>
        </div>
  </div>
     

 <div class="retour_modal"></div>
@endsection

@section('body')
  app sidebar-mini rtl
@endsection


@push('style.hearder')
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('siac/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endpush


@push('script.footer')

    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/bootstrap-notify.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/sweetalert.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript"> 
    $( document ).ready(function() {
        $('#demoSelect').select2();
        $('.demoSelect').select2();
    });     
      
    </script>
  
</script>
<script type="text/javascript">
  $('#demoNotify').click(function(){
    $.notify({
      title: "Update Complete : ",
      message: "Something cool is just updated!",
      icon: 'fa fa-check' 
    },{
      type: "info"
    });
  });
  $(document).on("click",".delete_terrain", function(e){
    e.preventDefault();
    var a=$(this);
    swal({
      title: "SUPPRESSION",
      text: "Êtes-vous sûr de vouloir supprimer?",
      type: "warning",
      showCancelButton: true,
      confirmButtonText: "Oui, supprimer!",
      cancelButtonText: "Non, Annuler!",
      closeOnConfirm: false,
      closeOnCancel: false
    }, function(isConfirm) {
      if (isConfirm) {
        swal("Sppression!", "Suppression effectuée avec succès .", "success");
        location.href=a.attr("href");
      } else {
        swal("Annulation", "Suppression annulée ", "error");
      }
    });
  });

  $(document).on("click",".ajouter_terrain", function(e){
    e.preventDefault();
    var a=$(this);
    $.ajax({
      method: 'get',
      url: a.attr("href"),
      success : function(response){
        console.log(response);
        $('.retour_modal').html(response);
        $('.affiche').modal('show');
      }
    })
  });

  $(document).on("click",".updated_terrain", function(e){
    e.preventDefault();
    var a=$(this);
    $.ajax({
      method: 'get',
      url: a.attr("href"),
      success : function(response){
        console.log(response);
        $('.retour_modal').html(response);
        $('.affiche').modal('show');
      }
    })
  });
</script>
<script>
  $('.message_popup').modal();
</script>
@endpush




