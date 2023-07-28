<?php
//This function aims at generating a row for each day of the calendar
//
function generateDivIds($startDateStr, $endDateStr, $interval, $currentDateStr) {

	//calculate the number of cells to generate, verify it is not more than 50
	//the calendar genrator for users should set that limit anyway
	//
	//conversion des dates en timestamp
	
	
	$startDate = strtotime($startDateStr);
	$endDate = strtotime($endDateStr);
	$currentDate = strtotime($currentDateStr);

	$dateDiff = ($endDate - $startDate)/$interval;	
	if ( $dateDiff / (60*60*24) < 50) {


		$date = $startDate
		$divIds = [];
			while ($date <= $endDate) { 
				
				// creation of a table containing the id of the divs that will be generated 

				$divId = date_format($date,'Y-m-d');
				
				if ($currentDate > $date) { 
					
					// each div has for id its own date + wether it's a past, present, or future date

					$divId += ' past';
				}
				else if ($currentDate = $date) {
					$divId += ' present';
				}
				else {
					$divId += ' future';
				}
				
				$divIds[] = $divId[];
				$date += 24*60*60; // on incremente la date de 24h
			}
	}

	else {
		echo 'Erreur: trop de cases dans le clendrier';
	}

	return $divIds;

}

function generateDivs()
