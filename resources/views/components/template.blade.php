<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hybrido Studio</title>
    <?php include public_path('css\styles.css'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="/">Hybrido Studio</a>
        </div>
    </nav>

    <!-- Content -->
    @yield('content')

    <div class="container mw-100 bg-primary bg-gradient">
        <footer class="text-center text-lg-start text-white">
            <div class="container p-4">
                <section class="">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-xl-3 my-auto">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                Uriel Duana </h6>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing.
                            </p>
                        </div>

                        <hr class="w-100 clearfix d-md-none" />

                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto my-auto">
                            <h6 class="mb-4 font-weight-bold">Lorem</h6>
                            <p>Lorem, ipsum.</p>
                            <p>Lorem, ipsum.</p>
                        </div>

                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto my-auto">
                            <h6 class="mb-4 font-weight-bold">Lorem</h6>
                            <p> Lorem, ipsum.</p>
                            <p>Lorem, ipsum.</p>
                        </div>

                        <hr class="w-100 clearfix d-md-none" />

                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto my-auto">
                            <h6 class="mb-4 font-weight-bold">Lorem</h6>
                            <p>info@gmail.com</p>
                            <p>+ 01 234 567 88</p>
                        </div>
                    </div>
                </section>

                <hr class="my-3">

                <!-- Section: Copyright -->
                <section class="p-3 pt-0">
                    <div class="row d-flex align-items-center">
                        <strong class="text-center">2023 | Uriel Duana Chávez</strong>
                    </div>
            </div>
            </section>
    </div>
    </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

</body>

</html>
