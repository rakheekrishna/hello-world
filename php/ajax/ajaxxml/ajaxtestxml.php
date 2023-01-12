<html>
    <head>
        <script>
            function getmodels(){
                var makeElem = document.getElementById("makes");
                var modelElem = document.getElementById("models");
                var make = makeElem.options[makeElem.selectedIndex].value;
                var url = "ajaxtestdata.xml";
                var httpreq = new XMLHttpRequest();
                httpreq.open("GET",url,true);
                httpreq.onreadystatechange = function(){
                    if(httpreq.readyState == 4 && httpreq.status == 200){
                        var models = httpreq.responseXML;
                        var makexml = models.getElementsByTagName(make);
                        var modelxml = makexml[0].getElementsByTagName("model");
                        var model = '<option value = "" > -Select- </option>';
                        for(i=0;i<modelxml.length;i++){
                            model += '<option value = "'+modelxml[i].childNodes[0].nodeValue+'" > '+modelxml[i].childNodes[0].nodeValue+' </option>';
                            modelElem.innerHTML = model;
                        }
                    }
                }
                httpreq.send();
            }
        </script>
    </head>
    <body>
        <select id="makes" onchange="getmodels()">
            <option value = "" > -Select- </option>
            <option value = "Nissan" > -Nissan- </option>
            <option value = "Honda" > -Honda- </option>
            <option value = "Jeep" > -Jeep- </option>
        </select>
        <select id="models">
        <option value = "" > -Select Make- </option>
        </select>

    </body>
</html>