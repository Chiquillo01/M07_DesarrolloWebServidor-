<?php
class Home extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    //vista index
    public function index()
    {
        $data['title'] = 'Pagina Principal';
        $data['categorias'] = $this->model->getCategorias();
        $this->views->getView('home', "index", $data);
    }
}
