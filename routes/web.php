<?php

use App\Http\Controllers\Controller;
use App\Task;

Route::get('/', function () {
	$tasks = Task::latest()->get();

	return view('tasks.index')->with([
		'tasks' => $tasks,
	]);
})->name('home');

Route::post('/tasks', function () {
	$validator = new Controller;	
	$validator->validate(request(), ['name' => 'required|max:255']);

	Task::create(request(['name']));

	return redirect()->home();
});

Route::delete('/tasks/{task}', function (Task $task) {
	$task->delete();
	return redirect()->home();
});