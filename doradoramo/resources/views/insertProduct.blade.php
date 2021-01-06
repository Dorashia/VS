@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="css/insertProductStyle.css"/>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&family=Catamaran:wght@500&display=swap" rel="stylesheet">

<h1>Insert Product</h1>

<div>
    <div style="text-align:center"> 
        <form method="post" action="{{ route('addProduct') }}" enctype="multipart/form-data">
            @csrf 
            <p>
                <label for="name" class="label">Name</label>
                <br>
                <input type="text" name="name" id="name">
            </p>
                    
            <p>
                <label for="description" class="label">Description</label>
                <br>
                <textarea type="text" name="description" id="description"></textarea>
            </p>
                    
            <p>
                <label for="category" class="label">Category</label>
                <br>
                <select name="category" id="category" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </p>
          
            <p>
                <label for="price" class="label">Price (RM)</label>
                <br>
                <input type="number" name="price" id="price">
            </p>
                    
            <p>
                <label for="product-image" class="label">Image</label>
                <input type="file" id="product-image-input" class="form-control" name="product-image" value="">
            </p>
                    
            <p>
                <input type="submit" id="submit-button" name="insert" value="Insert">
            </p>
        </form>
    </div>
</div>
@endsection