<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KAIMUX | Jūsų IP Adresas</title>
        <link rel="stylesheet" href="/assets/IP/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.1/animate.css">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@900&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
</head>
@php
    function getIPAddress() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {  
            $ip = $_SERVER['HTTP_CLIENT_IP'];  
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
        } else {  
            $ip = $_SERVER['REMOTE_ADDR'];  
        }  
        return $ip;  
    }
    $ip = getIPAddress();
    $ip_splited = explode(".", $ip);
    $a = $ip_splited[0];
    $b = $ip_splited[1];
    $c = $ip_splited[2];
    $d = $ip_splited[3];

@endphp
<body>
        <center>
                <div class="background">
                </div>
                <div class="content animated fadeInDownBig">
                        <img class="animated pulse infinite" src="/assets/user/img/logo.png" alt="Logo">
                        <h1 id="title">Jūsų IP adresas:</h1>
                        <div class="countdown">
                                <div class="showDays">{{$a}}</div>.<div class="showHours">{{$b}}</div>.<div class="showMinutes">{{$c}}</div>.<div class="showSeconds">{{$d}}</div>
                        </div>
                        <p class="finished">
                            <button class="button" onclick="copy()">Kopijuoti</button>
                            <div id="copyIP" style="opacity: 0.01">{{$ip}}</div>
                        </p>
                </div>
        </center>
</body>
<script>
    function copy() {
        var range = document.createRange();
        range.selectNode(document.getElementById("copyIP"));
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);
        document.execCommand("copy");
        window.getSelection().removeAllRanges();
        alert("IP buvo nukopijuotas!");
    }
</script>

</html>