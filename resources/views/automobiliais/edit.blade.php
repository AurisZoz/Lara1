@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">Savininkų sąrašas</div>
                    <div class="card-body">
                       <form method="post" action="{{ route("automobiliais.update", $automobiliai->id) }}">
                           @csrf
                           @method('put')
                           <div class="mb-3">
                               <label class="form-label">Markė:</label>
                               <input class="form-control" name="marke" type="text" value="{{ $automobiliai->marke }}" required>
                           </div>
                           <div class="mb-3">
                               <label class="form-label">Modelis:</label>
                               <input class="form-control" name="modelis" type="text" value="{{ $automobiliai->modelis }}" required>
                           </div>
                           <div class="mb-3">
                               <label class="form-label">Numeris:</label>
                               <input class="form-control" name="numeris" type="text" value="{{ $automobiliai->numeris }}" required>
                           </div>
                           <button class="btn btn-success"> Išsaugoti</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
