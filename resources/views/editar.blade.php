<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>

    <form action="/editar-produto/{{$produto->id}}" method="POST">
        @csrf
      

        <label for="">Nome do Produto</label>
        <input type="text" name="nome" value="{{$produto->nome}}">
<br> <br>
        <label for="">Valor do Produto</label>
        <input type="text" name="valor" value="{{$produto->valor}}">
        <br> <br>
        <label for="">Quantidade em Estoque</label>
        <input type="text" name="estoque" value="{{$produto->estoque}}">
        <br> <br>
       
        <button>EDITAR</button>
    </form>
</body>
</html>