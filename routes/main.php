<?php
Route::renderMap('main', ["up", "content", "bottom"] );
Route::get("/", view("default"));
Route::getGroup();
Route::get("/map/", render("main"));
Route::get("/{page}/")->controller("PageController")->where(["page" => "^((?!protect).)*"]);
Route::get("/{page}/ajax/")->controller("PageController@ajax");
Route::endGroup();

Route::protect("No")->get("/main/to/","可见页面");

Route::protect("No")->get("/main2/to", "ok");




