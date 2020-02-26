@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Job</th>
                    <th scope="col">Email</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Color</th>
                </tr>
                </thead>
                <tbody>
                @foreach($workers as $worker)
                <tr>
                        <td>{{$worker->id_worker}}</td>
                        <td>{{$worker->firstname}}</td>
                        <td>{{$worker->lastname}}</td>
                        <td>{{$worker->job->name}}</td>
                        <td>{{$worker->email}}</td>
                        <td>{{$worker->salary}}$</td>
                        <td>{{$worker->birthday}}</td>
                        <td style="background-color: {{$worker->color}}"></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
