<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Via's Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        @font-face {
            font-family: 'Sweet Sans Heavy';
            src: url('SweetSansProHeavy.otf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: 'avenir-next-light';
            src: url('avenir-next-light.ttf') format('truetype');
        }
        .awal{
            font-size: 20px;
            font-family: 'Sweet Sans Heavy';
            align: left;
            margin-left: 150px;
        }
        .top{
            font-family: 'avenir-next-light';
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background: white;
            border-bottom: 1px solid #ddd;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
        }
        marquee{
            font-family: 'Sweet Sans Heavy';
            color: #3a3a3a;
        }
        .intro {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0px 40px 5px 30px;
            background: #0057ff;
            color: white;
            gap: 10px;
        }
        .image-container {
            flex: 1;
            width: 25%;
        }
        .image-container img {
            width: 70%;
            height: auto;
            display: block;
        }
        .text-container {
            max-width: 500px;
            z-index: 2;
            margin-left: -100px; 
            padding: 40px;
            flex: 1;
        }
        .text-container h1{
            font-size: 40px;
            font-family: 'Sweet Sans Heavy';
        }
        .description-box{
            background: white;
            padding: 50px;
            border-radius: 5px;
            box-shadow: 5 10px 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            color: #000000;
        }
        .description-box p{
            font-size: 15px;
            font-family: 'avenir-next-light';
            margin: 10px 0;
            line-height: 1.6;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 5px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 3px;
            transition: 0.3s;
            font-family: 'avenir-next-light';
        }
        .btn-primary {
            background-color: black;
            color: white;
        }
        .btn-secondary {
            border: 2px solid blue;
            color: blue;
        }
        .btn:hover {
            opacity: 0.8;
        }
        .biodata {
            background: #ffffff;
            padding: 30px;
            margin: 40px auto;
            width: 90%;
            max-width: 800px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            font-family: 'avenir-next-light';
        }
        .biodata:hover{
            transform: scale(1.02);
        }
        .biodata h2 {
            font-family: 'Sweet Sans Heavy';
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
            font-weight: 600;
        }
        .biodata table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
        }
        .biodata th, .biodata td {
            text-align: left;
            padding: 12px;
            border-bottom: 1px solid #ddd;
            font-size: 16px;
            color: #333;
        }
        .biodata th {
            font-weight: 600;
            width: 40%;
            background: #ecf0f1;
            color: #2c3e50;
        }
        .biodata td {
            font-weight: normal;
        }
        .biodata:hover{
            background: #f9f9f9;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: white;
            border-top: 1px solid #ddd;
        }
        .social-icons {
            display: flex; 
            gap: 20px;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
            justify-content: center; 
        }
        .social-icons a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: black;
            font-size: 16px;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .social-icons a:hover {
            color: #0077b5; 
        }
        .social-icons a.instagram:hover {
            color: #E4405F;
        }
        .social-icons a.linkedin:hover {
            color: #E4405F;
        }
        .social-icons a.github:hover {
            color: #333;
        }
        .social-icons img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            border-radius: 5px;
        }
        .social-icons span {
            white-space: nowrap;
            display: inline-block;
            font-family: 'Poppins';
        }
    </style>
</head>
<body id="body">
    <header>
        <h1 class="awal" id="awal">LYVIA VALENTINA.</h1>
        <nav class="top">
            <ul>
                <li><a href="#body">Home</a></li>
                <li><a href="#biodata">Biodata</a></li>
                <li><a href="#social-icons">Contact</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <h1>
        <marquee id="myMarquee" direction="right" scrollamount="10" behavior="scroll" width="100%" style="text-align: center;">
            Welcome to My Portfolio
        </marquee> 
    </h1>
    <section class="intro">
        <div class="image-container">
            <img src="lyvia.jpg" alt="Profile Image">
        </div>
        <div class="text-container">
            <h1>Hi, I'm Lyvia.</h1>
            <div class="description-box">
                <p>
                Saya adalah seorang mahasiswa jurusan Sistem Informasi yang memiliki minat mendalam pada data 
                dan machine learning. Saya selalu berusaha untuk mengembangkan keterampilan teknis dan pemahaman 
                saya dalam dunia data serta teknologi terkini. Dalam perjalanan akademik saya, saya berfokus pada 
                bagaimana teknologi dapat digunakan untuk memecahkan masalah nyata dan memberikan nilai tambah bagi 
                </p>
                <p>
                Saya memiliki kemampuan dalam analisis data, pemrograman, dan pengolahan informasi, serta tertarik 
                untuk menerapkan pengetahuan ini dalam proyek-proyek berbasis data. Saya juga aktif mengikuti 
                perkembangan terbaru di bidang machine learning dan berkomitmen untuk terus belajar serta 
                berkolaborasi dalam tim untuk mengembangkan solusi inovatif.
                </p>
            </div><br>
            <a href="Lyvia Valentina-CV.pdf" class="btn btn-primary" target="_blank">Check out my CV</a>
        </div>
    </section>
    <section class="biodata" id="biodata">
        <h2>Biodata Diri</h2>
        <table>
            <tr>
                <th>Nama Lengkap</th>
                <td>Lyvia Valentina</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>09031282328080</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>SI Reg 4C</td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td>Sistem Informasi</td>
            </tr>
            <tr>
                <th>Fakultas</th>
                <td>Ilmu Komputer</td>
            </tr>
            <tr>
                <th>Universitas</th>
                <td>Universitas Sriwijaya</td>
            </tr>
            <tr>
                <th>Tempat, Tanggal Lahir</th>
                <td>Curup, 31 Desember 2005</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>Palembang</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>valentinalyvia@gmail.com</td>
            </tr>
            <tr>
                <th>No. Telepon</th>
                <td>+62 822-8112-8021</td>
            </tr>
        </table>
    </section>
    <footer>
        <div class="social-icons" id="social-icons">
            <a href="https://www.instagram.com/lyviavalentina" target="_blank" class="instagram">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" width="30">
                <span>@lyviavalentina</span>
            </a>
            <a href="https://www.linkedin.com/in/lyviavalentina" target="_blank" class="linkedin">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn" width="30">
                <span>@lyviavalentina</span>
            </a>
            <a href="https://github.com/lyviavalentina" target="_blank" class="github">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg" alt="GitHub" width="30">
                <span>@lyviavalentina</span>
            </a>
        </div><br>
        <p>&copy; <?php echo date("Y"); ?> Lyvia Valentina. All rights reserved.</p>
    </footer>

    <script>
        setTimeout(function () {
            document.getElementById("myMarquee").stop();
        }, 3100); 
    </script>   
</body>
</html>