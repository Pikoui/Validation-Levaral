@extends('layouts.app') 

@section('content')
    <form id="form" method="POST" action="/store">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">

            <label for="type">Type</label>
            <input type="text" class="form-control" id="type1" name="type" required>

            <label for="number">Number</label>
            <input type="text" class="form-control" id="number1" name="number" required>

            <label for="taken">Taken</label>
            <input type="number" class="form-control" id="taken1" name="taken" required>

            <label for="booking">Booking</label>
            <input type="number" class="form-control" id="booking1" name="booking" required>
                              


        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
@endsection