<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
use Illuminate\Support\Facades\Response;

header("Access-Control-Allow-Origin: http://localhost:4200");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

Route::get('/', function()
{
	
	return Task::where('active', '=', 1)->get()->toJson();
});

Route::post('/delete', function ()
{
	$task = Task::find($_POST['id']);
	$task->active = 0;
	$res = $task->save();
	if($res)
	{
		$response = Response::make($task, 200);
		$response->header('Content-Type', 'success');
	}else{
		$response = Response::make($task, 400);
		$response->header('Content-Type', 'bad request');
	}

	return $response;

});

Route::post('/complete', function ()
{
	$task = Task::find($_POST['id']);
	$task->complete = 1;
	$res = $task->save();
	if($res)
	{
		$response = Response::make($task, 200);
		$response->header('Content-Type', 'success');
	}else{
		$response = Response::make($task, 400);
		$response->header('Content-Type', 'bad request');
	}

	return $response;

});

Route::post('/add', function ()
{
	$task = new Task;
	$task->setDescription($_POST['description']);
	$task->setComplete(0);
	$task->setActive(0);
	$res = $task->save();

	if($res)
	{
		$response = Response::make($task, 200);
		$response->header('Content-Type', 'success');
	}else{
		$response = Response::make($task, 400);
		$response->header('Content-Type', 'bad request');
	}

	return $response;

});


Route::get('/task/{id}', function ($id)
{
	return Task::find($id)->toJson();

});

Route::post('/edit/', function ()
{
	$task = Task::find($_POST['id']);
	$task->description = $_POST['description'];
	$res = $task->save();
});