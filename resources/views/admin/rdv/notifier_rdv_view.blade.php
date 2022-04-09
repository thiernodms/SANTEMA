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
                        <h3 class="card-title">Notifier un Rendez-vous</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{url('notifier_rdv', $data->id)}}" method="POST">
                        @csrf


                        <div class="card-body">
                            <div class="form-group">
                                <label for="nom">Salutation</label>
                                <input type="text" class="form-control" id="nom" name="greeting" placeholder="Entrez la salutation" required>
                            </div>

                            <div class="form-group">
                                <label for="body">Corps</label>
                                <textarea name="body" class="form-control" id="body" cols="25" rows="5" placeholder="Entrez le message" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="actiontext">Action Texte</label>
                                <input type="text" class="form-control" id="actiontext" name="actiontext" placeholder="Entrez le texte d'action">
                            </div>

                            <div class="form-group">
                                <label for="actionurl">Action Url</label>
                                <input type="text" class="form-control" id="actionurl" name="actionurl" placeholder="Entrez le lien d'action">
                            </div>


                            <div class="form-group">
                                <label for="endpart">Message de fin</label>
                                <input type="text" class="form-control" id="endpart" name="endpart" placeholder="Entrez le message finale">
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