<?php

define('PROJECT_TITLE', 'PHP Sample Server');
define('PROJECT_VERSION', 'v1.0.2');

?>
<!DOCTYPE html>
<html lang='pt'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo constant('PROJECT_TITLE'); ?></title>
        <link rel="stylesheet" href="assets/style/index.css">
        <script type="module" src="assets/src/index.js"></script>
    </head>

    <body>
        <main>
            <header>
                <h1><?php echo constant('PROJECT_TITLE'); ?></h1>

                <h3><?php echo constant('PROJECT_VERSION'); ?></h3>
            </header>
            
            <article>
                <h2>Actions</h2>
                
                <section id="sectionbuttons">
                    <button>Get time</button>
                    <button>Dump POST</button>
                    <button>Message</button>
                    <button>Session key</button>
                </section>
            </article>

            <article>
                <h2>PHP response:</h2>
                <p id="jsonresponse"></p>
            </article>
        </main>
    </body>
</html>