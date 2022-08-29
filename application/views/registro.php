<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <main>
    <form action="<?= base_url('Registro/create') ?>" method="POST" class="p-3 m-0 border-0 bd-example">
        <div class="form-floating mb-3 w-25">
            <input type="text" class="form-control" name="username" id="floatingUsername" placeholder="Username">
            <label for="floatingPassword">Username</label>
        </div>
        <div class="form-floating mb-3 w-25">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3 w-25">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="btn">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </main>
</body>
</html>