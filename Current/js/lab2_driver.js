document.addEventListener("DOMContentLoaded",
	function(event){	
		new TableSorter("RL",0,3,4,5,6,7,8,9,10,11);
		setRowWithHighestSumToGold();
		setRowWithSecondHighestSumToSilver();
		setRowWithThirdHighestSumToBronze();
		setRowWithLowestSumToPink();
		highlightLargestCellOfEachCol();
		setRowHeight();
});