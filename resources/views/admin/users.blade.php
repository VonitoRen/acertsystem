<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PRC-CERTIFICATION</title>
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
    .nav-item:hover .nav-link {
        background-color: #343a40;
    }

    .btn-primary-pro {
        color: blue;
    }

    .btn-primary-pro:hover {
        color: white;
    }

    .edit-icon {
        color: white;
    }

    .btn-secondary-pro {
        color: black;
    }

    .btn-secondary-pro:hover {
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
        @include('adminsidebar')

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
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCert">
                                <i class="fas fa-plus"></i> Add User
                                </button>
                            </div>
                        
                
                    <!-- Modal -->
                    <form class="needs-validation" action="{{ route('store.users') }}" method="post" novalidate>
    @csrf
    <div class="modal fade" id="addCert" tabindex="-1" aria-labelledby="addCertLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addCertLabel">Add User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-2">
                                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                                    <label for="validationCustom01">Name</label>
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
                                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                                    <label for="validationCustom01">Username</label>
                                    <div class="valid-feedback">
                                                        Looks nice!
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
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    <label for="validationCustom01">Password</label>
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
                                    <select class="form-select" name="role" required>
                                        <option value="" disabled selected>Select Role</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Legal</option>
                                        <option value="3">Registration</option>
                                        <option value="4">Finance and Administrative Division</option>
                                    </select>
                                    <label for="validationCustom01">Role</label>
                                    <div class="valid-feedback">
                                                        Well done!
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
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary btn-primary-pro" value="Submit">
                </div>
            </div>
        </div>
    </div>
</form>

                
                <div class="p-1">
                    <div class="table-responsive">
                        <table id="datatable1" class="display" style="width:100%; text-align: center;">
                            <thead>
                                <tr>
                                    <!-- <th>id</th> -->
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @php
                                            $roleName = '';
                                            switch ($user->role) {
                                                case 1:
                                                    $roleName = 'Admin';
                                                    break;
                                                case 2:
                                                    $roleName = 'Legal';
                                                    break;
                                                case 3:
                                                    $roleName = 'Registration';
                                                    break;
                                                case 4:
                                                    $roleName = 'Finance and Administrative Division';
                                                    break;
                                                default:
                                                    $roleName = 'Unknown';
                                            }
                                        @endphp
                                        {{ $roleName }}
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Actions">
                                            <!-- Edit Button -->
                                            <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCertificateModal{{ $user->id }}">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <form id="deleteForm{{ $user->id }}" action="{{ route('delete.users', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger delete-btn">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>



                        <!-- EDIT -->
                        <!-- EDIT -->
                        <!-- EDIT -->
                        <!-- EDIT -->
                        <!-- EDIT -->
                        
                        <!-- Edit Certificate Modal -->
                        <div class="modal fade" id="editCertificateModal{{ $user->id }}" tabindex="-1" aria-labelledby="editCertificateModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editCertificateModalLabel">Edit User</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    
                                    <form action="{{ route('update.users', $user->id) }}" method="post">
                                        @csrf
                                            @method('PUT')
                                                <div class="modal-body">
                                                    <div class="modal-body">
                                                        <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="name" value="{{ $user -> name }}" required>
                                                                    <label for="validationCustom01">Name</label>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-floating mb-2">
                                                                    <input type="text" class="form-control" id="validationCustom01" name="email" placeholder="email" value="{{ $user -> email }}" required>
                                                                    <label for="validationCustom01">Username</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">

                                                           <div class="col-md-6">
                                                                <div class="form-floating mb-2">
                                                                    <select class="form-select" id="validationCustom01" name="role" required>
                                                                        <option value="" disabled selected>Select Role</option>
                                                                        <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Admin</option>
                                                                        <option value="2" {{ $user->role == 2 ? 'selected' : '' }}>Legal</option>
                                                                        <option value="3" {{ $user->role == 3 ? 'selected' : '' }}>Registration</option>
                                                                        <option value="4" {{ $user->role == 4 ? 'selected' : '' }}>Finance and Administrative Division</option>
                                                                    </select>
                                                                    <label for="validationCustom01">Role</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary btn-secondary-pro" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary btn-primary-pro">Save changes</button>
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
        var id = $(this).closest('form').attr('id').replace('deleteForm', ''); // Extract id from the form's id attribute
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
