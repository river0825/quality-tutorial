<?php
declare(strict_types=1);

namespace Asgrim\Domain\Payment;

final class PendingPayment
{
    private function __construct()
    {
    }

    public static function new()
    {
        return new self();
    }
}
