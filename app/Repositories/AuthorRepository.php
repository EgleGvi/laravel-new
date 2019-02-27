<?php
namespace App\Repositories;
use App\Author;
class AuthorRepository
{
    /**
     * Created by PhpStorm.
     * User: PC
     * Date: 2/27/2019
     * Time: 1:05 PM
     */

    public function paginate($pageSize)
    {
        return Author::orderBy('id', 'desc')->paginate($pageSize);
    }
}
