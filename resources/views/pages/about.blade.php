@extends("layouts.app")

@section('content')
    <p><a href="/" rel="back">&larr; Trajetos</a></p>
    <h1>Sobre</h1>
    <p>Este web app faz parte da pesquisa realizada para o Projeto de Graduação para conclusão do curso de Desenho Industrial da Universidade Federal do Espírito Santo (Ufes).</p>
    <p>A pesquisa realizada entre os meses de agosto de 2012 e abril de 2013.</p>
    <p>Desenvolvido por {{ $author }} sob a orientação do professor {{ $teacher }}.</p>
@stop