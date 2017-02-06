@extends('template') <!-- use template from previous slide -->
@section('main') <!-- define a section called main -->
<div>
	<ol>
		<abbr title="CS3226 Lab 3: Second Version"><h1><b>Lab 3: Second Version</b></h1></abbr>
		<h2>This is a website for lab 3.You can change the window size to see the responsive effect.</h2>
	</ol>
</div>
<br>
<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading"><h3>RankList</h3></div>
		 <!-- Table -->
	<table class="table" id="RL">
		<thead>
	  		<tr>
	  			<th class="">Rank</th>
	  			<th class="hidden-xs">Flag</th>
	  			<th class="">Name</th>
	  			<th class="hidden-xs hidden-sm">MC</th>
	  			<th class="hidden-xs hidden-sm">TC</th>
	  			<th class="">SPE</th>
	  			<th class="hidden-xs hidden-sm">HW</th>
	  			<th class="hidden-xs hidden-sm">Bs</th>
	  			<th class="hidden-xs hidden-sm">KS</th>
	  			<th class="hidden-xs hidden-sm">Ac</th>
	  			<th class="">DIL</th>
	  			<th class="">Sum</th>
		  		</tr>
	  	</thead>
	  	<tbody>
	  		<tr id="1">
			    <td class="">1</td>
		        <td class="hidden-xs"><img src="img/SGP.png" width="20px"> SGP</td>
			    <td class=""><a href="{{ url('student/1')}}">personA</a></td>
			    <td class="hidden-xs hidden-sm">3</td>
			    <td class="hidden-xs hidden-sm">0</td>
			    <td class="">3</td>
			    <td class="hidden-xs hidden-sm">2.5</td>
			    <td class="hidden-xs hidden-sm">1</td>
			    <td class="hidden-xs hidden-sm">2</td>
			    <td class="hidden-xs hidden-sm">4</td>
			    <td class="">9.5</td>
			    <td class="">12.5</td>
				</tr>

			<tr id="2">
				<td class="">2</td>
			    <td class="hidden-xs"><img src="img/CHN.png" width="20px"> CHN</td>
				<td class=""><a href="{{ url('student/2')}}">personB</a></td>
			    <td class="hidden-xs hidden-sm">3</td>
			    <td class="hidden-xs hidden-sm">0</td>
			    <td class="">3</td>
			    <td class="hidden-xs hidden-sm">1.5</td>
			    <td class="hidden-xs hidden-sm">1</td>
			    <td class="hidden-xs hidden-sm">2</td>
			    <td class="hidden-xs hidden-sm">4</td>
			    <td class="">8.5</td>
			    <td class="">11.5</td>
			</tr>

			<tr id="3">
			  	<td class="">3</td>
			    <td class="hidden-xs"><img src="img/IDN.png" width="20px"> IDN</td>
			    <td class=""><a href="{{ url('student/3')}}">personC</a></td>
			    <td class="hidden-xs hidden-sm">4</td>
			    <td class="hidden-xs hidden-sm">0</td>
			    <td class="">4</td>
			    <td class="hidden-xs hidden-sm">1</td>
			    <td class="hidden-xs hidden-sm">1</td>
			    <td class="hidden-xs hidden-sm">2</td>
			    <td class="hidden-xs hidden-sm">4</td>
			    <td class="">7</td>
			    <td class="">11</td>
			</tr>

			<tr id="4">
			 	<td class="">4</td>
			    <td class="hidden-xs"><img src="img/VNM.png" width="20px"> VNM</td>
			    <td class=""><a href="{{ url('student/4')}}">personD</a></td>
			    <td class="hidden-xs hidden-sm">4</td>
			    <td class="hidden-xs hidden-sm">0</td>
			    <td class="">4</td>
			    <td class="hidden-xs hidden-sm">1</td>
			    <td class="hidden-xs hidden-sm">1</td>
			    <td class="hidden-xs hidden-sm">1</td>
			    <td class="hidden-xs hidden-sm">3</td>
			    <td class="">7</td>
			    <td class="">11</td>
			</tr>

		    <tr id="5">
		    	<td class="">5</td>
		        <td class="hidden-xs"><img src="img/MYS.png" width="20px"> MYS</td>
		        <td class=""><a href="{{ url('student/5')}}">personE</a></td>
		        <td class="hidden-xs hidden-sm">3.5</td>
		        <td class="hidden-xs hidden-sm">0</td>
		        <td class="">3.5</td>
		        <td class="hidden-xs hidden-sm">1.5</td>
		        <td class="hidden-xs hidden-sm">1</td>
		        <td class="hidden-xs hidden-sm">2</td>
		        <td class="hidden-xs hidden-sm">2</td>
		        <td class="">6.5</td>
		        <td class="">10</td>
		    </tr>

		    <tr id="6">
		    	<td class="">6</td>
		        <td class="hidden-xs"><img src="img/SGP.png" width="20px"> SGP</td>
		        <td class=""><a href="{{ url('student/6')}}">personF</a></td>
		        <td class="hidden-xs hidden-sm">1</td>
		        <td class="hidden-xs hidden-sm">0</td>
		        <td class="">1</td>
		        <td class="hidden-xs hidden-sm">1.5</td>
		        <td class="hidden-xs hidden-sm">1</td>
		        <td class="hidden-xs hidden-sm">2</td>
		        <td class="hidden-xs hidden-sm">4</td>
		        <td class="">8.5</td>
		        <td class="">9.5</td>
		    </tr>
					
		    <tr id="7">
		    	<td class="">7</td>
		        <td class="hidden-xs"><img src="img/IND.png" width="20px"> IND</td>
		        <td class=""><a href="{{ url('student/7')}}">personG</a></td>
		        <td class="hidden-xs hidden-sm">1</td>
		        <td class="hidden-xs hidden-sm">0</td>
		        <td class="">1</td>
		        <td class="hidden-xs hidden-sm">1.5</td>
		        <td class="hidden-xs hidden-sm">1</td>
		        <td class="hidden-xs hidden-sm">2</td>
		        <td class="hidden-xs hidden-sm">4</td>
		        <td class="">8.5</td>
		        <td class="">9.5</td>
		    </tr>  
		</tbody>
	</table>
</div>

<div class="hidden-xs col-sm-4 col-md-4 col-lg-5"></div>
<div class="legend hidden-xs col-sm-5 col-md-4 col-lg-3">
    <p class="legend"><b>Legend: </b></p>
    <p><span class="color" id="gold"></span> Gold  : Highest Sum Score</p>
    <p><span class="color" id="silver"></span> Silver: Second Highest Sum Score</p>
    <p><span class="color" id="bronze"></span> Bronze: Third Highest Sum Score</p>
    <p><span class="color" id="pink"></span> Pink: Lowest Sum Score</p>
    <p><span class="color" id="orange"></span> Orange  : Highest Column Score</p>
</div>
@stop