@extends('layouts.app')
@section('title', 'Catalogos')



@section('section')

<div class="titles">
    <div>
        <p  class="top-title">MATERIAIS ÚTEIS > CATÁLOGOS E FLYERS</p>
    </div>
    <div>
        <p class="title">Documento nome</p>
    </div>
    <div class="documents" style="margin-top: 80px">
        <table>
           <tr>
            <td class="name-column"><h3>Nome</h3></td>
            <td class="file-length" style="padding-right: 500px"><h3>Tamanho do arquivo</h3></td>
            <td></td>
           </tr>
           <tr>
            <td>Flyer 2022 <p class="file-mobile">190kb</p></td>
            <td class="file-length" >180kb</td>
            <td><a href=""><img src="{{URL::asset('images/download.svg')}}" alt=""></a></td>
           </tr>
           <tr>
            <td>Flyer 2022 <p class="file-mobile">190kb</p></td>
            <td class="file-length" >180kb</td>
            <td><a href=""><img src="{{URL::asset('images/download.svg')}}" alt=""></a></td>
           </tr>
           <tr>
            <td>Flyer 2022 <p class="file-mobile">190kb</p></td>
            <td class="file-length" >180kb</td>
            <td><a href=""><img src="{{URL::asset('images/download.svg')}}" alt=""></a></td>
           </tr>
           <tr>
            <td>Flyer 2022 <p class="file-mobile">190kb</p></td>
            <td class="file-length" >180kb</td>
            <td><a href=""><img src="{{URL::asset('images/download.svg')}}" alt=""></a></td>
           </tr>
           <tr>
            <td>Flyer 2022 <p class="file-mobile">190kb</p></td>
            <td class="file-length" >180kb</td>
            <td><a href=""><img src="{{URL::asset('images/download.svg')}}" alt=""></a></td>
           </tr>
           <tr>
            <td>Flyer 2022 <p class="file-mobile">190kb</p></td>
            <td class="file-length" >180kb</td>
            <td><a href=""><img src="{{URL::asset('images/download.svg')}}" alt=""></a></td>
           </tr>
           <tr>
            <td>Flyer 2022 <p class="file-mobile">190kb</p></td>
            <td class="file-length" >180kb</td>
            <td><a href=""><img src="{{URL::asset('images/download.svg')}}" alt=""></a></td>
           </tr>
        </table>
    </div>
</div>










@endsection