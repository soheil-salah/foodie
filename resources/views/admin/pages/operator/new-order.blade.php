<x-admin-app-layout>

    @push('title')
        <title>{{ config('app.name') }} - Place new Order</title>
    @endpush

    <div class="card position-relative overflow-hidden">
        <div class="shop-part d-flex w-100">
            <div class="shop-filters flex-shrink-0 border-end d-none d-lg-block">
                <ul class="list-group pt-2 border-bottom rounded-0">
                    <h6 class="my-3 mx-4 fw-semibold">Sections</h6>
                    <li class="list-group-item border-0 p-0 mx-4 mb-2">
                        <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                            href="javascript:void(0)"><i class="ti ti-circles fs-5"></i>All
                        </a>
                    </li>
                    <li class="list-group-item border-0 p-0 mx-4 mb-2">
                        <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                            href="javascript:void(0)"><i class="ti ti-tools-kitchen fs-5"></i>
                            Burger
                        </a>
                    </li>
                    <li class="list-group-item border-0 p-0 mx-4 mb-2">
                        <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                            href="javascript:void(0)"><i class="ti ti-tools-kitchen fs-5"></i>
                            Pizza
                        </a>
                    </li>
                    <li class="list-group-item border-0 p-0 mx-4 mb-2">
                        <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                            href="javascript:void(0)"><i class="ti ti-tools-kitchen fs-5"></i>
                            Pasta
                        </a>
                    </li>
                    <li class="list-group-item border-0 p-0 mx-4 mb-2">
                        <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                            href="javascript:void(0)"><i class="ti ti-tools-kitchen fs-5"></i>
                            Crepe
                        </a>
                    </li>
                </ul>
                <ul class="list-group pt-2 border-bottom rounded-0">
                    <h6 class="my-3 mx-4 fw-semibold">Categories</h6>
                    <li class="list-group-item border-0 p-0 mx-4 mb-2">
                        <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                            href="javascript:void(0)"><i class="ti ti-tools-kitchen-2 fs-5"></i>
                            Pan
                        </a>
                    </li>
                    <li class="list-group-item border-0 p-0 mx-4 mb-2">
                        <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                            href="javascript:void(0)"><i class="ti ti-tools-kitchen-2 fs-5"></i>
                            Stuffed Crust
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body p-4 pb-0">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <a class="btn btn-primary d-lg-none d-flex" data-bs-toggle="offcanvas" href="#offcanvasExample"
                        role="button" aria-controls="offcanvasExample">
                        <i class="ti ti-menu-2 fs-6"></i>
                    </a>
                    <h5 class="fs-5 fw-semibold mb-0 d-none d-lg-block">Products</h5>
                    <form class="position-relative">
                        <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                            placeholder="Search Product">
                        <i
                            class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                    </form>
                </div>
                <div class="row">
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="col-sm-6 col-xl-4">
                            <div class="card hover-img overflow-hidden rounded-2">
                                <div class="position-relative">
                                    <a href="javascript:void(0)"><img
                                            src="{{ asset('dist/images/products/s' . $i . '.jpg') }}"
                                            class="card-img-top rounded-0" alt="..."></a>
                                    <a href="javascript:void(0)"
                                        class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                        data-bs-title="Add To Cart" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="ti ti-basket fs-4"></i>
                                    </a>
                                </div>
                                <div class="card-body pt-3 p-4">
                                    <h6 class="fw-semibold fs-4">
                                        @switch($i)
                                            @case(1)
                                                Pepperoni Pizza
                                            @break

                                            @case(2)
                                                New York Style Pizza
                                            @break

                                            @case(3)
                                                Margherita Pizza
                                            @break

                                            @case(4)
                                                BBQ Chicken Pizza
                                            @break

                                            @case(5)
                                                Cheese Pizza Pizza
                                            @break

                                            @case(6)
                                                Detroit Style Pizza
                                            @break
                                        @endswitch
                                    </h6>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="fw-semibold fs-4 mb-0">{{ rand(20, 50) }}$ <span
                                                class="ms-2 fw-normal text-muted fs-3"><del>$345</del></span></h6>
                                        <ul class="list-unstyled d-flex align-items-center mb-0">
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="me-1" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                            <li><a class="" href="javascript:void(0)"><i
                                                        class="ti ti-star text-warning"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Pepperoni Pizza</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-6">
                                            <x-admin.forms.form-group label="Qauntity" id="quantity" type="number"
                                                min="1" required />
                                        </div>
                                        <div class="col-6">
                                            <x-admin.forms.form-group-select label="Extra" id="extra"
                                                type="extra">
                                                <option value="pineapple">Pineapple</option>
                                                <option value="cheese">Cheese</option>
                                            </x-admin.forms.form-group-select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-body shop-filters w-100 p-0">
                    <ul class="list-group pt-2 border-bottom rounded-0">
                        <h6 class="my-3 mx-4 fw-semibold">Filter by Category</h6>
                        <li class="list-group-item border-0 p-0 mx-4 mb-2">
                            <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                href="javascript:void(0)"><i class="ti ti-circles fs-5"></i>All
                            </a>
                        </li>
                        <li class="list-group-item border-0 p-0 mx-4 mb-2">
                            <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                href="javascript:void(0)"><i class="ti ti-hanger fs-5"></i>Fashion
                            </a>
                        </li>
                        <li class="list-group-item border-0 p-0 mx-4 mb-2">
                            <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                href="javascript:void(0)"><i class="ti ti-notebook fs-5"></i></i>Books
                            </a>
                        </li>
                        <li class="list-group-item border-0 p-0 mx-4 mb-2">
                            <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                href="javascript:void(0)"><i class="ti ti-mood-smile fs-5"></i>Toys
                            </a>
                        </li>
                        <li class="list-group-item border-0 p-0 mx-4 mb-2">
                            <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                href="javascript:void(0)"><i class="ti ti-device-laptop fs-5"></i>Electronics
                            </a>
                        </li>
                    </ul>
                    <ul class="list-group pt-2 border-bottom rounded-0">
                        <h6 class="my-3 mx-4 fw-semibold">Sort By</h6>
                        <li class="list-group-item border-0 p-0 mx-4 mb-2">
                            <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                href="javascript:void(0)"><i class="ti ti-ad-2 fs-5"></i>Newest
                            </a>
                        </li>
                        <li class="list-group-item border-0 p-0 mx-4 mb-2">
                            <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                href="javascript:void(0)"><i class="ti ti-sort-ascending-2 fs-5"></i>Price: High-Low
                            </a>
                        </li>
                        <li class="list-group-item border-0 p-0 mx-4 mb-2">
                            <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                href="javascript:void(0)"><i class="ti ti-sort-descending-2 fs-5"></i></i>Price:
                                Low-High
                            </a>
                        </li>
                        <li class="list-group-item border-0 p-0 mx-4 mb-2">
                            <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                href="javascript:void(0)"><i class="ti ti-ad-2 fs-5"></i>Discounted
                            </a>
                        </li>
                    </ul>
                    <div class="by-gender border-bottom rounded-0">
                        <h6 class="mt-4 mb-3 mx-4 fw-semibold">By Gender</h6>
                        <div class="pb-4 px-4">
                            <div class="form-check py-2 mb-0">
                                <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                    id="exampleRadios10" value="option1" checked>
                                <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios10">
                                    All
                                </label>
                            </div>
                            <div class="form-check py-2 mb-0">
                                <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                    id="exampleRadios11" value="option1">
                                <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios11">
                                    Men
                                </label>
                            </div>
                            <div class="form-check py-2 mb-0">
                                <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                    id="exampleRadios12" value="option1">
                                <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios12">
                                    Women
                                </label>
                            </div>
                            <div class="form-check py-2 mb-0">
                                <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                    id="exampleRadios13" value="option1">
                                <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios13">
                                    Kids
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="by-pricing border-bottom rounded-0">
                        <h6 class="mt-4 mb-3 mx-4 fw-semibold">By Pricing</h6>
                        <div class="pb-4 px-4">
                            <div class="form-check py-2 mb-0">
                                <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                    id="exampleRadios14" value="option1" checked>
                                <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios14">
                                    All
                                </label>
                            </div>
                            <div class="form-check py-2 mb-0">
                                <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                    id="exampleRadios15" value="option1">
                                <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios15">
                                    0-50
                                </label>
                            </div>
                            <div class="form-check py-2 mb-0">
                                <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                    id="exampleRadios16" value="option1">
                                <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios16">
                                    50-100
                                </label>
                            </div>
                            <div class="form-check py-2 mb-0">
                                <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                    id="exampleRadios17" value="option1">
                                <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios17">
                                    100-200
                                </label>
                            </div>
                            <div class="form-check py-2 mb-0">
                                <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                    id="exampleRadios18" value="option1">
                                <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios18">
                                    Over 200
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="by-colors border-bottom rounded-0">
                        <h6 class="mt-4 mb-3 mx-4 fw-semibold">By Colors</h6>
                        <div class="pb-4 px-4">
                            <ul class="list-unstyled d-flex flex-wrap align-items-center gap-2 mb-0">
                                <li class="shop-color-list"><a
                                        class="shop-colors-item rounded-circle d-block shop-colors-1"
                                        href="javascript:void(0)"></a></li>
                                <li class="shop-color-list"><a
                                        class="shop-colors-item rounded-circle d-block shop-colors-2"
                                        href="javascript:void(0)"></a></li>
                                <li class="shop-color-list"><a
                                        class="shop-colors-item rounded-circle d-block shop-colors-3"
                                        href="javascript:void(0)"></a></li>
                                <li class="shop-color-list"><a
                                        class="shop-colors-item rounded-circle d-block shop-colors-4"
                                        href="javascript:void(0)"></a></li>
                                <li class="shop-color-list"><a
                                        class="shop-colors-item rounded-circle d-block shop-colors-5"
                                        href="javascript:void(0)"></a></li>
                                <li class="shop-color-list"><a
                                        class="shop-colors-item rounded-circle d-block shop-colors-6"
                                        href="javascript:void(0)"></a></li>
                                <li class="shop-color-list"><a
                                        class="shop-colors-item rounded-circle d-block shop-colors-7"
                                        href="javascript:void(0)"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-4">
                        <a href="javascript:void(0)" class="btn btn-primary w-100">Reset Filters</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Shopping Cart -->
    <div class="offcanvas offcanvas-end shopping-cart" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header py-4">
            <h5 class="offcanvas-title fs-5 fw-semibold" id="offcanvasRightLabel">Shopping Cart</h5>
            <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">1 new</span>
        </div>
        <div class="offcanvas-body h-100 px-4 pt-0" data-simplebar>
            <ul class="mb-0">
                @php
                    $x = rand(20, 50);
                @endphp
                {{-- <li class="pb-7">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('dist/images/products/s1.jpg') }}" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="" />
                        <div>
                            <h6 class="mb-1">Pepperoni Pizza</h6>
                            <p class="mb-0 text-muted fs-2">Pizza</p>
                            <div class="d-flex align-items-center justify-content-between mt-2">
                                
                                <h6 class="fs-2 fw-semibold mb-0 text-muted">{{ $x }}</h6>
                                <div class="input-group input-group-sm w-50">
                                    <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button" id="add1"> - </button>
                                    <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add1" value="1" />
                                    <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button" id="addo2"> + </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> --}}
                <li class="pb-7">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('dist/images/products/s1.jpg') }}" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="" />
                        <div>
                            <h6 class="mb-1">Pepperoni Pizza</h6>
                            <p class="mb-0 text-muted fs-2">Pizza</p>
                            <div class="d-flex align-items-center justify-content-between mt-2">
                                <h6 class="fs-2 fw-semibold mb-0 text-muted w-50">${{$x}}</h6>
                                <div class="input-group input-group-sm w-100">
                                    <button class="btn border-0 round-20 minus p-0 bg-light-success text-success "
                                        type="button" id="add1"> - </button>
                                    <input type="text"
                                        class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty"
                                        placeholder="" aria-label="Example text with button addon"
                                        aria-describedby="add1" value="1" />
                                    <button class="btn text-success bg-light-success  p-0 round-20 border-0 add"
                                        type="button" id="addo2"> + </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="align-bottom">
                <div class="d-flex align-items-center pb-7">
                    <span class="text-dark fs-3">Sub Total</span>
                    <div class="ms-auto">
                        <span class="text-dark fw-semibold fs-3">$ {{ $x }}</span>
                    </div>
                </div>
                <div class="d-flex align-items-center pb-7">
                    <span class="text-dark fs-3">Total</span>
                    <div class="ms-auto">
                        <span class="text-dark fw-semibold fs-3">$ {{ $x }}</span>
                    </div>
                </div>
                <a href="{{ route('admin.operator.checkout') }}" class="btn btn-outline-primary w-100">Create Order</a>
            </div>
        </div>
    </div>
</x-admin-app-layout>
