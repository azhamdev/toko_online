<?php

namespace App\Models;

use CodeIgniter\Model;

class DiskonModel extends Model
{
  protected $table      = 'diskon';

  protected $primaryKey = 'id';

  protected $returnType = 'array';

  protected $allowedFields = ['Kode_voucher', 'Tanggal_mulai_berlaku', 'Tanggal_akhir_berlaku', 'Besar_diskon', 'Aktif'];
}
