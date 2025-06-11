<?php

namespace App\Helpers;

function log_activity($adminId, $activity)
{
    \App\Models\AdminLog::create([
        'admin_id' => $adminId,
        'activity' => $activity,
        'ip_address' => request()->ip(),
    ]);
}
