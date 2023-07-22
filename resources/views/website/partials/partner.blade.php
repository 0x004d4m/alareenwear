<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">{{__('content.partners')}}</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($Partners as $Partner)
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a class="block-20" style="background-size: contain;background-image: url('{{url($Partner->image)}}');">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
