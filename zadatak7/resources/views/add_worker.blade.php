@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card" style="width: 500px">
                <div class="card-header">Add worker</div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form" action="{{route('add_worker')}}" method="post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <div class="form-group">

                            <label for="firstname">First name:</label>
                            <input type="text" id="firstname" name="firstname" class="form-control" required>
                           <br>

                            <label for="lastname">Last name:</label>
                            <input type="text" id="lastname" name="lastname" class="form-control" required>
                            <br>

                            <label for="id_job">Job:</label>
                            <select class="form-control" id="id_job" name="id_job" required>
                                @foreach($jobs as $job)
                                    <option value="{{$job->id_job}}">{{$job->name}}</option>
                                    @endforeach
                            </select><br>

                            <label for="salary">Salary:</label>
                            <input type="number" id="salary" name="salary" class="form-control " required>
                            <br>

                            <label for="birthday">Birthday:</label>
                            <input type="date" id="birthday" name="birthday" class="form-control" required>
                           <br>

                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                            <br>

                            <label for="color">Color:</label>
                            <input type="color" id="color" name="color" class="form-control" required>
                            <br>

                            <button type="submit" class="btn btn-primary">Send</button>
                            <button type="reset" class="btn btn-primary">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
