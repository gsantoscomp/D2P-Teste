<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    use HasFactory;

    protected $table = 'Processos';

    protected $primaryKey= 'ProcessoID';

    protected $fillable = [
        'ProcessoID', 'ClienteCodigo', 'DespachanteID', 'TerminalAtracacaoID', 'NumeroProcesso',
        'NumeroDI', 'DataDI', 'DataLI', 'DataDesembaraco', 'DataEntrega', 'DataFechamento', 'Ativo'
    ];

    public function DataDI(): Attribute
    {
        return Attribute::get(function($value) {
            $date = Carbon::parse($value);
            return $date->format('d/m/Y');
        });
    }

    public function DataDesembaraco(): Attribute
    {
        return Attribute::get(function($value) {
            $date = Carbon::parse($value);
            return $date->format('d/m/Y');
        });
    }

    public function DataEntrega(): Attribute
    {
        return Attribute::get(function($value) {
            $date = Carbon::parse($value);
            return $date->format('d/m/Y');
        });
    }
}
