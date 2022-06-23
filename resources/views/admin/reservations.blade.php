@include('admin.header')

<!-- Asad Code Start -->
<style>
    /* .btn-group .add-reservation::before{
    position:absolute;
    background-color:#ed981f;
    background-color:red;
    content:"";
    width:0%;
    height:100%;
    top:0;
    left:0;
    transition:0.1s all linear;
} */
    table.dataTable thead .sorting {
    text-align: initial;
    background-color: #d8deff;
    font-size:11px;
    color: black;
}
table.dataTable tbody th, table.dataTable tbody td {
    font-size: 11px;
    padding: 8px 10px;
}
.customer-name h6{
    font-size:11px;
    font-weight: 400;
    color: #545454;
}
table.dataTable tbody th, table.dataTable tbody td {
    border-right: 1px solid #cccccc;
    font-size: 10px;
    padding: 8px 10px;
}
.btn-group .add-reservation{
    background-color:#ec971f;
    /* color:#283891; */
    color:white;
    font-weight:500;
    border:none;
    position:relative;
}
.btn-group .add-reservation{
    position:relative;
    transition:0.3s all ease-in;

}

.btn-group .add-reservation:hover{
    background-color:#f0ad4e;
}
.btn-group>.btn-group:not(:last-child)>.btn, .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
    border: none;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.btn-group .print-icon{
    background-color:#d9d9d9;
    border:1px solid black;
    color:black;
    font-size:20px;
    display:flex;
    border:none!important;
    transition:0.3s all ease-in;
}
.btn-group .btn.print-icon:hover{
    background-color:#b7b7b7!important;
    border:none!important;
}
.btn-group .quotation{

}
.btn-group .quotation:hover{
    background-color:#3547b1;
}
.dataTables_wrapper .dataTables_length {
    position: absolute;
    bottom: -3px;
}
#myDatatable1_info {
    position: relative;
    left: 170px;
}
#myDatatable1_filter{
    position:absolute;
    top:0;
    left:0;
    /* display:none; */
}
#myDatatable1_filter label:first-child{
    display:none;
}
#myDatatable1_filter label input{
    display:block!important
}
    /* display:none; */

#myDatatable1_filter label:after {
  content: 'Search';
  position: absolute;
  left: 65px;
    top: 12px;
    color: #4e4e4e;
}

table.dataTable.no-footer {
    padding-top: 30px;
    border-bottom: 1px solid #fff;
}
.dataTables_wrapper .dataTables_filter input{
    background-color: #e5e9ff!important;
    border-radius: 3px!important;
    border: 2px solid #9999!important;
    padding: 10px;
    color: #666666!important;
}
.dataTables_wrapper .dataTables_filter input:focus {
    box-shadow:none;
    outline:none;
}
.table-card td:first-child, .table-card th:first-child {
    width: 0px!important;
    padding-left: 16px;
}
.top-filter{
    padding:20px 0px 10px 0px;
}
.daterangepicker {
    background-color:#f2f2f2;
}
.same-btn {
    width: 100%;
    background-color: #d9d9d9;
    color: black;
}
.same-btn:hover{
    background-color:#b7b7b7!important;
    color:white;
    border:none!important
}
.table-responsive {
    padding: 0px 15px;
}
.table th {
    font-size: 10px;
    font-weight: 600;
}
.table>:not(caption)>*>* {
       font-size: 10px;
       border-left:1px solid silver;
       border-top:1px solid silver;
}
#myTable{
    margin-top:20px;
}
#myDatatable_filter{
    display:none;
}
/* .drp-calendar.left{
    box-shadow: -10px -13px 22px -8px rgba(0,0,0,0.75);
-webkit-box-shadow: -10px -13px 22px -8px rgba(0,0,0,0.75);
-moz-box-shadow: -10px -13px 22px -8px rgba(0,0,0,0.75);
}
.drp-calendar.right{
    box-shadow: 10px 13px 22px -8px rgba(0,0,0,0.75);
-webkit-box-shadow: 10px 13px 22px -8px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 13px 22px -8px rgba(0,0,0,0.75);
} */
</style>
<!-- Asad Code End -->

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
                                        <h5 class="card-title mb-0">Rental Reservations</h5>
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                <div class="btn-group">
                                        <a href="javascript:window.print()" class="btn btn-primary print-icon"><i class="las la-print"></i></a>
                                        <a href="{{url('admin/quotation/view/view-all-quotation')}}" class="btn btn-primary quotation">Quotation</a>
                                        <a href="{{url('admin/add_reservation')}}" class="btn btn-primary add-reservation">Add Reservation</a>
                                    </div>

