<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Excel Import Export System</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#667eea,#764ba2,#6B73FF);
}

.container{
    width:450px;
    background:#fff;
    padding:35px;
    border-radius:20px;
    box-shadow:0 15px 40px rgba(0,0,0,0.25);
}

h1{
    text-align:center;
    color:#333;
    margin-bottom:10px;
}

.subtitle{
    text-align:center;
    color:#777;
    margin-bottom:30px;
    font-size:14px;
}

.section{
    margin-bottom:25px;
}

.section h3{
    color:#444;
    margin-bottom:15px;
}

.export-btn{
    display:block;
    width:100%;
    text-decoration:none;
}

.export-btn button{
    width:100%;
    padding:14px;
    border:none;
    border-radius:10px;
    background:linear-gradient(135deg,#11998e,#38ef7d);
    color:white;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

.export-btn button:hover{
    transform:translateY(-2px);
    box-shadow:0 8px 20px rgba(0,0,0,0.2);
}

input[type=file]{
    width:100%;
    padding:12px;
    border:2px dashed #764ba2;
    border-radius:10px;
    margin-bottom:15px;
    background:#f8f8ff;
}

.import-btn{
    width:100%;
    padding:14px;
    border:none;
    border-radius:10px;
    background:linear-gradient(135deg,#fc466b,#3f5efb);
    color:white;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

.import-btn:hover{
    transform:translateY(-2px);
    box-shadow:0 8px 20px rgba(0,0,0,0.2);
}

hr{
    margin:25px 0;
    border:none;
    height:1px;
    background:#ddd;
}

.footer{
    text-align:center;
    margin-top:15px;
    color:#888;
    font-size:13px;
}

</style>

</head>
<body>

<div class="container">

    <h1>📊 Excel Import Export</h1>

    <p class="subtitle">
        PHP + MySQL + PhpSpreadsheet
    </p>

    <div class="section">

        <h3>📥 Export MySQL Data</h3>
        <a href="mysqltoexel.php">
            <button type="button">Download Excel File</button>
        </a>
    </div>

    <hr>

    <div class="section">

        <h3>📤 Import Excel Data</h3>

        <form action="exeltomysql.php" method="post" enctype="multipart/form-data">

            <input type="file" name="excel_file" accept=".xlsx,.xls" required>

            <button type="submit" name="import" class="import-btn">
                Upload & Import
            </button>

        </form>

    </div>

    <div class="footer">
        Student Management Excel System
    </div>

</div>

</body>
</html>