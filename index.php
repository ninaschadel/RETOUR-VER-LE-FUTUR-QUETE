<?php

$destinationTime = new DateTime('2025-06-24 14:30:00');
$presentTime = new DateTime('now');

echo "DESTINATION TIME : " . $destinationTime->format('F j, Y \a\t g:i A') .  "<br />";
echo "PRESENT TIME : " . $presentTime->format('F j, Y \a\t g:i A') .  "<br />";

$duration = $presentTime->diff($destinationTime);

$years = $duration->y;
$months = $duration->m;
$days = $duration->d;
$hours = $duration->h;
$minutes = $duration->i;

echo "Durée : ";
if ($years > 0) {
    echo $years . " an" . ($years > 1 ? "s" : "") . " ";
}
if ($months > 0) {
    echo $months . " mois ";
}
if ($days > 0) {
    echo $days . " jour" . ($days > 1 ? "s" : "") . " ";
}
if ($hours > 0) {
    echo $hours . " heure" . ($hours > 1 ? "s" : "") . " ";
}
if ($minutes > 0) {
    echo $minutes . " minute" . ($minutes > 1 ? "s" : "") . " ";
}
if ($years == 0 && $months == 0 && $days == 0 && $hours == 0 && $minutes == 0) {
    echo "0 minute";
}
echo "\n";
?>