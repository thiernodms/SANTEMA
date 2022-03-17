<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    <base href="/public">


    <style type="text/css">
        label {
            display: inline-block;

            width: 200px;
        }
    </style>

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


            <div class="container" align="center" style="padding-top:100px;">



                @if(session()->has('message'))


                <div class="alert alert-success alert-dismissible">


                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>



                    {{session()->get('message')}}

                </div>


                @endif


                <form action="{{url('edit_agent', $agent->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf



                    <div style="padding: 15px;">

                        <label for="">Nom</label>
                        <input type="text" style="color: black;" name="nom" value="{{$agent->nom}}" required>

                    </div>


                    <div style="padding: 15px;">

                        <label for="">Prénom</label>
                        <input type="text" style="color: black;" name="prenom" value="{{$agent->prenom}}" required>

                    </div>


                    <div style="padding: 15px;">

                        <label for="">Email</label>
                        <input type="text" style="color: black;" name="email" value="{{$agent->email}}" required>

                    </div>


                    <div style="padding: 15px;">

                        <label for="">Tel</label>
                        <input type="number" style="color: black;" name="tel" value="{{$agent->tel}}" required>

                    </div>


                    <div style="padding: 15px;">

                        <label for="">Specialité</label>

                        <select name="speciality" id="" style="color: black; width: 200px;" value="{{$agent->speciality}}" required>
                            <option value="{{$agent->speciality}}">{{$agent->speciality}}</option>
                            <option value="generaliste">Généraliste</option>
                            <option value="médecin">Medécin</option>
                            <option value="ophtalmologue">Ophtalmologue</option>
                            <option value="dermatologue">Dermatologue</option>
                            <option value="cardiologue">Cardiologue</option>
                            <option value="infirmier">Infirmier</option>
                            <option value="sagefemme">Sage-femme</option>

                        </select>

                    </div>


                    <div style="padding: 15px;">

                        <label for="">Quartier</label>
                        <input type="text" style="color: black;" name="quartier" value="{{$agent->quartier}}" required>

                    </div>


                    <div style="padding: 15px;">

                        <label for="">Ancienne image</label>
                        <img height="150" width="150" src="/imageagents/{{$agent->image}}" alt="">

                    </div>


                    <div style="padding: 15px;">

                        <label for="">Changer d'image</label>
                        <input type="file" name="image">

                    </div>


                    <div style="padding: 15px;">

                        <input type="submit" class="btn btn-success">

                    </div>


                </form>

            </div>

        </div>

        <!-- container-scroller -->
        <!-- plugins:js -->

        @include('admin.css')

        <!-- End custom js for this page -->
</body>

</html>