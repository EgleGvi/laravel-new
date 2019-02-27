@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ištrinti įrašą</h1>

        <form method="post" action="{{ url('books', $book->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <div>id: {{$book->id}}</div>
            <div>Title: {{$book->title}}</div>
            <div>pages: {{$book->pages}}</div>
            <div>isbn: {{$book->isbn}}</div>
            <div>short_description: {{$book->short_description}}</div>

            <button type="submit">Trinti</button>
        </form>

        <button onclick="window.history.back();">Grįžti atgal</button>
    </div>
@endsection