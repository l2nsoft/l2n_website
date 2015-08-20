<?php
if (isset($_REQUEST['page']))
{
    if (file_exists('page/'.trim($_REQUEST['page']).".php"))
    {
        require 'page/'.trim($_REQUEST['page']).".php";
    }
    else
    {
        require "page/home.php";
        //require "page/under_construction.php";
    }
}
else
{
    require "page/home.php";
    //require "page/under_construction.php";
}