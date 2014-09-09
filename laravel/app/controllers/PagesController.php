<?php
/**
 * Created by PhpStorm.
 * User: Zanbaka
 * Date: 7/17/2014
 * Time: 7:51 PM
 */
class PagesController extends BaseController {

    public function home()
    {
        return View::make('pages.home');
    }

    public function about()
    {
        return View::make('pages.about');
    }

    public function arrivals()
    {
        return View::make('pages.arrivals');
    }

    public function blog()
    {
        return View::make('pages.blog');
    }

    public function events()
    {
        return View::make('pages.events');
    }

    public function contact()
      {
        return View::make('pages.contact');
    }

    public function styleguide()
    {
        return View::make('styleguide.styleguide');
    }

    public function colors()
    {
        return View::make('styleguide.colors');
    }

    public function typography()
    {
        return View::make('styleguide.typography');
    }

    public function logos()
    {
        return View::make('styleguide.logos');
    }

    public function grids()
    {
        return View::make('styleguide.grids');
    }

    public function buttons()
    {
        return View::make('styleguide.buttons');
    }

    public function prodview()
    {
        return View::make('styleguide.prodview');
    }
}