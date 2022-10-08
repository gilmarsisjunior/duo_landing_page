@extends('layouts.app')
@section('title', 'Catalogos')



@section('section')

<div class="titles">
    <div>
        <p  class="top-title">MATERIAIS ÚTEIS</p>
    </div>
    <div>
        <p class="title">CATÁLOGOS E FLYERS</p>
    </div>
    <div class="documents" style="margin-top: 80px">
        <div class="docs">
            <a href="{{url('/flyers')}}"><img src="{{URL::asset('images/LINHA.svg')}}" alt="" class="doc-img" style="width: 150px"></a>
            <h3 class="description">ECOS</h3>
        </div>
        <div class="docs">
            <a href="{{url('/flyers')}}"><img src="{{URL::asset('images/FCE.svg')}}" alt="" class="doc-img"  style="width: 150px"></a>
            <h3 class="description" >FCE</h3>
        </div>
        <div class="docs">
            <a href="{{url('/flyers')}}"><img src="{{URL::asset('images/GERADOR.svg')}}" alt="" class="doc-img"  style="width: 150px"></a>
            <h3 class="description" >Gerador de Gelo</h3>
        </div>
        <div class="docs">
            <a href="{{url('/flyers')}}"> <img src="{{URL::asset('images/LINHA.svg')}}" alt="" class="doc-img"  style="width: 150px"></a>
            <h3 class="description" >Linha Comercial</h3>
        </div>
    </div>
</div>










@endsection