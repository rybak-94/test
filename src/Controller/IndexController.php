<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class IndexController extends Controller
{
    public function initialize()
    {

    }

    public function index()
    {
        $date = date('d.m.Y H:i:s');
        $this->set('date', $date);
    }
}
