<?php
function dsv_file_expresssion($file)
  {
	 $csv = array_map('str_getcsv', file($file));
    if ($csv) 
      {
			$explode = array();
			$i = 0;
			foreach ($csv as $key => $value) {
				$explode[] = explode('|', $value[0]);
			}
			return json_encode($explode);
		}
    else
      {
	    echo 'ERROR 1: couldn\'t open file';
      }
  }