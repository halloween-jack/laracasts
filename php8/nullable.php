<?php

class User
{
    public function profile(): ?Profile
    {
        return new Profile;
    }
}

class Profile
{
    public function employment(): string
    {
        return 'web developer';
    }
}

$user = new User;

// $profile = $user->profile();
//
// if ($profile) {
//     echo $profile->employment();
// }

echo $user->profile()?->employment() ?? 'Not provided';
