<!DOCTYPE html> 
<script src="modules/interface.js"></script>
<?php
        error_reporting(0);
        if($_GET['download'] == "true") {
            $file = fopen("saves/TwiCode.txt", "w");
            $txt = str_replace(',', "\n", $_GET['code']);
            fwrite($file, $txt);
            header("location: saves/download.php?path=TwiCode.txt&code=". $_GET['code']);
        }
    ?>
<html id="backgroundMain">
<head>
    <title>TwiCode - Langage de Programmation</title>
</head>
<body id="main" style="background: white;">
    <textarea id="code" rows="25" cols="100"><?php
	if($_GET['code'] != null) {
		$code = str_replace('	', "", $_GET['code']);
		$code = str_replace(',', '&#13;&#10;', $code);
		echo $code;
	}?></textarea>

    <div id="share"></div>

    <button onClick="compile()">Compile</button>
    <button onClick="clearConsole()">Clear</button>
    <button onclick="getShare();">Save</button></a>
    <button onClick="getShare()">Stop</button>
    <button onClick="share()">Share</button>
    <button onClick="download()">Télécharger</button>
    <button onClick="share()">Importer</button>

    <div id="console"></div>
</body>

<script>

    var out = document.getElementById("console");

    function share() {
		var sharecontent = "";

		var sharecode = document.getElementById("code").value;

		sharecontent = sharecode.split("\n");


		document.getElementById("share").innerHTML = "<a href='https://code.twidev.fr/?code=" + sharecontent + "' target='blank_'>Share your code : https://code.twidev.fr/?code=" + sharecontent + "</a>";
	}

	function getShare() {
		var sharecontent = "";

		var sharecode = document.getElementById("code").value;

		sharecontent = sharecode.split("\n");

		window.location.href = "?code=" + sharecontent;
	}

    function download() {
        var sharecontent = "";

        var sharecode = document.getElementById("code").value;

        sharecontent = sharecode.split("\n");

        window.location.href = "?download=true&code=" + sharecontent;
    }

    function appendLog(log) {
        out.innerHTML += log + "<br/>";
    }

    function isLetter(str) {
        return str.match(/[a-z]/i);
    }

    function isLetterOrNumber(str) {
        return str.match(/[a-z]/i) || str.match(/[1-9]/i);
    }

    function split(str) {
        var array = [];
        var iterator = "", isInQuote = false, hasBlocker = false, end = false, putQuote = false, argLevel = 0;

        for(var i = 0; i < str.length; i++) {
            var char = str.charAt(i);

            if(char == " ") {
                if(!isInQuote) {
                    if(!end) {
                        end = true;
                    }else{
                        iterator += char;
                    }
                }else{
                    iterator += char;
                }
            }else if(char == "=" && !isInQuote) {
                var thechar = iterator.charAt(iterator.length - 1);
                if(isLetterOrNumber(thechar) || thechar == '"') {
                    if(iterator != "") {
                        array.push(iterator);
                    }
                    array.push(char);
                    iterator = "";
                    end = false;
                } else {
                    iterator += char;
                    array.push(iterator);
                    iterator = "";
                    end = false;
                }
            }else if(char =="," && !isInQuote) {
                hasBlocker = true;
                iterator += char;
            }else if(char == "+" && !isInQuote) {
                hasBlocker = true;
                iterator += char;
            }else if(char == "*" && !isInQuote) {
                hasBlocker = true;
                iterator += char;
            }else if(char == "-" && !isInQuote) {
                hasBlocker = true;
                iterator += char;
            }else if(char == "(" && !isInQuote) {
                argLevel++;
                iterator += char;
            }else if(char == ")" && !isInQuote) {
                argLevel--;
                iterator += char;
            }else if(char == '"') {
                if(argLevel == 0 && !isInQuote && !hasBlocker) {
                    if(iterator != "")
                        array.push(iterator);
                    iterator = char;
                    end = false;  
                }else{
                    iterator += char;
                }
            }else{
                if(end) {
                    if(!hasBlocker) {
                        if(iterator != "")
                            array.push(iterator);
                        iterator = char;
                        end = false;
                    }else{
                        iterator += char;
                    }
                }else{
                    iterator += char;
                }
            }
        }

        if(iterator != "")
            array.push(iterator);
        return array;
    }

    function resplit(string, maxLevel) {
        var str = string.toString();

        if(str.charAt(0) == "(" && str.charAt(str.length - 1) == ")") {
            str = str.slice(1, str.length);
            str = str.slice(0, str.length - 1);
        }

        var array = [];
        var iterator = "", level = 0, quote = false;

        for(var i = 0; i < str.length; i++) {
            var char = str.charAt(i);

            if(char == "(") {
                if(level < maxLevel && !quote) {
                    if(iterator != "")
                        array.push(iterator);
                    array.push(char);
                    iterator = "";
                }else{
                    iterator += char;
                }
                
                level++;
            }else if(char == ")") {
                level--;

                if(level < maxLevel && !quote) {
                    if(iterator != "")
                        array.push(iterator);
                    array.push(char);
                    iterator = "";
                }else {
                    iterator += char;
                }
            }else if(char == "=") {
                if(level < maxLevel && !quote) {
                    var thechar = iterator.charAt(iterator.length - 1);

                    if(isLetterOrNumber(thechar) || thechar == '"') {
                        if(iterator != "") {
                            array.push(iterator);
                        }
                        iterator = char;
                    }else{
                        iterator += char;
                        array.push(iterator);
                        iterator = "";
                    }
                }else{
                    iterator += char;
                }
            }else if(char == "+") {
                if(level < maxLevel && !quote) {
                    if(iterator != "")
                        array.push(iterator);
                    array.push(char);
                    iterator = "";
                }else{
                    iterator += char;
                }
            }else if(char == "*") {
                if(level < maxLevel && !quote) {
                    if(iterator != "")
                        array.push(iterator);
                    array.push(char);
                    iterator = "";
                }else{
                    iterator += char;
                }
            }else if(char == "-") {
                if(level < maxLevel && !quote) {
                    if(iterator != "")
                        array.push(iterator);
                    array.push(char);
                    iterator = "";
                }else{
                    iterator += char;
                }
            }else if(char == "/") {
                if(level < maxLevel && !quote) {
                    if(iterator != "")
                        array.push(iterator);
                    array.push(char);
                    iterator = "";
                }else{
                    iterator += char;
                }
            }else if(char == "!") {
                if(level < maxLevel && !quote) {
                    if(iterator != "")
                        array.push(iterator);
                    
                    if(str.charAt(i+1) != "=") {
                        array.push(char);
                        iterator = "";
                    }else{
                        iterator = char;
                    }
                }else{
                    iterator+= char;
                }
            }else if(char == "&") {
                if(level < maxLevel && !quote) {
                    if(iterator != "" && iterator != "&")
                        array.push(iterator);
                    
                    if(str.charAt(i+1) != "&") {
                        iterator += char;
                        array.push(iterator);
                        iterator = "";
                    }else{
                        iterator = char;
                    }
                }else{
                    iterator += char;
                }
            }else if(char == " ") {
                if(level < maxLevel && !quote) {
                    if(iterator != "")
                        array.push(iterator);
                    iterator = "";

                }else{
                    iterator += " ";
                }
            }else if(char == '"') {
                quote = !quote;
                iterator += '"';
            }else{
                iterator += char;
            }
        }
        array.push(iterator);

        return array;
    }

    function Node(p) {
        this.parent = p;
        this.children = [];
        this.buddy = null;
        this.variables = new Object;
        this.condition = null;
        this.repeat = false;
        this.args = [];
        this.name = "";

        this.childFromName = function(str) {
            for(var i = 0; i < this.children.length; i++) {
                if(this.children[i].name == str)
                    return this.children[i];
            }
        };

        this.clear = function() {
            this.parent = null;
            this.children.length = 0;
            this.variables = new Object;
            this.condition = null;
            this.repeat = false;
            this.name = "";
        };

        this.setupVariables = function() {
            if(this.parent == null)
                return;
            
            for(var i in this.parent.variables) {
                this.variables[i] = this.parent.variables[i];
            }
        };

    }

    function Instruction(t, a, p) {
        this.type = t;
        this.args = a;
        this.node = p;
    }

    var root = new Node(null);

    function getValueString(str) {
        var mySubString = str.substring(
            str.lastIndexOf('("') + 2, 
            str.lastIndexOf('")')
        );
        return mySubString.replaceAll(",", " ");
    }

    function getValueArgs(str) {
        var mySubString = str.substring(
            str.lastIndexOf('(') + 1, 
            str.lastIndexOf(')')
        );

        return mySubString.replaceAll(",", " ");
    }
    
    var functions = new Map();
    var loops = new Array();
    var variables = new Map();

    function clearConsole() {
        out.innerHTML = "";
    }

    function action(content) {
        
            if(content == "") {
                return;
            }

            fun = content.replaceAll(" ", "");

            var words = split(fun);

            var words_space = split(content);

            var workingNode = root;

            var args = words.toString().split(".");
            var args_space = words_space.toString().split(".");

            if(words[0].startsWith("console")) {

                if(args.length < 2) return;

                if(args[1].startsWith("info")) {
                    var result = getValueString(args_space[1]);

                    var va = result.split(" ");

                    for(var va_i = 0; va_i < va.length; va_i++) {
                        if(variables.has(va[va_i].replaceAll("$", "")) && va[va_i].startsWith("$")) {
                            result = result.replaceAll(va[va_i], variables.get(va[va_i].replaceAll("$", "")));
                        }
                    }

                    appendLog(result);
                }
            }else if(content.startsWith("background")) {
   

                if(args[1].startsWith("setColor")) {   
                    var color = getValueString(args_space[1]);
                
    
                    if(color.startsWith("secret")) {
                        appendLog("SECRET COLOR");
                      

                        bg();

                    }else{
                        document.getElementById("main").style.background = color;

                    
                    }

                }
                
            }else if(content.startsWith("new") || content.startsWith("set")) {

                var name = words[0].replaceAll("new", "");
                var content = words[2];

                /*for(var print = 3; print < content.length; print++) {
						if(content[print] == ":") {
							var content_final = "";
							for(var content2 = (print+1); content2 < content.length; content2++) {
								content_final += content[content2];
							}

                            if(content_final.startsWith("prompt")) {
                                if(!content_final.includes('"')) {
                                    content_final = prompt();
                                }else{
                                    content_final = prompt(getValueString(content_final));
                                }
                            }

							variables.set(name, content_final.replaceAll('"', ""))
						}
					name += content[print];
				}*/

                if(content.startsWith("prompt")) {
                    if(!content.includes('"')) {
                            content = prompt();
                        }else{
                            content = prompt(getValueString(args_space[0]));
                    }
                }

                variables.set(name, content.replaceAll('"', ""))
            }else{

                var isFunction = false;

                functions.forEach(function(value, key) {
                    if(!value.children.includes(content) && content != "end") {
                        if(functions.has(content.replaceAll("()", ""))) {
                            isFunction = true;
                        }
                    }
                });

                if(isFunction) {
                    for(var f = 0; f < functions.get(content.replaceAll("()", "")).children.length; f++) {
                        action(functions.get(content.replaceAll("()", "")).children[f]);
                    }
                }

            }
    }

    function compile() {
        root.clear();

        functions.clear();

        var code = document.getElementById("code").value;

        var lines = code.split("\n");

        var workingNode = root;

        for(var i = 0; i < lines.length; i++) {
            var line = lines[i];

            if(line == "")
                continue;

            var words = split(line);

            var args = words.toString().split(".");

            if(words[0].startsWith("function")) {
                var name = getValueArgs(args[0]);

                var node = new Node(root);

                node.name = name;

                var search = true;

                for(var l = (i+1); l < lines.length; l++) {
                    if(lines[l] == "end") {
                        search = false;
                    }else if(search) {
                        node.children.push(lines[l]);
                    }
                }

                functions.set(name, node);

                continue;
            }else if(words[0].startsWith("if")) {
                
            }

            }else if(words[0].startsWith("loop")) {
                var time = getValueArgs(args[0]);

                var loop = new Node();

                search = true;

                for(var l = (i+1); l < lines.length; l++) {
                    if(lines[l] == "end") {
                        search = false;
                    }else if(search) {
                        loop.children.push(lines[l]);
                    }
                }

                loops.push(loop);
                
                setInterval(() => {
                    for(var f = 0; f < loop.children.length; f++) {
                        action(loop.children[f]);
                    }
                }, time);

                continue;
            
            }else if(words[0].startsWith("wait")) {
                var time = getValueArgs(args[0]);

                var loop = new Node();

                search = true;

                for(var l = (i+1); l < lines.length; l++) {
                    if(lines[l] == "end") {
                        search = false;
                    }else if(search) {
                        loop.children.push(lines[l]);
                    }
                }

                loops.push(loop);
                
                setTimeout(() => {
                    for(var f = 0; f < loop.children.length; f++) {
                        action(loop.children[f]);
                    }
                    loops.splice(loop);
                }, time);
            }else{

                var isFunction = false;

                functions.forEach(function(value, key) {
                    if(!value.children.includes(line) && line != "end") {
                        if(functions.has(line.replaceAll("()", ""))) {
                            isFunction = true;
                        }
                    }
                });

                if(isFunction) {
                    for(var f = 0; f < functions.get(line.replaceAll("()", "")).children.length; f++) {
                        action(functions.get(line.replaceAll("()", "")).children[f].replaceAll(" ", ""));
                    }
                }else{
                    search = true;

                    for(var l = (i + 1); l < lines.length; l++) {
                        if(lines[l] == "end") {
                            for(var h = i; h >= 0; h--) {
                                if(lines[h] != undefined && lines[h].startsWith("function")) {
                                    search = false;
                                }
                            }
                        }
                    }

                    for(var l = (i + 1); l < lines.length; l++) {
                        if(lines[l] == "end") {
                            for(var h = i; h >= 0; h--) {
                                if(lines[h] != undefined && lines[h].startsWith("loop")) {
                                    search = false;
                                }
                            }
                        }
                    }

                    for(var l = (i + 1); l < lines.length; l++) {
                        if(lines[l] == "end") {
                            for(var h = i; h >= 0; h--) {
                                if(lines[h] != undefined && lines[h].startsWith("wait")) {
                                    search = false;
                                }
                            }
                        }
                    }

                    if(search == true) {
                        action(line);
                    }
                }
                continue;

            }

        }
    }



</script>

</html>