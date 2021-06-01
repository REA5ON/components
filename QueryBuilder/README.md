#Query Builder
QueryBuilder is an easy component to create SQL Queries.
Supports databases which are supported by PDO.
###Installation:

>Copy folder to the project root.

###How it works?:

>Just include file /QueryBuilder/start.php and then assign to variable in your project:
$database = include '/start.php';

###Table 'peoples' :
| id|name|age|
  |---|:----:|---|
  | 1 | John |16|
  | 2 | Jane |12|
  | 3 | Ralf | 5|
##Query Builder Methods:
###SELECT
+ ####Get all table (getAll('table'))
  ```php
   //the table you need
   $database->getAll('peoples');
  ```
     + Result:
        ```php
       [
            [
                'id'   => 1,
                'name' => 'John',
                'age'  => '16'
            ],
            [
                'id'   => 2,
                'name' => 'Jane',
                'age'  => '12'
            ],
            [
                'id'   => 3,
                'name' => 'Ralf',
                'age'  => '5'
            ],
       ]
        ```
+ ####Get one string from the table (getOne('table', 'id');).
   ```php
   //table - the table you need, id - the string you need
   $database->getOne('peoples', '2');
   ```
     + Result:
        ```php
        [
           'id'   => 2,
           'name' => 'Jane',
           'age'  => '12'
        ];
        ```
***
###INSERT
+ ####Insert array[ ] to the table (create('table', ['data']))
   ```php
   //table - the table you need, array[] - data to create
  $database->create('peoples', ['name' => 'Dan', 'age' => '22'];
   ```
 *You must use autoincrement in yours SQL 
+ Result:

| id|name|age|
  |---|:----:|---|
  | 1 | John |16|
  | 2 | Jane |12|
  | 3 | Ralf | 5|
  | 4 | Dan | 22|
***
###UPDATE
+ ####Update string in the table (update('table', 'id', ['data']))
   ```php
   //table - the table you need, id - the string you need to update, array[] - data to update
  $database->update('peoples', '2', ['name' => 'Mary', 'age' => '18');
   ```
+ Result:
  
| id|name|age|
  |---|:----:|---|
  | 1 | John |16|
  | 2 | Mary |18|
  | 3 | Ralf | 5|
***
###DELETE
+ ####Delete string in the table (delete('table', 'id'))
   ```php
   //table - the table you need, id - the string you need to delete
  $database->delete('peoples', 1);
   ```
+ Result:
  
| id|name|age|
  |---|:----:|---|
  | 2 | Jane |12|
  | 3 | Ralf | 5|