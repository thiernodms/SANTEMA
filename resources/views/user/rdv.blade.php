<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp" style=" font-size: 30px" id="rdv">Prendre Rendez-vous</h1>

        <form class="main-form" action="{{url('rdv')}}" method="POST">

            @csrf



            <div class="row mt-5 ">

                @guest

                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" name="nom" class="form-control" placeholder="Veuillez saisir votre nom complet">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" name="email" class="form-control" placeholder="veuillez saisir votre adresse mail">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" name="tel" class="form-control" placeholder="Veuillez saisir votre Numero de telephone">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" name="quartier" class="form-control" placeholder="Veuillez saisir le nom de votre quartier">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <label for="date">Date</label>
                    <input type="date" id="date" name="date" class="form-control">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <label for="time">Heure</label>
                    <input type="time" id="time" name="time" class="form-control">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="agent" id="agent" class="custom-select">

                        <option value="">---selectionner un agent---</option>

                        @foreach($agent as $agents )

                        <option value="{{$agents->nom}} {{$agents->prenom}}">{{$agents->nom}} {{$agents->prenom}} ({{$agents->speciality}})</option>

                        @endforeach

                    </select>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="service" id="service" class="custom-select">
                        <option value="">--selectionner un service--</option>
                        <option value="consultation">Consultation</option>
                        <option value="traitement">Traitement</option>
                        <option value="conseil">Conseil</option>
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="description" id="description" class="form-control" rows="6" placeholder="decrivez ici en quelques ligne votre problème"></textarea>
                </div>

                @else

                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <label for="date">Date</label>
                    <input type="date" id="date" name="date" class="form-control">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <label for="time">Heure</label>
                    <input type="time" id="time" name="time" class="form-control">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="agent" id="agent" class="custom-select">

                        <option value="">---selectionner un agent---</option>

                        @foreach($agent as $agents )

                        <option value="{{$agents->nom}} {{$agents->prenom}}">{{$agents->nom}} {{$agents->prenom}} ({{$agents->speciality}})</option>

                        @endforeach

                    </select>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="service" id="service" class="custom-select">
                        <option value="">--selectionner un service--</option>
                        <option value="consultation">Consultation</option>
                        <option value="traitement">Traitement</option>
                        <option value="conseil">Conseil</option>
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="description" id="description" class="form-control" rows="6" placeholder="decrivez ici en quelques ligne votre problème"></textarea>
                </div>

                @endauth

            </div>

            <button type="submit" class="btn btn-primary mt-3 wow zoomIn" style="background-color: #00d9a5;">Envoyer</button>
        </form>
    </div>
</div> <!-- .page-section -->