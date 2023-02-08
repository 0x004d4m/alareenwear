<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">{{__('content.testimony')}}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="carousel-testimony owl-carousel">
                    @foreach ($Testimonies as $Testimony)
                        <div class="item">
                            <div class="testimony-wrap text-center">
                                <div class="user-img mb-5" style="background-image: url({{url($Testimony->image)}})">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5">{{$Testimony->description}}</p>
                                    <p class="name">{{$Testimony->name}}</p>
                                    <span class="position">{{$Testimony->position}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
