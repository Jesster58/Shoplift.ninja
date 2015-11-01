<!DOCTYPE html>
<html lang="">

<?php include 'core/includes/head.php' ?>

    <body>

        <?php include 'header.php'?>
            <div class="container">
                <div class="row col s6 card-panel">
                    <h4 class="center" id="register">Create a new listing</h4>
                    <form class="col s12" name="signUpForm" action="signUp.php" method="POST">
                        <div class="row">
                            <div class="input-field col s6 removeIf">
                                <input id="post" name="first_name" type="text" class="validate">
                                <label for="post">Post Name</label>
                            </div>
                            <div class="input-field col s6">
                                <select>
                                    <option value="1">Phone</option>
                                    <option value="2">Book</option>
                                    <option value="3">Laptop</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Textarea</label>
                            </div>
                        </div>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                <input type="file" multiple>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files">
                            </div>
                        </div>
                        <button class="btn waves-effect waves-light right" id="registerBtn" type="submit" name="action">Submit Post
                        </button>


                    </form>

                </div>
            </div>
            <!-- Compiled and minified JavaScript -->
            <script src="materialize/js/materialize.min.js"></script>
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script type="text/javascript" src="materialize/js/jquery1.js"></script>
            <!-- Compiled and minified JavaScript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>

</html>