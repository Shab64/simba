@include('admin.header')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- Container Fluid Reservation section content-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-bottom-dashed">
                            <div class="row g-4 align-items-center">
                                <div class="col-sm">
                                    <div>
                                        <h5 class="card-title mb-0">Commitment Schedule</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card Header end -->
                        <div class="card-body border-bottom-dashed border-bottom">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-10">
                                        <div class="search-box">
                                            <input type="text" class="form-control search"
                                                placeholder="Search for car">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-2">

                                        <div>
                                            <button type="button" class="btn btn-primary w-100" onclick="SearchData();">
                                                <i class="ri-equalizer-fill me-2 align-bottom"></i>Filters</button>
                                        </div>

                                        <!--end col-->

                                    </div>
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                        <!-- Search Form end -->
                        <div class="card-body">
                            <div>
                                <div class="table-responsive table-card mb-1">
                                    <table class="table align-middle" id="myDatatable">
                                        <thead class="table-light text-muted">
                                            <tr>
                                                <th scope="col" style="width: 50px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkAll"
                                                            value="option">
                                                    </div>
                                                </th>

                                                <th class="sort" data-sort="customer_name">Lender Finance</th>
                                                <th class="sort">No Of Cars</th>
                                                <th class="sort">Repayment</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                        @if(!empty($lender_finance))
                                            <?php $total = 0; ?>
                                            @foreach($lender_finance as $finance)
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="checkAll"
                                                                   value="option1">
                                                        </div>
                                                    </th>
                                                    <td>{{$finance->leader_finance}}</td>
                                                    <td>{{$finance->total_no_of_cars}}</td>
                                                    <td>${{$finance->total_repayment}}</td>
                                                    <?php $total +=$finance->total_repayment ?>
                                                </tr>
                                            @endforeach
                                        @endif
                                            <tr>
                                                <td colspan="2"></td>
                                                <td > <b>Total</b> </td>
                                                <td>${{$total}}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <div class="pagination-wrap hstack gap-2" style="display: flex;">
                                        <a class="page-item pagination-prev disabled" href="#">
                                            Previous
                                        </a>
                                        <ul class="pagination listjs-pagination mb-0">
                                            <li class="active"><a class="page" href="#" data-i="1" data-page="8">1</a>
                                            </li>

                                        </ul>
                                        <a class="page-item pagination-next" href="#">
                                            Next
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@include('admin.footer')
