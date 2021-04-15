<?php 

$page = 'make';

switch($action) {
    case 'add_make':
        $make = filter_input(INPUT_POST, 'make_name', FILTER_SANITIZE_STRING);
        MakesDB::add_make($make);
        $makes = MakesDB::get_makes();
        include('view/makes_list.php');
        break;
    case 'delete_make':
        MakesDB::delete_make($make_id);
        $makes = MakesDB::get_makes();
        include('view/makes_list.php');
        break;
    case 'edit_makes':
        $makes = MakesDB::get_makes();
        include('view/makes_list.php');
        break;
    default:
        $vehicles = VehiclesDB::list_vehicles($make_id, $sort_by, $type_id, $class_id);
        include('view/vehicle_list.php');
        break;
}