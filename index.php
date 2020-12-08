<?php 

include 'vendor/autoload.php';


//======================================
//https://packagist.org/packages/aimeos/map

// use \Aimeos\Map;

// $list = [['id' => 'one', 'value' => 'value1'], ['id' => 'two', 'value' => 'value2'], null];
// $value = map( $list )                                // create Map
//     ->push( ['id' => 'three', 'value' => 'value3'] ) // add element
//     ->remove( 0 )                                    // remove element
//     ->filter()                                       // remove empty values
//     ->sort()                                         // sort elements
//     // ->col( 'value', 'id' )                           // create ['three' => 'value3']
//     // ->first();                                       // return first value
//     ;


// $value = Map::from( [1 => 'a', 0 => 'b'] )->arsort();
// Map::from( ['a', 'b'] );





//========================================
// https://github.com/lodash-php/lodash-php

// use function _\each;
// each([1, 2, 3], function (int $item) {
//     $GLOBALS['a'][]  = $item;
// });

// use function _\pullAt;
// $array = ['a', 'b', 'c', 'd'];
// $pulled = pullAt($array, [1, 3]);

// -----

// _::each([1, 2, 3], function (int $item) {
//     var_dump($item);
// });





//========================================
// https://idiorm.readthedocs.io/en/latest/querying.html
// https://www.runoob.com/sqlite/sqlite-create-table.html

//sqlite datatype: blob, integer, text, real


//---------test
    $fileName= './sqliteDemo.db';
    // ORM::configure('sqlite:'. $fileName);

    //---init
    // ORM::get_db()->exec("
    // ORM::raw_execute("
    //     CREATE TABLE IF NOT EXISTS user (
    //         id INTEGER PRIMARY KEY, 
    //         name TEXT, 
    //         age INTEGER, 
    //         email TEXT,
    //         create_time TEXT 
    //     );"
    // );
    // ORM::raw_execute("
    //     CREATE TABLE IF NOT EXISTS tweet (
    //         id INTEGER PRIMARY KEY, 
    //         user_id TEXT, 
    //         text TEXT, 
    //         create_time TEXT 
    //     );"
    // );
    // $user = ORM::for_table('user');

    // // 20개 생성
    // for ($i=0; $i < 20 ; $i++) { 
    //     $user = ORM::for_table('user')->create();
    //     $user->name = 'user_'. $i;
    //     $user->email = $user->name .'@site.com';
    //     $user->age = $i + 20;
    //     $user->create_time = time();
    //     $user->save();

    //     $tweet = ORM::for_table('tweet')->create();
    //     $tweet->user_id = $i+10;
    //     $tweet->text = 'text__'. $i;
    //     $tweet->create_time = time();
    //     $tweet->save();
    // }


    //------demo idiorm

    // $user = ORM::for_table('user')->create();
    // $user->set('name', 'Bob Smith');
    // $user->age = 20;
    // $user->set_expr('create_time', "strftime('%s','now')");
    // $user->save();


    // $user = ORM::for_table('user')
    //     ->where_equal('name', 'test_5')
    //     ->find_one();

    // $tweets = ORM::for_table('tweet')
    //     ->select('tweet.*')
    //     ->join('user', array(
    //         'user.id', '=', 'tweet.user_id'
    //     ))
    //     ->where_like('text', '%text%')
    //     ->find_many();

    // foreach ($tweets as $tweet) {
    //     echo $tweet->text;
    // }



    //------demo paris

    // class User extends Model {
    //     public function tweets() {
    //         return $this->has_many('Tweet');
    //     }
    // }
    // class Tweet extends Model {}
    

    // $user = Model::factory('User')
    //     ->where_equal('name', 'user_9')
    //     ->find_one();
    // $user->email = 'modify';
    // $user->save();
    // $tweets = $user->tweets()->find_many();
    // foreach ($tweets as $tweet) {
    //     echo $tweet->text;
    // }


    // $users = Model::factory('User')
    //     ->where_equal('name', 'user_9')
    //     ->find_many();
    // foreach ($users as $user) {
    //     $user->email = 'modify';
    //     $user->save();
    // }
    





