@extends('layouts.app')

@section('content')
    <h3 class="book-new">Pridėti naują knygą</h3>
    <form method="post" action="{{ url("books") }}">
        {{ csrf_field() }}
        <input class="form-save" name="title" placeholder="title" value="{{ old('title') }}">
        <input class="form-save" name="pages" placeholder="pages" value="{{ old('pages') }}">
        <input class="form-save" name="isbn" placeholder="isbn" value="{{ old('isbn') }}">
        <input class="form-save" name="short_description" placeholder="short_description" value="{{ old('short_description') }}">
        <input class="form-save" name="author_id" placeholder="author_id" value="{{ old('author_id') }}">
        <button class="btn btn-success" type="submit">Saugoti</button>
    </form>
@endsection

<style>

    .book-new {
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