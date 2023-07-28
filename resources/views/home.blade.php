@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">

      @forelse ($contacts as $contact)
        <div class="col-md-4 mb-3">
          <div class="card text-center">
            <div class="card-body">
              <h3 class="card-title text-capitalize"> <a class="text-decoration-none" href="{{ route('contacts.show', $contact->id) }}">{{ $contact->name }}</a>  </h3>
              <p class="m-2"> {{ $contact->phone_number }} </p>
              <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-secondary mb-2">Edit Contact</a>
              <form method="POST" action="{{ route('contacts.destroy', $contact->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2" >Delete Contact</button>
              </form>
            </div>
          </div>
        </div>
      @empty
        <div class="col-md-4 mx-auto">
          <div class="card card-body text-center">
            <p>No contacts saved yet!</p>
            <a href='{{ route('contacts.create') }}'>Add One!</a>
          </div>
        </div>
      @endforelse

    </div>



  </div>
@endsection
