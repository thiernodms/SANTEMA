<!DOCTYPE html>
<html lang="en">

@include('user.partials.head')

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    @include('user.partials.header')

    <div align="center" class="Table table-responsive">

        <table class="table">

            <tr style="background-color: black;">
                <th style="padding: 10px; font-size: 20px; color:white;">Noms de l'agent</th>
                <th style="padding: 10px; font-size: 20px; color:white;">Service</th>
                <th style="padding: 10px; font-size: 20px; color:white;">Date</th>
                <th style="padding: 10px; font-size: 20px; color:white;">Heure</th>
                <th style="padding: 10px; font-size: 20px; color:white;">Description</th>
                <th style="padding: 10px; font-size: 20px; color:white;">Status</th>

                <th style="padding: 10px; font-size: 20px; color:white;">Annuler un rendez-vous</th>

            </tr>

            @foreach($rdv as $rdvs)

            <tr style="background-color: gray; border: white solid 1px;" align="center">

                <td style="padding: 10px; font-size: 20px; color:white;">{{$rdvs->agent->nom}} {{$rdvs->agent->prenom}} </td>
                <td style="padding: 10px; font-size: 20px; color:white;">{{$rdvs->service}}</td>
                <td style="padding: 10px; font-size: 20px; color:white;">{{$rdvs->date}}</td>
                <td style="padding: 10px; font-size: 20px; color:white;">{{$rdvs->time}}</td>
                <td style="padding: 10px; font-size: 20px; color:white;">{{$rdvs->description}}</td>
                <td style="padding: 10px; font-size: 20px; color:white;">{{$rdvs->status}}</td>

                <td><a class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment annuler ce rendez-vous')" href="{{url('annuler_rdv', $rdvs->id)}}"> Annuler</a></td>

            </tr>

            @endforeach

        </table>

    </div>


    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>