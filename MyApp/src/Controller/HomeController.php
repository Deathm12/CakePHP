<?php
namespace App\Controller;
class HomeController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout("/myLayout");
        $test = "Home";
        $this->set('test', $test);
    }

    public function page2()
    {
        $this->viewBuilder()->setLayout("/myLayout");
        $test = "page2";
        $this->set('test', $test);
    }

    public function page3()
    {
        $this->viewBuilder()->setLayout("/myLayout");
        $test = "page3";
        $this->set('test', $test);
    }
}
?>
