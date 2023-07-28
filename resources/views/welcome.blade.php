@extends('layouts.app')


@push('scripts')
  <script src="{{ asset('js/welcome.js') }}" defer></script>
@endpush
@section('content')
  <div class="welcome d-flex align-items-center justify-content-center">
    <div class="text-center fisrt-div">
      <h1>Store Your Contacts Now</h1>

      @if (auth()->check())
        <a class="btn btn-lg btn-dark" href="/home">Get Started</a>
      @else
        <a class="btn btn-lg btn-dark" href="/login">Get Started</a>
      @endif

    </div>
  </div>

  <style>
    .welcome {
      height: calc(100vh - 80.6333px);
    }
  </style>
@endsection
