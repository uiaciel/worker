<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico">
    <link rel="stylesheet" href="/css/themes.css">
    <title>Laravel</title>
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css" />
</head>
<style>
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 10pt "Tahoma";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        padding: 5mm;
        margin: 10mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {}
    .tableFixHead {
        table-layout: fixed;
        border-collapse: collapse;
    }
    .tableFixHead tbody {
        display: block;
        width: 100%;
        overflow: auto;
        height: 140px;
    }
    .tableFixHead thead tr {
        display: block;
    }
    .tableFixHead th,
    .tableFixHead td {
        width: 230px;
    }
    th {
        background: #ABDD93;
    }
    }
    @page {
        size: A4 Landscape;
        margin: 0;
    }
    @media print {
        html,
        body {
            width: 297mm;
            height: 210mm;
            font: 8pt "Tahoma";
        }
        ::-webkit-scrollbar {
            display: none;
            .page {
                size: A4 landscape;
                margin-top: 1cm;
                margin-left: 2cm;
                margin-right: 2cm;
                margin-bottom: 2cm;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }
</style>
<body class="bg-light">
    <div class="book">
        @foreach ($ordercrew as $index => $crew)
            <div class="page">
                <div class="row">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <!--                      <div class="input-group">-->
                                    <!--  <span class="input-group-text" id="basic-addon1">To:</span>-->
                                    <!--  <select class="form-select select2" aria-label="Default select example">-->
                                    <!--  <option selected>Open this select menu</option>-->
                                    <!--  @foreach ($usr as $user)
-->
                                    <!--  <option value="1">{{ $user->email }}</option>-->
                                    <!--
@endforeach-->
                                    <!--  <option value="2">FUJI BUSHANG</option>-->
                                    <!--  <option value="3">YAMADA SHUISANG</option>-->
                                    <!--</select>-->
                                    <!--   <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">-->
                                    <!--</div>-->
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">To:</span>
                                        <input type="text" class="form-control"
                                            placeholder="JAPAN TUNA FISHERIES CORPORATION (JTFC)" aria-label="Username"
                                            aria-describedby="basic-addon1">
                                    </div>
                </div>
                </td>
                <td class="text-end">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">From:</span>
                        <input type="date" class="form-control">
                    </div>
            </div>
            </td>
            </tr>
            <tr>
                <td>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Attn:</span>
                        <input type="text" class="form-control" placeholder="JAPAN TUNA FISHERIES CORPORATION (JTFC)"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
    </div>
    </td>
    <td class="text-end">
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">Date:</span>
            <input type="date" class="form-control">
        </div>
        </div>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    <div class="row mb-3 ">
        <div class="input-group">
            <label for="" class="me-3">件名<br>Re :</label><input type="text" class="form-control me-3"
                name="subid" value="" placeholder="83 SHOSHIN MARU">
            <label for=""class="me-3">派遣日<br>Embarkation Date</label>
            <input type="text" class="form-control me-3" name="subid" value="" placeholder="1-Sep-12">
            <label class="me-3">下船予定日<br>Estimated Sign Off</label>
            <input type="text" class="form-control me-3" name="subid" value="" placeholder="9-Jan-14">
            <label class="me-3 fs-6">に対するインドネシア人船員候補者<br>Crew Particular For</label>
            <label class="me-3">派遣港<br>Embarkation Port</label>
            <input type="text" class="form-control" name="subid" value="" placeholder="LAS PALMAS">
        </div>
    </div>
    <hr>
    <!--header-->
    <div class="row">
        <div class="col-4">
            <div class="form-group row mb-0">
                <label for="" class="col-sm-4">登録番号<br>ID. No</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="subid" value="{{ $crew->subid }}" disabled>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group row mb-0">
                <label for="" class="col-sm-5">旅券番号<br>Passport No.</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="passport_id" value="{{ $crew->passport_id }}">
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="form-group row mb-0">
                <label for="" class="col-sm-3">特記<br>Special Remark</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="specialmark" value="{{ $crew->specialmark }}">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="form-group row mb-0">
                <label class="col-sm-4">名前<br>Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="name" value="{{ $crew->name }}">
                </div>
                <label for="" class="col-sm-4">出生地<br>Birth Place</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="place" value="{{ $crew->place }}">
                </div>
                <label for="" class="col-sm-4">生年月日<br>Birth Date</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="birth" value="{{ $crew->birth }}">
                </div>
                <label class="col-sm-4">年齢<br>Age</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control"
                        value="{{ \Carbon\Carbon::parse($crew->birth)->diff(\Carbon\Carbon::now())->y }} tahun"
                        disabled>
                </div>
                <label for="" class="col-sm-4">宗教<br>Religion</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="religion" value="{{ $crew->religion }}">
                </div>
                <label class="col-sm-4">身長<br>Height</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="height" value="{{ $crew->height }}">
                </div>
                <label for="" class="col-sm-4">体重<br>Weight</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="weight" value="{{ $crew->weight }}">
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group row mb-0">
                <label class="col-sm-5">発給日<br>Issued Date</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="passport_issued"
                        value="{{ $crew->passport_issued }}">
                </div>
                <label for="" class="col-sm-5">発給地<br>Issued Place</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="passport_place"
                        value="{{ $crew->passport_place }}">
                </div>
                <label for="" class="col-sm-5">有効期限<br>Valid Until</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="passport_valid"
                        value="{{ $crew->passport_valid }}">
                </div>
                <label class="col-sm-5">船員手帳<br>Seaman Book</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="seamanbook_id"
                        value="{{ $crew->seamanbook_id }}">
                </div>
                <label class="col-sm-5">発給日<br>Issued Date</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="seamanbook_issued"
                        value="{{ $crew->seamanbook_issued }}">
                </div>
                <label for="" class="col-sm-5">発給地<br>Issued Place</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="seamanbook_place"
                        value="{{ $crew->seamanbook_place }}">
                </div>
                <label for="" class="col-sm-5">有効期限<br>Valid Until</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="seamanbook_valid"
                        value="{{ $crew->seamanbook_valid }}">
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group row mb-0">
                <label class="col-sm-5">最終経歴<br>Last Vessel</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control">
                </div>
                <label for="" class="col-sm-5">下船日<br>Sign Off</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="signoff" value="{{ $crew->signoff }}">
                </div><label for="" class="col-sm-5">新基本給<br>New Salary</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="salary" value="{{ $crew->salary }}">
                </div><label for="" class="col-sm-5">職種<br>Job</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="job" value="{{ $crew->job }}">
                </div><label for="" class="col-sm-5">足のサイズ<br>Shoes Size</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="shoes" value="{{ $crew->shoes }}">
                </div><label for="" class="col-sm-5">手袋<br>Glove Size</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="glove" value="{{ $crew->glove }}">
                </div><label for="" class="col-sm-5">カッパ<br>Kappa Size</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="kappa" value="{{ $crew->kappa }}">
                </div>
                {{-- <button type="submit" class="btn btn-primary">Update</button>
<button type="button" class="btn btn-success">Print</button> --}}
            </div>
        </div>
        <div class="col-2">
            <div class="form-group row mb-0">
                <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg" alt="..."
                    class="img-thumbnail" style="width: 200px;">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="input-group mb-0">
                <label class="col-sm-4" style="margin-right: 12px;">未婚・既婚<br>Marital Status</label>
                <input type="text" class="form-control" name="nationaly" value="{{ $crew->marital }}">
                <label style="
    margin-left: 8px;
    margin-right: 13px;
">子供<br>Child</label>
                <input type="text" class="form-control" name="marital" value="0">
                <span class="input-group-text">人</span>
            </div>
            <div class="form-group row mb-0">
                <label class="col-sm-4">国査証<br>National Visa</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nationaly" value="{{ $crew->nationaly }}">
                </div>
                <label class="col-sm-4">査証番号<br>Visa Number</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="visa_id" value="{{ $crew->visa_id }}">
                </div>
                <label class="col-sm-4">有効期限<br>Valid Until</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="visa_valid" value="{{ $crew->visa_valid }}">
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group row">
                <label for="" class="col-sm-5" style="
    font-size: smaller;
">オレンジブック<br>Orange
                    Book</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="orangebook_id"
                        value="{{ $crew->orangebook_id }}">
                </div>
                <label class="col-sm-5">発給日<br>Issued Date</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="orangebook_issued"
                        value="{{ $crew->orangebook_issued }}">
                </div>
                <label for="" class="col-sm-5">発給地<br>Issued Place</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="orangebook_place"
                        value="{{ $crew->orangebook_place }}">
                </div>
                <label for="" class="col-sm-5">有効期限<br>Valid Until</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="orangebook_valid"
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
                    <input type="text" class="form-control" name="license" value="{{ $crew->license }}">
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <span>１９９５年以降の乗船経歴</span>
        <h5>Experience since 1995</h5>
        <table class="tableFixHead text-center">
            <thead>
                <tr>
                    <th>船名<br>Vessel's Name</th>
                    <th>乗船日<br>Sign On</th>
                    <th>下船日<br>Sign Off</th>
                    <th>乗船期限（月）<br>Period (Month)</th>
                    <th>基本給<br>Salary</th>
                    <th>ボーナス<br>Bonus</th>
                    <th>職種<br>Job</th>
                    <th>船籍<br>Ship Flag</th>
                    <th>凍結・生<br>Freezer</th>
                    <th>種別<br>Type</th>
                    <th>主漁場<br>Fishing Ground</th>
                    <th>トン数<br>Tonnage</th>
                    <th>漁労長<br>Fishing Master</th>
                    <th>寒冷<br>Cold Area</th>
                    <th>下船理由<br>Disembark. Reason</th>
                    <th>評価<br>Grade</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($exp as $exp)
                    <tr>
                        <td>{{ $exp->vesselsname }}</td>
                        <td>{{ $exp->signon }}</td>
                        <td>{{ $exp->signoff }}</td>
                        <td>{{ $exp->periode }}</td>
                        <td>Rp. {{ $exp->salary }}</td>
                        <td>Rp. {{ $exp->bonus }}</td>
                        <td>{{ $exp->job }}</td>
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
                <tr>
                    <td>Kapal Terigu</td>
                    <td>2022-07-12</td>
                    <td>2022-07-12</td>
                    <td>1</td>
                    <td>Rp. 9000</td>
                    <td>Rp. 1000</td>
                    <td>Tukang Cuci Piring</td>
                    <td>Jepang</td>
                    <td>F</td>
                    <td>P</td>
                    <td>Jawa</td>
                    <td>T</td>
                    <td>FM</td>
                    <td>CD</td>
                    <td>D</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Konoha Ship</td>
                    <td>2022-07-12</td>
                    <td>2022-07-12</td>
                    <td>1</td>
                    <td>Rp. 3000</td>
                    <td>Rp. 1000</td>
                    <td>COOK</td>
                    <td>Jepang</td>
                    <td>F</td>
                    <td>P</td>
                    <td>Jawa</td>
                    <td>T</td>
                    <td>FM</td>
                    <td>CD</td>
                    <td>D</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Nana Ship</td>
                    <td>2022-07-12</td>
                    <td>2022-07-12</td>
                    <td>1</td>
                    <td>Rp. 3000</td>
                    <td>Rp. 200</td>
                    <td>BARBERMAN</td>
                    <td>Taiwan</td>
                    <td>F</td>
                    <td>P</td>
                    <td>Sunda</td>
                    <td>T</td>
                    <td>FM</td>
                    <td>CD</td>
                    <td>D</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Shipon Maru</td>
                    <td>2022-07-12</td>
                    <td>2022-07-12</td>
                    <td>1</td>
                    <td>Rp. 8000</td>
                    <td>Rp. 50</td>
                    <td>BOSMAN</td>
                    <td>Jepang</td>
                    <td>F</td>
                    <td>P</td>
                    <td>Sunda</td>
                    <td>T</td>
                    <td>FM</td>
                    <td>CD</td>
                    <td>D</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Kota Ship</td>
                    <td>2022-07-12</td>
                    <td>2022-07-12</td>
                    <td>1</td>
                    <td>Rp. 8000</td>
                    <td>Rp. 100</td>
                    <td>COOK</td>
                    <td>Jepang</td>
                    <td>F</td>
                    <td>P</td>
                    <td>Jawa</td>
                    <td>T</td>
                    <td>FM</td>
                    <td>CD</td>
                    <td>D</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Nana Ship</td>
                    <td>2022-07-13</td>
                    <td>2022-07-12</td>
                    <td>1</td>
                    <td>Rp. 500</td>
                    <td>Rp. 100</td>
                    <td>COOK</td>
                    <td>Jepang</td>
                    <td>F</td>
                    <td>P</td>
                    <td>Jawa</td>
                    <td>T</td>
                    <td>FM</td>
                    <td>CD</td>
                    <td>D</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Nana Ship</td>
                    <td>2022-07-12</td>
                    <td>2022-07-12</td>
                    <td>1</td>
                    <td>Rp. 2000</td>
                    <td>Rp. 100</td>
                    <td>COOK</td>
                    <td>Jepang</td>
                    <td>F</td>
                    <td>P</td>
                    <td>Jawa</td>
                    <td>T</td>
                    <td>FM</td>
                    <td>CD</td>
                    <td>D</td>
                    <td>B</td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
    <!--pages-->
    </div>
    @endforeach
    <script>
        window.print();
    </script>
    <script>
        $(document).ready(function() {
            $(".select2").select2({
                tags: true,
                theme: "bootstrap"
            });
        });
    </script>
    <script src="/js/main.js"></script>
</body>
</html>
