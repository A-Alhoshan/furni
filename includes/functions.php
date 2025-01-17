<?php
function is_user_logged_in_web() {
    if (isset($_SESSION['id'])) {
        return true;
    }
    return false;
}
function getTitle() {
    global $pageTitle;
    if (isset($pageTitle)) {
        echo $pageTitle;
    } else {
        echo "Default";
    }
}
function tabs_logic()
{
    include 'includes/templates' . '/tabs_logic.php';
}
function redirect($redirect = '/index.php') {
    header('location: ' . BASE_URL . $redirect );
    exit(0);
}




