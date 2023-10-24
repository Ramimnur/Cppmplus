<!DOCTYPE html>
<html>
<head>
    <title>CPPM+</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--#Accueil,#Depannage,#Pieces,#Contactez-nous{
      overflow: scroll;
    }-->
    <style>
      .lin {
        color: rgb(255, 255, 255);
        text-decoration: none;
        font-size: 16px;
        letter-spacing: 0.5px;
        font-family: 'Poppins',sans-serif;
        padding: 0 10px;
      }
      .lin-Depa{
        color: rgb(255, 255, 255);
        text-decoration: none;
        font-size: 16px;
        letter-spacing: 0.5px;
        font-family: 'Poppins',sans-serif;
        padding: 0 10px;
      }
      .lin-Depa::after{
        content: "";
            position: absolute;
            background-color: red;
            height: 3px;
            width:0%;
            bottom:-2px;
            transition: .3s;
      }
      .lin-Depa:hover:after{
        width:16%;
        
      }
      
      .lin-Mon{
        color: rgb(255, 255, 255);
        text-decoration: none;
        font-size: 16px;
        letter-spacing: 0.5px;
        font-family: 'Poppins',sans-serif;
        padding: 0 10px;
      }
      .lin-Mon::after{
        content: "";
            position: absolute;
            background-color: red;
            height: 3px;
            width:0%;
            bottom:-2px;
            transition: 0.3s;
      }
      .lin-Mon:hover:after{
        width: 18%;
        
      }
      
      .lin-Con{
        color: rgb(255, 255, 255);
        text-decoration: none;
        font-size: 16px;
        letter-spacing: 0.5px;
        font-family: 'Poppins',sans-serif;
        padding: 0 10px;
      }
      .lin-Con::after{
        content: "";
            position: absolute;
            background-color: red;
            height: 3px;
            width:0%;
            bottom:-2px;
            transition: .3s;
      }
      .lin-Con:hover:after{
        width:22.5%;
    
      }
        .lin::after{
            content: "";
            position: absolute;
            background-color: red;
            height: 3px;
            width:0%;
            bottom:-2px;
            transition: .3s;
        }
        .lin:hover:after{
            width:10%;
        }
        .lin:hover{
          color: white;
        }
        
        .lin-Con:hover{
          color: white;
        }
        
        .lin-Depa:hover{
          color: white;
        }
        
        .lin-Mon:hover{
          color: white;
        }
        .first{
          background-image: url(backfirst.jpeg);
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }
        .first::before{
          content: "";
          position:absolute;        
          left: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(0, 0, 0, 1.9);
          opacity: 0.5;
        }
        .Home .element {
  position: relative;
  top: 75%;
  left: 48%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 30px;
  font-weight: bold;
  text-align: center;
}
        .first{
          width: 100%;
          height: 100vh;
          display: block;
          justify-content: center;
          display: flex;
        }
        .navy{
          background-color: rgb(3, 3, 6);
          color: white;
        }
        #Pieces{
          overflow: scroll;
        }

        @media all and (max-width: 999px){
        .row-d{
          display: block;
          overflow: scroll;
        }
        .Home .element{
          top: 60%;
          left: 50%;
          font-size: 15px;
        }
      }
     
    </style>
</head>
<body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <nav class="navbar  navbar-expand-lg bg-body-blue  navy" >
    
    <div class="container">
      <a class="navbar-brand" style="color: white;" href="#Accueil">CPPM<span style="color: red;" >+</span> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav navbar " style ="margin-left: auto;gap: 20px;" >
          <a class="nav lin"href="#Accueil">Accueil</a>
          <a class="nav lin-Depa"href="#Depannage">Diagnostic</a>
          <a class="nav lin"href="#Pieces">Pieces</a>
            <a class="nav lin-Con"href="#Contactez">Contactez nous</a>
            <a class="nav lin-Mon" href="admin" >Mon compte</a>
        </div>
      </div>
    </div>
    </div>
  </nav>
 
  <div id="Accueil" class="Home">
    <div class="container-fluid first">
      <div class="container element">
        <p >
          ‏Toutes les solutions à vos problèmes sont disponibles au CPPM+. Nous sommes une entreprise spécialisée dans la réparation, l'installation et la fourniture de tous les équipements et services dont votre usine ou entreprise a besoin. Notre objectif est de satisfaire le client et de lui faire gagner du temps et des efforts. La qualité de notre travail est symbolisée par la maîtrise et la confiance. Nous sommes à votre service à tout moment</p>
      </div>
      <br>
      
    </div>
  </div>
  <div class="divider"style="background-color:white;width:20vw ;height: 0.1em;" ></div>
