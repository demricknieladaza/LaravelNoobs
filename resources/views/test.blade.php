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
</style>

</head>
<body>
    <button onclick="cssss()">Generate PDF</button>
    <div id="html-2-pdfwrapper" style='position: absolute; left: 20px; top: 50px; bottom: 0; overflow: auto; width: 1024px'>
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
                <div id="chart2" style="height: 200px;width: 500px">
                    
                </div>
            </div>
        </div>
        <div id="page4" style="position: absolute;top: 0;">
            <table width="1000" height="400">
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
      <script
src="https://code.jquery.com/jquery-1.12.4.js"
integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
crossorigin="anonymous"></script>
      <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js" ></script>
    <script src="{{asset('dist/jspdf.min.js')}}"></script>
    <script>
        var project =[];
        var tender =[];
        var todays = "";
        var canvas1,dataURL1,canvas2,dataURL2 ;

        window.onload = function () {
            project = <?php echo json_encode($proj_info); ?>;
            tender = <?php echo json_encode($tend_info); ?>;
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!

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
            
            canvas1 = $("#chart1 .canvasjs-chart-canvas").get(0);
            dataURL1 = canvas1.toDataURL();
            takeScreenShot();

            
            pdf();

        };

        window.takeScreenShot = function() {
           html2canvas($('#page4'), {
            onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                   canvas2 = canvas;
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

                    pdf.save('Test.pdf');

                },1007,800);
            });
        }
    </script>
</body>
</html>
