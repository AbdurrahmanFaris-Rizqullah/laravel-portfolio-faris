@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Portfolios</h1>
        <a href="{{ route('portfolios.create') }}" class="btn btn-primary">Create New Portfolio</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Image</th>
                    <th>Klasifikasi</th>
                    <th>Desc</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($portfolios as $portfolio)
                    <tr>
                        <td>{{ $portfolio->portfolio_id }}</td>
                        <td>{{ $portfolio->judul }}</td>
                        <td><img src="{{ $portfolio->image }}" alt="{{ $portfolio->judul }}" width="50"></td>
                        <td>{{ $portfolio->klasifikasi }}</td>
                        <td>{{ $portfolio->desc }}</td>
                        <td>
                            <a href="{{ route('portfolios.edit', $portfolio->portfolio_id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('portfolios.destroy', $portfolio->portfolio_id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
