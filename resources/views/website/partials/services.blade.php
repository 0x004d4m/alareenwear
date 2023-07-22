<section class="ftco-section">
    <div class="container">
        <div class="row">
            @foreach ($Services as $Service)
                <div class="col-md-4 align-self-stretch ftco-animate">
                    <div class="media block-6 services p-3 py-4 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center mb-3"><img src="{{$Service->image}}" class="img-fluid"></div>
                        <div class="media-body px-3">
                            <h3 class="heading">{{$Service->title}}</h3>
                            <p>{{$Service->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
