@include('template')
<body className='snippet-body'>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class=" col-lg-6 col-md-8">
                    <div class="card p-3">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <h2 class="heading text-center">Portal de Pago</h2>
                            </div>
                        </div>
                        <!--form onsubmit="event.preventDefault()" class="form-card"  method="POST" action="{{ route('pay') }}"-->
                        <form  class="form-card"  method="POST" action="{{ route('pay') }}">
                        @csrf
                            <div class="row justify-content-center mb-4 radio-group">
                                <div class="col-sm-3 col-5">
                                    <div class='radio mx-auto' data-value="master" style="cursor: default;"> <img class="fit-image" src="{{asset('images/Mastercard_2019_logo.svg.png')}}" width="105px" height="55px"> </div>
                                </div>
                                <div class="col-sm-3 col-5">
                                    <div class='radio mx-auto' data-value="visa" style="cursor: default;"> <img class="fit-image" src="{{asset('images/visa.jpg')}}" width="105px" height="55px"> </div>
                                </div>
                                <div class="col-sm-3 col-5">
                                    <div class='radio mx-auto' data-value="dk" style="cursor: default;"> <img class="fit-image" src="{{asset('images/UNION PAY LOGO.png')}}" width="105px" height="55px"> </div>
                                </div> <br>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="input-group"> <input type="text" name="Name"  value="{{session('customer_info')[0]->name}}"> <label>Nombre</label> </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="input-group"> <input type="text" id="cr_no" name="card-no" placeholder="1234 5678 1234 5678" minlength="19" maxlength="19"> <label>N° de Tarjeta</label> </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-group"> <input type="text" id="exp" name="expdate" placeholder="MM/YY" minlength="5" maxlength="5"> <label>Fecha de Expiración</label> </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group"> <input type="password" name="cvv" placeholder="&#9679;&#9679;&#9679;" minlength="3" maxlength="3"> <label>Codigo CV</label> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="input-group"> <input type="text"  name="amount"  value="{{$amount}}" readonly> <label>Monto a pagar</label> </div>
                                </div>
                            </div>

                           
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="input-group"> <input type="hidden"  name="email"  value="{{$email}}" required> <label>Correo</label> </div>
                                </div>
                            </div>

                           
                           
                            <div class="row justify-content-center">
                                <!--div class="col-md-12"> <input type="submit"  class="btn btn-pay placeicon"> </div-->
                                <input class="btn btn-dark" id="btnPagar" type="submit" value="Pagar" style="color: white;"> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('footer')
    </body>