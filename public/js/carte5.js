var map;

function initMap() {
    
    var bordeaux = {
		info: 'Bordeaux : ' + moyBordeaux,
		lat: 44.840340,
		long: -0.574985
	};
    
    
    var nantes = {
		info: 'Nantes : ' + moyNantes,
		lat: 47.205208,
		long: -1.549243
	};
    
    var aix = {
		info: 'Aix-Marseille : ' + moyAix,
		lat: 43.288551,
		long: 5.376369
	};
    
      var amiens = {
		info: 'Amiens : ' + moyAmiens,
		lat: 49.896770,
		long: 2.294249
	};
    
    var besançon = {
		info: 'Besançon : ' + moyBesançon,
		lat: 47.235256,
		long: 6.025656
	};
    
     var caen = {
		info: 'Caen : ' + moyCaen,
		lat: 49.183277,
		long: -0.366852
	};
    
      var clermont = {
		info: 'Clermont-Ferrand : ' + moyClermont,
		lat: 45.786819,
		long: 3.116845
	};
    
     var corse = {
		info: 'Corse : ' + moyCorse,
		lat: 42.587366,
		long: 9.081209
	};
    
     var créteil = {
		info: 'Créteil : ' + moyCréteil,
		lat: 48.785099,
		long: 2.454884
	};
    
     var dijon = {
		info: 'Dijon : ' + moyDijon,
		lat: 47.320107,
		long: 5.039429
	};
    
     var grenoble = {
		info: 'Grenoble : ' + moyGrenoble,
		lat: 45.182587,
		long: 5.726528
	};
    
     var lille = {
		info: 'Lille : ' + moyLille,
		lat: 50.625401,
		long: 3.055743
	};
    
     var limoges = {
		info: 'Limoges : ' + moyLimoges,
		lat: 45.830639,
		long: 1.256100
	};
    
     var lyon = {
		info: 'Lyon : ' + moyLyon,
		lat: 45.753860,
		long: 4.840269
	};
    
     var montpellier = {
		info: 'Montpellier : ' + moyMontpellier,
		lat: 43.606598,
		long: 3.875534
	};
    
     var nancy = {
		info: 'Nancy-Metz : ' + moyNancy,
		lat: 48.690403,
		long: 6.179187
	};
    
     var nantes = {
		info: 'Nantes : ' + moyNantes,
		lat: 47.205208,
		long: -1.549243
	};
    
     var nice = {
		info: 'Nice : ' + moyNice,
		lat: 43.702923,
		long: 7.262085
	};
    
     var orléans = {
		info: 'Orléans-Tour : ' + moyOrléans,
		lat: 47.901024,
		long: 1.905512
	};
    
     var paris = {
		info: 'Paris : ' + moyParis,
		lat: 48.859287,
		long: 2.346715
	};
    
     var poitiers = {
		info: 'Poitiers : ' + moyPoitiers,
		lat: 46.576588,
		long: 0.349667
	};
    
     var reims = {
		info: 'Reims : ' + moyReims,
		lat: 49.250729,
		long: 4.033629
	};
    
     var rennes = {
		info: 'Rennes : ' + moyRennes,
		lat: 48.111900,
		long: -1.679185
	};
    
     var rouen = {
		info: 'Rouen : ' + moyRouen,
		lat: 49.440647,
		long: 1.097954
	};
    
     var strasbourg = {
		info: 'Strasbourg : ' + moyStrasbourg,
		lat: 48.577953,
		long: 7.753166
	};
    
     var toulouse = {
		info: 'Toulouse : ' + moyToulouse,
		lat: 43.599697,
		long: 1.443625
	};
    
     var versailles = {
		info: 'Versailles : ' + moyVersailles,
		lat: 48.809910,
		long: 2.131795
	};
    
    var locations = [
        
        [aix.info, aix.lat, aix.long, 0],
        [amiens.info, amiens.lat, amiens.long, 1],
        [besançon.info, besançon.lat, besançon.long, 2],
        [bordeaux.info, bordeaux.lat, bordeaux.long, 3],
        [caen.info, caen.lat, caen.long, 4],
        [clermont.info, clermont.lat, clermont.long, 5],
        [corse.info, corse.lat, corse.long, 6],
        [créteil.info, créteil.lat, créteil.long, 7],
        [dijon.info, dijon.lat, dijon.long, 8],
        [grenoble.info, grenoble.lat, grenoble.long, 9],
        [lille.info, lille.lat, lille.long, 10],
        [limoges.info, limoges.lat, limoges.long, 11],
        [lyon.info, lyon.lat, lyon.long, 12],
        [montpellier.info, montpellier.lat, montpellier.long, 13],
        [nancy.info, nancy.lat, nancy.long, 14],
        [nantes.info, nantes.lat, nantes.long, 15],
        [nice.info, nice.lat, nice.long, 16],
        [orléans.info, orléans.lat, orléans.long, 17],
        [paris.info, paris.lat, paris.long, 18],
        [poitiers.info, poitiers.lat, poitiers.long, 19],
        [reims.info, reims.lat, reims.long, 20],
        [rennes.info, rennes.lat, rennes.long, 21],
        [rouen.info, rouen.lat, rouen.long, 22],
        [strasbourg.info, strasbourg.lat, strasbourg.long, 23],
        [toulouse.info, toulouse.lat, toulouse.long, 24],
        [versailles.info, versailles.lat, versailles.long, 25]
        
    ];
    
    var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 6,
		center: new google.maps.LatLng(46.998282, 2.733741),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});
    
    var infowindow = new google.maps.InfoWindow({});

	var marker, i;

	for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map
        });

		google.maps.event.addListener(marker, 'click', (function (marker, i) {
			return function () {
				infowindow.setContent(locations[i][0]);
				infowindow.open(map, marker);
			}
		})(marker, i));
	}

}