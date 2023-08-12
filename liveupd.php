<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.back {
    background: rgb(132, 48, 48);
}

.news {
    box-shadow: inset 0 -15px 30px rgba(33, 4, 60, 0.4), 0 5px 10px rgba(84, 20, 100, 0.5);
    width: 100%;
    border-left-width : 20px;
    height: 40px;
    margin-top: 0px;
    overflow: hidden;
    border-radius: 6px;
    padding: 1px;
    -webkit-user-select: none;
}

.news span {
    float: left;
    color: #fff;
    padding: 9px;
    position: relative;
    top: 1%;
    box-shadow: inset 0 -15px 30px rgba(0, 0, 0, 0.4);
    font: 16px 'Raleway', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -webkit-user-select: none;
    cursor: pointer;
}

.text1 {
    position: relative;
    width: 90%;
}

.marquee-content {
    white-space: nowrap;
    
    animation: marquee-scroll 20s linear infinite;
    color : white;
}

@keyframes marquee-scroll {
    0% { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
}
</style>
<script>
        function updatecontent() {
            // Send an AJAX request to fetch the content dynamically
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("marqueecontent").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "get_content.php", true); 
            xhttp.send();
        }

       
        updatecontent();
        setInterval(updatecontent, 5000); // Update the marquee content every 5 seconds
    </script>
</head>
</head>
<body>
<div class="news back">
    <span style="background-color:rgb(0, 0, 0);width:125px;height:40px;z-index:1;">Latest News</span>
    <div class="text1">
        <div class="marquee-content" id="marqueecontent">
            
        </div>
    </div>
</div>
</body>
</html>
