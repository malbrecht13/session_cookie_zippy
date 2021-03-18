<?php
    
    require('model/database.php');
    require('model/vehicles_db.php');
    require('model/makes_db.php');
    require('model/types_db.php');
    require('model/classes_db.php');

    $make_id = filter_input(INPUT_POST, 'make_id', FILTER_VALIDATE_INT);
    $type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
    $class_id = filter_input(INPUT_POST, 'class_id', FILTER_VALIDATE_INT);
    $sort_by = filter_input(INPUT_POST, 'sort_by', FILTER_SANITIZE_STRING);
    $makes = get_makes();
    $types = get_types();
    $classes = get_classes();

    $vehicles = list_vehicles($make_id, $sort_by, $type_id, $class_id);

    include('View/vehicle_list.php');
      