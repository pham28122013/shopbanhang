@extends('products.master')
@section('content')

<div class="checkout">
    <section class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <img src="{{asset('./images/banner/banner-img.png')}}" alt="">
                    </div>
                </div>
            </div>
    </section>
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <form class="row contact_form" action="{{route('order.store')}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3>Billing Details</h3>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="add1" name="name">
                                    <span class="placeholder" data-placeholder="Name"></span>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="add2" name="phone">
                                    <span class="placeholder" data-placeholder="Phone"></span>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="add1" name="address">
                                    <span class="placeholder" data-placeholder="Address"></span>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="add2" name="email">
                                    <span class="placeholder" data-placeholder="Email"></span>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea class="form-control" name="note" id="message" rows="1" placeholder="Order Notes"></textarea>
                                </div>
                            
                        </div>
                        <div class="col-lg-4">
                            <div class="order_box">
                                <h2>Your Order</h2>
                                <ul class="list">
                                    <li><a href="#">Product <span>Total</span></a></li>
                                    @foreach ($content as $content)                              
                                        <li><a href="#">{{$content->name}}<span class="middle">x {{$content->quantity}}</span> <span class="last">{{number_format($content->quantity*$content->price)}} VNĐ</span></a></li>
                                    @endforeach
                                </ul>
                                <ul class="list list_2">
                                    <li><a href="#">Subtotal <span>{{number_format($total)}} VNĐ</span></a></li>
                                    <li><a href="#">Shipping <span>Flat rate: $50.00</span></a></li>
                                    <li><a href="#">Total <span>$2210.00</span></a></li>
                                </ul>
                                <div class="payment_item">
                                    <div class="radion_btn">
                                        <input type="radio" id="f-option5" name="selector">
                                        <label for="f-option5">Check payments</label>
                                        <div class="check"></div>
                                    </div>
                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                        Store Postcode.</p>
                                </div>
                                <div class="payment_item active">
                                    <div class="radion_btn">
                                        <input type="radio" id="f-option6" name="selector">
                                        <label for="f-option6">Paypal </label>
                                        <img src="img/product/card.jpg" alt="">
                                        <div class="check"></div>
                                    </div>
                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                        account.</p>
                                </div>
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option4" name="selector">
                                    <label for="f-option4">I’ve read and accept the </label>
                                    <a href="#">terms & conditions*</a>
                                </div>
                                <button type="submit" class="btn btn-default primary-btn">Proceed to Paypal</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>