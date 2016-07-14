        <!-- //////////////////////////////////
    //////////////PAGE CONTENT///////////// 
    ////////////////////////////////////-->



        <div class="container">
        @include('includes.alert')
            <div class="row">
                <div class="col-md-3">
                    <aside class="sidebar-left">
                        <h3 class="mb20">I am looking for</h3>
                        <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
                            <li><a href="{{ route('home') }}"><i class="fa fa-bolt"></i>All</a></li>
                            @foreach($categories as $category)
                                <li><a href="{{ route('category.filter', $category->id) }}"><i class="fa fa-star"></i>{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                        <!-- <div class="sidebar-box">
                            <h5>Recent Viewed</h5>
                            <ul class="thumb-list">
                                <li>
                                    <a href="#">
                                        <img src="couponia/img/urbex_esch_lux_with_laney_and_laaaaag_70x70.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <h5 class="thumb-list-item-title"><a href="#">Best Camera Lenthes</a></h5>
                                        <p class="thumb-list-item-price">$313</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="couponia/img/amaze_70x70.jpg" alt="Image Alternative text" title="AMaze" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <h5 class="thumb-list-item-title"><a href="#">New Glass Collection</a></h5>
                                        <p class="thumb-list-item-price">$247</p>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="couponia/img/waipio_valley_70x70.jpg" alt="Image Alternative text" title="waipio valley" />
                                    </a>
                                    <div class="thumb-list-item-caption">
                                        <h5 class="thumb-list-item-title"><a href="#">Awesome Vacation</a></h5>
                                        <p class="thumb-list-item-price">$284</p>
                                    </div>
                                </li>
                            </ul>
                        </div> -->

                    </aside>
                </div>
                <div class="col-md-9">

                    <!-- <div class="owl-carousel owl-slider" id="owl-carousel-slider" data-inner-pagination="true" data-white-pagination="true" data-nav="false">
                        <div>
                            <div class="bg-holder">
                                <img src="couponia/img/branding__ipad_interactive_design_900x500.jpg" alt="Image Alternative text" title="Branding  iPad Interactive Design" />
                                <div class="bg-mask"></div>
                                <div class="bg-front vert-center text-white text-center">
                                    <h2 class="text-uc">New Bloke Collection</h2>
                                    <p class="text-bigger">Mattis sollicitudin enim ad mauris lacus lectus</p>
                                    <p class="text-hero">Save up to 70%</p><a class="btn btn-lg btn-ghost btn-white btn-lg" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-holder">
                                <img src="couponia/img/hot_mixer_900x500.jpg" alt="Image Alternative text" title="Hot mixer" />
                                <div class="bg-mask"></div>
                                <div class="bg-front vert-center text-white text-center">
                                    <h2 class="text-uc">Modern DJ Sets</h2>
                                    <p class="text-bigger">A iaculis lorem pellentesque dictum felis semper</p>
                                    <p class="text-hero">Save up to 70%</p><a class="btn btn-lg btn-ghost btn-white btn-lg" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="bg-holder">
                                <img src="couponia/img/iphone_5_ipad_mini_ipad_3_900x500.jpg" alt="Image Alternative text" title="iPhone 5 iPad mini iPad 3" />
                                <div class="bg-mask"></div>
                                <div class="bg-front vert-center text-white text-center">
                                    <h2 class="text-uc">Gatgets Giveaway</h2>
                                    <p class="text-bigger">Tellus cum ante sed mus vulputate scelerisque</p>
                                    <p class="text-hero">Save up to 40%</p><a class="btn btn-lg btn-ghost btn-white btn-lg" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="gap"></div>
                    <div class="row row-wrap">
                        <div class="col-md-4">
                            <div class="product-banner">
                                <img src="couponia/img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                                <div class="product-banner-inner">
                                    <h5>Playstation Accsories</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-banner">
                                <img src="couponia/img/urbex_esch_lux_with_laney_and_laaaaag_800x600.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                                <div class="product-banner-inner">
                                    <h5>Canon Cameras</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-banner">
                                <img src="couponia/img/amaze_800x600.jpg" alt="Image Alternative text" title="AMaze" />
                                <div class="product-banner-inner">
                                    <h5>New Glass Collections</h5><a class="btn btn-sm btn-white btn-ghost">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="gap gap-small"></div>
                    <!-- <h1 class="mb20">Weekly Featured <small><a href="#">View All</a></small></h1>
                    <div class="row row-wrap">
                        <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="couponia/img/our_coffee_miss_u_800x600.jpg" alt="Image Alternative text" title="Our Coffee miss u" />
                                    <div class="product-quick-view">
                                        <a class="fa fa-eye popup-text" href="#product-quick-view-dialog" data-effect="mfp-move-from-top" data-toggle="tooltip" data-placement="top" title="Quick View"></a>
                                    </div>
                                    <div class="product-secondary-image">
                                        <img src="couponia/img/ana_29_800x600.jpg" alt="Image Alternative text" title="Ana 29" />
                                    </div>
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating" title="3/5 rating">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star-o"></i>
                                        </li>
                                        <li><i class="fa fa-star-o"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">Coffe Shop Discount</h5>
                                    <p class="product-desciption">Netus semper viverra posuere sollicitudin felis ante tincidunt</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$106</span>
                                            </li>
                                            <li><span class="product-old-price">$192</span>
                                            </li>
                                            <li><span class="product-save">Save 55%</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm" href=""><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="couponia/img/ana_29_800x600.jpg" alt="Image Alternative text" title="Ana 29" />
                                    <div class="product-quick-view">
                                        <a class="fa fa-eye popup-text" href="#product-quick-view-dialog" data-effect="mfp-move-from-top" data-toggle="tooltip" data-placement="top" title="Quick View"></a>
                                    </div>
                                    <div class="product-secondary-image">
                                        <img src="couponia/img/iphone_5_ipad_mini_ipad_3_800x600.jpg" alt="Image Alternative text" title="iPhone 5 iPad mini iPad 3" />
                                    </div>
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">Hot Summer Collection</h5>
                                    <p class="product-desciption">Netus semper viverra posuere sollicitudin felis ante tincidunt</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$104</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="couponia/img/waipio_valley_800x600.jpg" alt="Image Alternative text" title="waipio valley" />
                                    <div class="product-quick-view">
                                        <a class="fa fa-eye popup-text" href="#product-quick-view-dialog" data-effect="mfp-move-from-top" data-toggle="tooltip" data-placement="top" title="Quick View"></a>
                                    </div>
                                    <div class="product-secondary-image">
                                        <img src="couponia/img/green_furniture_800x600.jpg" alt="Image Alternative text" title="Green Furniture" />
                                    </div>
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating" title="3.4/5 rating">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star-half-empty"></i>
                                        </li>
                                        <li><i class="fa fa-star-o"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">Awesome Vacation</h5>
                                    <p class="product-desciption">Netus semper viverra posuere sollicitudin felis ante tincidunt</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$66</span>
                                            </li>
                                            <li><span class="product-old-price">$168</span>
                                            </li>
                                            <li><span class="product-save">Save 39%</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="couponia/img/cascada_800x600.jpg" alt="Image Alternative text" title="cascada" />
                                    <div class="product-quick-view">
                                        <a class="fa fa-eye popup-text" href="#product-quick-view-dialog" data-effect="mfp-move-from-top" data-toggle="tooltip" data-placement="top" title="Quick View"></a>
                                    </div>
                                    <div class="product-secondary-image">
                                        <img src="couponia/img/the_best_mode_of_transport_here_in_maldives_800x600.jpg" alt="Image Alternative text" title="the best mode of transport here in maldives" />
                                    </div>
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating" title="4/5 rating">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star-o"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">Adventure in Woods</h5>
                                    <p class="product-desciption">Netus semper viverra posuere sollicitudin felis ante tincidunt</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$158</span>
                                            </li>
                                            <li><span class="product-old-price">$272</span>
                                            </li>
                                            <li><span class="product-save">Save 58%</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="couponia/img/a_turn_800x600.jpg" alt="Image Alternative text" title="a turn" />
                                    <div class="product-quick-view">
                                        <a class="fa fa-eye popup-text" href="#product-quick-view-dialog" data-effect="mfp-move-from-top" data-toggle="tooltip" data-placement="top" title="Quick View"></a>
                                    </div>
                                    <div class="product-secondary-image">
                                        <img src="couponia/img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                                    </div>
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating" title="3/5 rating">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star-o"></i>
                                        </li>
                                        <li><i class="fa fa-star-o"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">Diving with Sharks</h5>
                                    <p class="product-desciption">Netus semper viverra posuere sollicitudin felis ante tincidunt</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$169</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="couponia/img/green_furniture_800x600.jpg" alt="Image Alternative text" title="Green Furniture" />
                                    <div class="product-quick-view">
                                        <a class="fa fa-eye popup-text" href="#product-quick-view-dialog" data-effect="mfp-move-from-top" data-toggle="tooltip" data-placement="top" title="Quick View"></a>
                                    </div>
                                    <div class="product-secondary-image">
                                        <img src="couponia/img/cup_on_red_800x600.jpg" alt="Image Alternative text" title="Cup on red" />
                                    </div>
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating" title="3.7/5 rating">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star-o"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">Green Furniture Pack</h5>
                                    <p class="product-desciption">Netus semper viverra posuere sollicitudin felis ante tincidunt</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$164</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- this part is assumed to keep in homepage -->
                    <div class="gap gap-small"></div>
                    <h1 class="mb20">New Arrivals <small><a href="#">View All</a></small></h1>
                    <div class="row row-wrap">
                        @if(count($items))
                        @foreach($items as $item)
                        <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="{{ $item->img_url }}" alt="{{ $item->name }}" title="{{ $item->name }}" />
                                </header>
                                <div class="product-inner">
                                    <!-- <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>  } rating 
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                    </ul> -->
                                    <h5 class="product-title">{{ $item->name }}</h5>
                                    <p class="product-desciption">{{ $item->description }}</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">{{ $item->price }}</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="{{ route('cart.create', ['id' => $item->id]) }}"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm" href="{!! route('item.details',['id' => $item->id]) !!}">><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        <!-- <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="couponia/img/our_coffee_miss_u_800x600.jpg" alt="Image Alternative text" title="Our Coffee miss u" />
                                    <div class="product-quick-view">
                                        <a class="fa fa-eye popup-text" href="#product-quick-view-dialog" data-effect="mfp-move-from-top" data-toggle="tooltip" data-placement="top" title="Quick View"></a>
                                    </div>
                                    <div class="product-secondary-image">
                                        <img src="couponia/img/ana_29_800x600.jpg" alt="Image Alternative text" title="Ana 29" />
                                    </div>
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating" title="4.1/5 rating">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star-half-empty"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">Coffe Shop Discount</h5>
                                    <p class="product-desciption">Suscipit cubilia ligula potenti ultrices vehicula consectetur risus</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$105</span>
                                            </li>
                                            <li><span class="product-old-price">$285</span>
                                            </li>
                                            <li><span class="product-save">Save 37%</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="couponia/img/green_furniture_800x600.jpg" alt="Image Alternative text" title="Green Furniture" />
                                    <div class="product-quick-view">
                                        <a class="fa fa-eye popup-text" href="#product-quick-view-dialog" data-effect="mfp-move-from-top" data-toggle="tooltip" data-placement="top" title="Quick View"></a>
                                    </div>
                                    <div class="product-secondary-image">
                                        <img src="couponia/img/cup_on_red_800x600.jpg" alt="Image Alternative text" title="Cup on red" />
                                    </div>
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating" title="4.8/5 rating">
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                        <li><i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <h5 class="product-title">Green Furniture Pack</h5>
                                    <p class="product-desciption">Suscipit cubilia ligula potenti ultrices vehicula consectetur risus</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$182</span>
                                            </li>
                                        </ul>
                                        <ul class="product-actions-list">
                                            <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                            </li>
                                            <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="gap gap-small"></div>
                </div>
            </div>

        </div>


        <!-- //////////////////////////////////
    //////////////END PAGE CONTENT///////// 
    ////////////////////////////////////-->