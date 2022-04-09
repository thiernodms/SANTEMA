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
                                    <th>Email</th>
                                    <th>Tel</th>
                                    <th>Quartier</th>
                                    <th>Type Utilisateur</th>
                                    <th>Date creation</th>
                                    <th>Date modification</th>
                                    <th>Date verification EMail</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $user)

                                <tr>

                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->address}}</td>
                                    @if($user->role_id == 1)
                                    <td>Admin</td>
                                    @elseif($user->role_id == 2)
                                    <td>Agent</td>
                                    @else
                                    <td>Utilisateur</td>
                                    @endif
                                    <td>{{$user->created_at}}</td>
                                    <td>{{$user->updated_at}}</td>
                                    <td>{{$user->email_verified_at}}</td>


                                    <td>


                                        <a class="btn btn-success" href="{{url('update_user', $user->id)}}">Update</a>


                                        <a onclick="return confirm('Voulez-vous vraiment supprimer cet agent')" class="btn btn-danger" style="margin-top: 2px;" href="{{url('delete_user', $user->id)}}">Delete</a>


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