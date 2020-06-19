<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Gastos</title>
    <link rel="stylesheet" href="/css/app.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Expenses Festival</a>

        <div class="collapse navbar-collapse">
            <a class="btn btn-danger my-2 my-sm-0" href="/mas">Añadir</a>
        </div>
    </nav>
    <div id="app" class="container">
        <section class="text-center m-4">
            <h1>Festival de gastos</h1>
            <table class="table" cellspacing="0">
                <thead>
                    <tr>
                        <th>Concepto</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($expenses as $expense)
                    <tr>
                        <td>{{ $expense->subject }}</td>
                        <td>{{ $expense->amount }} €</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>