<?php
$trips = Trips::query('SELECT ' .
        'route.origin, ' .
        'route.target, ' .
        'route.distance, ' .
        'car.model, ' .
        'car.car_autonomy, ' .
        'car.fuel, ' .
        'car.fuel_price ' .
    'FROM route ' .
    'CROSS JOIN car');

foreach ($trips as $trip) {
    $trip->total_price = round(($trip->distance / $trip->car_autonomy), 2);
    $trip->total_liters = round(($trip->total_price * $trip->fuel_price), 2);
}

loadTemplateView('trips', ['trips' => $trips]);
