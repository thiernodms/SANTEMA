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

                <table class="table">

                    <tr style="background-color: black; ">

                        <th style="padding: 5px; border: white solid 1px;">Nom Client</th>
                        <th style="padding: 5px; border: white solid 1px;">Email</th>
                        <th style="padding: 5px; border: white solid 1px;">Date</th>
                        <th style="padding: 5px; border: white solid 1px;">Agent de santé</th>
                        <th style="padding: 5px; border: white solid 1px;">Service</th>
                        <th style="padding: 5px; border: white solid 1px;">Numéro</th>
                        <th style="padding: 5px; border: white solid 1px;">Description</th>
                        <th style="padding: 5px; border: white solid 1px;">Status</th>
                        <th style="padding: 5px; border: white solid 1px;">Action</th>
                        <th style="padding: 5px; border: white solid 1px;">Notifier</th>




                    </tr>


                    @foreach($rdv as $rdvs)

                    <tr align="center" style="background-color: white; color:black; border: black solid 1px;">
                        <td>{{$rdvs->nom}}</td>
                        <td>{{$rdvs->email}}</td>
                        <td>{{$rdvs->date}}</td>
                        <td>{{$rdvs->agent}}</td>
                        <td>{{$rdvs->service}}</td>
                        <td>{{$rdvs->tel}}</td>
                        <td>{{$rdvs->description}}</td>
                        <td>{{$rdvs->status}}</td>
                        <td>


                            <a class="btn btn-success" style="margin-bottom: 2px;" href="{{url('confirm_rdv', $rdvs->id)}}">Confirmer</a>

                            <a class="btn btn-danger" href="{{url('annuler_rdv', $rdvs->id)}}">Annuler</a>

                        </td>

                        <td>

                            <a class="btn btn-primary" href="{{url('notifier_rdv_view', $rdvs->id)}}">Notifier</a>

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