{{-- resources/views/user/kyc.blade.php --}}
@extends('layouts.app')

@section('content')
<h4>KYC Verification</h4>

@if($kyc && $kyc->status === 'approved')
    <div class="alert alert-success">KYC Approved ✅</div>
@elseif($kyc && $kyc->status === 'pending')
    <div class="alert alert-warning">KYC Under Review</div>
@elseif($kyc && $kyc->status === 'rejected')
    <div class="alert alert-danger">Rejected: {{ $kyc->admin_note }}</div>
@endif

@if(!$kyc || $kyc->status !== 'approved')
<form method="POST" enctype="multipart/form-data">
@csrf

<div class="mb-2">
    <label>Full Name</label>
    <input name="full_name" class="form-control" required>
</div>

<div class="mb-2">
    <label>Document Type</label>
    <select name="document_type" class="form-select">
        <option>NIC</option>
        <option>Passport</option>
        <option>Driving License</option>
    </select>
</div>

<div class="mb-2">
    <label>Document Number</label>
    <input name="document_number" class="form-control" required>
</div>

<div class="mb-2">
    <label>Document Front</label>
    <input type="file" name="document_front" class="form-control" required>
</div>

<div class="mb-2">
    <label>Document Back (Optional)</label>
    <input type="file" name="document_back" class="form-control">
</div>

<div class="mb-2">
    <label>Selfie with Document</label>
    <input type="file" name="selfie" class="form-control" required>
</div>

<button class="btn btn-primary">Submit KYC</button>
</form>
@endif
@endsection
