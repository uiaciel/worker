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

    <title>PT AKBAR ANGKASA TARUNA - Internal System</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />

    <script src="/tinymce/tinymce.min.js"></script>
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
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
    <!--<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="/css/select2-bootstrap.css" />

</head>

<body class="bg-light">
    @include('sweetalert::alert')
    @yield('content')

    <!-- Libs JS -->
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.date').datepicker({
                format: "yyyy/mm/dd",
            });
        });
    </script>
    <script>
        $(document).ready(() => {
            $('#images').change(function() {
                const file = this.files[0];
                console.log(file);
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(event) {
                        console.log(event.target.result);
                        $('#imgPreview').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
</body>

</html>
