<x-web-layout>
    <x-web.section-one class="section page-title bg-image context-dark"
        style="background-image: url(images/background/bg-2-1920x496.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xl-8">
                    <h2 class="page-title-text">Single product</h2>
                </div>
            </div>
        </div>
    </x-web.section-one>
    <!-- Single product-->
    <section class="section-md bg-transparent">
        <div class="container">
            <div class="row row-25 row-xl-55 justify-content-between">
                <div class="col-sm-6 col-lg-5"><img class="shadow-sm image image-sm"
                        src="images/product/product-6-510x663.jpg" alt="" width="510" height="663" />
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="product-overview">
                        <h3 class="h3-big">Spring Harvest 2020 Songbook: Unleashed</h3>
                        <div class="product-overview-price"><span
                                class="product-overview-price-old big">$60.00</span><span
                                class="product-overview-price-new h3">$35.99</span></div>
                        <p class="big">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam sed do.</p>
                        <p class="big">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam sed do. Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.</p>
                        <dl class="term-list term-list-inline text-small">
                            <dt>Sku:</dt>
                            <dd>35157</dd>
                        </dl>
                        <dl class="term-list term-list-inline text-small">
                            <dt>Categories:</dt>
                            <dd>Christian Books</dd>
                        </dl>
                        <div class="product-overview-filter-form">
                            <div class="row row-5 row-gutters-5">
                                <div class="col-6 col-sm-4 col-md-5 col-xl-3">
                                    <div class="form-group">
                                        <input class="form-control input-spinner" data-spinner type="number"
                                            name="spinner" value="1">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-5 col-xl-3">
                                    <button class="btn btn-block" type="submit">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product overview-->
    <section class="section-md bg-transparent">
        <div class="container">
            <div class="tab tab-classic">
                <ul class="nav nav-classic tab-header" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#navClassic1-1" role="tab"
                            aria-selected="true">Description</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#navClassic1-2" role="tab"
                            aria-selected="false">Reviews (0)</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navClassic1-1" role="tabpanel">
                        <h3>Product Overview</h3>
                        <p class="big">Ut enim ad minim veniam sed do eiusmod tempor .Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            veniam sed do eiusmod tempor.</p>
                        <p class="big">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam sed do. Lorem ipsum
                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam sed do eiusmod tempor. Sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam sed do eiusmod tempor.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="navClassic1-2" role="tabpanel">
                        <h3>Reviews</h3>
                        <h5>There are no reviews yet.</h5>
                        <h5>Be the first to review “Spring Harvest 2020 Songbook: Unleashed”</h5>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <div class="rating-container"><span class="rating-title">Your rating:</span>
                            <div class="rating"><span class="mdi-star-outline"></span><span
                                    class="mdi-star-outline"></span><span class="mdi-star-outline"></span><span
                                    class="mdi-star-outline"></span><span class="mdi-star-outline"></span>
                            </div>
                        </div>
                        <form class="rd-form">
                            <div class="row row-15 row-gutters-15">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="name" placeholder="Your Name*"
                                            data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" placeholder="Your E-mail*"
                                            data-constraints="@Email @Required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="comment" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn" type="submit">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products grid-->
    <section class="section-md bg-transparent">
        <div class="container">
            <h3>Related products</h3>
            <div class="row row-40 row-xl-55">
                <div class="col-6 col-lg-3">
                    <!-- Product-->
                    <div class="product product-simple"><a class="product-media" href="single-product.html"><img
                                src="images/product/product-1-270x358.jpg" alt="" width="270" height="358" /></a>
                        <h4 class="product-title"><a href="single-product.html">The Usborne Children's Bible</a></h4>
                        <div class="h4 product-price">$35.00</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <!-- Product-->
                    <div class="product product-simple"><a class="product-media" href="single-product.html"><img
                                src="images/product/product-2-270x358.jpg" alt="" width="270" height="358" /></a>
                        <h4 class="product-title"><a href="single-product.html">The Ruthless Elimination of Hurry</a>
                        </h4>
                        <div class="h4 product-price">$35.00</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <!-- Product-->
                    <div class="product product-simple"><a class="product-media" href="single-product.html"><img
                                src="images/product/product-4-270x358.jpg" alt="" width="270" height="358" /></a>
                        <h4 class="product-title"><a href="single-product.html">Ten Girls Who Changed the World</a></h4>
                        <div class="h4 product-price">$35.00</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <!-- Product-->
                    <div class="product product-simple"><a class="product-media" href="single-product.html"><img
                                src="images/product/product-3-270x358.jpg" alt="" width="270" height="358" /></a>
                        <h4 class="product-title"><a href="single-product.html">KJV Pocket Size New Testament And
                                Psalms</a></h4>
                        <div class="h4 product-price">$35.00</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-web-layout>
