<?php
class Car extends Model
{
    protected static $tableName = 'car';
    protected static $columns = [
        'id',
        'model',
        'fuel',
        'car_autonomy',
        'fuel_price'
    ];

    public function insert()
    {
        return parent::insert();
    }
}
