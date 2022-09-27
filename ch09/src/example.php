<?php

class Vat
{
    private float $vat = 0.19;

    public function getVat(): int
    {
        return $this->vat;
    }
}

class OrderPosition
{
    public function getGrossPrice(float $netPrice): float
    {
        $vatModel = new Vat();
        $vat = $vatModel->getVat();

        return $netPrice * (1 + $vat);
    }
}

$orderPosition = new OrderPosition();
echo $orderPosition->getGrossPrice(100);
