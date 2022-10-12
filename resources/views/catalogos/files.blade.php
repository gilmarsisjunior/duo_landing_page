@extends('layouts.app')
@section('title', 'Catalogos')



@section('section')

<div class="titles">
    <div>
        <p  class="top-title">MATERIAIS ÚTEIS > CATÁLOGOS E FLYERS</p>
    </div>
    <div>
        <p class="title">{{strtoupper($nameFolder)}}</p>
    </div>
    <div class="documents" style="margin-top: 80px">
        <table>
           <tr>
            <td class="name-column"><h3>Nome</h3></td>
            <td class="file-length" style="padding-right: 500px"><h3>Tamanho do arquivo</h3></td>
            <td></td>
           </tr>
           @foreach ($files as $file)
           <tr>
            <td>{{basename($file)}} <p class="file-mobile">{{$storage::size($file)}}kb</p></td>
            <td class="file-length" >{{$storage::size($file)}}kb</td>
            <td><a href="{{url('download/'.$file)}}"><img src="{{URL::asset('images/download.svg')}}" alt=""></a></td>
           </tr> 
           @endforeach


           
           
        </table>
    </div>
</div>










@endsection