<?php

// example functio that prints header info.
function print_title($title) {
    echo 
        '<div class="container">
            <h2>'.$title.'</h2>
        </div>';
}

// Example functio that prints header info.
function print_header() {
    // Because of the way HTML works, it is necessary to start the head and body and close it after the page contents.
    echo 
        '<html>
            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
            
                <!-- The page supports both dark and light color schemes,
                    and the page author prefers / default is light. -->
                <meta name="color-scheme" content="light dark">

                <style>
                    html * {
                        line-height: 1.625;
                        color: #2020131;
                        font-family: "CustomClimatact", Arial, sans-serif;
                    }
                    ';
                    // global font via https://www.pagecloud.com/blog/how-to-add-custom-fonts-to-any-website
                    echo 
                    '   @font-face {
                        font-family: "CustomClimatact";
                        src: url("../public/fonts/poppins/Poppins-Medium.eot");
                        src: url("../public/fonts/poppins/Poppins-Medium.woff") format("woff"),
                        url("../public/fonts/poppins/Poppins-Medium.otf") format("opentype"),
                        url("../public/fonts/poppins/Poppins-Medium.svg#filename") format("svg");
                        }
                        
                        
                </style>

                <!-- Optional theme -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

                <!-- Latest compiled and minified JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            
                <!-- Bootstrap CSS (as per normal) -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
                <!-- And add the Bootstrap-Dark-plugin Variant CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/css/bootstrap-dark-plugin.min.css" rel="stylesheet">
                
                <link rel="stylesheet" href="custom_style.css" > 

                <title>Climatact</title>

                

                <!-- Optional Meta Theme Color is also supported on Safari and Chrome -->
                <meta name="theme-color" content="#111111" media="(prefers-color-scheme: light)">
                <meta name="theme-color" content="#eeeeee" media="(prefers-color-scheme: dark)">
            </head>
            
            <body>
                <div class="container">';
        
}

function print_top_menu() {
     // Print header and navbar
     echo 
        

    '<div class="hero-unit">
        <br>
        <h1>Climatact</h1>
        <p>Confront the rapid climate breakdown
        occuring all over the world.</p>
        <p>
            <small>
                Inform yourself about <b>Weather, Natural Disasters, 
                and Sea Level</b> trends both local & regional.
            </small>
        </p>
            
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="/">Home</a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="weather.php" > Weather</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="disasters.php" >Natural Disasters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sea_level.php">Sea Level</a>
                    </li>
                </ul>
            </div>
        </nav>

        <hr>
    </div>';
}

// This function is necessary to close the actual html and body tags after printing or outputing your desired data.
function print_close_page(){
    global $connection;

    // Close connections and close page
    oci_close($connection);
    
    echo 
        '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
            crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" 
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
            crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" 
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
            crossorigin="anonymous">
        </script>';

    echo  
                '</div>
            </body>
        </html>';
}
