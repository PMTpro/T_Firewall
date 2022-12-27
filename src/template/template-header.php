<!DOCTYPE html>
<html lang="vi">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Xác nhận truy cập</title>
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
<style type="text/css">
body {
    background-color: #FFFFFF;
    color: #000000;
}

.container {
    margin: 0 auto;
    display: block;
    width: 500px;
    max-width: 100%;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    height: auto;
    text-align: center;
}

.knight {
    background: url('data:image/png;base64,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') no-repeat;
    width: 128px;
    height: 128px;
    margin: 0 auto;
}

.text1 {
    color: #8f2828;
    display: inline-block;
    font-size: 20px;
    font-weight: bold;
    padding: 5px;
    font-family: "Segoe UI", "Segoe", "Segoe WP", "Tahoma", "Verdana", "Arial", "sans-serif";
}

.dvbtn {
    text-align: center;
    margin: 10px;
}

.btn {
    border: none;
    background: #34495e;
    color: white;
    font-size: 16.5px;
    text-decoration: none;
    text-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-transition: 0.25s;
    -moz-transition: 0.25s;
    -o-transition: 0.25s;
    transition: 0.25s;
    -webkit-backface-visibility: hidden;
}

.btn.btn-red {
    background-color: #e74c3c;
    padding: 11px 19px;
    font-size: 17.5px;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
    cursor: pointer;
    font-family: "Segoe UI", "Segoe", "Segoe WP", "Tahoma", "Verdana", "Arial", "sans-serif";
}

.btn.btn-red:hover, .btn.btn-red:focus {
    background-color: #ec7063;
}

.btn.btn-gray {
    background-color: #95a5a6;
    padding: 11px 19px;
    font-size: 17.5px;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
    cursor: pointer;
    font-family: "Segoe UI", "Segoe", "Segoe WP", "Tahoma", "Verdana", "Arial", "sans-serif";
}

#fadingBarsG {
    position: relative;
    width: 240px;
    height: 29px;
    margin: 0 auto;
}

.fadingBarsG {
    position: absolute;
    top: 0;
    background-color: #bac4c5;
    width: 29px;
    height: 29px;
    -moz-animation-name: bounce_fadingBarsG;
    -moz-animation-duration: 1.3s;
    -moz-animation-iteration-count: infinite;
    -moz-animation-direction: normal;
    -moz-transform: scale(.3);
    -webkit-animation-name: bounce_fadingBarsG;
    -webkit-animation-duration: 1.3s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: normal;
    -webkit-transform: scale(.3);
    -ms-animation-name: bounce_fadingBarsG;
    -ms-animation-duration: 1.3s;
    -ms-animation-iteration-count: infinite;
    -ms-animation-direction: linear;
    -ms-transform: scale(.3);
    -o-animation-name: bounce_fadingBarsG;
    -o-animation-duration: 1.3s;
    -o-animation-iteration-count: infinite;
    -o-animation-direction: normal;
    -o-transform: scale(.3);
    animation-name: bounce_fadingBarsG;
    animation-duration: 1.3s;
    animation-iteration-count: infinite;
    animation-direction: normal;
    transform: scale(.3);
}

#fadingBarsG_1 {
    left: 0;
    -moz-animation-delay: 0.52s;
    -webkit-animation-delay: 0.52s;
    -ms-animation-delay: 0.52s;
    -o-animation-delay: 0.52s;
    animation-delay: 0.52s;
}

#fadingBarsG_2 {
    left: 30px;
    -moz-animation-delay: 0.65s;
    -webkit-animation-delay: 0.65s;
    -ms-animation-delay: 0.65s;
    -o-animation-delay: 0.65s;
    animation-delay: 0.65s;
}

#fadingBarsG_3 {
    left: 60px;
    -moz-animation-delay: 0.78s;
    -webkit-animation-delay: 0.78s;
    -ms-animation-delay: 0.78s;
    -o-animation-delay: 0.78s;
    animation-delay: 0.78s;
}

#fadingBarsG_4 {
    left: 90px;
    -moz-animation-delay: 0.91s;
    -webkit-animation-delay: 0.91s;
    -ms-animation-delay: 0.91s;
    -o-animation-delay: 0.91s;
    animation-delay: 0.91s;
}

#fadingBarsG_5 {
    left: 120px;
    -moz-animation-delay: 1.04s;
    -webkit-animation-delay: 1.04s;
    -ms-animation-delay: 1.04s;
    -o-animation-delay: 1.04s;
    animation-delay: 1.04s;
}

#fadingBarsG_6 {
    left: 150px;
    -moz-animation-delay: 1.17s;
    -webkit-animation-delay: 1.17s;
    -ms-animation-delay: 1.17s;
    -o-animation-delay: 1.17s;
    animation-delay: 1.17s;
}

#fadingBarsG_7 {
    left: 180px;
    -moz-animation-delay: 1.3s;
    -webkit-animation-delay: 1.3s;
    -ms-animation-delay: 1.3s;
    -o-animation-delay: 1.3s;
    animation-delay: 1.3s;
}

#fadingBarsG_8 {
    left: 210px;
    -moz-animation-delay: 1.43s;
    -webkit-animation-delay: 1.43s;
    -ms-animation-delay: 1.43s;
    -o-animation-delay: 1.43s;
    animation-delay: 1.43s;
}

@-moz-keyframes bounce_fadingBarsG {
    0% {
        -moz-transform: scale(1);
        background-color: #bac4c5;
    }

    100% {
        -moz-transform: scale(.3);
        background-color: #FFFFFF;
    }

}

@-webkit-keyframes bounce_fadingBarsG {
    0% {
        -webkit-transform: scale(1);
        background-color: #bac4c5;
    }

    100% {
        -webkit-transform: scale(.3);
        background-color: #FFFFFF;
    }

}

@-ms-keyframes bounce_fadingBarsG {
    0% {
        -ms-transform: scale(1);
        background-color: #bac4c5;
    }

    100% {
        -ms-transform: scale(.3);
        background-color: #FFFFFF;
    }

}

@-o-keyframes bounce_fadingBarsG {
    0% {
        -o-transform: scale(1);
        background-color: #bac4c5;
    }

    100% {
        -o-transform: scale(.3);
        background-color: #FFFFFF;
    }

}

@keyframes bounce_fadingBarsG {
    0% {
        transform: scale(1);
        background-color: #bac4c5;
    }

    100% {
        transform: scale(.3);
        background-color: #FFFFFF;
    }
}

.loading {
    margin: 10px;
}
</style>
<script type="text/javascript">
function submitForm() {
    document.getElementById('btnSubmit1').style.display = 'none';
    document.getElementById('btnSubmit2').style.display = 'inline-block';
    document.getElementById('loading').style.display = 'block';

    setTimeout(function () {
        document.getElementById("firewall_form").submit();
    }, <?php echo $_SESSION['__firewall_wait_allow'] ?>);
}
</script>
</head>

<body>
    <div class="container">