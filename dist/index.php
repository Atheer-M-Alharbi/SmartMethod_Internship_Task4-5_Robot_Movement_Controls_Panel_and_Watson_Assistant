<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    input{
        width: 150px;
        height: 150px;
        text-align: center; 
        content: center;
        border-radius: 10px;
        border-width: 0px;
        background-color: rgb(248, 248, 248);
        font-size: 30px;
    } 

    div{
        text-align: center; 
        content: center;
    }
    </style>

</head>
<body> 
 
    <div>
        <div>
            <img id="logo_img" src="logo.png" alt="logo" />
        </div>
        <div>
            <input id="value" value="<?php echo $_GET['value']; ?>" readonly /> 
        </div>
    </div>

    <script>
        window.addEventListener('load', (e) => {
        const addMovement= document.getElementById('value')
        console.log(addMovement.value) 
    })
    </script>

<script src="bundle.js"></script>
    
</body>
</html>