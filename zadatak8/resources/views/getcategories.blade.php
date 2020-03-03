@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <ul>
                @foreach ($categories as $category)
                    <li>{{ $category->name }}</li>
                    <ul>
                        @foreach ($category->childrenCategories as $childCategory)
                            @include('partials.child_category', ['child_category' => $childCategory])
                        @endforeach
                    </ul>
                @endforeach
            </ul>
        </div>
    </div>

@stop
