<!--RD Navbar-->
<header class="section rd-navbar-wrap">
    <nav class="rd-navbar rd-navbar-default">
        <div class="navbar-container">
            <div class="navbar-cell">
                <div class="navbar-panel">
                    <button class="navbar-switch linearicons-menu"
                        data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","isolate":"[data-multi-switch]"}'></button>
                    <div class="navbar-logo"><a class="navbar-logo-link" href="{{ route('pages.index') }}"><img
                                class="navbar-logo-default" src="{{ asset('images/logo-inverse-296x104.png') }}"
                                alt="Calm" width="148" height="52" /><img class="navbar-logo-inverse"
                                src=" {{ asset('images/logo-inverse-296x104.png') }}" alt="Calm" width="148"
                                height="52" /></a></div>
                </div>
            </div>
            <div class="navbar-cell navbar-spacer"></div>
            <div class="navbar-cell">
                <ul class="navbar-navigation rd-navbar-nav">
                    <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link"
                            href="{{ route('pages.about-us') }}">About</a>
                        <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                            <li class="navbar-navigation-back">
                                <button class="navbar-navigation-back-btn">Back</button>
                            </li>
                            <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                    href="{{ route('pages.team-member') }}">Team member</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link"
                            href="{{ route('pages.donations') }}">Donations</a>
                        <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                            <li class="navbar-navigation-back">
                                <button class="navbar-navigation-back-btn">Back</button>
                            </li>
                            <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                    href="{{ route('pages.single-donation') }}">Single Donation</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-navigation-root-item navbar-navigation-item-hidden"><a
                            class="navbar-navigation-root-link" href="#">Pages</a>
                        <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                            <li class="navbar-navigation-back">
                                <button class="navbar-navigation-back-btn">Back</button>
                            </li>
                            <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                    href="#">Blog</a>
                                <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                    <li class="navbar-navigation-back">
                                        <button class="navbar-navigation-back-btn">Back</button>
                                    </li>
                                    <li class="navbar-navigation-dropdown-item"><a
                                            class="navbar-navigation-dropdown-link"
                                            href="{{ route('pages.classic-blog') }}">Classic
                                            blog</a>
                                    </li>
                                    <li class="navbar-navigation-dropdown-item"><a
                                            class="navbar-navigation-dropdown-link"
                                            href="{{ route('pages.blog-post') }}">Blog post</a>
                                    </li>
                                    <li class="navbar-navigation-dropdown-item"><a
                                            class="navbar-navigation-dropdown-link"
                                            href="{{ route('pages.blog-grid') }}">Blog grid</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                    href="#">Counseling</a>
                                <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                    <li class="navbar-navigation-back">
                                        <button class="navbar-navigation-back-btn">Back</button>
                                    </li>
                                    <li class="navbar-navigation-dropdown-item"><a
                                            class="navbar-navigation-dropdown-link"
                                            href="{{ route('pages.seek-help') }}">Seek help</a>
                                    </li>
                                    <li class="navbar-navigation-dropdown-item"><a
                                            class="navbar-navigation-dropdown-link"
                                            href="{{ route('pages.counseling') }}">Counseling Materials</a>
                                    </li>
                                </ul>
                            </li>
                            {{-- <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                    href="404.html">404</a>
                            </li> --}}
                            <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                    href="{{ route('pages.typography') }}">Typography</a>
                            </li>
                            <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                    href="{{ route('pages.coming-soon') }}">Coming soon</a>
                            </li>
                            <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                    href="{{ route('pages.search-results') }}">Search results</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-navigation-root-item navbar-navigation-item-hidden"><a
                            class="navbar-navigation-root-link" href="{{ route('pages.songs') }}">Songs</a>
                        <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                            <li class="navbar-navigation-back">
                                <button class="navbar-navigation-back-btn">Back</button>
                            </li>
                            <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                    href="{{ route('pages.song-categories') }}">Song Categories</a>
                            </li>
                            <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                    href="{{ route('pages.single-song') }}">Single Song</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-navigation-root-item navbar-navigation-item-hidden"><a
                            class="navbar-navigation-root-link" href="{{ route('pages.shop') }}">Shop</a>
                        <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                            <li class="navbar-navigation-back">
                                <button class="navbar-navigation-back-btn">Back</button>
                            </li>
                            <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                    href="{{ route('pages.single-product') }}">Single product</a>
                            </li>
                            <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                    href="{{ route('pages.checkout') }}">Checkout</a>
                            </li>
                            <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link"
                                    href="{{ route('pages.cart') }}">Cart</a>
                            </li>
                        </ul>
                    </li>
                    <li class="navbar-navigation-root-item active navbar-navigation-item-hidden"><a
                            class="navbar-navigation-root-link" href="{{ route('pages.contact-us') }}">Contact us</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-cell">
                <div class="navbar-subpanel">
                    <div class="navbar-subpanel-item">
                        <button class="navbar-button navbar-list-button mdi-dots-vertical"
                            data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","class":"navbar-list-active","isolate":"[data-multi-switch]"}'></button>
                        <div class="navbar-list">
                            <div class="navbar-list-icon mdi-cellphone"></div><a
                                class="link link-inherit navbar-list-link" href="tel:#">800.567.1234</a>
                        </div>
                    </div>
                    <div class="navbar-subpanel-item">
                        <button class="navbar-button navbar-cart-button mdi-cart"
                            data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","class":"navbar-cart-active","isolate":"[data-multi-switch]"}'><span
                                class="navbar-button-badge">1</span></button>
                        <div class="navbar-aside navbar-cart">
                            <div class="navbar-cart-item">
                                <div class="navbar-cart-item-left"><a class="thumbnail-small"
                                        href="single-product.html"><img src="images/product/product-1-72x91.jpg" alt=""
                                            width="72" height="91" /></a></div>
                                <div class="navbar-cart-item-body"><a class="navbar-cart-item-heading"
                                        href="single-product.html">Spring Harvest 2020 Songbook: Unleashed</a>
                                    <div class="navbar-cart-item-price d-flex group-10 justify-content-between">
                                        <div>2 x <span class="navbar-cart-item-price-value">$35.00</span>
                                        </div>
                                        <button class="navbar-cart-remove mdi-delete"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-cart-total">Subtotal: $70.00</div><a class="btn btn-sm navbar-cart-btn"
                                href="checkout.html">Checkout</a>
                        </div>
                    </div>
                    <div class="navbar-subpanel-item">
                        <!--include _search--><span class="navbar-contact-text">Contacts</span>
                        <button class="navbar-button navbar-contact-btn navbar-contact-btn-rounded linearicons-menu"
                            data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","class":"navbar-contact-active","isolate":"[data-multi-switch]:not(.rd-navbar-contact-btn)"}'></button>
                        <div class="navbar-contact">
                            <ul class="list list-sm">
                                <li class="list-item">
                                    <h4 class="text-uppercase text-primary">Free Consultation</h4>
                                </li>
                                <li class="list-item"><a class="link link-inherit-primary big2"
                                        href="tel:#">800.567.1234</a></li>
                                <li class="list-item"><a class="link link-inherit-primary"
                                        href="mailto:#">info@demolink.org</a></li>
                                <li class="list-item"><span>355 S Grand Ave, <br />Los Angeles, CA 90071</span></li>
                            </ul>
                            <ul class="list list-divided">
                                <li class="list-item">
                                    <!-- Blurb link-->
                                    <div class="blurb blurb-link">
                                        <div class="blurb-icon linearicons-credit-card"></div>
                                        <h4 class="blurb-title"><a href="{{ route('pages.donations') }}">Make a
                                                Donation</a></h4>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <!-- Blurb link-->
                                    <div class="blurb blurb-link">
                                        <div class="blurb-icon linearicons-bookmark"></div>
                                        <h4 class="blurb-title"><a href="{{ route('pages.songs')}}">Songs</a></h4>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <!-- Blurb link-->
                                    <div class="blurb blurb-link">
                                        <div class="blurb-icon linearicons-mic2"></div>
                                        <h4 class="blurb-title"><a href="{{ route('pages.events')}}">Events</a></h4>
                                        <!-- TODO-->
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>