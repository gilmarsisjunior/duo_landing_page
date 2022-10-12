@extends('layouts.app')
@section('title', 'Catalogos')



@section('section')

<div class="titles">
    <div>
        <p  class="top-title">MATERIAIS ÚTEIS > CATÁLOGOS E FLYERS</p>
    </div>
    <div>
        <p class="title">ECOS</p>
    </div>
    <div class="documents" style="margin-top: 80px">
        <div class="docs">
            <a href="{{url('arquivos/ecos/duo')}}"><img src="{{URL::asset('images/LINHA.svg')}}" alt="" class="doc-img" style="width: 150px"></a>
            <h3 class="description">Documentos Duo  - teste aqui</h3>
        </div>
        <div class="docs">
            <a href="{{url('arquivos')}}"><img src="{{URL::asset('images/FCE.svg')}}" alt="" class="doc-img"  style="width: 150px"></a>
            <h3 class="description" >Documentos xyz</h3>
        </div>
        <div class="docs">
            <a href="{{url('arquivos/ecos')}}"><img src="{{URL::asset('images/GERADOR.svg')}}" alt="" class="doc-img"  style="width: 150px"></a>
            <h3 class="description" >Documentos xyz</h3>
        </div>
        <div class="docs">
            <a href="{{url('arquivos')}}"> <img src="{{URL::asset('images/LINHA.svg')}}" alt="" class="doc-img"  style="width: 150px"></a>
            <h3 class="description" >Documentos xyz</h3>
        </div>
        <div class="docs">
            <a href="{{url('arquivos')}}"> <img src="{{URL::asset('images/LINHA.svg')}}" alt="" class="doc-img"  style="width: 150px"></a>
            <h3 class="description" >Documentos xyz</h3>
        </div>
        <div class="docs">
            <a href="{{url('arquivos')}}"> <img src="{{URL::asset('images/LINHA.svg')}}" alt="" class="doc-img"  style="width: 150px"></a>
            <h3 class="description" >Documentos xyz</h3>
        </div>
        <div class="docs">
            <a href="{{url('arquivos')}}"> <img src="{{URL::asset('images/LINHA.svg')}}" alt="" class="doc-img"  style="width: 150px"></a>
            <h3 class="description" >Documentos xyz</h3>
        </div>
        <div class="docs">
            <a href="{{url('arquivos')}}"> <img src="{{URL::asset('images/LINHA.svg')}}" alt="" class="doc-img"  style="width: 150px"></a>
            <h3 class="description" >Documentos xyz</h3>
        </div>
        <div class="docs">
            <a href="{{url('arquivos')}}"> <img src="{{URL::asset('images/LINHA.svg')}}" alt="" class="doc-img"  style="width: 150px"></a>
            <h3 class="description" >Documentos xyz</h3>
        </div>
    </div>
</div>










@endsection