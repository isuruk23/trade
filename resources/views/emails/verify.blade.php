@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Verify Your Email Address</h4>

    @if (session('resent'))
        <div class="alert alert-success">
            A new verification link has been sent to your email.
        </div>
    @endif

    <p>
        Before proceeding, please check your email for a verification link.
        If you did not receive the email,
    </p>

    <form method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="btn btn-primary">
            click here to request another
        </button>
    </form>
</div>
@endsection