<div class="conatiner row-d" style="height: 100vh; background-color: black;" id="Depannage">
    <div class=" container title" style="width: 100%;">
      <!--Section: FAQ-->
<section style="padding-top:30px;">
  <h1 class="text-center mb-4   fw-bold" style="color: white;font-size: 50px;">Diagnostique</h3>
  <h1 class="text-center  pb-2 text-primary fw-bold">FAQ</h3>
  

  <div class="row " >
    <div class="col-sm-6 col-sm-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i>Comment diagnostiquer les problèmes courants des machines industrielles ?</h6>
      <p style="color: white;">
        Les problèmes courants des machines industrielles peuvent inclure des pannes électriques, des fuites hydrauliques, des dysfonctionnements mécaniques, etc. Un diagnostic approfondi implique d'effectuer des tests, d'analyser les données et d'identifier la source du problème avant de procéder aux réparations nécessaires.
      </p>
    </div>

    <div class="col-sm-6 col-sm-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="far fa-paper-plane text-primary pe-2"></i> Quelles sont les étapes à suivre pour réparer une panne mécanique sur une machine industrielle ?</h6>
      <p style="color: white;">
        Les étapes typiques pour réparer une panne mécanique comprennent l'identification du problème, le démontage des pièces défectueuses, la réparation ou le remplacement des composants endommagés, le remontage correct des pièces et la vérification du bon fonctionnement de la machine après réparation.
      </p>
    </div>

    <div class="col-sm-6 col-sm-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-user text-primary pe-2"></i> Comment résoudre un problème d'alimentation électrique sur une machine industrielle ?
      </h6>
      <p style="color: white;">
        Vérifiez les connexions, remplacez les fusibles défectueux ou réinitialisez le disjoncteur pour restaurer l'alimentation.
      </p>
    </div> 
    <div class="col-sm-6 col-sm-4 mb-4">
      <h6 class="mb-3 text-primary"><i class="fas fa-user text-primary pe-2"></i>Comment réparer  une machine industrielle ?
      </h6>
      <p style="color: white;">
        Identifiez la source de la fuite, remplacez le joint ou le composant défectueux et vérifiez l'étanchéité du système.
      </p>
    </div>
  </div>
  <div  style="text-align: center; padding-bottom: 15px;"><a href="FAQS" >Autre Questions..</a></div>
</section>
    </div>
