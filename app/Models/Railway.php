<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Railway extends Model
{
    use HasFactory;
    public $id;
    public $azienda;
    public $stazione_di_partenza;
    public $stazione_di_arrivo;
    public $orario_di_partenza;
    public $orario_di_arrivo;
    public $codice_treno;
    public $numero_carrozze;
    public $in_orario;
    public $cancellato;
}
