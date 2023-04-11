@extends('master')

@section('title', 'Our Products')

@section('detaildesc', 'The card has some magic power. Collect Cars Wars Wiki collections card and traded among players to enhance their collections.')
@section('detailproduct')

@foreach ($products as $products)
    <div class="kartu m-4 mt-3 py-5
    {{ ($products['stats'] === 'R') ? 'silver' : '' }}
    {{ ($products['stats'] === 'SR') ? 'gold' : '' }}
    {{ ($products['stats'] === 'SSR') ? 'red' : '' }}"
    >
        <center>
            <div class="foto">
            <img class="card-img-top" src="{{ asset('images/' . $products['image']) }}"
            alt="{{ $products['name']}}">
            </div>
        </center>

        <div class="keterangan text-center">
            <a href="/product/{{ $products["name"]}}">
                <h1 class="productnametitle mt-3">{{$products['name']}}</h1>
            </a>
            <p class="productnamedesc">{{$products['desc']}}</p>
            <h2 class="productnamestats">{{$products['stats']}}</h2>
            <h2 class="productnameprice mt-5">{{$products['price']}}</h2>
        </div>
    </div>
@endforeach

@endsection
