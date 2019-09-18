<?php
foreach ($exports as $export){
    $replaceName = explode("\",", $export->aditional_column_name );
    $clearName = str_replace("\"", "", $replaceName);
    $countName = count($clearName);
    $replaceValue = explode("\",", $export->aditional_column_value );
    $clearValue = str_replace("\"", "", $replaceValue);
    $countValue = count($clearValue);
}
?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Product Code</th>
        <th>Language</th>
        <th>Category</th>
        <th>List Price</th>
        <th>Price</th>
        <th>Weight</th>
        <th>Quantity</th>
        <th>Detailed image</th>
        <th>Product name</th>
        <th>Description</th>
        <th>Meta keywords</th>
        <th>Meta description</th>
        <th>Options</th>
        <th>Short description</th>
        <th>Status</th>
        <th>Vendor</th>
        <th>Brand</th>
        <th>{{$clearName[0]}}</th>
        <th>{{$clearName[1]}}</th>
        <th>{{$clearName[2]}}</th>
        <th>{{$clearName[3]}}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($exports as $export)

    <tr>
        <td>{{$export->product_code}}</td>
        <td>en</td>
        @php $categoryClear = str_replace("//////", "",$export->category) @endphp
        <td>{{$categoryClear}}</td>
        <td>0</td>
        <td>{{$export->price}}</td>
        <td>{{$export->weight}}</td>
        <td>{{$export->quantity}}</td>
        <td>{{$export->detailed_image}}</td>
        <td>{{$export->product_name}}</td>
        <td>{{$export->description}}</td>
        <td>{{$export->meta_keywords}}</td>
        <td>{{$export->meta_description}}</td>
        <td>{{$export->options}}</td>
        <td>{{$export->short_description}}</td>
        <td>{{$export->status}}</td>
        <td>{{$export->vendor}}</td>
        <td>{{$export->brand}}</td>
{{--        <td>{{$export->$clearName[0]}}</td>--}}
{{--        <td>{{$export->$clearName[1]}}</td>--}}
{{--        <td>{{$export->$clearName[2]}}</td>--}}
{{--        <td>{{$export->$clearName[3]}}</td>--}}
{{--        <td>{{$export->$clearName[4]}}</td>--}}

        <td>{{$clearValue[0]}}</td>
        <td>{{$clearValue[1]}}</td>
        <td>{{$clearValue[2]}}</td>
        <td>{{$clearValue[3]}}</td>



    </tr>

    @endforeach
    </tbody>
</table>

