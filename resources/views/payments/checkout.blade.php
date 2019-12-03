@extends('layouts.app')

@section('content')
    <section class="content-header" style="margin-bottom: 30px">
        <h1 class="pull-left">Checkout</h1>
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

                {!! Form::open(['route' => 'orders.store']) !!}

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Address details</div>
                                <div class="panel-body">
                                    <h3>{!! $user->full_name !!}</h3>
                                    <p>{!! $user->address ?? "Lagos, Nigeria " !!}</p>
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
                                              Option 1 - Door delivery
                                            </label>
                                          </div>
                                          <div class="radio">
                                            <label>
                                              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" >
                                              Option 2 - Pickup Station
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
                                <div class="panel-heading">PAyment Information</div>
                                <div class="panel-body">
                                        <li class="list-group-item">Subtotal: <b><?= Cart::subtotal() ?></b></li>
                                        <li class="list-group-item">Discount Amount : <b><?= Cart::discount()?></b></li>
                                        <li class="list-group-item">Tax Amount : <b><?= Cart::tax()?></b></li>
                                        <li class="list-group-item">Total Amount : <b><?= Cart::total();?></b></li>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Payment Method</div>
                                <div class="panel-body">

                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Cash
                                                        </a>
                                                    </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        Make payment with cash on delivery.
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                Bank Transfer
                                                        </a>
                                                    </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">

                                                        Make payment via a bank transafer.
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Card payment
                                                        </a>
                                                    </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                        <form action="">

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" placeholder="Account name" />
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" placeholder="Card number" />
                                                                </div>
                                                            </div>

                                                            <div class="row" style="margin-top:10px">
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" placeholder="CVV" />
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {!! Form::open(['route' => 'orders.store']) !!}
                    {{-- {!! Form::submit(['route' => ['payments.store'] ]) !!} --}}
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Make Payments', ['class' => 'btn btn-primary']) !!}
                        {{-- <button class="btn btn-primary btn-lg" type="submit">Make Payment</button> --}}
                        <a href="{!! route('cart.checkout') !!}" class="btn btn-default">Cancel</a>
                    </div>

                {!! Form::close() !!}


                </div>

            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

