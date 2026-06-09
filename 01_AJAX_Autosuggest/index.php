<!DOCTYPE html>
<html>
<head>
    <title>Internship Search</title>

    <script>
    function searchData()
    {
        var mode = document.getElementById("mode").value;

        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function()
        {
            if(xhr.readyState == 4 && xhr.status == 200)
            {
                document.getElementById("result").innerHTML = xhr.responseText;
            }
        }

        xhr.open("GET","search.php?mode="+mode,true);
        xhr.send();
    }
    </script>

</head>
<body>

<h2>Internship Student Details</h2>

<select id="mode" onchange="searchData()">
    <option value="">Select Mode</option>
    <option value="online">Online</option>
    <option value="onsite">Onsite</option>
    <option value="hybrid">Hybrid</option>
</select>

<br><br>

<div id="result"></div>

</body>
</html>