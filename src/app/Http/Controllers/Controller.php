<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected $repository;
    protected $request;
    

    public function repositoryInit($used_repository)
    {
        // 毎回リポジトリをインスタンス化するのは面倒なので共通化
        $this->repository = new $used_repository;
    }

    public function requestInit($request)
    {
        // 毎回リクエストをインスタンス化するのは面倒なので共通化
        $this->request = $request;
    }

    public function getInput($name = null)
    {
        if (is_null($name)) {
            return $this->request->input();
        }else{
            return $this->request->input($name);
        }
    }


}
