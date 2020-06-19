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
            
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="post" action="/mas">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" name="subject" placeholder="Concepto" required="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="input-group">
                            <input type="number" name="amount" min="0" step="0.01" data-number-to-fixed="2"
                                data-number-stepfactor="100" class="form-control" />
                            <div class="input-group-append">
                                <span class="input-group-text">€</span>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Añadir</button>
            </form>
        </section>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>