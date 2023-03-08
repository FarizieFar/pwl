<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <h1>Halaman Produk Kami {{$title}}</h1>

    <ul>
        @foreach ($product as $product)
            <li>{{$product}}</li>
        @endforeach
    </ul>
</body>
</html>