//테이블 삭제
// echo (ORM::raw_execute('DROP TABLE user')) ? "Table dropped" : "Drop query failed";
// echo (ORM::raw_execute('DROP TABLE tweet')) ? "Table dropped" : "Drop query failed";
// if(file_exists($fileName)) unlink($fileName); //파일 삭제


        //-------API
        // //-----------Configuration
        // // require_once 'idiorm.php';
        // // ORM::configure('sqlite:./example.db');

        // ORM::configure('mysql:host=localhost;dbname=my_database');
        // ORM::configure('username', 'database_user');
        // ORM::configure('password', 'top_secret');

        // ORM::configure('setting_name', 'value_for_setting');
        // ORM::configure(array(
        //     'setting_name_1' => 'value_for_setting_1',
        //     'setting_name_2' => 'value_for_setting_2',
        //     'etc' => 'etc'
        // ));

        // $isLoggingEnabled = ORM::get_config('logging');
        // ORM::configure('logging', false);
        // // some crazy loop we don't want to log
        // ORM::configure('logging', $isLoggingEnabled);


        // ORM::configure('mysql:host=localhost;dbname=my_database');
        // ORM::configure('username', 'database_user');
        // ORM::configure('password', 'top_secret');

        // ORM::configure(array(
        //     'connection_string' => 'mysql:host=localhost;dbname=my_database',
        //     'username' => 'database_user',
        //     'password' => 'top_secret'
        // ));

        // //Result sets
        // ORM::configure('return_result_sets', true); // returns result sets


        // //PDO Driver Options
        // ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'))
        // ORM::configure('error_mode', PDO::ERRMODE_WARNING);
        // ORM::configure('id_column', 'primary_key');
        // ORM::configure('id_column', array('pk_1', 'pk_2'));
        // ORM::configure('id_column_overrides', array(
        //     'person' => 'person_id',
        //     'role' => 'role_id',
        // ));


        // // PDO Error Mode
        // // PDO::ATTR_ERRMODE
        // ORM::configure('error_mode', PDO::ERRMODE_WARNING);


        // // PDO object access
        // // ORM::get_db()
        // // ORM::set_db()
        // // ::save()
        // // ::raw_execute()
        // // ORM::get_last_statement()
        // // PDOStatement::errorCode()
        // // PDOStatement::rowCount()


        // //Identifier quote character

        // //ID Column
        // ORM::configure('id_column', 'primary_key');

        // ORM::configure('id_column_overrides', array(
        //     'person' => 'person_id',
        //     'role' => 'role_id',
        // ));


        // // Limit clause style
        // ORM::get_last_query();
        // ORM::get_query_log();

        // ORM::LIMIT_STYLE_TOP_N;
        // ORM::LIMIT_STYLE_LIMIT;


        // // Query logger
        // ORM::configure('logger', function($log_string, $query_time) {
        //     echo $log_string . ' in ' . $query_time;
        // });

        // //Query caching
        // ORM::configure('caching', true);
        // ORM::configure('caching_auto_clear', true);


        // // Warnings and gotchas   // Memcached.
        // ORM::clear_cache();

        // // Custom caching
        // $my_cache = array();
        // ORM::configure('cache_query_result', function ($cache_key, $value, $table_name, $connection_name) use (&$my_cache) {
        //     $my_cache[$cache_key] = $value;
        // });
        // ORM::configure('check_query_cache', function ($cache_key, $table_name, $connection_name) use (&$my_cache) {
        //     if(isset($my_cache[$cache_key])){
        //     return $my_cache[$cache_key];
        //     } else {
        //     return false;
        //     }
        // });
        // ORM::configure('clear_cache', function ($table_name, $connection_name) use (&$my_cache) {
        //     $my_cache = array();
        // });

        // ORM::configure('create_cache_key', function ($query, $parameters, $table_name, $connection_name) {
        //     $parameter_string = join(',', $parameters);
        //     $key = $query . ':' . $parameter_string;
        //     $my_key = 'my-prefix'.crc32($key);
        //     return $my_key;
        // });





        // //---------Querying

        // //A note on PSR-1 and camelCase
        // $person = ORM::for_table('person')->where('name', 'Fred Bloggs')->find_one();
        // $person = ORM::forTable('person')->where('name', 'Fred Bloggs')->findOne();


        // // Single records
        // $person = ORM::for_table('person')->where('name', 'Fred Bloggs')->find_one();
        // $person = ORM::for_table('person')->find_one(5);
        // $person = ORM::for_table('user_role')->find_one(array(
        //     'user_id' => 34,
        //     'role_id' => 10
        // ));

        // // Multiple records
        // // $people = ORM::for_table('person')->find_many();
        // // $females = ORM::for_table('person')->where('gender', 'female')->find_many();

        // // As a result set
        // ORM::configure('return_result_sets', true);

        // $people = ORM::for_table('person')->find_many();
        // foreach ($people as $person) {
        //     $person->age = 50;
        //     $person->save();
        // }

        // ORM::for_table('person')->find_result_set()
        // ->set('age', 50)
        // ->save();

        // foreach(ORM::for_table('person')->find_result_set() as $record) {
        //     echo $record->name;
        // }
        // echo count(ORM::for_table('person')->find_result_set());


        // // As an associative array
        // $females = ORM::for_table('person')->where('gender', 'female')->find_array();

        // // Counting results
        // $number_of_people = ORM::for_table('person')->count();




        // // Equality: where, where_equal, where_not_equal
        // $people = ORM::for_table('person')
        //             ->where(array(
        //                 'name' => 'Fred',
        //                 'age' => 20
        //             ))
        //             ->find_many();// Creates SQL: SELECT * FROM `person` WHERE `name` = "Fred" AND `age` = "20";

        // // Shortcut: where_id_is
        // // Shortcut: where_id_in
        // // Less than / greater than: where_lt, where_gt, where_lte, where_gte
        // // String comparision: where_like and where_not_like
        // // $people = ORM::for_table('person')->where_like('name', '%fred%')->find_many();


        // // Multiple OR’ed conditions
        // $people = ORM::for_table('person')
        //             ->where_any_is(array(
        //                 array('name' => 'Joe', 'age' => 10),
        //                 array('name' => 'Fred', 'age' => 20)))
        //             ->find_many();// Creates SQL:SELECT * FROM `widget` WHERE (( `name` = 'Joe' AND `age` = '10' ) OR ( `name` = 'Fred' AND `age` = '20' ));

        // $people = ORM::for_table('person')
        //             ->where_any_is(array(
        //                 array('name' => 'Joe', 'age' => 10),
        //                 array('name' => 'Fred', 'age' => 20)), array('age' => '>'))
        //             ->find_many();// Creates SQL:SELECT * FROM `widget` WHERE (( `name` = 'Joe' AND `age` = '10' ) OR ( `name` = 'Fred' AND `age` > '20' ));

        // $people = ORM::for_table('person')
        //             ->where_any_is(array(
        //                 array('score' => '5', 'age' => 10),
        //                 array('score' => '15', 'age' => 20)), '>')
        //             ->find_many();// Creates SQL:SELECT * FROM `widget` WHERE (( `score` > '5' AND `age` > '10' ) OR ( `score` > '15' AND `age` > '20' ));


        // //Set membership: where_in and where_not_in
        // $people = ORM::for_table('person')->where_in('name', array('Fred', 'Joe', 'John'))->find_many();


        // // Working with NULL values: where_null and where_not_null

        // // Raw WHERE clauses
        // $people = ORM::for_table('person')
        //             ->where('name', 'Fred')
        //             ->where_raw('(`age` = ? OR `age` = ?)', array(20, 25))
        //             ->order_by_asc('name')
        //             ->find_many();// Creates SQL:SELECT * FROM `person` WHERE `name` = "Fred" AND (`age` = 20 OR `age` = 25) ORDER BY `name` ASC;



        // // Limits and offsets
        // $people = ORM::for_table('person')->where('gender', 'female')->limit(5)->offset(10)->find_many();


        // // Ordering
        // $people = ORM::for_table('person')->order_by_asc('gender')->order_by_desc('name')->find_many();
        // $people = ORM::for_table('person')->order_by_expr('SOUNDEX(`name`)')->find_many();

        // // Grouping
        // $people = ORM::for_table('person')->where('gender', 'female')->group_by('name')->find_many();
        // $people = ORM::for_table('person')->where('gender', 'female')->group_by_expr("FROM_UNIXTIME(`time`, '%Y-%m')")->find_many();


        // // Having
        // $people = ORM::for_table('person')->group_by('name')->having_not_like('name', '%bob%')->find_many();

        // // Result columns
        // $people = ORM::for_table('person')->find_many();// SELECT * FROM `person`;
        // $people = ORM::for_table('person')->select('name')->select('age')->find_many();//SELECT `name`, `age` FROM `person`;
        // $people = ORM::for_table('person')->select('name', 'person_name')->find_many();//SELECT `name` AS `person_name` FROM `person`;
        // $people = ORM::for_table('person')->select('person.name', 'person_name')->find_many();//SELECT `person`.`name` AS `person_name` FROM `person`;
        // $people_count = ORM::for_table('person')->select_expr('COUNT(*)', 'count')->find_many();//SELECT COUNT(*) AS `count` FROM `person`;


        // // Shortcuts for specifying many columns
        // $people = ORM::for_table('person')->select_many('name', 'age')->find_many();//SELECT `name`, `age` FROM `person`;
        // $people = ORM::for_table('person')->select_many(array('first_name' => 'name'), 'age', 'height')->find_many();//SELECT `name` AS `first_name`, `age`, `height` FROM `person`;

        // select_many(array('alias' => 'column', 'column2', 'alias2' => 'column3'), 'column4', 'column5')
        // select_many('column', 'column2', 'column3')
        // select_many(array('column', 'column2', 'column3'), 'column4', 'column5')

        // $people = ORM::for_table('person')->select_many('name', 'age', 'height')->select_expr('NOW()', 'timestamp')->find_many();//SELECT `name`, `age`, `height`, NOW() AS `timestamp` FROM `person`;


        // //DISTINCT
        // $distinct_names = ORM::for_table('person')->distinct()->select('name')->find_many();//SELECT DISTINCT `name` FROM `person`;

        // //Joins
        // // Methods: join, inner_join, left_outer_join, right_outer_join, full_outer_join.
        // $results = ORM::for_table('person')->join('person_profile', array('person.id', '=', 'person_profile.person_id'))->find_many();
        // $results = ORM::for_table('person')->join('person_profile', array('person.id', '=', 'person_profile.person_id'))->find_many();
        // $results = ORM::for_table('person')->join('person_profile', 'person.id = person_profile.person_id')->find_many();
        // $results = ORM::for_table('person')
        //     ->table_alias('p1')
        //     ->select('p1.*')
        //     ->select('p2.name', 'parent_name')
        //     ->join('person', array('p1.parent', '=', 'p2.id'), 'p2')
        //     ->find_many();


        // // Raw JOIN clauses
        // $people = ORM::for_table('person')
        //             ->raw_join(
        //                 'JOIN (SELECT * FROM role WHERE role.name = ?)',
        //                 array('person.role_id', '=', 'role.id'),
        //                 'role',
        //                 array('role' => 'janitor'))
        //             ->order_by_asc('person.name')
        //             ->find_many();// Creates SQL:SELECT * FROM `person` JOIN (SELECT * FROM role WHERE role.name = 'janitor') `role` ON `person`.`role_id` = `role`.`id` ORDER BY `person`.`name` ASC


        // // Aggregate functions
        // //MIN, AVG, MAX and SUM in addition to COUNT
        // $min = ORM::for_table('person')->min('height');

        // // Raw queries
        // $people = ORM::for_table('person')->raw_query('SELECT p.* FROM person p JOIN role r ON p.role_id = r.id WHERE r.name = :role', array('role' => 'janitor'))->find_many();

        // // Dropping tables
        // if (ORM::raw_execute('DROP TABLE my_table')) {
        //     echo "Table dropped";
        // } else {
        //     echo "Drop query failed";
        // }

        // //Selecting rows
        // $res = ORM::raw_execute('SHOW TABLES');
        // $statement = ORM::get_last_statement();
        // $rows = array();
        // while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        //     var_dump($row);
        // }


        // // Getting the PDO instance
        // $pdo = ORM::get_db();
        // foreach($pdo->query('SHOW TABLES') as $row) {
        //     var_dump($row);
        // }




        // //-------- Models
        // //Getting data from objects
        // $person = ORM::for_table('person')->find_one(5);
        // $name = $person->get('name');
        // $name = $person->name;

        // $person = ORM::for_table('person')->create();
        // $person->first_name = 'Fred';
        // $person->surname = 'Bloggs';
        // $person->age = 50;
        // $data = $person->as_array();// Returns array('first_name' => 'Fred', 'surname' => 'Bloggs', 'age' => 50)
        // $data = $person->as_array('first_name', 'age');// Returns array('first_name' => 'Fred', 'age' => 50)



        // //Updating records
        // $person = ORM::for_table('person')->find_one(5);
        // $person->set('name', 'Bob Smith');
        // $person->age = 20;
        // $person->set(array(
        //     'name' => 'Bob Smith',
        //     'age'  => 20
        // ));
        // $person->save();


        // //Properties containing expressions
        // $person = ORM::for_table('person')->find_one(5);
        // $person->set('name', 'Bob Smith');
        // $person->age = 20;
        // $person->set_expr('updated', 'NOW()');
        // $person->save();


        // //Creating new records
        // $person = ORM::for_table('person')->create();
        // $person->name = 'Joe Bloggs';
        // $person->age = 40;
        // $person->save();


        // //Properties containing expressions
        // $person = ORM::for_table('person')->create();
        // $person->set('name', 'Bob Smith');
        // $person->age = 20;
        // $person->set_expr('added', 'NOW()');
        // $person->save();


        // //Checking whether a property has been modified
        // $name_has_changed = $person->is_dirty('name'); // Returns true or false

        // //Deleting records
        // $person = ORM::for_table('person')->find_one(5);
        // $person->delete();


        // $person = ORM::for_table('person')
        //     ->where_equal('zipcode', 55555)
        //     ->delete_many();


        // //----------Transactions

        // ORM::get_db()->beginTransaction();
        // ORM::get_db()->commit();
        // ORM::get_db()->rollBack();



        // //-------------Multiple Connections

        // ORM::configure('sqlite:./example.db');
        // ORM::configure('mysql:host=localhost;dbname=my_database', null, 'remote');
        // ORM::configure('username', 'database_user', 'remote');
        // ORM::configure('password', 'top_secret', 'remote');
        // $person = ORM::for_table('person')->find_one(5);
        // $person = ORM::for_table('person', ORM::DEFAULT_CONNECTION)->find_one(5);
        // $person = ORM::for_table('different_person', 'remote')->find_one(5);



        // // Supported Methods
        // // ORM::configure($key, $value, $connection_name)
        // // ORM::for_table($table_name, $connection_name)
        // // ORM::set_db($pdo, $connection_name)
        // // ORM::get_db($connection_name)
        // // ORM::raw_execute($query, $parameters, $connection_name)
        // // ORM::get_last_query($connection_name)
        // // ORM::get_query_log($connection_name)


        // $person = ORM::for_table('person')->find_one(5);
        // $person = ORM::for_table('different_person', 'remote')->find_one(5);
        // ORM::get_last_query();
        // ORM::get_last_query(ORM::DEFAULT_CONNECTION);




