<?php

declare(strict_types=1);

class User
{
    public function cancel(bool|string $immediate = false): void
    {
        var_dump($immediate);
    }

    public function cancelNow(): void
    {
        $this->cancel(true);
    }

    public function cancelOn(string|DateTime $when): void
    {
        $this->cancel($when); // $when expects bool|string, but DateTime|string given.
    }
}

$joe = new User;

$joe->cancel();
$joe->cancelNow();
$joe->cancelOn('thursday');
