<?php

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'crud';


try {

    $conn = new PDO('mysql:host' .DB_HOST.';dbname=' .DB_NAME,DB_USER,DB_PASS);
    $conn ->exec('SET NAMES utf8');
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}

catch (PDOException $e){

    echo $e->getMessage();
}