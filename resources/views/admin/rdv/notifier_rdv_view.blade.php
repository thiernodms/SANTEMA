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


                <form action="{{url('notifier_rdv', $data->id)}}" method="POST">

                    @csrf

                    <div style="padding: 15px;">

                        <label for="">Salutation</label>
                        <input type="text" style="color: black;" name="greeting" placeholder="saisir la salutation" required>

                    </div>


                    <div style="padding: 15px;">

                        <label for="">Corps</label>
                        <textarea style="color: black;" name="body" id="" cols="25" rows="5" placeholder="saisir le message"></textarea>
                    </div>


                    <div style="padding: 15px;">

                        <label for="">Action Text</label>
                        <input type="text" style="color: black;" name="actiontext" required>

                    </div>


                    <div style="padding: 15px;">

                        <label for="">Action Url</label>
                        <input type="text" style="color: black;" name="actionurl" required>

                    </div>


                    <div style="padding: 15px;">

                        <label for="">End Part</label>
                        <input type="text" style="color: black;" name="endpart" required>

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