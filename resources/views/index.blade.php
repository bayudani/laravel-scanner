<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>qrcode</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <h1 class="text-danger pt-4 text-center mb-4">Daftar member</h1>
            <hr>
            <div class="pb-2">
                <a href="/create" class="btn btn-success">new member</a>
                <a href="/absen" class="btn btn-success m-6">absen</a>
            </div>
            

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" >ID</th>
                            <th scope="col" >Name</th>
                            <th scope="col" >Address</th>
                            <th scope="col" >Barcode</th>
                            <th scope="col" >selengkapnya</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($members as $member)
                            
                        <tr>
                            <td>{{$member->id}} </td>
                            <td>{{$member->name}}</td>
                            <td>{{$member->address}}</td>
                            <td>{!!DNS2D::getBarcodeHtml("$member->Member_qode",'QRCODE') !!}
                                Member_qode:{{$member->Member_qode}}
                            </td>
                            <td>
                                <a class="btn btn-outline-info" href="show/{{ $member->id }}">detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</body>
</html>