@extends('layouts.app')

@section('content')

	<div class="container">
        <p>
            {{ $data-> total() }} registros |
                pag {{ $data-> currentPage() }}
                de {{ $data-> lastPage() }}
        </p>                  
        <table class="table table-hover">
            <thead>
               	<th>IP</th>
                <th>MAC</th>
                <th>Fecha Creación</th>
            </thead>
                @foreach($data as $nodo)
                <tbody>
                   	<td>
                   		<p>{{ $nodo->nodo_ip }}</p>
                   	</td>
                   	<td>
                   		<p>{{ $nodo->mac }}</p>
                   	</td>
                   	<td>
                   		<p>{{ $nodo->created_at }}</p>
                   	</td>                   			
                </tbody>
                @endforeach  
        </table>
        {!! $data-> render() !!}
    </div>

@endsection	
