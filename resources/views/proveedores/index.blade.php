@extends('layouts.internal')
@section('content')

<a href="{{route('proveedores.create')}}">Registrar Proveedor</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre Proveedor</th>
            <th>Empresa</th>
            <th>Telefono</th>
            <th>Correo</th>
           
          
        </tr>
    </thead>
    <tbody>
        @foreach($tableproveedores as $rowproveedores)
            <tr>
                <td>
                    <a href="{{route('proveedores.show', $rowproveedores->id)}}">{{$rowproveedores->nombre}}</a>
                </td>
                <td>
                    <a href="{{route('proveedores.show', $rowproveedores->id)}}">{{$rowproveedores->empresa}}</a>
                </td>

                
                <td>
                    <a href="{{route('proveedores.show', $rowproveedores->id)}}">{{$rowproveedores->telefono}}</a>
                </td>
                <td>
                    <a href="{{route('proveedores.show', $rowproveedores->id)}}">{{$rowproveedores->email}}</a>
                </td>
              
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
