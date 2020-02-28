@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <table class="table" style="width: 150px">
            <thead>
            <tr>
                <th scope="col">Average Salary</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Average salary for {{$number}} workers is {{$salary}}$</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
