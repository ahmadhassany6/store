@extends('layouts.home')

@section('title','Product')

@section('banner')
    <div class="page-heading products-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>{{ $product->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <style>
        #basket{
            background: #f33f3f;
            border: black;
            color: white;
        }

        h3{
            font-size: large;
        }

        #Main-Image:hover {
            opacity: 1;
            transform: scale(1);
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-1" >
                <div>
                    <img onclick="document.getElementById('Main-Image').src=this.src" style="width:100%;cursor: pointer;margin-bottom: 10px;" src="{{ $product->ImagePath }}" />
                    @foreach($images as $image)
                        <img onclick="document.getElementById('Main-Image').src=this.src" style="width:100%;cursor: pointer;margin-bottom: 10px;" src="{{ asset("storage/images/" . \App\Models\Product::$folderName . '/' . $image->saved_name) }}" />
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 col-4">
                <img id="Main-Image" style="width:100%;" src="{{ $product->ImagePath }}" />
            </div>
            <div class="col-md-6 col-6" style="width:100%;display: inline-flex">
                <div class="col-md-6  col-6">
                    <div id="VP" name="VP">
                        {!! $OptionVariantsList !!}
                    </div>
                </div>
                <div class="col-md-6  col-6">
                    <label>Product Description</label>
                    <p>
                        {!! $product->description !!}
                    </p>
                    <hr>
                    <div class="form-group">
                        <label class="form-label" for="quantity">The Amount</label>
                        <div style="margin: 10px 0;">
                            <input  class=' form-control' value="1" min="1" type="number" name="quantity" id="quantity">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
