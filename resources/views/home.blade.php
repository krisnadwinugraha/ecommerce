@extends('layouts.app')

@section('content')

<section id="hero" class="hero">
        <div class="container-fluid">
            <div class="hero-content">                 
                <h1>CakeShop</h1>
                <p>Get Delicious Cake Here With Discount.</p>
                <button type="button" class="btn btn-danger">Buy Here !</button>
            </div>
        </div>
</section>

    <div class="card pb-5 pt-5">
        <div class="card-body">
             @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
             @endif
                <div class="container">                    
                    <div class="row pt-4">
                    <h1>Just For You</h1>  
                        @foreach ($barang as $kue)
                        <div class="col-sm-3 pt-5">
                            <a href="{{ url('beli/'.$kue["id"].'/')}}"> <img src="img/{{ $kue["image"] }}" alt="" width="100%">
                                <h2 class="pt-2"><b>{{ $kue["name"] }}</b></h2>
                                <h5>Rp.{{ $kue["harga"] }}</h5>
                            </a>
                        </div>
                        @endforeach   
                    </div> 
                    <div class="d-flex justify-content-end pt-5">
                    {{ $barang -> links()}}
                    </div>
                </div>   
        </div>
    </div>
@endsection
