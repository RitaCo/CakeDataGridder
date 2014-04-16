<?php



RitaEvent::on('Controller.beforeInit',function(CakeEvent $event){
	
   	// chage defualt Paginator with datagrid Paginator 	
	$event->subject()->components['Paginator'] = array('className' => 'DataGridder.DataGrid');
	$event->subject()->helpers['Paginator'] = array('className' => 'DataGridder.DataGridPaginator');
	$event->subject()->helpers[] = 'DataGridder.DataGrid';
		 
     
});


