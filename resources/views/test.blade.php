<!doctype>
<html>
<head>
    <title>jsPDF</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
    @CHARSET "UTF-8";
    .page-break {
        page-break-after: always;
        page-break-inside: avoid;
        clear:both;
    }
    .page-break-before {
        page-break-before: always;
        page-break-inside: avoid;
        clear:both;
    }
    .square1{
        background: #FCE4D6;
        width: 100%;
        height: 400px;
    }
    .square2{
        background: #E36C0A;
        width: 100%;
        height: 400px;
    }
    .square3{
        background: #E36C0A;
        width: 100%;
        height: 400px;
    }
    .square4{
        background: #FCE4D6;
        width: 100%;
        height: 400px;
    }
    div.square2::before{
        content: '';
        width: 0;
        height: 0;
        border-top: 60px solid transparent;
        border-right: 1007px solid #E36C0A;
        border-bottom: 0 solid transparent;
    }
    div.square4::before{
        content: '';
        width: 0;
        height: 0;
        border-top: 60px solid transparent;
        border-right: 1007px solid #FCE4D6;
        border-bottom: 0 solid transparent;
    }
    table, th, td {
        border: 1px solid black;
    }
    .modal-loader {
        display:    block;
        position:   fixed;
        z-index:    1000;
        top:        0;
        left:       0;
        height:     100%;
        width:      100%;
        background: rgba( 255, 255, 255, 1.0 )
                    url('{{asset('css/ajax-loader.gif')}}')
                    50% 50% 
                    no-repeat;
    }
</style>

