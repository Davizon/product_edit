@extends('layout.base')

@section('content')

    <div class="container">
        <div class="row mb-3" style="align-items: center;">

            <div class="col-sm-12 text-right">
                <a class="btn btn-secondary" href="/view_edits?filter_option=0">Back</a>
            </div>
        </div>

    <div class="row">
        <div class="col">
            <form name="dataForm" action="/view_edits/{{$editProduct->id}}" method="POST">
                @csrf
                @method('put')

                <div class="row product-view">
                    <div class="img">
                        <img id="mediaImage" src="" alt="">
                        <input autocomplete="off" type="text" class="form-control" id="detailed_image" name="detailed_image" placeholder="Type a detailed_image" value="{{$editProduct->detailed_image}}">
                    </div>
                    <div class="product-name"> <textarea autocomplete="off" type="text" class="form-control" id="product_name" name="product_name">{{$editProduct->product_name}}</textarea> </div>
                    <div class="price">US$<input autocomplete="off" type="text" class="form-input" id="price" name="price" placeholder="Type a Price" value="{{$editProduct->price}}"></div>
                    <div class="short-description"><textarea autocomplete="off" type="text" class="form-control textarea" id="short_description" name="short_description">{{$editProduct->short_description}}</textarea></div>

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
                    <li class="nav-item">
                        <a class="nav-link" id="pills-filters-tab" data-toggle="pill" href="#pills-filters" role="tab" aria-controls="pills-filters" aria-selected="false">Filters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-options-tab" data-toggle="pill" href="#pills-options" role="tab" aria-controls="pills-options" aria-selected="false">Options</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-extra-tab" data-toggle="pill" href="#pills-extra" role="tab" aria-controls="pills-extra" aria-selected="false">Extra</a>
                    </li>
                </ul>
                {{--   Tab Navs             --}}

                {{--    Tab Contend             --}}
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-sm-12">
                                <textarea autocomplete="off" type="text" class="form-control textarea" id="description" name="description"  placeholder="Type a description">{{$editProduct->description}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-category" role="tabpanel" aria-labelledby="pills-category-tab">
                        <label for="category">Category:</label>
                        @foreach($categories as $category)
                            @if($editProduct->product_code === $category->product_code)
                                <input autocomplete="off" type="text" class="form-control" id="category" name="category" placeholder="Type a category" value="{{$category->category}}///{{$category->Subcategory_1}}///{{$category->Subcategory_2}}">
                            @endif
                        @endforeach()






                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <label for="weight">Product Code:</label>
                        <input disabled autocomplete="off" type="text" class="form-control" id="product_code" name="product_code" placeholder="Type a Product Code" value="{{$editProduct->product_code}}">
                        <label for="weight">Weight:</label>
                        <input autocomplete="off" type="text" class="form-control" id="weight" name="weight" placeholder="Type a weight" value="{{$editProduct->weight}}">
                        <label for="quantity">Quantity:</label>
                        <input autocomplete="off" type="text" class="form-control" id="quantity" name="quantity" placeholder="Type a quantity" value="{{$editProduct->quantity}}">
                        {{-- <label for="meta_description">Meta Description:</label>--}}
                        {{-- <input autocomplete="off" type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Type a meta_description" value="{{$editProduct->meta_description}}">--}}
                        <label style="opacity: 0;" for="options">Options:</label>
                        <input style="opacity: 0;" autocomplete="off" type="text" class="form-control" id="options" name="options" placeholder="Type a options" value="{{$editProduct->options}}">
                        <input style="opacity: 0;" autocomplete="off" type="text" class="form-control" id="features" name="features" placeholder="Type a options" value="{{$editProduct->features}}">


                        {{--                    <input autocomplete="off" type="text" class="form-control" id="status" name="status" placeholder="Type a status" value="{{old('status')}}">--}}
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <label for="vendor">Vendor:</label>
                        <input autocomplete="off" type="text" class="form-control" id="vendor_name" name="vendor" placeholder="Type a vendor" value="{{$editProduct->vendor}}">
                        <label for="brand">Brand:</label>
                        <input autocomplete="off" type="text" class="form-control" id="brand" name="brand" placeholder="Type a brand" value="{{$editProduct->brand}}">
                    </div>
                    <div class="tab-pane fade" id="pills-filters" role="tabpanel" aria-labelledby="pills-filters-tab">
                        <div class="row">
                            @include('viewEdit.filters')

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-options" role="tabpanel" aria-labelledby="pills-options-tab">
                        <div class="row">
                            @if(!empty($editProduct->options))
                                @php
                                $string = $editProduct->options;
                                $colorOption = 'Color';
                                $buscarColor = strpos($string, $colorOption);
                                $sControl = "Size";
                                $iPosition = strpos($string, " ".$sControl);
                                $sResult = substr($string, 0, $iPosition);
                                $replace_option = str_replace("Color: [","\"",$sResult);
                                $replace_option_2 = str_replace("///image=",",", $replace_option);
                                $replace_option_3 = str_replace("];","\"",$replace_option_2);
                                $result = str_replace(",", "\",\"",$replace_option_3);
                                $result_final = str_replace("\"","",$result);
                                $array = explode(",",$result_final);
                                $b = 1;
                                $c = 0;
                                $d = 0;
                                @endphp
                                 @if($buscarColor === false)
                                    @else
                                    @for($a=0; count($array) !== $a; $a++, $b++)
                                        <div class="col-sm-3 custom-class text-center">
                                            <div class="col-sm-12">


                                                <img class="img-option" id="option_color_img_{{$d}}" src="">

                                            </div>
                                            <div style="padding-bottom: 0;" class="col-sm-12 text-option">
                                                <input  class="form-control text-center"  name="value_color_img_{{$d}}" value="{{$array[$b++]}}">
                                            </div>
                                            <div style="padding-top: 0;" class="col-sm-12 text-option">
                                                <input  class="form-control text-center" name="option_color-{{$c++}}" value="{{$array[$a++]}}">
                                            </div>
                                            <script>
                                                window.addEventListener('keyup', function(event) {
                                                    document.getElementById('option_color_img_{{$d}}').src = document.dataForm.value_color_img_{{$d}}.value;
                                                });
                                                window.addEventListener('load', function(event) {
                                                    document.getElementById('option_color_img_{{$d}}').src = document.dataForm.value_color_img_{{$d}}.value;
                                                });
                                            </script>
                                        </div>
                                        @php $d++ @endphp
                                    @endfor
                                @endif
                            @endif
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-extra" role="tabpanel" aria-labelledby="pills-extra-tab">
                        <div class="row">
                            <?php
                                $replaceName = explode("\",", $editProduct->aditional_column_name );
                            $clearName = str_replace("\"", "", $replaceName);
                            $countName = count($clearName);
                            $replaceValue = explode("\",", $editProduct->aditional_column_value );
                            $clearValue = str_replace("\"", "", $replaceValue);
                            $countValue = count($clearValue);
                            ?>
                            <div class="col-sm-4">
                                @for($a=0; $countName !== $a; $a++)
                                    <input class="form-control" name="aditional_column_name-{{$a}}" type="text" value="{{$clearName[$a]}}">
                                @endfor
                            </div>
                          <div class="col-sm-8">
                              @for($a=0; $countValue !== $a; $a++)
                                  <input class="form-control" name="aditional_column_value-{{$a}}" type="text" value="{{$clearValue[$a]}}">
                              @endfor
                          </div>

                        </div>
                    </div>
                </div>
                {{--       Tab Contend         --}}
                <button  class="btn btn-primary save-btn" type="submit" id="submit">Save Product</button>
            </form>
        </div>
    </div>
    </div>

    <script>
        autosize(document.getElementById("product_name"));
        autosize(document.getElementById("short_description"));
        autosize(document.getElementById("description"));

        window.addEventListener("keyup", function(event) {
            document.getElementById('mediaImage').src = document.dataForm.detailed_image.value;
        });
        window.addEventListener("load", function(event) {
            document.getElementById('mediaImage').src = document.dataForm.detailed_image.value;
        });



    </script>

{{--    <div id="preview_text">Preview goes here</div>--}}



{{--    <!-- Extra large modal -->--}}
{{--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">HTML Description</button>--}}

{{--    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-xl">--}}
{{--            <div class="modal-content">--}}
{{--                <form name="dataform">--}}
{{--                    <textarea name="data" rows="15" cols="30"></textarea>  <br>--}}
{{--                    <input class="close" data-dismiss="modal" aria-label="Close" type="button" value="Preview" onClick="preview();show_lay(); ">--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection

