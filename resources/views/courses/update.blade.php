<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">Update course</h1>

        <form action="{{ route('course.update', $course->id) }}" method="POST" class="form col-4 mx-auto">
            @method('PUT')

            <div class="my-3">
                <label for="" class="form-label">Title</label>
                <input type="text" name="title" value="{{ $course->title }}" class="form-control">
            </div>

            <div class="my-3">
                <label for="" class="form-label">Description</label>
                <input type="text" name="description" value="{{ $course->description }}" class="form-control">
            </div>
            
            <div class="my-3">
                <label for="" class="form-label">Price</label>
                <input type="number" name="price" value="{{ $course->price }}" class="form-control">
            </div>

            <div class="my-3">
                <button type="submit" class="btn btn-success w-100">Update</button>
            </div>
        </form>
    </div>
</body>
</html>
