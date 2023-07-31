<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body{margin-top:20px;
background:#313030;
}

.padding {
    padding: 10px;
}

/* GRID */
.col {
    padding: 10px 20px;
	margin-bottom: 10px;
	background: #9c9898;
	color: #666666;
	text-align: center;
	font-weight: 400;
	box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
}

.row h3 {
	color: #666666;
}

.row.grid {
	margin-left: 0;
}

.grid {
	position: relative;
	width: 100%;
	background: #fff;
	color: #666666;
	border-radius: 2px;
	margin-bottom: 25px;
	box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
}

.grid .grid-header {
	position: relative;
	border-bottom: 1px solid #ddd;
	padding: 15px 10px 10px 20px;
}

.grid .grid-header:before,
.grid .grid-header:after {
	display: table;
	content: " ";
}

.grid .grid-header:after {
	clear: both;
}

.grid .grid-header span,
.grid .grid-header > .fa {
	display: inline-block;
	margin: 0;
	font-weight: 300;
	font-size: 1.5em;

}

.grid .grid-header span {
	padding: 0 5px;
}

.grid .grid-header > .fa {
	padding: 5px 10px 0 0;
}

.grid .grid-header > .grid-tools {
	padding: 4px 10px;
}

.grid .grid-header > .grid-tools a {
	color: #999999;
	padding-left: 10px;
	cursor: pointer;
}

.grid .grid-header > .grid-tools a:hover {
	color: #666666;
}

.grid .grid-body {
	padding: 15px 20px 15px 20px;
	font-size: 0.9em;
	line-height: 1.9em;
}

.grid .full {
	padding: 0 !important;
}

.grid .transparent {
	box-shadow: none !important;
	margin: 0px !important;
	border-radius: 0px !important;
}

.grid.top.black > .grid-header {
	border-top-color: #000000 !important;
}



.grid.no-border > .grid-header {
	border-bottom: 0px !important;
}

.grid.top > .grid-header {
	border-top-width: 4px !important;
	border-top-style: solid !important;
}

.grid.bottom > .grid-body {
	border-bottom-width: 4px !important;
	border-bottom-style: solid !important;
}


/* SUPPORT TICKET */
.support ul {
    list-style: none;
	padding: 0px;
}

.support ul li {
	padding: 8px 10px;
}

.support ul li a {
	color: #999;
	display: block;
}

.support ul li a:hover {
	color: #666;
}

.support ul li.active {
	background: #0073b7;
}

.support ul li.active a {
	color: #fff;
}

.support ul.support-label li {
	padding: 2px 0px;
}

.support h2,
.support-content h2 {
	margin-top: 5px;
}

.support-content .list-group li {
	padding: 15px 20px 12px 20px;
	cursor: pointer;
}

.support-content .list-group li:hover {
	background: #eee;
}

.support-content .fa-padding .fa {
	padding-top: 5px;
	width: 1.5em;
}

.support-content .info {
	color: #777;
	margin: 0px;
}

.support-content a {
	color: #111;
}

.support-content .info a:hover {
	text-decoration: underline;
}

.support-content .info .fa {
	width: 1.5em;
	text-align: center;
}

.support-content .number {
	color: #777;
}

.support-content img {
	margin: 0 auto;
	display: block;
}

.support-content .modal-body {
	padding-bottom: 0px;
}

.support-content-comment {
	padding: 10px 10px 10px 30px;
	background: #eee;
	border-top: 1px solid #ccc;
}
    </style>
