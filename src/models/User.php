<?php
class User extends Model
{
    protected static $tableName = 'users';
    protected static $columns = [
        'id',
        'username',
        'password'
    ];

    public function insert()
    {
        return parent::insert();
    }
}
