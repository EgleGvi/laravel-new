@extends('layouts.app')

@section('content')
    <a class="btn btn-secondary" href="{{url('authors/create')}}">Create new</a>
    <table class="table table-bordered">
        <tr>
            <th><h3>Id</h3></th>
            <th><h3>Name</h3></th>
            <th><h3>Surname</h3></th>
            <th>Action</th>
        </tr>
        @foreach ($authors as $key => $value)
            <tr>
                <td><a href="{{url('/authors', $value->id)}}">{{$value->id}}</a></td>
                <td>{{$value->name}}</td>
                <td>{{$value->surname}}</td>
                <td>
                    <a class="btn btn-primary" href="{{url('authors', [$value->id, 'edit'])}}">Edit</a>
                    <form action="{{ url('authors', [$value->id]) }}" method="post">
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
