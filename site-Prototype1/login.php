<?php
      include 'core/init.php'
?>
    <!DOCTYPE html>
    <html lang="">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shoplift.Ninja</title>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="materialize/js/jquery1.js"></script>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="custom.css" />
    </head>

    <body>

        <?php include 'header.php' ?>

            <div class="container">
                <div class="row col s6 card-panel">

                    <form class="col s12" name="loginForm" action="loggedIn.php" method="POST">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate" name="email">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="password" type="password" class="validate" name="password">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <button class="btn waves-effect waves-light right" id="registerBtn" type="submit" name="action">Register Now
                            <i class="material-icons left">send</i>
                        </button>
                        <div class="input-field col s12">
                            <p class="margin right medium-small sign-up">Already have an account? <a id="login" href="#">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <!--
<div>
    <div class="col s12 m6">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Become a part of the community</span>
                <p>Using shoplift.ninja you can activate your inner bargaining skills.</p>
            </div>
            <div class="card-action">
                <a href="#">See the products</a>
            </div>
        </div>
    </div>
</div>
-->
            <!-- Compiled and minified JavaScript -->
            <script src="materialize/js/materialize.min.js"></script>
            <script>
                $(document).ready(function () {
                    $("div.removeIf").fadeOut(200);
                    $("div.addIf").removeClass("s6").addClass("s12");
                    $("#register").replaceWith('<h4 class="center">Hello again ninja!</h4>');
                    $("#join").replaceWith('<p class="center" >Find some deals</p>');
                    $("#registerBtn").text("LOGIN");
                    $(".sign-up").remove();
                });
            </script>
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script type="text/javascript" src="materialize/js/jquery1.js"></script>
            <!-- Compiled and minified JavaScript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    </body>

    </html>