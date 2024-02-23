<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class='bg-black'>
    
        <form action='#' method='POST' name='loginForm' id='loginForm'>
        <?php   
    //--------------------senha criptografada
    //    $options = [
    //            'cost'
    //    ];
    //      $senha = '12345678';
    //      $senhaHash = password_hash($senha, PASSWORD_BCRYPT, $options);
    //      echo $senhaHash;      
                ?>
            <div class="row d-flex justify-content-center align-items-center h-100 ">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5 position-absolute top-50 start-50 translate-middle">
                    <div class="card bg-light text-dark rounded-5" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                        <center><img class='w-25 ' src='./img/blacklogo.png'></center>
                            <div class="mb-md-5 mt-md-4 pb-5">

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="iemail">E-mail</label>
                                    <input type="email" name="email" id="iemail" class="form-control form-control-lg"
                                        required />

                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" for="isenha">Senha</label>
                                    <input type="password" name="senha" id="isenha" class="form-control form-control-lg"
                                        required />

                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-dark" href="#">Esqueceu a senha?</a></p>
                                <button type="button" onclick='fazerLogin();'
                                    class="btn btn-outline-dark btn-lg px-5">Login</button>
                                <p></p>

                                <div class="alert alert-danger" role="alert" id="erromsg" style='display: none;'>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </form>
    








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <script src="./js/func.js"></script>
</body>

</html>