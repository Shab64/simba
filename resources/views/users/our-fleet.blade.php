@include('users.header')


<section class="product-listing page-section-ptb">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-8">
                <div class="sorting-options-main">
                    <div class="row">


                        <div class="col-lg-12">
                            <div class="price-search">
                                <span class="mb-2">Price search</span>
                                <div class="search">
                                    <i class="fa fa-search"></i>
                                    <input type="search" class="form-control placeholder" placeholder="Search....">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @forelse($our_fleet as $o)
                <div class="car-grid">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="car-item gray-bg text-center">
                                <div class="car-image">
                                    <img class="img-fluid" src="{{url('storage/app/public/carlist/'.$o['image'])}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="car-details">
                                <div class="car-title">
                                    <a href="#">{{$o['name']}} or Similar</a>
                                    <p>{{$o['details']}}</p>
                                </div>
                                <div class="price">
{{--                                    <span class="old-price">$35,568</span>--}}
                                    <span class="new-price">${{$o['daily_start_price']}}</span>
                                    <a class="button red float-end" href="{{route('our-fleet-detail',[$o['id']])}}">Details</a>
                                </div>
                                <div class="car-list">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-registered"></i> 2016</li>
                                        <li><i class="fa fa-cog"></i> Manual</li>
                                        <li><i class="fa fa-shopping-cart"></i> Compact</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    No Car Found
                @endforelse
                <div class="pagination-nav d-flex justify-content-center">
                    <ul class="pagination">
                        <li><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


@include('users.footer')
