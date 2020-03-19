@extends('layouts.app')

@section('content')
<div class="container-fluid h-100">
    <div class="row h-100 ">
      @include('sidebar')
      <main class="col">
        @include('pages.main')
      </main>
    </div>
  </div>
@endsection
