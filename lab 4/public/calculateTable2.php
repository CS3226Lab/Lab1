<?php

include 'calculateTable.php';

function setRowColor($row, $color){
	echo "<script type=\'text/javascript\'>
	var x  document.getElementById($row);
	x.setAttribute(\"class\",$color);
	</script>";

}


function setRowWithHighestSumToGold(){
	var $la = getLargestSum();
	for($i=1; $i < $rows; $i ++){
		if($la == $dataArray[i][9]){
			setRowColor($i,"gold");
		}
	}
}

//
//
//function getRowWithSecondHighestSum(){
//	var largest = getLargestSum();
//	var second = 0;
//	for(i = 1; i < rows; i ++){
//		if(temp[i] == largest){
//			continue;
//		}
//		if(second < temp[i]){
//			second = temp[i];
//		}
//	}
//	return second;
//
//}
//
//function setRowWithSecondHighestSumToSilver(){
//	var second = getRowWithSecondHighestSum();
//	for(i=1; i < rows; i ++){
//		if(second == temp[i]){
//			setRowColor(i,"silver");
//		}
//	}
//}
//
//
//function getRowWithThirdHighestSumScore(){
//	var second = getRowWithSecondHighestSum();
//	var third = 0;
//	for(i = 1; i < rows; i ++){
//		if(temp[i] >= second){
//			continue;
//		}
//		if(third < temp[i]){
//			third = temp[i];
//		}
//	}
//	return third;
//}
//
//function setRowWithThirdHighestSumToBronze(){
//	var third = getRowWithThirdHighestSumScore();
//	for(i=1; i < rows; i ++){
//		if(third == temp[i]){
//			setRowColor(i,"bronze");
//		}
//	}
//}
//
//function getRowWithLowestSumScore(){
//	var x = temp[1];
//	for(i = 2; i < rows; i ++){
//		if(temp[i] < x){
//		   x = temp[i];
//		}
//	}
//	return x;
//}
//
//function setRowWithLowestSumToPink(){
//	var last = getRowWithLowestSumScore();
//	for(i=1; i < rows; i ++){
//		if(last == temp[i]){
//			setRowColor(i,"pink");
//		}
//	}
//}
//

//Find each col, highlight the one with highest score.

/*function setCellColor(r, col, color){

	var x = document.getElementById(r);
	x.cells[col].setAttribute("class",color);
}*/
//
//function getLargestValueOfEachCol(){
//	var largest = temp[1];
//	for(i = 2; i < rows; i++){
//		if(temp[i] > largest){
//			largest = temp[i];
//		}
//	}
//	return largest;
//
//}
//
//function highlightLargestCellWithOrange(highscore, index){
//
//	for(i=1; i < rows; i ++){
//		if(highscore == temp[i]){
//			//setCellColor(i, index, "orange")
//			var x = document.getElementById(i);
//			x.cells[index].style.background = "orange";
//		}
//	}
//
//}
//
//function highlightLargestCellOfEachCol(){
//
//	for(j = MC; j <=SUM; j++){
//		temp = new Array(rows);
//		getCol(j);
//		var largest = getLargestValueOfEachCol();
//		highlightLargestCellWithOrange(largest, j);
//
//	}
//
//}
//
//function setRowInDetailPage(){
//	var t=document.getElementById("PL");
//	for(var x=1; x < t.rows.length; x ++){
//		for(var y=1; y < t.rows[x].cells.length; y ++){
//			if(t.rows[x].cells[y].innerHTML=="x"){
//				t.rows[x].cells[y].style.background = "pink";
//			}
//		}
//	}
//};

?>