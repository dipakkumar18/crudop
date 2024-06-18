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
        <h1 class="heading m-3">Product List</h1>
        <a href="{{ route('products.create') }}"><button type="button" class="btn btn-primary btn-lg mb-3">Add New
                Product</button></a>
    
        

        <table class="table" border="2">
            <thead>
                <tr>
                    <th>SR no.</th>
                    <th>Name</th>
                    <th>Brand Name</th>
                    <th>Price</th>
                    <th>RS.</th>
                    <th>Description</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->index + $products->firstItem() }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->brand_name }} </td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->rs }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}">
                                    <button type="button" class="btn btn-success btn-sm">Show</button>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                        </td>
                        <td>
                            <form action="{{ route('products.destroy', $product->id) }}" method="post"
                                style="display:inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

        </table>

        
        {{-- {!! $products->appends(Request::except('page'))->render() !!} --}}
        {{-- {{$products->links('pagination::bootstrap-4')}} --}}
        {!! $products->links() !!}
    </div>

</body>

</html>