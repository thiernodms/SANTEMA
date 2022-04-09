@extends('admin.layouts.app')

@section('css')

<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
@endsection

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
    <div class="col-lg-12 mx-auto">
        <div class="card">
            <div class="card-header border-0">
                <div class="card card-success">
                    <div class="card-header">
                        <h2 class="card-title text-xl">Rendez-vous</h2>
                    </div>

                    <div class="table-responsive my-5 mx-auto">
                        <table id="myTable" class="display table" width="100%" style="border-top: 1px black solid;">
                            <thead>
                                <tr>

                                    <th>Nom Client</th>
                                    <th>Email</th>
                                    <th>Numéro</th>
                                    <th>Quartier</th>
                                    <th>Date</th>
                                    <th>Heure</th>
                                    @if(Auth::user()->role_id == 1)
                                    <th>Agent de santé</th>
                                    @endif
                                    <th>Service</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th>Notifier</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rdv as $rdvs)

                                <tr>
                                    <td>{{$rdvs->nom}}</td>
                                    <td>{{$rdvs->email}}</td>
                                    <td>{{$rdvs->tel}}</td>
                                    <td>{{$rdvs->quartier}}</td>
                                    <td>{{$rdvs->date}}</td>
                                    <td>{{$rdvs->time}}</td>
                                    @foreach($agents as $agent)
                                    @if($agent->user_id == $agent->user->id and $rdvs->agent_id == $agent->id)
                                    @if(Auth::user()->role_id == 1)
                                    <td>{{$agent->user->name}}</td>
                                    @endif
                                    @endif
                                    @endforeach
                                    <td>{{$rdvs->service}}</td>
                                    <td>{{$rdvs->description}}</td>
                                    <td>{{$rdvs->status}}</td>
                                    <td>


                                        <a class=" btn btn-success" style="margin-bottom: 2px;" href="{{url('confirm_rdv', $rdvs->id)}}">Confirmer</a>

                                        <a class="btn btn-danger" href="{{url('/admin/annuler_rdv', $rdvs->id)}}">Annuler</a>

                                    </td>

                                    <td>

                                        <a class="btn btn-primary" href="{{url('notifier_rdv_view', $rdvs->id)}}">Notifier</a>

                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@section('script')
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



<script>
    $(document).ready(function() {
        $('#myTable').dataTable();
    });
</script>

@endsection





@endsection