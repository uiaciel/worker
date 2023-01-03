<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    
	<link rel="stylesheet" href="/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css" integrity="sha512-rxThY3LYIfYsVCWPCW9dB0k+e3RZB39f23ylUYTEuZMDrN/vRqLdaCBo/FbvVT6uC2r0ObfPzotsfKF9Qc5W5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://web.kaoskeren.id/admincp/js/core/jquery.3.2.1.min.js"></script>
    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">
    <style>
        @media print {
            body {
                zoom: 80%;
                
            }
            table {
                page-break-inside: avoid;
            }
        }
    </style>
</head>
<body>
	<div id="app">

		<div id="main" class="layout-horizontal">
            <header class="mb-2 d-print-none">
                
                <nav class="main-navbar ">
                    <div class="container">
                        <ul>
                            
                            
                            
                            <li
                                class="menu-item  ">
                                <a href="/crew" class='menu-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            
                            
                            
                            
                            
                            <li
                                class="menu-item active has-sub">
                                <a href="#" class='menu-link'>
                                    <i class="bi bi-grid-1x2-fill"></i>
                                    <span>CREW</span>
                                </a>
                                <div
                                    class="submenu ">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">
                                        
                                        
                                        <ul class="submenu-group">
                                            
                                            <li
                                                class="submenu-item  ">
                                                <a href="/crew"
                                                    class='submenu-link'>All Crew</a>

                                                
                                            </li>
                                            
                                        
                                        
                                            <li
                                                class="submenu-item  ">
                                                <a href="/crew/create"
                                                    class='submenu-link'>Create Crew</a>

                                                
                                            </li>
                                            
                                        
                                        
                                    </div>
                                </div>
                            </li>
                            
                            
                           
                            
                            <li
                                class="menu-item  has-sub">
                                <a href="#" class='menu-link'>
                                    <i class="bi bi-life-preserver"></i>
                                    <span>Support</span>
                                </a>
                                <div
                                    class="submenu ">
                                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                                    <div class="submenu-group-wrapper">
                                        
                                        
                                        <ul class="submenu-group">
                                            
                                            <li
                                                class="submenu-item  ">
                                                <a href="https://zuramai.github.io/mazer/docs"
                                                    class='submenu-link'>Documentation</a>

                                                
                                            </li>
                                            
                                        
                                        
                                            <li
                                                class="submenu-item  ">
                                                <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md"
                                                    class='submenu-link'>Contribute</a>

                                                
                                            </li>
                                            
                                        
                                        
                                            <li
                                                class="submenu-item  ">
                                                <a href="https://github.com/zuramai/mazer#donate"
                                                    class='submenu-link'>Donate</a>

                                                
                                            </li>
                                            
                                        
                                    </div>
                                </div>
                            </li>
                            <li
                                class="menu-item  ">
                                <a href="javascript:if(window.print)window.print()" class='menu-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Print</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>

            </header>
			<div class="content-wrapper container" style="
            max-width: 1246px;
            font-size: 0.8rem;
        ">
                <div class="page-content">

                @yield('content')
                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2022 &copy; japantuna.id | japantuna.co.id</p>
                        </div>
                        <div class="float-end">
                            <p>PT. ANGKASA AKBAR TARUNA (AAT) | PT. JAPAN TUNA INDONESIA (JTI) </p>
                        </div>
                    </div>
                </footer>
                </div>
            </div>
		</div>
		
	</div>
	
	<script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    
	<script src="/assets/vendors/apexcharts/apexcharts.js"></script>
	<script src="/assets/js/pages/dashboard.js"></script>
    <script src="https://web.kaoskeren.id/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/assets/js/mazer.js"></script>
    
	<script>
        $.fn.datepicker.defaults.format = "yyyy-mm-dd";
        $('.datepicker').datepicker();
        

    </script>
    
</body>
</html>
