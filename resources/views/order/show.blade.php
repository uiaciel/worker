@extends('layouts.main')
@section('content')
    @if (Auth::id() == 2)
        <div class="bg-secondary pt-10 pb-21"></div>
        <div class="container-fluid w-auto bg-secondary mt-n22 px-6">
            <div class="row ">

                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0  text-white">Request {{ $order->inv }}</h3>
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
                    <form action="{{ route('order.update', $order->id) }}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf

                        <div class="card">
                            <!-- card header  -->
                            <div class="card-header bg-white  py-4">
                                <div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mb-2 mb-lg-0">
                                            <h4 class="mb-0">To: PT. ANGKASA AKBAR TARUNA (AAT)
                                                <br>From: JAPAN TUNA FISHERIES CORPORATION (JTFC)
                                            </h4>
                                        </div>
                                        <div>
                                            <a href="/print/{{ $order->inv }}" class="btn btn-primary"
                                                style="width:150px;" target="_blank">Print</a>
                                            <button type="submit" class="btn btn-primary btn-md"
                                                style="width:150px;">Update</button>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <!-- card body  -->
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-9">
                                        <select class="form-select" name="status">

                                            <option value="Confirmed">Confirmed</option>
                                            <option value="Cancelled">Cancelled</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="shipowner" class="col-sm-3 col-form-label">Ship Owner</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="shipowner" class="form-control"
                                            value="{{ $order->shipowner }}">
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
                                                aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-default">
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
                                        <input type="number" name="member" value="{{ $order->member }}"
                                            class="form-control" id="inputPassword">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Period of
                                        Employment</label>
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
                                            <input type="text" name="start" id="datestart"
                                                value="{{ $order->start }}" class="form-control">
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


                                <button type="button" class="btn btn-primary btn-round btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Add Request
                                </button>
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <thead>
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
                                            @foreach ($orderjob as $index => $job)
                                                <tr>
                                                    <td>{{ ++$index }}</td>
                                                    <td>{{ $job->job->name }}</td>
                                                    <td>{{ $job->age }}</td>
                                                    <td>{{ $job->exp }}</td>
                                                    <td>{{ $job->number }}</td>
                                                    <td>{{ $job->remark }}</td>
                                                    <td>
                                                        <form method="POST"
                                                            action="{{ route('orderjob.destroy', $job->id) }}">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <div class="form-group">
                                                                <input type="submit" class="btn btn-danger delete-user"
                                                                    value="Delete">
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot class="font-weight-bold small">
                                        </tfoot>
                                    </table>
                                </div>
                                <!--table responsive end-->
                                <div class="form-group">
                                    <label for="">Notes</label>
                                    <textarea class="form-control" name="remarks" rows="5">{{ $order->remarks }}</textarea>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- row  -->
            @isset($orderjob)
                <div class="row mt-6">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- card title -->
                                <div class="d-flex ">
                                    <!-- img -->
                                    <div>
                                        <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md"
                                            alt="">
                                    </div>
                                    <!-- content -->
                                    <div class="ms-3 ">
                                        <h5 class="mb-1">Admin AAT</h5>
                                        <p class="fs-2 text-dark mb-2">Please do approval to the selected crew(s) below!
                                        </p>
                                        <p class="fs-5 mb-0">2m ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-6">
                    <div class="col-md-12 col-12">
                        <!-- card  -->
                        <div class="card">
                            <!-- card header  -->
                            <div class="card-header bg-white  py-4">
                                <div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mb-2 mb-lg-0">
                                            <h4 class="mb-0">To: PT. ANGKASA AKBAR TARUNA (AAT)
                                                <br>From: JAPAN TUNA FISHERIES CORPORATION (JTFC)
                                            </h4>
                                        </div>
                                        <div>
                                            <a href="/orderprint/{{ $order->inv }}" target="_blank"
                                                class="btn btn-primary">Print Crew Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card body  -->
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data"
                                    action="{{ route('ordercrewall.update') }}">
                                    @csrf
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Job</th>
                                                <th>Age</th>
                                                <th>Action</th>
                                                <th class="bg-primary text-white">APPROVAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ordercrew as $index => $ordercrx)
                                                <tr @if ($ordercrx->status == 'ACC') class="bg-primary text-white" @endif>
                                                    <td><input value="{{ $ordercrx->id }}" name="id[]"
                                                            hidden>{{ $ordercrx->crew->name }}</td>
                                                    <td>{{ $ordercrx->crew->job->name }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($ordercrx->crew->birth)->diff(\Carbon\Carbon::now())->y }}
                                                        Old</td>
                                                    <td>View
                                                    </td>
                                                    <td class="bg-primary">
                                                        <select name="status[]" class="form-control">
                                                            @if ($ordercrx->status == 'ACC')
                                                                <option value="ACC">APPROVE</option>
                                                                <option value="RECOMMENDATION">NO ACC</option>
                                                            @else
                                                                <option value="RECOMMENDATION">NO ACC</option>
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

                                                <option value="{{ $order->airticketby }}">{{ $order->airticketby }}</option>
                                                <option>== CHOOSE ==</option>
                                                <option value="JTFC">JTFC</option>
                                                <option value="AAT">AAT</option>

                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endisset
            @if ($order->airticketby == 'AAT')
                <div class="row mt-6">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- card title -->
                                <div class="d-flex ">
                                    <!-- img -->
                                    <div>
                                        <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md"
                                            alt="">
                                    </div>
                                    <!-- content -->
                                    <div class="ms-3 ">
                                        <h5 class="mb-1">Admin AAT</h5>
                                        <p class="fs-3 text-dark mb-2">Thank you! Please kindly find our offer below!
                                        </p>
                                        <p class="fs-5 mb-0">2m ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach ($tickets as $ticket)
                    <div class="row mt-6">
                        <div class="col-md-12 col-12">
                            <!-- card  -->
                            <div class="card">
                                <!-- card header  -->
                                <div class="card-header bg-white  py-4">




                                    <h4 class="mb-0">From: PT. ANGKASA AKBAR TARUNA (AAT)
                                        <br>To: JAPAN TUNA FISHERIES CORPORATION (JTFC)
                                    </h4>
                                </div>
                                <!-- card body  -->
                                <div class="card-body">


                                    {!! $ticket->detail !!}.
                                    <!--<h2>Air Ticket by PT. ANGKASA AKBAR TARUNA (AAT)</h2>-->
                                    <!--  <div class="collapse" id="jftc">-->
                                    <!--    <div class="card card-body">-->
                                    <!--        "Please kindly arrange Guarantee Letter for All Crews"                                </div>-->
                                    <!--  </div>-->
                                    <!--  <div class="collapse" id="aat">-->
                                    <!--    <div class="card card-body">-->
                                    <!--        "Please kindly wait, we will arrange Air Ticket soon"                                 </div>-->
                                    <!--  </div>-->


                                    <!--  <table class="table table-bordered">-->
                                    <!--    <thead>-->
                                    <!--        <tr>-->

                                    <!--            <th>Name</th>-->
                                    <!--            <th>JOB</th>-->
                                    <!--            <th>PASSPORT NO</th>-->
                                    <!--            <th>D.O.B</th>-->
                                    <!--        </tr>-->
                                    <!--    </thead>-->
                                    <!--    <tbody>-->

                                    <!--        @foreach ($ordercrew->where('status', 'ACC') as $index => $ordercrxz)
    -->
                                    <!--            <tr>-->


                                    <!--                <td><input value="{{ $ordercrxz->id }}" name="id[]"-->
                                    <!--                        hidden>{{ $ordercrxz->crew->name }}</td>-->
                                    <!--                <td>{{ $ordercrxz->crew->job }}</td>-->
                                    <!--                <td>{{ $ordercrxz->crew->passport_id }}</td>-->
                                    <!--                <td>{{ $ordercrxz->crew->birth }}-->


                                    <!--                </td>-->

                                    <!--            </tr>-->
                                    <!--
    @endforeach-->

                                    <!--    </tbody>-->



                                    <!--</table>-->

                                </div>
                                <div class="card-footer">



                                    <form action="{{ route('ticket.update', ['id' => $ticket->id]) }}" method="POST">
                                        @csrf
                                        <div class="mb-3 row">









                                            <label for="shipowner" class="col-sm-3 col-form-label">Please Confirm
                                                {{ $ticket->id }}</label>

                                            <div class="col-sm-9">
                                                <input value="{{ $order->inv }}" name="orderinv" hidden />
                                                <select class="form-control" name="status">
                                                    @if ($ticket->status == 'deal')
                                                        <option value="deal">Please issue Air Ticket (DEAL)</option>
                                                        <option value="nego">Negotiate </option>
                                                        <option value="byJTFC">We will arrange Air Ticket by JTFC</option>
                                                    @elseif($ticket->status == 'nego')
                                                        <option value="nego">Negotiate </option>
                                                        <option value="deal">Please issue Air Ticket (DEAL)</option>
                                                        <option value="byJTFC">We will arrange Air Ticket by JTFC</option>
                                                    @else
                                                        <option value="byJTFC">We will arrange Air Ticket by JTFC</option>
                                                        <option value="nego">Negotiate </option>
                                                        <option value="deal">Please issue Air Ticket (DEAL)</option>
                                                    @endif
                                                </select>


                                            </div>


                                        </div>
                                        <button class="btn btn-primary mb-4" type="submit">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row mt-6">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- card title -->
                                <div class="d-flex ">
                                    <!-- img -->
                                    <div>
                                        <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md"
                                            alt="">
                                    </div>
                                    <!-- content -->
                                    <div class="ms-3 ">
                                        <h5 class="mb-1">Admin AAT</h5>
                                        <p class="fs-3 text-dark mb-2">Please kindly arrange & upload Air Ticket(s) &
                                            Guarantee Letter of All Crews below!
                                        </p>
                                        <p class="fs-5 mb-0">2m ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="row mt-6">
                <div class="col-12">
                    <!-- card -->
                    <div class="card">
                        <div class="card-header bg-white  py-4">

                            <h4 class="mb-0">Upload Documents
                            </h4>
                        </div>
                        <!-- card body -->
                        <div class="card-body">

                            <!--                          <form method="post" action="{{ url('file') }}" enctype="multipart/form-data">-->
                            <!--{{ csrf_field() }}-->
                            <!--  <div class="input-group hdtuto control-group lst increment" >-->
                            <!--    <input type="file" name="filenames[]" class="myfrm form-control">-->
                            <!--    <div class="input-group-btn"> -->
                            <!--      <button class="btn btn-success addcl" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>-->
                            <!--    </div>-->
                            <!--  </div>-->
                            <!--  <div class="clone hide">-->
                            <!--    <div class="hdtuto control-group lst input-group" style="margin-top:10px">-->
                            <!--      <input type="file" name="filenames[]" class="myfrm form-control">-->
                            <!--      <div class="input-group-btn"> -->
                            <!--        <button class="btn btn-danger removecl" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>-->
                            <!--      </div>-->
                            <!--    </div>-->
                            <!--  </div>-->
                            <!--  <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>-->
                            </form>



                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Air Ticket(s)</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                </div>
                                <label for="inputPassword" class="col-sm-2 col-form-label">Guarantee Letter</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                </div>
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-6">
                <div class="col-12">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- card title -->
                            <div class="d-flex ">
                                <!-- img -->
                                <div>
                                    <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md"
                                        alt="">
                                </div>
                                <!-- content -->
                                <div class="ms-3 ">
                                    <h5 class="mb-1">Admin AAT</h5>
                                    <p class="fs-3 text-dark mb-2">"Thank you! Now you can check status of All Crew(s)
                                        Immigration Pass below!
                                    </p>
                                    <p class="fs-5 mb-0">2m ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-6">
                <div class="col-md-12 col-12">
                    <!-- card  -->
                    <div class="card">
                        <div class="card-header bg-white  py-4">
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mb-2 mb-lg-0">
                                        <h4 class="mb-0">IMMIGRATION PASS</h4>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <!-- card header  -->

                        <!-- card body  -->
                        <div class="card-body">
                            <h3>{{ $order->shipname }}</h3>
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
                                    @foreach ($ordercrew as $index => $ordercrx)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td><input value="{{ $ordercrx->id }}" name="id[]"
                                                    hidden>{{ $ordercrx->crew->name }}</td>
                                            <td>{{ $ordercrx->crew->birth }}</td>
                                            <td>{{ $ordercrx->crew->job->name }}</td>
                                            <td>{{ $ordercrx->crew->passport_id }}</td>

                                            <td>
                                                <span class="badge bg-success">PASSED!</span>

                                            </td>
                                            <td>17 Nov 2022, 13:00</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-6">
                <div class="col-12">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- card title -->
                            <div class="d-flex ">
                                <!-- img -->
                                <div>
                                    <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md"
                                        alt="">
                                </div>
                                <!-- content -->
                                <div class="ms-3 ">
                                    <h5 class="mb-1">Admin of PT. Akagami Kaiza Indonesia</h5>
                                    <p class="fs-3 text-dark mb-2">Thank you for trusting us & looking forward to The Next
                                        Crew Arrangement Requests! :)
                                    </p>
                                    <p class="fs-5 mb-0">2m ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{-- end JAPAN TUNA --}}
    {{-- AAT --}}
    @if (Auth::id() == 1)
        <div class="bg-primary pt-10 pb-21"></div>
        <div class="container-fluid mt-n22 px-6">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <h3 class="mb-0  text-white">Request #IND-9238</h3>
                            </div>
                            <div>
                                {{-- <a href="{{route('order.create')}}" class="btn btn-white">Create New Project</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row  -->
            <div class="row mt-6">
                <div class="col-md-12 col-12">
                    <!-- card  -->
                    <div class="card">
                        <!-- card header  -->

                        <div class="card-header bg-white  py-4">
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mb-2 mb-lg-0">
                                        <h4 class="mb-0">To: PT. ANGKASA AKBAR TARUNA (AAT)
                                            <br>From: JAPAN TUNA FISHERIES CORPORATION (JTFC)
                                        </h4>
                                    </div>
                                    <div>
                                        <a href="" class="btn btn-primary">Print</a>
                                        <a href="" class="btn btn-primary">Confirmed</a>
                                        <a href="" class="btn btn-primary">Update</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- card body  -->
                        <div class="card-body">
                            <h3 class="text-center mb-3">CREW ARRANGEMENT REQUEST</h3>
                            <div class="row">
                                <p>Request No.: {{ $order->inv }}
                                    <br><br>Ship Owner: {{ $order->shipowner }}
                                    <br><br>Ship Name: {{ $order->shipname }}
                                </p>
                                <div class="col">
                                    <p>
                                        Fishing Area: {{ $order->fishingarea }}
                                        <br><br>Nationaly: {{ $order->nationaly }}
                                    </p>
                                </div>
                                <div class="col">
                                    <p>Number of Crew Member(s): {{ $order->member }}</p>
                                    <p>Period of Employment: {{ $order->periode }} Months</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p style="margin-left: 25px;" class="mb-3">Estimated Date of Embarkation:
                                        {{ $order->start }}</p>
                                    <p style="margin-left: 25px;" class="mb-3">Estimated Date of Disembarkation:
                                        {{ $order->end }}</p>

                                </div>
                                <div class="col">
                                    <p style="margin-left: 25px;" class="mb-3">Port: {{ $order->portstart }}</p>
                                    <p style="margin-left: 25px;" class="mb-3">Port: {{ $order->portend }}</p>

                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase small font-weight-bold">No.</th>
                                                <th class="text-uppercase small font-weight-bold">Class of Crew</th>
                                                <th class="text-uppercase small font-weight-bold">Age</th>
                                                <th class="text-uppercase small font-weight-bold">Experience</th>
                                                <th class="text-uppercase small font-weight-bold">Number</th>
                                                <th class="text-uppercase small font-weight-bold">Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orderjob as $index => $job)
                                                <tr>
                                                    <td>{{ ++$index }}</td>
                                                    <td>{{ $job->job->name }}</td>
                                                    <td>{{ $job->age }}</td>
                                                    <td>{{ $job->exp }}</td>
                                                    <td>{{ $job->number }}</td>
                                                    <td>{{ $job->remark }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot class="font-weight-bold small">
                                        </tfoot>
                                    </table>
                                </div>
                                <!--table responsive end-->
                                <div class="form-group">
                                    <label for="">Notes</label>
                                    <textarea class="form-control" rows="5" disabled></textarea>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-12">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- card title -->
                            <div class="d-flex ">
                                <!-- img -->
                                <div>
                                    <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md"
                                        alt="">
                                </div>
                                <!-- content -->
                                <div class="ms-3 ">
                                    <h5 class="mb-1">Admin Japan Tuna</h5>
                                    <p class="fs-3 text-dark mb-2">Hello! We need crew(s), please kindly arrange!
                                    </p>
                                    <p class="fs-5 mb-0">2m ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-md-12 col-12">
                    <!-- card  -->
                    <div class="card">
                        <!-- card header  -->
                        <div class="card-header bg-white  py-4">
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mb-2 mb-lg-0">
                                        <h4 class="mb-0">Request Response </h4>
                                    </div>
                                    <div>
                                        <a href="" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#datacrewnya">Add Crews</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- card body  -->
                        <div class="card-body">

                            <!-- Modal -->
                            <div class="modal fade" id="datacrewnya" tabindex="-1" aria-labelledby="datacrewnyaLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#datacrew"
                                                role="button" aria-expanded="false" aria-controls="datacrew">
                                                Data Crews
                                            </a>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Crew terpilih</h4>
                                            <form method="POST" action="{{ route('ordercrew.store') }}">
                                                @csrf
                                                <input value="{{ $order->id }}" name="order_id" hidden>
                                                <table id="destinationtable" class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Url</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                                <button type="submit" class="btn btn-primary btn-round btn-md mr-2"><span
                                                        class="btn-label">
                                                        <i class="fa fa-pencil"></i>
                                                    </span>Update</button>
                                            </form>
                                            <!-- collapse -->
                                            <div class="collapse" id="datacrew">
                                                <div class="card card-body">
                                                    <h3>Data Semua Crew :</h3>
                                                    <table id="sourcetable" class="table table-bordered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Name</th>
                                                                <th>Url</th>
                                                                <th>action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($crew as $index => $kru)
                                                                <tr id="sour{{ $kru->id }}">
                                                                    <td><input class="form-check-input" type="checkbox">
                                                                        {{ ++$index }}</td>
                                                                    <td>{{ $kru->name }}</td>
                                                                    <td>{{ $kru->job->name }}<input
                                                                            value="{{ $kru->id }}" name="crew_id[]"
                                                                            hidden></td>
                                                                    <td>{{ \Carbon\Carbon::parse($kru->birth)->diff(\Carbon\Carbon::now())->y }}
                                                                        tahun</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form method="post" action="{{ url('/ordercrew/deleteall') }}">
                                @csrf
                                <input class="btn btn-success" type="submit" name="submit" id="btndelete"
                                    value="Delete All Users" style="display: none" />
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="custom-control custom-checkbox"><input type="checkbox"
                                                        id="checkAll"> Semua</div>
                                            </th>
                                            <th>Name</th>
                                            <th>Job</th>
                                            <th>Age</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ordercrew as $ordercrewx)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="id[]" value="{{ $ordercrewx->id }}">
                                                            <span class="form-check-sign">Select</span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td><input value="{{ $ordercrewx->id }}" name="order_id[]"
                                                        hidden>{{ $ordercrewx->crew->name }}</td>
                                                <td>{{ $ordercrewx->crew->job->name }}</td>
                                                <td>{{ \Carbon\Carbon::parse($ordercrewx->crew->birth)->diff(\Carbon\Carbon::now())->y }}
                                                    Old</td>
                                                <td>
                                                    <form method="POST" action="/ordercrew/{{ $ordercrewx->id }}">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <div class="form-group">
                                                            <input type="submit"
                                                                class="btn btn-danger btn-sm delete-user" value="Delete">
                                                        </div>
                                                    </form>
                                                    <input type="text" class="form-control" name="remark[]"
                                                        aria-describedby="helpId" value="No" hidden>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-12">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- card title -->
                            <div class="d-flex ">
                                <!-- img -->
                                <div>
                                    <img src="/assets/images/avatar/avatar-6.jpg" class="rounded-circle avatar-md"
                                        alt="">
                                </div>
                                <!-- content -->
                                <div class="ms-3 ">
                                    <h5 class="mb-1">Admin AAT</h5>
                                    <p class="fs-3 text-dark mb-2">Thanks for your response, we have done crew(s)
                                        selection. Please kindly arrange!
                                    </p>
                                    <p class="fs-5 mb-0">2m ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-md-12 col-12">
                    <!-- card  -->
                    <div class="card">
                        <div class="card-header bg-white  py-4">
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mb-2 mb-lg-0">
                                        <h4 class="mb-0">To: PT. ANGKASA AKBAR TARUNA (AAT)
                                            <br>From: JAPAN TUNA FISHERIES CORPORATION (JTFC)
                                        </h4>
                                    </div>
                                    <div>
                                        <a href="/orderprint/{{ $order->inv }}" target="_blank"
                                            class="btn btn-primary">Print All Crew</a>
                                        <a href="/orderprint/{{ $order->inv }}" target="_blank"
                                            class="btn btn-primary">Print Approved Crews</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- card header  -->

                        <!-- card body  -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Job</th>
                                        <th>Age</th>
                                        <th>Action</th>
                                        <th>APPROVAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ordercrew as $index => $ordercrx)
                                        <tr @if ($ordercrx->status == 'ACC') class="bg-primary text-white" @endif>
                                            <td><input value="{{ $ordercrx->id }}" name="id[]"
                                                    hidden>{{ $ordercrx->crew->name }}</td>
                                            <td>{{ $ordercrx->crew->job }}</td>
                                            <td>{{ \Carbon\Carbon::parse($ordercrx->crew->birth)->diff(\Carbon\Carbon::now())->y }}
                                                Old</td>
                                            <td>View Profile
                                            </td>
                                            <td>
                                                @if ($ordercrx->status == 'ACC')
                                                    YES
                                                @else
                                                    NO
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-6">
                <div class="col-md-12 col-12">
                    <!-- card  -->
                    <div class="card">
                        <!-- card header  -->
                        <div class="card-header bg-white  py-4">
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mb-2 mb-lg-0">
                                        <h4 class="mb-0">Flight Schedule (TinyMCE) </h4>
                                    </div>
                                    <div>
                                        <a href="" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#penawarantiket">Buat Penawaran</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- card body  -->
                        <div class="card-body">

                            <div class="row align-items-center">



                                <div class="accordion" id="accordionExample">
                                    @foreach ($tickets as $tikets)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button btn-primary" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#penawaran{{ $tikets->id }}" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Penawaran #{{ $tikets->id }} - <strong>
                                                        @if (is_null($tikets->status))
                                                            menunggu respon
                                                        @else
                                                            {{ $tikets->status }}
                                                        @endif
                                                    </strong>
                                                </button>
                                            </h2>
                                            <div id="penawaran{{ $tikets->id }}" class="accordion-collapse collapse"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    {!! $tikets->detail !!}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                            </hr>


                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!--end container-->
    @endif
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                {{-- <form method="POST" action="{{route('ordercrew.store')}}">
          @csrf --}}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Request</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('orderjob.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input value="{{ $order->id }}" name="order_id" hidden>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">JOB</label>
                            <select class="form-control" name="job">
                                <option>--SELECT--</option>
                                <option>DECK</option>
                                <option>ENGINE</option>
                                <option>ASSISTANT ICE MASTER</option>
                                <option>ICE MASTER</option>
                                <option>ASSISTANT COOK</option>
                                <option>CHIEF COOK</option>
                                <option>BOSUN</option>
                                <option>QUARTER MASTER</option>

                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">AGE</label>
                            <select class="form-control" name="age" id="">
                                <option>--SELECT--</option>
                                <option value="18-30">18-30</option>
                                <option value="18-30">31-40</option>
                                <option value="40+">40+</option>
                            </select>

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">EXP</label>

                            <select class="form-control" name="exp" id="">
                                <option>--SELECT--</option>
                                <option value="YES">YES</option>
                                <option value="NO">NO</option>

                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">NUMBER</label>

                            <select class="form-control" name="number" id="">
                                <option>--SELECT--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                            </select>

                        </div>
                        <div class="mb-3">

                            <label for="exampleInputPassword1" class="form-label">REMARKS</label>

                            <select class="form-control" name="remark">
                                <option>--SELECT--</option>
                                <option value="NEW">NEW</option>
                                <option value="FIXED">FIXED</option>
                                <option value="REJOIN">REJOIN</option>
                                <option value="RECOMMEND">RECOMMEND</option>

                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="penawarantiket" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Buat Penawaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('ticket.store') }}" method="POST">
                        @csrf
                        <input class="form-control" name="orderid" value="{{ $order->id }}" hidden />
                        <input class="form-control" name="orderinv" value="{{ $order->inv }}" hidden />
                        <textarea id="mytextarea" class="form-control" name="detail" rows="30">
                        <!--<table class="table table-bordered">-->
                   
                  
                        <!--    <tbody>-->
                        <!--        <tr>-->
                        <!--            <td scope="row">15-10-20</td>-->
                        <!--            <td>QR975</td>-->
                        <!--            <td>QR782</td>-->
                        <!--            <td>CGK-DOH</td>-->
                        <!--            <td>18.45 - 23.30</td>-->
                        <!--            <td>OK</td>-->
                        <!--        </tr>-->
                        <!--        <tr>-->
                        <!--         <td scope="row">15-10-20</td>-->
                        <!--         <td>QR975</td>-->
                        <!--         <td>QR782</td>-->
                        <!--         <td>CGK-DOH</td>-->
                        <!--         <td>18.45 - 23.30</td>-->
                        <!--         <td>OK</td>-->
                        <!--     </tr>-->
                        <!--     <tr>-->
                        <!--         <td scope="row">15-10-20</td>-->
                        <!--         <td>QR975</td>-->
                        <!--         <td>QR782</td>-->
                        <!--         <td>CGK-DOH</td>-->
                        <!--         <td>18.45 - 23.30</td>-->
                        <!--         <td>OK</td>-->
                        <!--     </tr>-->
                         
                        <!-- </tbody>-->
                        <!--</table>-->
                        <!--<h5>**PRICE : US$ 1.730 - / PERSON</h5>-->
                        <!--<h5>DOCUMENT FOR AGENT & F/MASTER WILL BE KEPT BY MR. MOCHIN!
                        TIME LIMIT SOON <br>BOOKING CODE: 5L37LH</h5> -->
                    </textarea>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script>
        var addedrows = new Array();
        $(document).ready(function() {
            $("#sourcetable tbody tr").on("click", function(event) {
                var ok = 0;
                var theid = $(this).attr('id').replace("sour", "");
                var newaddedrows = new Array();
                for (index = 0; index < addedrows.length; ++index) {
                    // if already selected then remove
                    if (addedrows[index] == theid) {
                        $(this).css("background-color", "#ffffff");
                        // remove from second table :
                        var tr = $("#dest" + theid);
                        tr.css("background-color", "#FF3700");
                        tr.fadeOut(400, function() {
                            tr.remove();
                        });
                        //addedrows.splice(theid, 1);   
                        //the boolean
                        ok = 1;
                    } else {
                        newaddedrows.push(addedrows[index]);
                    }
                }
                addedrows = newaddedrows;
                // if no match found then add the row :
                if (!ok) {
                    // retrieve the id of the element to match the id of the new row :
                    addedrows.push(theid);
                    $(this).css("background-color", "#cacaca");
                    $('#destinationtable tr:last').after('<tr id="dest' + theid + '"><td>' +
                        $(this).find("td").eq(0).html() + '</td><td>' +
                        $(this).find("td").eq(1).html() + '</td><td>' +
                        $(this).find("td").eq(2).html() + '</td><td>' +
                        $(this).find("td").eq(3).html() + '</td></tr>');
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#sourcetable').DataTable();
        });
    </script>
    <script>
        $("#checkAll").click(function() {
            $('input:checkbox').not(this).prop('checked', this.checked);
            if ($('input:checkbox').is(":checked"))
                $("#btndelete").show();
            else
                $("#btndelete").hide();
        });
    </script>
    <script>
        $('.delete-user').click(function(e) {
            e.preventDefault() // Don't post the form, unless confirmed
            if (confirm('Are you sure?')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });
    </script>
    <script>
        $(".checkboxMail1").change(function() {
            var setval = this.checked ? "ACC" : "RECOMMENDATION";
            $(".checkMailOK").text(setval);
            $("#mail1").val(setval);
        });
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $(".addcl").click(function() {
                var lsthmtl = $(".clone").html();
                $(".increment").after(lsthmtl);
            });
            $("body").on("click", ".removecl", function() {
                $(this).parents(".hdtuto control-group lst").remove();
            });
        });
    </script>
@endsection
<!--
<div class="row">
    
    <div class="col-md-12">
        
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center"">
                Step 3 FLIGHT SCHEDULE provide by aat <button type="button" class="btn btn-sm btn-primary">EMAIL</button>
            </div>
            <div class="card-body">
                
                {{-- <img src="/img/FLIGHT.jpg" width="50%"> --}}
               <table class="table">
                   
                  
                   <tbody>
                       <tr>
                           <td scope="row">15-10-20</td>
                           <td>QR975</td>
                           <td>QR782</td>
                           <td>CGK-DOH</td>
                           <td>18.45 - 23.30</td>
                           <td>OK</td>
                       </tr>
                       <tr>
                        <td scope="row">15-10-20</td>
                        <td>QR975</td>
                        <td>QR782</td>
                        <td>CGK-DOH</td>
                        <td>18.45 - 23.30</td>
                        <td>OK</td>
                    </tr>
                    <tr>
                        <td scope="row">15-10-20</td>
                        <td>QR975</td>
                        <td>QR782</td>
                        <td>CGK-DOH</td>
                        <td>18.45 - 23.30</td>
                        <td>OK</td>
                    </tr>
                
                </tbody>
               </table>
               <h2>**PRICE : US$ 1.730 - / PERSON</h2>
               <h3>DOCUMENT FOR AGENT & F/MASTER WILL KEEP BY MR. MOCHIN TIME LIMID SOON <br>BOOKING CODE: 5L37LH</h3>
               
               Nego untuk cari harga penerbangan yang lain
               Japan tuna approve
            </div>
            
        </div>
        <div class="card">
            <div class="card-header">
                TICKET STATUS
            </div>
            <div class="card-body">
                <table class="table">
                   
                    <tbody>
                        <tr>
                            <td scope="row">15-10-20</td>
                            <td>QR975</td>
                            <td>QR782</td>
                            <td>CGK-DOH</td>
                            <td>18.45 - 23.30</td>
                            <td>OK</td>
                            <td><span class="badge badge-pill badge-primary">Issued</span></td>
                            <td><span class="badge badge-pill badge-success">View</span></td>
                        </tr>
                        <tr>
                         <td scope="row">15-10-20</td>
                         <td>QR975</td>
                         <td>QR782</td>
                         <td>CGK-DOH</td>
                         <td>18.45 - 23.30</td>
                         <td>OK</td>
                         <td><span class="badge badge-pill badge-primary">Issued</span></td>
                         <td><span class="badge badge-pill badge-success">View</span></td>
                     </tr>
                     <tr>
                         <td scope="row">15-10-20</td>
                         <td>QR975</td>
                         <td>QR782</td>
                         <td>CGK-DOH</td>
                         <td>18.45 - 23.30</td>
                         <td>OK</td>
                         <td><span class="badge badge-pill badge-primary">Issued</span></td>
                         <td><span class="badge badge-pill badge-success">View</span></td>
                     </tr>
                 
                 </tbody>
                </table>
            </div>
            
        </div>
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center"">
                Step 4 PERMOHONAN SURAT GARANSI <button type="button" class="btn btn-sm btn-primary">Button</button>
            </div>
            <div class="card-body">
                <div class="row">
                
                    <div class="col-6">
                        PERMOHONAN SURAT GARANSI
                        upload / email
        
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Permohonan Garansi</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center"">
                Step 5 SURAT GARANSI <button type="button" class="btn btn-sm btn-primary">Button</button>
            </div>
            <div class="card-body">
                <div class="row">
                
                   
                    <div class="col-6">
                        SURAT GARANSI
                        upload / email
        
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Surat Garansi</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
        
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="card">
            <div class="card-header">
                Step 6 STATUS keberangkatan
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Passport No.</th>
                        <th>Date of Birth</th>
                        <th>Immigration Status</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">15-10-20</td>
                            <td>QR975</td>
                            <td>QR782</td>
                            
                            <td><span class="badge badge-pill badge-primary">Passed</span></td>
                        </tr>
                        <tr>
                         <td scope="row">15-10-20</td>
                         <td>QR975</td>
                         <td>QR782</td>
                         
                         <td><span class="badge badge-pill badge-primary">Passed</span></td>
                     </tr>
                     <tr>
                         <td scope="row">15-10-20</td>
                         <td>QR975</td>
                         <td>QR782</td>
                        
                         <td><span class="badge badge-pill badge-primary">Passed</span></td>
                     </tr>
                 
                 </tbody>
                </table>
                
                
            </div>
            
        </div>
    </div>
</div>
disable -->