<!--                                    <div class="btn-group">-->
<!--                                        <button type="button" class="btn btn-primary add-btn dropdown-toggle"-->
<!--                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Add-->
<!--                                            Reservation-->
<!--                                        </button>-->
<!--                                        <div class="dropdown-menu">-->
<!--                                            <a class="dropdown-item" href="create_Walkin_Reservation.blade.backup"><i-->
<!--                                                    class="ri-add-line align-bottom me-1"></i>Walk In Reservation</a>-->
<!--                                            <a class="dropdown-item" href="createOnlineReservation.php"><i-->
<!--                                                    class="ri-add-line align-bottom me-1"></i>Online-->
<!--                                                Reservation</a>-->
<!--                                        </div>-->
<!---->
<!--                                    </div>-->
                                </div>


                                <!-- Asad Code Start -->
                                <div class="top-filter">
                                    <form action="#" id="filter-data">
                                    <div class="row p-0 m-0">

                                        <div class="col-md-2 ">
                                            <select class="form-control" data-trigger="" name="branch"
                                                    id="status-field">
                                                <option value="">Branch</option>
                                                <option value="Sydney">Sydney</option>
                                                <option value="Adelaide">Adelaide</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="form-control" data-trigger="" name="status" >
                                                <option value="">Status</option>
                                                <option value="rental">Rental</option>
                                                <option value="long_rental">Long Rental</option>
                                                <option value="open">Open</option>
                                                <option value="close">Closed</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="daterange" value="01/01/2022 - 01/15/2022"
                                                   class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <select class="form-control" name="payment_status">
                                                <option value="">Payment Status</option>
                                                <option value="paid">Paid</option>
                                                <option value="pending">Pending</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="row p-0 m-0">
                                                <div class="col-md-6 p-0 m-0">
                                                    <span class="reset-btn">
                                                    <a href="javascript:;" class="btn btn-primary same-btn" id="resetForm">Reset</a>
                                                </span>
                                                </div>
                                                <div class="col-md-6 p-0 m-0">
                                                    <span class="filter-btn">
                                                    <a href="javascript:;" id="filter-submit" class="btn btn-primary same-btn">Filter</a>
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Asad Code End -->


                        </div>
                        <div class="card-body">
                            <div>
                                <div class="table-responsive table-card mb-1">
                                    <table class="table align-middle" id="myDatatable">
                                    <input type="search" id="myInput" onkeyup="myFunction()" placeholder="Search team member.." class="form-control no-dtable">
                                        <thead class="table-light text-muted">
                                            <tr>
                                                <th scope="col" style="width: 50px;">
                                                    S.N
                                                </th>
                                                <!-- Asad End -->
                                                <th>Branch</th>
                                                <th>Reservation Type</th>
                                                <th>Customer Name</th>
                                                <th>Pickup Date</th>
                                                <th>Return Date</th>
                                                <th>Pickup Location</th>
                                                <th>Vehicle</th>
                                                <th>Daily Price</th>
                                                <th>Total Price</th>
                                                <th>Total Paid</th>
                                                <th>Outstanding Balance</th>
                                                <th>Status</th>
                                                <th>Total Days</th>
                                                <th>Remaining Days</th>
                                                <!-- Asad End -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all" id="showDataHere">
                                        @forelse($all_reservations as $r)
                                            <?php
                                                $earlier = new DateTime($r['p_date']);
                                                $later = new DateTime($r['r_date']);
                                                $remaining_days = $later->diff($earlier)->format("%a");
                                            ?>
                                            <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <td>{{$r['branch']}}</td>
                                                <td>{{$r['reservation_type']}}</td>
                                                <td class="customer-name"><h6>{{$r['customer_details'][0]['name']}}</h6></td>
                                                <!-- Asad Start -->
                                                <td>{{$r['p_date']}}</td>
                                                <td>{{$r['r_date']}}</td>
                                                <td>{{$r['p_location'][0]['name']}}</td>
                                                <td>{{(!empty($r['vehicle'])) ? $r['vehicle'][0]['brand'] : "-"}}</td>
                                                <td>${{$r['car_details'][0]['daily_start_price']}}</td>
                                                <td>${{$r['total_amount']}}</td>
                                                <td>${{$r['paid_amount']}}</td>
                                                <td>${{$r['remaining_amount']}}</td>
                                                <!-- Asad End -->
                                                <td style="color: {{($r['end_rental']== 'yes') ? "red"  : "green"}};font-weight: bold;font-size: 12px">{{($r['end_rental']== 'yes') ? "Reservation Ended" : "Open"}}</td>
                                                <td>{{$r['total_days']}}</td>
                                                <td style="color: {{($remaining_days <=0) ? "red"  : "green"}};font-weight: bold;font-size: 12px">{{$remaining_days}}</td>
                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        <li class="list-inline-item view detail" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="view detail">
                                                            <a href="{{url('admin/reservation/view/return/'.$r['id'])}}"
                                                               class="text-primary d-inline-block edit-item-btn">
                                                                <i class="ri-eye-fill fs-16"></i>
                                                            </a>
                                                        </li>

                                                        <li class="list-inline-item" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top" title=""
                                                            data-bs-original-title="Remove">
                                                            <a class="text-danger d-inline-block remove-item-btn"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#deleteRecordModal">
                                                                <i class="ri-delete-bin-5-fill fs-16"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                            <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-light p-3">
                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close" id="close-modal"></button>
                                        </div>
                                        <form action="#">
                                            <div class="modal-body">
                                                <input type="hidden" id="id-field">

                                                <div class="mb-3" id="modal-id" style="display: none;">
                                                    <label for="id-field1" class="form-label">ID</label>
                                                    <input type="text" id="id-field1" class="form-control"
                                                        placeholder="ID" readonly="">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="customername-field" class="form-label">Customer
                                                        Name</label>
                                                    <input type="text" id="customername-field" class="form-control"
                                                        placeholder="Enter Name" required="">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="email-field" class="form-label">Email</label>
                                                    <input type="email" id="email-field" class="form-control"
                                                        placeholder="Enter Email" required="">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="phone-field" class="form-label">Phone</label>
                                                    <input type="text" id="phone-field" class="form-control"
                                                        placeholder="Enter Phone no." required="">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="date-field" class="form-label">Joining Date</label>
                                                    <input type="date" id="date-field" class="form-control"
                                                        data-provider="flatpickr" data-date-format="d M, Y" required="">
                                                </div>

                                                <div>
                                                    <label for="status-field" class="form-label">Status</label>
                                                    <select class="form-control" data-trigger="" name="status-field"
                                                        id="status-field">
                                                        <option value="">Status</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Block">Block</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success" id="add-btn">Add
                                                        Customer</button>
                                                    <button type="button" class="btn btn-success"
                                                        id="edit-btn">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close" id="btn-close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mt-2 text-center">
                                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                                    colors="primary:#f7b84b,secondary:#f06548"
                                                    style="width:100px;height:100px"></lord-icon>
                                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                    <h4>Are you sure ?</h4>
                                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this
                                                        record ?</p>
                                                </div>
                                            </div>
                                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                <button type="button" class="btn w-sm btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn w-sm btn-danger "
                                                    id="delete-record">Yes, Delete It!</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end modal -->
                        </div>
                    </div>

                </div>
                <!--end col-->
            </div>
            <!-- row end -->
        </div>
    </div>
