ajaxGet("http://145.239.32.254:8081/pokemon/types", function (reponse) {
    var types = JSON.parse(reponse);
    var compteur = 0;


    types.forEach( function tableau(type) {

    	var typeNom = type.nom;
    	var typeId = type.id;
    	var typeCaracteristique = type.caractéristique;
    	var typeAttaque = type.attaques;


    	var div = document.createElement("div");
    	div.id = "div" + compteur;
    	var typeTitre = document.createElement("h2");
      typeTitre.id = "typeTitre" + compteur;
    	var tableau = document.createElement("table");
    	tableau.id = "tableA" + compteur;
    	var caption = document.createElement("caption");
    	var tbody = document.createElement("tbody");
    	var ligneAttak = document.createElement("tr");
    	var paragraphe = document.createElement("p");
    	var separation = document.createElement("hr");
      var separation2 = document.createElement("hr");

    	caption.textContent = "Quelques exemples de capacités";

   	    ligneAttak.innerHTML = "<td>Attaques</td>"
        					+ "<td>" + typeAttaque + "</td>";

        paragraphe.textContent = '"' + typeCaracteristique + '"';
        paragraphe.style.fontStyle = "italic";

   	    typeTitre.textContent = "Type " + typeNom;

   	    div.style.marginTop = "40px";
   	    div.style.paddingLeft = "20px";
   	    div.style.paddingRight = "40px";
        div.style.paddingBottom = "70px";
   	    div.style.textAlgin = "justify";
   	    div.style.fontFamily = "rubikregular, Arial, sans-serif";

   	    tableau.style.float = "right";
   	    tableau.style.marginRight = "50px";
        tableau.style.height = "48px";

        separation.style.borderColor = "#2c2d28";
        separation.style.borderWidth = "3px";
        separation2.style.borderColor = "#2c2d28";
        separation2.style.borderWidth = "3px";

   	    div.appendChild(separation);
        div.appendChild(separation2);
   	    div.appendChild(typeTitre);
        div.appendChild(paragraphe);
        tableau.appendChild(caption);
   	    tbody.appendChild(ligneAttak);
   	    tableau.appendChild(tbody);
   	    div.appendChild(tableau);
   	    document.getElementById("divType").appendChild(div);
        document.getElementById("tableA" + compteur).rows[0].cells[1].style.width = "500px";
        document.getElementById("tableA" + compteur).rows[0].cells[1].style.textAlign = "center";
   	    
   	    
   	    compteur++;
		
    })

    return compteur;

});

// Gestion du tableau des Pokemon

ajaxGet("http://145.239.32.254:8081/pokemon/types", function (reponse) {
  var types = JSON.parse(reponse);

  ajaxGet("http://145.239.32.254:8081/pokemon/pokemons", function (reponse) {
    var pokemons = JSON.parse(reponse);

    function handleTypes(types) {

      var compteur = 0;
      types.forEach(function(type) {


        if (tableauVide(compteur + 1) !== true) {

        var pokemonTable = getPokemonsOfType(type.id);
        pokemonTable.id = "pokemonTable" + type.id;
        pokemonTable.style.margin = "auto";
        pokemonTable.style.marginTop = "150px";
        document.getElementById("div" + compteur).style.height = "530px";
        document.getElementById("div" + compteur).appendChild(pokemonTable);

        } else {

          document.getElementById("div" + compteur).style.height = "180px";

        }

        compteur++;

      });

    }


    function tableauVide(type) {

      var vide = true;

      for (var i = 0; i < pokemons.length && vide != false; i++) {

        if (parseFloat(pokemons[i].type) === type) {

          vide = false;

        }

      }

      return vide;

    }


    function getPokemonsOfType(type) {

      var tableau2 = document.createElement("table");

      var caption2 = document.createElement("caption");
      caption2.textContent = "Quelques exemples de Pokémon";
      tableau2.appendChild(caption2);

      var ligneApparence = document.createElement("tr");
      tableau2.appendChild(ligneApparence);

      var ligneNom = document.createElement("tr");
      tableau2.appendChild(ligneNom);

      var ligneNumero = document.createElement("tr");
      tableau2.appendChild(ligneNumero);

      var aspCell = document.createElement("td");
      var aspText = document.createTextNode("Apparence");
      aspCell.appendChild(aspText);
      ligneApparence.appendChild(aspCell);

      var namCell = document.createElement("td");
      var namText = document.createTextNode("Nom");
      namCell.style.height = "64px";
      namCell.appendChild(namText);
      ligneNom.appendChild(namCell);

      var numCell = document.createElement("td");
      var numText = document.createTextNode("Numéro");
      numCell.style.height = "64px";
      numCell.appendChild(numText);
      ligneNumero.appendChild(numCell);
 

      pokemons.forEach(function(pokemon) {

        if(pokemon.type == type) {

            var aspCell = document.createElement("td");
            var pkmnImg = document.createElement("img");
            pkmnImg.src = pokemon.image;
            pkmnImg.id = "pkmnImg" + type;
            pkmnImg.style.display = "flex";
            pkmnImg.style.maxHeight = "128px";
            pkmnImg.style.maxWidth = "128px";
            pkmnImg.style.margin = "auto";
            aspCell.appendChild(pkmnImg);
            ligneApparence.appendChild(aspCell);
            
            var namCell = document.createElement("td");
            var namText = document.createTextNode(pokemon.nom);
            namCell.appendChild(namText);
            ligneNom.appendChild(namCell);

            var numCell = document.createElement("td");
            var numText = document.createTextNode("#" + pokemon.numero);
            numCell.appendChild(numText);
            ligneNumero.appendChild(numCell);

        }

      });

      return tableau2;

    }

    handleTypes(types);

  })

});

