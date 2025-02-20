<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PRC-CERTIFICATION</title>
        <link rel="icon" type="/image/png" sizes="32x32" href="{{ asset('\img\prclogo.svg') }}">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">


    <!-- DT -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- SWEETALERT LIBRARY -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<style>
    body{
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
    .loader-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.7);
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .loader {
    border: 5px solid #f3f3f3;
    border-radius: 50%;
    border-top: 5px solid #3498db;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
    }

    @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
    }

    body.loading {
    overflow: hidden;
    }
    .table-responsive {
    overflow-x: auto;
    }
    
    .btn-primary {
        color: blue;
    }

    .btn-primary:hover {
        color: white;
    }

    .edit-icon {
        color: white;
    }

    .btn-close{
        color: black;
    }

    .btn-secondary{
        color: gray;
    }   

</style>
<body id="page-top">

    <div class="loader-wrapper" id="loader">
        <div class="loader"></div>
    </div>

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Include Sidebar -->
        @include('sidebar', ['userRole' => auth()->user()->role])

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                    <x-app-layout>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class='col-sm-12 mx-auto shadow' style='padding: 2%; margin:3%;'>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="mb-0"></h4>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCert">
                                <i class="fas fa-plus"></i> Add Certificate of PIC & COR
                                </button>
                            </div>
                            <!-- Modal -->
                            
                    <form class="needs-validation" action="{{ route('piccor.store') }}" method="post" novalidate>
                        @csrf
                        <div class="modal fade" id="addCert" tabindex="-1" aria-labelledby="addCertLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="addCertLabel">Add Certificate of PIC & COR</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div><br>
                                <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="validationCustom01" name="board" placeholder="Board" required>
                                                <label for="validationCustom01">Board</label>
                                                <div class="valid-feedback">
                                                Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="date" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="regDate" name="regDate" placeholder="Registration Date" required>
                                                <label for="regDate">Registration Date</label>
                                                <div class="valid-feedback">
                                                Looks amazing!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="lname" name="lname" placeholder="Last Name" required>
                                                <label for="lname">Last Name</label>
                                                <div class="valid-feedback">
                                                Looks amazing!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="fname" name="fname" placeholder="First Name" required>
                                                <label for="fname">First Name</label>
                                                <div class="valid-feedback">
                                                Looks amazing!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="mname" name="mname" placeholder="Middle Name">
                                                <label for="mname">Middle Name</label>
                                                <div class="valid-feedback">
                                                Looks amazing!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="suffix" name="suffix" placeholder="Suffix">
                                                <label for="suffix">Suffix</label>
                                                <div class="valid-feedback">
                                                Looks amazing!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="">SEX:</label> <br>  
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sex" id="male" value="MALE" required>
                                                <label class="form-check-label" for="male">MALE</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sex" id="female" value="FEMALE" required>
                                                <label class="form-check-label" for="female">FEMALE</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="professionID" required>
                                                    <option disabled selected value="">Select Profession</option>
                                                    @foreach($professions as $profession)
                                                        <option value="{{ $profession->id }}">{{ $profession->profession }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingSelect">Profession</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="regNo" name="regNo" placeholder="Registration No." required>
                                                <label for="regNo">Registration No.</label>
                                                <div class="valid-feedback">
                                                Looks amazing!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="date" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="returnedDate" name="returnedDate" placeholder="Returned Date" required>
                                                <label for="returnedDate">Returned Date</label>
                                                <div class="valid-feedback">
                                                Looks amazing!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="penalty" name="penalty" placeholder="Penalty" required>
                                                <label for="penalty">Penalty</label>
                                                <div class="valid-feedback">
                                                Looks amazing!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="caseTitle" name="caseTitle" placeholder="Case Title" required>
                                                <label for="caseTitle">Case Title</label>
                                                <div class="valid-feedback">
                                                Looks amazing!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="administrativeCaseNo" name="administrativeCaseNo" placeholder="Administrative Case No." required>
                                                <label for="administrativeCaseNo">Administrative Case No.</label>
                                                <div class="valid-feedback">
                                                Looks amazing!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>
<!-- 
                                        <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="date" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="dateofIssuance" name="dateofIssuance" placeholder="Date of Issuance" required>
                                                <label for="dateofIssuance">Date of Issuance</label>
                                                <div class="valid-feedback">
                                                Looks amazing!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div> -->
                                    </div><br>

                                    <div class="row">
                                    <b>Approved By:</b>
                                        <div class="col-md-12">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="hearingOfficer" name="hearingOfficer" placeholder="Hearing Officer" required>
                                                <label for="hearingOfficer">Attorney</label>
                                                <div class="valid-feedback">
                                                Looks amazing!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                    <b>Approved By:</b>
                                        <div class="col-md-12">
                                            <div class="form-floating mb-2"> 
                                            <select class="form-control" id="personRole" name="person_role_id" required>
                                                <option value="" disabled selected>Select Signatory</option>
                                                @foreach($personRoles as $personRole)
                                                    <option value="{{ $personRole->id }}">
                                                        {{ $personRole->person->name }} - {{ $personRole->person->position }}
                                                @endforeach
                                            </select>
                                                <label for="floatingSelect">Signatory</label>
                                                <div class="valid-feedback">
                                                    A wonderful person!
                                                </div>
                                                <div class="invalid-feedback">
                                                    *Required
                                                </div>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <b>Copy furnished:</b>
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="complainantlname" name="complainantlname" placeholder="Complainant Last Name" required>
                                                <label for="complainantlname">Complainant Last Name</label>
                                                <div class="valid-feedback">
                                                Looks amazing!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="col-md-4">
                                            <b style="color: white;">.</b>
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="complainantfname" name="complainantfname" placeholder="Complainant First Name" required>
                                                <label for="complainantfname">Complainant First Name</label>
                                                <div class="valid-feedback">
                                                Looks amazing!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <b style="color: white;">.</b>
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="complainantmname" name="complainantmname" placeholder="Complainant Middle Name">
                                                <label for="complainantmname">Complainant Middle Name</label>
                                                <div class="valid-feedback">
                                                Looks amazing!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="complainantsuffix" name="complainantsuffix" placeholder="Complainant Suffix">
                                                <label for="complainantsuffix">Complainant Suffix</label>
                                                <div class="valid-feedback">
                                                Looks amazing!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Sex:</label> <br>  
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="complainantsex" id="male" value="MALE" required>
                                                <label class="form-check-label" for="male">MALE</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="complainantsex" id="female" value="FEMALE" required>
                                                <label class="form-check-label" for="female">FEMALE</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="legalDivisionChief" name="legalDivisionChief" placeholder="Legal Division Chief" required>
                                                <label for="legalDivisionChief">Legal Division Chief</label>
                                                <div class="valid-feedback">
                                                Looks great!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                
                
                
                <!--  -->
                <div class="p-1">
                    <div class="table-responsive">
                        <table id="datatable1" class="display" style="width:100%; text-align: center;">
                            <thead>
                                <tr>
                                    <th>Board</th>
                                    <th>Registration Date</th>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>Profession</th>
                                    <th>Registration No.</th>
                                    <th>Returned Date</th>
                                    <th>Penalty</th>
                                    <th>Case Title</th>
                                    <th>Administrative Case No.</th>
                                    <th>Date of Issuance</th>
                                    <th>Attorney</th>
                                    <th>Signatory</th>
                                    <th>Complainant</th>
                                    <th>Legal Division Chief</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($piccorCert as $cert)
                                <tr>
                                    <td>{{ $cert->board }}</td>
                                    <td>{{ \Carbon\Carbon::parse($cert->regDate)->format('F j, Y') }}</td>
                                    <td>{{ $cert->lname }}, {{ $cert->fname }} {{ $cert->mname }} {{ $cert->suffix }}</td>
                                    <td>{{ $cert->sex }}</td>
                                    <td>{{ $cert->profession->profession }}</td>
                                    <td>{{ $cert->regNo }}</td>
                                    <td>{{ \Carbon\Carbon::parse($cert->returnedDate)->format('F j, Y') }}</td>
                                    <td>{{ $cert->penalty }}</td>
                                    <td>{{ $cert->caseTitle }}</td>
                                    <td>{{ $cert->administrativeCaseNo }}</td>
                                    <td>{{ \Carbon\Carbon::parse($cert->dateofIssuance)->format('F j, Y') }}</td>
                                    <td>{{ $cert->hearingOfficer }}</td>
                                    <td><b>{{ $cert->personRole->person->name}}</b><br>{{$cert->personRole->person->position}}</td>
                                    <td><b>{{ $cert->complainantlname }}</b>, <b>{{ $cert->complainantfname }}</b> <b>{{ $cert->complainantmname }}</b> <b>{{ $cert->complainantsuffix }}</b><br> {{ $cert->position }}</td>
                                    <td>{{ $cert->legalDivisionChief }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Actions">
                                            <!-- Edit Button -->
                                            <a href="{{ route('edit.PICCORcertificate', $cert->id) }}" style="color:white;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCertificateModal{{ $cert->id }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            
                                            <!-- Print Button -->
                                            <a href="{{ route('previewPiccor.pdf', $cert->id) }}" target="_blank" class="btn btn-success">
                                                <i class="fas fa-print"></i>
                                            </a>
                                            
                                            <!-- Delete Form -->
                                            <!-- <form id="deleteForm" action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger delete-btn" data-id="" style="border-radius: 0 0.25rem 0.25rem 0;">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form> -->

                                            <form id="deleteForm{{ $cert->id }}" action="{{ route('delete.certificate-piccor', $cert->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger delete-btn" data-id="{{ $cert->id }}" style="border-radius: 0 0.25rem 0.25rem 0;">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Edit Certificate Modal -->
                                <div class="modal fade" id="editCertificateModal{{ $cert->id }}" tabindex="-1" aria-labelledby="editCertificateModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editCertificateModalLabel">Edit Certificate</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="{{ route('update.PICCORcertificate', $cert->id) }}" method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-body">
                                                                    <div class="container">
                                                                        <!-- START -->
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-floating mb-2">
                                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="validationCustom01" value="{{ $cert->board }}" name="board" placeholder="Board" required>
                                                                                    <label for="validationCustom01">Board</label>
                                                                                    <div class="valid-feedback">
                                                                                    Looks good!
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                    *Required
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-floating mb-2">
                                                                                    <input type="date" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="regDate" value="{{ $cert->regDate }}" name="regDate" placeholder="Registration Date" required>
                                                                                    <label for="regDate">Registration Date</label>
                                                                                    <div class="valid-feedback">
                                                                                    Looks amazing!
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                    *Required
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-floating mb-2">
                                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="lname" value="{{ $cert->lname }}" name="lname" placeholder="Last Name" required>
                                                                                    <label for="lname">Last Name</label>
                                                                                    <div class="valid-feedback">
                                                                                    Looks amazing!
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                    *Required
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="form-floating mb-2">
                                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="fname" value="{{ $cert->fname }}" name="fname" placeholder="First Name" required>
                                                                                    <label for="fname">First Name</label>
                                                                                    <div class="valid-feedback">
                                                                                    Looks amazing!
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                    *Required
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="form-floating mb-2">
                                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="mname" value="{{ $cert->mname }}" name="mname" placeholder="Middle Name">
                                                                                    <label for="mname">Middle Name</label>
                                                                                    <div class="valid-feedback">
                                                                                    Looks amazing!
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                    *Required
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                            
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-floating mb-2">
                                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="suffix" value="{{ $cert->suffix }}" name="suffix" placeholder="Suffix">
                                                                                    <label for="suffix">Suffix</label>
                                                                                    <div class="valid-feedback">
                                                                                    Looks amazing!
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                    *Required
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <label for="">SEX:</label> <br>  
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="sex" id="male" value="MALE" {{ $cert->sex === 'MALE' ? 'checked' : '' }} required>
                                                                                    <label class="form-check-label" for="male">MALE</label>
                                                                                </div>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="sex" id="female" value="FEMALE" {{ $cert->sex === 'FEMALE' ? 'checked' : '' }} required>
                                                                                    <label class="form-check-label" for="female">FEMALE</label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="professionID">
                                                                                    <option disabled value="">Select Profession</option>
                                                                                    @foreach($professions as $profession)
                                                                                        <option value="{{ $profession->id }}" {{ $cert->profession->id == $profession->id ? 'selected' : '' }}>
                                                                                            {{ $profession->profession }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                                <label for="floatingSelect">Profession</label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-floating mb-2">
                                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="regNo" value="{{ $cert->regNo }}" name="regNo" placeholder="Registration No." required>
                                                                                    <label for="regNo">Registration No.</label>
                                                                                    <div class="valid-feedback">
                                                                                    Looks amazing!
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                    *Required
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <div class="form-floating mb-2">
                                                                                    <input type="date" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="returnedDate" value="{{ \Carbon\Carbon::parse($cert->returnedDate)->format('Y-m-d') }}" name="returnedDate" placeholder="Returned Date" required>
                                                                                    <label for="returnedDate">Returned Date</label>
                                                                                    <div class="valid-feedback">
                                                                                    Looks amazing!
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                    *Required
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-floating mb-2">
                                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="penalty" value="{{ $cert->penalty }}" name="penalty" placeholder="Penalty" required>
                                                                                    <label for="penalty">Penalty</label>
                                                                                    <div class="valid-feedback">
                                                                                    Looks amazing!
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                    *Required
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <div class="form-floating mb-2">
                                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="caseTitle" value="{{ $cert->caseTitle }}" name="caseTitle" placeholder="Case Title" required>
                                                                                    <label for="caseTitle">Case Title</label>
                                                                                    <div class="valid-feedback">
                                                                                    Looks amazing!
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                    *Required
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-floating mb-2">
                                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="administrativeCaseNo" value="{{ $cert->administrativeCaseNo }}" name="administrativeCaseNo" placeholder="Administrative Case No." required>
                                                                                    <label for="administrativeCaseNo">Administrative Case No.</label>
                                                                                    <div class="valid-feedback">
                                                                                    Looks amazing!
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                    *Required
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <div class="form-floating mb-2">
                                                                                    <input type="date" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="dateofIssuance" value="{{ \Carbon\Carbon::parse($cert->dateofIssuance)->format('Y-m-d') }}" name="dateofIssuance" placeholder="Date of Issuance" required>
                                                                                    <label for="dateofIssuance">Date of Issuance</label>
                                                                                    <div class="valid-feedback">
                                                                                    Looks amazing!
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                    *Required
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><br>

                                                                        <div class="row">
                                                                        <b>Approved By:</b>
                                                                            <div class="col-md-12">
                                                                                <div class="form-floating mb-2">
                                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="hearingOfficer" value="{{ $cert->hearingOfficer }}" name="hearingOfficer" placeholder="Hearing Officer" required>
                                                                                    <label for="hearingOfficer">Attorney</label>
                                                                                    <div class="valid-feedback">
                                                                                    Looks amazing!
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                    *Required
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><br>

                                                                        <div class="row">
                                                                        <b>Approved By:</b>
                                                                        <div class="col-md-12">
                                                                                <div class="form-floating mb-2">
                                                                                <select class="form-control" id="personRole" name="person_role_id">
                                                                                    <option disabled value="">Select Signatory</option>
                                                                                    @foreach($personRoles as $personRole)
                                                                                        <option value="{{ $personRole->id }}" {{ optional($cert->personRole)->id == $personRole->id ? 'selected' : '' }}>
                                                                                            {{ $personRole->person->name }} - {{ $personRole->person->position }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>

                                                                                    <label for="signatoriesid">Signatory</label>
                                                                                </div>
                                                                            </div>
                                                                        </div><br>

                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <b>Copy furnished:</b>
                                                                                <div class="form-floating mb-2">
                                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="complainantlname" value="{{ $cert->complainantlname }}" name="complainantlname" placeholder="Complainant Last Name" required>
                                                                                    <label for="complainantlname">Complainant Last Name</label>
                                                                                    <div class="valid-feedback">
                                                                                    Looks amazing!
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                    *Required
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <b style="color: white;">.</b>
                                                                                <div class="form-floating mb-2">
                                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="complainantfname" value="{{ $cert->complainantfname }}" name="complainantfname" placeholder="Complainant First Name" required>
                                                                                    <label for="complainantfname">Complainant First Name</label>
                                                                                    <div class="valid-feedback">
                                                                                    Looks amazing!
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                    *Required
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <b style="color: white;">.</b>
                                                                                <div class="form-floating mb-2">
                                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="complainantmname" value="{{ $cert->complainantmname }}" name="complainantmname" placeholder="Complainant Middle Name">
                                                                                    <label for="complainantmname">Complainant Middle Name</label>
                                                                                    <div class="valid-feedback">
                                                                                    Looks amazing!
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                    *Required
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-floating mb-2">
                                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="complainantsuffix" value="{{ $cert->complainantsuffix }}" name="complainantsuffix" placeholder="Complainant Suffix">
                                                                                    <label for="complainantsuffix">Complainant Suffix</label>
                                                                                    <div class="valid-feedback">
                                                                                    Looks amazing!
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                    *Required
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <label for="">Sex:</label> <br>  
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="complainantsex" id="male" value="MALE" {{ $cert->sex === 'MALE' ? 'checked' : '' }} required>
                                                                                    <label class="form-check-label" for="male">MALE</label>
                                                                                </div>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="complainantsex" id="female" value="FEMALE" {{ $cert->sex === 'FEMALE' ? 'checked' : '' }} required>
                                                                                    <label class="form-check-label" for="female">FEMALE</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-floating mb-2">
                                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="legalDivisionChief" value="{{ $cert->legalDivisionChief }}" name="legalDivisionChief" placeholder="Legal Division Chief" required>
                                                                                    <label for="legalDivisionChief">Legal Division Chief</label>
                                                                                    <div class="valid-feedback">
                                                                                    Looks great!
                                                                                    </div>
                                                                                    <div class="invalid-feedback">
                                                                                    *Required
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- END -->
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
                        
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->     
            <!-- Footer -->
            @include('footer')
        <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
                    </x-app-layout>
                



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('/js/demo/chart-pie-demo.js') }}"></script>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/script.js') }}"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="sweetalert2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#datatable1').DataTable();
    });

    window.onload = function() {
    var loader = document.getElementById("loader");
    loader.style.display = "none";
    };

    window.onbeforeunload = function() {
    document.body.classList.add("loading");
    };

