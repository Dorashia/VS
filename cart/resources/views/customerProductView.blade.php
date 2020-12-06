@extends('layouts.app')
@section('content')

<div class="container">
   <div class="row">
      @foreach($products as $product)
      <div class="col-md-4">
         <div class="card">
            <div class="card-body">
               <h5 class="card-title">{{$product->name}}</h5>
            </div>
         </div>
      </div>
      @endforeach
   </div>
</div>

@endsection