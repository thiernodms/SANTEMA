<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" style=" font-size:30px;">Nos Agents de Santé</h1>


        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">


            @foreach($agent as $agents)

            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img style="height: 300px !important; " src="imageagents/{{$agents->image}}" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="https://wa.me/+224626919660"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">{{$agents->nom}} {{$agents->prenom}}</p>
                        <span class="text-sm text-grey">{{$agents->speciality}}</span>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>