</script>

</body>
</html>

<script>
    (function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

     // Wait for the document to be fully loaded
     document.addEventListener('DOMContentLoaded', function() {
        // Get all delete buttons with class "delete-btn"
        var deleteButtons = document.querySelectorAll('.delete-btn');

        // Loop through each delete button
        deleteButtons.forEach(function(button) {
            // Add click event listener to each delete button
            button.addEventListener('click', function(event) {
                // Prevent default form submission
                event.preventDefault();

                // Get the data-id attribute value which contains the caseNo
                var caseNo = this.getAttribute('data-id');

                // Show SweetAlert confirmation dialog
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this certificate!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                    // If user clicks on confirm button
                    if (result.isConfirmed) {
                        // Proceed with deletion by submitting the form
                        var form = document.getElementById('deleteForm' + caseNo);
                        form.submit();
                    }
                });
            });
        });
    });


    // Wait for the document to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Get the textarea element
        var descriptionTextarea = document.getElementById('description');

        // Add keydown event listener to the textarea
        descriptionTextarea.addEventListener('keydown', function(event) {
            // Check if the pressed key is Enter (key code 13) and Shift key is not pressed
            if (event.keyCode === 13 && !event.shiftKey) {
                // Prevent default behavior (form submission)
                event.preventDefault();
                
                // Get the current cursor position in the textarea
                var cursorPos = this.selectionStart;
                
                // Get the textarea value
                var textareaValue = this.value;
                
                // Insert a newline character (\n) at the current cursor position
                var updatedValue = textareaValue.substring(0, cursorPos) + "\n" + textareaValue.substring(cursorPos);

                // Update the textarea value
                this.value = updatedValue;

                // Move the cursor to the position after the inserted newline character
                this.setSelectionRange(cursorPos + 1, cursorPos + 1);
            }
        });
    }); 

</script>


    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote/dist/summernote-bs4.min.js"></script>

    <script>

        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200, 
                minHeight: null, 
                maxHeight: null, 
                focus: true, 
            });
        });
    </script> -->