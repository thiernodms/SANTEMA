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


            <div style="padding-top: 100px;">

                <table style="font-size: 13px;">

                    <tr style="background-color: black; ">

                        <th style="padding: 5px; border: white solid 1px;">Nom</th>
                        <th style="padding: 5px; border: white solid 1px;">Mail</th>
                        <th style="padding: 5px; border: white solid 1px;">Tel</th>
                        <th style="padding: 5px; border: white solid 1px;">Specialité</th>
                        <th style="padding: 5px; border: white solid 1px;">Quartier</th>
                        <th style="padding: 5px; border: white solid 1px;">Image</th>
                        <th style="padding: 5px; border: white solid 1px;">Action</th>

                    </tr>

                    @foreach($data as $agent)

                    <tr style="background-color: white; color:black; border: black solid 1px;" align="center">

                        <td>{{$agent->nom}} {{$agent->prenom}}</td>
                        <td>{{$agent->email}}</td>
                        <td>{{$agent->tel}}</td>
                        <td>{{$agent->speciality}}</td>
                        <td>{{$agent->quartier}}</td>
                        <td><img height="100" width="100" src="imageagents/{{$agent->image}}" alt=""></td>


                        <td>


                            <a class="btn btn-success" href="{{url('update_agent', $agent->id)}}">Update</a>


                            <a onclick="return confirm('Voulez-vous vraiment supprimer cet agent')" class="btn btn-danger" style="margin-top: 2px;" href="{{url('delete_agent', $agent->id)}}">Delete</a>


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