<?php

namespace App\Http\Services;
interface  ServiceInterface
{
    function create($request);

    function findAll();

    function findOne($id);

    function update($id, $request);

    function delete($id);

}
