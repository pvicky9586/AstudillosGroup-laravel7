@extends('layouts.appAuth')
@section('title','- Bienvenidos')
@section('content')
<div class="containe">
	<br>
     <div class="title"><h1>BIENVENIDOS Al Aula Virtual</h1></div>
                   <br><br><br>
    <div align="center">@livewire('aula-component')</div>
        
</div>  

@endsection
