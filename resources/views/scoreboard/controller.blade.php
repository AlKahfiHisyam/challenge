@extends('layouts/app')
@section('head')
@endsection

@section('content')
<!-- Content -->
<div class="content ">
    <div class="page-header">
        <h4>Controller Scoreboard</h4>
        <hr>
    </div>

    <div class="row">
        <div class="col d-flex align-items-center justify-content-center">
            <div class="col-md-12">
                <!-- <div class="card" style="background-color: none;"> -->
                    <div class="card-body">
                        <div class="col d-flex align-items-center justify-content-center">
                            <div class="table-responsive col-md-12">
                                <table class="table table-active text-center table-bordered">
                                    <thead>

                                        <tr>
                                            <td>
                                                <h1>HOME</h1>
                                            </td>
                                            <td><h1 style="color: red">CONTROLLER</h1></td>
                                            <td>
                                                <h1>AWAY</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <input type="text" id="home" name="home" class="form-control" value="" placeholder="Home"><hr>
                                                <div id="home_score" style="display:table-cell; border: 2px solid orange; width: 80px; height: 80px; vertical-align: middle; text-align: center; font-size: 48px;">
                                                    0
                                                </div></br>
                                                <h6>SCORE</h6>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-danger home_score_min">
                                                        <i class="ti-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-primary home_score_plus">
                                                        <i class="ti-plus"></i>
                                                    </button>
                                                </div><hr>
                                                <div id="home_foul" style="display:table-cell; border: 2px solid orange; width: 50px; height: 50px; vertical-align: middle; text-align: center; font-size: 32px;">
                                                    0
                                                </div></br>
                                                <h6>FOUL</h6>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-danger home_foul_min">
                                                        <i class="ti-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-primary home_foul_plus">
                                                        <i class="ti-plus"></i>
                                                    </button>
                                                </div></br></br>
                                                <button type="button" class="btn btn-dark home_foul_reset">
                                                    Reset Foul
                                                </button>
                                            </td>
                                            <td style="width: 20%">
                                                <h4>PERIODE</h4>
                                                <div style="display: flex; justify-content: center; align-items: center;">
                                                    <div id="period" style="display:table-cell; border: 2px solid black; width: 90px; height: 90px; vertical-align: middle; text-align: center; font-size: 56px; margin-left: 5px; margin-right: 5px">
                                                            1
                                                    </div>
                                                </div><br>
                                                <div class="btn-group" role="group" aria-label="Basic example">    
                                                    <button type="button" class="btn btn-danger min_period">
                                                        <i class="ti-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-primary plus_period">
                                                        <i class="ti-plus"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td align="center">
                                                <input type="text" id="away" name="away" class="form-control" value="" placeholder="Away"><hr>
                                                <div id="away_score" style="display:table-cell; border: 2px solid orange; width: 80px; height: 80px; vertical-align: middle; text-align: center; font-size: 48px;">
                                                    0
                                                </div></br>
                                                <h6>SCORE</h6>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-danger away_score_min">
                                                        <i class="ti-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-primary away_score_plus">
                                                        <i class="ti-plus"></i>
                                                    </button>
                                                </div><hr>
                                                <div id="away_foul" style="display:table-cell; border: 2px solid orange; width: 50px; height: 50px; vertical-align: middle; text-align: center; font-size: 32px;">
                                                    0
                                                </div></br>
                                                <h6>FOUL</h6>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-danger away_foul_min">
                                                        <i class="ti-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-primary away_foul_plus">
                                                        <i class="ti-plus"></i>
                                                    </button>
                                                </div></br></br>
                                                <button type="button" class="btn btn-dark away_foul_reset">
                                                    Reset Foul
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <h6>Timer</h6>
                                                <button type="button" class="btn btn-dark reset_timer">
                                                    Reset
                                                </button>
                                                <button type="button" class="btn btn-danger stop">
                                                    Stop
                                                </button>
                                                <button type="button" class="btn btn-primary start">
                                                    Start / Resume
                                                </button>
                                            </td>
                                            <td align="center" style="width: 40%">
                                                <h6>Scoreboard</h6>
                                                <button type="button" class="btn btn-dark reset_scoreboard">
                                                    Reset Scoreboard
                                                </button>
                                                <button type="button" class="btn btn-primary update">
                                                    Update
                                                </button>
                                            </td>
                                            <td align="center">
                                                <h6>Sound</h6>
                                                <input type="hidden" value="0" id="sound_status">
                                                <button type="button" class="btn btn-secondary sound1">
                                                    Peluit
                                                </button>
                                                <button type="button" class="btn btn-secondary sound2">
                                                    Goal
                                                </button>
                                                <button type="button" class="btn btn-secondary sound3">
                                                    Berakhir
                                                </button>
                                            </td>
                                        </tr>                                        
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>
<!-- ./ Content -->
@endsection

@section('script')

<script src="{{ asset('/assets/js/scoreboard.js') }}"></script>

    <!-- Prism -->
    <!-- <script src="{{ url('assets2/vendors/prism/prism.js') }}"></script> -->
@endsection
