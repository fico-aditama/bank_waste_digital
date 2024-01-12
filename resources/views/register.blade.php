<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body style="background-color: green;color: #fbfff4">
    <div class="container-fluid">
        <div class="row gap-5">
            <div class="col mt-5 justify-content-center align-items-center" style="height: 100vh">
                <div class="mt-5 ms-5">
                    <h1>Manage Waste</h1>
                    <h1 class="mb-5">to Save the Earth</h1>
                    <p>come join us and make Indonesia free of waste</p>
                </div>
            </div>
            <div class="col mt-5 py-4">
                <h2 class="mb-3">Register</h2>
                <p class="mb-5">Join for a cleaner earth</p>
                <form action="" method="">
                    @csrf
                    <div class="form-floating mb-3 w-75">
                        <input type="text" class="form-control bg-transparent" name="nama" id="nama"
                            placeholder="Your Name">
                        <label for="nama" class="ms-3 opacity-25">Your Name</label>
                    </div>
                    <div class="form-floating mb-3 w-75">
                        <input type="email" class="form-control bg-transparent" name="email" id="email"
                            placeholder="Email">
                        <label for="email" class="ms-3 opacity-25">Email</label>
                    </div>
                    <div class="form-floating mb-3 w-75">
                        <input type="password" class="form-control bg-transparent" name="password" id="password"
                            placeholder="Password">
                        <label for="password" class="ms-3 opacity-25">Password</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input bg-transparent" id="remember">
                        <label class="form-check-label ms-1 mb-5" for="remember">Save Information</label>
                    </div>
                    <button class="btn btn-block btn-warning btn-lg mb-3 w-75">SIGN UP</button>
                </form>
                <span class="d-flex justify-content-center w-75">
                    <p class="">Already have an account? <a href="#" style="color: #fbfff4">Login</a></p>
                </span>
            </div>
        </div>
    </div>
</body>

</html>
