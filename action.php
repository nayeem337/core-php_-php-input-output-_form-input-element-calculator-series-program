<?php

require_once 'vendor/autoload.php';
use App\classes\FullName;
use App\classes\Calculator;
use App\classes\Series;

$message = '';


if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }


    elseif ($_GET['page'] == 'full-name-submit')
    {
        $fullName  =  new FullName($_POST);
        $message   =  $fullName->makeFullName();;
        include 'pages/home.php';

    }

    elseif ($_GET['page'] == 'calculator')
    {
        include 'pages/calculator.php';
    }

    elseif ($_GET['page'] == 'calculate')
    {
        $calculator  = new Calculator($_POST);
        $message     = $calculator->getResult();
        include 'pages/calculator.php';
    }

    elseif ($_GET['page'] == 'series-program')
    {
        include 'pages/series-program.php';
    }


    elseif ($_GET['page'] == 'series')
    {
        $series  = new Series($_POST);
        $message = $series->getResult();
        include 'pages/series-program.php';
    }

}