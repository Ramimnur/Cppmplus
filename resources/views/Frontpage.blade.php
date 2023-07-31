<!DOCTYPE html>
<html>
<head>
    <title>ProjectX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
       #section1 {height: 100%;
        margin-top: 15px;
        width:100%;
  }

.video-container{
        
        position: relative;
        object-fit: fill;
        height: 100vh;
        width: 100vw;
	      top: auto;
        overflow-x: hidden;
        overflow-y: hidden;

	      
}
.myvideo{
  margin-left: -13px;
  width: 100vw;
  height: 100vh;
  justify-content: center;
  align-self: center;
  object-fit:cover;
  z-index: -100px;
}
.Hello{
  font-size: 25;
  color: white;
  position: absolute;
  top: 60%;
  left: 35%;
  transform: translate(-50%, -50%);
  z-index: 1px;

}
       
        #section2 {padding-top:45px;height:100vh;
    /* The image used */
    
    background-image: url("{{asset('team work.jpg')}}");
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    aspect-ratio: 16/9;

    }

    .c1{
      width: 400px;justify-items: flex-end;flex-wrap: wrap;flex-direction: row;
    }
    .c1 p{
      display: none;
    }
    .c1:hover .textcap{
      margin-top: -10px;
      transition: .5s;
    }
    .c1:hover p{
      display: inline;
      transition: .6s;

    }
    .c1:hover img {
      filter: blur(5px);

    }
    .ser{
      padding-top: 25px;
      font: bold ;

      text-align: center;
      color: rgb(255, 253, 255);
      font-size: 60px;
    }
    .neww{
      display: flex;
      gap: 20px;
    }
    .f1{
      height: 100vh;
      width: 100vw;
      left: 0px;
      background-image: url(Center\ de\ formation\ professionelle\ moderne.jpg);
    background-position: center;
    background-size: cover;
  
    }
    
    .f2{
      height: 100vh;
      width: 100vw;
      left: 0px;
      background-image: url(ERP.jpg);
    background-position: center;
    background-size: cover;
  
    }
    
    .f3{
      height: 100vh;
      width: 100vw;
      left: 0px;
      background-image: url(Center\ de\ formation\ ibn\ el\ -\ haytham-tunis.jpg);
    background-position: center;
    background-size: cover;
  
    }
    .jj{
      padding: 80px 50px 0px 50px;
      
    }

    @media (max-width: 999px) {      
      #section2{
        display: block;
        flex-direction: column;
        overflow-y: scroll;
        
      }
      #section4{
        
        overflow-y: scroll;
        
      }
      .jj{
        padding: 200 000 00 00;
        display: flex;
      }
      .c1{
        width: 500px;
        margin-bottom: 20px;
      }
      .neww{
        justify-content: center;
        flex-wrap: wrap;
        
        justify-content: space-around;

      }
      .new{
        gap: 15px;

      }
      
    }

  #section3 {padding-top:0px;height:100vh;width: 100%;margin: 0 0 0 0;padding: 00 00 00 00;
  color: white;overflow: hidden;}
  #section4 {padding-top:45px;height:100vh; background-color: rgba(66, 41, 7, 0.889); color:white;} 
    </style>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary sticky">
    <div class="container">
      <a class="navbar-brand" href="#">CPPM+</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav navbar" style ="margin-left: auto; " >
          
          <a class="nav-link " aria-current="page" href="#section1">Accueil</a>
          <a class="nav-link" href="#section2">Services</a>
          <a class="nav-link" href="#section3">Formations</a>
          <a class="nav-link" href="#section4">Join us</a>
          <a class="nav-link" href="/login">Login</a>
        </div>
      </div>
    </div>
    </div>
  </nav>
  <div class="container-fluid" id="section1">
      <div class="row" >

      <div class="video-container" >

        <video autoplay muted loop class="myvideo">
          <source src="Assembly Line.mp4">

        </video>
        <div class="Hello" style="text-align: center;position:absolute; top: 50%;left: 50%;transform: translate(-50%,-50%);">
        <h1>Hello Everyone!</h1> 
        <h4>Notre entreprise assure la maintenance et le dépannage des équipements électriques, électroniques et mécaniques. Nos techniciens qualifiés sont disponibles 24h/24 et 7j/7 pour une assistance rapide et efficace. Nous offrons un service supérieur à des prix compétitifs et garantissons la satisfaction complète de nos clients</h4>
        </div>
      </div>

    </div>
  </div>
