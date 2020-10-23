<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>IPT Midterm Project</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= url('/') ?>">IPT Midterm Project</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="<?= url('/') ?>">Home</a>
                    <a class="nav-item nav-link" href="<?= url('/users') ?>">Users</a>
                    <a class="nav-item nav-link" href="<?= url('/accounts') ?>">Account</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card text-center bg-primary" style="margin-top: 10%;">
                    <div class="card-header text-white">
                        <h4>Main Menu</h4>
                    </div>
                    <div class="card-body">
                        <table>
                            <tr><a href="<?= url('/') ?>" class="btn btn-block bg-white">Home</a></tr>
                            <tr><a href="<?= url('/users') ?>" class="btn btn-block bg-white">Users</a></tr>
                            <tr><a href="<?= url('/accounts') ?>" class="btn btn-block bg-white">Account</a></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>