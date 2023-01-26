<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>365-Entertain-videoplay</title>
    <style>
        body,html
        {
            height: 90%;
            /* width: 100%; */
            box-sizing: border-box;
            background-image: url("images/body.gif");
            padding: 0;
            margin: 0;
        }
        section{
           
            height:55vh;
            padding-top: 70px;
            margin-left: 20px;  
        }
        .cont
        {
            height: 100%;
        }
        .cont video{
            padding: 0;
            height: inherit;
        }
        button
        {
            margin-top: 5px;
            margin-right: 10px;
            float: right;
            padding: 12px;
            background-color:rgb(24, 124, 158);
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover
        {
            background-color:  rgb(31, 188, 240);
            scale: 110%;

        }
        .overview{
            color: #fff;
            margin-top:0px;       
        }
        .detail
        {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 48%;
            
        }
        .detail  a{
           color: rgb(28, 96, 232);
        }
        
        @media screen and (max-width:815px)
        {
            body,html
            {
                height: 100%; 
                margin-left: -5px; 
                margin-right: 4px;   
            }
          
          a button{
            margin-right: 0px;
            margin-top: 9px;
           }
           .detail {
               width: 100%;
           }
           section{
            height: 26vh;
           }
        }
        @media screen and (max-width:975px){
            section{
            height: 25vh;
           }
        }
    </style>
</head>
<body onload="funcc()">
    
    <a href="main.php"><button>BACK</button></a>
    <section>
    <div class="cont">
        <video controls class="inside" autoplay set id="vidz">
            <source src="videos/marvel.mp4"type="video/mp4" id="video">
        </video>
    </div>
    <div class="overview"><span class="detail"> <h2>Overview:</h2> <a  class="link" target="_blank" href="https://en.wikipedia.org/wiki/Marvel_Cinematic_Universe#:~:text=The%20Marvel%20Cinematic%20Universe%20(MCU,books%20published%20by%20Marvel%20Comics.">Know More</a> </span><span class="description">  </span> </div>
   </section>
    

    <script src="js.js">
    
    </script>
</body>
</html>