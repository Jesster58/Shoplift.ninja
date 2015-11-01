<?php
      include 'core/init.php'
?>
    <!DOCTYPE html>
    <html lang="">
    <?php include 'core/includes/head.php' ?>

        <body>

            <?php include 'header.php' ?>
                <section class="container">
                    <div class="row">
                        <div class="col s12 m12 l4">
                            <div class="card medium">
                                <div class="card-image">
                                    <img src="images/laptop.jpeg">
                                    <span class="card-title black">Laptops</span>
                                </div>
                                <div class="card-content">
                                    <p>Thinking about purchasing a laptop?</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l4">
                            <div class="card medium">
                                <div class="card-image">
                                    <img src="images/books.jpg">
                                    <span class="card-title black">Books</span>
                                </div>
                                <div class="card-content">
                                    <p>Thinking about purchasing a book?</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l4">
                            <div class="card medium">
                                <div class="card-image">
                                    <img src="images/iphone.JPG">
                                    <a href="items.php"><span class="card-title black">Phones</span></a>
                                </div>
                                <div class="card-content">
                                    <p>Thinking about purchasing a phone?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="container center">
                    <div class="row">
                        <div class="col s12 m12 l12 ">
                            <div class="card indigo lighten-2 white-text">
                                <h1>About us</h1>
                                <p>Nescius se ipsum. Ab nisi est quid. Do illum id velit, quid mandaremus adipisicing do legam appellat familiaritatem se vidisse multos offendit.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <?php include 'itemAdd.php'; ?>

                    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                    <script type="text/javascript" src="materialize/js/jquery1.js"></script>
                    <!-- Compiled and minified JavaScript -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
        </body>

    </html>