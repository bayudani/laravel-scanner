<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>create</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-9">
                <div class="card px-5 mt-3 shadow">
                    <h1 class="text-primary pt-4 text-center mb-4">Generate barcode</h1>
                    <form action="/post" method="POST">
                        @csrf
                        <label for="name">name:</label>
                        <input type="text" class="form-control" name="name" required>
                        <label for="address">address:</label>
                        <input type="text" class="form-control" name="address" required>
                       
                        <button type="submit" class="btn btn-success col-md-3 mt-3 mb-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>