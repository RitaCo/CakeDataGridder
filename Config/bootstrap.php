<?php



RitaEvent::on('Controller.beforeInit',function(CakeEvent $event){
	if ( Rita::debug()) {
   		
		$event->subject()->components[] = 'DataGridder.DataGrid';
		$event->subject()->helpers[] = 'DataGridder.DataGrid';
		 
    } 
});


