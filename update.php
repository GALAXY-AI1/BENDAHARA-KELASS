<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$tipe = $_POST['tipe'];
$catatan = $_POST['catatan'];

$sql = "UPDATE tabungan SET 
        nama='$nama',
        jumlah='$jumlah',
        tipe='$tipe',
        catatan='$catatan'
        WHERE id=$id";

if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo/* styles.css - baby blue theme */
:root{
  --bg:#E9F7FF;
  --card:#ffffff;
  --accent:#8ED1F7;
  --accent-2:#6FC3F0;
  --success:#2ECC71;
  --danger:#FF6B6B;
  --muted:#7a8b96;
  --glass: rgba(255,255,255,0.8);
}

*{box-sizing:border-box}
body{
  margin:0;
  font-family: Inter, system-ui, sans-serif;
  background: linear-gradient(180deg, var(--bg) 0%, #DFF4FF 100%);
  min-height:100vh;
  color:#013243;
}

/* sky decorations */
.sky{ position:fixed; inset:0; pointer-events:none; z-index:0; }
.decor{ position:absolute; font-size:36px; opacity:0.95; }
.decor.moon{ top:20px; right:30px; transform:rotate(-6deg); font-size:48px; animation: floatY 10s ease-in-out infinite; }
.decor.stars{ top:60px; left:30px; font-size:20px; animation: twinkle 6s infinite; }
.decor.cloud{ top:120px; left:60px; font-size:48px; opacity:0.6; animation: floatX 14s linear infinite; }
.decor.tree{ bottom:30px; left:10px; font-size:48px; transform:translateY(6px); }
.decor.bird{ top:150px; right:200px; font-size:28px; animation: fly 8s linear infinite; }

@keyframes floatY { 0%{transform:translateY(0)}50%{transform:translateY(-12px)}100%{transform:translateY(0)} }
@keyframes floatX { 0%{transform:translateX(0)}50%{transform:translateX(20px)}100%{transform:translateX(0)} }
@keyframes fly { 0%{transform:translateX(0)}50%{transform:translateX(-60px)}100%{transform:translateX(0)} }
@keyframes twinkle { 0%{opacity:.9}50%{opacity:.4}100%{opacity:.9} }

/* app layout */
.app{ position:relative; z-index:1; max-width:1100px; margin:40px auto; padding:20px; }
header{ text-align:center; margin-bottom:14px; }
.title{ margin:0; font-size:34px; letter-spacing:0.6px; }
.pulse{ margin-top:8px; font-size:16px; color:var(--muted); }
.pulse-text{ display:inline-block; margin:0 6px; animation: heartbeat 1.2s infinite; }
@keyframes heartbeat {
  0%{ transform: scale(1) }
  25%{ transform: scale(1.08) }
  40%{ transform: scale(0.98) }
  60%{ transform: scale(1.04) }
  100%{ transform: scale(1) }
}

/* cards & grid */
.grid{ display:grid; grid-template-columns: 320px 320px 1fr; gap:16px; align-items:start; }
.panel{ background:var(--card); padding:14px; border-radius:14px; box-shadow:0 6px 18px rgba(0,0,0,0.06); }
.panel.wide{ grid-column: 1 / 4; }

.form-inline{ display:flex; gap:8px; }
.form-inline input{ flex:1; padding:8px 10px; border-radius:8px; border:1px solid #e6f2fb; }
.form-inline .btn{ padding:8px 12px; }

/* members list */
.members{ list-style:none; padding:0; margin:10px 0 0; }
.members li{ display:flex; align-items:center; justify-content:space-between; padding:8px 6px; border-radius:8px; margin-bottom:8px; background: linear-gradient(180deg,#fff,#f6fdff); box-shadow:0 2px 8px rgba(15,70,90,0.03); }
.small{ font-size:13px; color:var(--muted); margin-left:8px; }

/* table */
.tx-table{ width:100%; border-collapse:collapse; font-size:14px; }
.tx-table thead th{ text-align:left; padding:8px 10px; background:transparent; color:#03506f; font-weight:600; }
.tx-table tbody td{ padding:8px 10px; border-top:1px solid #eef9ff; }
.tx-table tr.income td{ background: linear-gradient(90deg,#f7fffb,#ecfffb); }
.tx-table tr.expense td{ background: linear-gradient(90deg,#fff7f7,#fff0f0); }

/* buttons */
.btn{ background:var(--accent); border:none; color:white; padding:8px 12px; border-radius:10px; cursor:pointer; text-decoration:none; display:inline-block; }
.btn.primary{ background:var(--accent-2); box-shadow: 0 6px 18px rgba(111,195,240,0.18); transform: translateY(0); transition: transform .18s ease; }
.btn:hover{ transform: translateY(-4px); }
.btn.tiny{ padding:4px 8px; font-size:12px; border-radius:8px; }
.btn.danger{ background:var(--danger); }

/* small animations for features (timbul warna & naik turun) */
.total-card{ display:inline-block; background:linear-gradient(90deg,#fff,#f6fbff); padding:12px 18px; border-radius:12px; margin-top:12px; box-shadow:0 10px 30px rgba(14,84,120,0.06); }
.total-card .amount{ font-size:20px; font-weight:700; margin-top:6px; animation: pulseColor 3s infinite; }
@keyframes pulseColor {
  0%{ transform: translateY(0); color:#013243; }
  50%{ transform: translateY(-6px) scale(1.02); color:#075985; text-shadow: 0 6px 18px rgba(13,82,120,0.08); }
  100%{ transform: translateY(0); color:#013243; }
}
.rise{ animation: floatY 6s ease-in-out infinite; }

/* forms */
.form-vertical label{ display:block; margin-bottom:10px; font-size:14px; color:#05475a; }
.form-vertical input, .form-vertical select{ width:100%; padding:10px; border-radius:8px; border:1px solid #e0f3fb; background:rgba(255,255,255,0.9); }

/* responsive */
@media(max-width:980px){
  .grid{ grid-template-columns: 1fr; }
  .panel.wide{ grid-column: auto; }
}

/* muted look */
.muted{ color:var(--muted); text-align:center; padding:8px 0; }
 "Gagal update: " . $conn->error;
}
?>
