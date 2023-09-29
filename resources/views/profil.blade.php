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
            <div class="col-8">
                
                    <div class="card-body shadow-lg p-3 mb-5 bg-body rounded">
                        <div class="row align-items-center">
                            <div class="col-auto p-4">
                                <img src="{{asset('images/profil.jpg')}}" class="rounded-circle" style="width: 200px; aspect-ratio: 1/1; object-fit: cover;">
                            </div>
                            <div class="col p-4" style="border-left: 1px outset;">
                                <h5 class="card-title"><?php echo $nama; ?></h5>
                                <p class="card-text">Seorang mahasiswa informatika UAJY</p>
                                <p class="card-text">
                                <strong>Alamat:</strong> <?= $alamat;?>
                                <br><strong>Email:</strong> <?= $email;?>
                                <br><strong>Telepon:</strong> <?= $telepon;?>
                                <br><strong>Hobi:</strong> <?= $hobi;?>
                            
                                </p>
                                <a href="{{url('form')}}" class="btn btn-primary">Form Data Mahasiswa</a>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
        
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>