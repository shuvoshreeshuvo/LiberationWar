<!DOCTYPE html>

<body>

<!--search-->
<form  class="form-inline my-2 my-lg-0" action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input  type="search" class="form-control mr-sm-2" name="q"
               placeholder="Search users"> <span class="input-group-btn">
					<button type="submit" class="btn btn-oumyine-success btn-sm my-2 my-sm-0">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
    </div>
</form>
<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
        <h2>Sample User details</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Sector</th>
            </tr>
            </thead>
            <tbody>
            @foreach($details as $freedom_fighter)
                <tr>
                    <td>{{ $freedom_fighter->name}}</td>
                    <td>{{$freedom_fighter->sector}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @elseif(isset($message))
        <p>{{ $message }}</p>
@endif
</div>

</body>

</html>
