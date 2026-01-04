@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h4>ETX Leveraged Trading</h4>

    <div class="alert alert-info">
        Current ETX Price: <strong>{{ $coin->price }} USD</strong>
    </div>
    {{-- Success Message --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Error Messages --}}
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <form method="POST">
        @csrf
        <input type="hidden" name="coin_id" value="{{ $coin->id }}">

        <div class="mb-3">
            <label>Trade Type</label>
            <select name="type" class="form-select">
                <option value="buy">Buy (Long)</option>
                <option value="sell">Sell (Short)</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Amount</label>
            <input type="number"  name="amount" class="form-control" placeholder="Your Amount">
        </div>

        <div class="mb-3">
            <label>Margin</label>
            <input type="number" step="0.00000001" name="margin" class="form-control" placeholder="Your margin">
        </div>

        <div class="mb-3">
            <label>Leverage</label>
            <select name="leverage" class="form-select">
                <option value="1">1x</option>
                <option value="2">2x</option>
                <option value="5">5x</option>
                <option value="10">10x</option>
                <option value="20">20x</option>
            </select>
        </div>

        <div class="mb-3">
            <div class="alert alert-warning">
                Trade Size = Margin × Leverage
            </div>
        </div>

        <button class="btn btn-success w-100">Place Trade</button>
    </form>
    <hr>
    <h4>My Trades</h4>
    <div class="table-responsive">
     <table class="table table-bordered table-striped mt-3 w-100">
        <thead>
            <tr>
                <th>Coin</th>
                <th>Type</th>
                <th>Leverage</th>
                <th>Amount</th>
                <th>Open Price</th>
                <th>Close Price</th>
                <th>Status</th>
                <th>PnL</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($trades as $trade)
                <tr>
                    <td>{{ $trade->coin->symbol }}</td>
                    <td>{{ ucfirst($trade->type) }}</td>
                    <td>{{ $trade->leverage }}x</td>
                    <td>{{ $trade->amount }}</td>
                    <td>{{ $trade->price }}</td>
                    <td>{{ $trade->close_price ?? '-' }}</td>
                    <td>{{ ucfirst($trade->status) }}</td>
                    <td class="{{ ($trade->profit_loss ?? 0) >= 0 ? 'text-success' : 'text-danger' }}">
                        {{ $trade->profit_loss ?? '-' }}
                    </td>
                    <td>
                        @if($trade->status === 'open')
                            <form method="POST" action="{{ route('trades.close', $trade->id) }}">
                                @csrf
                                <button class="btn btn-sm btn-warning">Close</button>
                            </form>
                        @else
                            -
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="text-center">No trades found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
</div>

@endsection
