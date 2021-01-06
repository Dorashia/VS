@extends('layouts.app')
@section('content')
<div class="row" align="center" style="background-color: black; color:whitesmoke;">
    @foreach($products as $product)
    <div class="col-md-6">
        <div style="margin-top: 60px;">
            <img src="{{ asset('images/') }}/{{$product->image}}" alt="" width="50%" class="img-fluid">
        </div>
    </div>
    <div class="col-md-4">
        <div>
            <form action="{{ route('add.to.cart') }}" method="post">
                @csrf
                <div style="height: 600px; background-color: rgb(230 219 219 / 15%); margin: 30px">
                    <p style="font-size: 30px; padding: 20px" type="hidden" id="name" name="name" value="">{{$product->name}}</p>
                    <input type="hidden" name="id" id="id" value="{{$product->id}}">
                    <p style="height: 350px; word-wrap: break-word; padding: 0px 50px; font-size: 16px" >Description: {{$product->description}} </p>
                    <p style="font-size: 20px; margin: 15px">RM {{$product->price}} </p>
                    <button type="submit" style="float:none" class="btn btn-danger btn-xs">Add To Cart</button>
                </div>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection