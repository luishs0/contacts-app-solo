@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">

      <div class="col-12 mb-3">
        <div class="card text-center">
          <div class="card-body">
            <h3 class="card-title text-capitalize"> {{ $contact->name }} </h3>
            <p class="m-2"> {{ $contact->phone_number }} </p>
          </div>
        </div>
      </div>

    </div>

  </div>
@endsection
