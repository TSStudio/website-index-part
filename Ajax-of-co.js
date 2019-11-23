
            var time=0;
            var xmlhttp;
                if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                }else{// code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
            function submit(){
                var time=0;
                var content=document.getElementById("code").value;
                xmlhttp.open("POST","search.php",true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send("content="+content);
            }
            xmlhttp.onreadystatechange=function(){
                time=time+1;
                if (xmlhttp.readyState==4 && xmlhttp.status==200){
                    var locationresult=document.getElementById("result");
                    locationresult.innerHTML='<div id="result">'+xmlhttp.responseText+status+'</div>';
                    var success=1;
                }else{
                    var locationresult=document.getElementById("result");
                    if(time==1){
                        locationresult.innerText="Working";
                    }else{
                        locationresult.innerText="Working.If long time no response,please refresh.";
                    }
                }
            }