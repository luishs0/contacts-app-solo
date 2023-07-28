@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Create New Contact</div>

          <div class="card-body">
            <form method="POST" action="{{ route('contacts.store') }}">
              @csrf

              <div class="row mb-3">
                <label for="name"
                  class="col-md-4 col-form-label text-md-right">Name</label>

                <div class="col-md-6">
                  <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" autocomplete="name" autofocus required>

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                <div class="col-md-6">
                  <input id="phone_number" type="phone_number"
                    class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" required>

                  @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Submit
                  </button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
