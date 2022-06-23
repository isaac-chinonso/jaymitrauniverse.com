<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Jay | Mitra | Academic | Writer | Activist ">
    <meta name="description" content="JAYANTA MITRA">
    <meta name="author" content="Dcode Arena">

    <title>@yield('title')</title>

    <link href="../app/css/modern.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="../app/js/settings.js"></script>
</head>

<body>
    <div class="splash active">
        <div class="splash-icon"></div>
    </div>

    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <a class="sidebar-brand" href="#">
                Jaymitra Universe
            </a>
            <div class="sidebar-content">
                <div class="sidebar-user">
                    <img src="../app/img/avatars/avatar.jpg" class="img-fluid rounded-circle mb-2" alt="Linda Miller" />
                    <div class="font-weight-bold">Jay Mitra</div>
                </div>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Main
                    </li>
                    <li class="sidebar-item {{ request()->is('admin/dashboard*') ? 'active' : '' }}">
                        <a href="{{ url('/admin/dashboard') }}" class="sidebar-link">
                            <i class="align-middle mr-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboards</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ request()->is('admin/home-page*') ? 'active' : '' }} {{ request()->is('admin/about-page*') ? 'active' : '' }} {{ request()->is('admin/journal-page*') ? 'active' : '' }}">
                        <a href="#pages" data-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle mr-2 fas fa-fw fa-file"></i> <span class="align-middle">Pages</span>
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/admin/home-page') }}">Home</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/admin/about-page') }}">About </a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/admin/position-page') }}">Positions</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/admin/publication-page') }}">Publications</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/admin/impact-activities-page') }}">Impact Activities</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/admin/journal-page') }}">Journal </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="main">
            <nav class="navbar navbar-expand navbar-theme">
                <a class="sidebar-toggle d-flex mr-2">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown ml-lg-2">
                            <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-toggle="dropdown">
                                <i class="align-middle fas fa-cog"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ url('/logout') }}"><i class="align-middle mr-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
                            </div>
                        </li>
                    </ul>
                </div>

            </nav>

            @yield('content')


        </div>

    </div>

    <svg width="0" height="0" style="position:absolute">
        <defs>
            <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
                <path d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
                </path>
            </symbol>
        </defs>
    </svg>
    <script src="../app/js/app.js"></script>

    <script>
        $(function() {
            var mapData = {
                "US": 298,
                "SA": 200,
                "DE": 220,
                "FR": 540,
                "CN": 120,
                "AU": 760,
                "BR": 550,
                "IN": 200,
                "GB": 120,
            };
            $('#world_map').vectorMap({
                map: 'world_mill',
                backgroundColor: "transparent",
                zoomOnScroll: false,
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 0.9,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },
                series: {
                    regions: [{
                        values: mapData,
                        scale: [window.theme.primary],
                        normalizeFunction: 'polynomial'
                    }]
                },
            });
            setTimeout(function() {
                $(window).trigger('resize');
            }, 350)
        })
    </script>
    <script>
        $(function() {
            // Pie chart
            new Chart(document.getElementById("chartjs-dashboard-pie"), {
                type: 'pie',
                data: {
                    labels: ["Chrome", "Firefox", "IE", "Other"],
                    datasets: [{
                        data: [4401, 4003, 1589],
                        backgroundColor: [
                            window.theme.primary,
                            window.theme.warning,
                            window.theme.danger,
                            "#E8EAED"
                        ],
                        borderColor: "transparent"
                    }]
                },
                options: {
                    responsive: !window.MSInputMethodContext,
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    cutoutPercentage: 75
                }
            });
        });
    </script>
    <script>
        $(function() {
            // Radar chart
            new Chart(document.getElementById("chartjs-dashboard-radar"), {
                type: "radar",
                data: {
                    labels: ["Technology", "Sports", "Media", "Gaming", "Arts"],
                    datasets: [{
                        label: "Interests",
                        backgroundColor: "rgba(0, 123, 255, 0.2)",
                        borderColor: "#2979ff",
                        pointBackgroundColor: "#2979ff",
                        pointBorderColor: "#fff",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "#2979ff",
                        data: [70, 53, 82, 60, 33]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    }
                }
            });
        });
    </script>
    <script>
        $(function() {
            // Bar chart
            new Chart(document.getElementById("chartjs-dashboard-bar-alt"), {
                type: "bar",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Last year",
                        backgroundColor: window.theme.primary,
                        borderColor: window.theme.primary,
                        hoverBackgroundColor: window.theme.primary,
                        hoverBorderColor: window.theme.primary,
                        data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                        barPercentage: .75,
                        categoryPercentage: .5
                    }, {
                        label: "This year",
                        backgroundColor: "#E8EAED",
                        borderColor: "#E8EAED",
                        hoverBackgroundColor: "#E8EAED",
                        hoverBorderColor: "#E8EAED",
                        data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68],
                        barPercentage: .75,
                        categoryPercentage: .5
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            gridLines: {
                                display: false
                            },
                            stacked: false,
                            ticks: {
                                stepSize: 20
                            }
                        }],
                        xAxes: [{
                            stacked: false,
                            gridLines: {
                                color: "transparent"
                            }
                        }]
                    }
                }
            });
        });
    </script>
    <script>
        $(function() {
            $("#datatables-dashboard-traffic").DataTable({
                pageLength: 7,
                lengthChange: false,
                bFilter: false,
                autoWidth: false,
                order: [
                    [1, "desc"]
                ]
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300,
                minHeight: null,
                maxHeight: null,
                focus: true
            });
        });
    </script>

</body>

</html>