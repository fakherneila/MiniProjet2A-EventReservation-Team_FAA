<?php
// public/index.php – Point d'entrée unique
require_once '../config/database.php';
session_start();

$page = $_GET['page'] ?? 'home';

match ($page) {
    'home'     => require '../app/views/events/list.php',
    'details'  => require '../app/views/events/details.php',
    'reserve'  => require '../app/views/events/reserve.php',
    'admin'    => require '../app/views/admin/login.php',
    'dashboard'=> require '../app/views/admin/dashboard.php',
    default    => require '../app/views/events/list.php',
};