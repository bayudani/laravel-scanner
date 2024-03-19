<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Qr scan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script type="text/javascript" src="instascan.min.js"></script>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
  <body>
    <div class="container col-lg-4 py-5">
        {{-- scanner --}}
        <div class="card bg-white shadow rounded-3 p-3 border 0">

            {{-- pesan --}}

            @if (session()->has('gagal'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>{{session()->get('gagal')}}</strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
                {{-- <div class="alert alert-warning" role="alert">
                  {{session()->get('gagal')}}
                </div> --}}
            @endif

            @if (session()->has('Sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{session()->get('Sukses')}}</strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            {{-- <div class="alert alert-success" role="alert">
              {{session()->get('Sukses')}}
            </div> --}}
        @endif

        <div class="wrapper">

            <div class="scanner"></div>
            <video id="preview"></video>
        </div>
            {{-- form --}}
            <form action="{{route('store')}}" method="POST" id="form">
              @csrf 
              <input type="hidden" name="member_id" id="member_id">
            </form>
        </div>
        <div class="card table-responsive mt-5">
            <table class="table table-bordered table-hover">
              <thead>

                <tr>
                      <th>Nama</th>
                      <th>Tanggal</th>
                  </tr>
                </thead> 
                
                <tbody>
                  @foreach ( $absen as $item)
                  <tr>
                    <td>{{$item->member->name}} </td>
                    <td>{{$item->tanggal}}</td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script  type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script type="text/javascript">
        let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
        scanner.addListener('scan', function (content) {
          console.log(content);
        });
        Instascan.Camera.getCameras().then(function (cameras) {
          if (cameras.length > 0) {
            scanner.start(cameras[0]);
          } else {
            console.error('No cameras found.');
          }
        }).catch(function (e) {
          console.error(e);
        });
        scanner.addListener('scan',function(c){
            document.getElementById('member_id').value=c;
            document.getElementById('form').submit();
        })
      </script>
      

      {{-- bostrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>