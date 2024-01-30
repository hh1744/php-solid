<?php

namespace avant;

class Order
{
    // eco ou rapide
    private $shippingPlan;

    // en kg
    private $orderWeight;

    // avion ou train par exemple
    private $shippingMode;
    /*...*/

    public function getShippingCost()
    {
        $cost = '10';

        if ($this->shippingMode == 'avion') {
            $cost = $this->orderWeight * 3;

            if ($this->shippingPlan == 'rapide') {
                $cost = 1.3 * $cost;
            }
        }

        if ($this->shippingMode == 'train') {
            $cost = $this->orderWeight * 2;

            if ($this->shippingPlan == 'rapide') {
                $cost = 1.1 * $cost;
            }
        }

        return $cost;
    }
}