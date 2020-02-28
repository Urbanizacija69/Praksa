@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table" style="width: 400px">
                <thead>
                <tr>
                    <th scope="col">Name of Worker</th>
                    <th scope="col">Workers smallest salary</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$workers->firstname}} {{$workers->lastname }}</td>
                    <td>{{$workers->salary}}$</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
