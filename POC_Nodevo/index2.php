<?php
	$films = [ 
		'Gaston Lagaffe' => 'Gaston.jpg', 
		'Pierre Lapin' => 'Pierre.jpg', 
		'Red Sparrow' => 'Red.jpg', 
		'Dans la brume' => 'brume.webp', 
	] ;

	// $poster = "" ; 
	// $titre = "" ; 
	$texte = "<p>Lorem ipsum dolor sit amet,<br> consectetur adispiscing elit.<br> Nunc luctus laoreet purus,<br> ut lacinia lacus malesuada<br> eget. Integer pretium<br> mauris et massa luctus<br> condimentum. </p>"  ;
	$selection = rand(1,5) ; 

	// switch($selection){ 
	// 	case 1 : 
	// 		$titre = "Gaston Lagaffe" ; 
	// 		$poster = "Gaston.jpg" ; 
	// }		
	switch($selection) { 
		case 1 :  
			$films = [ 
				'Pierre Lapin' => 'Pierre.jpg', 
				'Gaston Lagaffe' => 'Gaston.jpg', 
				'Red Sparrow' => 'Red.jpg', 
				'Dans la brume' => 'brume.webp', 
			] ; 
			break ; 
		case 2 : 
			$films = [ 
				'Red Sparrow' => 'Red.jpg',
				'Dans la brume' => 'brume.webp',
				'Gaston Lagaffe' => 'Gaston.jpg',
				'Pierre Lapin' => 'Pierre.jpg', 
			] ; 
			break  ;

		case 3 : 
			$films = [ 
				'Dans la brume' => 'brume.webp',
				'Gaston Lagaffe' => 'Gaston.jpg',
				'Red Sparrow' => 'Red.jpg',
				'Pierre Lapin' => 'Pierre.jpg',
			] ;
			break ; 

		case 4 : 
			$films = [ 
				'Gaston Lagaffe' => 'Gaston.jpg',
				'Red Sparrow' => 'Red.jpg',
				'Dans la brume' => 'brume.webp',
				'Pierre Lapin' => 'Pierre.jpg',
			] ;
			break ; 

		case 5 : 
			$films = [ 
				'Red Sparrow' => 'Red.jpg',
				'Pierre Lapin' => 'Pierre.jpg',
				'Dans la brume' => 'brume.webp',
				'Gaston Lagaffe' => 'Gaston.jpg',
			] ;
			break ; 

	}
?>



<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Poc_Nodevo</title>
        <meta name="description" content="">
        <link rel="stylesheet" href="main.css">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0"/>
        <link rel="icon" href="" sizes="32x32" type="image/png">
        
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <style>
			body { 
				font-family: Open sans, sans-serif ;
			 }
			 h1 { 
			 	text-align : center ;
			  }
			.contenu_Film { 
				background-color : rgb(240,240,240);
			 }
			.contenu_Film div { 
				display : flex; 
				flex-direction:row ;
			 }
			 .film { 
			 	position : relative ;
			 	display : flex ;
			 	flex-direction : column ;
			 	margin-right : 7%;
                margin-left : 7%;
			  }
			  .film div { 
			  	display : inline;
			   }
			 .film div img { 
			 	position : relative ;
			 	background-color : black ;
			 	display : inline;
			 	width : 15rem ;
			 	height : auto;
			  }
			  .film div img:hover { 
			  	transition : 0.5s;
			  	opacity : 0.4;
			  	background-color : black ;
			   }
			 .film div h1 { 
			 	display : inline ;
			  }
			  .film div p { 
			 	display : inline ;
			  }
			.cache:hover { 
				transition :0.5s ;
			 }
			.bande{ 
				position : absolute ;
				top: 15% ;
				color : white ;
				opacity : 0 ;
				border : solid 3px yellow;
			 }
			.bande:hover{ 
				opacity : 1 ;
			 }
		</style>
    </head>
    
    <body>
        <div class="menu">
            <h1>CINEMA</h1>
            
            <nav class="site-navigation">
                <ul class="nav">
                    <li><a href="#" class="fa"><span>#</span>Avant-premières</a></li> 
                    <li><a href="#" class="fa"><span>#</span>Agenda des sorties</a></li>
                    <li><a href="#" class="fa"><span>#</span>Films pour enfants</a></li>
                    <li><a href="#" class="fa"><span>#</span>Actus Ciné</a></li> 
                    <li><a href="#" class="fa"><span>#</span>Meilleur films</a></li> 
                </ul>
            </nav>
            
            <div class="recherche">
                <div class="partie-gauche"> 
                    
                    <form action="" method="">
                        <input type="text" id="recherche" name="recherche" placeholder="Rechercher une salle : Nice, Bastille, 75001, UGC Lyon"><button class="button">Rechercher</button>
                    </form>
                </div>
                
                <div class="partie-droite">
                    <p class="lien">Connectez-vous pour rechercher dans vos cinéma favoris</p>
                </div>
            </div>
            
            <div class="center">
                
                <div class = "contenu_Film">
                    <h1>SORTIES DE LA SEMAINE</h1>
                    <!-- <div>
                        <img class = "poster" src = "<? php echo $films_images[] ?>" >
                        <div class = "descript">
                            <h1></h1>
                            <p>Lorem ipsum dolor sit amet,<br> consectetur adispiscing elit.<br> Nunc luctus laoreet purus,<br> ut lacinia lacus malesuada<br> eget. Integer pretium<br> mauris et massa luctus<br> condimentum. </p>
                        </div>
                    </div> -->
                    <div>
                        <?php
                            foreach($films as $film => $poster){  
                                echo "<div class = 'cache'>" ;
                                    echo "<div class='film'>" ;
                                        echo "<div>" ;  
                                            echo "<div class = 'bande'><h1>Bande Annonce</h1></div>" ; 
                                            echo "<img src='".$poster."'>" ;
                                            echo  "<h1>".$film."</h1>"."<br>" ;
                                            echo "<br>".$texte ;
                                        echo "</div>" ; 
                                    echo "</div>" ; 
                                echo "</div>" ;  
                            }

                        ?>
                    </div>
                </div>
            </div>
            
            <p class="voir-plus">Voir plus de résultats</p>
            
            <!-- <button class="button-in">IN made in inVision</button>
            <button class="button-screens">Screens (1 of 4)</button>
            <button class="button-code"> //</button>
            <button class="button-search"> //</button>
            <button class="button-chat"> //</button> -->
        
        </div>
    </body>