<?php
 namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $table = 'vouchers';

    protected $fillable = [
        'voucher_type',
        'voucher_owner',
        'sent_at',
        'received_at',
        'status',
    ];
}
