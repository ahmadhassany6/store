@extends('layouts.home')

@section('title','Product')

@section('banner')
    <div class="page-heading products-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-1" >
                <div>
                    <img style="width:100%;cursor: pointer;" src="https://cdn.dsmcdn.com/ty63/product/media/images/20210130/19/58701137/136116576/1/1_org_zoom.jpg" />
                    <img style="width:100%;cursor: pointer;" src="https://cdn.dsmcdn.com/ty63/product/media/images/20210130/19/58701137/136116576/1/1_org_zoom.jpg" />
                    <img style="width:100%;cursor: pointer;" src="https://cdn.dsmcdn.com/ty63/product/media/images/20210130/19/58701137/136116576/1/1_org_zoom.jpg" />
                    <img style="width:100%;cursor: pointer;" src="https://cdn.dsmcdn.com/ty63/product/media/images/20210130/19/58701137/136116576/1/1_org_zoom.jpg" />
                </div>
            </div>
            <div class="col-md-4 col-4">
                <img style="width:100%;" src="https://cdn.dsmcdn.com/ty63/product/media/images/20210130/19/58701137/136116576/1/1_org_zoom.jpg" />
            </div>
            <div class="col-md-6 col-6" style="width:100%;display: inline-flex">
                <div class="col-md-6  col-6">
                    <div id="VP" name="VP">
                        <h3 id="1">color</h3>
                        <select style="width: 100%;" id="color" name="color" class="custom-select form-control">
                            <option value="red">red</option>
                            <option value="purple">purple</option>
                        </select>
                        <h3 id="2">size</h3>
                        <select id="size" name="size" class="custom-select form-control">
                            <option value="small">small</option>
                            <option value="big">big</option>
                        </select>
                        <h3 id="1">color</h3>
                        <select id="color" name="color" class="custom-select form-control">
                            <option value="red">red</option>
                            <option value="purple">purple</option>
                        </select>
                        <h3 id="2">size</h3>
                        <select id="size" name="size" class="custom-select form-control">
                            <option value="small">small</option>
                            <option value="big">big</option>
                        </select>
                        <h3 id="1">color</h3>
                        <select id="color" name="color" class="custom-select form-control">
                            <option value="red">red</option>
                            <option value="purple">purple</option>
                        </select>
                        <h3 id="2">size</h3>
                        <select id="size" name="size" class="custom-select form-control">
                            <option value="small">small</option>
                            <option value="big">big</option>
                        </select>
                        <div style="text-align: center;margin-top: 10px;">
                            <a class="btn btn-primary" name="basket" id="basket" onclick="addToBasket(1)">Add To Basket</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  col-6">
                    <p>
                        Emmet is great for that. With it installed in the code editor you are using, you can type “lorem” and then tab and it will expand into a paragraph of Lorem Ipsum placeholder text. But it can do more! You can control how much you get, place it within HTML structure as it expands, and get different bits of it in repeated elements.
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
