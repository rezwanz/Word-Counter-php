<?php

require_once './vendor/autoload.php';

use App\classes\Home;
use App\classes\OddEven;
use App\classes\WordCount;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include "pages/home.php";
    }
    elseif ($_GET['page'] == 'odd-even')
    {
        include "pages/oddEven.php";
    }
    elseif ($_GET['page'] == 'word-count')
    {
        include "pages/wordCount.php";
    }
}
elseif (isset($_POST['btn']))
{
    if ($_POST['btn'] == 'Get odd even')
    {
        $oddEven = new OddEven($_POST);
        $result = $oddEven->index();
        include "pages/oddEven.php";
    }
    elseif ($_POST['btn'] == 'word count')
    {
        $wordCount = new WordCount($_POST); //Creating an object
        $results = $wordCount->index();
        include "pages/wordCount.php";
    }
}