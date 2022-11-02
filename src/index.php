<?php
include_once('header.php');

// test db connection and show output.
// test_connection();


// Show options for Weather, Disaster, and Sea Level navigation.
show_options();


// close page
print_close_page();


// ------------------------------------------------------------------------ //
// Functions
// ------------------------------------------------------------------------ //


// test query shows information if connection successful.
function test_connection(){
    global $connection;

    // Get all tables made by db user.
    $sql = 
        'SELECT table_name
        FROM user_tables
        ORDER BY table_name';

    $statement = oci_parse($connection, $sql);
    oci_execute($statement);
    
    while (($row = oci_fetch_object($statement))) {
       $table_names[] = $row->TABLE_NAME;
    }

    // If test query is not empty, connection succeeded.
    if($table_names){
        echo '<h4 class="text-success"><i>Connection to Cise Database Successful</i></h4>';
        echo '<br>';
        print_tables($table_names);
        echo '<br>';

        // Count regional temperature.
        $count = count_table($table = 'RegionalTemperature');
        echo '<p>Total Count in <b>'.$table.' : '.$count.'</p> </b>';
    }
    // Connection Failed.
    else {
        echo '<h4 class="text-danger"><i>Connection to Cise Database Failed</i></h4>';
        echo '<br>';
    }

}

// test function that prints user table names into a single row html table.
function print_tables($data){
    
    // create general table
    $table = 
        '<div class="col-6"> 
            <table class="table">
                <thead>';
    
    // create headers based on $data
        $table .= '<tr>';
            $table .= '<th scope="col">#</th>';
            $table .= '<th scope="col">Table Name</th>';
        $table .= '</tr>';
    $table .= '</thead>';

    // creatre body based on data
    $table .=
        '<tbody>';
    
    foreach($data as $index => $value) {
        $table .=  
            '<tr>';

        $num = $index+1;
        $table .= 
                '<th scope="row">'.$num.'</th>';
        $table .= '
                <td>'.$value.'</td>';

        $table .=  
            '</tr>';
    } 
    
    $table .=  
        '</tbody>';
        

    // close table
    $table .= 
            '</div>
        </table>';

    echo $table;

}

// test function that returns count of sql table
function count_table($table) {
    global $connection;

    $sql = 
        'SELECT count(*) as total
        FROM '.$table;

    $statement = oci_parse($connection, $sql);
    oci_execute($statement);


    
    while ($row = oci_fetch_object($statement)) {
        $count = $row->TOTAL;
    }

    return $count;
}

// Show weather, disaster, and sea_level options
function show_options() {

    echo '<div class="container">';
        echo '<div class="row">';

            // First col.
            echo '<div class="col-4">';
                echo create_card($title='Weather Data', $text='Some Weather Info.', 
                    $href='weather.php', $src_image="public/images/weather.png");
            echo '</div>';

            // Second col.
            echo '<div class="col-4">';
                echo create_card($title='Disaster Data', $text='Some Disaster Info.', 
                    $href='disaster.php', $src_image="public/images/disaster.png");
            echo '</div>';
            
            // Third col.
            echo '<div class="col-4">';
                echo create_card($title='Sea Level Data', $text='Some Sea Level Info.', 
                    $href='sea_level.php', $src_image="public/images/sea_level.png");
            echo '</div>';

        echo '</div>';
    echo '</div>
    <br><br>';

}

// create cards for weather, disaster, and sea_level data.
function create_card($title, $text, $href, $src_image) {

    $card = 
        '<div class="card" style="width: 18rem;">
            <img class="card-img-top" src="'.$src_image.'" height="150px" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">'.$title.'</h5>
                <p class="card-text">'.$text.'</p>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Stat 1</li>
                <li class="list-group-item">Stat 2</li>
                <li class="list-group-item">Stat 3</li>
            </ul>

            <div class="card-body">
                <a href="'.$href.'?REPORT=1" class="card-link">See Details</a>
            </div>
        </div>'; 

    return $card;
}