<?php

var $rows = 7;
var $column = new Array();
var $highlightedCell = new Array();
var $largest, $second, $third;

function getCellValue($row, $col){

	return $dataArray[$row][$col];
}

function setEntireCol($x){
	//Store col values into temp
	for($i = 1; $i < $rows; $i ++){
		$column[$i] = getCellValue($i, $x);
	}

}


function getCol($x){
	$col = new Array();
	//Store col values into temp
	for($i = 1; $i < $rows; $i ++){
		
		$col[$i] = getCellValue($i, $x);
	}
	
	return $col;

}

function getLargestSum(){

	$column = new Array();
	setEntireCol(9);
	$largest = $column[1];
	for($i = 2; $i < $rows; $i++){
		if($column[$i] > $largest){
			$largest = $column[$i];
		}
	}
	return $largest;

}


function getRowWithSecondHighestSum(){
	$largest = getLargestSum();
	$second = 0;
	for($i = 1; $i < $rows; $i ++){
		if($column[$i] == $largest){
			continue;
		}
		if($second < $column[$i]){
			$second = $column[$i];
		}
	}
	return $second;

}


function getRowWithThirdHighestSumScore(){
	$second = getRowWithSecondHighestSum();
	$third = 0;
	for($i = 1; $i < $rows; $i ++){
		if($column[$i] >= $second){
			continue;
		}
		if($third < $column[$i]){
			$third = $column[$i];
		}
	}
	return $third;
}

function getRowWithLowestSumScore(){
	var $x = $column[1];
	for($i = 2; $i < $rows; $i ++){
		if($column[$i] < $x){
		   $x = $column[$i];
		}
	}
	return $x;
}

function getLargestValueOfEachCol($col){
	$largest = $col[1];
	for($i = 2; $i < $rows; $i++){
		if($col[i] > $largest){
			$largest = $col[i];
		}
	}
	return $largest;

}

function highlightLargestCellOfEachCol(){

	for($j = 2; $j <=9; $j++){
		$column = new Array();
		$column = getCol($j);
		$highlightedCell[$j-2] = getLargestValueOfEachCol($column);
		
	}

}

?>