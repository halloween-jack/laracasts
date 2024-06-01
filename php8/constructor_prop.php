<?php

class User
{
    public function __construct(protected string $name)
    {
    }
}

class Plan
{
    public function __construct(protected string $name = 'monthly')
    {
    }
}

class SignUp
{
    public function __construct(
        protected User $user,
        protected Plan $plan
    ) {
    }
}

$user = new User('John doe');
$plan = new Plan();

$signup = new SignUp($user, $plan);

var_dump($signup);
