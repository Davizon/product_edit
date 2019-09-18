@extends('layout.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Send Report {{$report->title}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports/{{$report->id}}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/expense_reports/{{$report->id}}/sendMail" method="POST">
                @csrf
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email">
                <button class="btn btn-primary" type="submit">Send Mail</button>
            </form>
        </div>
    </div>
@endsection
