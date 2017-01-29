//Variables
var index = 0;
var img = 1;
var link = 2
var MC = 3;
var TC = 4;
var SPE = 5;
var HW = 6;
var BS = 7;
var KS = 8;
var AC = 9;
var DIL = 10;
var SUM = 11;

var rows = 8;
var cols = 12;

var storage;
var row;

function getRow(x){
    row = document.getElementById(x);
    return row;
}

function getCellValue(type, row){
    
    return row.cells[type].textContent;
}

var temp = new Array(rows);

function getCol(x){
    //Store col values into temp
    for(i = 1; i < rows; i ++){
        temp[i] = parseFloat(getCellValue(x, getRow(i)));
    }
    
}

function getLargestSum(){
    
    getCol(SUM);
    var largest = temp[1];
    for(i = 2; i < rows; i++){
        if(temp[i] > largest){
            largest = temp[i];
        }
    }
    return largest;
    
}

function setRowColor(row, color){
    var x = document.getElementById(row);
    x.setAttribute("class",color);
    
}

function setCellColor(row, col, color){
    
    var x = document.getElementById(row);
    x.cells[col].setAttribute("class",color);
}

//setRowColor(6,"pink");
//setCellColor(3,8,"gold");

function setRowWithHighestSumToGold(){
    var largest = getLargestSum();
    console.log(largest);
    for(i=1; i < rows; i ++){
        if(largest == temp[i]){
            setRowColor(i,"gold");
        }
    }
}

setRowWithHighestSumToGold();

function getRowWithSecondHighestSum(){
    var largest = getLargestSum();
    var second = 0;
    for(i = 1; i < rows; i ++){
        if(temp[i] == largest){
            continue;
        }
        if(second < temp[i]){
            second = temp[i];
        }
    }
    return second;
    
}

function setRowWithSecondHighestSumToSilver(){
    var second = getRowWithSecondHighestSum();
    for(i=1; i < rows; i ++){
        if(second == temp[i]){
            setRowColor(i,"silver");
        }
    }
}
setRowWithSecondHighestSumToSilver();

function getRowWithThirdHighestSumScore(){
    var second = getRowWithSecondHighestSum();
    var third = 0;
    for(i = 1; i < rows; i ++){
        if(temp[i] >= second){
            continue;
        }
        if(third < temp[i]){
            third = temp[i];
        }
    }
    return third;
}

function setRowWithThirdHighestSumToBronze(){
    var third = getRowWithThirdHighestSumScore();
    for(i=1; i < rows; i ++){
        if(third == temp[i]){
            setRowColor(i,"bronze");
        }
    }
}
setRowWithThirdHighestSumToBronze();

function getRowWithLowestSumScore(){
    var x = temp[1];
    for(i = 2; i < rows; i ++){
        if(temp[i] < x){
           x = temp[i];
        }
    }
    return x;
}

function setRowWithLowestSumToPink(){
    var last = getRowWithLowestSumScore();
    for(i=1; i < rows; i ++){
        if(last == temp[i]){
            setRowColor(i,"pink");
        }
    }
}
setRowWithLowestSumToPink();
        
//Function for testing only
//function testSum(){
//    
//    for(i = 1; i < rows; i ++){
//        tempArray[i] =  getCellValue(SUM, getRow(i));
//    }
//}
//
//getHighestSum();
//
//console.log(tempArray[4]);