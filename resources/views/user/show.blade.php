@extends('layouts.app')

@section('content')
  <div style='padding:10px'>
    <p>
      <h1>Welcome {{ $name }}</h1>
      <small>(Your id is {{ $id }})</small>
    </p>
  </div>
@endsection 