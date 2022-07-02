<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriTokoModel extends Model
{
    use HasFactory;

    protected $table = 'kategoritoko'; //nama table
    public $timestamps = false;
    protected $primaryKey ='kode_kat'; //primarykey

    public function getAll()
    {
        return KategoriTokoModel::all();
    }

    public function saveData($request )
    {

        DB::table("$this->table")->insert([
            'namakat' => $request->namakat,            
            'diskon' => $request->diskon,            
        ]);
        
    }
}
