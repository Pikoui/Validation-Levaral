@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Chambres</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Number</td>
          <td>Taken</td>
          <td>Booking</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($chambres as $chambre)
        <tr>
            <td>{{$chambre->id}}</td>
            <td>{{$chambre->type}}</td>
            <td>{{$chambre->number}}</td>
            <td>{{$chambre->taken}}</td>
            <td>{{$chambre->booking}}</td>
            <td>
                <a href="{{ route('chambres.edit',$chambre->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('chambres.destroy', $chambre->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div>
    <a style="margin: 19px;" href="{{ route('chambres.create')}}" class="btn btn-primary">Nouvelle chambre</a>
    </div>  
@endsection