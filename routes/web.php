<?php

Route::get('/', function () {
	return view('tasks.index');
});

Route::post('/tasks', function () {
	// 
});

Route::delete('/tasks/{task}', function () {
	// 
});