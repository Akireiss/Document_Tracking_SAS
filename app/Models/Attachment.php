<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $table = 'tbl_attachments';

    protected $fillable = ['name','voucher_type_id','voucher_owner_id','attachment_id ','date_received','date_sent','status'];

}
