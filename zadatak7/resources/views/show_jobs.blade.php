@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table" style="width: 400px">
                <thead>
                <tr>
                    <th scope="col">Job name</th>
                    <th scope="col">Number of workers</th>

                </tr>
                </thead>
                <tbody>
                @foreach($jobs as $job)
                    <tr>
                        <td>{{ $job->name }}</td>
                        <td>{{ $job->workers->count() }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
