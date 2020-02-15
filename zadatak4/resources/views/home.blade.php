@extends('layouts.app')

@section('pageTitle', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of project</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th width="30%">Project name:</th>
                            <th width="30%">Project description:</th>
                            <th width="30%">Project created:</th>

                        </tr>
                        @foreach($datas as $data)
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->description}}</td>
                                <td>{{$data->date_started}}</td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
