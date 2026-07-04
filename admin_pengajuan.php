<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jember Mart - Berau</title>
    <link rel="stylesheet" href="style.css">
    <style>
.container{
    max-width:1200px;
    margin:auto;
    background:#fff;
}

.content-admin{
    max-width:900px;
    margin:30px auto;
    background:#f5f0e8;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 2px 10px rgba(0,0,0,.1);
}

.admin-top{
    background:#4a3d3d;
    padding:25px;
    border-radius:0 0 15px 15px;
}

.admin-body{
    padding:0;
}

.admin-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
}

.admin-header h2{
    color:#fff;
    font-size:30px;
    margin:0;
}

.admin-header p{
    color:#d8d8d8;
    margin:0;
}

.search-btn{
    width:42px;
    height:42px;
    border-radius:50%;
    background:rgba(255,255,255,.15);
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    cursor:pointer;
}

.stats-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:15px;
}

.stat-card{
    background:#fff;
    border-radius:10px;
    padding:15px;
    text-align:center;
}

.stat-card h3{
    color:#f0a318;
    margin:0;
    font-size:32px;
}

.stat-card span{
    color:#999;
    font-size:13px;
}

/* BAR FILTER PUTIH FULL LEBAR */
.filter-bar{
    width:100%;
    background:#fff;
    padding:12px 20px;
    box-sizing:border-box;

    display:flex;
    gap:10px;
    align-items:center;

    border-top:1px solid #ececec;
    border-bottom:1px solid #ececec;

    margin-bottom:20px;
}

.filter-bar button{
    border:1px solid #e5e5e5;
    background:#fff;
    color:#777;
    border-radius:20px;
    padding:8px 16px;
    font-size:13px;
    cursor:pointer;
    transition:.2s;
}

.filter-bar button:hover{
    background:#f8f8f8;
}

.filter-bar .active{
    background:#f0a318;
    color:#fff;
    border-color:#f0a318;
}

/* LIST VENDOR */
.vendor-list{
    padding:0 20px 20px;
    display:flex;
    flex-direction:column;
    gap:15px;
}

.vendor-card{
    background:#fff;
    border-radius:14px;
    padding:16px;
    display:flex;
    align-items:center;
    gap:15px;
}

.vendor-logo{
    width:52px;
    height:52px;
    border-radius:12px;
    border:1px solid #f0c06a;
    display:flex;
    justify-content:center;
    align-items:center;
    font-weight:bold;
    color:#d89000;
}

.vendor-info{
    flex:1;
}

.vendor-info h3{
    margin:0;
    font-size:18px;
}

.vendor-info p{
    margin:3px 0;
    color:#666;
}

.vendor-meta{
    display:flex;
    gap:10px;
    font-size:12px;
    color:#999;
}

.status{
    padding:2px 10px;
    border-radius:15px;
}

.waiting{
    background:#fff3d4;
    color:#d89000;
}

.accepted{
    background:#dff7ea;
    color:#1f9b5c;
}

.rejected{
    background:#ffe0e0;
    color:#d63b3b;
}

.arrow{
    font-size:24px;
    color:#bbb;
}
.vendor-card{
    cursor:pointer;
    transition:.2s;
}

.vendor-card:hover{
    transform:translateY(-2px);
    box-shadow:0 4px 12px rgba(0,0,0,.1);
}
    </style>
</head>

<body>

<main class="content-admin">

    <!-- HEADER COKLAT -->
    <div class="admin-top">

        <div class="admin-header">

            <div>
                <h2>Pengajuan Vendor</h2>
                <p>Jember Mart Admin Panel</p>
            </div>

            <div class="search-btn">🔍</div>

        </div>

        <div class="stats-grid">

            <div class="stat-card">
                <h3>12</h3>
                <span>Total</span>
            </div>

            <div class="stat-card">
                <h3>7</h3>
                <span>Menunggu</span>
            </div>

            <div class="stat-card">
                <h3>3</h3>
                <span>Diterima</span>
            </div>

            <div class="stat-card">
                <h3>2</h3>
                <span>Ditolak</span>
            </div>

        </div>

    </div>

    <div class="admin-body">

        <!-- FILTER -->
        <div class="filter-bar">

            <button class="active">Semua</button>
            <button>Menunggu</button>
            <button>Diproses</button>
            <button>Diterima</button>
            <button>Ditolak</button>

        </div>

        <!-- LIST VENDOR -->

        <div class="vendor-list">

<div class="vendor-card" onclick="window.location.href='detail_pengajuan.php?id=1'">

    <div class="vendor-logo">MB</div>

    <div class="vendor-info">
        <h3>CV Maju Bersama</h3>
        <p>Keripik Pisang Coklat</p>

        <div class="vendor-meta">
            <span>JMK-2023-001</span>
            <span class="status waiting">● Menunggu</span>
            <span>5 Jun 2026</span>
        </div>
    </div>

    <div class="arrow">›</div>

</div>

            <div class="vendor-card">

                <div class="vendor-logo">SR</div>

                <div class="vendor-info">

                    <h3>UD Sari Rasa</h3>

                    <p>Sambal Matah Bali</p>

                    <div class="vendor-meta">

                        <span>JMK-2023-002</span>

                        <span class="status waiting">
                            ● Menunggu
                        </span>

                        <span>4 Jun 2026</span>

                    </div>

                </div>

                <div class="arrow">›</div>

            </div>

            <div class="vendor-card">

                <div class="vendor-logo">NS</div>

                <div class="vendor-info">

                    <h3>PT Nusantara Snack</h3>

                    <p>Kacang Telur Pedas</p>

                    <div class="vendor-meta">

                        <span>JMK-2023-003</span>

                        <span class="status accepted">
                            ● Diterima
                        </span>

                        <span>3 Jun 2026</span>

                    </div>

                </div>

                <div class="arrow">›</div>

            </div>

            <div class="vendor-card">

                <div class="vendor-logo">DI</div>

                <div class="vendor-info">

                    <h3>UD Dapur Ibu</h3>

                    <p>Rendang Kemasan</p>

                    <div class="vendor-meta">

                        <span>JMK-2023-004</span>

                        <span class="status rejected">
                            ● Ditolak
                        </span>

                        <span>1 Jun 2026</span>

                    </div>

                </div>

                <div class="arrow">›</div>

            </div>

            <div class="vendor-card">

                <div class="vendor-logo">HN</div>

                <div class="vendor-info">

                    <h3>CV Herbal Nusantara</h3>

                    <p>Minuman Jahe Merah</p>

                    <div class="vendor-meta">

                        <span>JMK-2023-005</span>

                        <span class="status waiting">
                            ● Menunggu
                        </span>

                        <span>2 Jun 2026</span>

                    </div>

                </div>

                <div class="arrow">›</div>

            </div>

        </div>

    </div>

</main>

</body>

</html>