<?php


namespace App\Http\Services;


interface ServiceInterface
{
    public function getAll();
    public function store($request);
    public function show($id);
    public function update($request,$obj);
    public function destroy($id);
    public function search($request);
}
