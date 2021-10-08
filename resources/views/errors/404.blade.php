<x-web-layout>
    <x-web.section-one class="section page-title bg-image context-dark"
        style="background-image: url(images/background/bg-5-1920x496.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xl-8">
                    <h2 class="page-title-text">404</h2>
                </div>
            </div>
        </div>
    </x-web.section-one>
    <!-- 404-->
    <section class="section-md bg-transparent">
        <div class="container">
            <div class="row row-30 row-lg-5 row-gutters-5">
                <div class="col-sm-6 col-lg-8">
                    <h3 class="h3-big">Oops! Page Not Found!</h3>
                    <p class="big">We are sorry but the page you were looking for couldn’t be found. It could have also
                        been renamed or deleted. Use our search below or go to homepage to find out more.</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="text-large">404</div>
                </div>
                <div class="col-sm-11">
                    <div class="rd-serch-container bg-100">
                        <div class="d-flex align-items-center group-20 flex-wrap justify-content-center">
                            <div class="rd-serch-container-item flex-grow-1">
                                <form action="search-results.html" method="GET"
                                    data-rd-search='{"output":".live-search-results","mode":"live","liveResults":3,"template":"<h6 class=\"search-title\"><a target=\"_top\" href=\"#{href}\" class=\"search-link\">#{title}</a></h6><p>...#{token}...</p>"}'>
                                    <div class="form-group form-group-icon">
                                        <input class="form-control" type="text" placeholder="Search..."
                                            autocomplete="off" name="s">
                                        <button class="form-group-icon-btn mdi-magnify"></button>
                                    </div>
                                </form>
                                <div class="live-search-results"></div>
                            </div>
                            <div class="rd-serch-container-item">
                                <div class="text-small">or</div>
                            </div>
                            <div class="rd-serch-container-item"><a class="btn" href="index.html">Go Back</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-web-layout>
