<?php

namespace Longdhareja\Radar;

// src/Helpers.php

class Helpers
{
    public static function statusLabel(string $status): string
    {
        return match ($status) {
            'approved' => 'Approved',
            'rejected' => 'Rejected',
            default => 'Pending',
        };
    }
}
