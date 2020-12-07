<?php 

$db = new SQLite3('test.db');
// $db = new SQLite3(':memory:');


// sqlite_version();
// sqlite_create();
sqlite_fetch_all();







//-------------demo


function sqlite_version(){
    $db = new SQLite3(':memory:');
    $version = $db->querySingle('SELECT SQLITE_VERSION()');
    echo $version . "\n";
}

function sqlite_create($dbFile='test.db'){
    $db = new SQLite3($dbFile);
    $db->exec("CREATE TABLE cars(id INTEGER PRIMARY KEY, name TEXT, price INT)");
    $db->exec("INSERT INTO cars(name, price) VALUES('Audi', 52642)");
    $db->exec("INSERT INTO cars(name, price) VALUES('Mercedes', 57127)");
    $db->exec("INSERT INTO cars(name, price) VALUES('Skoda', 9000)");
    $db->exec("INSERT INTO cars(name, price) VALUES('Volvo', 29000)");
    $last_row_id = $db->lastInsertRowID();
    return $last_row_id;
}



function sqlite_fetch_all(){
    $db = new SQLite3('test.db');
    $res = $db->query('SELECT * FROM cars');
    while ($row = $res->fetchArray()) {
        echo "{$row['id']} {$row['name']} {$row['price']} \n";
    }
}



    function getArgType($arg) {
        switch (gettype($arg)) {
            case 'double':  return SQLITE3_FLOAT;
            case 'integer': return SQLITE3_INTEGER;
            case 'boolean': return SQLITE3_INTEGER;
            case 'NULL':    return SQLITE3_NULL;
            case 'string':  return SQLITE3_TEXT;
            default:
                throw new \InvalidArgumentException('Argument is of invalid type '.gettype($arg));
        }
    }
