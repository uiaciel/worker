@extends('layouts.main')
@section('content')
    <div class="bg-secondary pt-10 pb-21"></div>
    <div class="container-fluid w-auto bg-secondary mt-n22 px-6">
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="mb-2 mb-lg-0">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <h2 class="mb-0 text-center">Request No.: {{ $order->inv }}
                                </h2>
                            </div>


                        </div>
                        <div>
                            {{-- <a href="{{route('order.create')}}" class="btn btn-white">Create New Project</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row  -->
        <div class="row mt-6 ">
            <div class="col-md-12 col-12">
                <!-- card  -->
                {{-- <form action="{{ route('order.update', $order->id) }}" method="POST">
                    @csrf
                    @method('PUT') --}}
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header">
                        <div class="d-flex">
                            <!-- img -->
                            <div>
                                <img src="../assets/images/avatar/avatar-9.jpg" class="rounded-circle avatar-md"
                                    alt="">
                            </div>
                            <!-- content -->
                            <div class="ms-3 ">
                                <h5 class="mb-1">{{ $order->client->nama }}</h5>
                                <p class="mb-0 fs-5 text-muted">
                                    {{ \Carbon\Carbon::parse($order->updated_at)->format('d-M-Y') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-header bg-white  py-4">
                        <div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mb-2 mb-lg-0">
                                    <h4 class="mb-0">To: {{ $order->company->nama }}
                                        {{-- <br>From: {{Auth::user()->client->nama}} --}}
                                    </h4>
                                </div>
                                <div>
                                    <a href="/print/{{ $order->inv }}" class="btn btn-primary" style="width:150px;"
                                        target="_blank">Print</a>
                                    <button type="submit" class="btn btn-primary btn-md"
                                        style="width:150px;">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card body  -->
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Request No.</label>
                            <div class="col-sm-9">
                                <input type="text" name="inv" class="form-control" value="{{ $order->inv }}"
                                    disabled>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <select class="form-select" name="status">
                                    {{ $order->status }}
                                    <option value="{{ $order->status }}">{{ $order->status }}</option>
                                    <option value="Active">Active</option>
                                    <option value="Fixed">Fixed</option>
                                    <option value="Cancelled">Cancelled</option>

                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="shipowner" class="col-sm-3 col-form-label">Ship Owner</label>
                            <div class="col-sm-9">
                                <input type="text" name="shipowner" class="form-control" value="{{ $order->shipowner }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Ship Name</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <select class="form-control select2" name="shipname" id="select2">
                                        <option value="{{ $order->shipname }}">{{ $order->shipname }}</option>
                                        <option disabled>List Shipname</option>
                                        <option value="Aichi">Aichi</option>
                                        <option value="Akebono">Akebono</option>
                                        <option value="Aoi">Aoi</option>
                                        <option value="Aomori">Aomori</option>
                                        <option value="Asahi">Asahi</option>
                                        <option value="Atago">Atago</option>
                                        <option value="Aya">Aya</option>
                                        <option value="Benten">Benten</option>
                                        <option value="Chishio">Chishio</option>
                                        <option value="Chiyo">Chiyo</option>
                                        <option value="Choei">Choei</option>
                                        <option value="Chofuku">Chofuku</option>
                                        <option value="Chohkyu">Chohkyu</option>
                                        <option value="Chokyu">Chokyu</option>
                                        <option value="Choufuku">Choufuku</option>
                                        <option value="Dai">Dai</option>
                                        <option value="Daiei">Daiei</option>
                                        <option value="Daiki">Daiki</option>
                                        <option value="Daikichi">Daikichi</option>
                                        <option value="Daikoku">Daikoku</option>
                                        <option value="Daishi">Daishi</option>
                                        <option value="Daito">Daito</option>
                                        <option value="Daiyu">Daiyu</option>
                                        <option value="Den">Den</option>
                                        <option value="Dhizon">Dhizon</option>
                                        <option value="Ebisu">Ebisu</option>
                                        <option value="Ehime">Ehime</option>
                                        <option value="Eikichi">Eikichi</option>
                                        <option value="Eiko">Eiko</option>
                                        <option value="Eikyu">Eikyu</option>
                                        <option value="Eisei">Eisei</option>
                                        <option value="Eishou">Eishou</option>
                                        <option value="Eiyu">Eiyu</option>
                                        <option value="Fudou">Fudou</option>
                                        <option value="Fuji">Fuji</option>
                                        <option value="Fujitafuji">Fujitafuji</option>
                                        <option value="Fukuei">Fukuei</option>
                                        <option value="Fukuichi">Fukuichi</option>
                                        <option value="Fukujin">Fukujin</option>
                                        <option value="Fukujukai">Fukujukai</option>
                                        <option value="Fukukyu">Fukukyu</option>
                                        <option value="Fukuryu">Fukuryu</option>
                                        <option value="Fukuseki">Fukuseki</option>
                                        <option value="Fukushima">Fukushima</option>
                                        <option value="Fukusho">Fukusho</option>
                                        <option value="Fukutoku">Fukutoku</option>
                                        <option value="Fukuyo">Fukuyo</option>
                                        <option value="Fukuyoshi">Fukuyoshi</option>
                                        <option value="Gen">Gen</option>
                                        <option value="Genkichi">Genkichi</option>
                                        <option value="Genpuku">Genpuku</option>
                                        <option value="Goei">Goei</option>
                                        <option value="Gonei">Gonei</option>
                                        <option value="Gouei">Gouei</option>
                                        <option value="Gouta">Gouta</option>
                                        <option value="Goutoku">Goutoku</option>
                                        <option value="Hakeya">Hakeya</option>
                                        <option value="Hakko">Hakko</option>
                                        <option value="Hakuyo">Hakuyo</option>
                                        <option value="Hamahei">Hamahei</option>
                                        <option value="Hanei">Hanei</option>
                                        <option value="Hashimurateru">Hashimurateru</option>
                                        <option value="Hien">Hien</option>
                                        <option value="Hien">Hien</option>
                                        <option value="Hinode">Hinode</option>
                                        <option value="Hiro">Hiro</option>
                                        <option value="Hirona">Hirona</option>
                                        <option value="Hisatoshi">Hisatoshi</option>
                                        <option value="Hisyo">Hisyo</option>
                                        <option value="Hiyoshi">Hiyoshi</option>
                                        <option value="Hiyoshi">Hiyoshi</option>
                                        <option value="Hoei">Hoei</option>
                                        <option value="Hokushin">Hokushin</option>
                                        <option value="Hokusho">Hokusho</option>
                                        <option value="Horyu">Horyu</option>
                                        <option value="Hoshin">Hoshin</option>
                                        <option value="Hotoku">Hotoku</option>
                                        <option value="Houryou">Houryou</option>
                                        <option value="Housei">Housei</option>
                                        <option value="Ichi">Ichi</option>
                                        <option value="Ichiei">Ichiei</option>
                                        <option value="ichifuku">ichifuku</option>
                                        <option value="Ichimaruhachi kaio">Ichimaruhachi kaio</option>
                                        <option value="Ikushin">Ikushin</option>
                                        <option value="Inari">Inari</option>
                                        <option value="Iroha">Iroha</option>
                                        <option value="Isomae">Isomae</option>
                                        <option value="Jinichi">Jinichi</option>
                                        <option value="Jinshou">Jinshou</option>
                                        <option value="Jintoku">Jintoku</option>
                                        <option value="Jyunyo">Jyunyo</option>
                                        <option value="Kagoshima">Kagoshima</option>
                                        <option value="Kaien">Kaien</option>
                                        <option value="Kaigata">Kaigata</option>
                                        <option value="Kaigo">Kaigo</option>
                                        <option value="Kaiho">Kaiho</option>
                                        <option value="Kaihou">Kaihou</option>
                                        <option value="Kaiko">Kaiko</option>
                                        <option value="Kaio">Kaio</option>
                                        <option value="Kaisei">Kaisei</option>
                                        <option value="Kaisei">Kaisei</option>
                                        <option value="Kaishin">Kaishin</option>
                                        <option value="Kaishin">Kaishin</option>
                                        <option value="Kaitoku">Kaitoku</option>
                                        <option value="Kaiun">Kaiun</option>
                                        <option value="Kaiyo">Kaiyo</option>
                                        <option value="Kaiyu">Kaiyu</option>
                                        <option value="Kaiyuu">Kaiyuu</option>
                                        <option value="Kanae">Kanae</option>
                                        <option value="Kashima">Kashima</option>
                                        <option value="Kasuga">Kasuga</option>
                                        <option value="Katsu">Katsu</option>
                                        <option value="Katsuei">Katsuei</option>
                                        <option value="Katsura">Katsura</option>
                                        <option value="Katu">Katu</option>
                                        <option value="Katutoku">Katutoku</option>
                                        <option value="Kazutoku">Kazutoku</option>
                                        <option value="Kazuyou">Kazuyou</option>
                                        <option value="Keiho">Keiho</option>
                                        <option value="Kenta">Kenta</option>
                                        <option value="Kenyou">Kenyou</option>
                                        <option value="Kichiebisu">Kichiebisu</option>
                                        <option value="Kiei">Kiei</option>
                                        <option value="Kifuku">Kifuku</option>
                                        <option value="Kiku">Kiku</option>
                                        <option value="Kinei">Kinei</option>
                                        <option value="Kinryo">Kinryo</option>
                                        <option value="Kinsai">Kinsai</option>
                                        <option value="Kinsei">Kinsei</option>
                                        <option value="Kintora">Kintora</option>
                                        <option value="Kiyo">Kiyo</option>
                                        <option value="Koei">Koei</option>
                                        <option value="Kohyoh">Kohyoh</option>
                                        <option value="Kokei">Kokei</option>
                                        <option value="Kokushin">Kokushin</option>
                                        <option value="Konpira">Konpira</option>
                                        <option value="Koryo">Koryo</option>
                                        <option value="Koryu">Koryu</option>
                                        <option value="Koshin">Koshin</option>
                                        <option value="Kotobuki">Kotobuki</option>
                                        <option value="Kotoshiro">Kotoshiro</option>
                                        <option value="Kotoshiro">Kotoshiro</option>
                                        <option value="Kouei">Kouei</option>
                                        <option value="Kouhou">Kouhou</option>
                                        <option value="Kouryou">Kouryou</option>
                                        <option value="Kousho">Kousho</option>
                                        <option value="Koutoku">Koutoku</option>
                                        <option value="Kowa">Kowa</option>
                                        <option value="Koyo">Koyo</option>
                                        <option value="Koyuu">Koyuu</option>
                                        <option value="Kuni">Kuni</option>
                                        <option value="Kyoryo">Kyoryo</option>
                                        <option value="Kyoshin">Kyoshin</option>
                                        <option value="Kyouhime">Kyouhime</option>
                                        <option value="Kyoyo">Kyoyo</option>
                                        <option value="Manei">Manei</option>
                                        <option value="Manryou">Manryou</option>
                                        <option value="Masa">Masa</option>
                                        <option value="Masafuku">Masafuku</option>
                                        <option value="Masami">Masami</option>
                                        <option value="Masu">Masu</option>
                                        <option value="Matsu">Matsu</option>
                                        <option value="Matsuei">Matsuei</option>
                                        <option value="Matsufuku">Matsufuku</option>
                                        <option value="Matsuichi">Matsuichi</option>
                                        <option value="Meiho">Meiho</option>
                                        <option value="Mia">Mia</option>
                                        <option value="Mie">Mie</option>
                                        <option value="Mihoko">Mihoko</option>
                                        <option value="Mina">Mina</option>
                                        <option value="Mitsu">Mitsu</option>
                                        <option value="Mituei">Mituei</option>
                                        <option value="Miya">Miya</option>
                                        <option value="Miyagi">Miyagi</option>
                                        <option value="Miyazaki">Miyazaki</option>
                                        <option value="Miyo">Miyo</option>
                                        <option value="Myojin">Myojin</option>
                                        <option value="Nakamuraryouyu">Nakamuraryouyu</option>
                                        <option value="Nanae">Nanae</option>
                                        <option value="Nankai">Nankai</option>
                                        <option value="Nankai">Nankai</option>
                                        <option value="Nao">Nao</option>
                                        <option value="Naoki">Naoki</option>
                                        <option value="Naoki">Naoki</option>
                                        <option value="Nikko">Nikko</option>
                                        <option value="Nissho">Nissho</option>
                                        <option value="Nitto">Nitto</option>
                                        <option value="Nomura">Nomura</option>
                                        <option value="Nozomi">Nozomi</option>
                                        <option value="Nozomin">Nozomin</option>
                                        <option value="Oogurokoei">Oogurokoei</option>
                                        <option value="Ootori">Ootori</option>
                                        <option value="Oshoro">Oshoro</option>
                                        <option value="Oto">Oto</option>
                                        <option value="Otori">Otori</option>
                                        <option value="Riasu">Riasu</option>
                                        <option value="Rina">Rina</option>
                                        <option value="Ryoan">Ryoan</option>
                                        <option value="Ryoei">Ryoei</option>
                                        <option value="Ryofuku">Ryofuku</option>
                                        <option value="Ryofuku">Ryofuku</option>
                                        <option value="Ryouan">Ryouan</option>
                                        <option value="Ryouei">Ryouei</option>
                                        <option value="Ryoumei">Ryoumei</option>
                                        <option value="Ryousyou">Ryousyou</option>
                                        <option value="Ryouyuu">Ryouyuu</option>
                                        <option value="Ryoyoshi">Ryoyoshi</option>
                                        <option value="Ryoyu">Ryoyu</option>
                                        <option value="Ryoyu">Ryoyu</option>
                                        <option value="Ryuho">Ryuho</option>
                                        <option value="Ryuki">Ryuki</option>
                                        <option value="Ryusei">Ryusei</option>
                                        <option value="Ryusei">Ryusei</option>
                                        <option value="Ryushou">Ryushou</option>
                                        <option value="Ryuusei">Ryuusei</option>
                                        <option value="Sagakatsu">Sagakatsu</option>
                                        <option value="Sagamyojin">Sagamyojin</option>
                                        <option value="Sanei">Sanei</option>
                                        <option value="Sanko">Sanko</option>
                                        <option value="Sato">Sato</option>
                                        <option value="Satsuma">Satsuma</option>
                                        <option value="Sawajiri">Sawajiri</option>
                                        <option value="Seiei">Seiei</option>
                                        <option value="Seifuku">Seifuku</option>
                                        <option value="Seiho">Seiho</option>
                                        <option value="Seiho">Seiho</option>
                                        <option value="Seihou">Seihou</option>
                                        <option value="Seijyu">Seijyu</option>
                                        <option value="Seikichi">Seikichi</option>
                                        <option value="Seiko">Seiko</option>
                                        <option value="Seiryo">Seiryo</option>
                                        <option value="Seiryou">Seiryou</option>
                                        <option value="Seiryu">Seiryu</option>
                                        <option value="Seishou">Seishou</option>
                                        <option value="Seiyo">Seiyo</option>
                                        <option value="Seiyoshi">Seiyoshi</option>
                                        <option value="Seiyou">Seiyou</option>
                                        <option value="Sensho">Sensho</option>
                                        <option value="Senshu">Senshu</option>
                                        <option value="Shichifukuzin">Shichifukuzin</option>
                                        <option value="Shihou">Shihou</option>
                                        <option value="Shinei">Shinei</option>
                                        <option value="Shinkai">Shinkai</option>
                                        <option value="Shinko">Shinko</option>
                                        <option value="Shinpai">Shinpai</option>
                                        <option value="Shinryou">Shinryou</option>
                                        <option value="Shinsei">Shinsei</option>
                                        <option value="Shintoku">Shintoku</option>
                                        <option value="Shinyo">Shinyo</option>
                                        <option value="Shirochidori">Shirochidori</option>
                                        <option value="Shoei">Shoei</option>
                                        <option value="Shofuku">Shofuku</option>
                                        <option value="Shoki">Shoki</option>
                                        <option value="Shonan">Shonan</option>
                                        <option value="Shoshin">Shoshin</option>
                                        <option value="Shotoku">Shotoku</option>
                                        <option value="Shouei">Shouei</option>
                                        <option value="Shoun">Shoun</option>
                                        <option value="Shouyou">Shouyou</option>
                                        <option value="Shoyo">Shoyo</option>
                                        <option value="Shoyu">Shoyu</option>
                                        <option value="Shuho">Shuho</option>
                                        <option value="Shunyo">Shunyo</option>
                                        <option value="Shunyou">Shunyou</option>
                                        <option value="Sinpuku">Sinpuku</option>
                                        <option value="Siryu">Siryu</option>
                                        <option value="Soho">Soho</option>
                                        <option value="Soho">Soho</option>
                                        <option value="Sue">Sue</option>
                                        <option value="Sue">Sue</option>
                                        <option value="Suehiro">Suehiro</option>
                                        <option value="Sumita">Sumita</option>
                                        <option value="Sumiyoshi">Sumiyoshi</option>
                                        <option value="Suwa">Suwa</option>
                                        <option value="Syoryo">Syoryo</option>
                                        <option value="Syuho">Syuho</option>
                                        <option value="Syunko">Syunko</option>
                                        <option value="Taikei">Taikei</option>
                                        <option value="Taiki">Taiki</option>
                                        <option value="Taiko">Taiko</option>
                                        <option value="Taikoh">Taikoh</option>
                                        <option value="Tairyo">Tairyo</option>
                                        <option value="Taisei">Taisei</option>
                                        <option value="Taiwa">Taiwa</option>
                                        <option value="Taiyo">Taiyo</option>
                                        <option value="Taiyou">Taiyou</option>
                                        <option value="Taiyu">Taiyu</option>
                                        <option value="Taka">Taka</option>
                                        <option value="Takaei">Takaei</option>
                                        <option value="Takashiro">Takashiro</option>
                                        <option value="Takatoyo">Takatoyo</option>
                                        <option value="Take">Take</option>
                                        <option value="Tanshu">Tanshu</option>
                                        <option value="Tao">Tao</option>
                                        <option value="Tatsu">Tatsu</option>
                                        <option value="Tatsumi">Tatsumi</option>
                                        <option value="Tatsuyoshi">Tatsuyoshi</option>
                                        <option value="Tenku">Tenku</option>
                                        <option value="Tenoh">Tenoh</option>
                                        <option value="Tenyo">Tenyo</option>
                                        <option value="Teru">Teru</option>
                                        <option value="Tetsu">Tetsu</option>
                                        <option value="Tetu">Tetu</option>
                                        <option value="Tobeshima">Tobeshima</option>
                                        <option value="Toei">Toei</option>
                                        <option value="Tokiwa">Tokiwa</option>
                                        <option value="Tokuei">Tokuei</option>
                                        <option value="Tokuha">Tokuha</option>
                                        <option value="Tokuho">Tokuho</option>
                                        <option value="Tokusho">Tokusho</option>
                                        <option value="Tomi">Tomi</option>
                                        <option value="Tomiyama">Tomiyama</option>
                                        <option value="Tomo">Tomo</option>
                                        <option value="Tosakaien">Tosakaien</option>
                                        <option value="Toshi">Toshi</option>
                                        <option value="Toshima">Toshima</option>
                                        <option value="Toyokuni">Toyokuni</option>
                                        <option value="Tsukasa">Tsukasa</option>
                                        <option value="Uetake">Uetake</option>
                                        <option value="Umitaka">Umitaka</option>
                                        <option value="Urayasu">Urayasu</option>
                                        <option value="Wajima">Wajima</option>
                                        <option value="Wajima">Wajima</option>
                                        <option value="Waka">Waka</option>
                                        <option value="Wakaba">Wakaba</option>
                                        <option value="Wakamiya">Wakamiya</option>
                                        <option value="Wakashio">Wakashio</option>
                                        <option value="Wakatake">Wakatake</option>
                                        <option value="Yachiyo">Yachiyo</option>
                                        <option value="Yachou">Yachou</option>
                                        <option value="Yahata">Yahata</option>
                                        <option value="Yaizu">Yaizu</option>
                                        <option value="Yamasakitatsuei">Yamasakitatsuei</option>
                                        <option value="Yasuei">Yasuei</option>
                                        <option value="Yasuichi">Yasuichi</option>
                                        <option value="Yoko">Yoko</option>
                                        <option value="Yoko">Yoko</option>
                                        <option value="Yokuryu">Yokuryu</option>
                                        <option value="Yoshi">Yoshi</option>
                                        <option value="Yoshiei">Yoshiei</option>
                                        <option value="Youki">Youki</option>
                                        <option value="Yuei">Yuei</option>
                                        <option value="Yuho">Yuho</option>
                                        <option value="Yujin">Yujin</option>
                                        <option value="Yujin">Yujin</option>
                                        <option value="Yuki">Yuki</option>
                                        <option value="Yuki">Yuki</option>
                                        <option value="Yusei">Yusei</option>
                                        <option value="Yusei">Yusei</option>
                                        <option value="Zenriki">Zenriki</option>
                                    </select>
                                    <span class="input-group-text" id="inputGroup-sizing-default">Maru</span>
                                    <select class="form-control" name="shipmaru">
                                        <option value="{{ $order->shipmaru }}">{{ $order->shipmaru }}</option>
                                        <option>Maru</option>
                                        <option>Non Maru</option>
                                    </select>
                                    <span class="input-group-text" id="inputGroup-sizing-default">Number</span>
                                    <input type="number" value="{{ $order->shipnumber }}" max="100"
                                        min="1" class="form-control" name="shipnumber"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Type</span>
                                    <select class="form-control select2" name="shiptype" id="">
                                        <option value="{{ $order->shiptype }}">{{ $order->shiptype }}</option>
                                        <option value="Longline">Longline</option>
                                        <option value="Trawl">Trawl</option>
                                        <option value="Purse Seine">Purse Seine</option>
                                        <option value="Pole & Line">Pole & Line</option>
                                        <option value="Jigger">Jigger</option>
                                        <option value="Fish Carrier">Fish Carrier</option>
                                        <option value="Support Vessel">Support Vessel</option>
                                        <option value="Fishery Research Vessel">Fishery Research Vessel</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Fishing Area</label>
                            <div class="col-sm-9">
                                <input type="text" name="fishingarea" value="{{ $order->fishingarea }}"
                                    class="form-control" id="inputPassword">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Nationality</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="nationaly" id="">
                                    <option value="{{ $order->nationaly }}">{{ $order->nationaly }}</option>
                                    <option value="Indonesia">Indonesia</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Number of Crew(s)</label>
                            <div class="col-sm-9">
                                <input type="number" name="member" value="{{ $order->member }}" class="form-control"
                                    id="inputPassword">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Period of Employment</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" value="{{ $order->periode }}" name="periode"
                                        class="form-control" id="inputPassword">
                                    <span class="input-group-text">Month</span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Estimated Date of
                                Embarkation</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
                                    <input type="text" name="start" id="datestart" value="{{ $order->start }}"
                                        class="form-control">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Port</span>
                                    <select class="form-control select2" name="portstart">
                                        <option value="{{ $order->portstart }}">{{ $order->portstart }}</option>
                                        <option value="LAS PALMAS">LAS PALMAS</option>
                                        <option value="JAPAN">JAPAN</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Estimated Date of
                                Disembarkation</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
                                    <input type="text" name="end" id="dateend" class="form-control"
                                        value="{{ $order->end }}">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Port</span>
                                    <select class="form-control select2" name="portend">
                                        <option value="{{ $order->portend }}">{{ $order->portend }}</option>
                                        <option value="LAS PALMAS">LAS PALMAS</option>
                                        <option value="JAPAN">JAPAN</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-round mb-3" style="width:150px;"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add Request
                        </button>
                        <div class="table-responsive">
                            <table class="table table-bordered border-primary mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="text-uppercase small font-weight-bold">No.</th>
                                        <th class="text-uppercase small font-weight-bold">Class of Crew</th>
                                        <th class="text-uppercase small font-weight-bold">Age</th>
                                        <th class="text-uppercase small font-weight-bold">Experience</th>
                                        <th class="text-uppercase small font-weight-bold">Number</th>
                                        <th class="text-uppercase small font-weight-bold">Remarks</th>
                                        <th class="text-uppercase small font-weight-bold">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($orderjob as $index => $reqjob)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{ $reqjob->job->name }}</td>
                                            <td>{{ $reqjob->age }}</td>
                                            <td>{{ $reqjob->exp }}</td>
                                            <td>{{ $reqjob->number }}</td>
                                            <td>{{ $reqjob->remark }}</td>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <form onsubmit="return confirm('Are you sure?');"
                                                        action="{{ route('orderjob.destroy', $reqjob->id) }}"
                                                        method="POST">

                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-outline-danger" type="submit"
                                                            id="button-addon2">Delete</button>
                                                    </form>
                                                    @if ($reqjob->remark !== 'NEW')
                                                        <button class="btn btn-sm btn-outline-primary cekdata"
                                                            type="button" data-bs-toggle="modal"
                                                            data-bs-target="#com{{ $reqjob->id }}"
                                                            id="creww">Select Crew(s)</button>
                                                    @endif
                                                </div>


                                            </td>
                                        </tr>

                                        @include('order.addcrew')

                                    @empty
                                    @endforelse
                                </tbody>
                                <tfoot class="font-weight-bold small">
                                </tfoot>
                            </table>

                            <div class="modal fade" id="datacrewnya" aria-labelledby="datacrewnyaLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#datacrew"
                                                role="button" aria-expanded="false" aria-controls="datacrew">
                                                SELECT CREWS
                                            </a>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Selected Crew(s)</h4>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--table responsive end-->
                        <div class="form-group">
                            <label>Notes</label>
                            <div class="border border-primary">

                                <ul class="numberList">
                                    @foreach ($orderjob as $oj)
                                        <li>
                                            <strong>{{ $oj->number }} - {{ $oj->job->name }}</strong>
                                            <ol class="bulletList">
                                                @foreach ($oj->ordercrew as $namacrew)
                                                    <li>{{ $namacrew->crew->subid }} - {{ $namacrew->crew->name }}
                                                        {{ $namacrew->crew->birth }} - {{ $namacrew->crew->job->name }} -
                                                        NO
                                                        PASSPORT</li>
                                                @endforeach

                                            </ol>
                                        </li>
                                    @endforeach

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!-- row  -->
        @include('order.addrequest')


        <!-- Modal -->
        {{-- @isset($orderjob) --}}
        @if ($order->step_2 == 1)
            <div class="row mt-6 ml-30">
                <div class="col-12">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-header">
                            <div class="d-flex">
                                <!-- img -->
                                @if ($order->step_3 == 0)
                                    <div>
                                        <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md"
                                            alt="">
                                    </div>
                                    <!-- content -->
                                    <div class="ms-3 ">
                                        <h5 class="mb-1">{{ $order->company->nama }}</h5>
                                        <p class="mb-0 fs-5 text-muted">1 minutes ago</p>
                                    </div>
                                @else
                                    <div>
                                        <img src="../assets/images/avatar/avatar-9.jpg" class="rounded-circle avatar-md"
                                            alt="">
                                    </div>
                                    <!-- content -->
                                    <div class="ms-3 ">
                                        <h5 class="mb-1">{{ $order->client->nama }}</h5>
                                        <p class="mb-0 fs-5 text-muted">2month ago</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                        @if ($order->step_3 == 0)
                            <div class="card-header bg-white  py-4">
                                <div>
                                    <div class="d-flex">
                                        <div class="mb-2 mb-lg-0 flex-fill">
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <h4 class="mb-0 text-center">Please do approval to the selected crew(s)
                                                    below!
                                                </h4>
                                            </div>
                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="card-body">
                            <!-- card title -->
                            <form method="POST" enctype="multipart/form-data"
                                action="{{ route('ordercrewall.update') }}">
                                @csrf
                                <table class="table table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>No.</th>
                                            <th>Crew ID</th>
                                            <th>Name</th>
                                            <th>D.O.B</th>
                                            <th>Job</th>
                                            <th>Passport No.</th>
                                            <th>Remark</th>
                                            <th>Approval</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        {{-- <tr>
                                            <td colspan="5">
                                                Fishing Master
                                            </td>
                                        </tr> --}}
                                        @foreach ($ordercrew as $index => $ordercrx)
                                            <tr @if ($ordercrx->status == 'ACC') class="bg-primary text-white" @endif>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $ordercrx->crew->subid }}
                                                </td>
                                                <td><input value="{{ $ordercrx->id }}" name="id[]"
                                                        hidden>{{ $ordercrx->crew->name }}</td>
                                                <td>{{ $ordercrx->crew->birth }}
                                                </td>
                                                <td>{{ $ordercrx->crew->job->name }}</td>
                                                <td>122211221</td>
                                                <td>{{ $ordercrx->remark }}</td>
                                                <td class="bg-primary">
                                                    <select name="status[]" class="form-control">
                                                        @if ($ordercrx->status == 'ACC')
                                                            <option value="ACC">Approved</option>
                                                            <option value="RECOMMENDATION">Disapproved</option>
                                                        @else
                                                            <option value="RECOMMENDATION">Disapproved</option>
                                                            <option value="ACC">APPROVE</option>
                                                        @endif
                                                    </select>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="mb-3 row">
                                    <label for="shipowner" class="col-sm-3 col-form-label">Air Ticket(s) Provided
                                        by</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="orderid" value="{{ $order->id }}" hidden />
                                        <select class="form-control" name="airticketby">
                                            @if (is_null($order->airticketby))
                                                <option>== CHOOSE ==</option>
                                                <option value="{{ $order->client->id }}">{{ $order->client->nama }}
                                                </option>
                                                <option value="{{ $order->company->id }}">{{ $order->company->nama }}
                                                </option>
                                            @else
                                                <option value="{{ $order->airticketby }}">
                                                    @if ($order->airticketby == $order->client->id)
                                                        {{ $order->client->nama }}
                                                    @else
                                                        {{ $order->company->nama }}
                                                    @endif
                                                </option>
                                                <option value="{{ $order->client->id }}">{{ $order->client->nama }}
                                                </option>
                                                <option value="{{ $order->company->id }}">{{ $order->company->nama }}
                                                </option>
                                            @endif


                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" style="width:150px;">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @else
            @if ($order->step_1 == 1)
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <div class="d-flex">
                                    <!-- img -->
                                    <div>
                                        <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md"
                                            alt="">
                                    </div>
                                    <!-- content -->
                                    <div class="ms-3 ">
                                        <h5 class="mb-1">{{ $order->company->nama }}</h5>
                                        <p class="mb-0 fs-5 text-muted">2 minutes ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header bg-white  py-4">
                                <div>
                                    <div class="d-flex">
                                        <div class="mb-2 mb-lg-0 flex-fill">
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <h4 class="mb-0 text-center">Thank you! Please waiting for our response
                                                </h4>
                                            </div>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endif
        @endif
        @if ($order->airticketby == $order->company->id)
            <div class="card mt-3">
                <div class="card-header">
                    <div class="d-flex">
                        <!-- img -->
                        <div>
                            <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md"
                                alt="">
                        </div>
                        <!-- content -->
                        <div class="ms-3 ">
                            <h5 class="mb-1">{{ $order->company->nama }}</h5>
                            <p class="mb-0 fs-5 text-muted">2 minutes ago</p>
                        </div>
                    </div>
                </div>
                @if ($order->step_4 == 0)
                    <div class="card-header bg-white  py-4">
                        <div class="d-flex">
                            <div class="mb-2 mb-lg-0 flex-fill">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <h4 class="mb-0 text-center">Thank you! Please waiting for our response
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="card-header bg-white  py-4">
                        <div class="d-flex">
                            <div class="mb-2 mb-lg-0 flex-fill">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <h4 class="mb-0 text-center">Thank you! Please kindly find our offer below!
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($order->step_4 == 1)
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead class="table-light">
                                <tr>
                                    <th>Offer(s)</th>
                                    <th>Status</th>
                                    <th>Last Update</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tickets as $ticket)
                                    <tr>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <div class="ms-3 lh-1">
                                                    <h5 class=" mb-1">ID: XSD21{{ $ticket->id }}</h5>
                                                    {{-- <p class="mb-0">{{anita@akagami.id}}</p> --}}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            @if ($ticket->status == 'nego')
                                                <h4><span class="badge badge-lg bg-danger">Negotiate</span></h4>
                                            @elseif ($ticket->status == 'deal')
                                                <h4><span class="badge bg-success">DEAL</span></h4>
                                            @elseif($ticket->status == 'client')
                                                <span class="badge bg-primary">Air Ticket by
                                                    {{ $order->client->nama }}</span>
                                            @endif

                                        </td>
                                        <td class="align-middle">{{ $ticket->updated_at }}</td>
                                        <td class="align-middle">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <button type="submit" class="btn btn-primary me-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#off-{{ $ticket->id }}">View</button>
                                                    <button class="btn btn-primary me-1" type="button">Print</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
            @foreach ($tickets as $ticket)
                <div class="modal fade" id="off-{{ $ticket->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form action="{{ route('ticket.update', ['id' => $ticket->id]) }}" method="POST">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title">Offer {{ $ticket->updated_at }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {!! $ticket->detail !!}
                                    <hr>
                                    <div class="mb-3 row">
                                        <label for="shipowner" class="col-sm-3 col-form-label">Please Confirm</label>
                                        <div class="col-sm-9">
                                            <input value="{{ $order->inv }}" name="orderinv" hidden />
                                            <input value="{{ $order->id }}" name="orderid" hidden />
                                            <select class="form-control" name="status">
                                                @if ($ticket->status == 'deal')
                                                    <option value="deal">Please issue Air Ticket (DEAL)</option>
                                                    <option value="nego">Negotiate </option>
                                                    <option value="client">We will arrange Air Ticket by
                                                        {{ $order->client->nama }}</option>
                                                @elseif($ticket->status == 'nego')
                                                    <option value="nego">Negotiate </option>
                                                    <option value="deal">Please issue Air Ticket (DEAL)</option>
                                                    <option value="client">We will arrange Air Ticket by
                                                        {{ $order->client->nama }}</option>
                                                @else
                                                    <option value="client">We will arrange Air Ticket by
                                                        {{ $order->client->nama }}</option>
                                                    <option value="nego">Negotiate </option>
                                                    <option value="deal">Please issue Air Ticket (DEAL)</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                    <button class="btn btn-primary mb-4" type="submit">Update</button>
                                </div>
                                {{-- </form> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        @endif
        {{-- @if ($ticket->status == 'deal') --}}
        @if ($order->step_5 == 1)
            <div class="row mt-6">
                <div class="col-12">
                    <!-- card -->
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <!-- img -->
                                <div>
                                    <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md"
                                        alt="">
                                </div>
                                <!-- content -->
                                <div class="ms-3 ">
                                    <h5 class="mb-1">{{ $order->company->nama }}</h5>
                                    <p class="mb-0 fs-5 text-muted">2 minutes ago</p>
                                </div>

                            </div>
                        </div>
                        <div class="card-header bg-white  py-4">
                            <div>
                                <div class="d-flex">
                                    <div class="mb-2 mb-lg-0 flex-fill">
                                        @if ($ticket->status == 'client')
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <h4 class="mb-0 text-center">Please kindly arrange & upload Air Ticket(s)
                                                    &
                                                    Guarantee Letter of All Crews below!
                                                </h4>
                                            </div>
                                        @else
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <h4 class="mb-0 text-center">Please kindly arrange & upload Guarantee
                                                    Letter of All Crews below!
                                                </h4>
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        {{-- <a href="/print/{{$order->inv}}" class="btn btn-primary" style="width:150px;" target="_blank">Print</a> --}}

                                        {{-- <button type="submit" class="btn btn-primary btn-md" style="width:150px;">Update</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header bg-white  py-4">
                            <h4 class="mb-0">Form Upload Documents
                            </h4>
                            <button type="button" class="btn btn-primary btn-round" style="width:150px;"
                                data-bs-toggle="modal" data-bs-target="#formdocument">
                                Upload Document
                            </button>
                        </div>
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row">

                                <div class="table-responsive mt-2">
                                    <table class="table table-primary">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">File</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orderdocuments as $orderdocument)
                                                <tr class="">
                                                    <td scope="row">1</td>
                                                    <td>{{ $orderdocument->path }}</td>
                                                    <td><button type="button"
                                                            class="btn btn-sm btn-primary">Download</button></td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                @include('order.formdocument')



                            </div>




                        </div>

                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <!-- img -->
                                <div>
                                    <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md"
                                        alt="">
                                </div>
                                <!-- content -->
                                <div class="ms-3 ">
                                    <h5 class="mb-1">{{ $order->company->nama }}</h5>
                                    <p class="mb-0 fs-5 text-muted">2 minutes ago</p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card-header bg-white  py-4">
                            <div>
                                <div class="d-flex">
                                    <div class="mb-2 mb-lg-0 flex-fill">

                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <h4 class="mb-0 text-center">Please kindly arrange & upload Guarantee Letter of All Crews below!
                                            </h4>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div> --}}
                        <div class="card-header bg-white  py-4">
                            <div class="d-flex justify-content-between">
                                <h4 class="mb-0">Crew Documents
                                </h4>
                                <a name="" id="" class="btn btn-primary" href="#"
                                    role="button">Download Crew List</a>
                            </div>

                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">

                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Crew ID</th>
                                        <th>Name</th>
                                        <th>Passport No.</th>
                                        <th>Seaman Book No.</th>
                                        <th>Marine Employment Contracts</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>ID123</td>
                                        <td>AKBAR</td>
                                        <td><a name="" id="" href="#" role="button">124577495</a>
                                        </td>
                                        <td><a name="" id="" href="#" role="button">14257754</a>
                                        </td>
                                        <td><a name="" id="" href="#" role="button">14257754</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>ID123</td>
                                        <td>SURYA</td>
                                        <td><a name="" id="" href="#" role="button">124577495</a>
                                        </td>
                                        <td><a name="" id="" href="#" role="button">14257754</a>
                                        </td>
                                        <td><a name="" id="" href="#" role="button">14257754</a>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td colspan="3"></td>
                                        <td><a name="" id="" class="btn btn-primary" href="#"
                                                role="button">Download All</a></td>
                                        <td><a name="" id="" class="btn btn-primary" href="#"
                                                role="button">Download All</a></td>
                                        <td><a name="" id="" class="btn btn-primary" href="#"
                                                role="button">Download All</a></td>
                                    </tr>



                                </tbody>



                            </table>


                        </div>
                    </div>

                </div>
        @endif

        @if ($order->step_6 == 1)
            <div class="row mt-6">
                <div class="col-12">
                    <!-- card -->
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <!-- img -->
                                <div>
                                    <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md"
                                        alt="">
                                </div>
                                <!-- content -->
                                <div class="ms-3 ">
                                    <h5 class="mb-1">{{ $order->company->nama }}</h5>
                                    <p class="mb-0 fs-5 text-muted">2 minutes ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-header bg-white">
                            <div>
                                <div class="d-flex">
                                    <div class="mb-2 mb-lg-0 flex-fill">

                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <h4 class="mb-0 text-center">Immigration Pass
                                            </h4>
                                        </div>

                                    </div>
                                    <div>
                                        {{-- <a href="/print/{{$order->inv}}" class="btn btn-primary" style="width:150px;" target="_blank">Print</a> --}}
                                        {{-- <button type="button" class="btn btn-primary btn-round" style="width:150px;" data-bs-toggle="modal"
                                  data-bs-target="#exampleModal">
                                  Add Request
                              </button> --}}
                                        {{-- <button type="submit" class="btn btn-primary btn-md" style="width:150px;">Update</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>{{ $order->shipname }} {{ $order->shipmaru }} {{ $order->shipnumber }}</h3>
                            <table class="table table-bordered">

                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>D.O.B</th>
                                        <th>Job</th>
                                        <th>Passport No.</th>
                                        <th>Status</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>

                                        <td>1</td>
                                        <td><input value="3" name="id[]" hidden="">Adiarja</td>
                                        <td>1982-10-27</td>
                                        <td>ASSISTANT COOK</td>
                                        <td>P64ip</td>

                                        <td>
                                            <span class="badge bg-success">PASSED!</span>

                                        </td>
                                        <td>17 Nov 2022, 13:00</td>
                                    </tr>
                                    <tr>

                                        <td>2</td>
                                        <td><input value="4" name="id[]" hidden="">Taufik</td>
                                        <td>1998-05-10</td>
                                        <td>CC</td>
                                        <td>P85ad</td>

                                        <td>
                                            <span class="badge bg-success">PASSED!</span>

                                        </td>
                                        <td>17 Nov 2022, 13:00</td>
                                    </tr>
                                    <tr>

                                        <td>3</td>
                                        <td><input value="5" name="id[]" hidden="">Sakti</td>
                                        <td>1989-03-23</td>
                                        <td>AC</td>
                                        <td>P53ei</td>

                                        <td>
                                            <span class="badge bg-success">PASSED!</span>

                                        </td>
                                        <td>17 Nov 2022, 13:00</td>
                                    </tr>

                                </tbody>



                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-6">
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-header">
                            <div class="d-flex">
                                <!-- img -->
                                <div>
                                    <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md"
                                        alt="">
                                </div>
                                <!-- content -->
                                <div class="ms-3 ">
                                    <h5 class="mb-1">{{ $order->company->nama }}</h5>
                                    <p class="mb-0 fs-5 text-muted">2 minutes ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-header bg-white  py-4">
                            <div>
                                <div class="d-flex">
                                    <div class="mb-2 mb-lg-0 flex-fill">
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <h4 class="mb-0 text-center">Thank you for trusting us & looking forward to
                                                The
                                                Next Crew Arrangement Requests! :)
                                            </h4>
                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif


    </div>


@endsection
