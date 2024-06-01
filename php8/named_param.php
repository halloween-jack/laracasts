<?php

class Invoice
{
    public function __construct(
        private string $description,
        private int $total,
        private DateTime $chargeDate,
        private bool $paid
    ) {
    }
}

$invoice = new Invoice(
    paid: true,
    total: 10000,
    description: 'Customer installation',
    chargeDate: new DateTime(),
);

var_dump($invoice);
