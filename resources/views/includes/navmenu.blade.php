<header class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- MAIN NAVIGATION -->
                        <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                        <nav>
                            <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                                <li class="{!! Menu::isActiveURL('home') !!}"><a href="{{ url('home') }}">Home</a>
                                </li>
                                <li><a href="category-page-shop.html">Category</a>
                                    <ul>
                                        <li><a href="category-page-shop.html">Shop</a>
                                        </li>
                                        <li><a href="category-page-coupon.html">Coupon</a>
                                        </li>
                                        <li><a href="category-page-thumbnails-shop-layout-1.html">Thumbnails</a>
                                            <ul>
                                                <li><a href="category-page-thumbnails-shop-layout-1.html">Shop</a>
                                                    <ul>
                                                        <li><a href="category-page-thumbnails-shop-layout-1.html">Layout 1</a>
                                                        </li>
                                                       
                                                        <li><a href="category-page-thumbnails-shop-layout-6.html">Layout 6</a>
                                                        </li>
                                                        <li><a href="category-page-thumbnails-shop-horizontal.html">Horizontal</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="category-page-thumbnails-coupon-layout-1.html">Coupon</a>
                                                    <ul>
                                                        <li><a href="category-page-thumbnails-coupon-layout-1.html">Layout 1</a>
                                                        </li>
                                                        <li><a href="category-page-thumbnails-coupon-layout-2.html">Layout 2</a>
                                                        </li>
                                                        <li><a href="category-page-thumbnails-coupon-layout-3.html">Layout 3</a>
                                                        </li>
                                                       
                                                    </ul>
                                                </li>
                                                <li><a href="category-page-thumbnails-breadcrumbs.html">Breadcrumbs</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="product-shop-sidebar.html">Product </a>
                                    <ul>
                                        <li><a href="product-shop-sidebar.html">Shop</a>
                                            <ul>
                                                <li><a href="product-shop-sidebar.html">Sidebar</a>
                                                </li>
                                                <li><a href="product-shop-sidebar-left.html">Sidebar Left</a>
                                                </li>
                                                <li><a href="product-shop-centered.html">Centered</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="product-coupon-default.html">Coupon</a>
                                            <ul>
                                                <li><a href="product-coupon-default.html">Default</a>
                                                </li>
                                                <li><a href="product-coupon-meta-right.html">Meta right</a>
                                                </li>
                                                <li><a href="product-coupon-gallery.html">Gallery</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('message') }}">Message</a>
                                    <ul>
                                        <li><a href="features-typography.html">Typography</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li><a href="blog-sidebar-right.html">Blog</a>
                                    <ul>
                                        <li><a href="blog-sidebar-right.html">Sidebar Right</a>
                                        </li>
                                        <li><a href="blog-sidebar-left.html">Sidebar Left</a>
                                        </li>
                                        <li><a href="blog-full-width.html">Full Width</a>
                                        </li>
                                        <li><a href="post-sidebar-right.html">Post</a>
                                            <ul>
                                                <li><a href="post-sidebar-right.html">Sidebar Right</a>
                                                </li>
                                                <li><a href="post-sidebar-left.html">Sidebar Left</a>
                                                </li>
                                                <li><a href="post-full-width.html">Full Width</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="page-full-width.html">Pages</a>
                                    <ul>
                                        <li><a href="page-my-account-settings.html">My Account</a>
                                            <ul> 
                                                <li><a href="page-my-account-orders.html">Orders History</a>
                                                </li>
                                                <li><a href="page-my-account-wishlist.html">Wishlist</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="page-full-width.html">Full Width</a>
                                       
                                        </li>
                                        <li><a href="page-404.html">404</a>
                                        </li>
                                        <li><a href="page-search.html">Search</a>
                                            <ul>
                                                <li><a href="page-search-black.html">Black</a>
                                                </li>
                                                
                                                <li><a href="page-search-no-search.html">No Search</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="page-contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </li>

                                

                            </ul>
                        </nav>
                        <!-- END MAIN NAVIGATION -->
                    </div>
                    <div class="col-md-6">
                        <!-- LOGIN REGISTER LINKS -->
                        <ul class="login-register">
                            <li><a href="{{ route('dashboard') }}">Go to Dashboard</a>        
                            </li>
                            <li class="shopping-cart {!! Menu::isActiveRoute('cart.index') !!}"><a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i>My Cart</a>
                                <!-- <div class="shopping-cart-box">
                                    <ul class="shopping-cart-items">
                                        <li>
                                            <a href="product-shop-sidebar.html">
                                                <img src="img/amaze_70x70.jpg" alt="Image Alternative text" title="AMaze" />
                                                <h5>New Glass Collection</h5><span class="shopping-cart-item-price">$150</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product-shop-sidebar.html">
                                                <img src="img/gamer_chick_70x70.jpg" alt="Image Alternative text" title="Gamer Chick" />
                                                <h5>Playstation Accessories</h5><span class="shopping-cart-item-price">$170</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="list-inline text-center">
                                        <li><a href="page-cart.html"><i class="fa fa-shopping-cart"></i> View Cart</a>
                                        </li>
                                        <li><a href="page-checkout.html"><i class="fa fa-check-square"></i> Checkout</a>
                                        </li>
                                    </ul>
                                </div> -->
                            </li>
                            @if(!Auth::check())
                            <li><a  href="{{ route('login') }}" data-effect="mfp-move-from-top"><i class="fa fa-sign-in"></i>Sign in</a>
                            </li>
                            <li><a  href="{{ route('user.create') }}" data-effect="mfp-move-from-top"><i class="fa fa-edit"></i>Sign up</a>
                            </li>
                            @else
                            <li class="{!! Menu::isActiveRoute('profile') !!}"><a  href="{{ route('profile') }}" data-effect="mfp-move-from-top"><i class="fa fa-sign-in"></i>My Profile</a>
                            </li>
                            <li><a  href="{{ route('logout') }}" data-effect="mfp-move-from-top"><i class="fa fa-edit"></i>Logout</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </header>