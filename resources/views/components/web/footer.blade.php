<!-- Footer contact-->
<footer class="footer-contact context-dark bg-900 text-center">
    <div class="container">
        <div class="footer-row">
            <div class="footer-logo"><a class="logo-link" href="{{ route('pages.index') }}"><img
                        src="{{ asset('images/logo-inverse-1-296x104.png') }}" alt="" width="148" height="52" /></a>
            </div>
        </div>
        <div class="footer-row">
            <ul class="footer-menu">
                <li><a href="{{ route('pages.about-us') }}">About</a></li>
                <li><a href="{{ route('pages.donations') }}">Donations</a></li>
                <li><a href="{{ route('pages.events') }}">Events</a></li>
                <li><a href="{{ route('pages.sermons') }}">Sermons</a></li>
                <li><a href="{{ route('pages.contact-us') }}">Contact us</a></li>
            </ul>
        </div>
        <div class="footer-row">
            <h4>Call us 24\7</h4><a class="link link-large" href="tel:#">800.567.1234</a>
            <ul class="social social-bordered footer-social">
                <li><a class="social-icon icon icon-md mdi-youtube-play" href="#"></a></li>
                <li><a class="social-icon icon icon-md mdi-linkedin" href="#"></a></li>
                <li><a class="social-icon icon icon-md mdi-twitter" href="#"></a></li>
            </ul>
        </div>
        <div class="footer-row">
            <div class="h6">355 S Grand Ave, Los Angeles, CA 90071</div>
            <!-- Copyright-->
            <p class="rights"><span>&copy; 2021&nbsp;</span><span>Calm</span><span>. All rights
                    reserved.&nbsp;</span><a class="link link-inherit rights-link"
                    href="{{ route('pages.privacy-policy') }}">Privacy
                    Policy</a></p>
        </div>
    </div>
</footer>
<!-- coded by barber-->
