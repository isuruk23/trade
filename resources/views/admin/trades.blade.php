@extends('layouts.app')

@section('content')
<h4 class="mb-4">Trade Details</h4>


<div class="table-responsive">
        <table class="table table-bordered mt-4 responsive-table">
             <thead class="table-light">
            <tr>
                <th>User</th>
                <th>Type</th>
                <th>Amount</th>
                <th>Margin</th>
                <th>Leverage</th>
                <th>Open Price</th>
                <th>Close Price</th>
                <th>Status</th>
                <th>PnL</th>
            </tr>
            </thead>
            @foreach($trades as $trade)
            <tr>
                <td>{{ $trade->user->name }}</td>
                <td>{{ ucfirst($trade->type) }}</td>
                <td>{{ $trade->amount }}</td>
                <td>{{ $trade->margin }}</td>
                <td>{{ $trade->leverage }}x</td>
                <td>{{ $trade->price }}</td>
                <td>{{ $trade->close_price ?? '-' }}</td>
                <td>{{ ucfirst($trade->status) }}</td>
                <td>
                    @if($trade->status === 'closed')
                        {{ $trade->profit_loss }}
                    @else
                        -
                    @endif
                </td>
            </tr>
            @endforeach
        </table>

    </div>

@endsection
