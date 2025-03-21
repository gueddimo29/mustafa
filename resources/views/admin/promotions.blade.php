<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Promotions</title>

    
<link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  
    <!-- Custom fonts for this template -->
    <link href="/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- begin Add model -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Promotion</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="addPromotion" method="post" enctype='multipart/form-data' id="messageForm">
                @csrf
                <div class="form-group">
                    <label for="sujet">Subject</label>
                    <input type="text" class="form-control" id="sujet" name="sujet" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <div id="editor-container" onchange='okay()'>{!! $message !!}</div>
                </div>
                <textarea id="msg" name="msg" style="display: none;"></textarea>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="dateFin" name="dateFin" required>
                    <label for="dateFin">End Date</label>
                </div>
                
                <div class="input-group">
                    <label class="input-group-text" for="imagePath">
                        <i class="fas fa-images"></i>
                    </label>
                    <input type="file" class="form-control" id="imagePath" name="imagePath" required>
                </div></br></br>
                
                <!--<div class="form-check mt-3">-->
                <!--    <input class="form-check-input" type="checkbox" id="checkedMark" name="checkedMark" onchange='okay()'>-->
                <!--    <label class="form-check-label" for="sendEmail">-->
                <!--        Envoyer Email aux Subscribers-->
                <!--    </label>-->
                <!--</div>-->
                <div>
                    <label for="batchSelect">Select Batch:</label>
                    <select id="batchSelect" class="form-select">
                        <option value="">Select Batch</option>
                        <!-- Batch Options will be dynamically added using backend logic -->
                        @php
                            $totalSubscribers = count($subscribers);
                            $batchNumber = 1;
                        @endphp
                        @for ($i = 0; $i < $totalSubscribers; $i += 475)
                            <option value="{{ $batchNumber }}">{{ 'Batch ' . $batchNumber++ }}</option>
                        @endfor
                    </select>
                </div>
                </br></br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Emails</th>
                                <th >
                                    <div class="form-check" style='visibility:hidden;'>
                                        <input class="form-check-input" type="checkbox" id="checkedall"/>
                                        <label for="checkedall">Select All</label>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <input type="text" id="selectedIds2" name='selectedIds2' style="display: none;"/>
                            @foreach($subscribers as $subscriber)
                            <tr>
                                <td>{{ $subscriber->email }}</td>
                                <td>
                                    <div class="form-check">
                                        <input type="hidden" id="selectedIds"/>
                                        <input 
                                            class="form-check-input checkbox-item" 
                                            type="checkbox" 
                                            name="checkedMark[]" 
                                            value="{{ $subscriber->id }}"/>

                                        <!--<input type="checkbox" class="form-check-input checkbox-item" name="checkedMark[]" value="{{ $subscriber->id }}">-->
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
        </div>
    </div>
    </div>
    <!-- end Add model -->

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-object-group"></i>
                </div>
                <div class="sidebar-brand-text mx-3">HM Tours</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">
                    <i class="fas fa-home"></i>
                    <span>Home</span></a>
            </li>

            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Dashboard
            </div>

            <!-- Nav Item - Subscribers -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/subscribers') }}">
                    <i class="fas fa-envelope"></i>
                    <!-- <i class="fa-solid fa-envelope-circle-check"></i> -->
                    <span>Subscribers</span></a>
            </li>

            <!-- Nav Item - Promotions -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/admin/promotions') }}">
                    <i class="fas fa-bullhorn"></i>
                    <span>Promotions</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ $fullname }}</span>
                                <img class="img-profile rounded-circle"
                                    src="/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-12">
                                    <div style="justify-content:space-between !important;">
                                        <h5 class="m-0 font-weight-bold text-primary">Promotions</h5>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-success btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-plus-circle"></i>
                                            </span>
                                            <span class="text">Add new promotion</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Start date</th>
                                            <th>End date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Image</th>
                                            <th>Start date</th>
                                            <th>End date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach( $promotions as $promotion)
                                        <tr>
                                            <td>
                                                <a href="/public{{ $promotion->imagePath }}">
                                                    <img width="100px" src="/public{{ $promotion->imagePath }}" alt="no image" class="rounded">
                                                </a>
                                            </td>
                                            <td>{{ $promotion->dateInsert }}</td>
                                            <td>{{ $promotion->dateFin }}</td>
                                            <td>
                                                <a href={{ "deletePromotion/".$promotion->id }} class="btn btn-danger btn-circle btn-sm" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
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
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy;  Mahdios 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

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
                    <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/datatables/jquery.dataTables.min.js"></script>
    <script src="/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/datatables-demo.js"></script>
    <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
    <script>
        const quill = new Quill('#editor-container', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{ 'font': [] }],
                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ 'color': [] }, { 'background': [] }],
                    [{ 'align': [] }],
                    ['blockquote', 'code-block'],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                    ['link', 'image'],
                    ['clean']
                ],
            }
        });
        document.getElementById('messageForm').addEventListener('submit', function() {
            let editorContent = document.querySelector('#editor-container').getContents();
            document.getElementById('msg').value = editorContent;
        });
        // document.getElementById('resetButton').addEventListener('click', function() {
        //         quill.setContents([]);
        //         document.getElementById('messageForm').reset();
        //     });
        // document.getElementById('messageForm').addEventListener('click', function() {
        //         let editorContent = document.querySelector('#editor-container').innerHTML;
        //         document.querySelector('#message').value = editorContent;
        //     });
        
    </script>
    <script>
        let selectedIds = new Set(); // Use a Set to store unique selected IDs
        
        function okay(){
            let editorContent = quill.root.innerHTML;
            msg = editorContent.replace(/class="([^"]*)"/g, function (match, classNames) {
                let styles = '';
            
                if (classNames.includes('ql-align-center')) styles += 'text-align:center;';
                if (classNames.includes('ql-align-right')) styles += 'text-align:right;';
                if (classNames.includes('ql-align-justify')) styles += 'text-align:justify;';
                if (classNames.includes('ql-align-left')) styles += 'text-align:left;';
                if (classNames.includes('ql-font-monospace')) styles += 'font-family:monospace;';
                if (classNames.includes('ql-size-large')) styles += 'font-size:18px;';
        
                return styles ? `style="${styles}"` : '';
            });
            document.getElementById('msg').value = msg;
        }
        const table = $('#dataTable').DataTable();
        table.on('change', '.checkbox-item', function () {
            const id = this.value;
            if (this.checked) {
                selectedIds.add(id); // Add the checkbox's value to the Set
            } else {
                selectedIds.delete(id); // Remove the checkbox's value from the Set
            }
            document.getElementById('selectedIds').value =JSON.stringify(Array.from(selectedIds));
            document.getElementById('selectedIds2').value=document.getElementById('selectedIds').value;
            okay();
        });

        document.getElementById('batchSelect').addEventListener('change', function () {
            selectedBatchStart = parseInt(document.getElementById('batchSelect').value)-1;
                const start = selectedBatchStart*475;
                const end = (selectedBatchStart+1)*475;
            table.rows().every(function () {
                const rowNode = this.node();
                const rowIndex = this.index();
                const checkbox = rowNode.querySelector('.checkbox-item');
                const isChecked = this.checked;
                const id = checkbox.value;
                
                if(rowIndex>=start && rowIndex<end){
                    checkbox.checked = true;
                    selectedIds.add(id);
                }else{
                    checkbox.checked = false;
                    selectedIds.delete(id);
                }
            });
            
            document.getElementById('selectedIds').value = JSON.stringify(Array.from(selectedIds));
            document.getElementById('selectedIds2').value=document.getElementById('selectedIds').value;
            okay();
        });

        document.getElementById('checkedall').addEventListener('change', function () {
            selectedBatchStart = parseInt(document.getElementById('batchSelect').value);
            const isChecked = this.checked;
            table.rows().every(function () {
                const rowNode = this.node();
                const rowIndex = this.index();
                const checkbox = rowNode.querySelector('.checkbox-item');
                if (checkbox) {
                    checkbox.checked = isChecked;
                    const id = checkbox.value;
                    if (isChecked) {
                        selectedIds.add(id);
                    } else {
                        selectedIds.delete(id);
                    }
                }
            });
            
            document.getElementById('selectedIds').value = JSON.stringify(Array.from(selectedIds));
            document.getElementById('selectedIds2').value=document.getElementById('selectedIds').value;
            okay();
        });
        



    </script>

</body>

</html>