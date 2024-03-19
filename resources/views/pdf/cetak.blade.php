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
</style>

<body>
    <div class="container col-lg-4  mt-4">
        <div class="card shadow">
            <h4 class="text-center mt-4">Kartu member</h4>
            <div class="d-flex">



                {{-- <table>
                    <tr>
                        <td>Nama member: {{ $member->name }}</td>
                    </tr>
                    <tr>

                        <td>Alamat member: {{ $member->address }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            {!! DNS2D::getBarcodeHtml("$member->Member_qode", 'QRCODE', 8, 8) !!} Member code : {{ $member->Member_qode }}
                        </td>
                    </tr>
                </table> --}}

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
            <p class="mx-4">Terdaftar tanggal: {{ $created_at }} sampai {{ $expired_at }} </p>
            </p>
        </div>
    </div>

    {{-- <a href="{{ route('member.cetak', ['id' => $member->id]) }}" class="btn btn-outline-success">Export pdf</a> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>
