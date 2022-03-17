<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->

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


                <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px;">

                        <label for="">Nom</label>
                        <input type="text" style="color: black;" name="nom" placeholder="saisir le nom" required>

                    </div>


                    <div style="padding: 15px;">

                        <label for="">Prénom</label>
                        <input type="text" style="color: black;" name="prenom" placeholder="saisir le prénom" required>

                    </div>


                    <div style="padding: 15px;">

                        <label for="">email</label>
                        <input type="text" style="color: black;" name="email" placeholder="saisir le mail" required>

                    </div>


                    <div style="padding: 15px;">

                        <label for="">Tel</label>
                        <input type="number" style="color: black;" name="tel" placeholder="saisir le tel" required>

                    </div>


                    <div style="padding: 15px;">

                        <label for="">Specialité</label>

                        <select name="speciality" id="" style="color: black; width: 200px;" required>
                            <option value="">--selectionner--</option>
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
                        <input type="text" style="color: black;" name="quartier" placeholder="saisir le quartier" required>

                    </div>


                    <div style="padding: 15px;">

                        <label for="">Photo Agent</label>
                        <input type="file" name="file" required>

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