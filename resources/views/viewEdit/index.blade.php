@extends('layout.base')

@section('content')
    <?php $filter_option = $_GET['filter_option'];?>
    <div class="row head-options">
        <div class="col-sm-4">
            <h1>Products</h1>
        </div>

        <div class="filter col-sm-4">
            <h5>Status:</h5>
            <div class="filter option">
                <form action="" method="GET">
                    <select class="" name="filter_option" id="filter_option">
                        <option  value="0">Review</option>
                        <option  value="1">Edited</option>
                    </select>
                    <button class="btn-delete" type="submit"><i style="color: #2a9055" class="fas fa-sync-alt"></i></button>
                </form>
            </div>
        </div>
        <div class="col-sm-4 text-right">
            <h3>Products: {{count(\App\ViewEdit::all()->where('status_edit', $filter_option)->where('user_id', Auth::user()->id))}}</h3>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table">
                @foreach($viewEdits as $viewEdit)
{{--                    @if($viewEdit->user_id === auth::user()->id)--}}

                    @if($viewEdit->status_edit == $filter_option)
                    <tr>
                        <td><img src="{{$viewEdit->detailed_image}}" width="120px" alt=""></td>
                        <td>{{substr($viewEdit->product_name, 0, 60)}}</td>
                        <td class="actions">
                            @if($viewEdit->status_edit === 0)
                            <span class="review">Review</span>
                            @elseif($viewEdit->status_edit === 1)
                            <span class="edited"> Edited</span>
                            @endif
                            <a href="/view_edits/{{$viewEdit->id}}/edit">Edit</a>
                                <form class="form-delete" action="/view_edits/{{$viewEdit->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-delete" type="submit"><i style="color: #c71e1e" class="fas fa-trash-alt"></i></button>
                                </form>
                        </td>
                    </tr>
                    @endif
{{--                    @endif--}}

                @endforeach
            </table>
        </div>
    </div>
    {{$viewEdits->links()}}

@endsection
