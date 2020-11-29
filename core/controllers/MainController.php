<?php
namespace Core\Controllers;
use Core\Views\View;

class MainController extends Controller{

    public function index()
    {   
        $title = 'Home Page';
        $articles = [
            [
                'name'=> 'Article',
                'content' => 'Text',
            ],

        ];
        View::render('main/index', compact('title', 'articles'));
    }

    public function contacts()
    {
        View::render('main/contacts');
    }
}