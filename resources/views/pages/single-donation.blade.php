<x-web-layout>
    <x-web.section-one class="section page-title bg-image context-dark"
        style="background-image: url(images/background/bg-6-1920x496.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xl-8">
                    <h2 class="page-title-text">Providing African &amp; Indian Regions with Fresh Food</h2>
                </div>
            </div>
        </div>
        </x-web-section-one>
        <section class="section-md bg-100">
            <div class="container">
                <div class="row row-50 justify-content-between">
                    <div class="col-md-6">
                        <h3 class="h3-big">Select Your Donation Method</h3>
                        <div class="mt-4">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input" id="customRadioInline1" type="radio"
                                    name="customRadioInline1">
                                <label class="custom-control-label" for="customRadioInline1">Test Donation</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input" id="customRadioInline2" type="radio"
                                    name="customRadioInline1">
                                <label class="custom-control-label" for="customRadioInline2">Offline Donation</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input class="custom-control-input" id="customRadioInline3" type="radio"
                                    name="customRadioInline1">
                                <label class="custom-control-label" for="customRadioInline3">PayPal</label>
                            </div>
                        </div>
                        <div class="group-25 mt-4 d-flex align-items-start flex-column flex-sm-row"><img
                                class="rounded-circle" src="images/person/person-6-125x125.jpg" alt="" width="125"
                                height="125" />
                            <div>
                                <p>Our church incorporates God’s family into our fellowship. We provide a warm,
                                    authentic community, welcoming new believers into the body of Christ through
                                    baptism.</p>
                                <h4 class="text-primary mt-3">Jane Peters</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <form class="rd-mailform rd-form" data-form-output="form-consultation" data-form-type="contact"
                            method="post" action="components/rd-mailform/rd-mailform.php">
                            <div class="row row-15">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">$</div>
                                            </div>
                                            <input class="form-control" type="text" name="price" placeholder="200.00"
                                                data-constraints="@Numeric">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="name" placeholder="Your Name*"
                                            data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="lastName" placeholder="Last Name*"
                                            data-constraints="@Required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" placeholder="E-mail*"
                                            data-constraints="@Email @Required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn" type="submit" style="width: 100%">Make a Donation</button>
                                </div>
                            </div>
                        </form>
                        <div class="form-output snackbar snackbar-primary" id="form-consultation"></div>
                    </div>
                </div>
            </div>
        </section>
</x-web-layout>
