@extends('layouts.app')

@section('content')
  <div style='padding:10px'>
    <p>
      Home Page {{ env('NON_EXISTING_ENV_VALUE', 'Value Default To Me!!') }}
    </p>
  </div>
@endsection 