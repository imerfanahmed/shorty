<x-master>
    <div class="py-12">
        <div class="container">
            <div class="d-flex justify-content-between">
                <a href="{{ url()->previous() }}" class="btn btn-close-white m-3">
                    <i class="ti ti-arrow-narrow-left"></i>
                    Back
                </a>

                <a href="{{config('app.url').$link->short_url}}" class="btn btn-primary m-3">

                    {{config('app.url').$link->short_url}}
                    <i class="ti ti-arrow-narrow-right"></i>
                </a>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <h3 class="card-title h1">Total Clicks: {{$total_clicks}}</h3>
                                <div class="ms-auto">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item active" href="#">Last 7 days</a>
                                            <a class="dropdown-item" href="#">Last 30 days</a>
                                            <a class="dropdown-item" href="#">Last 3 months</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="chart-tasks-overview"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 my-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <h3 class="card-title h1">Devices</h3>
                            </div>
                            <div id="chart-demo-pie"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 my-3">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title h1">Locations</h3>
                            <table class="table table-sm table-borderless">
                                <thead>
                                <tr>
                                    <th>Countries</th>
                                    <th class="text-end">Visitors</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($countries as $country)
                                    <tr>
                                        <td>
                                            <div class="progressbg">
                                                <div class="progress progressbg-progress">
                                                    <div class="progress-bar bg-primary-lt"
                                                         style="width: {{number_format($country->percentage,2)}}%"
                                                         role="progressbar" aria-valuenow="82.54" aria-valuemin="0"
                                                         aria-valuemax="100" aria-label="82.54% Complete">
                                                        <span class="visually-hidden">{{number_format($country->percentage,2)}}% Complete</span>
                                                    </div>
                                                </div>
                                                <div class="progressbg-text">{{$country->country}}</div>
                                            </div>
                                        </td>
                                        <td class="w-1 fw-bold text-end">{{$country->clicks}}</td>
                                    </tr>

                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // @formatter:off
            document.addEventListener("DOMContentLoaded", function () {
                window.ApexCharts && (new ApexCharts(document.getElementById('chart-tasks-overview'), {
                    chart: {
                        type: "bar",
                        fontFamily: 'inherit',
                        height: 320,
                        parentHeightOffset: 0,
                        toolbar: {
                            show: false,
                        },
                        animations: {
                            enabled: false
                        },
                    },
                    plotOptions: {
                        bar: {
                            columnWidth: '50%',
                        }
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    fill: {
                        opacity: 1,
                    },
                    series: [{
                        name: "Clicks",
                        data: {!! json_encode($last_30_days) !!}
                    }],
                    tooltip: {
                        theme: 'dark'
                    },
                    grid: {
                        padding: {
                            top: -20,
                            right: 0,
                            left: -4,
                            bottom: -4
                        },
                        strokeDashArray: 4,
                    },
                    xaxis: {
                        labels: {
                            padding: 0,
                        },
                        tooltip: {
                            enabled: false
                        },
                        axisBorder: {
                            show: false,
                        },
                        //last 24 hours
                        categories:{!! json_encode($last_30_days_column) !!}
                    },
                    yaxis: {
                        labels: {
                            padding: 4
                        },
                    },
                    colors: [tabler.getColor("primary")],
                    legend: {
                        show: false,
                    },
                })).render();
            });
            // @formatter:on
        </script>


        <script>
            // @formatter:off
            document.addEventListener("DOMContentLoaded", function () {
                window.ApexCharts && (new ApexCharts(document.getElementById('chart-demo-pie'), {
                    chart: {
                        type: "donut",
                        fontFamily: 'inherit',
                        height: 500,
                        sparkline: {
                            enabled: true
                        },
                        animations: {
                            enabled: false
                        },
                    },
                    fill: {
                        opacity: 1,
                    },
                    series: {!! json_encode($devices) !!},
                    labels: ['Desktop', 'Tablet', 'Mobile', 'Other'],
                    grid: {
                        strokeDashArray: 4,
                    },
                    colors: [tabler.getColor("primary"), tabler.getColor("primary", 0.8), tabler.getColor("primary", 0.6), tabler.getColor("gray-300")],
                    legend: {
                        show: true,
                        position: 'bottom',
                        offsetY: 12,
                        markers: {
                            width: 10,
                            height: 10,
                            radius: 100,
                        },
                        itemMargin: {
                            horizontal: 8,
                            vertical: 8
                        },
                    },
                    tooltip: {
                        fillSeriesColor: false
                    },
                })).render();
            });
            // @formatter:on
        </script>
    @endpush
</x-master>
