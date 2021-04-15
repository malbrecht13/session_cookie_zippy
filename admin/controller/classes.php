<?php 

$page = 'class';

switch($action) {
    case 'add_class':
        $class = filter_input(INPUT_POST, 'class_name', FILTER_SANITIZE_STRING);
        ClassesDB::add_class($class);
        $classes = ClassesDB::get_classes();
        include('view/class_list.php');
        break;
    case 'delete_class':
        ClassesDB::delete_class($class_id);
        $classes = ClassesDB::get_classes();
        include('view/class_list.php');
        break;
    case 'edit_classes':
        $classes = ClassDB::get_classes();
        include('view/class_list.php');
        break;
    default:
        $vehicles = VehiclesDB::list_vehicles($make_id, $sort_by, $type_id, $class_id);
        include('view/vehicle_list.php');
        break;
}