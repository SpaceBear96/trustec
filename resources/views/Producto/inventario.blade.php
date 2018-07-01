@extends('layouts.app')
@section('content')
	<table class="table">
		
		@foreach($prod as $prods)
		@if ( $prods->estado == Auth::user()->id )
        	Funciona      
        
                    </div>
		<div>
			id auth: {{Auth::user()->id}}
			<img src="https://pikmail.herokuapp.com/{{$prods->email}}?size=30" alt="Profile Picture" style="border-radius: 40px; margin-rigth: 10px;">{{$prods->name}}<br>
			{{$prods->nombre}} <br>
			{{$prods->descripcion}} <br>
			{{$prods->area}} <br>
			{{$prods->estado}}
			<img src="./images/{{$prods->imagen}}" id="prods" style="    width: 60px;
            height: 60px;">
		@else
            No funciona    
        @endif	
			
		</div>
		@endforeach
@endsection