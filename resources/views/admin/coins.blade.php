@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h4>ETX Coin Management</h4>

    <form method="POST">
        @csrf
        <div class="row g-2">
            <div class="col-12 col-md-2">
                <input name="symbol" class="form-control" placeholder="Symbol">
            </div>

            <div class="col-12 col-md-3">
                <input name="name" class="form-control" placeholder="Coin Name">
            </div>

            <div class="col-12 col-md-2">
                <input name="price" class="form-control" placeholder="Price">
            </div>

            <div class="col-12 col-md-3">
                <input name="total_supply" class="form-control" placeholder="Supply">
            </div>

            <div class="col-12 col-md-2 d-grid">
                <button class="btn btn-primary">Add Coin</button>
            </div>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered mt-4 responsive-table">
            <thead class="table-light">
                <tr>
                    <th>Symbol</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Supply</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($coins as $coin)
                <tr>
                    <td>{{ $coin->symbol }}</td>
                    <td>{{ $coin->name }}</td>
                    <td>{{ $coin->price }}</td>
                    <td>{{ $coin->total_supply }}</td>
                    <td>
                        <form action="{{ route('admin.coins.updatePrice', $coin->id) }}"
                            method="POST"
                            class="d-flex flex-column flex-md-row gap-1">
                            @csrf
                            <input type="number"
                                step="0.0001"
                                name="price"
                                value="{{ $coin->price }}"
                                class="form-control form-control-sm"
                                required>

                            <button type="submit"
                                    class="btn btn-sm btn-primary">
                                Update
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    </div>
</div>
@endsection
