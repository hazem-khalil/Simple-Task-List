@extends ('layouts.master')

@section ('content')
	<div class="panel panel-default">
		<div class="panel-body">
			<form action="/tasks" method="POST">
				@csrf
				<div class="form-group">
					<label for="name" class="col-sm-3 control-label">Task</label>
					<div class="col-sm-6">
						<input type="text" name="name" id="name" class="form-control">
					</div>	
				</div>
				<div class="form-group">
					<div class="col-sm-offset col-sm-6">
						<button type="submit" class="btn btn-primary">Add Task</button>
					</div>	
				</div>
			</form>
		</div>
	</div>
@endsection