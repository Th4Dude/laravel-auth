@extends('layouts.app')






@section('content')
<div class="container col-6">
    @if (session('message'))
        <h5 class="text-warning">{{ session('message') }}</h5>
    @endif
    

</div>

@endsection