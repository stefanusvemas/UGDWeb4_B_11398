<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">UGD4_B_11398</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>
            <div class="container-fluid">
                <div class="collapse" id="navbarToggleExternalContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('profil')}}">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('form')}}">Form</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-5">
                <form>
                    <div class="card shadow-lg mb-5 bg-body rounded">
                        <div class="card-header bg-secondary text-white">
                            Form Data Mahasiswa
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center mb-3">
                                <div class="col">Nama</div>
                                <div class="col-9">
                                    <input type="text" id="nama" class="form-control" value="<?= $nama ?>">
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col">NPM</div>
                                <div class="col-9">
                                    <input type="text" id="npm" class="form-control" value="<?= $npm ?>">
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col">Email</div>
                                <div class="col-9">
                                    <input type="text" id="email" class="form-control" value="<?= $email ?>">
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col">Fakultas</div>
                                <div class="col-9">
                                    <input type="text" id="fakultas" class="form-control" value="<?= $fakultas ?>">
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col">Program Studi</div>
                                <div class="col-9">
                                    <input type="text" id="prodi" class="form-control" value="<?= $prodi ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button onclick="resetInput()" class="btn btn-danger" style="float: right;" type="button">Reset</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </main>
    <script>
        function resetInput() {
            const inputNama = document.getElementById('nama');
            const inputNpm = document.getElementById('npm');
            const inputEmail = document.getElementById('email');
            const inputFakultas = document.getElementById('fakultas');
            const inputProdi = document.getElementById('prodi');


            inputNama.value = '';
            inputNpm.value = '';
            inputEmail.value = '';
            inputFakultas.value = '';
            inputProdi.value = '';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>