</div>
<div class="divider"style="background-color:white;width:20vw ;height: 0.1em;" ></div>
<!--Section: FAQ-->
    <div class="container-fluid" style="height: 100vh;color: rgb(255, 255, 255);background-color: rgb(0, 0, 0) " id="Pieces" >
      <br>
      <div class=" container title" style="width: 100%;align-items: center;text-align: center;font-size: 50px;">
        <header >
          Pieces
        </header>
      </div>
      <br>
      <div class="container-fluid">
         <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th style="text-align: center;width: 60px;" scope="col">No.</th>
            
            <th scope="col">Equipement</th>
            <th scope="col">Company</th>
            <th scope="col">Weight</th>
            <th scope="col">Size</th>
            <th scope="col">Wilaya</th>
            <th scope="col">Quantitie</th>
            <th scope="col">Description</th>
            <th scope="col">Adjustement</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Nails</td>
            <td>ABB</td>
            <td>100</td>
            <td>#</td>
            <td>Otto</td>
            <td>50</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos corporis illum tenetur quisquam nostrum.</td>
            <td><!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Demande
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" style="color: black;" id="exampleModalLabel">Nails</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form class="cc"style="display:flex;flex-direction:column">
                        <label style="color: black;" for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity">
                      
                        <label style="color: black;"  for="price">Price:</label>
                        <textarea id="price" rows="1" cols="5" name="price"></textarea>
                      
                        <label style="color: black;" for="total">Total:</label>
                        <textarea id="total"rows="1" cols="5" name="total" readonly></textarea>
                        <br>
                      
                        <button type="button" onclick="calculateTotal()">Calculate</button>
                      </form>
                      
                      <script>
                        function calculateTotal() {
                          var quantity = parseFloat(document.getElementById("quantity").value);
                          var price = parseFloat(document.getElementById("price").value);
                      
                          if (!isNaN(quantity) && !isNaN(price)) {
                            var total = quantity * price;
                            document.getElementById("total").value = total.toFixed(2);
                          } else {
                            document.getElementById("total").value = "";
                          }
                        }
                      </script>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Envoyer le demande</button>
                    </div>
                  </div>
                </div>
              </div></td>
          </tr>
          <tr>
            
            <td>2</td>
            <td>Otto</td>
            <td>ABB</td>
            <td>60</td>
            <td>Otto</td>
            <td>#</td>
            <td>18</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos corporis illum tenetur quisquam nostrum.</td>
            <td><a class="btn btn-primary" href="#">Demande</a></td>
          </tr>
          <tr>
            
            <td>3</td>
            <td>Otto</td>
            <td>ABB</td>
            <td>40</td>
            <td>Otto</td>
            <td>#</td>
            <td>900</td>
             <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos corporis illum tenetur quisquam nostrum.</td>
             <td><a class="btn btn-primary" href="#">Demande</a></td>
          </tr>
          <tr>
            
            <td>4</td>
            <td>Otto</td>
            <td>ABB</td>
            <td>22</td>
            <td>Otto</td>
            <td>#</td>
            <td>61</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos corporis illum tenetur quisquam nostrum.</td>
            <td><a class="btn btn-primary"href="#">Demande</a></td>
          </tr>
          <tr>
            
            <td>5</td>
            <td>Otto</td>
            <td>ABB</td>
            <td>150</td>
            <td>Otto</td>
            <td>#</td>
            <td>12</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos corporis illum tenetur quisquam nostrum.</td>
            <td><a class="btn btn-primary"href="#">Demande</a></td>
          </tr>
          <tr>
            
            <td>6</td>
            <td>Otto</td>
            <td>ABB+</td>
            <td>3</td>
            <td>Otto</td>
            <td>#</td>
            <td>16</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos corporis illum tenetur quisquam nostrum.</td>
            <td><a class="btn btn-primary" href="#">Demande</a></td>
          </tr>
          <tr>
            
            <td>7</td>
            <td>Otto</td>
            <td>ABB</td>
            <td>55</td>
            <td>Otto</td>
            <td>#</td>
            <td>200</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos corporis illum tenetur quisquam nostrum.</td>
            <td><a class="btn btn-primary" href="#">Demande</a></td>
          </tr>
          <tr>
            
            <td>8</td>
            <td>Otto</td>
            <td>ABB</td>
            <td>64</td>
            <td>Otto</td>
            <td>#</td>
            <td>100</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos corporis illum tenetur quisquam nostrum.</td>
            <td><a class="btn btn-primary" href="#">Demande</a></td>
          </tr>
          
        </tbody>
      </table>


      </div>
     
    </div>
    <div class="divider"style="background-color:white;width:20vw ;height: 0.1em;" ></div>   
  <footer class="Contactez" style="background-color: rgba(0, 0, 0, 0.914);height: 70vh;" id="Contactez">
    <br>
    <div class=" container title" style="width: 100%;align-items: center;text-align:center;color: white;font-size: 50px;">
      <header style="margin-bottom:20px ;">
        Contactez nous
      </header>
    </div>
  <div class="container" style=" display: flex; justify-content: center; " >
    <table class="table table-borderless" style="color: white;">
      <tr>
        <td colspan="2"  rowspan="3" style="font-size: 40px;justify-self: center;text-align:left;width: 250px;font:bold ;">CPPM+</td>
        <td>Entreprise</td>
        <td></td>
        <td>Quick Link</td>
        <td></td>
        <td>Legal</td>
      </tr>
      <tr>
        <td>About</td>
        <td></td>
        <td>Location</td>
        <td></td>
        <td>Terms & Conditions</td>
      </tr>
        <tr>
          <td>Contactez-nous</td>
          <td></td>
          <td>Orders</td>
          <td></td>
          <td>Privacy Policy</td>
        <tr>
        <td><i style="font-size:24px;color:rgb(43, 43, 204);" class="fa" >&#xf082;</i> official CPPM+</td>
        <td><i style="font-size:24px;color: rgb(200, 2, 240);" class="fa">&#xf16d;</i> @officialCPPM+</td>
        <td>+213549861740</td>
        <td></td>
        <td>Size Guide</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><i style="font-size:24px;color: red;" class="fa">&#xf16a;</i> official CPPM+</td>
        <td><i style="font-size:24px;color:rgb(215, 146, 7);" class="fa">&#xf0e0;</i> CPPM+official@gmail.com</td>
        <td>Careers</td>
        <td></td>
        <td>FAQs</td>
        <td></td>
        <td></td>
      </tr>
    </table>
    
</div>
</footer>
</body>
</html>
