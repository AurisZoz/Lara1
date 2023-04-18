@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Savininkų sąrašas</div>
                    <div class="card-body">
                        <div class="clearfix">
                            <a href=" {{ route('savininkai.create') }}" class="btn btn-success float-end">Pridėti</a>
                            </div>
                        <form method="post" action="{{ route("savininkai.search") }}">
                            @csrf
                            
                            <label class="form-label">Vardas</label>
                                <input class="form-control" name="vardas" value="{{ $filter->vardas }}" >
                            </div>
                            <label class="form-label">Pavardė</label>
                                <input class="form-control" name="pavarde" value="{{ $filter->pavarde }}" >
                            </div>
                            <button class="btn btn-info">Ieškoti</button>
                        </form>
                        <hr>
                        <table class="table">
                        <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Vardas</th>
                                    <th>Pavardė</th>
                                    <th>Markė</th>
                                    <th>Modelis</th>
                                    <th>Numeris</th>   
                                    <th>Veiksmai</th>
                                    </tr>
                            </thead>
                            <tbody>
                            @foreach($savininkai as $savininkais)
                            <tr>
                            <td>{{ $savininkais->id }}</td>
                            <td>{{ $savininkais->vardas }}</td>
                            <td>{{ $savininkais->pavarde }}</td>
            
                            <td>{{ $savininkais->automobiliai->marke }}</td>
                            <td>{{ $savininkais->automobiliai->modelis }}</td>
                            <td>{{ $savininkais->automobiliai->numeris }}</td>

                            <td>
                                    <a class="btn btn-info" href="{{ route('savininkai.edit', $savininkais->id) }}">Redaguoti</a>
                                    <a class="btn btn-danger" href="{{route('savininkai.delete',$savininkais->id)}}">Ištrinti</a>
                            </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
