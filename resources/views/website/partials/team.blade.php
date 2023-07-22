<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">{{__('content.team')}}</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($Team as $Member)
                <div class="col-lg-4 mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="d-flex mb-4">
                            <div class="img" style="background-image: url({{ url($Member->image) }});"></div>
                            <div class="info ml-4">
                                <h3><a href="#">{{$Member->name}}</a></h3>
                                <h6><a href="#">{{$Member->position}}</a></h6>
                                <p class="ftco-social d-flex">
                                    @if ($Member->twitter)
                                        <a href="{{ $Member->twitter }}" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
                                    @endif
                                    @if ($Member->facebook)
                                        <a href="{{ $Member->facebook }}" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
                                    @endif
                                    @if ($Member->instagram)
                                        <a href="{{ $Member->instagram }}" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
