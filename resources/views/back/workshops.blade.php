<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UCA-DHBW Protail/ Workshops</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="back/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="back/css/style.css" rel="stylesheet">
    
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">UCA-DHBW</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{session('admin')["name"]}}</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <!-- <a href="{{ route('admin') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a> -->
                    <a href="{{ route('students') }}" class="nav-item nav-link"><i class="fa-solid fa-graduation-cap me-2"></i>Students</a>
                    <a href="{{ route('teachers') }}" class="nav-item nav-link"><i class="fa-solid fa-chalkboard-user me-2"></i>Teachers</a>
                    <a href="{{ route('exchanges') }}" class="nav-item nav-link"><i class="fa-solid fa-arrow-right-arrow-left me-2"></i>Exchanges</a>
                    <a href="{{ route('partners') }}" class="nav-item nav-link "><i class="fa-solid fa-arrow-right-arrow-left me-2"></i>Partners</a>
                    <a href="{{ route('internships') }}" class="nav-item nav-link"><i class="fa-solid fa-laptop-file me-2"></i>Internships</a>
                    <a href="{{ route('workshops') }}" class="nav-item nav-link active"><i class="fa-solid fa-laptop-file mx-3"></i>Workshops</a>
                    <a href="{{ route('projects') }}" class="nav-item nav-link"><i class="fa-solid fa-diagram-project me-2"></i>Projects</a>
                    <a href="{{ route('fablabs') }}" class="nav-item nav-link"><i class="fa-solid fa-group-arrows-rotate me-2"></i>Fablabs</a>
                    <a href="{{ route('programs') }}" class="nav-item nav-link"><i class="fa-solid fa-list me-2"></i>Programs</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
  
                <div class="navbar-nav align-items-center ms-auto">
  
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{session('admin')["name"]}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#logout">Log out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <div class="container-fluid pt-4 px-4 my-5">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row">
                    <h2 class="col-10">Workshops</h2>
                    <div class="col-2">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_input">
                            <i class="fa-solid fa-plus text mt-1 fs-5"></i>
                            Add workshop
                        </button>
                    </div>
                </div>
                <!-- Add New Student Modal -->
                <div class="modal fade" tabindex="-1" role="dialog" id="modal_input" tabindex="-1" role="dialog" aria-labelledby="addStudentModalLabel">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addTeacherModalLabel" style="color:black;">Add workshop</h5>
                            </div>
                            
                            <!-- Modal Body -->
                            <div class="modal-body">
                                <!-- Your form goes here -->
                                <form action="{{ route('workshops.add') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @if ($errors->any())
                                        <div class="alert alert-danger text-light">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <span>{{ $error }}</span> <br>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" style="background-color:#ffffff;" id="title" name="title" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="partner_id">Partner</label>
                                                <select class="form-select" aria-label="Default select example" style="background-color:#ffffff;" id="partner_id" name="partner_id" required>
                                                    <option disabled>Choose a partner</option>
                                                    @foreach($partners as $partner)
                                                        <option value="{{$partner->id}}">{{$partner->name_company}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <input type="text" class="form-control" style="background-color:#ffffff;" id="description" name="description" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="university">University</label>
                                                <select class="form-select" aria-label="Default select example" style="background-color:#ffffff;" id="university" name="university" required>
                                                    <option  disabled>Choose University</option>
                                                    <option value="UCA">UCA</option>
                                                    <option value="DHBW">DHBW</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country">Country</label>
                                                <input type="text" class="form-control" style="background-color:#ffffff;" id="country" name="country" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input type="text" class="form-control" style="background-color:#ffffff;" id="city" name="city" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="date_start">Start date</label>
                                                <input type="date" class="form-control" style="background-color:#ffffff;" id="date_start" name="date_start" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="date_end">End date</label>
                                                <input type="date" class="form-control" style="background-color:#ffffff;" id="date_end" name="date_end" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="type">Type</label>
                                                <input type="text" class="form-control" style="background-color:#ffffff;" id="type" name="type" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="image_workshop">Workshop image</label>
                                                <input type="file" class="form-control" id="image_workshop" name="image_workshop">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="close btn btn-danger float-end mt-3"  data-dismiss="modal" style="margin-left:10px !important;">Cancel</button>
                                    <button type="submit" class="btn btn-success float-end mt-3">Add workshop</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                
                <!-- Table for Students -->
                <table class="table my-4">
                    <thead>
                        <tr>
                            
                            <th>Workshop Image</th>
                            <th>ID</th>
                            <th>Partner</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>University</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Start date</th>
                            <th>End date</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($workshops as $workshop)
                            <tr id="{{ $workshop->id}}">
                                 <td>
                                    @if($partner->logo)
                                    <img src="{{  url('storage/workshops/'.$workshop->image)}}" alt="workshop image" class="rounded-circle" style="width: 70px; height: 70px;">
                                    @else
                                        No logo
                                    @endif
                                </td>
                                <td>{{ $workshop->id }}</td>
                                <td>{{ $workshop->partner->name_company }}</td>
                                <td>{{ $workshop->title }}</td>
                                <td>{{ $workshop->description }}</td>
                                <td>{{ $workshop->university }}</td>
                                <td>{{ $workshop->country }}</td>
                                <td>{{ $workshop->city }}</td>
                                <td>{{ $workshop->date_start }}</td>
                                <td>{{ $workshop->date_end }}</td>
                                <td>{{ $workshop->type }}</td>
                                <td>
                                    <div class="d-inline">
                                        <a href="#" class="d-inline">
                                            <button type="button" class="btn-sm btn-danger" onclick="show_confirmation_message('Are you sure you want to delete this workshop ?',{{$workshop->id}})">
                                                <i class="fa-solid fa-trash mx-1 fs-5"></i>
                                            </button>
                                        </a>
                                    
                                        <a href="route" hidden>
                                            <form action="{{ route('workshops.destroy', $workshop->id) }}" method="post" style="display: inline-block; width: auto;">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn-sm btn-danger" id="delete_confirm_{{$workshop->id}}">Delete</button>
                                            </form>
                                        </a>
                                    </div>
                                    <div class="d-inline">
                                        <a href="#" class="d-inline">
                                            <button type="button" class="btn-sm btn-warning" onclick="openUpdateModal({{$workshop->id}})">
                                                <i class="bi bi-pencil-fill "></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>


              <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">UCA-DHBW Portail</a>, All Right Reserved. 
                        </div>

                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
                    <!-- Start Update  Modal -->
                    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="addTeacherModalLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addTeacherModalLabel" style="color:black;">Update exchange</h5>

                                </div>
                                    <div class="modal-body">
                                        
                                        <form action="{{ route('workshops.update',1) }}" method="POST" enctype="multipart/form-data" id="update_form">
                                            @csrf
                                            @method('PUT')
                                            @if ($errors->any())
                                                <div class="alert alert-danger text-light ">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <span>{{ $error }}</span> <br>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <!-- row goes here -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="title">Title</label>
                                                        <input type="text" class="form-control" style="background-color:#ffffff;" id="title_update" name="title" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="partner_id">Partner</label>
                                                        <select class="form-select" aria-label="Default select example" style="background-color:#ffffff;" id="partner_id_update" name="partner_id" required>
                                                            <option disabled>Choose a partner</option>
                                                            @foreach($partners as $partner)
                                                                <option value="{{$partner->id}}">{{$partner->name_company}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <input type="text" class="form-control" style="background-color:#ffffff;" id="description_update" name="description" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="university">University</label>
                                                        <select class="form-select" aria-label="Default select example" style="background-color:#ffffff;" id="university_update" name="university" required>
                                                            <option  disabled>Choose University</option>
                                                            <option value="UCA">UCA</option>
                                                            <option value="DHBW">DHBW</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="country">Country</label>
                                                        <input type="text" class="form-control" style="background-color:#ffffff;" id="country_update" name="country" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="city">City</label>
                                                        <input type="text" class="form-control" style="background-color:#ffffff;" id="city_update" name="city" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date_start">Start date</label>
                                                        <input type="date" class="form-control" style="background-color:#ffffff;" id="date_start_update" name="date_start" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date_end">End date</label>
                                                        <input type="date" class="form-control" style="background-color:#ffffff;" id="date_end_update" name="date_end" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="type">Type</label>
                                                        <input type="text" class="form-control" style="background-color:#ffffff;" id="type_update" name="type" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="image_workshop">Workshop image</label>
                                                        <input type="file" class="form-control" id="image_workshop_update" name="image_workshop">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="close btn btn-danger float-end mt-3"  data-dismiss="modal" style="margin-left:10px !important;">Cancel</button>
                                            <button type="submit" class="btn btn-success float-end mt-3">update workshop</button>
                                            <!-- end row-->
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
            <!-- End Update  Modal -->
      @include('back/confirmation_modal')
    @include('back/logout_confirmation')
    <!-- JavaScript Libraries -->
    <!-- Add these to your layout file -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="back/lib/chart/chart.min.js"></script>
    <script src="back/lib/easing/easing.min.js"></script>
    <script src="back/lib/waypoints/waypoints.min.js"></script>
    <script src="back/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="back/lib/tempusdominus/js/moment.min.js"></script>
    <script src="back/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="back/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="back/js/main.js"></script>
    <script>
        function openUpdateModal(workshopId) {
            // Find the table row with the corresponding workshopId
            let tableRow =  $("#" + workshopId);

            // Extract data from the table row
            let workshopData = {
                partner_id: tableRow.find("td:eq(2)").text(),
                title: tableRow.find("td:eq(3)").text(),
                description: tableRow.find("td:eq(4)").text(),
                university: tableRow.find("td:eq(5)").text(),
                country: tableRow.find("td:eq(6)").text(),
                city: tableRow.find("td:eq(7)").text(),
                date_start: tableRow.find("td:eq(8)").text(),
                date_end: tableRow.find("td:eq(9)").text(),
                type: tableRow.find("td:eq(10)").text(),
                
                // Add other fields as needed
            };
            console.log(workshopData);

            let form=document.getElementById("update_form");
            let action= form.getAttribute("action");
            form.setAttribute("action",action.substring(0, action.lastIndexOf("/"))+"/"+workshopId);

            // Update modal fields
            $("#partner_id_update").val(workshopData.partner_id);
            $("#title_update").val(workshopData.title);
            $("#description_update").val(workshopData.description);
            $("#university_update").val(workshopData.university);
            $("#country_update").val(workshopData.country);
            $("#city_update").val(workshopData.city);
            $("#date_start_update").val(workshopData.date_start);
            $("#date_end_update").val(workshopData.date_end);
            $("#type_update").val(workshopData.type);
           

            // Open the modal
            $("#updateModal").modal("show");
        }
    </script>
</body>

</html>