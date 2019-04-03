<?php

Route::get("/", view("default"));
Route::getGroup();
Route::get("/{page}/")->controller("PageController")->where(["page" => "^((?!protect).)*"]);
Route::get("/{page}/ajax/")->controller("PageController@ajax");
Route::endGroup();

Route::protect()->get("/protect/",view("可见页面"));




