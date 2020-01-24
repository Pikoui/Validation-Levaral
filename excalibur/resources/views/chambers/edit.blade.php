@extends('base') 

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Modifier une chambre</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('chambres.update', $chambre->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

            <label for="type">Type</label>
                <input type="text" class="form-control" name="type" value={{ $chambre->type }} />
            </div>

                <label for="number">Nombres</label>
                <input type="text" class="form-control" name="number" value={{ $chambre->number }} />
            </div>

            <div class="form-group">
                <label for="taken">Prise :</label>
                <input type="text" class="form-control" name="taken" value={{ $chambre->taken }} />
            </div>

            <div class="form-group">
                <label for="booking">Réserver:</label>
                <input type="text" class="form-control" name="booking" value={{ $chambre->booking }} />
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</div>
@endsection