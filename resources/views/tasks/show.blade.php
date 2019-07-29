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
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endif	
