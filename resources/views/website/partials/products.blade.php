<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">{{__('content.products')}}</h2>
            </div>
        </div>
        <div class="row text-center">
            @foreach ($Products as $Product)
                <div class="col-md-4 ftco-animate mb-3">
                    <img src="{{ url($Product->image) }}" class="img-fluid">
                </div>
            @endforeach
        </div>
        @if($Products instanceof \Illuminate\Pagination\LengthAwarePaginator)
            <div class="row mt-5">
                <div class="col text-center">
                    {{ $Products->links('vendor.pagination.custom')}}
                </div>
            </div>
        @endif
    </div>
</section>
