

@extends('dashboard')


<style>
    body {
        background-color: #00a1b4;
    }

    .cardcontent h3 {
        color: white;
    }

    .cardcontent h5 {
        color: #00A1B4;
    }

    .inputfeilsset {
        border: 1px solid #D9D9D9;
        border-radius: 5px;
        background-color: #CDE8EB;
    }

    .inputfeilsset input {
        background-color: #CDE8EB;
    }

    .inputfeilsset input:focus {
        border: none;
        box-shadow: none;
        outline: none;
    }

    .inputfeilsset button:focus {
        border: none;
    }

    .inputfeilsset button.active {
        border: none;
    }

    .addnewcard {
        background-color: transparent;
        border: 1px dashed white;
    }

    .addbtn {
        color: #00A1B4;
    }

    .addbtncard {
        background-color: #00A1B4;
        color: white;
    }

    .maincardd {
        background-color: #F2F6FA;
    }

    .addbtncardsecond {
        background-color: #00A1B4;
        color: white;
        display: none;
    }

    .formmenber label {
        color: #00ABBF;
        font-size: 18px;
        font-weight: 600;
    }

    .formmenber input {
        border-radius: 7px;
        background-color: #F2F6FA;
    }

    .formmenber textarea {
        border-radius: 7px;
        background-color: #F2F6FA;
    }

    .checkbx label {
        color: #00A1B4;
    }

    .desccon {
        border-radius: 12px;
        background-color: #F2F6FA;
        padding: 15px;
    }

    .desccon button {
        background-color: white;
        text-align: start;
        color: #00A1B4;
        border-radius: 12px;
    }

    .searchmaster input::placeholder {
        color: white;
    }

    .searchmaster input:focus {
        box-shadow: none;
        outline: none;
        border-color: white;
    }

    hr {
        color: white;
    }

    .badgset img {
        width: 50px;
    }

    .profileimg img {
        width: 50px;

    }
</style>

