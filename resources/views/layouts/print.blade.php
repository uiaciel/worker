<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico">
    <!-- Libs CSS -->
    {{-- <link href="./assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link href="./assets/libs/dropzone/dist/dropzone.css"  rel="stylesheet">
    <link href="./assets/libs/prismjs/themes/prism-okaidia.css" rel="stylesheet"> --}}
    <!-- Theme CSS -->
    <link href="/css/materialdesignicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/themes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">

    <title>PT. ANGKASA AKBAR TARUNA - Internal System</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />

    <script src="/tinymce/tinymce.min.js"></script>
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript">
        tinymce.init({
            selector: '#mytextarea',
            plugins: 'table advtable',
            menubar: 'file edit insert view format table tools help'
        });
    </script>
    <style>
        .select2-selection--multiple {
            overflow: hidden !important;
            height: auto !important;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="/css/select2-bootstrap.css" />
    <style>
        .page {

            display: block;
            margin: 0 auto;
            padding: 5px 25px;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);

            box-sizing: border-box;
            font-size: 12pt;
        }

        .page[size="A4"] {
            width: 21cm;
            height: 29.7cm;
        }

        .page[size="A4"][layout="landscape"] {
            width: 29.7cm;
            height: 21cm;
        }

        @media print {


            .page-break {
                display: block;
                page-break-before: always;
            }

        }

        @media print {
            body {
                margin: 0;
                padding: 0;
            }

            @page {
                margin: 1cm 1cm;
            }

            .page[size="A4"] {
                /* padding-top: 40px; */
                box-shadow: none;
                margin: 0;
                width: auto;
                height: auto;
                page-break-before: auto;
                page-break-after: always;
            }

            .page[size="A4"][layout="landscape"] {
                /* padding-top: 40px; */
                box-shadow: none;
                margin: 0;
                width: auto;
                height: auto;
                page-break-before: auto;
                page-break-after: always;
            }

            .noprint {
                display: none;
            }

            .enable-print {
                display: block;
            }

            table {
                max-width: 2480px;
                width: 100%;
            }

            table td {
                width: auto;
                overflow: hidden;
                word-wrap: break-word;
            }
        }
    </style>
</head>


<body>
    <nav class="navbar navbar-expand-sm navbar-dark d-print-none" style="background-color: #000000;">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Home <span
                            class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container-fluid bg-secondary">
        <div class="row">

            <div class="col-md-12 bg-white">
                @yield('content')
            </div>
        </div>
    </div>

</body>

</html>
