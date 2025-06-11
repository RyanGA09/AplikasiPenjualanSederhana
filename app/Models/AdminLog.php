<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminLog extends Model
{
    // protected $fillable = ['action', 'description', 'admin_id'];
    protected $fillable = ['admin_id', 'activity', 'ip_address'];
    public function admin() { return $this->belongsTo(User::class, 'admin_id'); }
}

// app/Helpers/log_activity.php
function log_activity($adminId, $activity)
{
    \App\Models\AdminLog::create([
        'admin_id' => $adminId,
        'activity' => $activity,
        'ip_address' => request()->ip(),
    ]);
}
