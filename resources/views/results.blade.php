@extends('layout')

@section('content')
	<div class="header header-filter" style="background-image: url('assets/img/bg5.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">

					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="main main-raised">
		<div class="section section-basic">
	    	<div class="container">
	            <div class="title">
	                <h2>Premium Tips Results</h2>
	            </div>
	            <div class="col-md-10 col-md-offset-1">
    					<div class="fresh-table full-color-orange">

                            <table id="fresh-table" class="table">
                                <thead>
                                    <th data-field="id"></th>
                                	<th data-field="time" >Time</th>
                                	<th data-field="league">League</th>
                                	<th data-field="game">Game</th>
                                	<th data-field="market">Market</th>
                                	<th data-field="tip">Tip</th>
                                	<th data-field="odd">Odd</th>
                                	<th data-field="result">Result</th>
                                </thead>
                                <tbody>
                                    <tr>
                                    	<td><strong>flag</strong></td>
                                    	<td><strong>22:30</strong></td>
                                    	<td><strong>Premier League</strong></td>
                                    	<td><strong>Chelsea VS Arsenal</strong></td>
                                    	<td><strong>Over/Under 2.5</strong></td>
                                    	<td><strong>Under</strong></td>
                                        <td><strong>2.11</strong></td>
                                        <td><strong>WIN</strong></td>

                                    </tr>
                                    <tr>
                                    	<td><strong>flag</strong></td>
                                        <td><strong>23:00</strong></td>
                                        <td><strong>Championship</strong></td>
                                        <td><strong>Wigan VS Barnsely</strong></td>
                                        <td><strong>Over/Under 2.5</strong></td>
                                        <td><strong>Over</strong></td>
                                        <td><strong>2.30</strong></td>
                                        <td><strong>LOSS</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

    	            </div>
	        </div>
	    </div>
	</div>    

@endsection