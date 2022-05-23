<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="shortcut icon" href="assets/icon/blue.png" type="image/x-icon">
    <link rel="stylesheet" href="style/halamanawal.css">
    <link rel="stylesheet" href="style/user/registrasi.css">

    <title>Pilih Jadwal & Dokter</title>
</head>

<body>
        <form action="/daftar" method="post" class="daftar">
            @csrf
            <div class="container justify-content-center">
                <h1 class="mb-5">PILIH JADWAL & DOKTER</h1>
                <form>
                    <div class="form-group">
                        <label>Dokter</label>
                        <div class="dropdown d-sm-inline" style="margin-left:20px">
                            <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Pilih Dokter
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Drg.Yanti,SpKG.</a></li>
                                <li><a class="dropdown-item" href="#">Drg.Nabil,SpKG.</a></li>
                                <li><a class="dropdown-item" href="#">Drg.Putri,SpKGA. </a></li>
                                <li><a class="dropdown-item" href="#">Drg.Manda,SpRKG.  </a></li>
                                <li><a class="dropdown-item" href="#">Drg.Fazil,SpKGA. </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label>Jadwal</label>
                        <div class="dropdown d-sm-inline" style="margin-left:20px">
                            <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Pilih Jadwal
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Drg.Yanti,SpKG.</a></li>
                                <li><a class="dropdown-item" href="#">Drg.Nabil,SpKG.</a></li>
                                <li><a class="dropdown-item" href="#">Drg.Putri,SpKGA. </a></li>
                                <li><a class="dropdown-item" href="#">Drg.Manda,SpRKG.  </a></li>
                                <li><a class="dropdown-item" href="#">Drg.Fazil,SpKGA. </a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <center><button type="submit" class="registerbtn">Selanjutnya</button></center>

                </form>
        </form>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>