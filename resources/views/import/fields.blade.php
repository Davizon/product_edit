
<div class="col-sm-12">
    <label style="padding: 15px 15px 15px 0;" for="">Product Code:</label>
    <select class="form-control select-filter"   name="form_product_code" id="">
        <option value="">Choose Option...</option>
        @foreach($headings as $heading)
            <option value="{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}">{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}</option>
        @endforeach
    </select>
</div>

<div class="col-sm-12">
    <label style="padding: 15px 15px 15px 0;" for="">Category:</label>
    <select class="form-control select-filter"  name="form_category" id="">
        <option value="">Choose Option...</option>
        @foreach($headings as $heading)
            <option value="{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}">{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}</option>
        @endforeach
    </select>
</div>

<div class="col-sm-12">
    <label style="padding: 15px 15px 15px 0;" for="">Price:</label>
    <select class="form-control select-filter"  name="form_price" id="">
        <option value="">Choose Option...</option>
        @foreach($headings as $heading)
            <option value="{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}">{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}</option>
        @endforeach
    </select>
</div>

<div class="col-sm-12">
    <label style="padding: 15px 15px 15px 0;" for="">Weight:</label>
    <select class="form-control select-filter"  name="form_weight" id="">
        <option value="">Choose Option...</option>
        @foreach($headings as $heading)
            <option value="{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}">{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}</option>
        @endforeach
    </select>
</div>

<div class="col-sm-12">
    <label style="padding: 15px 15px 15px 0;" for="">Quantity:</label>
    <select class="form-control select-filter"  name="form_quantity" id="">
        <option value="">Choose Option...</option>
        @foreach($headings as $heading)
            <option value="{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}">{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}</option>
        @endforeach
    </select>
</div>

<div class="col-sm-12">
    <label style="padding: 15px 15px 15px 0;" for="">Main Image:</label>
    <select class="form-control select-filter"  name="form_main_image" id="">
        <option value="">Choose Option...</option>
        @foreach($headings as $heading)
            <option value="{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}">{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}</option>
        @endforeach
    </select>
</div>

<div class="col-sm-12">
    <label style="padding: 15px 15px 15px 0;" for="">Product Name:</label>
    <select class="form-control select-filter"  name="form_product_name" id="">
        <option value="">Choose Option...</option>
        @foreach($headings as $heading)
            <option value="{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}">{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}</option>
        @endforeach
    </select>
</div>

<div class="col-sm-12">
    <label style="padding: 15px 15px 15px 0;" for="">Description:</label>
    <select class="form-control select-filter"  name="form_description" id="">
        <option value="">Choose Option...</option>
        @foreach($headings as $heading)
            <option value="{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}">{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}</option>
        @endforeach
    </select>
</div>

<div class="col-sm-12">
    <label style="padding: 15px 15px 15px 0;" for="">Short Description:</label>
    <select class="form-control select-filter"  name="form_short_description" id="">
        <option value="">Choose Option...</option>
        @foreach($headings as $heading)
            <option value="{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}">{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}</option>
        @endforeach
    </select>
</div>

<div class="col-sm-12">
    <label style="padding: 15px 15px 15px 0;" for="">Meta Keywords:</label>
    <select class="form-control select-filter"  name="form_meta_keywords" id="">
        <option value="">Choose Option...</option>
        @foreach($headings as $heading)
            <option value="{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}">{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}</option>
        @endforeach
    </select>
</div>

<div class="col-sm-12">
    <label style="padding: 15px 15px 15px 0;" for="">Options:</label>
    <select class="form-control select-filter"  name="form_option" id="">
        <option value="">Choose Option...</option>
        @foreach($headings as $heading)
            <option value="{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}">{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}</option>
        @endforeach
    </select>
</div>

<div class="col-sm-12">
    <input style="width: 16%; display: inline-block;margin: 10px 0;" class="form-control" type="text" name="fields_aditional1" placeholder="Name Column">
    <select class="form-control select-filter"  name="form_aditional_1" id="">
        <option value="">Choose Option...</option>
        @foreach($headings as $heading)
            <option value="{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}">{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}</option>
        @endforeach
    </select>
</div>

<div class="col-sm-12">
    <input style="width: 16%; display: inline-block;margin: 10px 0;" class="form-control" type="text" name="fields_aditional2" placeholder="Name Column">
    <select class="form-control select-filter"  name="form_aditional_2" id="">
        <option value="">Choose Option...</option>
        @foreach($headings as $heading)
            <option value="{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}">{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}</option>
        @endforeach
    </select>
</div>

<div class="col-sm-12">
    <input style="width: 16%; display: inline-block;margin: 10px 0;" class="form-control" type="text" name="fields_aditional3" placeholder="Name Column">
    <select class="form-control select-filter"  name="form_aditional_3" id="">
        <option value="">Choose Option...</option>
        @foreach($headings as $heading)
            <option value="{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}">{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}</option>
        @endforeach
    </select>
</div>

<div class="col-sm-12">
    <input value="" style="width: 16%; display: inline-block;margin: 10px 0;" class="form-control" type="text" name="fields_aditional4" placeholder="Name Column">
    <select class="form-control select-filter"  name="form_aditional_4" id="" value="">
        <option value="">Choose Option...</option>
        @foreach($headings as $heading)
            <option value="{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}">{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}</option>
        @endforeach
    </select>
</div>

<div class="col-sm-12">
    <input value="" style="width: 16%; display: inline-block;margin: 10px 0;" class="form-control" type="text" name="fields_aditional5" placeholder="Name Column">
    <select class="form-control select-filter"  name="form_aditional_5" id="" value="">
        <option value="">Choose Option...</option>
        @foreach($headings as $heading)
            <option value="{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}">{{str_replace("_", " ", ucwords(str_replace("\"", "", $heading->head_excel)))}}</option>
        @endforeach
    </select>
</div>
