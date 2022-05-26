<html>
<head>
    <title>D2P - Teste</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

@if(session('message'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                {{ session('message') }}
            </div>
        </div>
    </div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Número do Processo</th>
            <th>Número da DI</th>
            <th>Data da DI</th>
            <th>Data do Desembaraço</th>
            <th>Data da Entrega</th>
        </tr>
    </thead>
    <tbody>
    @foreach($processos as $processo)
        <tr>
            <td>{{ $processo->NumeroProcesso }}</td>
            <td>{{ $processo->NumeroDI }}</td>
            <td>{{ $processo->DataDI }}</td>
            <td>{{ $processo->DataDesembaraco }}</td>
            <td>{{ $processo->DataEntrega }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
