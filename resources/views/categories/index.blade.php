<!-- resources/views/categories/index.blade.php -->
@extends('template.main')

@section('title', 'Categories List')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Categories</h2>
        </div>
        <div class="card-body">
            @if(count($categories) > 0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No categories found.</p>
            @endif
        </div>
    </div>
@endsection