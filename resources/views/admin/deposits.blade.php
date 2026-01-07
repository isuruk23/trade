@extends('layouts.app')

@section('content')
<h4 class="mb-4">Deposit Details</h4>

<div class="card shadow-sm">
    <div class="card-body table-responsive">
        <form method="GET" class="row g-2 mb-3">
        <div class="col-md-3">
            <input type="date" name="from" class="form-control" value="{{ request('from') }}" placeholder="From">
        </div>
        <div class="col-md-3">
            <input type="date" name="to" class="form-control" value="{{ request('to') }}" placeholder="To">
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary w-100">Filter</button>
        </div>
        <div class="col-md-2">
            <a href="{{ url()->current() }}" class="btn btn-secondary w-100">Reset</a>
        </div>
    </form>

        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>User</th>
                    <th>Amount</th>
                    <th>Currency</th>
                    <th>Reference</th>
                    <th>Status</th>
                    <th>Admin Note</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($deposits as $tx)
                <tr>
                    <td>{{ $tx->user->name }}</td>
                    <td>{{ $tx->amount }}</td>
                    <td>{{ $tx->symbol }}</td>
                    <td>{{ $tx->tx_reference }}</td>
                    <td>
                        <span class="badge 
                            {{ $tx->status=='pending'?'bg-warning':($tx->status=='approved'?'bg-success':'bg-danger') }} position-relative">
                            {{ ucfirst($tx->status) }}
                        </span>
                    </td>
                    <td>{{ $tx->admin_note ?? '-' }}</td>
                    <td class="d-flex gap-2">
                        @if($tx->status=='pending')
                        <form method="POST" action="{{ route('admin.tx.approve',$tx->id) }}">
                            @csrf
                            <button class="btn btn-success btn-sm">Approve</button>
                        </form>

                        <form method="POST" action="{{ route('admin.tx.reject',$tx->id) }}">
                            @csrf
                            <input type="text" name="note" placeholder="Note" class="form-control form-control-sm mb-1">
                            <button class="btn btn-outline-danger btn-sm">Reject</button>
                        </form>
                        @else
                        -
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
