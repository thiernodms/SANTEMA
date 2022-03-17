<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    @include('admin.css')

</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')

        <!-- partial -->


        @include('admin.navbar')

        <!-- partial -->

        <div class="container-fluid page-body-wrapper">


            <div style="padding-top: 100px;" class="table-responsive">

                <table style="font-size: 13px;" class="table">

                    <tr style="background-color: black; ">

                        <th style="padding: 5px; border: white solid 1px;">Nom</th>
                        <th style="padding: 5px; border: white solid 1px;">Email</th>
                        <th style="padding: 5px; border: white solid 1px;">Tel</th>
                        <th style="padding: 5px; border: white solid 1px;">Quartier</th>
                        <th style="padding: 5px; border: white solid 1px;">Type Utilisateur</th>
                        <th style="padding: 5px; border: white solid 1px;">Date creation</th>
                        <th style="padding: 5px; border: white solid 1px;">Date modification</th>
                        <th style="padding: 5px; border: white solid 1px;">Date verification EMail</th>
                        <th style="padding: 5px; border: white solid 1px;">Action</th>

                    </tr>

                    @foreach($data as $user)

                    <tr style="background-color: white; color:black; border: black solid 1px;" align="center">

                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->address}}</td>
                        @if($user->usertype == 1)
                        <td>Admin</td>
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

                </table>
            </div>



        </div>

        <!-- container-scroller -->
        <!-- plugins:js -->

        @include('admin.css')

        <!-- End custom js for this page -->
</body>

</html>