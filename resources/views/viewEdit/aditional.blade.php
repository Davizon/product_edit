@foreach($aditionals as $aditional)
    @if($editProduct->product_code === $aditional->product_code)
            @if(!empty($aditional->extra_1))
                <div class="col-sm-12">
                    <label class="custom-label" for="">Extra: </label>
{{--                    {{Form::select('aditional1', \App\Aditional::all('extra_1'), null, ['class' => 'form-control select-filter'])}}--}}
                    <input class="form-control select-filter" type="text" name="extra1" id="extra1" value="{{$aditional->extra_1}}">
                </div>
            @endif
            @if(!empty($aditional->extra_2))
                <div class="col-sm-12">
                    <label class="custom-label" for="">Extra: </label>
{{--                    {{Form::select('aditional2', \App\Aditional::all('extra_2'), 'Size', ['class' => 'form-control select-filter'])}}--}}
                    <input class="form-control select-filter" type="text" name="extra2" id="extra2" value="{{$aditional->extra_2}}">
                </div>
            @endif
            @if(!empty($aditional->extra_3))
                <div class="col-sm-12">
                    <label class="custom-label" for="">Extra: </label>
{{--                    {{Form::select('aditional3', \App\Aditional::all('extra_3'), 'Collar', ['class' => 'form-control select-filter'])}}--}}
                    <input class="form-control select-filter" type="text" name="extra4" id="extra3" value="{{$aditional->extra_3}}">
                </div>
            @endif

        @if(!empty($aditional->extra_4))
            <div class="col-sm-12">
                <label class="custom-label" for="">Extra: </label>
{{--                {{Form::select('aditional4', \App\Aditional::all('extra_4'), 'Best For', ['class' => 'form-control select-filter'])}}--}}
                <input class="form-control select-filter" type="text" name="extra4" id="extra4" value="{{$aditional->extra_4}}">
            </div>
        @endif
        @if(!empty($aditional->extra_5))
            <div class="col-sm-12">
                <label class="custom-label" for="">Extra: </label>
{{--                {{Form::select('aditional5', \App\Aditional::all('extra_5'), 'Brand', ['class' => 'form-control select-filter'])}}--}}
                <input class="form-control select-filter" type="text" name="extra5" id="extra5" value="{{$aditional->extra_5}}">
            </div>
        @endif
        @if(!empty($aditional->extra_6))
            <div class="col-sm-12">
                <label class="custom-label" for="">Extra: </label>
{{--                {{Form::select('aditional6', \App\Aditional::all('extra_6'), 'Closure Type', ['class' => 'form-control select-filter'])}}--}}
                <input class="form-control select-filter" type="text" name="extra6" id="extra6" value="{{$aditional->extra_6}}">
            </div>
        @endif

        @if(!empty($aditional->extra_7))
            <div class="col-sm-12">
                <label class="custom-label" for="">Extra: </label>
{{--                {{Form::select('aditional7', \App\Aditional::all('extra_7'), 'Features', ['class' => 'form-control select-filter'])}}--}}
                <input class="form-control select-filter" type="text" name="extra7" id="extra7" value="{{$aditional->extra_7}}">
            </div>
        @endif
        @if(!empty($aditional->extra_8))
            <div class="col-sm-12">
                <label class="custom-label" for="">Extra: </label>
{{--                {{Form::select('aditional8', \App\Aditional::all('extra_8'), 'Gender', ['class' => 'form-control select-filter'])}}--}}
                <input class="form-control select-filter" type="text" name="extra8" id="extra8" value="{{$aditional->extra_8}}">
            </div>
        @endif
        @if(!empty($aditional->extra_9))
            <div class="col-sm-12">
                <label class="custom-label" for="">Extra: </label>
{{--                {{Form::select('aditional9', \App\Aditional::all('extra_9'), 'Length', ['class' => 'form-control select-filter'])}}--}}
                <input class="form-control select-filter" type="text" name="extra9" id="extra9" value="{{$aditional->extra_9}}">
            </div>
        @endif

            @if(!empty($aditional->extra_10))
                <div class="col-sm-12">
                    <label class="custom-label" for="">Extra: </label>
{{--                    {{Form::select('aditional10', \App\Aditional::all('extra_10'), 'Material', ['class' => 'form-control select-filter'])}}--}}
                    <input class="form-control select-filter" type="text" name="extra10" id="extra10" value="{{$aditional->extra_10}}">
                </div>
            @endif

    @endif

    @endforeach


