@extends('website.layout.main')
@section('title', __('content.contact'))
@section('content')
    <div class="hero-wrap hero-wrap-2"
        style="background-image: url('{{ url('template/images/bg_2.jpg') }}'); background-attachment:fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2">{{ __('content.home') }}</span>
                        <span>{{ __('content.contact') }}</span>
                    </p>
                    <h1 class="mb-3 bread">{{ __('content.contact') }}</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg text-center">
        <div class="container" id="contact">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">{{__('content.contact_information')}}</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span>{{__('content.address')}}:</span> {{__('content.address2')}}</p>
                </div>
                <div class="col-md-3">
                    <p><span>{{__('content.phone')}}:</span> <a dir="ltr" href="tel:+962795576342">+962 7 9557 6342</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>{{__('content.email')}}:</span> <a href="mailto:S.qarka@alareenwear.com">S.qarka@alareenwear.com</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>{{__('content.email')}}:</span> <a href="mailto:Jebril@alareenwear.com">Jebril@alareenwear.com</a></p>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 pr-md-5">
                    @if (Session::has('Success'))
                        <div class="alert alert-success">{{__('content.success')}}</div>
                    @endif
                    <h4 class="mb-4">{{__('content.questions')}}</h4>
                    <form action="/contact" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="{{__('content.name')}}" name="name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="{{__('content.email')}}" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="{{__('content.subject')}}" name="subject" required>
                        </div>
                        <div class="form-group">
                            <textarea cols="30" rows="7" class="form-control" placeholder="{{__('content.message')}}" name="message" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="{{__('content.send_message')}}" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 pr-md-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d671.5185118221552!2d35.682295173093806!3d32.50612989623896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c65ab07bbf4b3%3A0x511a766417959d6d!2z2YXYtdmG2Lkg2KfZhNi52LHZitmGINmE2YTYo9mE2KjYs9ip!5e0!3m2!1sen!2sjo!4v1675871244700!5m2!1sen!2sjo" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
