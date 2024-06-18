<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>
<body>

    <div class="container">
        <h1 class="heading my-3">Detail of Product</h1>
        <table class="table" border="2">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Brand Name</th>
                    <th>Price</th>
                    <th>Rs.</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->brand_name }} </td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->rs }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="{{ route('products.index', $product->id) }}"><button type="button" class="btn btn-primary btn-success btn-sm">Back</button></a>
                    </td> 
                </tr>
            </tbody>
        </table>
    </div>
    
</body>
</html>