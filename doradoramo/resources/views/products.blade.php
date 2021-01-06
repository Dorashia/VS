@extends('layouts.app')



@section('content')

<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>
<body>
<div class="c">

    <div id="autoWidth" class="cs-hidden">
        @foreach($products as $product)
        <div class="item-a">

            <div class="box">
                <p class="marvel">{{$product->name}}</p>
                <!--model-->
                <a href="{{ route('product.detail', ['id' => $product->id]) }}"><img src="{{ asset('images/') }}/{{$product->image}}" alt="" class="model"></a>
                <!--details-->
                <div class="details">
                    <!--logo-character-->
                    <p class="logo" width="100px" style="height: auto;">RM {{$product->price}} </p>
                </div>

            </div>

        </div>
        @endforeach
    </div>
    
</div>

</body>
@endsection