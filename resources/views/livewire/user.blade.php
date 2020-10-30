<div>
    <section>
    	<div class="container">
    		<div class="row">
    			<table class="table table-sm">
    				<thead>
    					<tr>
    						<th>Name</th>
    						<th>Email</th>
    					</tr>
    				</thead>
    				<tbody>
    					@foreach($users as $user)
    					<tr>
    						<td>{{$user->name}}</td>
    						<td>{{$user->email}}</td>
    					</tr>

    					@endforeach
    				</tbody>
    			</table>
    			{{$users->links()}}
    		</div>
    	</div>
    </section>
</div>
