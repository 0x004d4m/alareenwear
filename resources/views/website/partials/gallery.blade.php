<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">{{__('content.gallery')}}</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($Galleries as $Gallery)
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a class="block-20" style="background-image: url('{{url($Gallery->image)}}');">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        @if($Galleries instanceof \Illuminate\Pagination\LengthAwarePaginator)
            <div class="row mt-5">
                <div class="col text-center">
                    {{ $Galleries->links('vendor.pagination.custom')}}
                </div>
            </div>
        @endif
    </div>
</section>
