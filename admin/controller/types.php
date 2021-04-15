<?php 

$page = 'type';

switch($action) {
    case 'add_type':
        $type = filter_input(INPUT_POST, 'type_name', FILTER_SANITIZE_STRING);
        TypesDB::add_type($type);
        $types = TypesDB::get_types();
        include('view/types_list.php');
        break;
    case 'delete_type':
        TypesDB::delete_type($type_id);
        $types = TypesDB::get_types();
        include('view/types_list.php');
        break;
    case 'edit_types':
        $types = TypesDB::get_types();
        include('view/types_list.php');
        break;
    default:
        $vehicles = VehiclesDB::list_vehicles($make_id, $sort_by, $type_id, $class_id);
        include('view/vehicle_list.php');
        break;
}