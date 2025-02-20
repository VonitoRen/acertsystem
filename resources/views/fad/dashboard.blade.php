<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PRC-CAR | ACERT</title>
    <link rel="icon" type="/image/png" sizes="32x32" href="\img\prclogo.svg">
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

    .btn-secondary {
        color: black;
    }

    .btn-secondary:hover {
        color: white;
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
                                <i class="fas fa-plus"></i> Add Certificate of Appearance
                                </button>
                            </div>
                        
                    <!-- Modal -->
                    <form class="needs-validation" action="{{ route('appearance.store') }}" method="post" novalidate>
                        @csrf
                        <div class="modal fade" id="addCert" tabindex="-1" aria-labelledby="addCertLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="addCertLabel">Add Certificate of Appearance</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div><br>
                                <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="validationCustom01" name="lname" placeholder="Last Name" required>
                                                <label for="validationCustom01">Last Name</label>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="fname" name="fname" placeholder="First Name" required>
                                                <label for="fname">First Name</label>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="mname" name="mname" placeholder="Middle Name" >
                                                <label for="mname">Middle Name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="suffix" name="suffix" placeholder="Suffix">
                                                <label for="suffix">Suffix</label>
                                                
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
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="agency" name="agency" placeholder="Agency" required>
                                                <label for="agency">Agency</label>
                                                <div class="invalid-feedback">
                                                    *Required
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="date" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="dateOfAppearance" name="dateOfAppearance" placeholder="Date of Appearance" required>
                                                <label for="dateOfAppearance">Date of Appearance 1</label>
                                                <div class="invalid-feedback">
                                                    *Required
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="date" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="dateOfAppearance_two" name="dateOfAppearance_two" placeholder="Date of Appearance" >
                                                <label for="dateOfAppearance_two">Date of Appearance 2 (optional)</label>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="date" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="dateOfAppearance_three" name="dateOfAppearance_three" placeholder="Date of Appearance" >
                                                <label for="dateOfAppearance_three">Date of Appearance 3 (optional)</label>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="purpose" name="purpose" placeholder="Purpose" required>
                                                <label for="purpose">Purpose</label>
                                                <div class="invalid-feedback">
                                                    *Required
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-2"> 
                                            <select class="form-control" id="personRole" name="person_role_id">
                                                <option disabled selected>Select Signatory</option>
                                                @foreach($personRoles as $personRole)
                                                    <option value="{{ $personRole->id }}">
                                                        {{ $personRole->person->name }} - {{ $personRole->person->position }}
                                                @endforeach
                                            </select>
                                                <label for="floatingSelect">Signatory</label>
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
                
                <div class="p-1">
                    <div class="table-responsive">
                        <table id="datatable1" class="display" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Sex</th>
                                    <th>Agency</th>
                                    <th>Date of Appearance</th>
                                    <th>Purpose</th>
                                    <th>Place of Issue</th>
                                    <th>Date Issued</th>
                                    <th>Signatory</th>
                                    <!-- <th>Position/Designation</th> -->
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <!-- @if(isset($appearanceCert)) -->
                            <tbody>
                                @foreach($appearanceCert as $cert)
                                <tr>
                                    <td>{{ $cert->lname }}, {{ $cert->fname }} {{ $cert->mname }} {{ $cert->suffix }}</td>
                                    <td>{{ $cert->sex }}</td>
                                    <td>{{ $cert->agency }}</td>
                                    <td>{{ \Carbon\Carbon::parse($cert->dateOfAppearance)->format('F j, Y') }}, {{ \Carbon\Carbon::parse($cert->dateOfAppearance_two)->format('F j, Y') }} </td>
                                    <td>{{ $cert->purpose }}</td>
                                    <td>{{ $cert->placeOfIssue }}</td>
                                    <td>{{ \Carbon\Carbon::parse($cert->date_issues)->format('F j, Y') }}</td>
                                    <td>
                                        <b>{{ $cert->personRole->person->name }}</b><br>
                                        {{ $cert->personRole->person->position }}
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Actions">
                                            <!-- Edit Button -->
                                            <a href="{{ route('edit.APcertificate', $cert->id) }}" style="color:white;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCertificateModal{{ $cert->id }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            
                                            <!-- Print Button -->
                                            <a href="{{ route('previewAppearance.pdf', $cert->id) }}" target="_blank" class="btn btn-success">
                                                <i class="fas fa-print"></i>
                                            </a>
                                            
                                            <!-- Delete Form -->
                                           <form id="deleteForm{{ $cert->id }}" action="{{ route('delete.certificate-ap', $cert->id) }}" method="POST">
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
                                            <form action="{{ route('update.APcertificate', $cert->id) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="lname" name="lname" placeholder="Last Name" value="{{ $cert->lname }}" required>
                                                                    <label for="lname">Last Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="fname" name="fname" placeholder="First Name" value="{{ $cert->fname }}" required>
                                                                    <label for="fname">First Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="mname" name="mname" placeholder="Middle Name" value="{{ $cert->mname }}">
                                                                    <label for="mname">Middle Name</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="suffix" name="suffix" placeholder="Suffix" value="{{ $cert->suffix }}">
                                                                    <label for="suffix">Suffix</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="">SEX:</label> <br>  
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" required type="radio" name="sex" id="male" value="MALE" {{ $cert->sex === 'MALE' ? 'checked' : '' }}>
                                                                    <label class="form-check-label" for="male" >MALE</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" required type="radio" name="sex" id="female" value="FEMALE" {{ $cert->sex === 'FEMALE' ? 'checked' : '' }}>
                                                                    <label class="form-check-label" for="female">FEMALE</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-2">
                                                                    <input type="date" required class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="date_issues" name="date_issues" placeholder="Date of Issuance" value="{{ \Carbon\Carbon::parse($cert->date_issues)->format('Y-m-d') }}">
                                                                    <label for="date_issues">Date of Issuance</label>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="agency" name="agency" placeholder="Agency" value="{{ $cert->agency }}" required>
                                                                    <label for="agency">Agency</label>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-floating mb-2">
                                                                    <input type="date" required class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="dateOfAppearance" name="dateOfAppearance" placeholder="Date of Appearance" value="{{ \Carbon\Carbon::parse($cert->dateOfAppearance)->format('Y-m-d') }}">
                                                                    <label for="dateOfAppearance">Date of Appearance</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-floating mb-2">
                                                                    <input type="date" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="dateOfAppearance_two" name="dateOfAppearance_two" placeholder="Date of Appearance" value="{{ \Carbon\Carbon::parse($cert->dateOfAppearance_two)->format('Y-m-d') }}">
                                                                    <label for="dateOfAppearance_two">Date of Appearance 2 (optional)</label>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="purpose" name="purpose" placeholder="Purpose" value="{{ $cert->purpose }}" required>
                                                                    <label for="purpose">Purpose</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
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
                        <!-- @endif -->
                    </table>
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
    <script src="/sweetalert2.min.js"></script>
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
</script>

<script>
    // Function to handle SweetAlert confirmation
    $('.delete-btn').on('click', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        swal({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            buttons: {
                cancel: {
                    text: "Cancel",
                    value: null,
                    visible: true,
                    className: "",
                    closeModal: true,
                },
                confirm: {
                    text: "Yes, delete it!",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: true
                }
            },
        }).then((result) => {
            if (result) {
                // If confirmed, submit the form
                $('#deleteForm' + id).submit();
            }
        });
    });
</script>