@extends('layouts.master')
@section('content')
    
    @foreach($products as $product)
    <div class="col-md-12">
        <p>{{ $product->name }}</p>
        <p>{{ $discount[$product->id][0]->name }}</p>
        <p>{{ $category[$product->id]->name }}</p>
        <p>{{ $attributes[$product->id][0]->name }}</p>
    </div>  
    @endforeach
    
@stop
