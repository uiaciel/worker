@extends('layouts.kopsurat')
@section('content')
<p><strong>Tahap 1 werwer</strong><br />
    Crew Arrangement Request (C.A.R)<br />
    Query Request lu improve aja sur yg keren&nbsp;</p>
    
    <p>Request No. : (ini nomor biar dia yg ketik soalnya mereka punya sistem sendiri kayaknya dalam penomoran)<br />
    Ship Owner : Scroll &amp; Type Other (ada save/delete option, cookies kita collect data jg buat development ke depan)<br />
    Ship Name : Scroll &amp; Type Other<br />
    Fishing Area : Scroll &amp; Type Other<br />
    Nationality : Scroll negara<br />
    Number of Crew Member/s : Scroll 1-25<br />
    Period of Employment : Scroll 1-36 months&nbsp;</p>
    
    <p>Estimata Date of Embarkation : (tanggal) Port :<br />
    Estimate Date of Disembarkation : (tanggal) Port :&nbsp;</p>
    
    <p>Query Scroll Jenis Jabatan:<br />
    - Chief Cook<br />
    - Quarter Master<br />
    - Ice Master<br />
    - Assistant Ice Master<br />
    - Deck<br />
    - Engine<br />
    - Other (Type Other), kita collect data buat kategori ke depan jg.&nbsp;</p>
    
    <p>Age pilihan 18-48<br />
    Experience yes/no<br />
    Number 1-25<br />
    Remarks&nbsp;</p>
    
    <p><strong>Tahap 2</strong><br />
    Kita kirim calon tick tick tick aja dari database.<br />
    Database kita tampilkan All Crews &amp; Stand-by Crews bisa dilihat oleh Japantuna jg.&nbsp;</p>
    
    <p><strong>Tahap 3</strong><br />
    Dia seleksi dan konfirmasi mana aja krunya, lalu<br />
    Scroll Pilihan:<br />
    1. Air Ticket by JTFC -&gt; kalo pilih ini, keluar tulisan &quot;Please kindly arrange Guarantee Letter for All Crews&quot;<br />
    2. Air Ticket by AAT -&gt; kalo pilih ini, &quot;Please kindly wait, we will arrange Air Ticket soon&quot;&nbsp;</p>
    
    <p>Tahap 4 (kalo pilih Air Ticket by AAT)<br />
    Kita kirim penawaran Air Ticket&nbsp;</p>
    
    <p><strong>Tahap 5</strong><br />
    Japan Tuna scroll:<br />
    1. Please issue Air Ticket<br />
    2. Negotiate (siaran ulang tanpa batas nih di sini kembali ke tahap 4)<br />
    3. We will arrange Air Ticket by JTFC&nbsp;</p>
    
    <p><strong>Tahap 6</strong><br />
    Kalo pilih no 1 -&gt; &quot;Please kindly arrange Guarantee Letter for All Crews&quot; kaya tahap 3 no. 1&nbsp;</p>
    
    <p><strong>Tahap 7</strong><br />
    Kita informasikan &quot;All crews of Ship Name have passed Airport Immigration at 09.00, 13-Januari-2022. Thank you for trusting us &amp; looking forward to The Next Crew Arrangement Request! :)</p>
<hr>
<img src="/img/garansileter.jpg">
<img src="/img/FLIGHT.jpg">
<img src="/img/crew-a.jpg">

<p>setelah deal tiket, AAT / japan tuna upload tiket pesawat dan garansi letter </p>
<p>Form Upload Document</p>

<p>Informasi Status Crew otw </p>
<p>On going, Pass imigration,   </p>

<h3>20 Jan 2022</h3>
<!-- #######  THIS IS A COMMENT - Visible only in the source editor #########-->
<p>http://localhost:8000/order/create</p>
<p>Request ID : Input manual<br />Shipname : Bisa tambah sendiri<br />Number : minimal 0</p>
<p>Nationality : Select Nationality<br />Periode tambah kolom bulan</p>
<p>Period of Employment<br />Estimated udah bener</p>
<p>Port bisa manual</p>
<p>http://localhost:8000/order<br />Status bisa di ubah</p>
<p>Confirmed<br />Cancelled</p>
<p><br />http://localhost:8000/order/INV-HF7gF<br />Tombol update <br />Add request - remarks - recommended<br />Notes di hilangkan</p>
<p>Print All Crew yang sudah di submit (Print All Crews)<br />Print Approv Crew (Print Approved Crews)<br />View -&gt; View Profile</p>
<p>Air Ticket(s) Provided by <br />Air Ticket(s) by PT. ANGKASA AKBAR TARUNA (AAT)</p>
<p>Negotiate --&gt; Kolom Flight Schedule baru</p>
<p>tambahan<br />&lt;p&gt;setelah deal tiket, AAT / japan tuna upload tiket pesawat dan garansi letter &lt;/p&gt;<br />&lt;p&gt;Form Upload Document&lt;/p&gt;</p>
<p>&lt;p&gt;Informasi Status Crew otw &lt;/p&gt;<br />&lt;p&gt;On going, Pass imigration, &lt;/p&gt;</p>
<p>http://localhost:8000/print/INV-HF7gF<br />PRINTING <br />Thank you for choosing HILANG</p>
<p>1. CRA dari Japan tuna (Tanpa Kop)<br />2. Air Ticket(s) Kop AAT<br />3. Garansi Leeter (print)<br />4. Ticket(s) Crew (Print)</p>
<p>&nbsp;</p>    
@endsection