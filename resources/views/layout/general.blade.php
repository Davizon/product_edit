@extends('base)
@section("general")
<div class="row product-view">
    <div class="img">
        <img id="mediaImage" src="" alt="">
        <input autocomplete="off" type="text" class="form-control" id="detailed_image" name="detailed_image" placeholder="Type a detailed_image" value="{{$editProduct->detailed_image}}">
    </div>
    <div class="product-name"> <textarea autocomplete="off" type="text" class="form-control" id="name" name="name">{{$editProduct->name}}</textarea> </div>
    <div class="price">US$<input autocomplete="off" type="text" class="form-input" id="price" name="price" placeholder="Type a Price" value="{{$editProduct->price}}"></div>
    <div class="short-description"><textarea autocomplete="off" type="text" class="form-control" id="short_description" name="short_description">{{$editProduct->short_description}}</textarea></div>

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
                <textarea autocomplete="off" type="text" class="form-control" id="description" name="description"  placeholder="Type a description">{{$editProduct->description}}</textarea>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="pills-category" role="tabpanel" aria-labelledby="pills-category-tab">
        <label for="category">Category:</label>
        <input autocomplete="off" type="text" class="form-control" id="category" name="category" placeholder="Type a category" value="{{$editProduct->category}}">
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <label for="weight">Weight:</label>
        <input autocomplete="off" type="text" class="form-control" id="weight" name="weight" placeholder="Type a weight" value="{{$editProduct->weight}}">
        <label for="quantity">Quantity:</label>
        <input autocomplete="off" type="text" class="form-control" id="quantity" name="quantity" placeholder="Type a quantity" value="{{$editProduct->quantity}}">
        <label for="meta_description">Meta Description:</label>
        <input autocomplete="off" type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Type a meta_description" value="{{$editProduct->meta_description}}">
        <label for="options">Options:</label>
        <input autocomplete="off" type="text" class="form-control" id="options" name="options" placeholder="Type a options" value="{{$editProduct->options}}">
        {{--                    <input autocomplete="off" type="text" class="form-control" id="status" name="status" placeholder="Type a status" value="{{old('status')}}">--}}
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <label for="vendor">Vendor:</label>
        <input autocomplete="off" type="text" class="form-control" id="vendor" name="vendor" placeholder="Type a vendor" value="{{$editProduct->vendor}}">
        <label for="brand">Brand:</label>
        <input autocomplete="off" type="text" class="form-control" id="brand" name="brand" placeholder="Type a brand" value="{{$editProduct->brand}}">
    </div>
</div>
@endsection
