@extends('layouts.internal')
@section('content')

<a href="{{route('cproducto.create')}}">Registrar Categoria</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre de la Categoria</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach($table as $row)
            <tr>
                <td>
                    <a href="{{route('cproducto.show', $row->id)}}">{{$row->nombre}}</a>
                </td>
               
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
