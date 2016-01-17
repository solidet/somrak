<?php
Class AccommodationController extends Controller
{
	public function index()
	{
		$accommodations = Accommodation::all();
		return $this->viewTpl(
			'accommodation/index.html',
			[
				'accommodations'=>$accommodations
			]
		);
	}	
}
?>