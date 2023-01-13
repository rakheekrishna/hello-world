<html>
    <head>
        <script>
            function getmodels(){
                var makeElem = document.getElementById("makes");
                var make = makeElem.options[makeElem.selectedIndex].value;
                var url = "ajaxtestdata.php?make="+make;
                var httpreq = new XMLHttpRequest();
                httpreq.open("GET",url,true);
                httpreq.onreadystatechange = function(){
                    if(httpreq.readyState == 4 && httpreq.status == 200){
                        var models = httpreq.responseText.split(',');
                        var modelElem = document.getElementById("models");
                        var model = '<option value = "" > -Select- </option>';
                        if(models) {
                            for(i=0;i<models.length;i++){
                                model += '<option value = "'+models[i]+'" > '+models[i]+' </option>';
                            }
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