@extends('layouts.app')

@section('content')
<section id="buy" class="buy">
    <div class="buy-content">                 
        <div class="card">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="container mt-5 mb-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="../img/{{$beli -> image}}" alt="" width="100%">
                        </div>
                    <div class="col-sm-6">
                        <div class="row pt-4">
                            <h1>{{ $beli -> name}}</h1>
                        </div>
                        <div class="row pt-5">
                            <div class="col-sm-6">
                                <h5>Harga : </h5>
                            </div>
                        <div class="col-sm-6">
                            
                            <h5>Rp.{{ $beli -> harga}}</h5>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-sm-6">
                            <h5>Qty :</h5>
                        </div>
                        <div class="col-sm-6">    
                            <table>         
                                <tr>
                                    <td>
                                    <div class="form-row justify-content-center">
                                        <div class="form-group mb-0">
                                        <div class="input-group mx-auto mb-0">
                                            <div class="number-input amount">
                                            <!--just add minus class-->
                                            <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown();" id="decrease"></button>
                                            <input class="quantity bg-light" id="quantity" min="1" placeholder="1" name="quantity" value="1" type="number">
                                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp();" class="plus" id="increment"></button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </td>
                                </tr>   
                            </table>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-sm-6">
                            <h5>Harga Total :</h5>
                        </div>
                        <div class="col-sm-6"> 
                            <h5 id="total">Rp.{{ $beli -> harga * 1}}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Lokasi :</h5>
                        </div>
                        <div class="col-sm-6">
                            <h5>Jln Cigiringsing rt 07 rw 03, Bandung</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Estimasi Waktu Pengiriman :</h5>
                        </div>
                        <div class="col-sm-6">
                            <h5>1 - 3 Hari</h5>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="row mt-5">
                            <button type="button" class="btn btn-danger btn-lg btn-block">Beli Sekarang!</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>          
        </div>
    </div>        
</div>
<br>

</section>

<script>
$(".minus , .plus , .quantity").on("click", function() {
  var selectors = $(this).closest('tr');
  var quan = selectors.find('.quantity').val(); 
  if (!quan || quan < 0)
    return;
  var cost =  {!! json_encode($beli->harga) !!};
  var total = (cost * quan);
  $('#total').text("Rp." +  total);

})
</script>

@endsection
