<?php

class TrainShipping extends ShippingType
{
    public function getCost(Order $order)
    {
        return $order->getTotalItems()*5.5;
    }
}