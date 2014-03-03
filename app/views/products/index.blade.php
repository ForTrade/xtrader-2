@extends('layouts.master')
@section('content')
    
    @foreach($products as $product)
    <div class="col-sm-4">
        <div class="thumbnail box-product">
            <span class="offer bg-palette-default"><i class="glyphicon glyphicon-star"></i>{{ $discount[$product->id][0]->value }}</span>
            <figure>
                <img src="{{ Helpers::getProductImage($photos[$product->id]->filename, $product->id) }}" alt="{{ $product->name }}" class="img-responsive">
            </figure>
            <div class="caption">
                <h3>{{ $product->name }}</h3>
                <span class="producer">By <strong>Blueform</strong> (Pesaro, IT)</span>
                <p class="description"></p>
                <p class="actions">
                    <a href="#" class="btn btn-primary bg-palette-default" role="button" data-toggle="modal" data-target="#infoModal" data-name="Nome Prodotto 1">Richiedi Informazioni</a> 
                    <a href="#" class="btn btn-default" role="button">Scheda Prodotto</a>
                </p>
                <p class="categories">Lo trovi in: <span class="label label-default"><a href="#">{{ $category[$product->id]->name }}</a></span></p>
            </div>
        </div>
    </div>  
    @endforeach
    
@stop