//========================================
// https://packagist.org/packages/nette/neon
// https://github.com/nette/neon
// https://doc.nette.org/en/3.0/neon

// use Nette\Neon\Neon;

// Neon::encode($value); // Returns $value converted to NEON
// Neon::encode($value, Neon::BLOCK); // Returns $value converted to multiline NEON
// Neon::decode('hello: world'); // Returns an array ['hello' => 'world']

// try {
//     $neon = Neon::encode($value);
// 	$value = Neon::decode($neon);
// } catch (Nette\Neon\Exception $e) {
// 	// Exception handling
// }




//=======================================
// https://packagist.org/packages/webonyx/graphql-php
// https://github.com/webonyx/graphql-php/tree/aab3d49181467db064b41429cde117a7589625fc/examples


//=======================================
// https://www.slimframework.com/docs/v3/
// https://github.com/slimphp/Slim/tree/3.x





//=======================================
// slim/slim
// chadicus/slim-oauth2-http
// webonyx/graphql-php
// ondrakoupil/graphql-base-project
// web-token/jwt-framework
// chadicus/slim-oauth2
// chadicus/slim-oauth2-middleware
// chadicus/slim-oauth2-http
// chadicus/slim-oauth2-routes
// firebase/php-jwt
// awurth/slim-validation        //https://packagist.org/packages/awurth/slim-validation
// bryanjhv/slim-session:~3.0    // https://github.com/bryanjhv/slim-session/tree/slim-3
// itsgoingd/clockwork
//========================================

echo '<pre>';
print_r($GLOBALS);
