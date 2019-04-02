<?php

Route::get("/", view("default"));

Route::get("/page/")->controller("PageController");




