<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Danh sách sản phẩm</h1>
    @foreach($products as $product)
            <h2>{{ $product->name_product }}</h2>
    @endforeach
</body>
<style>
    h1{
        font-weight: bold;
        color: blue;
        text-align: center;
        margin-top: 200px;
    }
</style>

</html>