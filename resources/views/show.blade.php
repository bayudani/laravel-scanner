<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>show barcode</title>
</head>
<style>
    h4 {
        color: tomato;
    }

    .container {
        background: blue;
    }
</style>

<body>
    <div class="container col-lg-4  mt-4">

        <div class="card shadow">
            <h4 class="text-center mt-4">Kartu member</h4>
            <div class="d-flex">





                <div class="col-xs-2 m-4 p-2 flex-grow-1 ">

                    <p>Nama member: {{ $member->name }}</p>
                    <p>Alamat member: {{ $member->address }}</p>
                </div>

                <div class="p-2">

                </div>
                <div class="p-2 col-lg-5 col-xs-10">

                    <p class="p-2">{!! DNS2D::getBarcodeHtml("$member->Member_qode", 'QRCODE', 8, 8) !!} Member code : {{ $member->Member_qode }}
                    </p>

                </div>
            </div>
            <p class="mx-4">Terdaftar tanggal: {{ $member->created_at }} </p>
        </div>
    </div>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <p class=" mb-2">{!! DNS2D::getBarcodeHtml("$member->Member_qode", 'QRCODE', 8, 8) !!} Member code : {{ $member->Member_qode }}
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Kartu member</h5>
                    <p class="card-text">Nama member: {{ $member->name }}.</p>
                    <p class="card-text">Alamat member: {{ $member->address }}.</p>
                    <p class="card-text"><small class="text-muted">Terdaftar tanggal: {{ $member->created_at }}</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex t justify-content-center">
        <a href="{{ route('member.cetak', ['id' => $member->id]) }}" class="btn btn-outline-success">Export pdf</a>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>
