<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Pengajuan Vendor</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Segoe UI,sans-serif;
}

body{
    background:#f5f0e8;
}

.container{
    max-width:1000px;
    margin:30px auto;
    background:#fff;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 3px 12px rgba(0,0,0,.1);
}

/* HEADER */
.detail-header{
    background:#4a3d3d;
    padding:20px 30px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.header-left{
    display:flex;
    align-items:center;
    gap:15px;
}

.back-btn{
    width:40px;
    height:40px;
    border-radius:50%;
    background:rgba(255,255,255,.15);
    color:#fff;
    display:flex;
    justify-content:center;
    align-items:center;
    text-decoration:none;
    font-size:22px;
}

.title-area h2{
    color:#fff;
    font-size:24px;
}

.title-area p{
    color:#d7d7d7;
    font-size:13px;
}

.status-badge{
    background:#fff3d4;
    color:#d89000;
    padding:7px 15px;
    border-radius:20px;
    font-size:13px;
    font-weight:600;
}

/* STEPPER */
.stepper{
    background:#4a3d3d;
    padding:0 30px 20px;
    display:flex;
    align-items:center;
}

.step{
    display:flex;
    align-items:center;
    gap:8px;
}

.step span{
    width:30px;
    height:30px;
    border-radius:50%;
    background:#6f6363;
    color:#fff;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:13px;
}

.step.active span{
    background:#f0a318;
}

.step p{
    color:#ddd;
    font-size:14px;
}

.step.active p{
    color:#f0a318;
}

.line{
    flex:1;
    height:2px;
    background:#6f6363;
    margin:0 10px;
}

/* CONTENT */
.content{
    padding:30px;
}

.section-title{
    font-size:14px;
    color:#888;
    margin-bottom:20px;
    font-weight:600;
}

.form-grid{
    display:grid;
    grid-template-columns:1fr;
    gap:20px;
}

.form-group{
    display:flex;
    flex-direction:column;
}

.form-group label{
    margin-bottom:8px;
    color:#666;
    font-size:14px;
}

.form-group label span{
    color:#f0a318;
}

.form-group input,
.form-group textarea,
.form-group select{
    width:100%;
    border:1px solid #ddd;
    border-radius:10px;
    padding:14px;
    font-size:14px;
    background:#fff;
}

.form-row{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:15px;
}

textarea{
    resize:none;
    min-height:90px;
}

/* FOOTER BUTTON */
.footer-btn{
    border-top:1px solid #eee;
    padding:25px 30px;
    display:flex;
    justify-content:space-between;
}

.btn{
    border:none;
    border-radius:10px;
    padding:14px 30px;
    cursor:pointer;
    font-size:15px;
}

.btn-back{
    background:#efebe5;
    color:#555;
}

.btn-next{
    background:#f0a318;
    color:white;
}

.btn-next:hover{
    background:#de9400;
}

/* RESPONSIVE */
@media(max-width:768px){

.form-row{
    grid-template-columns:1fr;
}

.step p{
    display:none;
}

.detail-header{
    flex-direction:column;
    gap:15px;
    align-items:flex-start;
}

.footer-btn{
    flex-direction:column;
    gap:10px;
}

.btn{
    width:100%;
}
}
</style>

</head>
<body>

<div class="container">

    <!-- HEADER -->
    <div class="detail-header">

        <div class="header-left">

            <a href="admin_pengajuan.php" class="back-btn">‹</a>

            <div class="title-area">
                <h2>Detail Pengajuan</h2>
                <p>JMV-4921 - CV Maju Bersama</p>
            </div>

        </div>

        <div class="status-badge">
            ● Menunggu
        </div>

    </div>

    <!-- STEPPER -->
    <div class="stepper">

        <div class="step active">
            <span>1</span>
            <p>Perusahaan</p>
        </div>

        <div class="line"></div>

        <div class="step">
            <span>2</span>
            <p>Pengguna</p>
        </div>

        <div class="line"></div>

        <div class="step">
            <span>3</span>
            <p>Produk</p>
        </div>

        <div class="line"></div>

        <div class="step">
            <span>4</span>
            <p>Dokumen</p>
        </div>

    </div>

    <!-- FORM -->
    <div class="content">

        <div class="section-title">
            IDENTITAS PERUSAHAAN
        </div>

        <div class="form-grid">

            <div class="form-group">
                <label>Nama Perusahaan <span>*</span></label>
                <input type="text" value="CV Maju Bersama" readonly>
            </div>

            <div class="form-group">
                <label>Jenis Badan Usaha <span>*</span></label>
                <select disabled>
                    <option selected>CV</option>
                </select>
            </div>

            <div class="form-row">

                <div class="form-group">
                    <label>NPWP <span>*</span></label>
                    <input type="text" value="12.345.678.9-001.000" readonly>
                </div>

                <div class="form-group">
                    <label>NIB</label>
                    <input type="text" value="1234567890123" readonly>
                </div>

            </div>

            <div class="form-group">
                <label>Alamat Perusahaan <span>*</span></label>

                <textarea readonly>Jl. Raya Jember No.45, Kel. Tegalboto, Kec. Sumbersari</textarea>
            </div>

        </div>

    </div>

    <!-- BUTTON -->
    <div class="footer-btn">

        <button class="btn btn-back" onclick="window.location.href='admin_pengajuan.php'">
            Kembali
        </button>

        <button class="btn btn-next" onclick="window.location.href='pengguna.html'">
            Selanjutnya ›
        </button>

    </div>

</div>

</body>
</html>