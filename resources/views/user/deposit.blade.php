
@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
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
                            @foreach($coins as $coin)
                            <option value="{{ $coin->id }}">{{ $coin->symbol }}</option>
                            @endforeach
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

                   
                     @kycPending           
                         <button class="btn btn-primary w-100" disabled>Submit for Approval</button>
                    @else
                         <button class="btn btn-primary w-100">Submit for Approval</button>
                    @endkycPending
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

