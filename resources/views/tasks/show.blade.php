@if (count($tasks))
	<div class="panel panel-default">
		<div class="panel-heading">
			Current Tasks
		</div>
		<div class="panel-body">
			<table class="table table-striped">
				<thead>
					<th>Tasks</th>
					<th>&nbsp;</th>
				</thead>
				<tbody>
					@foreach ($tasks  as $task)
						<tr>
							<td>{{ $task->name }}</td>
							<td>
								<form action="/tasks/{{ $task->id }}" method="Post">
									@csrf
									{{ method_field('DELETE') }}
									<button class="btn btn-danger">Delete</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endif	
