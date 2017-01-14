



<style type="text/css">
    #console { width:100%; height: 60px; border-radius: 5px; background: #2e7d32; margin-bottom: 0px; padding: 5px 10px; }
    #console pre { color: #fff; font-family: arial; line-height: 1.5; overflow: hidden; }
    #console pre a { font-weight: bold; color: #fff; text-decoration: underline; }

    #console .keyword { color: #fff; }
    #console .string { color: #ff8714; }
    #console .function { color: #fff; }
    #console .variable { color: #ffd67d; }
</style>


<div id="console">
    <pre id="consoleText">
    </pre>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript">
    var text = '<span class="keyword" style="font-weight: bold";>Notre mission :</span> <span class="function">Placer les fruits et légumes frais des agriculteurs locaux dans les assiettes des restaurateurs Lillois.</span>';

    var currentChar = 1;
    var htmltag = false;
    var cache = '';


    function type()
    {
        var str = text.substr(0, currentChar);
        var last = str.substr(str.length -1, str.length);
        if(last != '<' && last != '>' & last != '/') {
            $("#consoleText").html(str);
        }
        currentChar++;
        if(currentChar <= text.length)
        {
            if(last == '<') {
                htmltag = true;
            } else if(last == '>') {
                htmltag = false;
            }
            if(htmltag) {
                setTimeout(type, 1);
            } else {
                setTimeout(type, 50);
            }
        }
    }

    $(document).ready(function() {
        $("#consoleText").html("");
        setTimeout(type, 2000);
    });

</script>




