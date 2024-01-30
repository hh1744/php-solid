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

// Créer une commande avec un type d'expédition par train
$order = new \Order(new TrainShipping());

// Obtenir le coût d'expédition
$shippingCost = $order->getShippingCost();

// Utiliser le coût d'expédition comme nécessaire
echo "Le cout d'expedition est : $shippingCost";