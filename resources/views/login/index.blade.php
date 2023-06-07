<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="form-signin w-300 m-auto" style="font-family: poppins">
        <div class="text-center">
            <img class="mb-4 center m-auto" src="{{ asset('assets/images/selamat_datang.png') }}" alt=""
                width="144" height="114">
        </div>
        <h1 class="h3 mb-3 fw-normal text-center fw-bold">Login dulu yuk!</h1>
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Masukkan email</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Masukkan password</label>
            </div>
            <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Login</button>
        </form>
        <small class="d-block text-center mt-4">Belum memiliki akun? <a href="{{route('hal_register')}}">Register</a></small>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
