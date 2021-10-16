<x-dashboard-layout>
    <section class="section-md bg-transparent">
        <div class="container">
            <h3 class="h3-big text-center">Checkout</h3>
            <div class="row row-40 row-xl-55 justify-content-between row-offset-md">
                <div class="col-md-6">
                    <h3>Billing details</h3>
                    <div class="rd-form">
                        <div class="row row-15 row-gutters-15">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="first-name" placeholder="First Name*"
                                        data-constraints="@Required">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="last-name" placeholder="Last Name*"
                                        data-constraints="@Required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="company-name"
                                        placeholder="Company Name (optional)">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="select-wrap position-relative">
                                        <select class="select2" id="input-sex" name="sex"
                                            data-select2-options='{"placeholder":"Country*"}'
                                            data-constraints="@Required">
                                            <option label="placeholder"></option>
                                            <option>USA</option>
                                            <option>United Kingdom</option>
                                            <option>Germany</option>
                                            <option>Spain</option>
                                            <option>France</option>
                                            <option>Germany</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="street-address"
                                        placeholder="Street Address*" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="city" placeholder="Town / City*"
                                        data-constraints="@Required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="country" placeholder="State / County*"
                                        data-constraints="@Required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="postcode"
                                        placeholder="Postcode / ZIP*" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="phone" placeholder="Phone*"
                                        data-constraints="@PhoneNumber @Required">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Your E-mail*"
                                        data-constraints="@Email @Required">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <h3>Do you have a promotional code?</h3>
                    <div class="rd-form">
                        <div class="row row-15 row-gutters-15">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="promocode"
                                        placeholder="Enter Promocode">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button class="btn" type="submit">Apply coupon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <h3>Your order</h3>
                    <table class="table table-filled table-align-1">
                        <tr class="text-small">
                            <td>Product</td>
                            <td>price</td>
                        </tr>
                        <tr>
                            <td>Spring Harvest 2020 Songbook: Unleashed <span class="text-primary">x 3</span></td>
                            <td>$35.00</td>
                        </tr>
                        <tr>
                            <td>Ten Girls Who Changed the World</td>
                            <td>$35.00</td>
                        </tr>
                        <tr>
                            <td class="text-small">Subtotal</td>
                            <td>$140.00</td>
                        </tr>
                        <tr>
                            <td class="text-small">Total</td>
                            <td>$140.00</td>
                        </tr>
                    </table>
                    <button class="btn">place order</button>
                </div>
            </div>
        </div>
    </section>
</x-dashboard-layout>
