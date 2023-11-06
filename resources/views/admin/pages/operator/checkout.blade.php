<x-admin-app-layout>

    @push('title')
    <title>{{ config('app.name') }} - Checkout</title>
    @endpush

    <div class="checkout">
        <div class="card shadow-none border">
            <div class="card-body p-4">
                <div class="wizard-content">
                    <form action="#" class="tab-wizard wizard-circle">
                        <!-- Step 1 -->
                        <h6>Cart</h6>
                        <section style="overflow-x: auto;">
                            <div class="table-responsive" style="overflow-x: auto">
                                <table class="table align-middle text-nowrap mb-0">
                                    <thead class="fs-2">
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th class="text-end">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border-bottom-0">
                                                <div class="d-flex align-items-center gap-3">
                                                    <img src="{{ asset('dist/images/products/s1.jpg') }}" alt="" class="img-fluid rounded" width="80">
                                                    <div>
                                                        <h6 class="fw-semibold fs-4 mb-0">Pepperoni Pizza</h6>
                                                        <p class="mb-0">Pizza</p>
                                                        <a href="javascript:void(0)" class="text-danger fs-4"><i class="ti ti-trash"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-bottom-0">
                                                <div class="input-group input-group-sm rounded">
                                                    <button class="btn minus min-width-40 py-0 border-end border-success border-end-0 text-success" type="button" id="add1"><i class="ti ti-minus"></i></button>
                                                    <input type="text" class="min-width-40 flex-grow-0 border border-success text-success fs-3 fw-semibold form-control text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add1" value="1">
                                                    <button class="btn min-width-40 py-0 border border-success border-start-0 text-success add" type="button" id="addo2">
                                                        <i class="ti ti-plus"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            @php
                                                $x = rand(20, 50);
                                            @endphp
                                            <td class="text-end border-bottom-0">
                                                <h6 class="fs-4 fw-semibold mb-0">${{ $x }}</h6>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="order-summary border rounded p-4 my-4">
                                <div class="p-3">
                                    <h5 class="fs-5 fw-semibold mb-4">Order Summary</h5>
                                    <div class="d-flex justify-content-between mb-4">
                                        <p class="mb-0 fs-4">Sub Total</p>
                                        <h6 class="mb-0 fs-4 fw-semibold">${{ $x }}</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mb-4">
                                        <p class="mb-0 fs-4">Discount 0%</p>
                                        <h6 class="mb-0 fs-4 fw-semibold text-danger"> 0</h6>
                                    </div>
                                    <div class="d-flex justify-content-between mb-4">
                                        <p class="mb-0 fs-4">Shipping</p>
                                        <h6 class="mb-0 fs-4 fw-semibold">Free</h6>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="mb-0 fs-4 fw-semibold">Total</h6>
                                        <h6 class="mb-0 fs-5 fw-semibold">${{ $x }}</h6>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                        <!-- Step 2 -->
                        <h6>Billing & address</h6>
                        <section style="overflow-x: auto;">
                            <div class="billing-address-content">
                                <div class="card shadow-none border">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <x-admin.forms.form-group label="Phone number" id="phone" />
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <x-admin.forms.form-group label="Customer Name" id="name" />
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <x-admin.forms.form-group-select label="City" id="name">
                                                    <option value="cairo">Cairo</option>
                                                    <option value="giza">Giza</option>
                                                </x-admin.forms.form-group-select>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-12">
                                                <x-admin.forms.form-group-textarea label="Address" id="name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-summary border rounded p-4 my-4">
                                    <div class="p-3">
                                        <h5 class="fs-5 fw-semibold mb-4">Order Summary</h5>
                                        <div class="d-flex justify-content-between mb-4">
                                            <p class="mb-0 fs-4">Sub Total</p>
                                            <h6 class="mb-0 fs-4 fw-semibold">${{ $x }}</h6>
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <p class="mb-0 fs-4">Discount 0%</p>
                                            <h6 class="mb-0 fs-4 fw-semibold text-danger"> 0</h6>
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <p class="mb-0 fs-4">Shipping</p>
                                            <h6 class="mb-0 fs-4 fw-semibold">Free</h6>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <h6 class="mb-0 fs-4 fw-semibold">Total</h6>
                                            <h6 class="mb-0 fs-5 fw-semibold">${{ $x }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="payment-method-list payment-method">
                                <div class="delivery-option btn-group-active  card shadow-none border">
                                    <div class="card-body p-4">
                                        <h6 class="mb-3 fw-semibold fs-4">Delivery Option</h6>
                                        <div class="btn-group row w-100" role="group"
                                            aria-label="Basic radio toggle button group">
                                            <div class="position-relative col-lg-6">
                                                <input type="radio"
                                                    class="btn-check z-1 top-50 start-0 ms-4 round-16"
                                                    name="deliveryOpt1" id="btnradio1" autocomplete="off" checked>
                                                <label class="btn btn-outline-primary mb-0 p-3 rounded ps-5 w-100"
                                                    for="btnradio1">
                                                    <div class="text-start ps-2">
                                                        <h6 class="fs-4 fw-semibold mb-0">Free delivery</h6>
                                                        <p class="mb-0 text-muted">Delivered on Firday, May 10</p>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="position-relative col-lg-6">
                                                <input type="radio"
                                                    class="btn-check z-1 top-50 start-0 ms-4 round-16"
                                                    name="deliveryOpt1" id="btnradio2" autocomplete="off">
                                                <label class="btn btn-outline-primary mb-0 p-3 rounded ps-5 w-100"
                                                    for="btnradio2">
                                                    <div class="text-start ps-2">
                                                        <h6 class="fs-4 fw-semibold mb-0">Fast delivery ($2,00)</h6>
                                                        <p class="mb-0 text-muted">Delivered on Wednesday, May 8</p>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-option btn-group-active  card shadow-none border">
                                    <div class="card-body p-4">
                                        <h6 class="mb-3 fw-semibold fs-4">Payment Option</h6>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="btn-group row" role="group"
                                                    aria-label="Basic radio toggle button group">
                                                    <div class="position-relative col-12 mb-3">
                                                        <input type="radio"
                                                            class="btn-check z-1 top-50 start-0 ms-4 round-16"
                                                            name="paymentType1" id="btnradio3" autocomplete="off"
                                                            checked>
                                                        <label
                                                            class="btn btn-outline-primary mb-0 p-3 rounded ps-5 w-100"
                                                            for="btnradio3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="text-start ps-2">
                                                                    <h6 class="fs-4 fw-semibold mb-0">Pay with Paypal </h6>
                                                                    <p class="mb-0 text-muted">You will be redirected to PayPal website to complete your purchase securely.</p>
                                                                </div>
                                                                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/paypal.svg"
                                                                    alt="" class="img-fluid ms-auto">
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="position-relative col-12 mb-3">
                                                        <input type="radio"
                                                            class="btn-check z-1 top-50 start-0 ms-4 round-16"
                                                            name="paymentType1" id="btnradio4" autocomplete="off">
                                                        <label
                                                            class="btn btn-outline-primary mb-0 p-3 rounded ps-5 w-100"
                                                            for="btnradio4">
                                                            <div class="d-flex align-items-center">
                                                                <div class="text-start ps-2">
                                                                    <h6 class="fs-4 fw-semibold mb-0">Credit / Debit Card</h6>
                                                                    <p class="mb-0 text-muted">We support Mastercard, Visa, Discover and Stripe.</p>
                                                                </div>
                                                                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/mastercard.svg" alt="" class="img-fluid ms-auto">
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="position-relative col-12">
                                                        <input type="radio"
                                                            class="btn-check z-1 top-50 start-0 ms-4 round-16"
                                                            name="paymentType1" id="btnradio5" autocomplete="off">
                                                        <label
                                                            class="btn btn-outline-primary mb-0 p-3 rounded ps-5 w-100"
                                                            for="btnradio5">
                                                            <div class="text-start ps-2">
                                                                <h6 class="fs-4 fw-semibold mb-0">Cash on Delivery</h6>
                                                                <p class="mb-0 text-muted">Pay with cash when your
                                                                    order is delivered.</p>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/products/payment.svg"
                                                    alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-summary border rounded p-4 my-4">
                                    <div class="p-3">
                                        <h5 class="fs-5 fw-semibold mb-4">Order Summary</h5>
                                        <div class="d-flex justify-content-between mb-4">
                                            <p class="mb-0 fs-4">Sub Total</p>
                                            <h6 class="mb-0 fs-4 fw-semibold">${{ $x }}</h6>
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <p class="mb-0 fs-4">Discount 0%</p>
                                            <h6 class="mb-0 fs-4 fw-semibold text-danger"> 0</h6>
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <p class="mb-0 fs-4">Shipping</p>
                                            <h6 class="mb-0 fs-4 fw-semibold">Free</h6>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <h6 class="mb-0 fs-4 fw-semibold">Total</h6>
                                            <h6 class="mb-0 fs-5 fw-semibold">${{ $x }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Step 3 -->
                        <h6>Finish Order</h6>
                        <section class="payment-method text-center" style="overflow-x: auto;">
                            <h5 class="fw-semibold fs-5">Order has been created!</h5>
                            <h6 class="fw-semibold text-primary mb-7">Your order id: 3fa7-69e1-79b4-dbe0d35f5f5d</h6>
                            <img src="../../dist/images/products/payment-complete.gif" alt="" class="img-fluid mb-4" width="300">
                        </section>
                    </form>
                </div>
                <!-- <div class="text-center my-4">
               <img src="../../dist/images/products/empty-shopping-bag.gif" alt="" class="img-fluid" width="200">
               <h5 class="mb-3 fw-semibold fs-5">Cart is Empty</h5>
               <a href="./shop.html" class="btn btn-primary">Go back to Shopping</a>
             </div> -->
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="{{ asset('dist/libs/jquery-steps/build/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('dist/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('dist/js/forms/form-wizard.js') }}"></script>
    @endpush
</x-admin-app-layout>