<div id="section2" class="container-fluid" >
  <div class="container-fluid" style="justify-content:space-evenly" >
      <div class="ser " >
        <Header class="ser mb-5">
          SERVICES
        </Header>
      </div>

      <div class="container neww" >
        <div class="card text-bg-dark c1" >
          <img src="diag.png" class="card-img k2" >
          <div class="card-img-overlay textcap"  >
            <h3 class="card-title "  >Diagnostic</h3>
            <p class="card-text" style="flex-wrap: wrap;flex-direction: row;">Diagnostiquer les appareils dans un premier temps et étudier leurs plans pour identifier leurs spécificités afin de faciliter le processus de maintenance</p>
            
          </div>
        </div>



        <div class="card text-bg-dark c1" >
          <img src="Maintenance.png" class="card-img k2" >
          <div class="card-img-overlay textcap">
            <h3 class="card-title">Maintenance</h3>
            <p class="card-text"> La maintenance industrielle assure le bon fonctionnement et la fiabilité des équipements et installations industrielles. Elle englobe les tâches préventives (inspection, entretien) et correctives (réparation) pour éviter les pannes et garantir une production optimale.</p>
            
          </div>
        </div>

        <div class="card text-bg-dark c1">
          <img src="depann.jpg" class="card-img k3" >
          <div class="card-img-overlay textcap" >
            <h3 class="card-title">Depannage</h3>
            <p class="card-text">Le dépannage industriel identifie et résout rapidement les pannes sur les équipements industriels. Son but est de rétablir la production sans délai pour éviter les interruptions coûteuses. Les techniciens utilisent des méthodes d'analyse et des outils de diagnostic pour des réparations efficaces.</p>
            
          </div>
        </div>
            
           
      </div>
          
        </div>
  </div>

<div id="section3" class="container-fluid text-center " >
  <div class="row">
    <div id="carouselExampleCaptions" class="carousel slide ">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner"style="height: 100vh;width:100%;">
        <div class="carousel-item active f1 ">
       
          <div class="carousel-caption d-none d-md-block">
            <h1>Center de formation professionelle moderne - algerie</h1>
            <p>Contactez nous pour plus d'information</p>
          </div>
        </div>
        <div class="carousel-item f2">
          
          <div class="carousel-caption d-none d-md-block">
            <h1 style="color: black ;font-size: 50px;font: bold;">ERP formation - PFE ingenieurs enligne cours.</h1>
            <p  style="color: black;">Contactez nous pour plus d'information</p>
          </div>
        </div>
        <div class="carousel-item f3">
          
          <div class="carousel-caption d-none d-md-block">
            <h1>Center de formation d'ibn el hayithm - Tunis</h1>
            <p >Contactez nous pour plus d'information</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>
</div>

<div id="section4" class="container-fluid ">
  <div class="row jj">
  <h1>Join our team!</h1>
  <form class="row g-3" id="myform">
    <div class="col-sm-4">
      <label for="validationDefault01" class="form-label">First name</label>
      <input type="text" class="form-control" id="validationDefault01"  required>
    </div>
    <div class="col-sm-4">
      <label for="validationDefault02" class="form-label">Last name</label>
      <input type="text" class="form-control" id="validationDefault02"  required>
    </div>
    <div class="col-sm-4">
      <label for="validationDefaultUsername" class="form-label">Nationalitie</label>
      <div class="input-group">
        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
    
    <div class="col-sm-3">
      <label for="validationDefault03" class="form-label">City</label>
      <input type="text" class="form-control" id="validationDefault03" required>
    </div>
    <div class="col-sm-3">
      <label for="validationDefault04" class="form-label">State</label>
      <select class="form-select" id="validationDefault04" required>
        <option selected disabled value="">Choose...</option>
        <option>Ain Temouchent</option>
      </select>
    </div>
    <div class="col-sm-3">
      <label for="validationDefault05" class="form-label">Zip</label>
      <input type="text" class="form-control" id="validationDefault05" required>
    </div>
    <div class="col-sm-3">
      <label for="validationDefault04" class="form-label">Specialitie</label>
      <select class="form-select" id="validationDefault04" required>
        <option selected disabled value="">Choose...</option>
        <option>Electro-Mechanique</option>
        <option>Gene-Mechanique</option>
        <option>Tele-Commande</option>

      </select>
    </div>
    <div class="CV" style="display: block;width: 40vw;">
      <p>CV</p>
      
    <div class="input-group mb-3 col-sm-4" >  
      <input type="file" class="form-control" id="inputGroupFile02">
      <label class="input-group-text" for="inputGroupFile02">Upload</label>
    </div>
    <div class="col-sm-4">
      <button class="btn btn-primary" onclick="resetform()" type="submit">Submit form</button>
    </div>
    
    </div>
    
  </form>
</div>

</div>
  <script>
    function resetform(){
      alert("la requete a ete envoie a l'adminitrateur avec succes");
    }
    </script>
</body>
</html>
