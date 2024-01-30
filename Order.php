<?php
require_once 'ShippingType.php';
require_once 'TrainShipping.php';

class Order
{
    private $shippinType;

    public function __construct(ShippingType $shippingType)
    {
        $this->shippinType = $shippingType;
    }

    public function getShippingCost()
    {
        return $this->shippinType->getCost($this);
    }

    public function getTotalItems()
    {
        return 5;
    }
}

// Cr�er une commande avec un type d'exp�dition par train
$order = new \Order(new TrainShipping());

// Obtenir le co�t d'exp�dition
$shippingCost = $order->getShippingCost();

// Utiliser le co�t d'exp�dition comme n�cessaire
echo "Le cout d'expedition est : $shippingCost";