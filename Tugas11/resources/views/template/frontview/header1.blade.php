<header class="ltn__header-area ltn__header-4 ltn__header-6 ltn__header-transparent--- gradient-color-2---">
        <!-- ltn__header-top-area start -->

        <!-- ltn__header-top-area end -->
        
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
            <div class="container ">
                <div class="row">
                    <div class="col">
                        <div class="site-logo">
                            <a href="index.html"><img src="{{url('public/assets')}}/img/logo3.png" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col header-menu-column">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li class=""><a href="{{url('client/index')}}">Home</a>
                                            
                                        </li>
                                        
                                        <li class=""><a href="{{url('client/product')}}">Products</a>
                                        
                                        </li>
                                        
                                        <li><a href="{{url('client/contact')}}">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ltn__header-options">
                            <!-- ltn__currency-menu -->
                            
                            <!-- header-search-1 -->
                            <div class="header-search-wrap">
                                <div class="header-search-1">
                                    <div class="search-icon">
                                        <i class="icon-search for-search-show"></i>
                                        <i class="icon-cancel  for-search-close"></i>
                                    </div>
                                </div>
                                <div class="header-search-1-form">
                                    <form action="{{url('client/produk/filter2')}}" method="post">
                                    @csrf
                                        <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
                                        <button type="submit">
                                            <span><i class="icon-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- mini-cart -->
                            <div class="mini-cart-icon">
                                <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                    <i class="icon-shopping-cart"></i>
                                    <sup>2</sup>
                                </a>
                            </div>
                            <!-- user-menu -->
                            <div class="ltn__drop-menu user-menu">
                                <a class="nav-link" data-toggle="dropdown" href="#">
                                @if(Auth::check())
                                  {{request()->user()->nama}}
                                @else
                                  Silahkan Login
                                @endif
                                <img src="{{url('public/admin')}}/dist/img/ifan11.jpg" alt="Logo" Height="30" style="border-radius:50px ;">
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                  <a href="#" class="dropdown-item">
                                     <i class="fa fa-user"></i> Profile
                                  </a>
                                  <a href="#" class="dropdown-item">
                                     <i class="fa fa-cog"></i> Setting
                                  </a>
                                  <div class="dropdown-divider"></div>


                                  <a href="{{url('logout')}}" class="dropdown-item">
                                     <i class="fa fa-sign-out"></i>Logout
                                  </a>
                                    <!-- Message End -->
                                  </a>
                                  <div class="dropdown-divider"></div>
                            </div>
                            <!-- Mobile Menu Button -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
        <!-- ltn__header-middle-area end -->
    
    <!-- HEADER AREA END -->

    <!-- Utilize Cart Menu Start -->
    <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <span class="ltn__utilize-menu-title">Cart</span>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="mini-cart-product-area ltn__scrollbar">
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="{{url('public/assets')}}/img/product/1.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Beard Care Oil</a></h6>
                        <span class="mini-cart-quantity">1 x $65.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="{{url('public/assets')}}/img/product/15.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Beard Scissors</a></h6>
                        <span class="mini-cart-quantity">1 x $15.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="{{url('public/assets')}}/img/product/9.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Beard Shampoo</a></h6>
                        <span class="mini-cart-quantity">1 x $92.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="{{url('public/assets')}}/img/product/4.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Beard Growth Oil</a></h6>
                        <span class="mini-cart-quantity">1 x $68.00</span>
                    </div>
                </div>
            </div>
            <div class="mini-cart-footer">
                <div class="mini-cart-sub-total">
                    <h5>Subtotal: <span>$310.00</span></h5>
                </div>
                <div class="btn-wrapper">
                    <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                    <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                </div>
                <p>Free Shipping on All Orders Over $100!</p>
            </div>

        </div>
    </div>
    <!-- Utilize Cart Menu End -->

    <!-- Utilize Mobile Menu Start -->

    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>