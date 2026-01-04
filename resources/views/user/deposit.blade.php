
@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                Manual Deposit
            </div>

            <div class="card-body">
                <form method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Currency</label>
                        <select name="currency" class="form-select">
                            <option value="ETH">ETH</option>
                            <option value="USDT">USDT</option>
                            <option value="BTC">BTC</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <input type="number" step="0.0001" name="amount" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Transaction Reference</label>
                        <input type="text" name="tx_reference" class="form-control" placeholder="Hash / Note" required>
                    </div>

                    <button class="btn btn-primary w-100">Submit for Approval</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

