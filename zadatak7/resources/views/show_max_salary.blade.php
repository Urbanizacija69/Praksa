@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table" style="width: 400px">
                <thead>
                <tr>
                    <th scope="col">Name of Worker</th>
                    <th scope="col">Workers largest salary</th>

                </tr>
                </thead>
                <tbody>
                @foreach($workers as $worker)
                    <tr>
                        <td>{{$worker->firstname}} {{$worker->lastname }}</td>
                        <td>{{$worker->salary}}$</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
