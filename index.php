<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instagram Token</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-size: 18px;
            font-weight: 300;
            line-height: 1.625;
            color: #3f4254;
            -webkit-font-smoothing: antialiased;
            font-family: 'Ubuntu', sans-serif;
        }

        .site-content {
            max-width: 720px;
            margin: 50px auto 0;
        }

        .site-content *{

            text-align: center;
        }

        input.instagram-access-token {
            font-size: 18px;
            padding: 14px;
            width: auto;
            text-overflow: ellipsis;
            background: #fff;
            border: 2px solid #ebeced;
            color: #222;
            max-width: 100%;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            transition: 300ms;
        }

        input.instagram-access-token:focus,
        input.instagram-access-token:active{
            border-color: #0d23ff;
        }
    </style>
</head>
<body>
<div class="site-content">
    <h1>It worked!</h1>
    <p>
        Use this token in the appropriate field on your website or blog, and
        you should have a working Instagram widget.
    </p>
    <p>
        click to copy!
    </p>
    <div class="token-input-wrapper">
        <input type="text" id="insta_token" class="instagram-access-token" size="50" onclick="copy_to_clipboard()">
    </div>
</div>


<script>
    var str = window.location.hash;
    var token = str.split("#access_token=").pop();
    document.getElementById('insta_token').setAttribute('value', token);
    function copy_to_clipboard() {
        var copyText = document.getElementById("insta_token");
        copyText.select();
        copyText.setSelectionRange(0, 99999); /*For mobile devices*/
        document.execCommand("copy");
      //  alert("Copied the text: " + copyText.value);
    }
</script>
</body>
</html>