<?php
class Trips extends Model
{
    protected static $columns = [
        'origin',
        'target',
        'distance',
        'model',
        'car_autonomy',
        'fuel',
        'fuel_price',
        'total_price',
        'total_liters'
    ];
}
