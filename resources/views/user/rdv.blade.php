<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp" style=" font-size: 30px" id="rdv">Prendre Rendez-vous</h1>

        <form class="main-form" action="{{url('rdv')}}" method="POST">

            @csrf



            <div class="row mt-5 ">

                @guest

                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <span>
                        @error('nom')
                        {{$message}}
                        @enderror
                    </span>
                    <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="Veuillez saisir votre nom complet" value="{{old('nom')}}">
                </div>

                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <span>
                        @error('email')
                        {{$message}}
                        @enderror
                    </span>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="veuillez saisir votre adresse mail" value="{{old('email')}}">
                </div>

                <div class=" col-12 col-sm-6 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <span>
                        @error('tel')
                        {{$message}}
                        @enderror
                    </span>
                    <input type="tel" name="tel" id="tel" class="form-control @error('tel') is-invalid @enderror" placeholder="Entrez votre Numero de telephone (ex:+224626919660)" value="{{old('tel')}}">
                </div>

                <div class=" col-12 col-sm-6 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <span>
                        @error('quartier')
                        {{$message}}
                        @enderror
                    </span>
                    <input type="text" name="quartier" class="form-control @error('quartier') is-invalid @enderror" placeholder="Veuillez saisir le nom de votre quartier" value="{{old('quartier')}}">
                </div>

                <div class=" col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <label for="date">Date
                        <span>
                            @error('date')
                            {{$message}}
                            @enderror
                        </span>
                    </label>
                    <input type="date" id="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{old('date')}}">
                </div>

                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <label for="time">Heure
                        <span>
                            @error('time')
                            {{$message}}
                            @enderror
                        </span>
                    </label>
                    <input type="time" id="time" name="time" class="form-control @error('time') is-invalid @enderror" value="{{old('time')}}">
                </div>

                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <span>
                        @error('agent')
                        {{$message}}
                        @enderror
                    </span>
                    <select name="agent" id="agent" class="custom-select @error('agent') is-invalid @enderror" value="{{old('agent')}}">

                        <option value="">---selectionner un agent---</option>

                        @foreach($agent as $agents)
                        @if($agents->abonnement == 'abonné')

                        <option value="{{$agents->id}}">{{$agents->user->name}} ({{$agents->speciality}})</option>

                        @endif
                        @endforeach

                    </select>
                </div>

                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <span>
                        @error('service')
                        {{$message}}
                        @enderror
                    </span>
                    <select name="service" id="service" class="custom-select @error('service') is-invalid @enderror" value="{{old('service')}}">
                        <option value="">--selectionner un service--</option>
                        <option value="consultation">Consultation</option>
                        <option value="traitement">Traitement</option>
                        <option value="conseil">Conseil</option>
                    </select>
                </div>

                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <span>
                        @error('description')
                        {{$message}}
                        @enderror
                    </span>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="6" placeholder="decrivez ici en quelques ligne votre problème">{{old('description')}}</textarea>
                </div>

                @else

                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <label for="date">Date
                        @error('date')
                        {{$message}}
                        @enderror
                    </label>
                    <input type="date" id="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{old('date')}}">
                </div>

                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <label for="time">Heure
                        <span>
                            @error('time')
                            {{$message}}
                            @enderror
                        </span>
                    </label>
                    <input type="time" id="time" name="time" class="form-control @error('time') is-invalid @enderror" value="{{old('time')}}">
                </div>

                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <span>
                        @error('agent')
                        {{$message}}
                        @enderror
                    </span>
                    <select name="agent" id="agent" class="custom-select @error('agent') is-invalid @enderror" value="{{old('agent')}}">

                        <option value="">---selectionner un agent---</option>


                        @foreach($agent as $agents)
                        @if($agents->abonnement == 'abonné')

                        <option value="{{$agents->id}}">{{$agents->user->name}} ({{$agents->speciality}})</option>

                        @endif
                        @endforeach

                    </select>
                </div>

                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <span>
                        @error('service')
                        {{$message}}
                        @enderror
                    </span>
                    <select name="service" id="service" class="custom-select @error('service') is-invalid @enderror" value="{{old('service')}}">
                        <option value="">--selectionner un service--</option>
                        <option value="consultation">Consultation</option>
                        <option value="traitement">Traitement</option>
                        <option value="conseil">Conseil</option>
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <span>
                        @error('description')
                        {{$message}}
                        @enderror
                    </span>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="6" placeholder="decrivez ici en quelques ligne votre problème">{{old('description')}}</textarea>
                </div>

                @endauth

            </div>

            <button type="submit" class="btn btn-primary mt-3 wow zoomIn" style="background-color: #00d9a5;">Envoyer</button>
        </form>
    </div>
</div> <!-- .page-section -->