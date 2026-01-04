@extends('layouts.app')

@section('content')
<h4 class="mb-4">User Dashboard</h4>

<div class="row g-3">
    <div class="col-md-3">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="text-muted">Available Balance</h6>
                <h3 class="text-success">{{ number_format($balance) }} ETH</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="text-muted">Total Deposits</h6>
                <h3>{{ $deposits }}</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="text-muted">Withdrawals</h6>
                <h3>{{ $withdrawals }}</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="text-muted">Pending Requests</h6>
                <h3 class="text-warning">{{ $pending }}</h3>
            </div>
        </div>
    </div>
</div>

<div class="mt-4 d-flex gap-2">
    <a href="/deposit" class="btn btn-primary">Deposit</a>
    <a href="/withdraw" class="btn btn-danger">Withdraw</a>
</div>

<div class="row g-3 my-3">
    <div class="col-md-12">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="text-muted">Transaction</h6>
                <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Type</th>
                        <th>Currency</th>
                        <th>Amount</th>
                        <th>Reference</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($transactions as $tx)
                    <tr>
                        <td>
                            <span class="badge {{ $tx->type == 'deposit' ? 'bg-success':'bg-danger' }} position-relative">
                                {{ $tx->type }}
                            </span>
                        </td>
                        <td>{{ $tx->currency }}</td>
                        <td>{{ $tx->amount }}</td>
                        <td>{{ $tx->tx_reference }}</td>
                        <td> <span class="status-badge 
                                                {{ $tx->status == 'approved' ? 'status-completed' : ($tx->status == 'pending' ? 'status-pending' : 'status-rejected') }}">
                                                {{ ucfirst($tx->status) }}
                                            </span>
                         </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection
