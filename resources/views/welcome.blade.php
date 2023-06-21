<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      html, body {
        height: 100%;
      }
  
      .d-flex-center {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div class="d-flex-center" style="font-family: poppins ">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <img src="{{asset('assets/images/selamat_datang.png')}}" alt="" style="float: left">
          </div>
          <div class="col-md-7 my-auto">
            <h1 style="font-weight: bolder">Selamat Datang di GoEmployee</h1>
            <p>Aplikasi manajemen karyawan yang dapat membantu mempermudah pencatatan pada
              perusahaan anda</p>
              <a href="{{route('hal_login')}}">
                <button class="btn btn-primary">Masuk</button>
              </a>
          </div>
          </div>
        </div>
      </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
