@extends('layout')

@section('content')
	<div class="header header-filter" style="background-image: url('assets/img/bg2.jpg');">
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
                <div class="row">
    	            <div class="title">
    	                <h2>Free Betting Tips</h2>                
    	            </div>
    	            <div class="col-md-10 col-md-offset-1">
    					<div class="fresh-table full-color-azure">

                            <table id="fresh-table" class="table">
                                <thead>
                                    <th data-field="id"></th>
                                    <th data-field="time" >Time</th>
                                    <th data-field="league">League</th>
                                    <th data-field="game">Game</th>
                                    <th data-field="market">Market</th>
                                    <th data-field="tip">Tip</th>
                                    <th data-field="odd">Odd</th>
                                </thead>
                                <tbody>
                                    <tr>
                                    	<td><strong>flag</strong></td>
                                    	<td><strong>22:30</strong></td>
                                    	<td><strong>Premier League</strong></td>
                                    	<td><strong>Chelsea VS Arsenal</strong></td>
                                    	<td><strong>Over/Under 2.5</strong></td>
                                        <td><strong>Over</strong></td>
                                        <td><strong>2.11</strong></td>

                                    </tr>
                                    <tr>
                                    	<td><strong>flag</strong></td>
                                        <td><strong>23:00</strong></td>
                                        <td><strong>Championship</strong></td>
                                        <td><strong>Wigan VS Barnsely</strong></td>
                                        <td><strong>Over/Under 2.5</strong></td>
                                        <td><strong>Under</strong></td>
                                        <td><strong>2.30</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

    	            </div>
	            </div>
                <div class="space-70"></div>
                @if (Auth::check())

                @else
                <div class="row">
                    <div class="title">
                        <h2>Access Premium Betting Tips Now</h2>                
                    </div>
                    <div class="space-50"></div>       
                            <div class="col-md-3">
                                <div class="card card-signup">
                                    <div class="header header-danger text-center">
                                        <h3>Daily Plan</h3>
                                    </div>
                                    <div class="content">
                                        <div class="pricing-head">
                                            <h4><i>Ksh</i>200
                                            <span>
                                            Per Day</span>
                                            </h4>
                                        </div>
                                        <div class="pricing-footer">
                                            <p>
                                                 Enjoy exculsive premium bettin tips for a day uninterrupted.
                                            </p>
                                            <a href="/signup/1" class="btn btn-danger">
                                            Sign Up
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-signup">
                                    <div class="header header-primary text-center">
                                        <h3>1 Month Plan</h3>
                                    </div>
                                    <div class="content">
                                        <div class="pricing-head">
                                            <h4><i>Ksh</i>1000
                                            <span>
                                            1 Month Access</span>
                                            </h4>
                                        </div>
                                        <div class="pricing-footer">
                                            <p>
                                                 Enjoy exculsive premium bettin tips for a month uninterrupted.
                                            </p>
                                            <a href="/signup/2" class="btn btn-danger">
                                            Sign Up
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-signup">
                                    <div class="header header-info text-center">
                                        <h3>2 Month Plan</h3>
                                    </div>
                                    <div class="content">
                                        <div class="pricing-head">
                                            <h4><i>Ksh</i>1500
                                            <span>
                                            2 Months Access</span>
                                            </h4>
                                        </div>
                                        <div class="pricing-footer">
                                            <p>
                                                 Enjoy exculsive premium bettin tips for 2 months uninterrupted.
                                            </p>
                                            <a href="/signup/3" class="btn btn-danger">
                                            Sign Up
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card card-signup">
                                    <div class="header header-success text-center">
                                        <h3>3 Month Plan</h3>
                                    </div>
                                    <div class="content">
                                        <div class="pricing-head">
                                            <h4><i>Ksh</i>2500
                                            <span>
                                            3 Months Access</span>
                                            </h4>
                                        </div>
                                        <div class="pricing-footer">
                                            <p>
                                                 Enjoy exculsive premium bettin tips for 3 months uninterrupted.
                                            </p>
                                            <a href="/signup/4" class="btn btn-danger">
                                            Sign Up
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>    
	                </div>
            @endif
	    </div>
	</div>    

@endsection