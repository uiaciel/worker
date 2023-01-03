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
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <title>Homepage | Dash Ui - Bootstrap 5 Admin Dashboard Template</title>
    <script src="/tinymce/tinymce.min.js"></script>
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript">
      tinymce.init({
        selector: '#mytextarea',
        plugins: 'table advtable',
  menubar: 'file edit insert view format table tools help'
      });
      </script>
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>
<body class="bg-light">
 <!-- container -->
 <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
        @yield('content')
    </div>
  </div>
  <!-- Libs JS -->

  <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="/assets/libs/feather-icons/dist/feather.min.js"></script>
  <script src="/assets/libs/prismjs/prism.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
  {{-- <script src="/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
  <script src="/assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
  <script src="/assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script> --}}
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#select2").select2({
  tags: true
});

});
  </script>
  <script>

    $(document).ready(function() {            

      $('#datestart').datepicker({                      

          format: 'yyyy-mm-dd',

          autoclose: true,

      }); 
      $('#dateend').datepicker({                      

format: 'yyyy-mm-dd',

autoclose: true,

}); 


    });

  </script>
  
  
  <!-- Theme JS -->
  <script src="/assets/js/main.js"></script>
</body>