<?php

use Carbon\Carbon;
use Illuminate\Support\Str;

if (!function_exists('formatPrettyDate')) {
function formatPrettyDate($date)
{
    return Carbon::parse($date)->format('F j, Y');
}
}

if (!function_exists('shortDescriptionText')) {
function shortDescriptionText($description)
{
    return Str::limit(strip_tags($description), 200, '...');
}
}

if (!function_exists('shortestDescriptionText')) {
function shortestDescriptionText($description)
{
    return Str::limit(strip_tags($description), 100, '...');
}
}
