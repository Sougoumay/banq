<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href={{asset("assets/img/icons/icon-48x48.png")}} />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

    <title>Sign Up | AdminKit Demo</title>

    <link href={{asset("assets/css/app.css")}} rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
<main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h2">Get start Client Register</h1>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <form method="post" action="{{route('advisor.register')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <input class="form-control form-control-lg" type="text" name="first_name"  />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Last Name</label>
                                        <input class="form-control form-control-lg" type="text" name="last_name"  />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Profession</label>
                                        <input class="form-control form-control-lg" type="text" name="profession"  />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Telephone</label>
                                        <input class="form-control form-control-lg" type="text" name="name"  />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Family Status</label>
                                        <input class="form-control form-control-lg" type="text" name="family_status"  />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input class="form-control form-control-lg" type="text" name="address"  />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input class="form-control form-control-lg" type="date" name="birthday"  />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Statustext</label>
                                        <input class="form-control form-control-lg" type="email" name="status"  />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control form-control-lg" type="email" name="email"  />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password" />
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg" type="submit" value="Sign In"/>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="index.html" class="btn btn-lg btn-primary">Sign up</a>
                                        <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

<script src={{asset("assets/js/app.js")}}></script>

</body>

</html>