</head>
<body>
    <button onclick="cssss()">Generate PDF</button>
    <div id='loader'>
        <div class="modal-loader">
        </div>
    </div>
    <div id="html-2-pdfwrapper" style='position: absolute; left: 20px; top: 50px; bottom: 0; overflow: auto; width: 1024px;'>
        <!-- <img src="octocat.jpg" width="200" height="200"> -->
        <div id="page1">
            <div class="square3"></div>
            <div class="square4"></div>
        </div>
        <div id="page2">
            <table>
                <thead style="color: #FCE4D6;">
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Activty</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($activity as $k)
                        <tr>
                            <td></td>
                            <td>{{$k['date']}}</td>
                            <td>{{$k['time']}}</td>
                            <td>{{$k['activity']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div id="page3">
            
            <div class="square1">
                <h3 style="position: absolute;">hello page 3 here</h3>
            </div>
            <div class="square2"></div>
        </div>
        <div id="chartContainer" >
            <div style="border: 1px solid black; ">
                <div id="chart1" style="height: 500px;width: 800px">
                    
                </div>
            </div>
            <div style="border: 1px solid red; margin-top: 100px; ">
                <div id="chart2" style="height: 350px;width: 800px">
                    
                </div>
            </div>
            <div style="border: 1px solid red; margin-top: 100px; ">
                <div id="chart3" style="height: 350px;width: 800px">
                    
                </div>
            </div>
            <div style="border: 1px solid red; margin-top: 100px; ">
                <div id="chart4" style="height: 350px;width: 800px">
                    
                </div>
            </div>
            <div style="border: 1px solid red; margin-top: 100px; ">
                <div id="chart5" style="height: 350px;width: 800px">
                    
                </div>
            </div>
            <div style="border: 1px solid red; margin-top: 100px; ">
                <div id="chart6" style="height: 350px;width: 800px">
                    
                </div>
            </div>
            <div style="border: 1px solid red; margin-top: 100px; ">
                <div id="chart7" style="height: 350px;width: 800px">
                    
                </div>
            </div>
            <div style="border: 1px solid red; margin-top: 100px; ">
                <div id="chart8" style="height: 350px;width: 800px">
                    
                </div>
            </div>
            <div style="border: 1px solid red; margin-top: 100px; ">
                <div id="chart9" style="height: 350px;width: 800px">
                    
                </div>
            </div>
            <div style="border: 1px solid red; margin-top: 100px; ">
                <div id="chart10" style="height: 350px;width: 800px">
                    
                </div>
            </div>
        </div>
        <div id="page8" style="position: absolute;top: 0;">
            <table width="1000" style="font-weight: bold; ">
                <thead style="width: 800;">
                    <tr>
                        <td rowspan="2">RIBA Stage</td>
                        <th colspan="2" scope="colgroup">Constants</th>
                        @foreach($data as $key)
                            <th colspan="2" scope="colgroup">{{$key['name']}}</th>
                        @endforeach
                        <th colspan="2" scope="colgroup">Average</th>
                      </tr>
                      <tr>
                        <th scope="col">Max</th>
                        <th scope="col">Weighting</th>
                        @foreach($data as $key)
                            <th scope="col">Nom.</th>
                            <th scope="col">Wei.</th>
                        @endforeach
                        <th scope="col">Nom.</th>
                        <th scope="col">Wei</th>
                      </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Insurances</td>
                        <td>5</td>
                        <td>{{$evalwei->insurances}}%</td>
                        @foreach($quali as $k)
                            <td></td>
                            <td></td>
                        @endforeach
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bonds</td>
                        <td>5</td>
                        <td>{{$evalwei->bonds}}%</td>
                        @foreach($quali as $k)
                            <td></td>
                            <td></td>
                        @endforeach
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3rd Parties</td>
                        <td>5</td>
                        <td>{{$evalwei->third_parties}}%</td>
                        @foreach($quali as $k)
                            <td></td>
                            <td></td>
                        @endforeach
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Limit of Liability</td>
                        <td>5</td>
                        <td>{{$evalwei->limit_of_liability}}%</td>
                        @foreach($quali as $k)
                            <td></td>
                            <td></td>
                        @endforeach
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Net Contribution Clause</td>
                        <td>5</td>
                        <td>{{$evalwei->net_contribution_clause}}%</td>
                        @foreach($quali as $k)
                            <td></td>
                            <td></td>
                        @endforeach
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>25</td>
                        <td>{{$evalwei->insurances+$evalwei->bonds+$evalwei->third_parties+$evalwei->limit_of_liability+$evalwei->net_contribution_clause}}%</td>
                        @foreach($quali as $k)
                            <td></td>
                            <td></td>
                        @endforeach
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="page7" style="position: absolute;top: 0;">
            <table width="1000" style="font-weight: bold; ">
                <thead>
                    <tr>
                        <td rowspan="2">RIBA Stage</td>
                        @foreach($data as $key)
                            <th colspan="2" scope="colgroup">{{$key['name']}}</th>
                        @endforeach
                        <th colspan="2" scope="colgroup">Average</th>
                        <th colspan="2" scope="colgroup">Budget</th>
                    </tr>
                    <tr>
                        @foreach($data as $key)
                            <th>£</th>
                            <th>Share</th>
                        @endforeach
                        <th>£</th>
                        <th>Share</th>
                        <th>£</th>
                        <th>Share</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $counterni = 0;
                    @endphp
                    @foreach($tenderfeeamtss as $k)
                        <tr>
                            <td>{{$counterni}}</td>
                            @for($xs=1;count($k) > $xs;$xs++)
                                <td></td>
                            @endfor
                            <td></td>
                            <td></td>
                            @php
                                $counterni++;
                            @endphp 
                            {{-- <td>{{var_dump($k)}}</td> --}}
                        </tr>
                    @endforeach
                    <tr>
                        <td>Total</td>
                        @for($hah = 0;count($data)+1 > $hah; $hah++)
                        <td></td>
                        <td></td>
                        @endfor
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="page6" style="position: absolute;top: 0;">
            <table width="1000" style="font-weight: bold; ">
                <thead>
                    <tr>
                        <td rowspan="2">RIBA Stage</td>
                        @foreach($data as $key)
                            <th colspan="2" scope="colgroup">{{$key['name']}}</th>
                        @endforeach
                        <th colspan="2" scope="colgroup">Average</th>
                        <th colspan="2" scope="colgroup">Budget</th>
                    </tr>
                    <tr>
                        @foreach($data as $key)
                            <th>£</th>
                            <th>Cum.</th>
                        @endforeach
                        <th>£</th>
                        <th>Cum.</th>
                        <th>£</th>
                        <th>Cum.</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tenderfeeamtss as $k)
                        <tr>
                            @foreach($k as $v)
                                <td>{{$v}}</td>
                            @endforeach
                            <td></td>
                            <td></td>
                            @php
                                $totalfeeave = $k[0][7][6];
                            @endphp 
                            {{-- <td>{{var_dump($k)}}</td> --}}
                        </tr>
                    @endforeach
                    <tr>
                        <td>Total</td>
                        @for($hah = 0;count($data)+1 > $hah; $hah++)
                        <td>{{$tenderfeeamtss[7][2*($hah + 1)]}}</td>
                        <td></td>
                        @endfor
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="page5" style="position: absolute;top: 0;">
            <table width="1000" style="font-weight: bold; " >
                <thead>
                    <tr>
                      <td rowspan="2">RIBA Stage</td>
                      <th colspan="2" scope="colgroup">Constants</th>
                      @foreach($data as $key)
                          <th colspan="2" scope="colgroup">{{$key['name']}}</th>
                      @endforeach
                      <th colspan="2" scope="colgroup">Average</th>
                    </tr>
                    <tr>
                      <th scope="col">Max</th>
                      <th scope="col">Weighting</th>
                      @foreach($data as $key)
                          <th scope="col">Score</th>
                          <th scope="col">Wei</th>
                      @endforeach
                      <th scope="col">Score</th>
                      <th scope="col">Wei</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Organisation</td>
                        <td colspan="{{(count($data)+2)*2}}">{{$evalwei->organisation}}%</td>
                    </tr>
                    <tr>
                        <td>Project Experience</td>
                        <td>5</td>
                        <td>{{$evalwei->organisation_project_exp}}%</td>
                        @php
                            $totprojnom = 0;
                        @endphp
                        @foreach ($qualmatrix as $element)
                        <td>{{$element[0]['proj_ex_nom']}}</td>
                        <td>{{$element[0]['proj_ex_wei']}}</td>
                        @php
                            $totprojnom += $element[0]['proj_ex_nom'];
                        @endphp
                        @endforeach
                        <td>{{$totprojnom/count($data)}}</td>
                        <td>{{round($totprojnom/count($data)*($evalwei->organisation_project_exp/100),1)}}</td>
                    </tr>
                    <tr>
                        <td>Variety of Services</td>
                        <td>5</td>
                        <td>{{$evalwei->organisation_variety_of_services}}%</td>
                        @php
                            $totvosnom = 0;
                        @endphp
                        @foreach ($qualmatrix as $element)
                        <td>{{$element[0]['vos_nom']}}</td>
                        <td>{{$element[0]['vos_wei']}}</td>
                        @php
                            $totvosnom += $element[0]['vos_nom'];
                        @endphp
                        @endforeach
                        <td>{{$totvosnom/count($data)}}</td>
                        <td>{{round($totvosnom/count($data)*($evalwei->organisation_variety_of_services/100),1)}}</td>
                    </tr>
                    <tr>
                        <td>Awards</td>
                        <td>5</td>
                        <td>{{$evalwei->organisation_awards}}%</td>
                        @php
                            $totawanom = 0;
                        @endphp
                        @foreach ($qualmatrix as $element)
                        <td>{{$element[0]['awards_nom']}}</td>
                        <td>{{$element[0]['awards_wei']}}</td>
                        @php
                            $totawanom += $element[0]['awards_nom'];
                        @endphp
                        @endforeach
                        <td>{{$totawanom/count($data)}}</td>
                        <td>{{round($totawanom/count($data)*($evalwei->organisation_awards/100),1)}}</td>
                    </tr>
                    <tr>
                        <td>Accreditations</td>
                        <td>5</td>
                        <td>{{$evalwei->organisation_accreditations}}%</td>
                        @php
                            $totaccnom = 0;
                        @endphp
                        @foreach ($qualmatrix as $element)
                        <td>{{$element[0]['accre_nom']}}</td>
                        <td>{{$element[0]['accre_wei']}}</td>
                        @php
                            $totaccnom += $element[0]['accre_nom'];
                        @endphp
                        @endforeach
                        <td>{{$totaccnom/count($data)}}</td>
                        <td>{{round($totaccnom/count($data)*($evalwei->organisation_accreditations/100),1)}}</td>
                    </tr>
                    <tr>
                        <td>Relationship to Employer</td>
                        <td>5</td>
                        <td>{{$evalwei->orgranisation_relationship}}%</td>
                        @php
                            $totrelnom = 0;
                        @endphp
                        @foreach ($qualmatrix as $element)
                        <td>{{$element[0]['rel_nom']}}</td>
                        <td>{{$element[0]['rel_wei']}}</td>
                        @php
                            $totrelnom += $element[0]['rel_nom'];
                        @endphp
                        @endforeach
                        <td>{{$totrelnom/count($data)}}</td>
                        <td>{{round($totrelnom/count($data)*($evalwei->orgranisation_relationship/100),1)}}</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>25</td>
                        <td>
                            @php
                                $totwei = $evalwei->organisation_project_exp + $evalwei->organisation_variety_of_services + $evalwei->organisation_awards + $evalwei->organisation_accreditations + $evalwei->orgranisation_relationship;
                                echo $totwei."%";
                                $totave = ($totprojnom/count($data)) + ($totvosnom/count($data)) + ($totawanom/count($data)) + ($totaccnom/count($data)) + ($totrelnom/count($data));
                            @endphp
                        </td>
                        @foreach ($qualmatrix as $key)
                            <td>{{$key[0]['proj_ex_nom'] + $key[0]['vos_nom'] + $key[0]['awards_nom'] + $key[0]['accre_nom'] + $key[0]['rel_nom']}}</td>
                            <td>{{$key[0]['proj_ex_wei'] + $key[0]['vos_wei'] + $key[0]['awards_wei'] + $key[0]['accre_wei'] + $key[0]['rel_wei']}}</td>
                        @endforeach
                        <td>{{round($totave,1)}}</td>
                        <td>{{round($totave*$totwei/100,1)}}</td>
                    </tr>
                    <tr>
                        <td>Individuals</td>
                        <td colspan="{{(count($data)+2)*2}}">{{$evalwei->individual}}%</td>
                    </tr>
                    <tr>
                        <td>Project Experience</td>
                        <td>5</td>
                        <td>{{$evalwei->individual_project_exp}}%</td>
                        @foreach ($qualmatrix as $element)
                        <td>0</td>
                        <td>0</td>
                        @endforeach
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Years of relevant Experience</td>
                        <td>5</td>
                        <td>{{$evalwei->individual_years_exp}}%</td>
                        @foreach ($qualmatrix as $element)
                        <td>0</td>
                        <td>0</td>
                        @endforeach
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Awards</td>
                        <td>5</td>
                        <td>{{$evalwei->individual_awards}}%</td>
                        @foreach ($qualmatrix as $element)
                        <td>0</td>
                        <td>0</td>
                        @endforeach
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Accreditations</td>
                        <td>5</td>
                        <td>{{$evalwei->individual_accrediations}}%</td>
                        @foreach ($qualmatrix as $element)
                        <td>0</td>
                        <td>0</td>
                        @endforeach
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Relationship to Employer</td>
                        <td>5</td>
                        <td>{{$evalwei->individual_relationship}}%</td>
                        @foreach ($qualmatrix as $element)
                        <td>0</td>
                        <td>0</td>
                        @endforeach
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>25</td>
                        <td>{{$evalwei->individual_project_exp + $evalwei->individual_years_exp + $evalwei->individual_awards + $evalwei->individual_accrediations + $evalwei->individual_relationship}}%</td>
                        @foreach ($qualmatrix as $element)
                        <td>0</td>
                        <td>0</td>
                        @endforeach
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Grand Total</td>
                        <td colspan="2">50</td>
                        @foreach ($qualmatrix as $key)
                        <td>{{$key[0]['proj_ex_nom'] + $key[0]['vos_nom'] + $key[0]['awards_nom'] + $key[0]['accre_nom'] + $key[0]['rel_nom']}}</td>
                        <td>{{round(($key[0]['proj_ex_wei'] + $key[0]['vos_wei'] + $key[0]['awards_wei'] + $key[0]['accre_wei'] + $key[0]['rel_wei'])*$evalwei->organisation/100,1)}}</td>
                        @endforeach
                        <td>{{round($totave,1)}}</td>
                        <td>{{round(($totave*$totwei/100)*$evalwei->organisation/100,1)}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="page4" style="position: absolute;top: 0;">
            <table width="1000" height="400" style="font-weight: bold; ">
                <thead style="width: 800;">
                    <tr>
                        <td rowspan="2">RIBA Stage</td>
                        <th colspan="2" scope="colgroup">Constants</th>
                        @foreach($data as $key)
                            <th colspan="2" scope="colgroup">{{$key['name']}}</th>
                        @endforeach
                        <th colspan="2" scope="colgroup">Average</th>
                      </tr>
                      <tr>
                        <th scope="col">Max</th>
                        <th scope="col">Weighting</th>
                        @foreach($data as $key)
                            <th scope="col">Score</th>
                            <th scope="col">Wei</th>
                        @endforeach
                        <th scope="col">Score</th>
                        <th scope="col">Wei</th>
                      </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$qualitative['name']}}</td>
                        <td>{{$qualitative['max']}}</td>
                        <td>{{$qualitative['weighting']}}%</td>
                        @php
                            $qualitot = 0;
                            $qualitotave = 0;
                        @endphp
                        @foreach($quali as $k)
                            <td>{{$k}}</td>
                            <td>{{($k*$qualitative['weighting'])/100}}</td>
                            @php
                                $qualitot += $k;
                                $qualitotave += ($k*$qualitative['weighting'])/100;
                            @endphp
                        @endforeach
                        <td>@php echo ($qualitot/count($quali)); @endphp</td>
                        <td>@php echo ($qualitotave/count($quali)); @endphp</td>
                    </tr>
                    <tr>
                        <td>{{$quantitative['name']}}</td>
                        <td>{{$quantitative['max']}}</td>
                        <td>{{$quantitative['weighting']}}%</td>
                        @php
                            $quantitot = 0;
                            $quantitotave = 0;
                        @endphp
                        @foreach($quanti as $k)
                            <td>{{$k}}</td>
                            <td>{{($k*$quantitative['weighting'])/100}}</td>
                            @php
                                $quantitot += $k;
                                $quantitotave += ($k*$quantitative['weighting'])/100;
                            @endphp
                        @endforeach 
                        <td>@php echo ($quantitot/count($quali)); @endphp</td>
                        <td>@php echo ($quantitotave/count($quali)); @endphp</td>
                    </tr>
                    <tr>
                        <td>Risk</td>
                        <td>5</td>
                        <td>{{$risk['weighting']}}%</td>
                        @foreach($quanti as $k)
                            <td>0</td>
                            <td>0</td>
                        @endforeach 
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>15</td>
                        <td>{{$risk['weighting']+$quantitative['weighting']+$qualitative['weighting']}}%</td>
                        @foreach ($data as $element)
                            <td>{{$element['dataPoints'][0]['x'] + $element['dataPoints'][0]['y'] + $element['dataPoints'][0]['z'] }}</td>
                            <td>{{
                                ($element['dataPoints'][0]['x'] * $qualitative['weighting']/100) + ($element['dataPoints'][0]['y']*$quantitative['weighting']/100) + ($element['dataPoints'][0]['z']*$risk['weighting']/100)

                            }}</td>
                            @php
                                $totrank[] = $element['dataPoints'][0]['x'] + $element['dataPoints'][0]['y'] + $element['dataPoints'][0]['z'];
                            @endphp
                        @endforeach
                        <td></td>
                        <td></td>
                        @php
                           sort($totrank);
                        @endphp
                    </tr>
                    <tr>
                        <td>Rank</td>
                        <td colspan="2"></td>
                        @foreach ($data as $element)
                            @php
                                $keys = array_search($element['dataPoints'][0]['x'] + $element['dataPoints'][0]['y'] + $element['dataPoints'][0]['z'], $totrank);
                            @endphp
                            <td colspan="2">{{$keys+1}}</td>
                        @endforeach
                        <td colspan="2"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="previewImage">
        </div>
       
    </div>
      <script src="{{asset('js/reportjq.js')}}" ></script>
      <script src="{{asset('js/canvasjs.js')}}"></script>
      <script src="{{asset('js/html2canvas.js')}}" ></script>
    <script src="{{asset('dist/jspdf.min.js')}}"></script>
    <script>
        var project =[];
        var tender =[];
        var todays = "";
        var canvas1,dataURL1,canvasnom,dataURLnom,canvaswei,dataURLwei,canvas2,canvas3,canvas4,canvas5,dataURL4,dataURL5,canvas8,dataURL8,canvaspage6,canvaspage7,canvaspage8,canvas9,dataURL9,canvas10,dataURL10;

        window.onload = function () {
            project = <?php echo json_encode($proj_info); ?>;
            tender = <?php echo json_encode($tend_info); ?>;
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var arr = [];
            var car = { type: "stackedColumn",
                        name: "Individual",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($orgmatrixwei, JSON_NUMERIC_CHECK); ?>
                        };
            var car2 = {
                        type: "stackedColumn",
                        name: "Organisation",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($orgmatrixnom, JSON_NUMERIC_CHECK); ?>
                    };
            arr.push(car);
            arr.push(car2);

            var yyyy = today.getFullYear();
            if (dd < 10) {
              dd = '0' + dd;
            } 
            if (mm < 10) {
              mm = '0' + mm;
            } 
            todays = mm + '/' + dd + '/' + yyyy;

            // bubble chart
            var chart = new CanvasJS.Chart("chart1", {
                title:{
                    text: "Summary Evaluation"
                },
                legend:{
                    horizontalAlign: "center"
                },
                data: <?php echo json_encode($data);?>
            });
            chart.render();

            var chart2 = new CanvasJS.Chart("chart2", {
                    title: {
                        text: "overall nominal scores"
                    },
                    data: arr
                });
            var chart3 = new CanvasJS.Chart("chart3", {
                    title: {
                        text: "overall nominal scores"
                    },
                    data: [
                    {
                        type: "stackedColumn",
                        name: "Individual",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($orgmatrixwei, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Organisation",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($matrixallwei, JSON_NUMERIC_CHECK); ?>
                    }
                    ]
                });
            <?php   foreach ($nomscore as $key) {
                        $proj_ex[] = $key['proj_ex'];
                        $vos[] = $key['vos'];
                        $awards[] = $key['awards'];
                        $acc[] = $key['acc'];
                        $rel[] = $key['rel'];
                    }
                    foreach ($weiscores as $key) {
                        $proj_ex_w[] = $key['proj_ex'];
                        $vos_w[] = $key['vos'];
                        $awards_w[] = $key['awards'];
                        $acc_w[] = $key['acc'];
                        $rel_w[] = $key['rel'];
                    }foreach ($indnomscore as $key) {
                        $iproj_ex_w[] = $key['proj_ex'];
                        $ivos_w[] = $key['vos'];
                        $iawards_w[] = $key['awards'];
                        $iacc_w[] = $key['acc'];
                        $irel_w[] = $key['rel'];
                    }
                    $totalquant = 0;
                    foreach ($quantsum as $key) {
                        $totalquant += $key['y'];
                    }
                    foreach ($quantsum as $key) {
                        $trrry[] = array('y'=>($totalquant/count($quantsum)));
                    }
            ?>
            var chart4 = new CanvasJS.Chart("chart4", {
                    title: {
                        text: "ORGANISATION - NOMINAL SCORES"
                    },
                    data: [
                    {
                        type: "stackedColumn",
                        name: "Project Experience",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($proj_ex, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Variety of Service",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($vos, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Awards",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($awards, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Accreditations",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($acc, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Relationship to Employer",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($rel, JSON_NUMERIC_CHECK); ?>
                    }
                    ]
                });
            var chart5 = new CanvasJS.Chart("chart5", {
                    title: {
                        text: "ORGANISATION - WEIGHTED SCORES"
                    },
                    data: [
                    {
                        type: "stackedColumn",
                        name: "Project Experience",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($proj_ex_w, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Variety of Service",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($vos_w, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Awards",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($awards_w, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Accreditations",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($acc_w, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Relationship to Employer",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($rel_w, JSON_NUMERIC_CHECK); ?>
                    }
                    ]
                });

            var chart6 = new CanvasJS.Chart("chart6", {
                    title: {
                        text: "INDIVIDUALS - NOMINAL SCORES"
                    },
                    data: [
                    {
                        type: "stackedColumn",
                        name: "Project Experience",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($iproj_ex_w, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Variety of Service",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($ivos_w, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Awards",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($iawards_w, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Accreditations",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($iacc_w, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Relationship to Employer",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($irel_w, JSON_NUMERIC_CHECK); ?>
                    }
                    ]
                });
            var chart7 = new CanvasJS.Chart("chart7", {
                    title: {
                        text: "INDIVIDUALS - WEIGHTED SCORES"
                    },
                    data: [
                    {
                        type: "stackedColumn",
                        name: "Project Experience",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($iproj_ex_w, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Variety of Service",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($ivos_w, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Awards",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($iawards_w, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Accreditations",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($iacc_w, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Relationship to Employer",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($irel_w, JSON_NUMERIC_CHECK); ?>
                    }
                    ]
                });
            var chart8 = new CanvasJS.Chart("chart8", {
                title:{
                    text: "Summary"
                },
                data: [{
                    type: "column",
                    name: "Total",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($quantsum, JSON_NUMERIC_CHECK); ?>
                },
                {
                    type: "line",
                    name: "Average",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($trrry, JSON_NUMERIC_CHECK); ?>
                },
                {
                    type: "line",
                    name: "Budget",
                    showInLegend: true,
                    dataPoints: [{}]
                }]
            });
            var chart9 = new CanvasJS.Chart("chart9", {
                    title: {
                        text: "FEE PERCENTAGE"
                    },
                    data: [
                    {
                        type: "stackedColumn",
                        name: "0",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($_0_arr, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "1",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($_1_arr, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "2",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($_2_arr, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "3",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($_3_arr, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "4",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($_4_arr, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "5",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($_5_arr, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "6",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($_6_arr, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "7",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($_7_arr, JSON_NUMERIC_CHECK); ?>
                    }
                    ]
                });
            var chart10 = new CanvasJS.Chart("chart10", {
                    title: {
                        text: "RISK - NOMINAL SCORES"
                    },
                    data: [
                    {
                        type: "stackedColumn",
                        name: "Insurances",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($Insurances, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Bonds",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($Bonds, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Parties",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($Parties, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Liability",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($Liability, JSON_NUMERIC_CHECK); ?>
                    },{
                        type: "stackedColumn",
                        name: "Net",
                        showInLegend: true,
                        yValueFormatString: "#,##0.0",
                        dataPoints: <?php echo json_encode($Net, JSON_NUMERIC_CHECK); ?>
                    }
                    ]
                });
            chart10.render();
            chart9.render();
            chart8.render();

            chart2.render();
            chart3.render();
            chart4.render();
            chart5.render();
            chart6.render();
            chart7.render();
            
            canvas1 = $("#chart1 .canvasjs-chart-canvas").get(0);
            dataURL1 = canvas1.toDataURL();
            canvasnom = $("#chart2 .canvasjs-chart-canvas").get(0);
            dataURLnom = canvasnom.toDataURL();
            canvaswei = $("#chart3 .canvasjs-chart-canvas").get(0);
            dataURLwei = canvaswei.toDataURL();
            canvas4 = $("#chart4 .canvasjs-chart-canvas").get(0);
            dataURL4 = canvas4.toDataURL();
            canvas5 = $("#chart5 .canvasjs-chart-canvas").get(0);
            dataURL5 = canvas5.toDataURL();

            canvas6 = $("#chart6 .canvasjs-chart-canvas").get(0);
            dataURL6 = canvas6.toDataURL();
            canvas7 = $("#chart7 .canvasjs-chart-canvas").get(0);
            dataURL7 = canvas7.toDataURL();

            canvas8 = $("#chart8 .canvasjs-chart-canvas").get(0);
            dataURL8 = canvas8.toDataURL();

            canvas9 = $("#chart9 .canvasjs-chart-canvas").get(0);
            dataURL9 = canvas9.toDataURL();

            canvas10 = $("#chart10 .canvasjs-chart-canvas").get(0);
            dataURL10 = canvas10.toDataURL();
            takeScreenShot();
            takeScreenShot1();
            takeScreenShot2();
            takeScreenShot3();
            takeScreenShot4();

            
            pdf();

            setTimeout(winclose, 5000);

        };
        window.winclose = function(){
            window.close();
        }
        window.takeScreenShot = function() {
            var w = 1000;
            var h = 1000;
            var div = document.querySelector('#page4');
            var canvas = document.createElement('canvas');
            canvas.width = w*2;
            canvas.height = h*2;
            canvas.style.width = w + 'px';
            canvas.style.height = h + 'px';
            var context = canvas.getContext('2d');
            context.scale(2,2);
           html2canvas(div, {
            useCORS: true,
            allowTaint: true,
            letterRendering: true,
            onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                   canvas2 = canvas;
                }
            });
           // dataURL2 = canvas2.toDataURL("image/png");
        }

        window.takeScreenShot1 = function() {
            var w = 1000;
            var h = 1000;
            var div = document.querySelector('#page5');
            var canvas = document.createElement('canvas');
            canvas.width = w*2;
            canvas.height = h*2;
            canvas.style.width = w + 'px';
            canvas.style.height = h + 'px';
            var context = canvas.getContext('2d');
            context.scale(2,2);
           html2canvas(div, {
            useCORS: true,
            allowTaint: true,
            letterRendering: true,
            onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                   canvas3 = canvas;
                }
            });
           // dataURL2 = canvas2.toDataURL("image/png");
        }

        window.takeScreenShot2 = function() {
            var w = 1000;
            var h = 1000;
            var div = document.querySelector('#page6');
            var canvas = document.createElement('canvas');
            canvas.width = w*2;
            canvas.height = h*2;
            canvas.style.width = w + 'px';
            canvas.style.height = h + 'px';
            var context = canvas.getContext('2d');
            context.scale(2,2);
           html2canvas(div, {
            useCORS: true,
            allowTaint: true,
            letterRendering: true,
            onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                   canvaspage6 = canvas;
                }
            });
           // dataURL2 = canvas2.toDataURL("image/png");
        }

        window.takeScreenShot3 = function() {
            var w = 1000;
            var h = 1000;
            var div = document.querySelector('#page7');
            var canvas = document.createElement('canvas');
            canvas.width = w*2;
            canvas.height = h*2;
            canvas.style.width = w + 'px';
            canvas.style.height = h + 'px';
            var context = canvas.getContext('2d');
            context.scale(2,2);
           html2canvas(div, {
            useCORS: true,
            allowTaint: true,
            letterRendering: true,
            onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                   canvaspage7 = canvas;
                }
            });
           // dataURL2 = canvas2.toDataURL("image/png");
        }

        window.takeScreenShot4 = function() {
            var w = 1000;
            var h = 1000;
            var div = document.querySelector('#page8');
            var canvas = document.createElement('canvas');
            canvas.width = w*2;
            canvas.height = h*2;
            canvas.style.width = w + 'px';
            canvas.style.height = h + 'px';
            var context = canvas.getContext('2d');
            context.scale(2,2);
           html2canvas(div, {
            useCORS: true,
            allowTaint: true,
            letterRendering: true,
            onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                   canvaspage8 = canvas;
                }
            });
           // dataURL2 = canvas2.toDataURL("image/png");
        }

        function pdf(){
            var pdf = new jsPDF('landscape', 'pt', 'a4');
            specialElementHandlers = {
                        // element with id of "bypass" - jQuery style selector
                        '#bypassme': function (element, renderer) {
                            // true = "handled elsewhere, bypass text extraction"
                            return true
                        }
                    };
            source = $('#page2')[0];
            margins = {
                    top: 80,
                    bottom: 60,
                    left: 40,
                    width: 1007
                };
            pdf.addHTML($('#page1')[0], function () {
                pdf.setFontType("bold");
                pdf.setFontSize(45);
                // pdf.setTextColor(252, 228, 214);
                pdf.text(50, 200, project['project_title']);
                pdf.setFontSize(32);
                pdf.setTextColor();
                pdf.text(50, 237, 'Tender Proposal Evaluation Report');

                pdf.setFontSize(26);
                pdf.setTextColor();
                pdf.text(50, 320, 'for the procurement of');
                pdf.setFontSize(36);
                pdf.setTextColor();
                pdf.text(250, 360, tender['services']);
                pdf.setFontSize(24);
                pdf.setTextColor();
                pdf.text(50, 380, todays);

                pdf.addPage();
                pdf.fromHTML(
                source, // HTML string or DOM elem ref.
                margins.left, // x coord
                margins.top, { // y coord
                    'width': margins.width, // max width of content on PDF
                    'elementHandlers': specialElementHandlers
                });


                pdf.addPage();
                pdf.addHTML($('#page3')[0], function () {
                    pdf.setFontType("bold");
                    pdf.setFontSize(64);
                    pdf.setFillColor(254, 114, 53);
                    pdf.rect(0, 0, 1007, 300, "F");
                    pdf.text(40, 200, '1');
                    pdf.setFillColor(252, 228, 214);
                    pdf.rect(0, 300, 1007, 300, "F");
                    pdf.setFontSize(50);
                    pdf.text(40, 350, 'Executive Summary');
                    pdf.addPage();
                    pdf.addImage(dataURL1, 'JPEG', 20, 15);

                    pdf.addPage();
                    pdf.setFontSize(32);
                    pdf.text(20, 40, 'Bubble Chart');
                    pdf.addImage(canvas2.toDataURL(), 'JPEG', 20, 80);
                    
                    pdf.addPage();
                    pdf.setFontType("bold");
                    pdf.setFontSize(64);
                    pdf.setFillColor(254, 114, 53);
                    pdf.rect(0, 0, 1007, 300, "F");
                    pdf.text(40, 200, '2');
                    pdf.setFillColor(252, 228, 214);
                    pdf.rect(0, 300, 1007, 300, "F");
                    pdf.setFontSize(50);
                    pdf.text(40, 350, 'Qualitative Analysis');

                    pdf.addPage();
                    pdf.addImage(dataURLnom, 'JPEG', 20, 15);
                    pdf.addImage(dataURLwei, 'JPEG', 20, 300);

                    pdf.addPage();
                    pdf.setFontSize(32);
                    pdf.text(20, 40, 'Summary');
                    pdf.text(20, 75, 'Overall Scores');
                    pdf.addImage(canvas3.toDataURL(), 'JPEG', 20, 90);

                    pdf.addPage();
                    pdf.addImage(canvas4.toDataURL(), 'JPEG', 20, 15);
                    pdf.addImage(canvas5.toDataURL(), 'JPEG', 20, 300);

                    pdf.addPage();
                    pdf.addImage(canvas6.toDataURL(), 'JPEG', 20, 15);
                    pdf.addImage(canvas7.toDataURL(), 'JPEG', 20, 300);

                    pdf.addPage();
                    pdf.setFontType("bold");
                    pdf.setFontSize(64);
                    pdf.setFillColor(254, 114, 53);
                    pdf.rect(0, 0, 1007, 300, "F");
                    pdf.text(40, 200, '3');
                    pdf.setFillColor(252, 228, 214);
                    pdf.rect(0, 300, 1007, 300, "F");
                    pdf.setFontSize(50);
                    pdf.text(40, 350, 'Quantitative Analysis');

                    pdf.addPage();
                    pdf.addImage(canvas8.toDataURL(), 'JPEG', 20, 50);

                    pdf.addPage();
                    pdf.setFontSize(32);
                    pdf.text(20, 40, 'FEE PROPOSAL ANALYSIS');
                    pdf.setFontSize(20);
                    pdf.text(20, 70, 'FEE AMOUNT');
                    pdf.addImage(canvaspage6.toDataURL(), 'JPEG', 20, 80);

                    pdf.addPage();
                    pdf.addImage(dataURL9, 'JPEG', 20, 15);
                    pdf.setFontSize(20);
                    pdf.text(20, 320, 'SHARE OF CONSTRUCTION VALUE');
                    pdf.addImage(canvaspage7.toDataURL(), 'JPEG', 20, 330);

                    pdf.addPage();
                    pdf.setFontType("bold");
                    pdf.setFontSize(64);
                    pdf.setFillColor(254, 114, 53);
                    pdf.rect(0, 0, 1007, 300, "F");
                    pdf.text(40, 200, '4');
                    pdf.setFillColor(252, 228, 214);
                    pdf.rect(0, 300, 1007, 300, "F");
                    pdf.setFontSize(50);
                    pdf.text(40, 350, 'Risk Analysis');

                    pdf.addPage();
                    pdf.setFontSize(32);
                    pdf.text(20, 60, 'Summary')
                    pdf.addImage(dataURL10, 'JPEG', 20, 70);

                    pdf.addPage();
                    pdf.setFontSize(32);
                    pdf.text(20, 60, 'UNDERLYING DATA');
                    pdf.setFontSize(20);
                    pdf.text(20, 90, 'RISK FACTOR MATRIX');
                    pdf.addImage(canvaspage8.toDataURL(), 'JPEG', 20, 100);

                    pdf.addPage();
                    pdf.setFontType("bold");
                    pdf.setFontSize(64);
                    pdf.setFillColor(254, 114, 53);
                    pdf.rect(0, 0, 1007, 800, "F");
                    pdf.setFontSize(100);
                    pdf.text(300, 300, 'END');


                    pdf.save('Test.pdf');

                },1007,800);
            });
        }
    </script>
</body>
</html>
