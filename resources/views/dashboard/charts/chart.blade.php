@extends('dashboard.layout.masteradminlayout', [
   'page_title'=>'Chart | PET HOUSE Admin Page',
    'current_menu'=>'chart_manager',
    'current_sub_menu'=>'chart'
])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">today</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Datetime Picker</h4>
                        <div class="form-group">
                            <label class="label-control">Start Picker</label>
                            <input type="datetime-local" class="form-control start-date" value="{{Carbon\Carbon::now()}}"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">today</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Datetime Picker</h4>
                        <div class="form-group">
                            <label class="label-control">End Date Picker</label>
                            <input type="datetime-local" class="form-control end-date" value="{{Carbon\Carbon::now()}}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center><button type="submit" class="btn btn-rose btn-fill"><i class="material-icons">send</i> Send<div class="ripple-container"></div></button></center>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="blue">
                <i class="material-icons">timeline</i>
            </div>
            <div class="card-content">
                <h4 class="card-title"> Line Chart </h4>
            </div>
            <div id="linechart_material" class="col-md-12"></div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['line']});
        google.charts.setOnLoadCallback(function () {
            $.ajax({
                url: '/api-get-chart-data',
                method: 'GET',
                success: function (resp) {
                    drawChart(resp);
                },
                error: function () {
                    swal('Have Error', 'Do not call API', 'error');
                }
            });
        });

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

        $('.start-date').datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove',
                inline: true
            }
        });

        $('.end-date').datetimepicker({
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove',
                inline: true
            }
        });
    </script>
@endsection