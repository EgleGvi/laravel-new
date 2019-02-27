@extends('layouts.app')

@section('content')
    <h3 class="author-new">Pridėti naują autorių</h3>
    <form method="post" action="{{ url("authors") }}">
        {{ csrf_field() }}
        <input class="form-save" name="name" placeholder="name" value="{{ old('name') }}">
        <input class="form-save" name="surname" placeholder="surname" value="{{ old('surname') }}">
        <button class="btn btn-success" type="submit">Saugoti</button>
    </form>
@endsection

<style>

    .author-new {
        margin: 10px 10px 10px 0;
    }

    .btn-success {
        width: 250px;
        margin-top: 10px;
    }

    .form-save {
        height: 35px;
        border-radius: 5px;
        display: block;
        margin: 15px 5px 5px 0;
        width: 250px;
    }

</style>