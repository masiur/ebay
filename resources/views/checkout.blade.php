@extends('layouts.default')
    @section('content')
        @include('includes.alert')

<div class="container">
            <div class="row">
                <div class="col-md-4">
                    <aside class="sidebar-left">
                        <div class="box clearfix">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>QTY</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>New Glass Collection</td>
                                        <td>1</td>
                                        <td>$150</td>
                                    </tr>
                                    <tr>
                                        <td>Canon Camera</td>
                                        <td>1</td>
                                        <td>$200</td>
                                    </tr>
                                    <tr>
                                        <td>Jack Daniels Huge Pack</td>
                                        <td>1</td>
                                        <td>$150</td>
                                    </tr>
                                </tbody>
                            </table>
                            <ul class="cart-total-list text-center mb0">
                                <li><span>Sub Total</span><span>$500.00</span>
                                </li>
                                <li><span>Shipping</span><span>$0.00</span>
                                </li>
                                <li><span>Taxes</span><span>$0.00</span>
                                </li>
                                <li><span>Total</span><span>$500.00</span>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="col-md-8">
                    <p class="mb20"><a href="#">Login</a> or <a href="#">Register</a> for faster payment.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Pay Via Credit/Debit Card</h3>
                            <form action="#">
                                <!-- <legend>Personal Information</legend> -->
                                <div class="form-group">
                                    <label for="">First & Last Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Phone Number</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">E-mail</label>
                                    <input type="text" class="form-control">
                                </div>
                                <legend>Address</legend>
                                <div class="form-group">
                                    <label for="">Country</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">City</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">ZIP/Postal Code</label>
                                    <input type="text" class="form-control">
                                </div>
                                <legend>Card Information</legend>
                                <div class="cc-form">
                                    <div class="clearfix">
                                        <div class="form-group form-group-cc-number">
                                            <label>Card Number</label>
                                            <input placeholder="xxxx xxxx xxxx xxxx" type="text" class="form-control" /><span class="cc-card-icon"></span>
                                        </div>
                                        <div class="form-group form-group-cc-cvc">
                                            <label>CVC</label>
                                            <input placeholder="xxxx" type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="form-group form-group-cc-name">
                                            <label>Cardholder Name</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                        <div class="form-group form-group-cc-date">
                                            <label>Valid Thru</label>
                                            <input placeholder="mm/yy" type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Proceed Payment">
                            </form>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <h3>Pay Via Paypal</h3>
                            <p>Important: You will be redirected to PayPal's website to securely complete your payment.</p>
                            <a href="#" class="btn btn-primary">Checkout via Paypal</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </div>
@stop