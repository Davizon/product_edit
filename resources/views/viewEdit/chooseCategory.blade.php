@extends('layout.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Products</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table">
                @foreach($viewEdits as $viewEdit)
                    @if($viewEdit->user_id === auth::user()->id)
                    <tr>
                        <td><a href="/view_edits/{{$viewEdit->id}}"><img src="{{$viewEdit->detailed_image}}" width="120px" alt=""></a></td>
                        <td>{{var_export(substr($viewEdit->name, 0, 60), true).PHP_EOL}}</td>
                        <td class="actions">
                            @if($viewEdit->status_edit === 0)
                            <span class="review">Review</span>
                            @elseif($viewEdit->status_edit === 1)
                            <span class="edited"> Edited</span>
                            @endif
                            <a href="/view_edits/{{$viewEdit->id}}/edit">Edit</a><a href="/view_edits/{{$viewEdit->id}}/confirmDelete">Delete</a></td>
                    </tr>
                    @endif
                @endforeach
            </table>
        </div>
    </div>
@endsection
