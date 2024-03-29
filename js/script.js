
function callHorizon(){
	$.sweetModal.confirm('Deseja comprar Horizon Zero Dawn?', 'Confirme?', function() {
		$.sweetModal('Obrigado por comprar <i class = "check icon"></i>');
	}, function() {
		$.sweetModal('Você cancelou esta compra');
	});
}

function callLife(){
	$.sweetModal.confirm('Deseja comprar Life is Strange?', 'Confirme?', function() {
		$.sweetModal('Obrigado por comprar <i class = "check icon"></i>');
	}, function() {
		$.sweetModal('Você cancelou esta compra');
	});
}

function callColossus(){
	$.sweetModal.confirm('Deseja comprar Shadow of the Colossus?', 'Confirme?', function() {
		$.sweetModal('Obrigado por comprar <i class = "check icon"></i>');
	}, function() {
		$.sweetModal('Você cancelou esta compra');
	});
}

function callWitch(){
	$.sweetModal.confirm('Deseja comprar Blair Witch?', 'Confirme?', function() {
		$.sweetModal('Obrigado por comprar <i class = "check icon"></i>');
	}, function() {
		$.sweetModal('Você cancelou esta compra');
	});
}

function callDeadSpace(){
	$.sweetModal.confirm('Deseja comprar Dead Space 3?', 'Confirme?', function() {
		$.sweetModal('Obrigado por comprar <i class = "check icon"></i>');
	}, function() {
		$.sweetModal('Você cancelou esta compra');
	});
}

function callRE(){
	$.sweetModal.confirm('Deseja comprar Resident Evil 7?', 'Confirme?', function() {
		$.sweetModal('Obrigado por comprar <i class = "check icon"></i>');
	}, function() {
		$.sweetModal('Você cancelou esta compra');
	});
}

function callTetris(){
	$.sweetModal.confirm('Deseja comprar Tetris?', 'Confirme?', function() {
		$.sweetModal('Obrigado por comprar <i class = "check icon"></i>');
	}, function() {
		$.sweetModal('Você cancelou esta compra');
	});
}

function callTangram(){
	$.sweetModal.confirm('Deseja comprar Tangram?', 'Confirme?', function() {
		$.sweetModal('Obrigado por comprar <i class = "check icon"></i>');
	}, function() {
		$.sweetModal('Você cancelou esta compra');
	});
}

function callRoom(){
	$.sweetModal.confirm('Deseja comprar The Room?', 'Confirme?', function() {
		$.sweetModal('Obrigado por comprar <i class = "check icon"></i>');
	}, function() {
		$.sweetModal('Você cancelou esta compra');
	});
}

function callNeedSpeed(){
	$.sweetModal.confirm('Deseja comprar Need for Speed?', 'Confirme?', function() {
		$.sweetModal('Obrigado por comprar <i class = "check icon"></i>');
	}, function() {
		$.sweetModal('Você cancelou esta compra');
	});
}

function callAsphalt(){
	$.sweetModal.confirm('Deseja comprar Asphalt 8: Airborne?', 'Confirme?', function() {
		$.sweetModal('Obrigado por comprar <i class = "check icon"></i>');
	}, function() {
		$.sweetModal('Você cancelou esta compra');
	});
}

function callCrew(){
	$.sweetModal.confirm('Deseja comprar The Crew 2?', 'Confirme?', function() {
		$.sweetModal('Obrigado por comprar <i class = "check icon"></i>');
	}, function() {
		$.sweetModal('Você cancelou esta compra');
	});
}

function callFifa(){
	$.sweetModal.confirm('Deseja comprar Fifa 16?', 'Confirme?', function() {
		$.sweetModal('Obrigado por comprar <i class = "check icon"></i>');
	}, function() {
		$.sweetModal('Você cancelou esta compra');
	});
}

function callPES(){
	$.sweetModal.confirm('Deseja comprar PES2019?', 'Confirme?', function() {
		$.sweetModal('Obrigado por comprar <i class = "check icon"></i>');
	}, function() {
		$.sweetModal('Você cancelou esta compra');
	});
}

function callRocket(){
	$.sweetModal.confirm('Deseja comprar Rocket League?', 'Confirme?', function() {
		$.sweetModal('Obrigado por comprar <i class = "check icon"></i>');
	}, function() {
		$.sweetModal('Você cancelou esta compra');
	});
}

function callFlight(){
	$.sweetModal.confirm('Deseja comprar Microsoft Flight Simulator?', 'Confirme?', function() {
		$.sweetModal('Obrigado por comprar <i class = "check icon"></i>');
	}, function() {
		$.sweetModal('Você cancelou esta compra');
	});
}

function callArma(){
	$.sweetModal.confirm('Deseja comprar Arma 3?', 'Confirme?', function() {
		$.sweetModal('Obrigado por comprar <i class = "check icon"></i>');
	}, function() {
		$.sweetModal('Você cancelou esta compra');
	});
}

function callSkylines(){
	$.sweetModal.confirm('Deseja comprar Cities: Skylines?', 'Confirme?', function() {
		$.sweetModal('Obrigado por comprar <i class = "check icon"></i>');
	}, function() {
		$.sweetModal('Você cancelou esta compra');
	});
}

$('.ui.accordion').accordion();


// Mostrar modal que apresenta os criadores

function selectCategory(){
	$('.ui.search').search({
		source: content
	});
}

var content = [
{ title: 'Horizon Zero Dawn' },
{ title: 'Life is Strange' },
{ title: 'Shadow of the Colossus' },
{ title: 'Blair Witch' },
{ title: 'Dead Space' },
{ title: 'Resident Evil 7' },
{ title: 'Tetris Ultimate' },
{ title: 'Tangram' },
{ title: 'The Room' },
{ title: 'Need for Speed' },
{ title: 'Asphalt 8: Airborne' },
{ title: 'The Crew 2' },
{ title: 'Fifa 16' },
{ title: 'PES2019' },
{ title: 'Rocket League' },
{ title: 'Microsoft Flight Simulator' },
{ title: 'Arma 3' },
{ title: 'Cities: Skylines' },
  // etc
  ];

  //Auto Scroll Section
  function scrollToSection(id) {
	var section = document.getElementById(id)
	section.scrollIntoView();
}