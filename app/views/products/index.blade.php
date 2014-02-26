@extends('layouts.master')
@section('content')
    
    @foreach($products as $product)
    <div>
        <p>{{ $product->name }}</p>
        <p>{{ $product->discounts[0]->name }}</p>
    </div>  
    @endforeach
    
@stop
