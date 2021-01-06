<style>
    main {
        background-image: linear-gradient(rgba(248, 248, 248, 0.795),rgba(224, 224, 224, 0.796)),url("/images/light-blue-poly-background.jpg");
        background-position: center;
        background-size: cover;
        background-color: #323842;
    }

    h1 {
        margin: 20px;
        font-family: 'Teko', sans-serif;
        text-align: center;
        color: rgb(78, 81, 85);
    }

    form {
        width: 80%;
        margin: auto;
    }

    label {
        color: rgb(72, 77, 90);
        font-family: 'Catamaran', sans-serif;
    }

    input,textarea {
        padding: 10px;
        border: none;
        border-radius: 5px;
        width: 500px; 
        color: #333638;
    }

    input {
        height: 40px;
    }

    textarea#description {
        height: 200px;
    }

    input,select#category,textarea,input#product-image-input {
        background-color: rgba(255, 255, 255, 0.548);
    }

    input#price, input#ID {
        text-align: center;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }   

    select#category, input#product-image-input {
        width: 500px;
        margin: auto;
    }

    #submit-button {
        width: 100px;
        margin: 20px;
        color: white;
        background-color: rgb(78, 81, 85);
        padding: 0px;
    }

    #submit-button:hover {
        background-color: rgba(62, 62, 63, 0.336);
    }
</style>

@extends('layouts.app')
@section('content')

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&family=Catamaran:wght@500&display=swap" rel="stylesheet">

<h1 style="margin: 20px; font-family: 'Teko', sans-serif; text-align: center; color: rgb(78, 81, 85);">Edit Product</h1>

<div>
    <div style="text-align:center"> 
        <form class="form-group" method="post" action="{{ route('updateProduct') }}" enctype="multipart/form-data">
            @csrf 

            @foreach($products as $product)
            <p>
                <label for="ID" class="label">Product ID</label>
                <br>
                <input type="text" name="ID" id="ID" value="{{$product->id}}" readonly>
            </p>
            
            <p>
                <label for="name" class="label">Name</label>
                <br>
                <input type="text" name="name" id="name" value="{{$product->name}}">
            </p>
            
            <p>
                <label for="description" class="label">Description</label>
                <br>
                <textarea type="text" name="description" id="description">{{$product->description}}</textarea>
            </p>
                    
            <p>
                <label for="category" class="label">Category</label>
                <select name="category" id="category" class="form-control">
                    @foreach($categories as $category)
                    <option  value="{{ $category->id }}"
                    @if($product->categoryID==$category->id)
                    selected                    
                    @endif
                    >{{ $category->name }}</option>
                    @endforeach
                </select>
            </p>
            
                    
            <p>
                <label for="price" class="label">Price (RM)</label>
                <br>
                <input type="number" name="price" id="Price" value="{{$product->price}}">
            </p>
                    
            <p>
                <label for="product-image" class="label">Image</label>
                <input type="file" class="form-control" name="product-image" id="product-image-input" value="{{$product->image}}">
            </p>
            @endforeach

            <p>
                <input type="submit" id="submit-button" name="edit" value="Edit">
            </p>
        </form>
    </div>
</div>
@endsection