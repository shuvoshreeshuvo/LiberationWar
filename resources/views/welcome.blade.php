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
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
        <h2>Sample User details</h2>
        <table class="table table-striped">
            @if($freedom_fighter->count()>0)
            <thead>
            <tr>
                <th>Name</th>
                <th>Sector</th>
            </tr>
            </thead>
            <tbody>
            @foreach($freedom_fighter as $freedom)
                <tr>
                    <td><a href="#">{{ $freedom->name }}</a></td>
                    <td>{{ $freedom->sector }}</td>
                </tr>
            @endforeach
            </tbody>
            @else
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Writer</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($book as $book)
                        <tr>
                            <td><a href="#">{{ $book->title }}</a></td>
                            
                        </tr>
                    @endforeach
                </tbody>
            @endif
        </table>
    @if(isset($message))
        <p>{{ $message }}</p>
@endif
</div>

</body>

</html>
