@extends('layouts/app')
@section('content')
    <div class="container">
        <table class="table table-bordered">
            <caption>
                <div class="btn-group" role="group">
                    <a href="{{url('characters/create')}}" type="button" class="btn btn-success">add</a>
                    <button type="button" class="btn btn-danger">delete</button>
                </div>
            </caption>
            <tr>
                <th><input type="checkbox" /></th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>DOB</th>
                <th>ID</th>
            </tr>
                @foreach($data as $user)
                <tr>
                    <td></td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->birth_date}}</td>
                    <td>{{$user->id}}</td>
                </tr>
                @endforeach

        </table>
    </div>
@endsection