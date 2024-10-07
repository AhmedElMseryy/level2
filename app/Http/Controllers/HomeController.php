<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //******************************************************************* */
        // dd($request->route());
        // dd($request->route()->getName());
        // dd($request->route()->getAction());
        // dd(Route::current());
        // dd(Route::current());
        // dd(Route::currentRouteName());
        // dd(Route::currentRouteAction());
        //******************************************************************* */
        //###Request path & method
        // dd($request->path());
        // dd($request->is('/'));
        // dd($request->routeIs('home'));
        // dd($request->url());
        // dd($request->fullUrl());
        // dd($request->fullUrlWithoutQuery('name'));
        // dd($request->method());
        // dd($request->isMethod('GET'));
        //******************************************************************* */
        //###Request input
        // dd($request->all());

        // dd($request->collect());
        // $request->collect()->each(function ($element) {
        //     dump($element);
        // });

        // dd($request->collect());
        // dd($request->input());
        // dd($request->query());
        // dd($request->boolean('is_admin'));
        // dd($request->date('welcome_date'));
        // dd($request->only(['name', 'age']));
        // dd($request->except(['age']));
        //******************************************************************* */
        //###Request input presence  [has, filled, missing]
        #----------------------------------------
        //has ==> موجود  
        // dd($request->has('name'));
        // dd($request->hasAny(['name', 'age']));

        // $request->whenHas('name1', function () {
        //     dd('request has name');
        // }, function () {
        //     dd('Not Found');
        // });
        #----------------------------------------
        //filled ==> موجود وليه قيمه
        // dd($request->filled('name'));
        // dd($request->anyFilled(['name', 'age']));

        // $request->whenFilled('name', function () {
        //     dd('request has filled name');
        // }, function () {
        //     dd('Not Found');
        // });
        #----------------------------------------
        //missing ==> مش موجود  
        // dd($request->missing('name'));

        // $request->whenMissing('name1', function () {
        //     dd('name is missing');
        // }, function () {
        //     dd('Name exists');
        // });


        return view('welcome');
    }
}
