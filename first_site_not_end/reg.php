<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">


    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<body class="text-center">

<main class="form-control-sm" >
    <form class="container col-md-3" method="post" action="">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="re_password" name="re_password" placeholder="Re Password">
            <label for="floatingPassword">Re Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <div class="alert-danger mt-2" id="errorBlock"></div>

        <button class="w-100 btn btn-lg btn-primary" type="button" id="reg_user">Register</button>
        <p class="mt-5 mb-3 text-muted">© 2017–2021</p>

    </form>
</main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $('#reg_user').click(function ()){
        let email = $('#email').val();
        let password = $('#password').val();
        let re_password = $('#re_password').val();

        $.ajax({
            url: 'registration/registration.php',
            type:'POST',
            cache: false,
            data{'email' :email, 'password' :password, 're_password' :re_password},
            dataType: 'html',
            success: function (data){
                if (data === 'Success')
                    $('reg_user').text('All done successful')
                    $('#errorBlock').hide()
                    else{
                        $('#errorBlock').show().text(data);
                }
        });
    })
</script>
</html>