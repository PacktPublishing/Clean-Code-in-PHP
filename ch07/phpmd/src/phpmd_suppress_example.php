<?php

class User
{
    public static function find(int $id): array
    {
        return [];
    }
}

class Order
{
    public function find(int $id): array
    {
    }
}




/**
* @Suppress Warnings(PHPMD.StaticAccess)
*/
class ExampleClass {
    public function loadData(string $id) {
        $userData = User::find($id);

        $test = new Order();
        $test->find($id);
    }
}