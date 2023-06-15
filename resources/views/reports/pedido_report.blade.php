<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Pedidos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <h1>Listado de Pedidos</h1>
    <hr>
    <br>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">C&oacute;digo</th>
            <th scope="col">Fecha Pedido</th>
            <th scope="col">Fecha Entrega</th>
            <th scope="col">Observaciones</th>
            <th colspan="2" scope="col">Cliente</th>
          </tr>
        </thead>
        <tbody>

            @foreach($data as $item)
            <tr>
                <th>{{$item['Id_Pedido']}}</th>
                <td>{{$item['FechaPedido']}}</td>
                <td>{{$item['FechaEntrega']}}</td>
                <td>{{$item['Observaciones']}}</td>
                <td>{{$item['Nombre']}}</td>
                <td>{{$item['Apellido']}}</td>
              </tr>
            @endforeach
          
        </tbody>
      </table>
</body>
</html>