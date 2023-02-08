<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">{{__('content.blog')}}</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($Blogs as $Blog)
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a class="block-20" style="background-image: url('{{url($Blog->image)}}');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a>{{date($Blog->created_at)}}</a></div>
                            </div>
                            <h3 class="heading mt-3"><a>{{$Blog->title}}</a></h3>
                            <p>{{$Blog->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if($Blogs instanceof \Illuminate\Pagination\LengthAwarePaginator)
            <div class="row mt-5">
                <div class="col text-center">
                    {{ $Blogs->links('vendor.pagination.custom')}}
                </div>
            </div>
        @endif
    </div>
</section>
