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
    <div class="col-lg-10 mx-auto">
        <div class="card">
            <div class="card-header border-0">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Modification d'un agent</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{url('edit_agent', $agent->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">




                            <div class="form-group">
                                <label>Specialité</label>
                                <select class="form-control select2 select2-hidden-accessible" name="speciality" value="{{$agent->speciality}}" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" data-select2-id="3">{{$agent->speciality}}</option>
                                    <option data-select2-id="32" value="generaliste">Généraliste</option>
                                    <option data-select2-id="33" value="medecin">Médecin</option>
                                    <option data-select2-id="34" value="ophtalmologue">Ophtalmologue</option>
                                    <option data-select2-id="35" value="infirmier">Infirmier</option>
                                    <option data-select2-id="36" value="sagefemme">Sage-Femme</option>
                                    <option data-select2-id="37" value="cardiologue">Cardiologue</option>
                                </select>
                            </div>



                            <div class="form-group">
                                <label for="">Ancienne image</label>
                                <img height="150" width="150" src="/imageagents/{{$agent->image}}" alt="image">
                            </div>


                            <div class="form-group">
                                <label for="file">Changer de Photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="file">
                                        <label class="custom-file-label" for="">choisir un fichier</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Inserer</span>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="">Ancien CV</label>
                                <img height="150" width="150" src="/cv_agents/{{$agent->parcourt}}" alt="cv">
                            </div>


                            <div class="form-group">
                                <label for="parcourt">Mise à jour CV</label>
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
                                <select class="form-control select2 select2-hidden-accessible" name="abonnement" value="{{$agent->abonnement}}" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" data-select2-id="3">{{$agent->abonnement}}</option>
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