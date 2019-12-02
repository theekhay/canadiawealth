@extends('layouts.app')

@section('content')
    <section class="content-header" style="margin-bottom: 30px">
        <h1 class="pull-left">Checkout and Payment</h1>
        <h1 class="pull-right">
           {{-- <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('payments.create') !!}">Add New</a> --}}
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Address details</div>
                                <div class="panel-body">
                                    <h3>{!! $user->full_name !!}</h3>
                                    <p>{!! $user->address !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Delivery Method</div>
                                <div class="panel-body">
                                    <p>How do you want your order delivered ?</p>
                                    <p>Deliveries are made between monday and Saturdays</p>
                                    <div class="radio">
                                            <label>
                                              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                              Option one is this and that&mdash;be sure to include why it's great
                                            </label>
                                          </div>
                                          <div class="radio">
                                            <label>
                                              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                              Option two can be something else and selecting it will deselect option one
                                            </label>
                                          </div>
                                          <div class="radio disabled">
                                            <label>
                                              <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                                              Option three is disabled
                                            </label>
                                          </div>
                                    {{-- <h3>{!! $user->full_name !!}</h3>
                                    <p>{!! $user->address !!}</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Pickup Station</div>
                                <div class="panel-body">
                                    <p>Ready for pickup between <strong>Monday 23rd Dec</strong> and <strong>Firday 28th Dec</strong> </p>
                                    <p>Deliveries are made between monday and Saturdays</p>
                                    {{-- <h3>{!! $user->full_name !!}</h3>
                                    <p>{!! $user->address !!}</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Pickup Station</div>
                                    <div class="panel-body">
                                            <li class="list-group-item">Subtotal:#8,000</li>
                                            <li class="list-group-item">Shipping Amount :#8,000</li>
                                            <li class="list-group-item">Total Amount :#8,000</li>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>

            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

