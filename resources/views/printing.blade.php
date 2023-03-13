@extends('layouts.main-nav')
@section('content')
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
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
    <div class="container-fluid mt-4">
        <div class="row">

            <div class="col-md-12 bg-secondary pt-5">
                <div class="a4">
                    <img src="/img/logo.png" class="img-fluid" />
                </div>
                <div class="landscape">
                    <h2>Detail order</h2>
                </div>
            </div>
        </div>
    </div>
    <style>
        .a4 {
            background: white;
            width: 21cm;
            height: 29.7cm;
            display: block;
            margin: 0 auto;
            padding: 10px 25px;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
            overflow-y: scroll;
            box-sizing: border-box;
            font-size: 12pt;
        }

        .landscape {
            background: white;
            height: 21cm;
            width: 29.7cm;
            display: block;
            margin: 0 auto;
            padding: 10px 25px;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
            overflow-y: scroll;
            box-sizing: border-box;
            font-size: 12pt;
        }
    </style>
@endsection
