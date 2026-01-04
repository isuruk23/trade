@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-dark text-white">
        Pending Transactions
    </div>

    <div class="card-body table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>User</th>
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
                    <td>{{ $tx->user->name }}</td>
                    <td>
                        <span class="badge {{ $tx->type == 'deposit' ? 'bg-success':'bg-danger' }}">
                            {{ ucfirst($tx->type) }}
                        </span>
                    </td>
                    <td>{{ $tx->currency }}</td>
                    <td>{{ $tx->amount }}</td>
                    <td>{{ $tx->tx_reference }}</td>
                    <td class="d-flex gap-2">
                        <form method="POST" action="{{ route('admin.tx.approve',$tx->id) }}">
                            @csrf
                            <button class="btn btn-success btn-sm">Approve</button>
                        </form>

                        <form method="POST" action="{{ route('admin.tx.reject',$tx->id) }}">
                            @csrf
                            <button class="btn btn-outline-danger btn-sm">Reject</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
