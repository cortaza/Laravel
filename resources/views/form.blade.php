@extends('layouts.structure')
@section('title','Form_program')
@section('content')
<div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Estado</th>
                                        <th>Duracion</th>
                                        <th>Id_semaforo</th> 
                                        <th colspan="2"><center>Acción</center></th>                                    
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse($programas as $programa)
                                    <tr>
                                        <th>{{$programa->codigo}}</th>
                                        <th>{{$programa->nombre}}</th>
                                        <th>{{$programa->estado}}</th>                           
                                        <th>{{$programa->duracion}}</th>
                                        <th>{{$programa->semaforos_id}}</th>
                                        <th><a href="" class="btn btn-info">Editar</a></th>
                                        <th><a href="{{route('deleteprogram', $programa->codigo )}}" class="btn btn-danger">Eliminar</a></th>     
                                    </tr>
                                    @empty
                                        <tr>
                                            <th><h3>No hay programas</h3></th>
                                        </tr>
                                    @endforelse
                                </tbody>                            
                            </table>
                        </div>                   
@endsection