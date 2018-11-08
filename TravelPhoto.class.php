<?php
	class TravelPhoto {
		private $date;
		private $fileName;
		private $description;
		private $title;
		private $latitude;
		private $longitude;
		private $ID;
		static $photoID = 0;
		function __construct($name_in,$title_in,$desc_in,$lat_in,$long_in){
			$this->fileName = $name_in;
			$this->title = $title_in;
			$this->description = $desc_in;
			$this->latitude = $lat_in;
			$this->longitude = $long_in;
			self::$photoID++;
		};
	}
?>