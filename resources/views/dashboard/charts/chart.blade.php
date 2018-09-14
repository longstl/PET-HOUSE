@extends('dashboard.layout.masteradminlayout', [
   'page_title'=>'Chart | PET HOUSE Admin Page',
    'current_menu'=>'chart_manager',
    'current_sub_menu'=>'chart'
])
@section('content')
    <br>
    <div id="reportrange"
         style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
        <i class="fa fa-calendar"></i>&nbsp;
        <span></span> <i class="fa fa-caret-down"></i>
    </div>
    <br>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="blue">
                <i class="material-icons">timeline</i>
            </div>
            <div class="card-content">
                <h4 class="card-title"> Revenue </h4>
            </div>
            <div id="linechart_material" class="col-md-12"></div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="blue">
                <i class="material-icons">timeline</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">Hot Product</h4>
            </div>
            <center><div id="piechart_material" style="width: 500px; height: 500px;"></div></center>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    {{--<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>--}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>

    {{--JS Pie Chart--}}
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        $(function () {
            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                loadChart(start, end);
            }

            $('#reportrange').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment()],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);

            google.charts.load('current', {'packages': ['line']});
            google.charts.setOnLoadCallback(function () {
                loadChart(start, end);
            });

            function loadChart(start, end) {
                // alert('/api-get-chart-data?from='+start.format('YYYY-MM-DD')+'&to='+end.format('YYYY-MM-DD'));
                $.ajax({
                    url: '/api-get-chart-data?from=' + start.format('YYYY-MM-DD') + '&to=' + end.format('YYYY-MM-DD'),
                    method: 'GET',
                    success: function (resp) {
                        if (resp.length == 0) {
                            swal('Do not get Data', 'Please try again later.', 'warning');
                            return;
                        }
                        drawChart(resp);
                    },
                    error: function () {
                        swal('Have Error', 'Do not call API', 'error');
                    }
                });
            }

            function drawChart(chart_data) {
                var data = new google.visualization.DataTable();
                data.addColumn('date', 'Date');
                data.addColumn('number', 'Revenue');
                for (var i = 0; i < chart_data.length; i++) {
                    data.addRow([new Date(chart_data[i].day), Number(chart_data[i].revenue)]);
                }
                var options = {
                    chart: {
                        title: 'Revenue chart over time',
                        subtitle: '(USD)'
                    },
                    height: 500,
                    hAxis: {
                        format: 'MM/dd/yyyy'
                    }
                };
                var chart = new google.charts.Line(document.getElementById('linechart_material'));
                chart.draw(data, google.charts.Line.convertOptions(options));
            }
        });
    </script>

    {{--JS Pie Chart--}}
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart1);

        function drawChart1() {
            $.ajax({
                url: '/api-get-pie-chart-data',
                method: 'GET',
                success: function (resp) {
                    var data = new google.visualization.DataTable()
                    data.addColumn('string', 'Product Name');
                    data.addColumn('number', 'Quantity');
                    for (var i = 0; i < resp.length; i++) {
                        data.addRow([resp[i].productTitle + '', Number(resp[i].number)]);
                    }
                    var options = {
                        title: 'Hot Product'
                    };
                    //
                    var chart = new google.visualization.PieChart(document.getElementById('piechart_material'));
                    chart.draw(data, options);
                },
                error: function () {
                    swal('Have Error', 'Do not call API', 'error');
                }
            });
        }
    </script>
@endsection