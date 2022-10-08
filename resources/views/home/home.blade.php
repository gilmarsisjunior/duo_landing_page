<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/mobile.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/tablet.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/desktop.css')}}">
    <script src="{{URL::asset('js/app.js')}}"></script>

    <title>Início</title>
</head>
<body>
    <div class="background">
        <div class="img-container">
            <div class="logo">
            <img src="{{URL::asset('images/logo.svg')}}" alt="DUO STUDIO CREATIVE">    
            </div>
        </div>
        <div class="retangle">
            <div class="title">
                <p>LIDERANÇA EM SOLUÇÕES DE ENGENHARIA</p>
            </div>
            <div class="paragraph">
                Nossos produtos podem manter os alimentos frescos, fornecer temperaturas interiores confortáveis para edifícios comerciais e permitir a produção de energia renovável.
            </div>

            <div class="sub-title">
                ACESSE ABAIXO OS <br> NOSSOS MATERIAIS ÚTEIS
            </div>
            <div class="elements" style="display: flex; justify-content:space-between; width: 290px">
                <div>
                
                    <table>
                        <tr>
                            <td>
                                <img src="{{URL::asset('images/icone-download.png')}}" alt="">
                            </td>
                            <td><a href="{{url('/catalogos')}}" class="text-link">Catálogos e Flyers</a></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{URL::asset('images/icone-download.png')}}" alt="">
                            </td>
                            <td><a href="{{url('flyers')}}" class="text-link">IOMs</a></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{URL::asset('images/icone-download.png')}}" alt="">
                            </td>
                            <td><a href="#" class="text-link">Quick Instalation</a>
                            </td>
                        </tr>
                    </table>
                </div>

                <div style="margin-top: 20px">
                    <img src="{{URL::asset('images/botao-abaixo.svg')}}" alt="">
                </div>
        </div>
        </div>
    </div>
    <div class="second-area">
        <section class="contact">
            <div>
                <h2 class="sub-title" id="sub-title">TEM ALGUMA DÚVIDA OU <br> PRECISA DE ALGUM OUTRO <br> MATERIAL ESPECÍFICO?</h2>
            </div>
            <div style="padding-top: 20px">
                <p class="paragraph">Solicite abaixo</p>
            </div>
            <div>
                <form action="{{url('create')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Nome" name="name">
                        <input class="form-control" type="text" placeholder="Telefone" name="telephone">
                        <input class="form-control" type="text" placeholder="Email" name="email">
                        <input class="form-control" type="text" placeholder="Assunto" name="subject">
                        <textarea class="form-control" id="txt" rows="3" placeholder="Mensagem" name="message"></textarea>
                        <div class="btn"><button class="btn-s">Enviar</button></div>
                    </div>
                  </form>

            </div>
            <div></div>
        </section>
    </div>
</body>
</html>