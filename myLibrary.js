function ajaxRequest()
{
    try // for all brousers except for IE
    {
        var request = new XMLHttpRequest()
    }
    catch(e1)
    {
        try // for IE 6+
        {
            request = new ActiveXObject("Msxml2.XMLHTTP")
        }
        catch(e2)
        {
            try //for IE 5
            {
                request = new ActiveXObject("Microsoft.XMLHTTP")
            }
            catch(e3)
            {
                request = false
            }
        }
    }
    return request
}

function doLoad(value)
{
    var request = new ajaxRequest();
    request.onreadystatechange = function(){
        if(request.readyState == 4) document.getElementById("model").innerHTML = request.responseText;
    }
    request.open("post","request.php",true);
    request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    request.send("marka="+value);
}