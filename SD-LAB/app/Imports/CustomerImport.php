<?php

namespace App\Imports;

use App\Customer;
use Maatwebsite\Excel\Concerns\ToModel;

class CustomerImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer([
        
            'name'          => $row[0],
            'email'         => $row[1],
            'uni_id'        => $row[2],
            'country'       => $row[3],
            'university'    => $row[4],   
            'city'          => $row[5],
         
        ]);

    }
}
