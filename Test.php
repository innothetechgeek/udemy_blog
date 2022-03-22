
<?php

include_once 'Crud.php';

$crud = new Crud();

// $categories = [
//     'Web Development',
//     'Fashion',
//     'Inspiration',
//     'Vacation',
//     'Worship',
// ];

// foreach($categories  as $key => $category){

//     $crud->create(['cat_name'=>$category],'categories');

// }

 

  $result = $crud->read('select * from users where user_id = 1');

  var_dump($result);

 //$crud->create(['name'=>'Admin User','email'=>'admin@gmail.com','password'=>md5('admin123')],'users');
