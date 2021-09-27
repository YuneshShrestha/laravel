@extends('frontend.template')
@section('content')
  <div class="row py-3 px-3">
      <div class="col-md-4">
       
        @section('head')
           <h3>Hello</h3>
         @endsection
         @include('frontend.components.card')
      </div>
      <div class="col-md-4">
        @section('head')
         <h3>Hello 2</h3>
        @endsection
        @include('frontend.components.card')
      </div>
     <div class="col-md-4">
        @section('head')
        <h3>Hello 3</h3>
      @endsection
        @include('frontend.components.card')
     </div>
  </div>
 
@endsection
