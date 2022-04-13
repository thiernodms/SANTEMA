@extends('admin.layouts.app')
@section('content')

@if(session()->has('message'))


<div class="alert alert-success alert-dismissible">


    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>



    {{session()->get('message')}}

</div>


@endif


<div class="row ">
    <div class="col-lg-6 mx-auto">
        <div class="card">
            <div class="card-header border-0">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Ajout d'un agent</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label>User </label>
                                <select name="user_id" class="form-control select2 select2-hidden-accessible " style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" data-select2-id="3">--Selectionner--</option>
                                    @foreach($users as $user)

                                    <option data-select2-id="32" value="{{$user->id}}">{{$user->id}} {{$user->name}} </option>

                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label>Specialité</label>
                                <select class="form-control select2 select2-hidden-accessible" name="speciality" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" data-select2-id="3">--Selectionner--</option>
                                    <option data-select2-id="32" value="generaliste">Généraliste</option>
                                    <option data-select2-id="33" value="medecin">Médecin</option>
                                    <option data-select2-id="34" value="ophtalmologue">Ophtalmologue</option>
                                    <option data-select2-id="35" value="infirmier">Infirmier</option>
                                    <option data-select2-id="36" value="sagefemme">Sage-Femme</option>
                                    <option data-select2-id="37" value="cardiologue">Cardiologue</option>
                                </select>
                            </div>



                            <div class="form-group">
                                <label for="file">Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input" id="file">
                                        <label class="custom-file-label" for="">choisir un fichier</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Inserer</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="parcourt">Parcourt</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="parcourt" class="custom-file-input" id="parcourt">
                                        <label class="custom-file-label" for="">choisir un fichier</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Inserer</span>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Abonnement</label>
                                <select class="form-control select2 select2-hidden-accessible" name="abonnement" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" data-select2-id="3">--selectionner--</option>
                                    <option data-select2-id="32" value="abonné">Abonné</option>
                                    <option data-select2-id="33" value="desabonné">Desabonné</option>
                                </select>
                            </div>


                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer ">
                            <button type="submit" class="btn btn-primary text-dark">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection