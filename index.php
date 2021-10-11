<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Calculadora</title>
</head>

<body>
    <div class="container text text-center">
        <h1>Calculadora</h1>
        <form action="valida.php" method="post">
            <input class="form-control border border-3 mb-2" type="number" name="campo1" placeholder="Campo 1" required>
            <select class="form-select border border-3 mb-2" name="operacao">
                <option>Selecione</option>
                <option value="somar">Somar</option>
                <option value="subtrair">Subtrair</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
            </select>
            <input class="form-control border border-3 mb-2" type="number" name="campo2" placeholder="Campo 2" required>
            <button class="btn btn-primary d-grid gap-2 col-4 mx-auto" name="calcular">Calcular</button>
        </form>
    </div>
</body>

</html>
