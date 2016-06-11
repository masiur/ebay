@extends('layouts.default')
    @section('content')
        @include('includes.alert')

        <!-- //////////////////////////////////
	//////////////PAGE CONTENT///////////// 
	////////////////////////////////////-->

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div id="review-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
                        <h3>Add a Review</h3>
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" placeholder="e.g. John Doe" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="text" placeholder="e.g. jogndoe@gmail.com" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Review</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Rating</label>
                                <ul class="icon-list icon-list-inline star-rating" id="star-rating">
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
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit" />
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="fotorama" data-nav="thumbs" data-allowfullscreen="1" data-thumbheight="150" data-thumbwidth="150">
                                <img src="/couponia/img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                                <img src="/couponia/img/amaze_800x600.jpg" alt="Image Alternative text" title="AMaze" />
                                <img src="/couponia/img/urbex_esch_lux_with_laney_and_laaaaag_800x600.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                                <img src="/couponia/img/food_is_pride_800x600.jpg" alt="Image Alternative text" title="Food is Pride" />
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="product-info box">
                                <ul class="icon-group icon-list-rating text-color" title="4.5/5 rating">
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
                                </ul>	<small><a href="#" class="text-muted">based on 8 reviews</a></small>
                                <h3>New Glass Collection</h3>
                                <p class="product-info-price">$150</p>
                                <p class="text-smaller text-muted">Nostra luctus vulputate cum litora accumsan est turpis enim iaculis nisi justo nec etiam fermentum cum molestie vehicula eu arcu praesent commodo sociis nunc duis vel sem senectus nunc egestas</p>
                                <ul class="icon-list list-space product-info-list">
                                    <li><i class="fa fa-check"></i>Id cubilia</li>
                                    <li><i class="fa fa-check"></i>Euismod primis</li>
                                    <li><i class="fa fa-check"></i>Amet porta</li>
                                    <li><i class="fa fa-check"></i>Facilisis cum</li>
                                    <li><i class="fa fa-check"></i>Morbi curae</li>
                                </ul>
                                <ul class="list-inline">
                                    <li><a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </li>
                                    <li><a href="#" class="btn"><i class="fa fa-star"></i> To Wishlist</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div class="tabbable">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-pencil"></i>Desciption</a>
                            </li>
                            <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-info"></i>Additional Information</a>
                            </li>
                            <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-truck"></i>Shipping & Payment</a>
                            </li>
                            <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-comments"></i>Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab-1">
                                <p>Nullam viverra odio dui ornare suspendisse nam est conubia quisque phasellus in tristique penatibus neque faucibus fringilla aliquam himenaeos elit enim sociosqu nunc ullamcorper a montes ligula molestie lacus conubia leo senectus tempus ante porta vulputate dis euismod sagittis risus pretium facilisis sociis in facilisis arcu interdum montes et aliquet</p>
                                <p>Nostra litora magna dolor amet taciti eu adipiscing sapien vestibulum mattis litora ligula magna massa vulputate conubia parturient consequat netus inceptos dapibus platea potenti habitasse eros at fringilla nisl parturient</p>
                                <p>Netus ultrices eleifend mus commodo leo sociosqu platea vehicula himenaeos mattis etiam vestibulum pharetra sodales aliquam mattis semper ut dictum justo rhoncus iaculis laoreet aliquet a erat accumsan dui luctus</p>
                            </div>
                            <div class="tab-pane fade" id="tab-2">
                                <table class="table table-striped mb0">
                                    <tbody>
                                        <tr>
                                            <td>Weight</td>
                                            <td>1.5kg</td>
                                        </tr>
                                        <tr>
                                            <td>Dimentions</td>
                                            <td>10 x 20 x 30 cm</td>
                                        </tr>
                                        <tr>
                                            <td>Composition</td>
                                            <td>100% Cotton</td>
                                        </tr>
                                        <tr>
                                            <td>Size & Fit</td>
                                            <td>This style comes in a regular fit which fits true to size</td>
                                        </tr>
                                        <tr>
                                            <td>Other Info</td>
                                            <td>Machine wash according to instructions on care label</td>
                                        </tr>
                                        <tr>
                                            <td>Size</td>
                                            <td>Small, Medium, Large</td>
                                        </tr>
                                        <tr>
                                            <td>Color</td>
                                            <td>Brown</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="tab-3">
                                <p>Dictum odio etiam phasellus eget metus blandit nam ac in vivamus nisi nisi lobortis scelerisque quis nisl ligula torquent mattis consectetur netus commodo senectus primis natoque quisque cursus molestie odio</p>
                                <p>Primis massa conubia magnis gravida faucibus nisi hendrerit libero mus montes vitae imperdiet porta arcu mi ac praesent pulvinar quam orci augue pharetra taciti cum quam ligula netus suspendisse dolor</p>
                            </div>
                            <div class="tab-pane fade" id="tab-4">
                                <ul class="comments-list">
                                    <li>
                                        <!-- REVIEW -->
                                        <article class="comment">
                                            <div class="comment-author">
                                                <img src="/couponia/img/gamer_chick_50x50.jpg" alt="Image Alternative text" title="Gamer Chick" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
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
                                                </ul><span class="comment-author-name">John Doe</span>
                                                <p class="comment-content">Adipiscing natoque mus nam luctus fringilla consectetur dui mattis torquent diam cum sociosqu nisi dis litora phasellus facilisis</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <!-- REVIEW -->
                                        <article class="comment">
                                            <div class="comment-author">
                                                <img src="/couponia/img/ana_29_50x50.jpg" alt="Image Alternative text" title="Ana 29" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
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
                                                </ul><span class="comment-author-name">Elizabeth Wallace</span>
                                                <p class="comment-content">Egestas fermentum sagittis ligula velit cum sagittis risus lacinia vel taciti enim porttitor venenatis tellus sollicitudin inceptos torquent</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <!-- REVIEW -->
                                        <article class="comment">
                                            <div class="comment-author">
                                                <img src="/couponia/img/afro_50x50.jpg" alt="Image Alternative text" title="Afro" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="5/5 rating">
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
                                                </ul><span class="comment-author-name">Cyndy Naquin</span>
                                                <p class="comment-content">Sollicitudin per metus nec faucibus aliquam placerat integer congue parturient pulvinar class</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <!-- REVIEW -->
                                        <article class="comment">
                                            <div class="comment-author">
                                                <img src="/couponia/img/bubbles_50x50.jpg" alt="Image Alternative text" title="Bubbles" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
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
                                                </ul><span class="comment-author-name">Olivia Slater</span>
                                                <p class="comment-content">Amet hac aliquam ante blandit in adipiscing metus primis sagittis vestibulum mauris at quis praesent accumsan platea adipiscing non</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <!-- REVIEW -->
                                        <article class="comment">
                                            <div class="comment-author">
                                                <img src="/couponia/img/me_with_the_uke_50x50.jpg" alt="Image Alternative text" title="Me with the Uke" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
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
                                                </ul><span class="comment-author-name">Ava McDonald</span>
                                                <p class="comment-content">Vestibulum massa suspendisse cursus eros ac facilisis eleifend platea rhoncus maecenas volutpat sodales mattis quam tristique sem ligula vehicula ut</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <!-- REVIEW -->
                                        <article class="comment">
                                            <div class="comment-author">
                                                <img src="/couponia/img/amaze_50x50.jpg" alt="Image Alternative text" title="AMaze" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
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
                                                </ul><span class="comment-author-name">Joseph Watson</span>
                                                <p class="comment-content">Blandit cursus ac et mauris curabitur tortor feugiat nulla cursus cras odio non amet phasellus sapien donec convallis ac tortor nullam</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <!-- REVIEW -->
                                        <article class="comment">
                                            <div class="comment-author">
                                                <img src="/couponia/img/chiara_50x50.jpg" alt="Image Alternative text" title="Chiara" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="5/5 rating">
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
                                                </ul><span class="comment-author-name">Frank Mills</span>
                                                <p class="comment-content">Maecenas tortor class nisl ultrices ultricies a mollis suscipit eleifend dolor nullam quis ultricies ultrices porta netus nibh tellus condimentum sociis feugiat est platea lectus pretium sociosqu scelerisque</p>
                                            </div>
                                        </article>
                                    </li>
                                    <li>
                                        <!-- REVIEW -->
                                        <article class="comment">
                                            <div class="comment-author">
                                                <img src="/couponia/img/andrea_50x50.jpg" alt="Image Alternative text" title="Andrea" />
                                            </div>
                                            <div class="comment-inner">
                                                <ul class="icon-group icon-list-rating comment-review-rate" title="5/5 rating">
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
                                                </ul><span class="comment-author-name">Oliver Ross</span>
                                                <p class="comment-content">Ullamcorper vel adipiscing aenean viverra quis pharetra class nam porttitor leo praesent eleifend malesuada per himenaeos commodo iaculis dolor adipiscing quis amet</p>
                                            </div>
                                        </article>
                                    </li>
                                </ul><a class="popup-text btn btn-primary" href="#review-dialog" data-effect="mfp-zoom-out"><i class="fa fa-pencil"></i> Add a review</a>
                            </div>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <h3>Related Porducts</h3>
                    <div class="gap gap-mini"></div>
                    <div class="row row-wrap">
                        <div class="col-md-4">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="/couponia/img/a_turn_800x600.jpg" alt="Image Alternative text" title="a turn" />
                                </header>
                                <div class="product-inner">
                                    <ul class="icon-group icon-list-rating" title="3.8/5 rating">
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
                                    <h5 class="product-title">Diving with Sharks</h5>
                                    <p class="product-desciption">Tempus mauris primis magna nulla mus urna cursus</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$178</span>
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
                                    <img src="/couponia/img/ana_29_800x600.jpg" alt="Image Alternative text" title="Ana 29" />
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
                                    <h5 class="product-title">Hot Summer Collection</h5>
                                    <p class="product-desciption">Tempus mauris primis magna nulla mus urna cursus</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$300</span>
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
                                    <img src="/couponia/img/food_is_pride_800x600.jpg" alt="Image Alternative text" title="Food is Pride" />
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
                                    <h5 class="product-title">Best Pasta</h5>
                                    <p class="product-desciption">Tempus mauris primis magna nulla mus urna cursus</p>
                                    <div class="product-meta">
                                        <ul class="product-price-list">
                                            <li><span class="product-price">$191</span>
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
                    </div>
                    <div class="gap gap-small"></div>
                </div>
            </div>

        </div>


        <!-- //////////////////////////////////
	//////////////END PAGE CONTENT///////// 
	////////////////////////////////////-->

@stop