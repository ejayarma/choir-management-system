<x-web-layout>
    <x-web.section-one class="section page-title bg-image context-dark"
        style="background-image: url(images/background/bg-5-1920x496.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xl-8">
                    <h2 class="page-title-text">Contact us</h2>
                </div>
            </div>
        </div>
    </x-web.section-one>
    <!-- Contact info-->
    <section class="section-md bg-100">
        <div class="container">
            <div class="row row-30 row-xl-55 justify-content-between align-items-center">
                <div class="col-sm-5 col-md-4">
                    <!-- Blurb info-->
                    <div class="blurb blurb-info">
                        <div class="blurb-header">
                            <div class="blurb-icon linearicons-map2"></div>
                            <div class="blurb-title h4">Address</div>
                        </div>
                        <div class="blurb-embed">
                            <h5>355 S Grand Ave <br>Los Angeles, CA 90071</h5>
                        </div>
                    </div>
                    <!-- Blurb info-->
                    <div class="blurb blurb-info text-dark">
                        <div class="blurb-header">
                            <div class="blurb-icon linearicons-smartphone"></div>
                            <div class="blurb-title h4">Get in Touch</div>
                        </div>
                        <div class="blurb-embed"><a class="link link-inherit big2" href="tel:#">800.567.1234</a>
                        </div>
                    </div>
                    <!-- Blurb info-->
                    <div class="blurb blurb-info">
                        <div class="blurb-header">
                            <div class="blurb-icon linearicons-envelope-open"></div>
                            <div class="blurb-title h4">E-Mail</div>
                        </div>
                        <div class="blurb-embed">
                            <h5><a href="mailto:#">info@demolink.org</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-8">
                    <!-- Google map-->
                    <div class="google-map"
                        data-settings='{"center":{"lat":40.715847,"lng":-73.999925},"zoom":12,"markers":{"park":{"position":"Columbus Park, Baxter Street, New York, United State","html":"Columbus park"}},"styles":[{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]}'>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact form-->
    <section class="section-md bg-100">
        <div class="container">
            <h3 class="h3-big">Get in Touch</h3>
            <form class="rd-mailform rd-form" data-form-output="form-consultation" data-form-type="contact"
                method="post" action="components/rd-mailform/rd-mailform.php">
                <div class="row row-25 row-gutters-24">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Your Name*"
                                data-constraints="@Required">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input class="form-control" type="text" name="phone" placeholder="Phone*"
                                data-constraints="@PhoneNumber @Required">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="E-mail*"
                                data-constraints="@Email @Required">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" name="comment" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button class="btn" type="submit">Make an appointment</button>
                    </div>
                </div>
            </form>
            <div class="form-output snackbar snackbar-primary" id="form-consultation"></div>
        </div>
    </section>
</x-web-layout>
