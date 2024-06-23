@extends('layouts.client')
@section('content')
    @include('client.blocks.banner')
    <section class="container">
        <div class=" my-5 w-100 p-4" style="border: 1px solid var(--primary-700-color); background-color: #F8F7F6;">
            <p class="m-0 fs-5" style="color: var(--secondary-1200-color); ">Phản hồi khách hàng? <a
                    style="color: var(--secondary-1000-color);" href="">Click tại đây</a> để đăng nhập</p>
        </div>
    </section>
    <!-- Checkout info & payment -->
    <section class="container my-5">
        <form class="checkout-form" action="">
            <div class="row g-xl-5">
                <div class="col-12 col-xl-7">
                    <!-- Personal Information -->
                    <div>
                        <h3 class="fs-2">Thông tin khách hàng</h3>
                        <hr style="border: 1px solid; color: var(--primary-1000-color);">
                        <input class="form-control" type="text" placeholder="Họ và tên">
                        <div class="row g-2 my-1 ">
                            <div class="col-6">
                                <input class="form-control" type="Email" placeholder="Địa chỉ Email">
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" placeholder="Số điện thoại">
                            </div>
                        </div>
                    </div>
                    <!-- Shipping Address -->
                    <div class="my-5">
                        <h3 class="fs-2">Địa chỉ giao hàng</h3>
                        <hr style="border: 1px solid; color: var(--primary-1000-color);">
                        <div class="col-12">
                            <input class="form-control " type="text" placeholder="Address">
                        </div>
                    </div>
                    <!-- Coupon -->
                    <div class="mb-5">
                        <h3 class="fs-2">Mã giảm giá</h3>
                        <hr style="border: 1px solid; color: var(--primary-1000-color);">
                        <div>
                            <input class="form-control " type="text" placeholder="Coupon Code">
                        </div>
                    </div>
                    <!-- Payment Methods -->
                    <div class="mb-5">
                        <h3 class="fs-2">Phương thức thanh toán</h3>
                        <hr style="border: 1px solid; color: var(--primary-1000-color);">
                        <div>
                            <div class="form-check form-check-inline my-3">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="option1">
                                <label class="form-check-label" for="inlineRadio1">Cash On Delivery</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Credit or Debit</label>
                            </div>
                            <input class="form-control " type="text" placeholder="Cardholder Name">
                            <div class="position-relative my-3">
                                <input class="form-control " type="text" placeholder="Card Number">
                                <div class="position-absolute top-50 end-0 translate-middle-y me-4">
                                    <i class="fa-solid fa-circle fs-4 text-danger"></i>
                                    <i class="position-absolute start-50 fa-solid fa-circle fs-4 text-warning"></i>
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col-4">
                                    <input class="form-control " type="text" placeholder="EXP Date">
                                </div>
                                <div class="col-4">
                                    <input class="form-control " type="text" placeholder="CVC">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Item Cart in Checkout -->
                <div class="col-12 col-xl-5">
                    <h3 class="fs-2">Item</h3>
                    <hr style="border: 1px solid; color: var(--primary-1000-color);">
                    <div>
                        <div class="row g-2 align-items-center">
                            <div class="col-3">
                                <div class="position-relative">
                                    <img class="img-thumbnail w-75 h-75"
                                        src="img/Products/Footware/ADIDAS ORIGINALS X BAD BUNNY LAST CAMPUS.jpg"
                                        alt="">
                                    <span
                                        class="w-25 position-absolute top-0 end-0 text-center rounded-circle translate-middle bg-white fw-bold"
                                        style="border:2px solid var(--primary-1000-color); color: var(--primary-1000-color);">1</span>
                                </div>
                            </div>
                            <div class="col-5 mx-1">
                                <h5 class="my-2">Adidas BH413</h5>
                                <i class="fa-solid fs-3 fa-xmark"></i>
                            </div>
                            <div class="col-3">
                                <h5>$1,220.00</h5>
                            </div>
                        </div>
                    </div>
                    <hr style="border: 1px solid; color: var(--primary-1000-color);">
                    <div class="row my-2 g-2">
                        <div class="col-6">
                            <h5 class="fs-4">Tính tạm</h5>
                            <h5 class="my-2 fs-4">Giảm giá</h5>
                            <h5 class="fs-4">Phí vận chuyển</h5>
                        </div>
                        <div class="col-6 text-end">
                            <h5 class="fs-4">$1,220.00</h5>
                            <h5 class="my-2 fs-4">$0.00</h5>
                            <h5 class="fs-4">$4.00</h5>
                        </div>
                    </div>
                    <hr style="border: 1px solid; color: var(--primary-1000-color);">
                    <div class="d-flex justify-content-between">
                        <h3 class="fs-3">Total</h3>
                        <h3 class="fs-3">$1,224.00</h3>
                    </div>
                    <button class="btn fs-3 my-2 rounded-1 w-50 float-end btn-thanhtoan">Checkout</button>
                </div>
            </div>
        </form>
    </section>
@endsection