<style>
    .popupenter {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .popupenter-content {
        background-color: #fefefe;
        margin: 20% auto;
        padding: 20px;
        width: 60%;
    }

    .closeenter {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .closeenter:hover,
    .closeenter:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
@section('content')

    <div class="maincontainer">

        <div class="container py-5 cardcontent">



            <h3>Member</h3>

            <div class="row pt-3 justify-content-center mt-5">
                <div class="col-md-6 col-lg-3 mt-3">
                    <div class="card rounded-4 maincardd">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>{{ $mem_1->name }}</h5>
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

                            <div class="cardadbefore">

                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn addbtncard btn-primary" onclick="addNewProject(this)">+ Add
                                    Card</button>
                                <button type="button" class="btn addbtncardsecond btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addDetails" style="display:none">Add Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mt-3">
                    <div class="card rounded-4 maincardd">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>{{ $mem_2->name }}</h5>
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

                            <div class="cardadbefore">

                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn addbtncard btn-primary" onclick="addNewProject(this)">+ Add
                                    Card</button>
                                <button type="button" class="btn addbtncardsecond btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addDetails" style="display:none">Add Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mt-3">
                    <div class="card rounded-4 maincardd">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>{{ $mem_3->name }}</h5>
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

                            <div class="cardadbefore">

                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn addbtncard btn-primary" onclick="addNewProject(this)">+ Add
                                    Card</button>
                                <button type="button" class="btn addbtncardsecond btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addDetails" style="display:none">Add Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add new card section -->

            </div>
        </div>
    </div>



    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="addDetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <form action="{{ route('add-member-details') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                {{-- <input type="hidden" name="member_id" id=""> --}}
                                <div class="mb-3 formmenber">
                                    <label for="exampleInputEmail1" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control"
                                        placeholder="Add Title" id="exampleInputEmail1" aria-describedby="emailHelp">

                                </div>
                                <div class="mb-3 formmenber">
                                    <label for="exampleInputEmail1" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" rows="8" placeholder="Add Description "
                                        id="floatingTextarea"></textarea>
                                </div>
                                {{-- <div class="mb-3 formmenber">
                                <label for="exampleInputEmail1" class="form-label">Checklist</label>
                                <button type="button" class="btn addbtncard" onclick="openpopupenter()">+ Add
                                    New</button>
                            </div> --}}

                                <div id="popupenter" class="popupenter">
                                    <div class="popupenter-content">
                                        <span class="closeenter" onclick="closeenterpopupenter()">&times;</span>

                                        <label for="exampleInputEmail1" class="form-label">CheckBox Name</label>
                                        <br>
                                        <input type="text" id="checkboxName" placeholder="Enter checkbox name">
                                        <br>
                                        <br>
                                        <button class="btn btn-success" onclick="addCheckbox()">Add Checkbox</button>
                                    </div>
                                </div>

                                <div class="form-check checkbx mb-3" id="checkboxContainer">

                                </div>


                                <div class="mb-3 formmenber">
                                    {{-- <label for="exampleInputEmail1" class="form-label">Activity</label>
                                <input type="text" class="form-control" placeholder="Write Comment here"
                                    id="exampleInputEmail1" aria-describedby="emailHelp"> --}}

                                </div>
                        </div>
                        <div class="col-md-5">
                            <div class="mb-3 formmenber secondsection">
                                <label for="exampleInputEmail1" class="form-label">Activity</label>

                                <div class="desccon">
                                    <button type="button" class="btn mb-3  w-100 btn-lg btn-block"><svg
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_11_174)">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.64039 0.768C10.1327 0.276187 10.8 -5.02998e-05 11.4959 6.86995e-09H19.4999V4.5H23.9999V12.5025C23.9999 13.2 23.7224 13.8675 23.2304 14.361L14.3594 23.22C13.8672 23.7114 13.2001 23.9874 12.5046 23.9874C11.8091 23.9874 11.1421 23.7114 10.6499 23.22L7.21039 19.7805L5.27089 17.841L0.770893 13.341C0.52711 13.0972 0.33373 12.8079 0.201795 12.4894C0.0698596 12.1709 0.00195313 11.8295 0.00195312 11.4847C0.00195312 11.14 0.0698596 10.7986 0.201795 10.4801C0.33373 10.1616 0.52711 9.87226 0.770893 9.6285L9.64039 0.768ZM17.2499 2.25V4.5H15.9959C15.3 4.49995 14.6327 4.77619 14.1404 5.268L5.27089 14.1285C5.18089 14.2185 5.09839 14.313 5.02339 14.4135L2.36089 11.7495C2.29082 11.6792 2.25147 11.584 2.25147 11.4847C2.25147 11.3855 2.29082 11.2903 2.36089 11.22L11.2304 2.3595C11.2653 2.3247 11.3067 2.29712 11.3522 2.27833C11.3978 2.25954 11.4466 2.24991 11.4959 2.25H17.2499ZM8.79889 18.189L6.86089 16.2495C6.79082 16.1792 6.75147 16.084 6.75147 15.9847C6.75147 15.8855 6.79082 15.7903 6.86089 15.72L15.7304 6.8595C15.7653 6.8247 15.8067 6.79711 15.8522 6.77833C15.8978 6.75954 15.9466 6.74991 15.9959 6.75H21.7499V12.5025C21.75 12.5518 21.7404 12.6006 21.7216 12.6461C21.7028 12.6917 21.6752 12.7331 21.6404 12.768L12.7694 21.63C12.6991 21.7001 12.6039 21.7394 12.5046 21.7394C12.4054 21.7394 12.3102 21.7001 12.2399 21.63L8.79889 18.189ZM17.9999 12C18.3977 12 18.7792 11.842 19.0606 11.5607C19.3419 11.2794 19.4999 10.8978 19.4999 10.5C19.4999 10.1022 19.3419 9.72065 19.0606 9.43934C18.7792 9.15804 18.3977 9 17.9999 9C17.6021 9 17.2205 9.15804 16.9392 9.43934C16.6579 9.72065 16.4999 10.1022 16.4999 10.5C16.4999 10.8978 16.6579 11.2794 16.9392 11.5607C17.2205 11.842 17.6021 12 17.9999 12Z"
                                                    fill="#00A1B4" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_11_174">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        Labels</button>

                                    <button type="button" class="btn mb-3  w-100 btn-lg btn-block">
                                        {{-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 4.125C10.22 4.125 8.47992 4.65284 6.99987 5.64177C5.51983 6.63071 4.36628 8.03631 3.68509 9.68085C3.0039 11.3254 2.82567 13.135 3.17294 14.8808C3.5202 16.6266 4.37737 18.2303 5.63604 19.489C6.89472 20.7476 8.49836 21.6048 10.2442 21.9521C11.99 22.2993 13.7996 22.1211 15.4442 21.4399C17.0887 20.7587 18.4943 19.6052 19.4832 18.1251C20.4722 16.6451 21 14.905 21 13.125C20.9973 10.7389 20.0482 8.45129 18.361 6.76405C16.6737 5.07682 14.3861 4.12773 12 4.125ZM12 19.875C10.665 19.875 9.35994 19.4791 8.24991 18.7374C7.13987 17.9957 6.27471 16.9415 5.76382 15.7081C5.25293 14.4747 5.11925 13.1175 5.3797 11.8081C5.64015 10.4988 6.28303 9.29603 7.22703 8.35203C8.17104 7.40803 9.37377 6.76515 10.6831 6.5047C11.9925 6.24425 13.3497 6.37792 14.5831 6.88881C15.8165 7.39971 16.8707 8.26487 17.6124 9.3749C18.3541 10.4849 18.75 11.79 18.75 13.125C18.748 14.9146 18.0362 16.6303 16.7708 17.8958C15.5053 19.1612 13.7896 19.873 12 19.875ZM15.4209 9.32906C15.5258 9.43358 15.609 9.55777 15.6658 9.69452C15.7226 9.83126 15.7518 9.97787 15.7518 10.1259C15.7518 10.274 15.7226 10.4206 15.6658 10.5574C15.609 10.6941 15.5258 10.8183 15.4209 10.9228L12.7959 13.5478C12.5846 13.7592 12.298 13.8779 11.9991 13.8779C11.7002 13.8779 11.4135 13.7592 11.2022 13.5478C10.9908 13.3365 10.8721 13.0498 10.8721 12.7509C10.8721 12.4521 10.9908 12.1654 11.2022 11.9541L13.8272 9.32906C13.9317 9.22418 14.0559 9.14097 14.1926 9.08419C14.3294 9.0274 14.476 8.99818 14.6241 8.99818C14.7721 8.99818 14.9187 9.0274 15.0555 9.08419C15.1922 9.14097 15.3164 9.22418 15.4209 9.32906ZM8.625 1.5C8.625 1.20163 8.74353 0.915483 8.95451 0.704505C9.16549 0.493526 9.45164 0.375 9.75 0.375H14.25C14.5484 0.375 14.8345 0.493526 15.0455 0.704505C15.2565 0.915483 15.375 1.20163 15.375 1.5C15.375 1.79837 15.2565 2.08452 15.0455 2.2955C14.8345 2.50647 14.5484 2.625 14.25 2.625H9.75C9.45164 2.625 9.16549 2.50647 8.95451 2.2955C8.74353 2.08452 8.625 1.79837 8.625 1.5Z"
                                            fill="#00A1B4" />
                                    </svg>


                                    Timeline</button> --}}
                                        <div class="mb-3 formmenber">
                                            <label for="exampleInputEmail1" class="form-label">
                                                <i class="far fa-clock"></i> TimeLine</label>
                                            <input type="date" name="date" class="form-control"
                                                placeholder="Write Comment here" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">

                                        </div>
                                        {{-- <button type="button" class="btn mb-3  w-100 btn-lg btn-block">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 12.5C2 9.46 4.46 7 7.5 7H18C20.21 7 22 8.79 22 11C22 13.21 20.21 15 18 15H9.5C8.83696 15 8.20107 14.7366 7.73223 14.2678C7.26339 13.7989 7 13.163 7 12.5C7 11.837 7.26339 11.2011 7.73223 10.7322C8.20107 10.2634 8.83696 10 9.5 10H17V12H9.41C8.86 12 8.86 13 9.41 13H18C19.1 13 20 12.1 20 11C20 9.9 19.1 9 18 9H7.5C5.57 9 4 10.57 4 12.5C4 14.43 5.57 16 7.5 16H17V18H7.5C4.46 18 2 15.54 2 12.5Z"
                                            fill="#00A1B4" />
                                    </svg>



                                    Attachment</button> --}}

                                        <div class="mb-3 formmenber">
                                            <label for="exampleInputEmail1" class="form-label">
                                                <i class="fa fa-paperclip"></i> Attactment</label>
                                            <input type="file" name="file" class="form-control"
                                                placeholder="Write Comment here" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">

                                        </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Add Details</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <!-- Button trigger modal -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

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
        function addNewProject(button) {
            // Get reference to the parent card of the button clicked
            const card = button.closest('.maincardd');

            // Create new input HTML
            const newInput = `
      @foreach ($detail as $mem_detail)

<div class="input-group my-4 rounded-3 inputfeilsset bg-transparent">
    <input type="text" class="form-control border-0 bg-transparent" value={{ $mem_detail->title }} readonly placeholder=" " aria-label="Recipient's username" aria-describedby="basic-addon2">
    <div class="input-group-append ">
        <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#editdetails{{ $mem_detail->id }}">
<!-- Placeholder SVG for another action -->
<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.25 11.0949V13.3749C0.25 13.5849 0.415 13.7499 0.625 13.7499H2.905C3.0025 13.7499 3.1 13.7124 3.1675 13.6374L11.3575 5.45488L8.545 2.64238L0.3625 10.8249C0.2875 10.8999 0.25 10.9899 0.25 11.0949ZM13.5325 3.27988C13.602 3.21049 13.6572 3.12808 13.6948 3.03735C13.7325 2.94662 13.7518 2.84936 13.7518 2.75113C13.7518 2.6529 13.7325 2.55564 13.6948 2.46491C13.6572 2.37418 13.602 2.29177 13.5325 2.22238L11.7775 0.46738C11.7081 0.397852 11.6257 0.342692 11.535 0.305055C11.4442 0.267419 11.347 0.248047 11.2488 0.248047C11.1505 0.248047 11.0533 0.267419 10.9625 0.305055C10.8718 0.342692 10.7894 0.397852 10.72 0.46738L9.3475 1.83988L12.16 4.65238L13.5325 3.27988Z" fill="black" fill-opacity="0.47"/>
</svg>
</button>
</div>
</div>
<div class="modal fade" id="editdetails{{ $mem_detail->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

    <div class="modal-body">
        <div class="row">
            <div class="col-md-7">
                <form action="{{ route('update-member-details', ['id' => $mem_detail->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    {{-- <input type="hidden" name="member_id" id=""> --}}
                    <div class="mb-3 formmenber">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Add Title" value="{{ $mem_detail->title }}"
                            id="exampleInputEmail1" aria-describedby="emailHelp" readonly>

                    </div>
                    <div class="mb-3 formmenber">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="8" placeholder="Add Description "
                            id="floatingTextarea" readonly>{{ $mem_detail->description }}</textarea>
                    </div>
                    {{-- <div class="mb-3 formmenber">
                        <label for="exampleInputEmail1" class="form-label">Checklist</label>
                        <button type="button" class="btn addbtncard" onclick="openpopupenter()">+ Add
                            New</button>
                    </div> --}}

                    <div id="popupenter" class="popupenter">
                        <div class="popupenter-content">
                            <span class="closeenter" onclick="closeenterpopupenter()">&times;</span>

                            <label for="exampleInputEmail1" class="form-label">CheckBox Name</label>
                            <br>
                            <input type="text" id="checkboxName" placeholder="Enter checkbox name">
                            <br>
                            <br>
                            <button class="btn btn-success" onclick="addCheckbox()">Add Checkbox</button>
                        </div>
                    </div>

                    <div class="form-check checkbx mb-3" id="checkboxContainer">

                    </div>


                    <div class="mb-3 formmenber">
                        {{-- <label for="exampleInputEmail1" class="form-label">Activity</label>
                        <input type="text" class="form-control" placeholder="Write Comment here"
                            id="exampleInputEmail1" aria-describedby="emailHelp"> --}}

                    </div>
            </div>
            <div class="col-md-5">
                <div class="mb-3 formmenber secondsection">
                    <label for="exampleInputEmail1" class="form-label">Activity</label>

                    <div class="desccon">
                        <button type="button" class="btn mb-3  w-100 btn-lg btn-block"><svg width="24"
                                height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_11_174)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9.64039 0.768C10.1327 0.276187 10.8 -5.02998e-05 11.4959 6.86995e-09H19.4999V4.5H23.9999V12.5025C23.9999 13.2 23.7224 13.8675 23.2304 14.361L14.3594 23.22C13.8672 23.7114 13.2001 23.9874 12.5046 23.9874C11.8091 23.9874 11.1421 23.7114 10.6499 23.22L7.21039 19.7805L5.27089 17.841L0.770893 13.341C0.52711 13.0972 0.33373 12.8079 0.201795 12.4894C0.0698596 12.1709 0.00195313 11.8295 0.00195312 11.4847C0.00195312 11.14 0.0698596 10.7986 0.201795 10.4801C0.33373 10.1616 0.52711 9.87226 0.770893 9.6285L9.64039 0.768ZM17.2499 2.25V4.5H15.9959C15.3 4.49995 14.6327 4.77619 14.1404 5.268L5.27089 14.1285C5.18089 14.2185 5.09839 14.313 5.02339 14.4135L2.36089 11.7495C2.29082 11.6792 2.25147 11.584 2.25147 11.4847C2.25147 11.3855 2.29082 11.2903 2.36089 11.22L11.2304 2.3595C11.2653 2.3247 11.3067 2.29712 11.3522 2.27833C11.3978 2.25954 11.4466 2.24991 11.4959 2.25H17.2499ZM8.79889 18.189L6.86089 16.2495C6.79082 16.1792 6.75147 16.084 6.75147 15.9847C6.75147 15.8855 6.79082 15.7903 6.86089 15.72L15.7304 6.8595C15.7653 6.8247 15.8067 6.79711 15.8522 6.77833C15.8978 6.75954 15.9466 6.74991 15.9959 6.75H21.7499V12.5025C21.75 12.5518 21.7404 12.6006 21.7216 12.6461C21.7028 12.6917 21.6752 12.7331 21.6404 12.768L12.7694 21.63C12.6991 21.7001 12.6039 21.7394 12.5046 21.7394C12.4054 21.7394 12.3102 21.7001 12.2399 21.63L8.79889 18.189ZM17.9999 12C18.3977 12 18.7792 11.842 19.0606 11.5607C19.3419 11.2794 19.4999 10.8978 19.4999 10.5C19.4999 10.1022 19.3419 9.72065 19.0606 9.43934C18.7792 9.15804 18.3977 9 17.9999 9C17.6021 9 17.2205 9.15804 16.9392 9.43934C16.6579 9.72065 16.4999 10.1022 16.4999 10.5C16.4999 10.8978 16.6579 11.2794 16.9392 11.5607C17.2205 11.842 17.6021 12 17.9999 12Z"
                                        fill="#00A1B4" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_11_174">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Labels</button>

                        <button type="button" class="btn mb-3  w-100 btn-lg btn-block">
                            {{-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 4.125C10.22 4.125 8.47992 4.65284 6.99987 5.64177C5.51983 6.63071 4.36628 8.03631 3.68509 9.68085C3.0039 11.3254 2.82567 13.135 3.17294 14.8808C3.5202 16.6266 4.37737 18.2303 5.63604 19.489C6.89472 20.7476 8.49836 21.6048 10.2442 21.9521C11.99 22.2993 13.7996 22.1211 15.4442 21.4399C17.0887 20.7587 18.4943 19.6052 19.4832 18.1251C20.4722 16.6451 21 14.905 21 13.125C20.9973 10.7389 20.0482 8.45129 18.361 6.76405C16.6737 5.07682 14.3861 4.12773 12 4.125ZM12 19.875C10.665 19.875 9.35994 19.4791 8.24991 18.7374C7.13987 17.9957 6.27471 16.9415 5.76382 15.7081C5.25293 14.4747 5.11925 13.1175 5.3797 11.8081C5.64015 10.4988 6.28303 9.29603 7.22703 8.35203C8.17104 7.40803 9.37377 6.76515 10.6831 6.5047C11.9925 6.24425 13.3497 6.37792 14.5831 6.88881C15.8165 7.39971 16.8707 8.26487 17.6124 9.3749C18.3541 10.4849 18.75 11.79 18.75 13.125C18.748 14.9146 18.0362 16.6303 16.7708 17.8958C15.5053 19.1612 13.7896 19.873 12 19.875ZM15.4209 9.32906C15.5258 9.43358 15.609 9.55777 15.6658 9.69452C15.7226 9.83126 15.7518 9.97787 15.7518 10.1259C15.7518 10.274 15.7226 10.4206 15.6658 10.5574C15.609 10.6941 15.5258 10.8183 15.4209 10.9228L12.7959 13.5478C12.5846 13.7592 12.298 13.8779 11.9991 13.8779C11.7002 13.8779 11.4135 13.7592 11.2022 13.5478C10.9908 13.3365 10.8721 13.0498 10.8721 12.7509C10.8721 12.4521 10.9908 12.1654 11.2022 11.9541L13.8272 9.32906C13.9317 9.22418 14.0559 9.14097 14.1926 9.08419C14.3294 9.0274 14.476 8.99818 14.6241 8.99818C14.7721 8.99818 14.9187 9.0274 15.0555 9.08419C15.1922 9.14097 15.3164 9.22418 15.4209 9.32906ZM8.625 1.5C8.625 1.20163 8.74353 0.915483 8.95451 0.704505C9.16549 0.493526 9.45164 0.375 9.75 0.375H14.25C14.5484 0.375 14.8345 0.493526 15.0455 0.704505C15.2565 0.915483 15.375 1.20163 15.375 1.5C15.375 1.79837 15.2565 2.08452 15.0455 2.2955C14.8345 2.50647 14.5484 2.625 14.25 2.625H9.75C9.45164 2.625 9.16549 2.50647 8.95451 2.2955C8.74353 2.08452 8.625 1.79837 8.625 1.5Z"
                                    fill="#00A1B4" />
                            </svg>


                            Timeline</button> --}}
                            <div class="mb-3 formmenber">
                                <label for="exampleInputEmail1" class="form-label">
                                    <i class="far fa-clock"></i> TimeLine</label>
                                <input type="date" name="date" class="form-control" value="{{ $mem_detail->date }}"
                                    placeholder="Write Comment here" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                            </div>
                            {{-- <button type="button" class="btn mb-3  w-100 btn-lg btn-block">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 12.5C2 9.46 4.46 7 7.5 7H18C20.21 7 22 8.79 22 11C22 13.21 20.21 15 18 15H9.5C8.83696 15 8.20107 14.7366 7.73223 14.2678C7.26339 13.7989 7 13.163 7 12.5C7 11.837 7.26339 11.2011 7.73223 10.7322C8.20107 10.2634 8.83696 10 9.5 10H17V12H9.41C8.86 12 8.86 13 9.41 13H18C19.1 13 20 12.1 20 11C20 9.9 19.1 9 18 9H7.5C5.57 9 4 10.57 4 12.5C4 14.43 5.57 16 7.5 16H17V18H7.5C4.46 18 2 15.54 2 12.5Z"
                                    fill="#00A1B4" />
                            </svg>



                            Attachment</button> --}}

                            <div class="mb-3 formmenber">
                                <label for="exampleInputEmail1" class="form-label">
                                    <i class="fa fa-paperclip"></i> Attactment</label>
                              <td>
                                <a href="/File/{{ $mem_detail->file }}" download="{{$mem_detail->file}}"> {{ $mem_detail->file }}</a>
                              </td>


                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
@endforeach
`;

            // Append new input to the card
            const cardBody = card.querySelector('.cardadbefore');
            cardBody.insertAdjacentHTML('beforeend', newInput);

            // Hide the current "Add Card" button
            button.style.display = 'none';

            // Show the "Add Details" button
            const addDetailsButton = card.querySelector('.addbtncardsecond');
            addDetailsButton.style.display = 'block';
        }
    </script>


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



    <script>
        function openpopupenter() {
            document.getElementById("popupenter").style.display = "block";
        }

        function closeenterpopupenter() {
            document.getElementById("popupenter").style.display = "none";
        }

        function addCheckbox() {
            var checkboxName = document.getElementById("checkboxName").value;
            if (checkboxName.trim() === "") {
                alert("Please enter a name for the checkbox.");
                return;
            }

            var checkboxContainer = document.getElementById("checkboxContainer");
            var checkboxDiv = document.createElement("div");
            checkboxDiv.classList.add("form-check", "checkbx", "mb-3");
            checkboxDiv.innerHTML = `
<input class="form-check-input" type="checkbox" value="" id="${checkboxName}">
<label class="form-check-label" for="${checkboxName}">
${checkboxName}
</label>
`;
            checkboxContainer.appendChild(checkboxDiv);

            // closeenter the popupenter after adding the checkbox
            closeenterpopupenter();
        }
    </script>

@endsection
