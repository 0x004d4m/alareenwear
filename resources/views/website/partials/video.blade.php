<section class="ftco-section-3 img" style="background-image: url({{url($Video->image)}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex justify-content-center">
            <div class="col-md-9 about-video text-center">
                <h2 class="ftco-animate">{{$Video->description}}</h2>
                <div class="video d-flex justify-content-center">
                    <a href="{{$Video->video}}" class="button popup-vimeo d-flex justify-content-center align-items-center"><span class="ion-ios-play"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
