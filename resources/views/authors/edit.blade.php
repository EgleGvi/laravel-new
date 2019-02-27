@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Taisyti įrašą</h1>

        <form method="post" action="{{ url('authors', $author->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input name="name" placeholder="{{ __('Name') }}" value="{{ old('name', $author->name) }}">
            <input name="surname" placeholder="{{ __('Surname') }}" value="{{ old('surname', $author->surname) }}">
            <button type="submit">{{ __('Update') }}</button>
        </form>

        <button onclick="window.history.back();">{{ __('Grįžti') }}</button>
    </div>
@endsection