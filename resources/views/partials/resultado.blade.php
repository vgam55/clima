@extends('layouts.app')
@section('resultado')
 <div class="container">
     <div class="row $yellow-700" id="layout" name="layout">
       <div class="col">
         País
       </div>
       <div class="col">
         Región
       </div>
       <div class="col">
         Ciudad
       </div>
       <div class="col">
         Latitud
       </div>
       <div class="col">
         Longitud
       </div>
     </div>
    @if(isset($datos))
     @foreach($datos as $dato)
      <div class="row" >
         <div class="col">
            {{$dato->country}}
          </div>
          <div class="col">
            {{$dato->region}}
          </div>
          <div class="col">
           {{$dato->name}}
          </div>
          <div class="col">
            {{$dato->lat}}
          </div>
          <div class="col">
            {{$dato->lon}}
          </div>
         
      </div>
     @endforeach
   @endif
   </div>
  


@endsection