</div>
<!-- End Page-content -->
@include('admin.footer')

<script>
// $(document).ready(function(){
//     $('#myDatatable').DataTable({
//         dom: 'Bfrtip',
//         buttons: [
//             'copyHtml5',
//             'excelHtml5',
//             'csvHtml5',
//             'pdfHtml5'
//         ]
//     });
// })

    // Mohsin Bhaeee Code Cheking
    function myFunction() {
			// Declare variables
			var input, filter, table, tr, td, i, txtValue;
			input = document.getElementById("myInput");
			filter = input.value.toUpperCase();
			table = document.getElementById("myDatatable");
			tr = table.getElementsByTagName("tr");

			// Loop through all table rows, and hide those who don't match the search query
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[0];
				if (td) {
					txtValue = td.textContent || td.innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
						tr[i].style.display = "";
					} else {
						tr[i].style.display = "none";
					}
				}
			}
		}
		function myFunctionIn() {
			// Declare variables
			var input, filter, table, tr, td, i, txtValue;
			input = document.getElementById("myInputIn");
			filter = input.value.toUpperCase();
			table = document.getElementById("myTableIn");
			tr = table.getElementsByTagName("tr");

			// Loop through all table rows, and hide those who don't match the search query
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[0];
				if (td) {
					txtValue = td.textContent || td.innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
						tr[i].style.display = "";
					} else {
						tr[i].style.display = "none";
					}
				}
			}
		}
		function myFunctionDe() {
			// Declare variables
			var input, filter, table, tr, td, i, txtValue;
			input = document.getElementById("myInputDe");
			filter = input.value.toUpperCase();
			table = document.getElementById("myTableDe");
			tr = table.getElementsByTagName("tr");

			// Loop through all table rows, and hide those who don't match the search query
			for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[0];
				if (td) {
					txtValue = td.textContent || td.innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
						tr[i].style.display = "";
					} else {
						tr[i].style.display = "none";
					}
				}
			}
		}
</script>
<script>
    $("#filter-submit").on('click',function (e){
        let _token  = '{{csrf_token()}}'
        let formData  = {};
        let Data = $("#filter-data").serializeArray();
        $(Data).each(function (key,val){
            if (val.value !== ''){
                formData[val.name] =val.value;
            }
        })
        $.post('{{route('filterReservations')}}',{_token,formData},function (rep){
            if (rep.trim() !== "no data found"){
                $('#myDatatable').DataTable().clear().destroy();

                $("#showDataHere").html(rep)
                $('#myDatatable').DataTable();
            }
        })
    })
    $("#resetForm").click(function (r){
        $("#filter-data")[0].reset();
    })
</script>
