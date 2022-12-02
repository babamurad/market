@extends('admin.layouts.layout')

@section('content')
    <!-- Section: Intro -->
    <section class="mt-md-4 pt-md-2 mb-5 pb-4">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

                <!-- Card -->
                <div class="card card-cascade cascading-admin-card">

                    <!-- Card Data -->
                    <div class="admin-up">
                        <i class="far fa-money-bill-alt primary-color mr-3 z-depth-2"></i>
                        <div class="data">
                            <p class="text-uppercase">sales</p>
                            <h4 class="font-weight-bold dark-grey-text">2000$</h4>
                        </div>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <div class="progress mb-3">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="card-text">Better than last week (25%)</p>
                    </div>

                </div>
                <!-- Card -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

                <!-- Card -->
                <div class="card card-cascade cascading-admin-card">

                    <!-- Card Data -->
                    <div class="admin-up">
                        <i class="fas fa-chart-line warning-color mr-3 z-depth-2"></i>
                        <div class="data">
                            <p class="text-uppercase">subscriptions</p>
                            <h4 class="font-weight-bold dark-grey-text">200</h4>
                        </div>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <div class="progress mb-3">
                            <div class="progress-bar red accent-2" role="progressbar" style="width: 25%" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="card-text">Worse than last week (25%)</p>
                    </div>

                </div>
                <!-- Card -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-xl-3 col-md-6 mb-md-0 mb-4">

                <!-- Card -->
                <div class="card card-cascade cascading-admin-card">

                    <!-- Card Data -->
                    <div class="admin-up">
                        <i class="fas fa-chart-pie light-blue lighten-1 mr-3 z-depth-2"></i>
                        <div class="data">
                            <p class="text-uppercase">traffic</p>
                            <h4 class="font-weight-bold dark-grey-text">20000</h4>
                        </div>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <div class="progress mb-3">
                            <div class="progress-bar red accent-2" role="progressbar" style="width: 75%" aria-valuenow="75"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="card-text">Worse than last week (75%)</p>
                    </div>

                </div>
                <!-- Card -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-xl-3 col-md-6 mb-0">

                <!-- Card -->
                <div class="card card-cascade cascading-admin-card">

                    <!-- Card Data -->
                    <div class="admin-up">
                        <i class="fas fa-chart-bar red accent-2 mr-3 z-depth-2"></i>
                        <div class="data">
                            <p class="text-uppercase">organic traffic</p>
                            <h4 class="font-weight-bold dark-grey-text">2000</h4>
                        </div>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade">
                        <div class="progress mb-3">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="card-text">Better than last week (25%)</p>
                    </div>

                </div>
                <!-- Card -->

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>
    <!-- Section: Intro -->

    <!-- Section: Main panel -->
    <section class="mb-5">

        <!-- Card -->
        <div class="card card-cascade narrower">

            <!-- Section: Chart -->
            <section>

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-xl-5 col-lg-12 mr-0 pb-2">

                        <!-- Card image -->
                        <div class="view view-cascade gradient-card-header light-blue lighten-1">
                            <h2 class="h2-responsive mb-0 font-weight-500">Sales</h2>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade pb-0">

                            <!-- Panel data -->
                            <div class="row py-3 pl-4">

                                <!-- First column -->
                                <div class="col-md-6">

                                    <!-- Date select -->
                                    <p class="lead"><span class="badge info-color p-2">Data range</span></p>
                                    <select class="mdb-select colorful-select dropdown-info md-form">
                                        <option value="" disabled selected>Choose time period</option>
                                        <option value="1">Today</option>
                                        <option value="2">Yesterday</option>
                                        <option value="3">Last 7 days</option>
                                        <option value="3">Last 30 days</option>
                                        <option value="3">Last week</option>
                                        <option value="3">Last month</option>
                                    </select>

                                    <!-- Date pickers -->
                                    <p class="lead pt-3 pb-4"><span class="badge info-color p-2">Custom date</span></p>
                                    <div class="md-form">
                                        <input placeholder="Selected date" type="text" id="from" class="form-control datepicker">
                                        <label for="date-picker-example">From</label>
                                    </div>
                                    <div class="md-form">
                                        <input placeholder="Selected date" type="text" id="to" class="form-control datepicker">
                                        <label for="date-picker-example">To</label>
                                    </div>

                                </div>
                                <!-- First column -->

                                <!-- Second column -->
                                <div class="col-md-6 text-center pl-xl-2 my-md-0 my-3">

                                    <!-- Summary -->
                                    <p>Total sales: <strong>2000$</strong>
                                        <button type="button" class="btn btn-info btn-sm p-2" data-toggle="tooltip" data-placement="top"
                                                title="Total sales in the given period"><i class="fas fa-question"></i></button>
                                    </p>
                                    <p>Average sales: <strong>100$</strong>
                                        <button type="button" class="btn btn-info btn-sm p-2 mr-0" data-toggle="tooltip"
                                                data-placement="top" title="Average daily sales in the given period"><i
                                                class="fas fa-question"></i></button>
                                    </p>

                                    <!-- Change chart -->
                                    <span class="min-chart my-4" id="chart-sales" data-percent="76"><span
                                            class="percent"></span></span>
                                    <h5>
                                        <span class="badge red accent-2 p-2">Change <i class="fas fa-arrow-circle-up ml-1"></i></span>
                                        <button type="button" class="btn btn-info btn-sm p-2" data-toggle="tooltip" data-placement="top"
                                                title="Percentage change compared to the same period in the past"><i
                                                class="fas fa-question"></i>
                                        </button>
                                    </h5>

                                </div>
                                <!-- Second column -->

                            </div>
                            <!-- Panel data -->

                        </div>
                        <!-- Card content -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-xl-7 col-lg-12 mb-4 pb-2">

                        <!-- Chart -->
                        <div class="view view-cascade gradient-card-header blue-gradient">

                            <canvas id="lineChart" height="175"></canvas>

                        </div>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: Chart -->

            <!-- Section: Table -->
            <section>

                <!-- Top Table UI -->
                <div class="table-ui p-2 mb-3 mx-4 mb-5">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-xl-3 col-md-6">

                            <!-- Name -->
                            <select class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3 md-dropdown">
                                <option value="" disabled selected>Bulk actions</option>
                                <option value="1">Delate</option>
                                <option value="2">Export</option>
                                <option value="3">Change segment</option>
                            </select>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-xl-3 col-md-6">

                            <!-- Blue select -->
                            <select class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3 md-dropdown">
                                <option value="" disabled selected>Show only</option>
                                <option value="1">All <span> (2000)</span></option>
                                <option value="2">Never opened <span> (200)</span></option>
                                <option value="3">Opened but unanswered <span> (1800)</span></option>
                                <option value="4">Answered <span> (200)</span></option>
                                <option value="5">Unsunscribed <span> (50)</span></option>
                            </select>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-xl-3 col-md-6">

                            <!-- Blue select -->
                            <select class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3 md-dropdown">
                                <option value="" disabled selected>Filter segments</option>
                                <option value="1">Contacts in no segments <span> (100)</span></option>
                                <option value="1">Segment 1 <span> (2000)</span></option>
                                <option value="2">Segment 2 <span> (1000)</span></option>
                                <option value="3">Segment 3 <span> (4000)</span></option>
                            </select>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-xl-3 col-md-6">

                            <form class="form-inline mt-2 ml-2">
                                <div class="form-group md-form mt-2">
                                    <input class="form-control w-100" type="text" placeholder="Search">
                                </div>
                                <button class="btn btn-sm btn-primary ml-2 mr-0 mb-md-0 mb-4 px-2"><i
                                        class="fas fa-search"></i></button>
                            </form>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>

            </section>
            <!--Section: Table-->

        </div>
        <!-- Card -->

    </section>
    <!-- Section: Main panel -->

    <!-- Section: Classic admin cards -->
    <section class="pb-3">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

                <!-- Card Primary -->
                <div class="card classic-admin-card primary-color">
                    <div class="card-body">
                        <div class="pull-right">
                            <i class="far fa-money-bill-alt"></i>
                        </div>
                        <p class="white-text">SALES</p>
                        <h4 class="check">2000$</h4>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg grey darken-3" role="progressbar" style="width: 25%" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-body">
                        <p>Better than last week (25%)</p>
                    </div>
                </div>
                <!-- Card Primary -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

                <!-- Card Yellow -->
                <div class="card classic-admin-card warning-color">
                    <div class="card-body">
                        <div class="pull-right">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <p>SUBSCRIPTIONS</p>
                        <h4 class="check">200</h4>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg grey darken-3" role="progressbar" style="width: 25%" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-body">
                        <p>Worse than last week (25%)</p>
                    </div>
                </div>
                <!-- Card Yellow -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-xl-3 col-md-6 mb-md-0 mb-4">

                <!-- Card Blue -->
                <div class="card classic-admin-card light-blue lighten-1">
                    <div class="card-body">
                        <div class="pull-right">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <p>TRAFFIC</p>
                        <h4 class="check">20000</h4>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg grey darken-4" role="progressbar" style="width: 75%" aria-valuenow="75"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-body">
                        <p>Better than last week (75%)</p>
                    </div>
                </div>
                <!-- Card Blue -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-xl-3 col-md-6 mb-0">

                <!-- Card Red -->
                <div class="card classic-admin-card red accent-2">
                    <div class="card-body">
                        <div class="pull-right">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <p>ORGANIC TRAFFIC</p>
                        <h4 class="check">2000</h4>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg grey darken-4" role="progressbar" style="width: 25%" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="card-body">
                        <p>Better than last week (25%)</p>
                    </div>
                </div>
                <!-- Card Red -->

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>
    <!-- Section: Classic admin cards -->
@endsection
