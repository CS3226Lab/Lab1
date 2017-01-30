var diff=0;

function setRowHeight(){
	this.Table=document.getElementById("RL");
	if(this.Table.rows.length <= 1)
    {
        return;
    }
    for(var x = 2; x < this.Table.rows.length; x++){
    	this.row1=this.Table.rows[x-1].cells;
    	this.row2=this.Table.rows[x].cells;
    	diff=this.row1[11].innerHTML-this.row2[11].innerHTML;
    	document.getElementById(x).style.height=(diff+1)*37+"px";
    }
}

function rsetRowHeight(){
    for(var x = 2; x < this.Table.rows.length; x++){
        document.getElementById(x).style.height=37+"px";
    }
}