@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Automobilių sąrašas</div>
                    <div class="card-body">
                    <a href="{{ route('automobiliais.create') }}" class="btn btn-success float-end">Pridėti</a>
                        <table class="table">
                        <thead>
                                <tr>
                                    <th>Savininkai</th>
                                    <th>Markė</th>
                                    <th>Modelis</th>
                                    <th>Numeris</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <td>
                            @foreach($automobiliai->savininkai as $savininkais)
                                    {{ $savininkais->id }} {{ $savininkais->vardas }} {{ $savininkais->pavarde }}<br>
                            @endforeach
                            </td>
                            <td>{{ $automobiliai->marke }}</td>
                            <td>{{ $automobiliai->modelis }}</td>
                            <td>{{ $automobiliai->numeris }}</td>
                            <td>
                                    <a class="btn btn-info" href="{{ route('automobiliais.edit', $automobiliai->id) }}">Redaguoti</a>
                                </td>
                                <td>
                                    <form method="post" action="{{ route("automobiliais.destroy", $automobiliai->id) }}">
                                        @csrf
                                        @method("delete")
                                        <button class="btn btn-danger">Ištrinti</button>
                                    </form>
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
