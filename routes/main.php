<?php

Route::get("/", view("default"));
Route::getGroup();
Route::get("/{page}/")->controller("PageController");
Route::get("/{page}/ajax/")->controller("PageController@ajax");
Route::endGroup();




