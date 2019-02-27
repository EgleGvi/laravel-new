@extends('layouts.app')

@section('content')
    <a class="btn btn-secondary" href="{{url('books/create')}}">Create new</a>
    <table class="table table-bordered">
        <tr>
            <th><h3>Id</h3></th>
            <th><h3>Title</h3></th>
            <th><h3>Pages</h3></th>
            <th><h3>ISBN</h3></th>
            <th><h3>Short description</h3></th>
            <th><h3>Author Id</h3></th>
            <th><h3>Action</h3></th>
        </tr>
        @foreach ($books as $key => $value)
            <tr>
                <td><a href="{{url('/books', $value->id)}}">{{$value->id}}</a></td>
                <td>{{$value->title}}</td>
                <td>{{$value->pages}}</td>
                <td>{{$value->isbn}}</td>
                <td>{{$value->short_description}}</td>
                <td>{{$value->author_id}}</td>
                <td>
                    <a class="btn btn-primary" href="{{url('books', [$value->id, 'edit'])}}">Edit</a>
                    <form action="{{ url('books', [$value->id]) }}" method="post">
                        <input onclick="return confirm('Are you sure?')" class="btn btn-danger" type="submit" value="Delete" />
                        {!! method_field('delete') !!}
                        {!! csrf_field() !!}
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

<style>
    .btn-primary {
        width: 67px;
        float: left;
    }

    table {
        text-align: center;
    }

    .btn-secondary {
        width: 150px;
        margin: 10px 10px 10px 0;
    }

</style>
