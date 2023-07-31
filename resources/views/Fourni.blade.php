<!DOCTYPE html>
<html>
<head>
    <title>CPPM+</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
		body {
			background-color:white;
		}
        .lin:hover{
            background-color: black;
            color: white;
            border-radius:50px ;
            transition: 1s;
        }
		.fourname{
			text-align: center;
			color: black;
		}
    </style>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <nav class="navbar  navbar-expand-lg bg-body-tertiary sticky">
    <div class="container">
      <a class="navbar-brand" href="#">CPPM+</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav navbar" style ="margin-left: auto; " >
            <a class="nav-link lin" href="#">Contactez nous</a>
            <i class='fas fa-id-card'style='font-size:24px'></i>
          <a class="nav-link lin" href="dashboard">Mon compte</a>
        </div>
      </div>
    </div>
    </div>
  </nav>
<body>
@if($message = Session::get('success'))
<div class="alert alert-success">
	{{ $message }}
</div>

@endif
<div class="container-fluid">
    <div class="table-responsive" >

	<div class="container-fluid" >
		<div class="row">
			<div class="col col-sm-12 fourname" style="font-size: 50px;"><b>Fournisseur</b></div>
			
		</div>
		<a class="btn btn-primary mb+3" data-bs-toggle="modal" data-bs-target="#addnew" style="margin:10px 10px 20px 0px;display:flex;float:right" href="#">+ Add</a>  
		<form class="d-flex"style="margin:10px 0px 20px 0px;display:flex;float:centre">
  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-primary" type="submit">Search</button>&nbsp;&nbsp;
</form>

	</div>
	
	
	<div class="card-body">
		<table class="table table-bordered ">
		<tr>
                    <tr>
                        <th   style="text-align: center;width: 60px;" scope="col">No.</th>
                        
                        <th scope="col">Equipement</th>
                        <th scope="col">Company</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Size</th>
                        <th scope="col">Wilaya</th>
                        <th scope="col">Quantitie</th>
                        <th scope="col">Description</th>
                        <th scope="col">Adjustement</th>
                      </tr>
                </tr>
            
            @if($data)
			
				@foreach($data as $row)
					<tr>
						<td style="text-align: center;width: 60px;">{{ $row->id }}</td>
						<td>{{ $row->Devicename }}</td>
						<td>{{ $row->Company }}</td>
						<td>{{ $row->Weight }}</td>
                        <td>{{ $row->Weight }}</td>
						<td>{{ $row->Wilaya }}</td>
						<td>{{ $row->Quantitie }}</td>
						<td>{{ $row->Description }}</td>
						<td><a class="btn btn-success" href="#">Edit</a>  <a  class="btn btn-danger" href="#">Delete</a></td>
					</tr>
				@endforeach
			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif

			{!! $data->links() !!}
		</table>
@include('model')
		<br>		
		
		
		
		
		<style>
			.w-5{
				display: inline;
			}
			.h-5{
				display: none;
				
			}
		</style>
	</div>
  </div>
</div>

