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
        <h1 class="heading my-4 ">Edit Product Data</h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control mb-3" name="name" value="{{ $product->name}}" placeholder="name">

            <label for="brand_name" class="form-label">Brand Name</label>
            <input type="text" class="form-control  mb-3" name="brand_name" value="{{ $product->brand_name}}" placeholder="Brand Name">

            <label for="Price" class="form-label">Price</label>
            <input type="number" class="form-control mb-3" name="price" value="{{ $product->price}}" placeholder="Price">

            <label for="Description" class="form-label">Description</label>
            <textarea class="form-control  mb-4" name="description"  placeholder="description" style="height: 100px">{{ $product->description }}</textarea>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</body>

</html>