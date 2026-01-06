{{-- resources/views/admin/kyc.blade.php --}}
@extends('layouts.app')

@section('content')
<h4>KYC Requests</h4>

<table class="table table-bordered">
<tr>
    <th>User</th>
    <th>Document</th>
    <th>Status</th>
    <th>Action</th>
</tr>

@foreach($kycs as $k)
<tr>
    <td>{{ $k->user->email }}</td>
    <td>
        <a href="{{ asset('public/'.$k->document_front) }}" target="_blank">Front</a> |
        <a href="{{ asset('public/'.$k->selfie) }}" target="_blank">Selfie</a>
    </td>
    <td>{{ ucfirst($k->status) }}</td>
    <td>
        @if($k->status=='pending')
        <form method="POST" action="{{ route('admin.kyc.approve',$k->id) }}">
            @csrf
            <button class="btn btn-success btn-sm">Approve</button>
        </form>
        @endif
    </td>
</tr>
@endforeach
</table>
@endsection
@section('script')
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

@endsection
