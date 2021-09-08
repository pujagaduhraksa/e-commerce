@extends('admin.index')

@section('title', 'Page Product')

@section('container')
    
    <h2 class="text-center my-4">Product Page</h2>

    <div class="container">
        <div class="col-md-12">

            <a href="/create" class="btn btn-primary my-3">Add Product</a>

            @if (session('status_add'))
                <div class="alert alert-success">
                    {{ session('status_add') }}
                </div>
            @endif

            @if (session('status_edit'))
                <div class="alert alert-warning">
                    {{ session('status_edit') }}
                </div>
            @endif

            @if (session('status_delete'))
                <div class="alert alert-danger">
                    {{ session('status_delete') }}
                </div>
            @endif

            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Drink</th>
                    <th>Desc</th>
                    <th>Price</th> 
                    <th>Aksi</th>              
                </tr>
                </thead>
                <tbody>
                    @foreach ($products as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('uploads/img/' . $p->image) }}" width="200px" height="200px">
                            </td>
                            <td>{{ $p->drink }}</td>
                            <td>{{ $p->desc }}</td>
                            <td>{{ $p->price }}</td>
                            <td>
                                <a href="/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                <form action="/delete/{{ $p->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection