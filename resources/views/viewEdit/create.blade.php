@extends('layout.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>New Product</h1>
            </div>
            <div class="col text-right">
                <a class="btn btn-secondary" href="/view_edits">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form name="dataFormCreate" action="/view_edits" method="POST">
                    @csrf
                    <div class="row product-view">
                        <div class="img">
                            <img id="mediaImageCreate" src="" alt="">
                            <input autocomplete="off" type="text" class="form-control" id="detailed_image" name="detailed_image" placeholder="Type a detailed_image" value="{{old('detailed_image')}}">
                        </div>
                        <div class="product-name"> <textarea autocomplete="off" type="text" class="form-control" id="product_name" name="product_name">{{old('product_name')}}</textarea> </div>
                        <div class="price">US$<input autocomplete="off" type="text" class="form-input" id="price" name="price" placeholder="Type a Price" value="{{old('price')}}"></div>
                        <div class="short-description"><textarea autocomplete="off" type="text" class="form-control textarea" id="short_description" name="short_description">{{old('short_description')}}</textarea></div>

                    </div>
                    {{--     Tab Navs             --}}
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-category-tab" data-toggle="pill" href="#pills-category" role="tab" aria-controls="pills-category" aria-selected="true">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Additional Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Seller</a>
                        </li>
                    </ul>
                    {{--   Tab Navs             --}}

                    {{--    Tab Contend             --}}
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row">
                                <div class="col-sm-12">
                                    <textarea autocomplete="off" type="text" class="form-control textarea" id="description" name="description"  placeholder="Type a description">{{old('description')}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-category" role="tabpanel" aria-labelledby="pills-category-tab">
                            <label for="category">Category:</label>
                            <input autocomplete="off" type="text" class="form-control" id="category" name="category" placeholder="Type a category" value="{{old('category')}}">
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                            <input autocomplete="off" type="text" class="form-control" id="product_code" name="product_code" placeholder="Type a product_code" value="{{old('product_code')}}">

                            <input autocomplete="off" type="text" class="form-control" id="weight" name="weight" placeholder="Type a weight" value="{{old('weight')}}">

                            <input autocomplete="off" type="text" class="form-control" id="quantity" name="quantity" placeholder="Type a quantity" value="{{old('quantity')}}">

                            <input autocomplete="off" type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Type a meta_description" value="{{old('meta_description')}}">

                            <input autocomplete="off" type="text" class="form-control" id="options" name="options" placeholder="Type a options" value="{{old('options')}}">
                            <input autocomplete="off" type="text" class="form-control" id="features" name="features" placeholder="Type a options" value="{{old('features')}}">
                            {{--                    <input autocomplete="off" type="text" class="form-control" id="status" name="status" placeholder="Type a status" value="{{old('status')}}">--}}
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                            <input autocomplete="off" type="text" class="form-control" id="vendor" name="vendor" placeholder="Type a vendor" value="{{old('vendor')}}">

                            <input autocomplete="off" type="text" class="form-control" id="brand" name="brand" placeholder="Type a brand" value="{{old('brand')}}">
                            <input hidden autocomplete="off" type="text" class="form-control" id="user_id" name="user_id" placeholder="Type a brand" value="{{Auth::user()->id}}">
                        </div>
                    </div>
                    {{--       Tab Contend         --}}
                    <button  class="btn btn-primary save-btn" type="submit" id="submit">Save Product</button>
                </form>
            </div>
        </div>
    </div>
    </form>
    </div>
    </div>
    </div>

    <script>
        autosize(document.getElementById("product_name"));
        autosize(document.getElementById("short_description"));
        autosize(document.getElementById("description"));

        window.addEventListener("keyup", function(event) {
            document.getElementById('mediaImageCreate').src = document.dataFormCreate.detailed_image.value;
        });
        window.addEventListener("load", function(event) {
            document.getElementById('mediaImageCreate').src = document.dataFormCreate.detailed_image.value;
        });

    </script>
@endsection


