<?php

namespace App\Enums;

enum UserTypeEnum: string
{
    case CLIENT = 'client';
    case JOBSEEKER = 'jobseeker';
    case ADMIN = 'admin';

    public function label(): string
    {
        return match ($this) {
            self::ADMIN => 'Admin',
            self::CLIENT => 'Client',
            self::JOBSEEKER => 'Jobseeker',
        };
    }
}
