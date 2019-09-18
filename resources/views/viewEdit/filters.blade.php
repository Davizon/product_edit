@foreach($options as $option)
    @if($editProduct->product_code === $option->product_code)
            @if(!empty($option->color))
                <div class="col-sm-12">
                    {{Form::select('filter1', \App\Filter::pluck('name','name'), 'Color', ['class' => 'form-control select-filter'])}}
                    <input class="form-control select-filter" type="text" name="option1" id="option1" value="{{$option->color}}">
                </div>
            @endif
            @if(!empty($option->size))
                <div class="col-sm-12">
                    {{Form::select('filter2', \App\Filter::pluck('name','name'), 'Size', ['class' => 'form-control select-filter'])}}
                    <input class="form-control select-filter" type="text" name="option2" id="option2" value="{{$option->size}}">
                </div>
            @endif
            @if(!empty($option->collar))
                <div class="col-sm-12">
                    {{Form::select('filter3', \App\Filter::pluck('name','name'), 'Collar', ['class' => 'form-control select-filter'])}}
                    <input class="form-control select-filter" type="text" name="option3" id="option3" value="{{$option->collar}}">
                </div>
            @endif

        @if(!empty($option->best_for))
            <div class="col-sm-12">

                {{Form::select('filter4', \App\Filter::pluck('name','name'), 'Best For', ['class' => 'form-control select-filter'])}}
                <input class="form-control select-filter" type="text" name="option4" id="option4" value="{{$option->best_for}}">
            </div>
        @endif
        @if(!empty($option->brand))
            <div class="col-sm-12">

                {{Form::select('filter5', \App\Filter::pluck('name','name'), 'Brand', ['class' => 'form-control select-filter'])}}
                <input class="form-control select-filter" type="text" name="option5" id="option5" value="{{$option->brand}}">
            </div>
        @endif
        @if(!empty($option->closure_type))
            <div class="col-sm-12">

                {{Form::select('filter6', \App\Filter::pluck('name','name'), 'Closure Type', ['class' => 'form-control select-filter'])}}
                <input class="form-control select-filter" type="text" name="option6" id="option6" value="{{$option->closure_type}}">
            </div>
        @endif

        @if(!empty($option->features))
            <div class="col-sm-12">

                {{Form::select('filter7', \App\Filter::pluck('name','name'), 'Features', ['class' => 'form-control select-filter'])}}
                <input class="form-control select-filter" type="text" name="option7" id="option7" value="{{$option->features}}">
            </div>
        @endif
        @if(!empty($option->gender))
            <div class="col-sm-12">

                {{Form::select('filter8', \App\Filter::pluck('name','name'), 'Gender', ['class' => 'form-control select-filter'])}}
                <input class="form-control select-filter" type="text" name="option8" id="option8" value="{{$option->gender}}">
            </div>
        @endif
        @if(!empty($option->length))
            <div class="col-sm-12">

                {{Form::select('filter9', \App\Filter::pluck('name','name'), 'Length', ['class' => 'form-control select-filter'])}}
                <input class="form-control select-filter" type="text" name="option9" id="option9" value="{{$option->length}}">
            </div>
        @endif

            @if(!empty($option->material))
                <div class="col-sm-12">

                    {{Form::select('filter10', \App\Filter::pluck('name','name'), 'Material', ['class' => 'form-control select-filter'])}}
                    <input class="form-control select-filter" type="text" name="option10" id="option10" value="{{$option->material}}">
                </div>
            @endif
            @if(!empty($option->occasion))
                <div class="col-sm-12">

                    {{Form::select('filter11', \App\Filter::pluck('name','name'), 'Occasion', ['class' => 'form-control select-filter'])}}
                    <input class="form-control select-filter" type="text" name="option11" id="option11" value="{{$option->occasion}}">
                </div>
            @endif
            @if(!empty($option->pattern))
                <div class="col-sm-12">

                    {{Form::select('filter12', \App\Filter::pluck('name','name'), 'Pattern', ['class' => 'form-control select-filter'])}}
                    <input class="form-control select-filter" type="text" name="option12" id="option12" value="{{$option->pattern}}">
                </div>
            @endif

            @if(!empty($option->style_Fit))
                <div class="col-sm-12">

                    {{Form::select('filter13', \App\Filter::pluck('name','name'), 'Style Fit', ['class' => 'form-control select-filter'])}}
                    <input class="form-control select-filter" type="text" name="option13" id="option13" value="{{$option->style_Fit}}">
                </div>
            @endif
            @if(!empty($option->product_type))
                <div class="col-sm-12">

                    {{Form::select('filter14', \App\Filter::pluck('name','name'), 'Product Type', ['class' => 'form-control select-filter'])}}
                    <input class="form-control select-filter" type="text" name="option14" id="option14" value="{{$option->product_type}}">
                </div>
            @endif
            @if(!empty($option->shoe_feel))
                <div class="col-sm-12">

                    {{Form::select('filter15', \App\Filter::pluck('name','name'), 'Shoe Feel', ['class' => 'form-control select-filter'])}}
                    <input class="form-control select-filter" type="text" name="option15" id="option15" value="{{$option->shoe_feel}}">
                </div>
            @endif

            @if(!empty($option->size_Range))
                <div class="col-sm-12">

                    {{Form::select('filter16', \App\Filter::pluck('name','name'), 'Size Range', ['class' => 'form-control select-filter'])}}
                    <input class="form-control select-filter" type="text" name="option16" id="option16" value="{{$option->size_Range}}">
                </div>
            @endif
            @if(!empty($option->sleeve))
                <div class="col-sm-12">

                    {{Form::select('filter17', \App\Filter::pluck('name','name'), 'Sleeve', ['class' => 'form-control select-filter'])}}
                    <input class="form-control select-filter" type="text" name="option17" id="option17" value="{{$option->sleeve}}">
                </div>
            @endif
            @if(!empty($option->surface))
                <div class="col-sm-12">

                    {{Form::select('filter18', \App\Filter::pluck('name','name'), 'Surface', ['class' => 'form-control select-filter'])}}
                    <input class="form-control select-filter" type="text" name="option18" id="option18" value="{{$option->surface}}">
                </div>
            @endif

            @if(!empty($option->tecnology))
                <div class="col-sm-12">

                    {{Form::select('filter19', \App\Filter::pluck('name','name'), 'Tecnology', ['class' => 'form-control select-filter'])}}
                    <input class="form-control select-filter" type="text" name="option19" id="option19" value="{{$option->tecnology}}">
                </div>
            @endif
            @if(!empty($option->zip_closure))
                <div class="col-sm-12">

                    {{Form::select('filter20', \App\Filter::pluck('name','name'), 'Zip Closure', ['class' => 'form-control select-filter'])}}
                    <input class="form-control select-filter" type="text" name="option20" id="option20" value="{{$option->zip_closure}}">
                </div>
            @endif
            @if(!empty($option->piece))
                <div class="col-sm-12">

                    {{Form::select('filter21', \App\Filter::pluck('name','name'), 'Pieces', ['class' => 'form-control select-filter'])}}
                    <input class="form-control select-filter" type="text" name="option21" id="option21" value="{{$option->piece}}">
                </div>
            @endif
{{--            <div class="col-sm-12">--}}
{{--                {{Form::select('custom_filter_1', \App\Filter::pluck('name','name') , ['class' => 'form-control select-filter'])}}--}}
{{--                <input class="form-control select-filter" type="text" name="custom_option_1" id="custom_option_1" value="" placeholder="Add Filter Value">--}}
{{--            </div>--}}
{{--            <div class="col-sm-12">--}}
{{--                {{Form::select('custom_filter_2', \App\Filter::pluck('name','name') , ['class' => 'form-control select-filter'])}}--}}
{{--                <input class="form-control select-filter" type="text" name="custom_option_2" id="custom_option_2" value="" placeholder="Add Filter Value">--}}
{{--            </div>--}}
{{--            <div class="col-sm-12">--}}
{{--                {{Form::select('custom_filter_3', \App\Filter::pluck('name','name') , ['class' => 'form-control select-filter'])}}--}}
{{--                <input class="form-control select-filter" type="text" name="custom_option_3" id="custom_option_3" value="" placeholder="Add Filter Value">--}}
{{--            </div>--}}
{{--            <div class="col-sm-12">--}}
{{--                {{Form::select('custom_filter_4', \App\Filter::pluck('name','name') , ['class' => 'form-control select-filter'])}}--}}
{{--                <input class="form-control select-filter" type="text" name="custom_option_4" id="custom_option_4" value="" placeholder="Add Filter Value">--}}
{{--            </div>--}}
{{--            <div class="col-sm-12">--}}
{{--                {{Form::select('custom_filter_5', \App\Filter::pluck('name','name') , ['class' => 'form-control select-filter'])}}--}}
{{--                <input class="form-control select-filter" type="text" name="custom_option_5" id="custom_option_5" value="" placeholder="Add Filter Value">--}}
{{--            </div>--}}

    @endif

    @endforeach


