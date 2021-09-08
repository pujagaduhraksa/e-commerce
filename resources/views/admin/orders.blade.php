@extends('admin.index')

@section('title', 'Orders Product')

@section('container')

    <h2>Orders Table</h2>

    <div class="container my-3">
        <table class="table">
            <thead class="table-light">
              <tr>
                  <th>#</th>
                  <th>Transaction_id</th>
                  <th>Product Name</th>
                  <th>Qty</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($transaction_detail as $detail)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $detail->transaction_id }}</td>
                        <td>{{ $detail->product->drink}}</td>
                        <td>{{ $detail->qty }}</td>
                    </tr>      
                @endforeach
            </tbody>
        </table>
    </div>

@endsection