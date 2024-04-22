<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PRC-CERTIFICATION</title>
    <link rel="icon" type="image/png" sizes="32x32" href="\img\prclogo.svg">
    
    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- DT -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap CSS (assuming you're using Bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote/dist/summernote-bs4.min.css" rel="stylesheet">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
                                <i class="fas fa-plus"></i> Add Certificate of Finality
                                </button>
                            </div>
                            <!-- Modal -->
                            
                    <form class="needs-validation" action="{{ route('finality.store') }}" method="post" novalidate>
                        @csrf
                        <div class="modal fade" id="addCert" tabindex="-1" aria-labelledby="addCertLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="addCertLabel">Add Certificate of Finality</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div><br>
                                <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
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
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="complainants" name="complainants" placeholder="Complainant/s" required>
                                                <label for="complainants">Complainant/s</label>
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
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="respondents" name="respondents" placeholder="Respondent/s" required>
                                                <label for="respondents">Respondent/s</label>
                                                <div class="valid-feedback">
                                                Looks great!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="for_" name="for_" placeholder="FOR" required>
                                                <label for="for_">FOR</label>
                                                <div class="valid-feedback">
                                                Looks great!
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
                                                <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="caseNo" name="caseNo" placeholder="Case No." required>
                                                <label for="caseNo">Case No.</label>
                                                <div class="valid-feedback">
                                                Fantastic!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="date" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="caseDate" name="caseDate" placeholder="Case Date" required>
                                                <label for="caseDate">Case Date</label>
                                                <div class="valid-feedback">
                                                Delightful!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-2">
                                                <textarea class="form-control" style="border-radius: 5px; border-color: lightgrey; height: 170px;" id="description" name="description" placeholder="Description" required></textarea>
                                         
                                                <label for="description">Description</label>
                                        
                                                <div class="valid-feedback">
                                                    You can do this!
                                                </div>
                                   
                                                <div class="invalid-feedback">
                                                    *Required
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- SUMMERNOTE -->
                                    <!-- <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-floating mb-2">
                                              
                                                    <textarea class="form-control summernote" style="border-radius: 5px; border-color: lightgrey; height: 90px;" id="description" name="description" placeholder="Description" required></textarea>
                                                    
                                                    <label for="description">Description</label>
                                                    
                                                    <div class="valid-feedback">
                                                        You can do this!
                                                    </div>
                                                   
                                                    <div class="invalid-feedback">
                                                        *Required
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="date" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="finalAndExecutoryDate" name="finalAndExecutoryDate" placeholder="Final & Executory Date" required>
                                                <label for="finalAndExecutoryDate">Final & Executory Date</label>
                                                <div class="valid-feedback">
                                                Looks exactly!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="col-md-6">
                                            <div class="form-floating mb-2">
                                                <input type="date" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="dateDate" name="dateDate" placeholder="dateDate" required>
                                                <label for="dateDate">Date</label>
                                                <div class="valid-feedback">
                                                Looks nice!
                                                </div>
                                                <div class="invalid-feedback">
                                                *Required
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                            
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-floating mb-2">
                                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="signatoriesid" required>
                                                    <option value="" disabled selected>Select Signatory</option>
                                                    @foreach($signatories as $signatory)
                                                        <option value="{{ $signatory->id }}">{{ $signatory->name }} - {{ $signatory->position }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="signatoriesid">Signatory</label>
                                                <div class="valid-feedback">
                                                An excellent person!
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
                    <th>Complainant/s</th>
                    <th>Respondent/s</th>
                    <th>FOR</th>
                    <th>Case No.</th>
                    <th>Case Date</th>
                    <th>Description</th>
                    <th>Final & Executory Date</th>
                    <th>Date of Issuance</th>
                    <th>Signatory</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($finalityCert as $cert)
                <tr>
                    <td>{{ $cert->board }}</td>
                    <td>{{ $cert->complainants }}</td>
                    <td>{{ $cert->respondents }}</td>
                    <!-- <td>{{ $cert->for_ }}</td> -->
                    <td>
                        @php
                            $for = $cert->for_;
                            // Find the position of the first comma
                            $commaPosition = strpos($for, ',');
                            
                            // If a comma exists, get the substring before the comma
                            if ($commaPosition !== false) {
                                $for = substr($for, 0, $commaPosition);
                            }

                            // Add ellipsis if the sentence is long
                            $for = strlen($for) > 20 ? substr($for, 0, 20) . '...' : $for;
                        @endphp

                        {{ $for }}
                    </td>

                    <td>{{ $cert->id }}</td>
                    <td>{{ \Carbon\Carbon::parse($cert->caseDate)->format('F j, Y') }}</td>
                    <td>@php
                            $words = str_word_count($cert->description, 1);
                            $shortDescription = implode(' ', array_slice($words, 0, 3));
                            $ellipsis = count($words) > 3 ? '...' : '';
                        @endphp
                        {{ $shortDescription . $ellipsis }}
                    </td>
                    <td>{{ \Carbon\Carbon::parse($cert->finalAndExecutoryDate)->format('F j, Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($cert->dateDate)->format('F j, Y') }}</td>
                    <td><b>{{ $cert->signatory->name }}</b><br> {{ $cert->signatory->position }}</td>
                    <td>
                    <div class="btn-group" role="group" aria-label="Actions">
                                            <!-- Edit Button -->
                                            <a href="{{ route('edit.FINALITYcertificate', $cert->id) }}" style="color:white;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCertificateModal{{ $cert->id }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            
                                            <!-- Print Button -->
                                            <a href="{{ route('previewFinality.pdf', $cert->id) }}" target="_blank" class="btn btn-success">
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

                                            <form id="deleteForm{{ $cert->id }}" action="{{ route('delete.certificate-finality', $cert->id) }}" method="POST">
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
                                            <form action="{{ route('update.FINALITYcertificate', $cert->id) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="board" name="board" placeholder="Last Name" value="{{ $cert->board }}" required>
                                                                    <label for="board">Board</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="complainants" name="complainants" placeholder="Complainant/s" value="{{ $cert->complainants }}" required>
                                                                    <label for="complainants">Complainant/s</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="respondents" name="respondents" placeholder="Respondent/s" value="{{ $cert->respondents }}">
                                                                    <label for="respondents">Respondents</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="for_" name="for_" placeholder="FOR" value="{{ $cert->for_ }}">
                                                                    <label for="for_">FOR</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="caseNo" name="caseNo" placeholder="Case No." value="{{ $cert->caseNo }}">
                                                                    <label for="caseNo">Case No.</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-floating mb-2">
                                                                    <input type="date" required class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="caseDate" name="caseDate" placeholder="Date of Appearance" value="{{ \Carbon\Carbon::parse($cert->caseDate)->format('Y-m-d') }}">
                                                                    <label for="caseDate">Case Date</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-floating mb-2">
                                                                    <!-- Changed input type to textarea and added rows attribute -->
                                                                    <textarea class="form-control" style="border-radius: 5px; border-color: lightgrey; height: 170px;" id="description" name="description" placeholder="Description" required>{{ $cert->description }}</textarea>
                                                                    <!-- Changed label to match textarea -->
                                                                    <label for="description">Description</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-floating mb-2">
                                                                    <input type="date" required class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="finalAndExecutoryDate" name="finalAndExecutoryDate" placeholder="Date of Appearance" value="{{ \Carbon\Carbon::parse($cert->finalAndExecutoryDate)->format('Y-m-d') }}">
                                                                    <label for="finalAndExecutoryDate">Final and Executory Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-floating mb-2">
                                                                    <input type="date" required class="form-control" style="border-radius: 5px; border-color: lightgrey;" id="dateDate" name="dateDate" placeholder="Date of Appearance" value="{{ \Carbon\Carbon::parse($cert->dateDate)->format('Y-m-d') }}">
                                                                    <label for="dateDate">Date</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-floating mb-2">
                                                                    <select class="form-select" id="signatoriesid" name="signatoriesid" required>
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
</div>

                <!--  -->

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
<script src="script.js"></script>   
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