</head>
<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<section class="content">
	<div class="row">
		<!-- BEGIN NAV TICKET -->
		<div class="col-md-3">
			<div class="grid support">
				<div class="grid-body">
					<h2>Diagnostique</h2>
					
					<hr>
					
					<ul>
						<li id="di1" style="background-color: #a79f9f;border-radius: 12px;margin-bottom: 10px;" ><a href="#" style="color: white;"  onclick="showdiv1()" >Les 5 pourquoi 						</a></li>
						<li style="background-color: #a79f9f;border-radius: 12px;margin-bottom: 10px;"><a href="#"  style="color: white;"onclick="showdiv2()" >QQOQCCP</a></li>
						<li style="background-color: #a79f9f;border-radius: 12px;"><a href="#" style="color: white;" onclick="showdiv3()" >AMDEC</a></li>
						
						<script>
							function showdiv1() {
								document.getElementById("div1").style.display="block";
								document.getElementById("di1").style.color="black";
								document.getElementById("div2").style.display="none";
								document.getElementById("div3").style.display="none";
							}
							function showdiv2() {
								document.getElementById("div1").style.display="none";
								document.getElementById("div2").style.display="block";
								document.getElementById("div3").style.display="none";
							}
							function showdiv3() {
								document.getElementById("div1").style.display="none";
								document.getElementById("div2").style.display="none";
								document.getElementById("div3").style.display="block";
							}
						</script>
					</ul>
				</div>
			</div>
		</div>
		<!-- END NAV TICKET -->
		<!-- BEGIN TICKET -->
		<div class="col-md-9">
			<div class="grid support-content">
				 <div class="grid-body">
					<a class="btn btn-primary mb+3" data-bs-toggle="modal" data-bs-target="#addnew" style="margin:10px 10px 20px 0px;display:flex;float:right" href="#">+ AJOUTE QUESTION</a>  
					 <h1 style="text-align: center;">FAQs</h1>
					 
					 <hr>
					 
					<div class="row">
						
						<!-- BEGIN TICKET CONTENT -->
						<div class="div1" id="div1">
							<div class="accordion" id="accordionExample">
								<div class="accordion-item">
								  <h2 class="accordion-header" id="headingOne">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										Votre appareil est en panne et vous n'avez pas trouvé de solution au problème ?
									</button>
								  </h2>
								  <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										vous pouvez contacter nous sur notre site web 
										a l'aide de notre équipe qualifiée qui va réparer et remplacer si nécessaire avec des méthodes développées  
									</div>
								  </div>
								</div>
								<div class="accordion-item">
								  <h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Le fabricant est dans une situation difficile et la crise s'éternise ?
									</button>
								  </h2>
								  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										nous sommes à votre service pour fournir les pièces que vous avez manqué ,et nous serons le seul représentant de votre équipement auprès du fabricant 
									</div>
								  </div>
								</div>
								<div class="accordion-item">
								  <h2 class="accordion-header" id="headingThree">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Vous avez un problème de disponibilité des appareils et votre temps est limité ?
									</button>
								  </h2>
								  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										notre entreprise est la pour votre service de la disponibilité de tous vos besoins du pièces de rechange a l'aide de nôtres fournisseurs</div>
								  </div>
								</div>
							  </div>
							
							</div>
							<div class="div2"style="display:none;" id="div2">
								<div class="accordion" id="accordionExample">
									<div class="accordion-item">
									  <h2 class="accordion-header" id="headingOne">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										 Fourth Question
										</button>
									  </h2>
									  <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
										  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
										</div>
									  </div>
									</div>
									<div class="accordion-item">
									  <h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									    Fifth Question
										</button>
									  </h2>
									  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
										  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
										</div>
									  </div>
									</div>
									<div class="accordion-item">
									  <h2 class="accordion-header" id="headingThree">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										  Sixth Question
										</button>
									  </h2>
									  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="accordion-body">
										  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
										</div>
									  </div>
									</div>
								  </div>
								
								</div>
								<div class="div3" style="display:none;" id="div3">
									<div class="accordion" id="accordionExample">
										<div class="accordion-item">
										  <h2 class="accordion-header" id="headingOne">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
											  Seventh Question
											</button>
										  </h2>
										  <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
											<div class="accordion-body">
											  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
											</div>
										  </div>
										</div>
										<div class="accordion-item">
										  <h2 class="accordion-header" id="headingTwo">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											  Eighth Question
											</button>
										  </h2>
										  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
											<div class="accordion-body">
											  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
											</div>
										  </div>
										</div>
										<div class="accordion-item">
										  <h2 class="accordion-header" id="headingThree">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											  Ninth Question
											</button>
										  </h2>
										  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
											<div class="accordion-body">
											  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
											</div>
										  </div>
										</div>
									  </div>
									
									</div>
						</div>
						<!-- END TICKET CONTENT -->
					</div>
				</div>
			</div>
		</div>
		<!-- END TICKET -->
	</div>
</section>
</div>
</body>
</html>