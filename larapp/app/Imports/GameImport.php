<?php

namespace App\Imports;

use App\Game;
use Maatwebsite\Excel\Concerns\ToModel;

class GameImport implements ToModel
{

    public function model(array $row)
    {
        return new Game([
            'name' => $row[0],
            'description' => $row[1],
            'user_id' => $row[2],
            'category_id' => $row[3],
            ]);
    }
}
