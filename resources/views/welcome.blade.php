<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Webminar Presenter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Bem vindo ao mundo Presenter!</h1>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Criação</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{!! $product->name !!}</td>
                    <td>{!! $product->present()->shortDescription(250) !!}</td>
                    <td>{!! $product->present()->createdAt !!}</td>
                    <td>{!! $product->present()->status !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            {!! $products->render() !!}
        </div>
    </div>
</body>
</html>