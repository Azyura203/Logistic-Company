<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logistic Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="LogInForm.css">
</head>
<body class="bg">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<section class="section-1">
    <div class="container mt-5 py-2">
        <div class="row">
            <div class="col-md-6 mb-4 grid">
                <div class="card">
                    <div class="card-body border-0 shadow-lg">
                        <h5 class="title text-center">Logistic Company</h5>
                        <div class="text-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                            </svg>
                        </div>
                        <form action="LogisticHome.php" method="post">
                            <div class="form-group my-2">
                                <input type="text" class="form-control" placeholder="Your ID" id="username" name="username" required>
                            </div>
                            <div class="form-group my-2">
                                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                            </div>
                            <div class="form-group my-2">
                                <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                            </div>
                            <div class="text-center my-2">
                                <button type="submit" class="btn btn-outline-secondary">Log In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 grid">
                <div class="text-center welcome">
                    <h1><span>HELLO</span></h1>
                    <h1><span>welcome back </span></h1><br>
                    <h2><span>Login to your account as fast as you can</span></h2><br>
                    <h3><span> Get back to your Job</span></h3>
                </div>
            </div>
        </div>
        <div id="result"></div>
    </div>
</section>
    <section>
       
    </section>
    <script>
        $(document).ready(function(){
            $('#submit').click(function(e){ // modified to handle form submission
                e.preventDefault(); // prevent default form submission
                var username = $('#username').val();
                var email = $('#email').val(); // retrieve email value
                var password = $('#password').val(); // retrieve password value
                $.post('LogisticHome.php',{ username: username, email: email, password: password },function(data){
                    $('#result').html(data);
                });
            });
        });
    </script>
</body>
</html>
