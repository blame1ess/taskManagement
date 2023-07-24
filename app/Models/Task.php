<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Task extends Model
{
    use HasFactory;

    public function getTableColumns($exceptions = [])
    {
        $tableName = $this->getTable();

        $columnNames = DB::select("
            SELECT COLUMN_NAME
            FROM INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_NAME = '{$tableName}'
            ORDER BY ORDINAL_POSITION
        ");

        $columnNames = array_map(function ($column) use ($exceptions) {
            if (!in_array($column->COLUMN_NAME, $exceptions)) return $column->COLUMN_NAME;
        }, $columnNames);

        return $columnNames;
    }
}
