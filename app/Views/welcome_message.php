<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PokeApi</title>
        <meta name="description" content="The small framework with powerful features">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/png" href="/favicon.ico">
        <link rel="stylesheet" href="public/assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/assets/css/ci4.css">
        <link rel="stylesheet" href="public/assets/css/styles.css">
    </head>
    <body>

        <!-- HEADER: MENU + HEROE SECTION -->
        <header>
            <div class="menu">
                <ul>
                    <li class="logo">
                        <a href="#" target="_blank"> <img src="public/assets/img/logo.png" alt="Logo de PokeApi" height="44" class="pb-1"> </a>
                    </li>
                </ul>
            </div>
            <div class="heroe">
                <h1>PokeApi</h1>
            </div>
        </header>
        <!-- HEADER: MENU + HEROE SECTION -->
        
        <!-- CONTENT -->
        <div class="container pokemon-container mt-5">
            <div class="col">
                <div class="row">
                    <select class="form-select select-pokemon" name="" id="select-pokemon" onChange="cambio()">
                        <option selected value="" disabled hidden>Seleccionar Pokemon</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- CONTENT -->
        
        <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
        <footer>
            <div class="copyrights fixed-bottom">
                <p>&copy; <?= date('Y') ?> Salvador Selman.</p>
            </div>
        </footer>
        <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

        <!-- SCRIPTS -->
        <script src="public/assets/js/ci4.js"></script>
        <script src="public/assets/js/script.js"></script>
        <script src="public/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- -->

    </body>
</html>
