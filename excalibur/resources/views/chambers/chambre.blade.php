@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Ajouter une chambre</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="POST" action="{{ route('store') }}">
          @csrf
          <div class="form-group">
              <label for="perdu">Perdu</label>
              <input type="text" class="form-control" name="perdu"/>
          </div>
          <div class="form-group">
              <label for="tendre">Tendre</label>
              <input type="text" class="form-control" name="tendre"/>
          </div>
          <div class="form-group">
              <label for="promesse">Promesse</label>
              <input type="text" class="form-control" name="promesse"/>
          </div>                         
          <button type="submit" class="btn btn-primary-outline">Ajouter des chambres</button>
      </form>
  </div>
</div>
</div>
@endsection