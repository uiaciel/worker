@extends('layouts.main-nav')
@section('content')
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    {{-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul> --}}
                    <form class="d-flex justify-content-center">



                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6 text-dark">

        <div class="row">
            <div class="col-md-2">
                <div class="d-grid gap-2">
                    <a href="/crew" class="btn btn-white" style="width:150px;">Dashboard</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Select Crew</label>
                    <select class="form-select select2"
                        onChange="window.document.location.href=this.options[this.selectedIndex].value;">
                        <option value="/crew/{{ $crew->subid }}">{{ $crew->subid }}-{{ $crew->name }}
                        </option>
                        @foreach ($crews as $crewx)
                            <option value="/crew/{{ $crewx->subid }}">{{ $crewx->subid }}-{{ $crewx->name }}
                            </option>
                        @endforeach

                        <option>asdfsadf</option>
                    </select>
                </div>

            </div>
            <div class="col-md-2">
                <div class="d-grid gap-2">
                    <a href="" class="btn btn-white" type="button">Add New Crew</a>

                </div>
            </div>
            <div class="col-md-2">
                <div class="d-grid gap-2">
                    <button class="btn btn-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                        Print
                    </button>
                </div>

            </div>
        </div>


        <!-- row  -->
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header bg-white  py-4">
                        <div class="d-flex">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a id="active" href="#profiles" class="nav-link active" data-bs-toggle="tab"
                                        role="tab">Crew Profiles</a>
                                </li>
                                <li class="nav-item">
                                    <a id="tab-B" href="#document" class="nav-link" data-bs-toggle="tab"
                                        role="tab">Crew Documents</a>
                                </li>
                                <li class="nav-item">
                                    <a id="tab-B" href="#certificates" class="nav-link" data-bs-toggle="tab"
                                        role="tab">Crew Certificates</a>
                                </li>
                                <li class="nav-item">
                                    <a id="tab-B" href="#medical" class="nav-link" data-bs-toggle="tab"
                                        role="tab">Crew Medicals</a>
                                </li>
                                <li class="nav-item">
                                    <a id="tab-B" href="#contract" class="nav-link" data-bs-toggle="tab"
                                        role="tab">Crew Contracts</a>
                                </li>
                                <li class="nav-item">
                                    <a id="tab-B" href="#contact" class="nav-link" data-bs-toggle="tab"
                                        role="tab">Crew Contacts</a>
                                </li>
                                <li class="nav-item">
                                    <a id="tab-B" href="#photo" class="nav-link" data-bs-toggle="tab"
                                        role="tab">Crew Photos</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="profiles" class="tab-pane fade active show">
                            <form onsubmit="return confirm('Are you sure?');" action="{{ route('crew.update', $crew->id) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group row mb-0">
                                                <label for="" class="col-sm-4">船員ID番号<br>Crew ID No.</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="subid"
                                                        value="{{ $crew->subid }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group row mb-0">
                                                <label for="" class="col-sm-5">旅券番号<br>Passport No.</label>
                                                <div class="col-sm-7">
                                                    <select class="form-select" name="passport_id">
                                                        @foreach ($docs->where('type', 'Passport') as $passport)
                                                            <option value="{{ $passport->id }}">{{ $passport->no }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group row mb-0">
                                                <label for="" class="col-sm-3"
                                                    style="font-size: 13px;">特記<br>Special
                                                    Remark</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="specialmark"
                                                        value="{{ $crew->specialmark }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group row mb-0">
                                                <label class="col-sm-4">名前<br>Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="name"
                                                        value="{{ $crew->name }}">
                                                </div>
                                                <label for="" class="col-sm-4">出生地<br>Birth Place</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="place"
                                                        value="{{ $crew->place }}">
                                                </div>
                                                <label for="" class="col-sm-4">生年月日<br>Birth Date</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control date"
                                                        placeholder="yyyy/mm/dd" name="birth"
                                                        value="{{ $crew->birth }}">
                                                </div>
                                                <label class="col-sm-4">年齢<br>Age</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control"
                                                        value="{{ \Carbon\Carbon::parse($crew->birth)->diff(\Carbon\Carbon::now())->y }}"
                                                        disabled>
                                                </div>
                                                <label for="" class="col-sm-4">宗教<br>Religion</label>
                                                <div class="col-sm-8">
                                                    <!--<input type="text" class="form-control" name="religion" value="{{ $crew->religion }}">-->
                                                    <select class="form-select" name="religion">
                                                        <option value="{{ $crew->religion }}">{{ $crew->religion }}
                                                        </option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Protestant">Protestant</option>
                                                        <option value="Catholic">Catholic</option>
                                                        <option value="Hinduism">Hinduism</option>
                                                        <option value="Buddhism">Buddhism</option>
                                                        <option value="Khonghucu">Khonghucu</option>
                                                    </select>
                                                </div>

                                                <label class="col-sm-4">身長/体重<br>Height/Weight</label>
                                                <div class="col-sm-8">
                                                    <div class="input-group mb-0">
                                                        <input type="number" class="form-control" name="height"
                                                            value="{{ $crew->height }}">
                                                        <span class="input-group-text fs-5">cm</span>
                                                        <input type="number" class="form-control" name="weight"
                                                            value="{{ $crew->weight }}">
                                                        <span class="input-group-text fs-5">kg</span>
                                                    </div>


                                                </div>
                                                <label class="col-sm-4 fs-6">未婚・既婚<br>Marital
                                                    Status</label>
                                                <div class="col-sm-8">
                                                    <div class="input-group mb-0">
                                                        <select class="form-select" name="kappa">
                                                            <!--<option value="{{ $crew->marital }}">{{ $crew->marital }}</option>-->
                                                            <option value="Married">Married</option>
                                                            <option value="Single">Single</option>
                                                        </select>
                                                        <label
                                                            style="margin-left: 8px;margin-right: 13px;">子供<br>Child</label>
                                                        <input type="text" class="form-control" name="marital"
                                                            value="0">
                                                        <span class="input-group-text">人</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group row mb-0">
                                                <label class="col-sm-5">発給日<br>Issued Date</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control date"
                                                        placeholder="yyyy/mm/dd" id="txtDate" name="passport_issued"
                                                        value="{{ $crew->passport_issued }}">
                                                </div>
                                                <label for="" class="col-sm-5">発給地<br>Issued Place</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" name="passport_place"
                                                        value="{{ $crew->passport_place }}">
                                                </div>
                                                <label for="" class="col-sm-5">有効期限<br>Valid Until</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control date"
                                                        placeholder="yyyy/mm/dd" name="passport_valid"
                                                        value="{{ $crew->passport_valid }}">
                                                </div>
                                                <label class="col-sm-5 fs-6">船員手帳<br>Seaman Book</label>
                                                <div class="col-sm-7">
                                                    <select class="form-select" name="seamanbook_id">
                                                        @foreach ($docs->where('type', 'Seaman Book') as $seaman)
                                                            <option value="{{ $seaman->id }}">{{ $seaman->no }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <label class="col-sm-5">発給日<br>Issued Date</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control date"
                                                        placeholder="yyyy/mm/dd" name="seamanbook_issued"
                                                        value="{{ $crew->seamanbook_issued }}">
                                                </div>
                                                <label for="" class="col-sm-5">発給地<br>Issued Place</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" name="seamanbook_place"
                                                        value="{{ $crew->seamanbook_place }}">
                                                </div>
                                                <label for="" class="col-sm-5">有効期限<br>Valid Until</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control date"
                                                        placeholder="yyyy/mm/dd" name="seamanbook_valid"
                                                        value="{{ $crew->seamanbook_valid }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group row mb-0">
                                                <label class="col-sm-5">最終経歴<br>Last Vessel</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control"
                                                        placeholder="ambil dari data">
                                                </div>
                                                <label for="" class="col-sm-5">下船日<br>Sign-Off</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" name="signoff"
                                                        value="{{ $crew->signoff }}" placeholder="ambil dari data">
                                                </div><label for="" class="col-sm-5">新基本給<br>New Salary</label>
                                                <div class="col-sm-7">
                                                    <div class="input-group mb-0">
                                                        <select class="form-control-inline" id="inputGroupSelect02"
                                                            style="margin-right: 1px;width: 40px;border: 1px solid hwb(234deg 0% 45%);border-radius: 0.375rem;">
                                                            <option value="{{ $crew->currencysalary }}">
                                                                {{ $crew->currencysalary }}</option>
                                                            <option value="Rp">Rp (Indonesian Rupiah)</option>
                                                            <option value="RM">RM (Malaysian Ringgit)</option>
                                                            <option value="B$">B$ (Brunei Dollar)</option>
                                                            <option value="S$">S$ (Singapore Dollar)</option>
                                                            <option value="₱">₱ (Philippine Peso)</option>
                                                            <option value="฿">฿ (Thai Baht)</option>
                                                            <option value="៛">៛ (Cambodian Riel)</option>
                                                            <option value="₫">₫ (Vietnamese Dong)</option>
                                                            <option value="₭">₭ (Lao Kip)</option>
                                                            <option value="Ks">Ks (Myanmar Kyat)</option>
                                                            <option value="৳">৳ (Bangladeshi Taka)</option>
                                                            <option value="₹">₹ (Indian Rupee)</option>
                                                            <option value="Rs">Rs (Pakistani & Sri Lankan Rupee)
                                                            </option>
                                                            <option value="SAR">SAR (Saudi Riyal)</option>
                                                            <option value="AED">AED (UAE Dirham)</option>
                                                            <option value="BD">BD (Bahrain Dinar)</option>
                                                            <option value="QR">QR (Qatari Riyal)</option>
                                                            <option value="¥">¥ (Japanese Yen & Chinese Yuan)</option>
                                                            <option value="₩">₩ (Korean Won)</option>
                                                            <option value="₽">₽ (Russian Ruble)</option>
                                                            <option value="₴">₴ (Ukrainian Hrynia)</option>
                                                            <option value="US$">US$ (US Dollar)</option>
                                                            <option value="CA$">CA$ (Canadian Dollar)</option>
                                                            <option value="AU$">AU$ (Australian Dollar)</option>
                                                            <option value="NZ$">NZ$ (New Zealand Dollar)</option>
                                                            <option value="HK$">HK$ (Hong Kong Dollar)</option>
                                                            <option value="€">€ (Euro)</option>
                                                            <option value="Fr">Fr (Swiss Franc)</option>
                                                            <option value="£">£ (British Pound Sterling)</option>
                                                        </select>
                                                        <input type="text" class="form-control" name="salary"
                                                            value="{{ $crew->salary }}">
                                                    </div>
                                                </div>
                                                <label for="" class="col-sm-5">職種<br>Job</label>
                                                <div class="col-sm-7">
                                                    <select class="form-select" name="job_id">
                                                        <option value="">{{ $crew->job->code }}</option>
                                                        @foreach ($jobs as $job)
                                                            <option value="{{ $job->id }}">{{ $job->code }}
                                                                ({{ $job->name }})
                                                            </option>
                                                        @endforeach
                                                        {{-- <option value="DECK">DECK</option>
                                                        <option value="ENGINE">ENGINE</option>
                                                        <option value="ASSISTANT ICE MASTER">ASSISTANT ICE MASTER</option>
                                                        <option value="ICE MASTER">ICE MASTER</option>
                                                        <option value="ASSISTANT COOK">ASSISTANT COOK</option>
                                                        <option value="CHIEF COOK">CHIEF COOK</option>
                                                        <option value="BOSUN">BOSUN</option>
                                                        <option value="QUARTER MASTER">QUARTER MASTER</option> --}}
                                                    </select>
                                                </div><label for="" class="col-sm-5">足のサイズ<br>Shoes Size</label>
                                                <div class="col-sm-7">
                                                    <!--<input type="text" class="form-control"  name="shoes" value="{{ $crew->shoes }}">-->
                                                    <select class="form-select" name="shoes">
                                                        <option value="{{ $crew->shoes }}">{{ $crew->shoes }}</option>
                                                        <option value="S">S</option>
                                                        <option value="M">M</option>
                                                        <option value="L">L</option>
                                                        <option value="XL">XL</option>
                                                        <option value="XXL">XXL</option>
                                                    </select>
                                                </div><label for="" class="col-sm-5">手袋<br>Glove Size</label>
                                                <div class="col-sm-7">
                                                    <!--<input type="text" class="form-control"  name="glove" value="{{ $crew->glove }}">-->
                                                    <select class="form-select" name="glove">
                                                        <option value="{{ $crew->glove }}">{{ $crew->glove }}</option>
                                                        <option value="S">S</option>
                                                        <option value="M">M</option>
                                                        <option value="L">L</option>
                                                        <option value="XL">XL</option>
                                                        <option value="XXL">XXL</option>
                                                    </select>
                                                </div><label for="" class="col-sm-5">カッパ<br>Kappa Size</label>
                                                <div class="col-sm-7">
                                                    <!--<input type="text" class="form-control"  name="kappa" value="{{ $crew->kappa }}">-->
                                                    <select class="form-select" name="kappa">
                                                        <option value="{{ $crew->kappa }}">{{ $crew->kappa }}</option>
                                                        <option value="S">S</option>
                                                        <option value="M">M</option>
                                                        <option value="L">L</option>
                                                        <option value="XL">XL</option>
                                                        <option value="XXL">XXL</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <img src="/img/foto-4x6.png" alt="..." class="img-thumbnail"
                                                style="width: 200px;">
                                            <div class="mt-2"
                                                style="position: absolute;margin-top: -20px !important;width: 180px;margin-left: 10px;">
                                                <input class="form-control form-control-sm" id="formFileSm"
                                                    name="photo" type="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            {{-- marital status --}}

                                            <div class="form-group row mb-0">
                                                <label class="col-sm-4">入国査証<br>Entry Visa</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control date"
                                                        placeholder="yyyy/mm/dd" name="visa_issued"
                                                        value="{{ $crew->visa_valid }}">

                                                </div>
                                                <label class="col-sm-4">入国査証番号<br>Entry Visa No.</label>
                                                <div class="col-sm-8">
                                                    {{-- <input type="text" class="form-control" name="visa_id" --}}
                                                    {{-- value="{{ $crew->visa_id }}"> --}}
                                                    <select class="form-select" name="job_id">
                                                        @foreach ($jobs as $job)
                                                            <option value="{{ $job->id }}">{{ $job->code }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <label class="col-sm-4">発給日<br>Issued Date</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control date"
                                                        placeholder="yyyy/mm/dd" name="visa_issued"
                                                        value="{{ $crew->visa_valid }}">
                                                </div>
                                                <label class="col-sm-4">有効期限<br>Valid Until</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control date"
                                                        placeholder="yyyy/mm/dd" name="visa_valid"
                                                        value="{{ $crew->visa_valid }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5"
                                                    style=" font-size: smaller; ">オレンジブック<br>Orange Book</label>
                                                <div class="col-sm-7">
                                                    <select class="form-select" name="orangebook_id">
                                                        @foreach ($docs->where('type', 'Orange Book') as $orange)
                                                            <option value="{{ $orange->id }}">{{ $orange->no }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <label class="col-sm-5">発給日<br>Issued Date</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control date"
                                                        placeholder="yyyy/mm/dd" name="orangebook_issued"
                                                        value="{{ $crew->orangebook_issued }}">
                                                </div>
                                                <label for="" class="col-sm-5">発給地<br>Issued Place</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" name="orangebook_place"
                                                        value="{{ $crew->orangebook_place }}">
                                                </div>
                                                <label for="" class="col-sm-5">有効期限<br>Valid Until</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control date"
                                                        placeholder="yyyy/mm/dd" name="orangebook_valid"
                                                        value="{{ $crew->orangebook_valid }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group row mb-0">
                                                <label for="" class="col-sm-3">備考<br>Remark</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" name="remark" rows="3">{{ $crew->remark }}</textarea>
                                                </div>
                                                <label for="" class="col-sm-3">免状等<br>License</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="license"
                                                        value="{{ $crew->license }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mt-6">

                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>

                            </form>
                            <div class="card">

                                <div class="card-body">
                                    <span>{{ \Carbon\Carbon::parse($tahun)->format('Y') }} 年以降の乗船経歴</span>
                                    <h5>Experience since {{ \Carbon\Carbon::parse($tahun)->format('Y') }}</h5>
                                    <table class="table tableexp text-nowrap p-0">
                                        <thead>
                                            <tr>
                                                <th>船名<br>Vessel Name</th>
                                                <th>所属<br>Affiliation</th>
                                                <th>乗船日<br>Sign On</th>
                                                <th>下船日<br>Sign Off</th>
                                                <th>乗船期限（月）<br>Period (Month)</th>
                                                <th>基本給<br>Salary</th>
                                                <th>ボーナス<br>Bonus</th>
                                                <th>職種<br>Job</th>
                                                <th>船籍<br>Ship Flag</th>
                                                <th>凍結・生<br>Raw Freezing</th>
                                                <th>種別<br>Type</th>
                                                <th>主漁場<br>F/G</th>
                                                <th>トン数<br>Tonnage</th>
                                                <th>漁労長<br>F/M</th>
                                                <th>寒冷<br>Cold Area</th>
                                                <th>下船理由<br>Disembark.<br>Reason</th>
                                                <th>評価<br>Grade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($exp as $exp)
                                                <tr>
                                                    <td>{{ $exp->shipname->name }}</td>
                                                    <td>{{ $exp->affiliation }}</td>
                                                    <td>{{ $exp->signon }}</td>
                                                    <td>{{ $exp->signoff }}</td>
                                                    <td>{{ $exp->periode }}</td>
                                                    <td>{{ $exp->currencysalary }} {{ $exp->salary }}</td>
                                                    <td>{{ $exp->currencybonus }} {{ $exp->bonus }}</td>
                                                    <td>{{ $exp->job->code }}</td>
                                                    <td>{{ $exp->shipflag }}</td>
                                                    <td>{{ $exp->freezer }}</td>
                                                    <td>{{ $exp->type }}</td>
                                                    <td>{{ $exp->fishingground }}</td>
                                                    <td>{{ $exp->tonnage }}</td>
                                                    <td>{{ $exp->fishingmaster }}</td>
                                                    <td>{{ $exp->coldarea }}</td>
                                                    <td>{{ $exp->disembark }}</td>
                                                    <td>{{ $exp->grade }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <button class="btn btn-primary btn-sm mt-3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Add Experience
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div id="certificates" class="tab-pane">
                        <div class="card-body">
                            <h3>船員証明書 (Crew Certificates)</h3>
                            <div class="row mb-5">
                                <hr>
                                <h4>免状証明書 (Certificate of Education)</h4>
                                <div class="col-md-6">
                                    <form>
                                        <input value="{{ $crew->id }}" name="crew_id" hidden>

                                        <div class="mb-3 row">
                                            <label for="phone" class="col-sm-4 col-form-label form-label">証明書伍
                                                (PDF)<br />Certificate File (PDF)</label>
                                            <div class="col-md-8 col-12">
                                                <input type="file" class="form-control-file" name="file"
                                                    id="path" placeholder="" aria-describedby="fileHelpId">
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="location"
                                                class="col-sm-4 col-form-label
                                      form-label">証明書方

                                                <br />Certificate Type</label>
                                            <div class="col-md-8 col-12">
                                                <select class="form-select" id="location" name="type">
                                                    <option selected="">==Select==</option>
                                                    <option>SD/MI</option>
                                                    <option>SMP/MTs</option>
                                                    <option>SMA/MA/STM/SMK</option>
                                                    <option>D-1</option>
                                                    <option>D-2</option>
                                                    <option>D-3</option>
                                                    <option>D-IV</option>
                                                    <option>S-1</option>
                                                    <option>S-2</option>
                                                    <option>S-3</option>

                                                </select>
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="addressLine"
                                                class="col-sm-4 col-form-label
                                      form-label">証明書号
                                                <br />Certificate No.</label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                      col-form-label form-label">発給日
                                                <br />Issued Date</label>
                                            <div class="col-md-8 col-12">

                                                <input type="text" class="form-control date" name="date"
                                                    placeholder="yyyy/mm/dd">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                      col-form-label form-label">発給地
                                                <br />Issued Place</label>
                                            <div class="col-md-8 col-12">

                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <!-- row -->
                                        <div class="d-grid gap-2">

                                            <button class="btn btn-primary" type="submit">Upload</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Certificate Type</th>
                                                <th>Certificate No.</th>
                                                <th>Issued Date</th>
                                                <th>Issued Place</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group mb-3">
                                                            <a href="" class="btn btn-sm btn-outline-primary"
                                                                target="_blank">View</a>

                                                            <form method="POST">

                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-sm btn-outline-danger"
                                                                    type="submit" id="button-addon2">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <hr>
                                    <h4>能力証明書 (Certificate of Competence)</h4>
                                    <form>
                                        <input value="{{ $crew->id }}" name="crew_id" hidden>

                                        <div class="mb-3 row">
                                            <label for="phone" class="col-sm-4 col-form-label form-label">証明書伍
                                                (PDF)<br />Certificate File (PDF)</label>
                                            <div class="col-md-8 col-12">
                                                <input type="file" class="form-control-file" name="file"
                                                    id="path" placeholder="" aria-describedby="fileHelpId">
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="location"
                                                class="col-sm-4 col-form-label
                                      form-label">証明書方<br />Certificate
                                                Type</label>
                                            <div class="col-md-8 col-12">
                                                <select class="form-select" id="location" name="type">
                                                    <option selected="">==Select==</option>
                                                    <option value='Rating Forming Deck'>Rating Forming Deck</option>
                                                    <option value='Rating Able Deck'>Rating Able Deck</option>
                                                    <option value='ANT-V'>ANT-V (Ahli Nautika Tingkat V)</option>
                                                    <option value='ANT-IV'>ANT-IV (Ahli Nautika Tingkat IV)</option>
                                                    <option value='ANT-III'>ANT-III (Ahli Nautika Tingkat III)</option>
                                                    <option value='ANT-II'>ANT-II (Ahli Nautika Tingkat II)</option>
                                                    <option value='ANT-I'>ANT-I (Ahli Nautika Tingkat I)</option>
                                                    <option value='Rating Forming Engine'>Rating Forming Engine</option>
                                                    <option value='Rating Able Engine'>Rating Able Engine</option>
                                                    <option value='ATT-V'>ATT-V (Ahli Teknika Tingkat V)</option>
                                                    <option value='ATT-IV'>ATT-IV (Ahli Teknika Tingkat IV)</option>
                                                    <option value='ATT-III'>ATT-III (Ahli Teknika Tingkat III)</option>
                                                    <option value='ATT-II'>ATT-II (Ahli Teknika Tingkat II)</option>
                                                    <option value='ATT-I'>ATT-I (Ahli Teknika Tingkat I)</option>
                                                    <option value='SOT'>SOT (Sertifikat Operator Terbatas)</option>
                                                    <option value='SOU'>SOU (Sertifikat Operator Umum)</option>
                                                    <option value='SRE-II'>SRE-II (Sertifikat Radio Elektronika Kelas II)
                                                    </option>
                                                    <option value='SRE-I'>SRE-I (Sertifikat Radio Elektronika Kelas I)
                                                    </option>
                                                    <option value='ANKAPIN-III'>ANKAPIN-III (Ahli Nautika Kapal Penangkap
                                                        Ikan tingkat III)</option>
                                                    <option value='ANKAPIN-II'>ANKAPIN-II (Ahli Nautika Kapal Penangkap
                                                        Ikan tingkat II)</option>
                                                    <option value='ANKAPIN-I'>ANKAPIN-I (Ahli Nautika Kapal Penangkap Ikan
                                                        tingkat I)</option>
                                                    <option value='ATKAPIN-III'>ATKAPIN-III (Ahli Teknika Kapal Penangkap
                                                        Ikan tingkat III)</option>
                                                    <option value='ATKAPIN-II'>ATKAPIN-II (Ahli Teknika Kapal Penangkap
                                                        Ikan tingkat II)</option>
                                                    <option value='ATKAPIN-I'>ATKAPIN-I (Ahli Teknika Kapal Penangkap Ikan
                                                        tingkat I)</option>


                                                </select>
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="addressLine"
                                                class="col-sm-4 col-form-label
                                      form-label">証明書号
                                                <br />Certificate No.</label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                      col-form-label form-label">発給日
                                                <br />Issued Date</label>
                                            <div class="col-md-8 col-12">

                                                <input type="text" class="form-control date" name="date"
                                                    placeholder="yyyy/mm/dd">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                      col-form-label form-label">発給地
                                                <br />Issued Place</label>
                                            <div class="col-md-8 col-12">

                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                      col-form-label form-label">有効期限
                                                <br />Valid Until</label>
                                            <div class="col-md-8 col-12">

                                                <input type="text" class="form-control date" name="date"
                                                    placeholder="yyyy/mm/dd">
                                            </div>
                                        </div>

                                        <!-- row -->
                                        <div class="d-grid gap-2">

                                            <button class="btn btn-primary" type="submit">Upload</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Certificate Type</th>
                                                <th>Certificate No.</th>
                                                <th>Issued Date</th>
                                                <th>Issued Place</th>
                                                <th>Valid Until</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group mb-3">
                                                            <a class="btn btn-sm btn-outline-primary"
                                                                target="_blank">View</a>

                                                            <form method="POST">

                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-sm btn-outline-danger"
                                                                    type="submit" id="button-addon2">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <hr>
                                    <h4>技能証明書 (Certificate of Proficiency)</h4>
                                    <form>
                                        <input value="{{ $crew->id }}" name="crew_id" hidden>

                                        <div class="mb-3 row">
                                            <label for="phone" class="col-sm-4 col-form-label form-label">証明書伍
                                                (PDF)<br />Certificate File (PDF)</label>
                                            <div class="col-md-8 col-12">
                                                <input type="file" class="form-control-file" name="file"
                                                    id="path" placeholder="" aria-describedby="fileHelpId">
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="location"
                                                class="col-sm-4 col-form-label
                                      form-label">証明書方<br />Certificate
                                                Type</label>
                                            <div class="col-md-8 col-12">
                                                <select class="form-select" id="location" name="type">
                                                    <option selected="">==Select==</option>
                                                    <option value='BST'>BST (Basic Safety Training)</option>
                                                    <option value='SCRB'>SCRB (Survival Craft & Rescue Boats)</option>
                                                    <option value='FRB'>FRB (Fast Rescue Boat)</option>
                                                    <option value='AFF'>AFF (Advance Fire Fighting)</option>
                                                    <option value='MFA'>MFA (Medical First Aid)</option>
                                                    <option value='MC'>MC (Medical Care)</option>
                                                    <option value='SAT'>SAT (Security Awareness Training)</option>
                                                    <option value='SDSD'>SDSD (Seafarers with Designated Security Duties)
                                                    </option>
                                                    <option value='CMT'>CMT (Crowd Management Training)</option>
                                                    <option value='CMHBT'>CMHBT (Crisis Management & Human Behavior
                                                        Training)</option>
                                                    <option value='RADAR'>RADAR Simulator</option>
                                                    <option value='ARPA'>ARPA (Automatic Radar Plotting Aids) Simulator
                                                    </option>
                                                    <option value='ECDIS'>ECDIS (Electronic Chart Display & Information
                                                        System) Simulator</option>
                                                    <option value='GMDSS'>GMDSS (Global Maritime Distress Safety System)
                                                    </option>
                                                    <option value='BRM'>BRM (Bridge Resource Management)</option>
                                                    <option value='ERM'>ERM (Engine Resource Management)</option>
                                                    <option value='SO'>SH (Ship Handling)</option>
                                                    <option value='SSO'>SSO (Ship Security Officer)</option>
                                                    <option value='BOCT'>BOCT (Basic Oil & Chemical Tanker)</option>
                                                    <option value='BLGT'>BLGT (Basic Liquefied Gas Tanker)</option>
                                                    <option value='AOT'>AOT (Advancer Oil Tanker)</option>
                                                    <option value='ACT'>ACT (Advance Chemical Tanker)</option>
                                                    <option value='ALGT'>ALGT (Advance Liquefied Gas Tanker)</option>
                                                    <option value='IMDG'>IMDG (International Maritime Dangerous Goods)
                                                        Code</option>
                                                    <option value='ISM'>IMS (International Safety Management) Code
                                                    </option>
                                                    <option value='MHV'>MHV (Marine High Voltage)</option>


                                                </select>
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="addressLine"
                                                class="col-sm-4 col-form-label
                                      form-label">証明書号<br />Certificate
                                                No.
                                            </label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                      col-form-label form-label">発給日
                                                <br />Issued Date</label>
                                            <div class="col-md-8 col-12">

                                                <input type="text" class="form-control date" name="date"
                                                    placeholder="yyyy/mm/dd">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                      col-form-label form-label">発給地
                                                <br />Issued Place</label>
                                            <div class="col-md-8 col-12">

                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                      col-form-label form-label">有効期限
                                                <br />Valid Until</label>
                                            <div class="col-md-8 col-12">

                                                <input type="text" class="form-control date" name="date"
                                                    placeholder="yyyy/mm/dd">
                                            </div>
                                        </div>

                                        <!-- row -->
                                        <div class="d-grid gap-2">

                                            <button class="btn btn-primary" type="submit">Upload</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Certificate Type</th>
                                                <th>Certificate No.</th>
                                                <th>Issued Date</th>
                                                <th>Issued Place</th>
                                                <th>Valid Until</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group mb-3">
                                                            <a class="btn btn-sm btn-outline-primary"
                                                                target="_blank">View</a>

                                                            <form method="POST">

                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-sm btn-outline-danger"
                                                                    type="submit" id="button-addon2">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="medical" class="tab-pane">
                        <div class="card-body">
                            <h3>船員診療 (Crew Medicals)</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{ route('medical.store') }}" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf
                                        <input value="{{ $crew->id }}" name="crew_id" hidden>

                                        <div class="mb-3 row">
                                            <label for="phone" class="col-sm-4 col-form-label form-label">診療伍
                                                (PDF)<br />Medical File (PDF)</label>
                                            <div class="col-md-8 col-12">
                                                <input type="file" class="form-control-file" name="file"
                                                    id="path" placeholder="" aria-describedby="fileHelpId">
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="location"
                                                class="col-sm-4 col-form-label
                                      form-label">診療方
                                                <br />Medical
                                                Type </label>
                                            <div class="col-md-8 col-12">
                                                <select class="form-select" id="location" name="type">
                                                    <option selected="">==Select==</option>
                                                    <option value="Medical Check-Up (MCU)">Medical Check-Up (MCU)</option>
                                                    <option value="Vaccine">Vaccine</option>
                                                    <option value="Outpatien Care">Outpatient Care</option>
                                                    <option value="Inpatient Care">Inpatient Care</option>

                                                </select>
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="addressLine"
                                                class="col-sm-4 col-form-label
                                      form-label">診療日<br />Medical
                                                Date
                                            </label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control date" name="date"
                                                    placeholder="yyyy/mm/dd">
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                      col-form-label form-label">診断
                                                <br />Diagnosis/Medical Examination</label>
                                            <div class="col-md-8 col-12">

                                                <textarea class="form-control" rows="3" name="description"></textarea>
                                            </div>
                                        </div>

                                        <!-- row -->
                                        <div class="d-grid gap-2">

                                            <button class="btn btn-primary" type="submit">Upload</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <h3>Medicals List</h3>
                                    <div class="table-responsive">
                                        <table class="table table-bordered border-dark">

                                            <thead class="table-dark text-white">
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Medical Type</th>
                                                    <th scope="col">Medical Date</th>
                                                    <th scope="col">Diagnosis/Medical Examination</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($medicals as $index => $medical)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $medical->type }}</td>
                                                        <td>{{ $medical->date }}</td>
                                                        <td>{{ $medical->description }}</td>
                                                        <td>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group mb-3">
                                                                    <a href="{{ $medical->path }}"
                                                                        class="btn btn-sm btn-outline-primary"
                                                                        target="_blank">View</a>

                                                                    <form onclick="return confirm('Are you sure?')"
                                                                        action="{{ route('medical.destroy', $medical->id) }}"
                                                                        method="POST">

                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="btn btn-sm btn-outline-danger"
                                                                            type="submit"
                                                                            id="button-addon2">Delete</button>
                                                                    </form>
                                                                </div>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="contract" class="tab-pane">
                        <div class="card-body">
                            <h3>船員契約 (Crew Contracts)</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{ route('contract.store') }}" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf
                                        <input name="crew_id" value="{{ $crew->id }}" hidden>
                                        <div class="mb-3 row">
                                            <label for="phone" class="col-sm-4 col-form-label form-label">契約伍
                                                (PDF)<br /> Contract File (PDF)</label>
                                            <div class="col-md-8 col-12">
                                                <input type="file" class="form-control-file" name="file"
                                                    id="path" placeholder="" aria-describedby="fileHelpId">
                                            </div>
                                        </div>
                                        <!-- row -->

                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="addressLine"
                                                class="col-sm-4 col-form-label
                                          form-label">契約番号<br />Contract
                                                No.
                                            </label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" name="no" class="form-control"
                                                    id="addressLine" required="">
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                          col-form-label form-label">船名
                                                <br />Vessel Name</label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control" name="vessel_name"
                                                    id="addressLineTwo" required="">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                          col-form-label form-label">派遣日
                                                <br />Embarkation Date</label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" name="embarkation" class="form-control date"
                                                    placeholder="yyyy/mm/dd" id="addressLineTwo" required="">
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="d-grid gap-2">

                                            <button class="btn btn-primary" type="submit">Upload</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <h3>Contracts List</h3>
                                    <div class="table-responsive">
                                        <table class="table table-bordered border-dark">

                                            <thead class="table-dark text-white">
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Contract No.</th>
                                                    <th scope="col">Vessel Name</th>
                                                    <th scope="col">Embarkation Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($contracts as $index => $contract)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $contract->no }}</td>
                                                        <td>{{ $contract->vessel_name }}</td>
                                                        <td>{{ $contract->embarkation }}</td>
                                                        <td>
                                                            <div class="input-group mb-3">
                                                                <a href="{{ $contract->pdf }}"
                                                                    class="btn btn-sm btn-outline-primary"
                                                                    target="_blank">View</a>

                                                                <form onclick="return confirm('Are you sure?')"
                                                                    action="{{ route('medical.destroy', $contract->id) }}"
                                                                    method="POST">

                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-sm btn-outline-danger"
                                                                        type="submit" id="button-addon2">Delete</button>
                                                                </form>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="document" class="tab-pane">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-8">
                                    <h3>Documents List</h3>
                                    <div class="table-responsive">
                                        <table class="table table-bordered border-dark">

                                            <thead class="table-dark text-white">
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Document Type</th>
                                                    <th scope="col">Document No.</th>
                                                    <th scope="col">Issued Date</th>
                                                    <th scope="col">Issued Place</th>
                                                    <th scope="col">Valid Until</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($docs->whereNotIn('type', 'Entry Visa') as $index => $doc)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $doc->type }}</td>
                                                        <td>{{ $doc->no }}</td>
                                                        <td>{{ $doc->issued }}</td>
                                                        <td>{{ $doc->place }}</td>

                                                        <td>{{ $doc->valid }}</td>
                                                        <td>
                                                            <div class="input-group mb-3">
                                                                <a href="{{ $doc->path }}"
                                                                    class="btn btn-sm btn-outline-primary"
                                                                    target="_blank">View</a>

                                                                <form onclick="return confirm('Are you sure?')"
                                                                    action="{{ route('doc.destroy', $doc->id) }}"
                                                                    method="POST">

                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-sm btn-outline-danger"
                                                                        type="submit" id="button-addon2">Delete</button>
                                                                </form>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <h3>船員書類 (Crew Documents)</h3>
                                    <form action="{{ route('doc.store') }}" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf
                                        <input name="crew_id" value="{{ $crew->id }}" hidden>

                                        <div class="row">
                                            <label for="phone" class="col-sm-4 col-form-label form-label">書類伍
                                                (PDF)<br />Document File
                                                (PDF)</label>
                                            <div class="col-md-8 col-12">
                                                <input type="file" class="form-control-file" name="file"
                                                    id="path" placeholder="" aria-describedby="fileHelpId">
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="row">
                                            <label for="location"
                                                class="col-sm-4 col-form-label
                                              form-label">書類方
                                                <br />Document
                                                Type </label>
                                            <div class="col-md-8 col-12">
                                                <select class="form-select" id="location" name="type">
                                                    <option selected>==Select==</option>
                                                    <option value="Passport">Passport</option>
                                                    <option value="Seaman Book">Seaman Book</option>
                                                    <option value="Orange Book">Orange Book</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="row">
                                            <label for="addressLine"
                                                class="col-sm-4 col-form-label
                                              form-label">書類番号<br />Document
                                                No.</label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control" id="addressLine"
                                                    required="" name="no">
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                              col-form-label form-label">発給日
                                                <br />Issued
                                                Date</label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control date" placeholder="yyyy/mm/dd"
                                                    id="addressLineTwo" required="" name="issued">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                              col-form-label form-label">発給地
                                                <br />Issued
                                                Place</label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control" placeholder="Jakarta"
                                                    id="addressLineTwo" name="place" required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                              col-form-label form-label">有効期限<br />Valid
                                                Until</label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" name="valid" class="form-control date"
                                                    placeholder="yyyy/mm/dd" id="addressLineTwo" required="">
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="d-grid gap-2">

                                            <button class="btn btn-primary" type="submit">Upload</button>
                                        </div>

                                    </form>


                                </div>

                            </div>
                            <hr>
                            <div class="row mt-4">
                                <h3>船員入国査証 (Crew Entry Visa)</h3>
                                <div class="col-md-4">

                                    <form action="{{ route('doc.store') }}" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf
                                        <input name="crew_id" value="{{ $crew->id }}" hidden>

                                        <div class="row">
                                            <label for="phone" class="col-sm-4 col-form-label form-label">入国査証伍
                                                (PDF)<br />Entry Visa File
                                                (PDF)</label>
                                            <div class="col-md-8 col-12">
                                                <input type="file" class="form-control-file" name="file"
                                                    id="path" placeholder="" aria-describedby="fileHelpId">
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="row">
                                            <label for="location"
                                                class="col-sm-4 col-form-label
                                              form-label">査証方<br />Visa
                                                Type </label>
                                            <div class="col-md-8 col-12">
                                                <select class="form-select" id="location" name="type">
                                                    <option selected>==Select==</option>
                                                    <option value="Entry Visa">Entry Visa</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="addressLine"
                                                class="col-sm-4 col-form-label
                                              form-label">国<br />Country
                                            </label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control" id="addressLine"
                                                    required="" name="no">
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="row">
                                            <label for="addressLine"
                                                class="col-sm-4 col-form-label
                                              form-label">入国査証<br />Entry
                                                Visa No.</label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control" id="addressLine"
                                                    required="" name="no">
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                              col-form-label form-label">発給日
                                                <br />Issued
                                                Date</label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control date" placeholder="yyyy/mm/dd"
                                                    id="addressLineTwo" required="" name="issued">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                              col-form-label form-label">発給地
                                                <br />Issued
                                                Place</label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control" placeholder="Jakarta"
                                                    id="addressLineTwo" name="place" required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                              col-form-label form-label">有効期限<br />Valid
                                                Until</label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" name="valid" class="form-control date"
                                                    placeholder="yyyy/mm/dd" id="addressLineTwo" required="">
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="d-grid gap-2">

                                            <button class="btn btn-primary" type="submit">Upload</button>
                                        </div>

                                    </form>


                                </div>
                                <div class="col-md-7">
                                    <h3>Entry Visa List</h3>
                                    <div class="table-responsive">
                                        <table class="table table-bordered border-dark">

                                            <thead class="table-dark text-white">
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Country</th>
                                                    <th scope="col">Document No.</th>
                                                    <th scope="col">Issued Date</th>
                                                    <th scope="col">Issued Place</th>
                                                    <th scope="col">Valid Until</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($docs->Where('type', 'Entry Visa') as $index => $doc)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $doc->country }}</td>
                                                        <td>{{ $doc->no }}</td>
                                                        <td>{{ $doc->issued }}</td>
                                                        <td>{{ $doc->place }}</td>

                                                        <td>{{ $doc->valid }}</td>
                                                        <td>
                                                            <div class="input-group mb-3">
                                                                <a href="{{ $doc->path }}"
                                                                    class="btn btn-sm btn-outline-primary"
                                                                    target="_blank">View</a>

                                                                <form onclick="return confirm('Are you sure?')"
                                                                    action="{{ route('doc.destroy', $doc->id) }}"
                                                                    method="POST">

                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-sm btn-outline-danger"
                                                                        type="submit"
                                                                        id="button-addon2">Delete</button>
                                                                </form>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contact" class="tab-pane">
                        <div class="card-body">
                            <h3>船員連絡先 (Crew Contacts)</h3>
                            <div class="row">
                                <div class="col-md-8">
                                    <form action="{{ route('contact.store') }}" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf
                                        <input name="crew_id" value="{{ $crew->id }}" hidden>

                                        <div class="mb-3 row">
                                            <label for="phone" class="col-sm-4 col-form-label form-label">ID伍
                                                (PDF)<br /> ID File (PDF)</label>
                                            <div class="col-md-8 col-12">
                                                <input type="file" class="form-control-file" name="file"
                                                    id="path" placeholder="" aria-describedby="fileHelpId">
                                            </div>
                                        </div>
                                        <!-- row -->

                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="addressLine"
                                                class="col-sm-4 col-form-label
                                          form-label">国民ID番号
                                                <br />National ID No.

                                            </label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control" id="addressLine"
                                                    required="">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="phone" class="col-sm-4 col-form-label form-label">ID伍
                                                (PDF)<br /> ID File (PDF)</label>
                                            <div class="col-md-8 col-12">
                                                <input type="file" class="form-control-file" name="file"
                                                    id="path" placeholder="" aria-describedby="fileHelpId">
                                            </div>
                                        </div>

                                        <!-- row -->
                                        <div class="mb-3 row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                          col-form-label form-label">家族ID番号
                                                <br />Family ID No.</label>
                                            <div class="col-md-8 col-12">
                                                <input type="text" class="form-control" id="addressLineTwo"
                                                    required="">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                          col-form-label form-label">携帯番号<br />Mobile
                                                No.</label>
                                            <div class="col-md-8 col-12">
                                                <input type="number" class="form-control" id="addressLineTwo"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="mb-4 row">
                                            <label for="addressLineTwo"
                                                class="col-sm-4
                                          col-form-label form-label">メール<br />Email</label>
                                            <div class="col-md-8 col-12">
                                                <input type="number" class="form-control" id="addressLineTwo"
                                                    required="">
                                            </div>
                                        </div>


                                </div>

                                <div class="col-md-6">
                                    <table class="table table-bordered border-dark">
                                        <thead class="bg-dark text-white">
                                            <tr>
                                                <th>No.</th>
                                                <th>ID Type</th>
                                                <th>ID No.</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">1</td>
                                                <td>National ID</td>
                                                <td></td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group mb-3">
                                                            <a href="https://image.shutterstock.com/image-vector/ktp-indonesia-id-card-260nw-1628461459.jpg"
                                                                class="btn btn-sm btn-outline-primary"
                                                                target="_blank">View</a>

                                                            <form onclick="return confirm('Are you sure?')"
                                                                method="POST">

                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-sm btn-outline-danger"
                                                                    type="submit" id="button-addon2">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="row">2</td>
                                                <td>Family ID</td>
                                                <td></td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group mb-3">
                                                            <a href="https://i.pinimg.com/736x/17/75/dd/1775dd83c315f498397774c634f14267.jpg"
                                                                class="btn btn-sm btn-outline-primary"
                                                                target="_blank">View</a>

                                                            <form onclick="return confirm('Are you sure?')"
                                                                method="POST">

                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-sm btn-outline-danger"
                                                                    type="submit" id="button-addon2">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-4">1緊急連絡先 (Emergency Contact 1):</h4>
                                    <div class="row">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">名前<br>Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="inputPassword">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="staticEmail"
                                            class="col-sm-4 col-form-label">関係<br>Relationship</label>
                                        <div class="col-sm-8">
                                            <select class="form-select" name="">
                                                <option>--SELECT--</option>
                                                <option>Wife</option>
                                                <option>Son</option>
                                                <option>Daughter</option>
                                                <option>Father</option>
                                                <option>Mother</option>
                                                <option>Brother</option>
                                                <option>Sister</option>
                                                <option>Uncle</option>
                                                <option>Auntie</option>
                                                <option>Nephew</option>
                                                <option>Niece</option>
                                                <option>Grandfather</option>
                                                <option>Grandmother</option>
                                                <option>Grandson</option>
                                                <option>Granddaughter</option>
                                                <option>Granduncle</option>
                                                <option>Grandauntie</option>
                                                <option>Grandnephew</option>
                                                <option>Grandniece</option>
                                                <option>Father in Law</option>
                                                <option>Mother in Law</option>
                                                <option>Grandfather in Law</option>
                                                <option>Grandmother in Law</option>
                                                <option>Friend</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">携帯番号<br>Mobile
                                            No.</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="inputPassword">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">メール<br>Email</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="inputPassword">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">2緊急連絡先 (Emergency Contact 2):</h4>
                                    <div class="row">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">名前<br>Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="inputPassword">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="staticEmail"
                                            class="col-sm-4 col-form-label">関係<br>Relationship</label>
                                        <div class="col-sm-8">
                                            <select class="form-select" name="">
                                                <option>--SELECT--</option>
                                                <option>Wife</option>
                                                <option>Son</option>
                                                <option>Daughter</option>
                                                <option>Father</option>
                                                <option>Mother</option>
                                                <option>Brother</option>
                                                <option>Sister</option>
                                                <option>Uncle</option>
                                                <option>Auntie</option>
                                                <option>Nephew</option>
                                                <option>Niece</option>
                                                <option>Grandfather</option>
                                                <option>Grandmother</option>
                                                <option>Grandson</option>
                                                <option>Granddaughter</option>
                                                <option>Granduncle</option>
                                                <option>Grandauntie</option>
                                                <option>Grandnephew</option>
                                                <option>Grandniece</option>
                                                <option>Father in Law</option>
                                                <option>Mother in Law</option>
                                                <option>Grandfather in Law</option>
                                                <option>Grandmother in Law</option>
                                                <option>Friend</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">携帯番号<br>Mobile
                                            No.</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="inputPassword">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="staticEmail" class="col-sm-4 col-form-label">メール<br>Email</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="inputPassword">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid gap-2">

                                <button class="btn btn-primary" type="submit">Upload</button>
                            </div>

                            </form>
                        </div>
                    </div>
                    <div id="photo" class="tab-pane">
                        <div class="card-body">
                            <h3>船員の写真 (Crew Photos)</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <input name="crew_id" value="{{ $crew->id }}" hidden>


                                    <div class="mb-3 row">
                                        <label for="phone" class="col-sm-4 col-form-label form-label">写真伍 (PDF)<br />
                                            Photo File (PDF)</label>
                                        <div class="col-md-8 col-12">
                                            <input type="file" class="form-control-file" name="file"
                                                id="path" placeholder="" aria-describedby="fileHelpId">
                                        </div>
                                    </div>
                                    <!-- row -->

                                    <div class="mb-3 row">
                                        <label for="phone" class="col-sm-4 col-form-label form-label">写真方<br>
                                            Photo Type</label>
                                        <div class="col-md-8 col-12">
                                            <select class="form-control">
                                                <option>--SELECT--</option>
                                                <option>Photo 3x4</option>
                                                <option>Photo 4x6</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="phone" class="col-sm-4 col-form-label form-label">写真日 <br />
                                            Photo Date</label>
                                        <div class="col-md-8 col-12">
                                            <input type="text" class="form-control date" placeholder="yyyy/mm/dd"
                                                aria-describedby="fileHelpId">
                                        </div>
                                    </div>

                                    <div class="d-grid gap-2">

                                        <button class="btn btn-primary" type="submit">Upload</button>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <table class="table table-bordered border-dark">
                                        <thead class="bg-dark text-white">
                                            <tr>
                                                <th>No.</th>
                                                <th>Photo Type</th>
                                                <th>Photo Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">1</td>
                                                <td>Photo 3x4</td>
                                                <td></td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group mb-3">
                                                            <a href="https://image.shutterstock.com/image-vector/ktp-indonesia-id-card-260nw-1628461459.jpg"
                                                                class="btn btn-sm btn-outline-primary"
                                                                target="_blank">View</a>

                                                            <form onclick="return confirm('Are you sure?')"
                                                                method="POST">

                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-sm btn-outline-danger"
                                                                    type="submit" id="button-addon2">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="row">2</td>
                                                <td>Photo 4x6</td>
                                                <td></td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group mb-3">
                                                            <a href="https://i.pinimg.com/736x/17/75/dd/1775dd83c315f498397774c634f14267.jpg"
                                                                class="btn btn-sm btn-outline-primary"
                                                                target="_blank">View</a>

                                                            <form onclick="return confirm('Are you sure?')"
                                                                method="POST">

                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-sm btn-outline-danger"
                                                                    type="submit" id="button-addon2">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!--card body end-->
        </div>

        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-body">


                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <form action="{{ route('exp.store') }}" method="POST">
                                    @csrf

                                    <div class="row mt-4">
                                        <div class="col-md-4">


                                            <div class="mb-3" hidden>
                                                <label for="crew_id" class="form-label">crew_id</label>
                                                <input type="text" class="form-control" name="crew_id"
                                                    value="{{ $crew->id }}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="crew_id" class="form-label">船名 | Vessel Name</label>
                                                <div class="input-group">
                                                    <select class="form-select select2 w-100"
                                                        data-placeholder="--SELECT--" name="vesselsname">
                                                        <option></option>
                                                        @foreach ($shipnames as $shipname)
                                                            <option value="{{ $shipname->id }}">
                                                                {{ $shipname->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <select class="form-select w-30" name="maru">
                                                        <option value="Maru">Maru</option>
                                                        <option value="">Non Maru</option>
                                                    </select>

                                                    <input type="number" name="shipnumber" max="10000"
                                                        min="0" class="form-control" name="number">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="crew_id" class="form-label">所属 | Affiliation</label>
                                                <select class="form-select" name="affiliation">
                                                    <option>--SELECT--</option>
                                                    <option value="AM">AM (Aomori)</option>
                                                    <option value="CB">CB (Chiba)</option>
                                                    <option value="FS">FS (Fukushima)</option>
                                                    <option value="HK">HK (Hokkaido)</option>
                                                    <option value="IG">IG (Ibaraki)</option>
                                                    <option value="IT">IT (Iwate)</option>
                                                    <option value="KG">KG (Kagoshima)</option>
                                                    <option value="KN">KN (Kanagawa)</option>
                                                    <option value="KO">KO (Kochi)</option>
                                                    <option value="ME">ME (Mie)</option>
                                                    <option value="MGN">MGN (Miyagi North)</option>
                                                    <option value="MGE">MGE (Miyagi East)</option>
                                                    <option value="MGS">MGS (Miyagi South)</option>
                                                    <option value="NS">NS (Nagasaki)</option>
                                                    <option value="SO">SO (Shizuoka)</option>
                                                    <option value="TK">TK (Tokyo)</option>
                                                    <option value="TYツナ">TYツナ (Toshin Tuna)</option>
                                                    <option value="TY">TY (Toshin)</option>
                                                    <option value="TYM">TYM (Toyama)</option>
                                                    <option value="WK">WK (Wakayama)</option>
                                                    <option value="OK">OK (Okinawa)</option>
                                                    <option value="MY">MY (Miyazaki)</option>
                                                    <option value="XYZ">XYZ (Others)</option>


                                                </select>

                                            </div>

                                            <div class="mb-3">
                                                <label for="crew_id" class="form-label">乗船日 | Sign On</label>
                                                <input type="text" class="form-control date"
                                                    placeholder="yyyy/mm/dd/" name="signon">
                                            </div>

                                            <!--<div class="mb-3">-->
                                            <!--  <label for="crew_id" class="form-label">乗船期限（月） | Period (Month)</label>-->
                                            <!--  <input type="text" class="form-control" name="periode" >-->
                                            <!--</div>-->

                                            <div class="mb-3">
                                                <label for="crew_id" class="form-label">下船日 | Sign Off</label>
                                                <input type="text" class="form-control date"
                                                    placeholder="yyyy/mm/dd/" name="signoff">
                                            </div>

                                            <div class="mb-3">
                                                <label for="crew_id" class="form-label">基本給 | Salary</label>
                                                <div class="input-group">
                                                    <select class="form-select" name="currencysalary"
                                                        id="inputGroupSelect02">
                                                        <option value="{{ $crew->currencysalary }}">
                                                            {{ $crew->currencysalary }}
                                                        </option>
                                                        @foreach ($currencies as $currency)
                                                            <option value="{{ $currency->symbol }}">
                                                                {{ $currency->name }}</option>
                                                        @endforeach
                                                        {{-- <option value="Rp">Rp (Indonesian Rupiah)</option>
                                                        <option value="RM">RM (Malaysian Ringgit)</option>
                                                        <option value="B$">B$ (Brunei Dollar)</option>
                                                        <option value="S$">S$ (Singapore Dollar)</option>
                                                        <option value="₱">₱ (Philippine Peso)</option>
                                                        <option value="฿">฿ (Thai Baht)</option>
                                                        <option value="៛">៛ (Cambodian Riel)</option>
                                                        <option value="₫">₫ (Vietnamese Dong)</option>
                                                        <option value="₭">₭ (Lao Kip)</option>
                                                        <option value="Ks">Ks (Myanmar Kyat)</option>
                                                        <option value="৳">৳ (Bangladeshi Taka)</option>
                                                        <option value="₹">₹ (Indian Rupee)</option>
                                                        <option value="Rs">Rs (Pakistani & Sri Lankan Rupee)
                                                        </option>
                                                        <option value="SAR">SAR (Saudi Riyal)</option>
                                                        <option value="AED">AED (UAE Dirham)</option>
                                                        <option value="BD">BD (Bahrain Dinar)</option>
                                                        <option value="QR">QR (Qatari Riyal)</option>
                                                        <option value="¥">¥ (Japanese Yen & Chinese Yuan)
                                                        </option>
                                                        <option value="₩">₩ (Korean Won)</option>
                                                        <option value="₽">₽ (Russian Ruble)</option>
                                                        <option value="₴">₴ (Ukrainian Hrynia)</option>
                                                        <option value="US$">US$ (US Dollar)</option>
                                                        <option value="CA$">CA$ (Canadian Dollar)</option>
                                                        <option value="AU$">AU$ (Australian Dollar)</option>
                                                        <option value="NZ$">NZ$ (New Zealand Dollar)</option>
                                                        <option value="HK$">HK$ (Hong Kong Dollar)</option>
                                                        <option value="€">€ (Euro)</option>
                                                        <option value="Fr">Fr (Swiss Franc)</option>
                                                        <option value="£">£ (British Pound Sterling)</option> --}}
                                                    </select>
                                                    <input type="number" class="form-control" name="salary">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="crew_id" class="form-label">ボーナス | Bonus</label>
                                                <div class="input-group">
                                                    <select class="form-select" name="currencybonus"
                                                        id="inputGroupSelect02">
                                                        <option value="Rp">Rp (Indonesian Rupiah)</option>
                                                        <option value="RM">RM (Malaysian Ringgit)</option>
                                                        <option value="B$">B$ (Brunei Dollar)</option>
                                                        <option value="S$">S$ (Singapore Dollar)</option>
                                                        <option value="₱">₱ (Philippine Peso)</option>
                                                        <option value="฿">฿ (Thai Baht)</option>
                                                        <option value="៛">៛ (Cambodian Riel)</option>
                                                        <option value="₫">₫ (Vietnamese Dong)</option>
                                                        <option value="₭">₭ (Lao Kip)</option>
                                                        <option value="Ks">Ks (Myanmar Kyat)</option>
                                                        <option value="৳">৳ (Bangladeshi Taka)</option>
                                                        <option value="₹">₹ (Indian Rupee)</option>
                                                        <option value="Rs">Rs (Pakistani & Sri Lankan Rupee)
                                                        </option>
                                                        <option value="SAR">SAR (Saudi Riyal)</option>
                                                        <option value="AED">AED (UAE Dirham)</option>
                                                        <option value="BD">BD (Bahrain Dinar)</option>
                                                        <option value="QR">QR (Qatari Riyal)</option>
                                                        <option value="¥">¥ (Japanese Yen & Chinese Yuan)
                                                        </option>
                                                        <option value="₩">₩ (Korean Won)</option>
                                                        <option value="₽">₽ (Russian Ruble)</option>
                                                        <option value="₴">₴ (Ukrainian Hrynia)</option>
                                                        <option value="US$">US$ (US Dollar)</option>
                                                        <option value="CA$">CA$ (Canadian Dollar)</option>
                                                        <option value="AU$">AU$ (Australian Dollar)</option>
                                                        <option value="NZ$">NZ$ (New Zealand Dollar)</option>
                                                        <option value="HK$">HK$ (Hong Kong Dollar)</option>
                                                        <option value="€">€ (Euro)</option>
                                                        <option value="Fr">Fr (Swiss Franc)</option>
                                                        <option value="£">£ (British Pound Sterling)</option>
                                                    </select>
                                                    <input type="number" class="form-control" name="bonus">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="crew_id" class="form-label">職種 | Job</label>
                                                <select class="form-control" name="job">
                                                    <option>--SELECT--</option>

                                                    @foreach ($jobs as $job)
                                                        <option value="{{ $job->id }}">{{ $job->code }}
                                                            ({{ $job->name }})
                                                        </option>
                                                    @endforeach


                                                </select>

                                            </div>
                                            <div class="mb-3">
                                                <label for="crew_id" class="form-label">船籍 | Ship Flag</label>
                                                <select class="form-control" name="shipflag">
                                                    <option>--SELECT--</option>
                                                    <option value="IDN">IDN (Indonesia)</option>
                                                    <option value="MLY">MLY (Malaysia)</option>
                                                    <option value="SIN">SIN (Singapore)</option>
                                                    <option value="JPN">JPN (Japan)</option>
                                                    <option value="KOR">KOR (Korea)</option>
                                                    <option value="TWN">TWN (Taiwan)</option>
                                                    <option value="CHI">CHI (China)</option>
                                                    <option value="IND">IND (India)</option>
                                                    <option value="PAK">PAK (Pakistan)</option>
                                                    <option value="ARB">ARB (Saudi Arabia)</option>
                                                    <option value="AUS">AUS (Australia)</option>
                                                    <option value="NZL">NZL (New Zealand)</option>
                                                    <option value="UKE">UKE (UK/England)</option>
                                                    <option value="USA">USA (USA/America)</option>
                                                    <option value="RUS">RUS (Rusia)</option>
                                                    <option value="SPN">SPN (Spain)</option>
                                                    <option value="POR">POR (Portugal)</option>
                                                    <option value="MLT">MLT (Malta)</option>
                                                    <option value="HND">HND (Honduras)</option>
                                                    <option value="PNM">PNM (Panama)</option>
                                                    <option value="FJI">FJI (Fiji)</option>
                                                    <option value="VAN">VAN (Vanuatu)</option>
                                                    <option value="PLY">PLY (Polynesia)</option>
                                                    <option value="MCR">MCR (Micronesia)</option>
                                                    <option value="XYZ">XYZ (Others)</option>
                                                </select>

                                            </div>
                                            <div class="mb-3">
                                                <label for="crew_id" class="form-label">凍結・生 | Raw
                                                    Freezing</label>

                                                <select class="form-control" name="freezer">
                                                    <option>--SELECT--</option>
                                                    <option value="FRZ">FRZ (Frozen Fish)</option>
                                                    <option value="FF">FF (Fresh FIsh)</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="crew_id" class="form-label">種別 | Type</label>
                                                <select class="form-control" name="type">
                                                    <option>--SELECT--</option>
                                                    <option value="LL">LL (Longline)</option>
                                                    <option value="TRW">TRW (Trawl)</option>
                                                    <option value="PS">PS (Purse Seine)</option>
                                                    <option value="PL">PL (Pole & Line)</option>
                                                    <option value="JG">JG (Jigger)</option>
                                                    <option value="FC">FC (Fishing Carrier)</option>
                                                    <option value="FRV">FRV (Fishery Research Vessel)</option>
                                                    <option value="FTV">FTV (Fishery Training Vessel)</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="crew_id" class="form-label">主漁場 | Fishing
                                                    Ground</label>
                                                <select class="form-control" name="fishingground">
                                                    <option>--SELECT--</option>
                                                    <option value="C">C (Off Las Palmas)</option>
                                                    <option value="D">D (Off New Zealand)</option>
                                                    <option value="E">E (Japan)</option>
                                                    <option value="F">F (Tasmania)</option>
                                                    <option value="G">G (Peru)</option>
                                                    <option value="H">H (Hawaii)</option>
                                                    <option value="I">I (Indian)</option>
                                                    <option value="J">J (Jawa)</option>
                                                    <option value="K">K (Cape Town)</option>
                                                    <option value="O">O (Noumea)</option>
                                                    <option value="V">V (South Tuna)</option>
                                                    <option value="W">W (Canada/Iceland)</option>
                                                    <option value="W">X (Others)</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="crew_id" class="form-label">トン数 | Tonnage</label>
                                                <input type="number" class="form-control" name="tonnage">
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="crew_id" class="form-label">漁労長 | Fishing
                                                    Master</label>
                                                <select class="form-control" name="fishingmaster">
                                                    <option>--SELECT--</option>
                                                    <option value="IDN">IDN (Indonesia)</option>
                                                    <option value="MLY">MLY (Malaysia)</option>
                                                    <option value="SIN">SIN (Singapore)</option>
                                                    <option value="JPN">JPN (Japan)</option>
                                                    <option value="KOR">KOR (Korea)</option>
                                                    <option value="TWN">TWN (Taiwan)</option>
                                                    <option value="CHI">CHI (China)</option>
                                                    <option value="IND">IND (India)</option>
                                                    <option value="PAK">PAK (Pakistan)</option>
                                                    <option value="ARB">ARB (Saudi Arabia)</option>
                                                    <option value="AUS">AUS (Australia)</option>
                                                    <option value="NZL">NZL (New Zealand)</option>
                                                    <option value="UKE">UKE (UK/England)</option>
                                                    <option value="USA">USA (USA/America)</option>
                                                    <option value="RUS">RUS (Rusia)</option>
                                                    <option value="SPN">SPN (Spain)</option>
                                                    <option value="POR">POR (Portugal)</option>
                                                    <option value="MLT">MLT (Malta)</option>
                                                    <option value="HND">HND (Honduras)</option>
                                                    <option value="PNM">PNM (Panama)</option>
                                                    <option value="FJI">FJI (Fiji)</option>
                                                    <option value="VAN">VAN (Vanuatu)</option>
                                                    <option value="PLY">PLY (Polynesia)</option>
                                                    <option value="MCR">MCR (Micronesia)</option>
                                                    <option value="XYZ">XYZ (Others)</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="crew_id" class="form-label">寒冷 | Cold Area</label>

                                                <select class="form-control" name="coldarea">
                                                    <option>--SELECT--</option>
                                                    <option value="YES">YES</option>
                                                    <option value="NO">NO</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="crew_id" class="form-label">下船理由 | Disembark.
                                                    Reason</label>

                                                <select class="form-control" name="disembark">
                                                    <option>--SELECT--</option>
                                                    <option value="Y">Y (Finished/Completed)</option>
                                                    <option value="N">N (Going Ashore Midway)</option>
                                                    <option value="ND">ND (Caused by Sickness)</option>
                                                    <option value="NI">NI (Caused by Injury)</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="crew_id" class="form-label">評価 | Grade</label>
                                                <input type="text" class="form-control" name="grade">
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
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

    </div>
    <!-- row  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pilih Document</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Document</label>
                        <select class="form-control" name="" id="">
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <section class="row">
        <div class="card border-primary" style="
    background-color: #f2f7ff;
    border-radius: 0;">
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

    </section>
    <!-- Modal -->
    <div class="modal fade" id="expmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Experience to Crew ID {{ $crew->subid }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <style>
        table,
        th,
        td {
            border: 1px solid;
        }

        .tableexp {
            table-layout: fixed;
            color: #000;
            border-color: #000;

        }

        .tableexp thead th {
            font-weight: 500;
            padding: 0;

            font-size: 0.6rem;
            text-align: center !important;
            vertical-align: middle;


            /* color: #637381; */
        }

        .tableexp tbody td {
            font-weight: 500;
            padding: 0;
            font-size: 0.6rem;
            text-align: center !important;
            vertical-align: middle;
        }



        .form-control {
            color: black;
            border: 1px solid hwb(234deg 0% 45%);
        }

        .input-group-text {
            color: black;
            border: 1px solid hwb(234deg 0% 45%);
        }

        .form-select {
            color: black;
            border: 1px solid hwb(234deg 0% 45%);
        }

        .select2-container--open {
            z-index: 9999999
        }

        .select2-container--bootstrap .select2-selection {
            color: black;
            border: 1px solid hwb(234deg 0% 45%);
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.date').datepicker({
                format: "yyyy/mm/dd",
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".select2").select2({
                tags: true,
                theme: "bootstrap"
            });
        });
    </script>
@endsection
