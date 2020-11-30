@extends('admin.layouts.default',['title' => 'LIVRAISON'])

@section('content')
      <div class="app-title">
        <div>
          <h1 style="font-size: 16px;"><i class="fa fa-dashboard"></i> LISTE DES UTTILISATEURS: {{$user->count()}}</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        </ul>
      </div>

      <div class="row">
    {{-- <div class="col-12">
      <a href="/managment/ajouter/construction" class="btn btn-info ajouter_equipe"> <i class="fa fa-edit"></i> Ajouter une construction</a><br><br>
    </div> --}}

        <div class="col-md-12">
          <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Toutes les utilisateurs</h3></div>
            <div class="tile-body">
              @if(session()->has('message'))
                <div class="bs-component">
                  <div class="alert alert-dismissible alert-success">
                    <button class="close" type="button" data-dismiss="alert">×</button><strong><i class="fa fa-ok"></i>SUCCES : <span style="font-size: 16px;">   Opération effectuée avec succès.</span></strong>.
                  </div>
                </div>
              @endif
              @if($user)
               <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                      <tr>
                        <th>Nom & prénoms</th>
                        <th>Contact</th>
                        <th>Résidence</th>
                        <th>Date d'inscriptions</th>
                       {{--  <th>Action</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($user as $ac)
                        <tr>
                          <td>{{ $ac->nom }}<br>
                            {{ $ac->prenom }}
                          </td>
                          <td>{{ $ac->contact }}</td>
                          <td>{{$ac->residence}}</td>
                          <td>{{ (new DateTime($ac->created_at))->format('d/m/Y') }}</td>
                          {{-- <td valign="center">
                            <div align="center" class="tools">
                              <a href="/cogitech/delete/client/{{$ac->User->id}}/{{$ac->id}}" class="btn bg-orange btn-flat delete_equipe" style="width: 10px;">
                                <i class="fa fa-trash"></i>
                              </a>
                            </div>
                          </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
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
      $(document).on("click",".delete_equipe", function(e){
        e.preventDefault();
        var a=$(this);
        swal({
          title: "SUPPRESSION",
          text: "Etre Vous sûre de vouloir supprimer cette personne ?",
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

      $(document).on("click",".voir_docoment", function(e){
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

      $(document).on("click",".ajouter_equipe", function(e){
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




