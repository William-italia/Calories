<?php


function formatDate($day)
{
    $dateTime = new DateTime($day);
    return $dateTime->format('d/m');
}
