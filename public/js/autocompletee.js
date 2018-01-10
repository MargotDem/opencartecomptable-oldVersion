 $( function() {
    var regions = [
      "Ile-de-France",
      "Occitanie",
      "Nouvelle Aquitaine",
      "Bretagne",
      "Bourgogne-Franche-Comté",
      "Grand Est",
      "Pays de la Loire",
      "Hauts-de-France",
      "Auvergne-Rhône-Alpes",
      "Centre-Val de Loire",
      "Provence-Alpes-Côte d'Azur",
      "Normandie",
      "Guadeloupe",
      "Corse",
      "Martinique",
      "La Réunion",
      "Guyane",
      "Collectivité d'outre-mer"
    ];
    $( "#region" ).autocomplete({
      source: regions
    });
  } );


      
       $( function() {
    var academies = [
      "Lille",
      "Amiens",
      "Rouen",
      "Reims",
      "Nancy-Metz",
      "Strasbourg",
      "Besançon",
      "Dijon",
      "Paris",
      "Créteil",
      "Versailles",
      "Orléans-Tour",
      "Caen",
      "Rennes",
      "Nantes",
      "Poitiers",
      "Limoges",
      "Lyon",
      "Clermont-Ferrand",
      "Grenoble",
      "Aix-Marseille",
      "Nice",
      "Montpellier",
      "Toulouse",
      "Bordeaux",
      "Corse",
      "Guyane",
      "Martinique",
      "Guadeloupe",
      "La Réunion",
      "Saint-Pierre-et-Miquelon",
      "Mayotte"
    ];
    $( "#academie" ).autocomplete({
      source: academies
    });
  } );