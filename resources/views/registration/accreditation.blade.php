<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PRC-CERTIFICATION | ACCREDITATION</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
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

    <link rel="icon" type="image/png" sizes="32x32" href="\img\prclogo.svg">

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
                        <div class='col-sm-12 mx-auto shadow' style='padding: 1%; margin:3%;'>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="mb-0"></h4>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCert">
                                <i class="fas fa-plus"></i>Add Accreditation Certificate
                                </button>
                            </div>
                        
                
                    <!-- Modal -->
                    <form class="needs-validation" action="{{ route('accreditation.store') }}" method="post" novalidate>
                        @csrf
                        <div class="modal fade" id="addCert" tabindex="-1" aria-labelledby="addCertLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="addCertLabel">Add Certificate of Registration</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div><br>
                                <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
                                                <label for="validationCustom01">Last Name</label>
                                            </div>
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
                                                <label for="fname">First Name</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name" required>
                                                <label for="mname">Middle Name</label>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="suffix" name="suffix" placeholder="Suffix">
                                                <label for="suffix">Suffix</label>
                                            </div>
                                        </div>


                                        
                                        <div class="col-md-4">
                                            <label for="">SEX:</label> <br>  
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sex" id="male" value="MALE">
                                                <label class="form-check-label" for="male">MALE</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sex" id="female" value="FEMALE">
                                                <label class="form-check-label" for="female">FEMALE</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="accreditation_no" name="accreditation_no" placeholder="Accreditation No.">
                                                <label for="accreditation_no">Accreditation No.</label>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="professionID">
                                                    <option disabled selected>Select Profession</option>
                                                    @foreach($professions as $profession)
                                                        <option value="{{ $profession->id }}">{{ $profession->profession }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingSelect">Profession</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-2">
                                                <input type="date" class="form-control" id="validityDate" name="validityDate" placeholder="Validity Date" required>
                                                <label for="validityDate">Validity Date</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="broker_name" name="broker_name" placeholder="Broker Name">
                                                <label for="broker_name">Broker Name</label>
                                            </div>
                                        </div>
                                        

                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="broker_reg_no" name="broker_reg_no" placeholder="Broker Registration No.">
                                                <label for="Broker Registration No.">Broker Registration No.</label>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-floating mb-2"> 
                                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="signatoriesid" required>
                                                    <option disabled selected>Select Signatory</option>
                                                    @foreach($signatories as $signatory)
                                                        <option value="{{ $signatory->id }}">{{ $signatory->name }} - {{ $signatory->position }}</option>
                                                    @endforeach
                                                </select>
   
                                                <label for="floatingSelect">Signatory</label>
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
                
                <div class="p-0">
                <div class="table-responsive">
                <table id="datatable1" class="display" style="width:100%; text-align: center;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>AC No.</th>
                            <th>Sex</th>
                            <th>Profession</th>
                            <th>Validity Date</th>
                            <th>Broker Name</th>
                            <th>Broker Registration No</th>
                            <th>Date Issued</th>
                            <th>Place Issued</th>
                            <th>Signatory</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($accreditationCert as $cert)
                        <tr>
                            <td>{{ $cert->lname }}, {{ $cert->fname }} {{ $cert->mname }} {{ $cert->suffix }}</td>
                            <td>{{ $cert->accreditation_no }}</td>
                            <td>{{ $cert->sex }}</td>
                            <td>{{ $cert->profession->profession }}</td>
                            <td>{{ \Carbon\Carbon::parse($cert->validityDate)->format('F j, Y') }}</td>
                            <td>{{ $cert->broker_name }}</td>
                            <td>{{ $cert->broker_reg_no }}</td>
                            <td>{{ \Carbon\Carbon::parse($cert->date_issues)->format('F j, Y') }}</td>
                            <td>{{ $cert->placeOfIssue }}</td>
                            <td><b> {{ $cert->signatory->name }}</b><br> {{ $cert->signatory->position }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Actions">
                                    <!-- Edit Button -->
                                    <a href="{{ route('edit.certificateAC', $cert->id) }}" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCertificateModal{{ $cert->id }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <!-- Delete Form -->
                                    <form action="{{ route('delete.certificate-ac', $cert->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </div>

                    <!-- Edit Certificate Modal -->
                        <div class="modal fade" id="editCertificateModal{{ $cert->id }}" tabindex="-1" aria-labelledby="editCertificateModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editCertificateModalLabel">Edit Certificate</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    
                                    <form action="{{ route('update.certificateAC', $cert->id) }}" method="post">
                                        @csrf
                                            @method('PUT')
                                                <div class="modal-body">
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-floating mb-2">
                                                                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="{{ $cert->lname }}">
                                                                        <label for="lname">Last Name</label>
                                                                    </div>
                                                                    <div class="valid-feedback">Looks good!</div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="{{ $cert->fname }}">
                                                                    <label for="fname">First Name</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name" value="{{ $cert->mname }}">
                                                                    <label for="mname">Middle Name</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">

                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" id="suffix" name="suffix" placeholder="Suffix" value="{{ $cert->suffix }}">
                                                                    <label for="suffix">Suffix</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label for="">SEX:</label> <br>  
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="sex" id="male" value="MALE" {{ $cert->sex === 'MALE' ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="male">MALE</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="sex" id="female" value="FEMALE" {{ $cert->sex === 'FEMALE' ? 'checked' : '' }}>
                                                                        <label class="form-check-label" for="female">FEMALE</label>
                                                                    </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" id="accreditation_no" name="accreditation_no" placeholder="Accreditation No." value="{{ $cert->accreditation_no }}" required>
                                                                    <label for="accreditation_no">Accreditation No.</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-floating">
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
                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-2">
                                                                    <input type="date" class="form-control" id="validityDate" name="validityDate" placeholder="Validity Date" value="{{ \Carbon\Carbon::parse($cert->validityDate)->format('Y-m-d') }}" required>
                                                                    <label for="regnum">Validity Date</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">

                                                            <div class="col-md-8">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" id="broker_name" name="broker_name" placeholder="Broker Name" value="{{ $cert->broker_name }}">
                                                                    <label for="regnum">Broker Name</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" id="broker_reg_no" name="broker_reg_no" placeholder="Broker Registration No." value="{{ $cert->broker_reg_no }}">
                                                                    <label for="registeredOn">Broker Registration No.</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-floating mb-2">
                                                                    <select class="form-select" id="signatoriesid" name="signatoriesid">
                                                                        <option disabled value="">Select Signatory</option>
                                                                        @foreach($signatories as $signatory)
                                                                            <option value="{{ $signatory->id }}" {{ $cert->signatory->id == $signatory->id ? 'selected' : '' }}>
                                                                                {{ $signatory->name }} - {{ $signatory->position }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    <label for="signatoriesid">Signatory</label>
                                                                </div>
                                                            </div>
                                                        </div>
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
                    <!-- END OF CHANGES -->

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
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/demo/chart-pie-demo.js"></script>




    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="/script.js"></script>   
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