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
    <div class="col-lg-11 mx-auto">
        <div class="card">
            <div class="card-header border-0">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title text-xl">LISTE DES AGENTS</h3>
                    </div>

                    <div class="table-responsive my-5 mx-auto">
                        <table id="myTable" class="display table" width="100%" style="border-top: 1px black solid;">
                            <thead>
                                <tr>

                                    <th>Nom</th>
                                    <th>Mail</th>
                                    <th>Tel</th>
                                    <th>Specialité</th>
                                    <th>Quartier</th>
                                    <th>cv</th>
                                    <th>Image</th>
                                    <th>abonnement</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach($data as $agent)
                                <tr>

                                    <td>{{$agent->user->name}}</td>
                                    <td>{{$agent->user->email}}</td>
                                    <td>{{$agent->user->tel}}</td>
                                    <td>{{$agent->speciality}}</td>
                                    <td>{{$agent->user->quartier}}</td>
                                    <td>{{$agent->parcourt}}</td>
                                    <td><img height=" 100" width="100" src="imageagents/{{$agent->image}}" alt="">
                                    <td>{{$agent->abonnement}}</td>
                                    </td>


                                    <td>


                                        <a class="btn btn-success" href="{{url('update_agent', $agent->id)}}">Update</a>


                                        <a onclick="return confirm('Voulez-vous vraiment supprimer cet agent')" class="btn btn-danger" style="margin-top: 2px;" href="{{url('delete_agent', $agent->id)}}">Delete</a>


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


@endsection

@section('script')
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



<script>
    $(document).ready(function() {
        $('#myTable').dataTable();
    });
</script>

@endsection