@extends('layouts.app')
@section('content')
		@foreach($prod as $prods)		
		@if (Auth::user()->id == $prods->dueno )
			<hr>
			{{$prods->nombre}} <br>
			{{$prods->descripcion}} <br>
			{{$prods->area}} <br>
			{{$prods->estado}}
			{{$prods->imagen}}
			<img src="./../images/{{$prods->imagen}} " id="prods" style="width: 60px;height: 60px;">
        	<hr>	
		@endif
		@endforeach
			
@endsection