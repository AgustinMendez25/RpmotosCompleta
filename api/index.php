<?php
/**
 * Here is the serverless function entry
 * for deployment with Vercel.
 */

$filename = $_SERVER['SCRIPT_NAME'] == '/' ? '/index.php' : ($_SERVER['SCRIPT_NAME'] ?? '/index.php');

if ($filename === '/index.php') {
    echo require __DIR__ . '/../public/index.php';
} else {
    echo require __DIR__ . '/../public/' . $filename;
}