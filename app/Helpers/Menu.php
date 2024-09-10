
<?php
	class Menu{
		
	public static function navbartopright(){
		return [
		[
			'path' => 'home',
			'label' => "Home", 
			'icon' => '<i class="material-icons ">home</i>'
		],
		
		[
			'path' => 'hargaprodusen',
			'label' => "Harga Produsen", 
			'icon' => '<i class="material-icons ">class</i>'
		],
		
		[
			'path' => 'datapangan',
			'label' => "Data Pangan", 
			'icon' => '<i class="material-icons ">equalizer</i>'
		],
		
		[
			'path' => 'kecamatan',
			'label' => "Kecamatan", 
			'icon' => '<i class="material-icons ">location_city</i>'
		],
		
		[
			'path' => 'nbm',
			'label' => "NBM", 
			'icon' => '<i class="material-icons ">pie_chart</i>'
		],
		
		[
			'path' => 'publikasipangan',
			'label' => "Publikasi Pangan", 
			'icon' => '<i class="material-icons ">present_to_all</i>'
		],
		
		[
			'path' => 'roles',
			'label' => "Roles", 
			'icon' => '<i class="material-icons ">recent_actors</i>'
		],
		
		[
			'path' => 'users',
			'label' => "User", 
			'icon' => '<i class="material-icons ">supervisor_account</i>'
		]
	] ;
	}
	
		
	public static function bulan(){
		return [
		[
			'value' => '1', 
			'label' => "January", 
		],
		[
			'value' => '2', 
			'label' => "February", 
		],
		[
			'value' => '3', 
			'label' => "Maret", 
		],
		[
			'value' => '4', 
			'label' => "April", 
		],
		[
			'value' => '5', 
			'label' => "Mei", 
		],
		[
			'value' => '6', 
			'label' => "Juni", 
		],
		[
			'value' => '7', 
			'label' => "Juli", 
		],
		[
			'value' => '8', 
			'label' => "Agustus", 
		],
		[
			'value' => '9', 
			'label' => "September", 
		],
		[
			'value' => '10', 
			'label' => "Oktober", 
		],
		[
			'value' => '11', 
			'label' => "November", 
		],
		[
			'value' => '12', 
			'label' => "Desember", 
		],] ;
	}
	
	}
