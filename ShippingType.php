<?php

abstract class ShippingType
{
    abstract public function getCost(Order $order);
}