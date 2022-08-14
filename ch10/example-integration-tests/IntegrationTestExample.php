<?php

declare(strict_types=1);

class IntegrationTestExample
{
    public function productIsSaved(Tester $tester)
    {
        $product = new Product();
        $product->setId(123);
        $product->setName('USB Coffee Maker');
        $product->save();

        $this->tester->seeInDatabase(
            'products',
            ['id' => 123, 'name' => 'USB Coffee Maker' ]
        );
    }
}