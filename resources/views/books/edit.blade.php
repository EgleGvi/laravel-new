@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Taisyti įrašą</h1>

        <form method="post" action="{{ url('books', $book->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input name="title" placeholder="{{ __('Title') }}" value="{{ old('title', $book->title) }}">
            <input name="pages" placeholder="{{ __('Pages') }}" value="{{ old('pages', $book->pages) }}">
            <input name="isbn" placeholder="{{ __('ISBN') }}" value="{{ old('isbn', $book->isbn) }}">
            <input name="short_description" placeholder="{{ __('Short_description') }}" value="{{ old('short_description', $book->Short_description) }}">
            <button type="submit">{{ __('Update') }}</button>
        </form>

        <button onclick="window.history.back();">{{ __('Grįžti') }}</button>
    </div>
@endsection