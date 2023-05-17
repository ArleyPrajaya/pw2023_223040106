<?php 
define('BASE_URL', '/pw2023_223040106/kuliah/pertemuan8/');

function checkActive($url) {
    return ($_SERVER["REQUEST_URI"] == BASE_URL . $url ? 'active' : '');
}