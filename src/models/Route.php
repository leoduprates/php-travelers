<?php
class Route extends Model
{
    protected static $tableName = 'route';
    protected static $columns = [
        'id',
        'origin',
        'target',
        'distance'
    ];
}
