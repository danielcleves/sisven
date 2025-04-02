<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Category</title>
</head>

<body>
    <div class="container">
        <h1>Edit Category</h1>
        <form method="POST" action="{{ route('categories.update', ['category' => $category->id]) }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="codigo" class="form-label">Code</label>
                <input type="text" class="form-control" id="codigo" aria-describedby="codigoHelp" name="id" value="{{ $category->id }}" disabled>
                <div id="codigoHelp" class="form-text">Category Id</div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Category name"
                    value="{{ $category->name }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Category description">{{ $category->description }}</textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('categories.index') }}" class="btn btn-warning">Cancel</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
