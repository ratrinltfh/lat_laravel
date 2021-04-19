<?php

namespace App\Imports;

use App\Book;
use Maatwebsite\Excel\Concerns\ToModel;

class BooksImport implements ToModel
{
    public function model(array $row)
    {
        return new Book([
            'judul'=> $row['0'],
            'penulis'=> $row['1'],
            'tahun'=> $row['2'],
            'penerbit'=> $row['3']
        ]);
    }
}
