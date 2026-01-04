@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h4>ETX Coin Management</h4>

    <form method="POST">
        @csrf
        <div class="row">
            <div class="col"><input name="symbol" class="form-control" placeholder="Symbol"></div>
            <div class="col"><input name="name" class="form-control" placeholder="Coin Name"></div>
            <div class="col"><input name="price" class="form-control" placeholder="Price"></div>
            <div class="col"><input name="total_supply" class="form-control" placeholder="Supply"></div>
            <div class="col"><button class="btn btn-primary">Add Coin</button></div>
        </div>
    </form>
    <div class="table-responsive">
    <table class="table table-bordered mt-4">
        <tr><th>Symbol</th><th>Name</th><th>Price</th><th>Supply</th><th>Action</th></tr>
        @foreach($coins as $coin)
        <tr>
            <td>{{ $coin->symbol }}</td>
            <td>{{ $coin->name }}</td>
            <td>{{ $coin->price }}</td>
            <td>{{ $coin->total_supply }}</td>
            <td>
                <form action="{{ route('admin.coins.updatePrice', $coin->id) }}" method="POST" class="d-flex">
                    @csrf
                    <input type="number" step="0.0001" name="price" value="{{ $coin->price }}" class="form-control form-control-sm me-2" required>
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
</div>
@endsection
