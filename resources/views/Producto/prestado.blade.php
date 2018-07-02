@extends('layouts.app')
@section('content')
		0 no publicado
		1 publicado
		2 pendiente
		3 rechazado
		4 en prestamo
		@foreach($prod as $prods)		
		@if ( (Auth::user()->id == $prods->dueno)&&($prods->estado == 4) )
			<hr>
			{{$prods->nombre}} <br>
			{{$prods->descripcion}} <br>
			{{$prods->area}} <br>
			{{$prods->estado}}
			{{$prods->imagen}}
			<img src="./../images/{{$prods->imagen}} " id="prods" style="width: 60px;height: 60px;">
        	<hr>
        @else		
		@endif
		@endforeach
		
@endsection