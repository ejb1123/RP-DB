@extends('layouts/app')
@section('content')
    <div class="container">
        <table class="table table-bordered">
            <caption>
                <div class="btn-group" role="group">
                    <a href="{{url('/users/create')}}" type="button" class="btn btn-success">add</a>
                    <button type="button" class="btn btn-danger">delete</button>
                </div>
            </caption>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>SteamID</th>
            </tr>
            @foreach($data as $h)
                <tr>
                    <td> {{$h->name}}</td>
                    <td> {{$h->email}} </td>
                    <td> empty</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection