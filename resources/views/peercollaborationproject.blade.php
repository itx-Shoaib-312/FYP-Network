@extends('dashboard')
@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <style>
        body{
            background-color: #00a1b4;
        }
        .cardcontent h3{
            color: white;
        }
        .cardcontent h5{
            color: #00A1B4;
        }
        .inputfeilsset{
            border: 1px solid #D9D9D9;
            border-radius: 5px;
            background-color: #CDE8EB;
        }
        .inputfeilsset input{
            background-color: #CDE8EB;
        }
        .inputfeilsset input:focus{
            border: none;
            box-shadow: none;
            outline: none;
        }
        .inputfeilsset button:focus{
            border: none;
        }
        .inputfeilsset button.active{
            border: none;
        }
        .addnewcard{
            background-color: transparent;
            border: 1px dashed white;
        }
        .addbtn{
            color: #00A1B4;
        }
        .maincardd{
            background-color: #F2F6FA;
        }
    </style>


<div class="maincontainer">

    <div class="container py-5 cardcontent">



        <h3>Project</h3>
        <div class="row pt-3">



            <!-- Add new card section -->
            <div class="col-md-4 mt-3 cardadbefore">
                <div class="card rounded-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            @foreach ($get as $data)

                            <div class="col-md-4 mt-3">
                                <div class="card rounded-4 maincardd">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <a href="{{ route('member',['id'=>$data->id]) }}">
                                                    <h5>{{ $data->title }}</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" onclick="confirmDelete()">
                                                <!-- Delete button SVG for new card -->
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.5 14.25C4.5 15.075 5.175 15.75 6 15.75H12C12.825 15.75 13.5 15.075 13.5 14.25V5.25H4.5V14.25ZM14.25 3H11.625L10.875 2.25H7.125L6.375 3H3.75V4.5H14.25V3Z"
                                                        fill="#CD0303" fill-opacity="0.8" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="input-group my-4 rounded-3 inputfeilsset">
                                        <input type="text" class="form-control border-0" readonly
                                            placeholder="Nouman Imran" aria-label="Recipient's username
                                          " aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn" type="button" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <!-- Placeholder SVG for another action -->
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0.25 11.0949V13.3749C0.25 13.5849 0.415 13.7499 0.625 13.7499H2.905C3.0025 13.7499 3.1 13.7124 3.1675 13.6374L11.3575 5.45488L8.545 2.64238L0.3625 10.8249C0.2875 10.8999 0.25 10.9899 0.25 11.0949ZM13.5325 3.27988C13.602 3.21049 13.6572 3.12808 13.6948 3.03735C13.7325 2.94662 13.7518 2.84936 13.7518 2.75113C13.7518 2.6529 13.7325 2.55564 13.6948 2.46491C13.6572 2.37418 13.602 2.29177 13.5325 2.22238L11.7775 0.46738C11.7081 0.397852 11.6257 0.342692 11.535 0.305055C11.4442 0.267419 11.347 0.248047 11.2488 0.248047C11.1505 0.248047 11.0533 0.267419 10.9625 0.305055C10.8718 0.342692 10.7894 0.397852 10.72 0.46738L9.3475 1.83988L12.16 4.65238L13.5325 3.27988Z"
                                                        fill="black" fill-opacity="0.47" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>





    {{-- <div class="maincontainer">

       <div class="container py-5 cardcontent">



        <h3>Project</h3>
      <div class="row pt-3">



          <!-- Add new card section -->
          <div class="col-md-4 mt-3 cardadbefore">
            <div class="card rounded-4 addnewcard">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div class="pt-2">
                    <h6 class="text-white">Add New Project</h6>
                  </div>
                  <div>
                    <button type="button" class="btn bg-white addbtn" onclick="addNewProject()">+ Add </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
       </div>
    </div> --}}






    <!-- Button trigger modal -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Include SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




<script>
    let projectCount = 1;

    // Function to handle deletion confirmation
    function confirmDelete() {
      // This function can be implemented as per your requirements
      console.log("Delete confirmation function");
    }

    // Function to add a new project card
    function addNewProject() {
      // Create new card HTML
      const newCard = `
        <div class="col-md-4 mt-3">
          <div class="card rounded-4 maincardd">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <h5>Project ${projectCount}</h5>
                </div>
                <div>
                  <a href="#" onclick="confirmDelete()">
                    <!-- Delete button SVG for new card -->
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.5 14.25C4.5 15.075 5.175 15.75 6 15.75H12C12.825 15.75 13.5 15.075 13.5 14.25V5.25H4.5V14.25ZM14.25 3H11.625L10.875 2.25H7.125L6.375 3H3.75V4.5H14.25V3Z" fill="#CD0303" fill-opacity="0.8"/>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="input-group my-4 rounded-3 inputfeilsset">
                <input type="text" class="form-control border-0" readonly placeholder="Nouman Imran" aria-label="Recipient's username
                " aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <!-- Placeholder SVG for another action -->
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.25 11.0949V13.3749C0.25 13.5849 0.415 13.7499 0.625 13.7499H2.905C3.0025 13.7499 3.1 13.7124 3.1675 13.6374L11.3575 5.45488L8.545 2.64238L0.3625 10.8249C0.2875 10.8999 0.25 10.9899 0.25 11.0949ZM13.5325 3.27988C13.602 3.21049 13.6572 3.12808 13.6948 3.03735C13.7325 2.94662 13.7518 2.84936 13.7518 2.75113C13.7518 2.6529 13.7325 2.55564 13.6948 2.46491C13.6572 2.37418 13.602 2.29177 13.5325 2.22238L11.7775 0.46738C11.7081 0.397852 11.6257 0.342692 11.535 0.305055C11.4442 0.267419 11.347 0.248047 11.2488 0.248047C11.1505 0.248047 11.0533 0.267419 10.9625 0.305055C10.8718 0.342692 10.7894 0.397852 10.72 0.46738L9.3475 1.83988L12.16 4.65238L13.5325 3.27988Z" fill="black" fill-opacity="0.47"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      `;

      // Append new card to the row
      const row = document.querySelector('.cardadbefore');
      row.insertAdjacentHTML('beforebegin', newCard);

      // Increment project count for the next project
      projectCount++;
    }
  </script>



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

<script>
  function confirmDelete() {
    Swal.fire({
      title: 'Are you sure?',
      text: "you want to delete",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes'
    }).then((result) => {
      if (result.isConfirmed) {
        // Here you can perform the delete operation
        Swal.fire(
          'Deleted!',
          'Your item has been deleted.',
          'success'
        );
        // For demonstration purposes, we'll just log a message
        console.log('Item deleted');
      }
    });
  }
</script>

@endsection
