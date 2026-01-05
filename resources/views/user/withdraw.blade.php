@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-danger text-white">
                Withdrawal Request
            </div>

            <div class="card-body">
                <form method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Currency</label>
                        <select name="currency" class="form-select">
                            <option value="ETH">ETH</option>
                            <option value="USDT">USDT</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <input type="number" step="0.0001" name="amount" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Wallet Address</label>
                        <input type="text" name="wallet" class="form-control" required>
                    </div>

                    <div class="alert alert-warning small">
                        Withdrawal will be processed after admin approval.
                    </div>

                    
                    @kycPending           
                        <button class="btn btn-danger w-100" disabled>Request Withdrawal</button>
                    @else
                        <button class="btn btn-danger w-100">Request Withdrawal</button>
                    @endkycPending
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
