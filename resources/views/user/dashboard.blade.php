@extends('layouts.app')

@section('content')
<h4 class="mb-4">User Dashboard</h4>

<div class="row g-3">
    <div class="col-md-3">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="text-muted">Available Balance</h6>
                <h3 class="text-success">{{ number_format($balance,4) }}</h3>
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
@endsection
