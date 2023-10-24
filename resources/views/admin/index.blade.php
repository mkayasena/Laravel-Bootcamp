@extends('admin.app')
@section('admin')

<div class="content">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-lg-5 col-md-12">
            <div class="card widget h-100">
                <div class="card-header d-flex">
                    <h6 class="card-title">
                        Channels
                        <a href="#" class="bi bi-question-circle ms-1 small" data-bs-toggle="tooltip"
                            title="Channels where your products are sold"></a>
                    </h6>
                    <div class="d-flex gap-3 align-items-center ms-auto">
                        <div class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="btn btn-sm" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">View Detail</a>
                                <a href="#" class="dropdown-item">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="sales-channels"></div>
                    <div class="row text-center mb-5 mt-4">
                        <div class="col-4">
                            <div class="display-7">48%</div>
                            <div class="text-success my-2 small">
                                <i class="bi bi-arrow-up me-1 small"></i>30.50%
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-circle-fill text-orange me-2 small"></i>
                                <span class="text-muted">Social Media</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="display-7">30%</div>
                            <div class="text-danger my-2 small">
                                <i class="bi bi-arrow-down me-1 small"></i>15.20%
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-circle-fill text-cyan me-2 small"></i>
                                <span class="text-muted">Google</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="display-7">22%</div>
                            <div class="text-success my-2 small">
                                <i class="bi bi-arrow-up me-1 small"></i>1.80%
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <i class="bi bi-circle-fill text-indigo me-2 small"></i>
                                <span class="text-muted">Email</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-12">
            <div class="card widget">
                <div class="card-header">
                    <h5 class="card-title">Activity Overview</h5>
                </div>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-truck text-secondary"></i>
                                </div>
                                <h5 class="my-3">Delivered</h5>
                                <div class="text-muted">15 New Packages</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-receipt text-warning"></i>
                                </div>
                                <h5 class="my-3">Ordered</h5>
                                <div class="text-muted">72 New Items</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 67%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-bar-chart text-info"></i>
                                </div>
                                <h5 class="my-3">Reported</h5>
                                <div class="text-muted">50 Support New Cases</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-cursor text-success"></i>
                                </div>
                                <h5 class="my-3">Arrived</h5>
                                <div class="text-muted">34 Upgraded Boxed</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 55%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection