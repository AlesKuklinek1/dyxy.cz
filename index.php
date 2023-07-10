<!DOCTYPE html>
<html lang="cs">
    <head>
	<meta charset="utf-8">
    <title>DYXY :: Online Text Editor (VER. 0.0.1)</title>         
    <meta name="viewport" content="width=device-width, initial-scale=1.0">       


 <meta name="description" content="Free online Text Editor Dyxy">
  <meta name="keywords" content="HTML, CSS, JavaScript, Text edit">
  <meta name="author" content="Aleš Kuklínek">
  
  
  
	<script  src="./codebase/suite.js"></script>
    <link rel="stylesheet" href="./codebase/suite.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
	<!-- POZOR: FBI je na cestě za hackování HTML -->
    <link rel="stylesheet" href="codemirror/lib/codemirror.css">
	<script src="codemirror/lib/codemirror.js"></script>
    <link rel="icon" type="image/x-icon" href="/images/icons8-d-16.png">

	<!-- THEMES -->
	<script src="codemirror/mode/xml/xml.js"></script>
	<link rel="stylesheet" href="codemirror/theme/ayu-dark.css">
	<link rel="stylesheet" href="codemirror/theme/3024-day.css">
	<link rel="stylesheet" href="codemirror/theme/3024-night.css">
<link rel="stylesheet" href="codemirror/theme/abbott.css">
<link rel="stylesheet" href="codemirror/theme/abcdef.css">
<link rel="stylesheet" href="codemirror/theme/ambiance.css">
<link rel="stylesheet" href="codemirror/theme/ayu-mirage.css">
<link rel="stylesheet" href="codemirror/theme/base16-dark.css">
<link rel="stylesheet" href="codemirror/theme/bespin.css">
<link rel="stylesheet" href="codemirror/theme/base16-light.css">


<link rel="stylesheet" href="codemirror/theme/blackboard.css">
<link rel="stylesheet" href="codemirror/theme/cobalt.css">
<link rel="stylesheet" href="codemirror/theme/colorforth.css">
<link rel="stylesheet" href="codemirror/theme/dracula.css">
<link rel="stylesheet" href="codemirror/theme/duotone-dark.css">
<link rel="stylesheet" href="codemirror/theme/duotone-light.css">
<link rel="stylesheet" href="codemirror/theme/eclipse.css">
<link rel="stylesheet" href="codemirror/theme/elegant.css">
<link rel="stylesheet" href="codemirror/theme/erlang-dark.css">
<link rel="stylesheet" href="codemirror/theme/gruvbox-dark.css">
<!--<link rel="stylesheet" href="codemirror/theme/hopscotch.css">
<link rel="stylesheet" href="codemirror/theme/icecoder.css">
<link rel="stylesheet" href="codemirror/theme/isotope.css">
<link rel="stylesheet" href="codemirror/theme/juejin.css">
<link rel="stylesheet" href="codemirror/theme/lesser-dark.css">
<link rel="stylesheet" href="codemirror/theme/liquibyte.css">
<link rel="stylesheet" href="codemirror/theme/lucario.css">
<link rel="stylesheet" href="codemirror/theme/material.css">
<link rel="stylesheet" href="codemirror/theme/material-darker.css">
<link rel="stylesheet" href="codemirror/theme/material-palenight.css">
<link rel="stylesheet" href="codemirror/theme/material-ocean.css">
<link rel="stylesheet" href="codemirror/theme/mbo.css">
<link rel="stylesheet" href="codemirror/theme/mdn-like.css">
<link rel="stylesheet" href="codemirror/theme/midnight.css">
<link rel="stylesheet" href="codemirror/theme/monokai.css">
<link rel="stylesheet" href="codemirror/theme/moxer.css">
<link rel="stylesheet" href="codemirror/theme/neat.css">
<link rel="stylesheet" href="codemirror/theme/neo.css">
<link rel="stylesheet" href="codemirror/theme/night.css">
<link rel="stylesheet" href="codemirror/theme/nord.css">
<link rel="stylesheet" href="codemirror/theme/oceanic-next.css">
<link rel="stylesheet" href="codemirror/theme/panda-syntax.css">
<link rel="stylesheet" href="codemirror/theme/paraiso-dark.css">
<link rel="stylesheet" href="codemirror/theme/paraiso-light.css">
<link rel="stylesheet" href="codemirror/theme/pastel-on-dark.css">
<link rel="stylesheet" href="codemirror/theme/railscasts.css">
<link rel="stylesheet" href="codemirror/theme/rubyblue.css">
<link rel="stylesheet" href="codemirror/theme/seti.css">
<link rel="stylesheet" href="codemirror/theme/shadowfox.css">
<link rel="stylesheet" href="codemirror/theme/solarized.css">
<link rel="stylesheet" href="codemirror/theme/the-matrix.css">
<link rel="stylesheet" href="codemirror/theme/tomorrow-night-bright.css">
<link rel="stylesheet" href="codemirror/theme/tomorrow-night-eighties.css">
<link rel="stylesheet" href="codemirror/theme/ttcn.css">
<link rel="stylesheet" href="codemirror/theme/twilight.css">
<link rel="stylesheet" href="codemirror/theme/vibrant-ink.css">
<link rel="stylesheet" href="codemirror/theme/xq-dark.css">
<link rel="stylesheet" href="codemirror/theme/xq-light.css">
<link rel="stylesheet" href="codemirror/theme/yeti.css">
<link rel="stylesheet" href="codemirror/theme/idea.css">
<link rel="stylesheet" href="codemirror/theme/darcula.css">
<link rel="stylesheet" href="codemirror/theme/yonce.css">
<link rel="stylesheet" href="codemirror/theme/zenburn.css"> -->
	
	<script src="codemirror/mode/javascript/javascript.js"></script>
	<script src="codemirror/mode/css/css.js"></script>
	<script src="codemirror/mode/htmlmixed/htmlmixed.js"></script>
	<script src="codemirror/addon/edit/matchbrackets.js"></script>
	
	
	<!-- SEARCH -->
	<script src="codemirror/addon/dialog/dialog.js"></script>
<script src="codemirror/addon/search/searchcursor.js"></script>
<script src="codemirror/addon/search/search.js"></script>
<script src="codemirror/addon/scroll/annotatescrollbar.js"></script>
<script src="codemirror/addon/search/matchesonscrollbar.js"></script>
<script src="codemirror/addon/search/jump-to-line.js"></script>

<!-- HINTS-->

<link rel="stylesheet" href="codemirror/addon/hint/show-hint.css"> 
<script src="codemirror/addon/hint/show-hint.js"></script>
<script src="codemirror/addon/hint/javascript-hint.js"></script>
<script src="codemirror/mode/javascript/javascript.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.4.95/css/materialdesignicons.css?v=6.4.2" media="all" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- MODE -->
<script src="codemirror/mode/apl/apl.js"></script>
<script src="codemirror/mode/brainfuck/brainfuck.js"></script>
<script src="codemirror/mode/clike/clike.js"></script>
<script src="codemirror/mode/cobol/cobol.js"></script>
<script src="codemirror/mode/coffeescript/coffeescript.js"></script>
<script src="codemirror/mode/css/css.js"></script>
<script src="codemirror/mode/dart/dart.js"></script>
<script src="codemirror/mode/diff/diff.js"></script>
<script src="codemirror/mode/django/django.js"></script>
<script src="codemirror/mode/fortran/fortran.js"></script>
<script src="codemirror/mode/go/go.js"></script>
<script src="codemirror/mode/javascript/javascript.js"></script>
<script src="codemirror/mode/lua/lua.js"></script>
<script src="codemirror/mode/pascal/pascal.js"></script>
<script src="codemirror/mode/perl/perl.js"></script>
<script src="codemirror/mode/php/php.js"></script>
<script src="codemirror/mode/python/python.js"></script>
<script src="codemirror/mode/r/r.js"></script>
<script src="codemirror/mode/ruby/ruby.js"></script>
<script src="codemirror/mode/rust/rust.js"></script>
<script src="codemirror/mode/swift/swift.js"></script>
<script src="codemirror/mode/vbscript/vbscript.js"></script>
<script src="codemirror/mode/xml/xml.js"></script>
<script src="codemirror/mode/yaml/yaml.js"></script>


<style>

.CodeMirror-dialog{
position:absolute;
top:0px;
z-index:1000;
 background:gray;
 }
 
 .CodeMirror-search-hint {
	 
	 color:white;
	 padding:5px;
	 font-weight:bold;
 }
    body { margin: 0; padding:0 }
	#fileToUpload  {     display: flex;
    justify-content: center;
    align-items: center;
    font-family: var(--dhx-font-family);
    font-size: var(--dhx-font-size-normal);
    font-weight: var(--dhx-font-weight-medium);
    line-height: var(--dhx-line-height-normal);
    text-align: center;
    color: var(--dhx-font-color-contrast);
    transition: background-color var(--dhx-transition-time) var(--dhx-transition-in),color var(--dhx-transition-time) var(--dhx-transition-in),box-shadow var(--dhx-transition-time) var(--dhx-transition-in);
}

input[type=file]::file-selector-button {

  border: none;
  background: #084cdf;
  padding: 10px 20px;
  border-radius: 10px;
  color: #fff;
  cursor: pointer;
  transition: background .2s ease-in-out;
}

input[type=file]::file-selector-button:hover {
  background: #0d45a5;
}

#upload_button {
   border: none;
  background: #084cdf;
  padding: 10px 20px;
  border-radius: 10px;
  color: #fff;
  cursor: pointer;
  transition: background .2s ease-in-out;
}

.uplaod_windows{
 text-align:center;
}

#footer {
margin:0px;
background:rgba(0,0,0,0.7);
color:white;
font-size:11px;
padding:5px
}

.dxi1 {
       width: 60px;
    height: 60px;
    font-size: 60px;
    text-align: center;
    color: #d8d8d8;
    align-items: center;
	
}
.dhx1:before {
    width: 60px;
    height: 60px;
    font-size: 60px;
    line-height: 60px;
}

</style>
    </head>

    <body onload="calculateBrowserHeight();count()">
  
<!-- component container -->
<div id="layout" style="height: 100%;"></div>


        <script>
		
	
		const layout = new dhx.Layout("layout", {
    type: "space",
    rows: [
        {
            id: "С1",
            html: '<div id="menu"></div><div style="margin: 0px" id="toolbar"></div>',
        },
															{
            id: "С2",
            html: '<textarea id="editor" class="editor"><!DOCTYPE html>\n<html>\n<head>\n<title>\nMůj první HTML dokument\n</title>\n</head>\n<body>\n<h1>\nNadpis první úrovně</h1>\n<p>\nPrvní odstavec vás vítá do světa HTML a WWW.\n</p>\n<p>Druhý odstavec následuje ihned za prvním.</p>\n</body>\n</html></textarea>  <div id="footer"><span id="mode">HTML, XML, JavaScript, CSS mode</span> | Chars:  <span id="count_chars"></span>  | File:  <span id="file_name"></span></div>',
          
        },
    ]
});
const menu = new dhx.Menu("menu", {
    css: "dhx_widget--bordered dhx_widget--bg_white",
});

menu.data.load("menu.json");


menu.events.on("click", function(id,e){
 
if (id=="opener"){
 dhxwindow.show();
}

if (id=="new"){
editor.setValue("");
}
if (id=="about"){
	

dhxwindow2.show();
}

 	  if (id == "undo2"){
	 
	 	      editor.undo();

	 }
	  if (id == "redo2"){
	 
	 	      editor.redo();

	 }
	 
	 //EDIT MENU
  if (id == "selectALL"){
	 
	 	      editor.execCommand('selectAll');

	 }
  if (id == "copy"){
	 
	 	      editor.selectAll();

	 }

if (id=="ascii"){
 dhxwindow3.show();
}




if (id=="downloadButton"){
const content = editor.getValue();


  const filename = "download.txt";
  const blob = new Blob([content], { type: "text/plain" });

  // Create a temporary link element
  const link = document.createElement("a");
  link.href = URL.createObjectURL(blob);
  link.download = filename;

  // Programmatically click the link to trigger the download
  link.click();

  // Clean up resources
  URL.revokeObjectURL(link.href);
  
  
}









});


const windowHtml = "<div class='uplaod_windows'> <form  id='fileUploadForm' method='POST' action='process_upload.php' enctype='multipart/form-data'>    <img   class='dxi1' width='64' height='64' src='https://img.icons8.com/external-mixed-line-solid-yogi-aprelliyanto/64/external-upload-web-hosting-mixed-line-solid-yogi-aprelliyanto.png' alt='external-upload-web-hosting-mixed-line-solid-yogi-aprelliyanto'/>  <input type='file' name='fileToUpload' id='fileToUpload'>        <input id='upload_button' onclick='upload()' type='submit' value='Upload' name='submit'></form></div>";
const dhxwindow = new dhx.Window({
    width: 340,
    height: 420,
    title: "Open file dialog",
    html: windowHtml,
	     modal: true,
                resizable: true,
                movable: true
});





//about window	

const windowHtml2 = "<p>Online Text Editor DYXY 0.0.1<p><p>Licence: GNU General Public License v2.0 </p><p>THE SOFTWARE IS PROVIDED AS IS WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</p>";
const dhxwindow2 = new dhx.Window({
    width: 440,
    height: 520,
    title: "About",
    html: windowHtml2,
	     modal: true,
                resizable: true,
                movable: true
});


const windowHtml3 = "<table><thead><tr><th><strong>Character</strong></th><th><strong>Character Name</strong></th><th><strong>ASCII code</strong></th></tr></thead><tbody><tr><td>!</td><td>Exclamation point</td><td>33</td></tr><tr><td>“</td><td>Double quotation</td><td>34</td></tr><tr><td>#</td><td>Number sign</td><td>35</td></tr><tr><td>$</td><td>Dollar sign</td><td>36</td></tr><tr><td>%</td><td>Percent sign</td><td>37</td></tr><tr><td>&amp;</td><td>ampersand</td><td>38</td></tr><tr><td>‘</td><td>apostrophe</td><td>39</td></tr><tr><td>(</td><td>Left parenthesis</td><td>40</td></tr><tr><td>)</td><td>Right parenthesis</td><td>41</td></tr><tr><td>*</td><td>asterisk</td><td>42</td></tr><tr><td>+</td><td>Plus sign</td><td>43</td></tr><tr><td>,</td><td>comma</td><td>44</td></tr><tr><td>–</td><td>hyphen</td><td>45</td></tr><tr><td>.</td><td>period</td><td>46</td></tr><tr><td>/</td><td>slash</td><td>47</td></tr><tr><td>0</td><td>zero</td><td>48</td></tr><tr><td>1</td><td>one</td><td>49</td></tr><tr><td>2</td><td>two</td><td>50</td></tr><tr><td>3</td><td>three</td><td>51</td></tr><tr><td>4</td><td>four</td><td>52</td></tr><tr><td>5</td><td>five</td><td>53</td></tr><tr><td>6</td><td>six</td><td>54</td></tr><tr><td>7</td><td>seven</td><td>55</td></tr><tr><td>8</td><td>eight</td><td>56</td></tr><tr><td>9</td><td>nine</td><td>57</td></tr><tr><td>:</td><td>colon</td><td>58</td></tr><tr><td>;</td><td>semi-colon</td><td>59</td></tr><tr><td>&lt;</td><td>Less-than sign</td><td>60</td></tr><tr><td>=</td><td>Equals sign</td><td>61</td></tr><tr><td>></td><td>Greater-than sign</td><td>62</td></tr><tr><td>?</td><td>Question mark</td><td>63</td></tr><tr><td>@</td><td>At sign</td><td>64</td></tr></tbody></table>";
const dhxwindow3 = new dhx.Window({
    width: 340,
    height: 420,
    title: "ASCII TABLE",
    html: windowHtml3,
	     modal: true,
                resizable: true,
                movable: true
});


//end about window
const dataset = new dhx.TreeCollection();
dataset.load("dataset.json");

const toolbar = new dhx.Toolbar("toolbar", {
  data: dataset,
  css: "dhx_widget--bordered"
});


dhxwindow.header.data.update("close", {
    // using FA icon for the Close button
    icon: "dxi dxi-close" 
});    













toolbar.events.on("click", function(id,e){
 if (id == "ayu-dark"){
	 
	 	      editor.setOption("theme", 'ayu-dark');
	 }
	  if (id == "3024-day"){
	 
	 	      editor.setOption("theme", '3024-day');
	 }
	   if (id == "3024-night"){
	 
	 	      editor.setOption("theme", '3024-night');
	 }
	 	   if (id == "abbott"){
	 
	 	      editor.setOption("theme", 'abbott');
	 }
	    if (id == "abcdef"){
	 
	 	      editor.setOption("theme", 'abcdef');
	 }
	    if (id == "ambiance"){
	 
	 	      editor.setOption("theme", 'ambiance');
	 }
	    if (id == "ayu-mirage"){
	 
	 	      editor.setOption("theme", 'ayu-mirage');
	 }
	    if (id == "base16-dark"){
	 
	 	      editor.setOption("theme", 'base16-dark');
	 }
	    if (id == "bespin"){
	 
	 	      editor.setOption("theme", 'bespin');
	 }
	    if (id == "base16-light"){
	 
	 	      editor.setOption("theme", 'base16-light');
	 }
	    if (id == "blackboard"){
	 
	 	      editor.setOption("theme", 'blackboard');
	 }
	 
	    if (id == "cobalt"){
	 
	 	      editor.setOption("theme", 'cobalt');
	 }
	 
	   if (id == "colorforth"){
	 
	 	      editor.setOption("theme", 'colorforth');
	 }
	    if (id == "dracula"){
	 
	 	      editor.setOption("theme", 'dracula');
	 }
	   if (id == "duotone-dark"){
	 
	 	      editor.setOption("theme", 'duotone-dark');
	 }
	 
		
		
	   if (id == "duotone-light"){
	 
	 	      editor.setOption("theme", 'duotone-light');
	 }
	 	
	   if (id == "eclipse"){
	 
	 	      editor.setOption("theme", 'duotone-light');
	 }
	 
	
	   if (id == "elegant"){
	 
	 	      editor.setOption("theme", 'elegant');
	 }
	 
	   if (id == "erlang-dark"){
	 
	 	      editor.setOption("theme", 'erlang-dark');
	 }
	 
   if (id == "gruvbox-dark"){
	 
	 	      editor.setOption("theme", 'gruvbox-dark');
	 }
	 


  if (id == "alp"){
	 
	 	      editor.setOption("mode", 'apl');
document.getElementById("mode").innerHTML = "APL mode";

	 }
	 
 
	 if (id == "brainfuck"){
	 
	 	      editor.setOption("mode", 'brainfuck');
document.getElementById("mode").innerHTML = "brainfuck mode";
	 }
	 
	 if (id == "clike"){
	 
	 	      editor.setOption("mode", 'clike');
document.getElementById("mode").innerHTML = "clike mode";
	 }
	  
	 	 if (id == "cobol"){
	 
	 	      editor.setOption("mode", 'cobol');
document.getElementById("mode").innerHTML = "cobol mode";
	 }

  
	 	 if (id == "coffescript"){
	 
	 	      editor.setOption("mode", 'coffeescript');
document.getElementById("mode").innerHTML = "coffeescript mode";
	 }
	   
	 	 if (id == "css"){
	 
	 	      editor.setOption("mode", 'css');
document.getElementById("mode").innerHTML = "CSS mode";

	 }
	 
	 	 if (id == "dart"){
	 
	 	      editor.setOption("mode", 'dart');
document.getElementById("mode").innerHTML = "DART mode";

	 }
	 
	  	 if (id == "diff"){
	 
	 	      editor.setOption("mode", 'diff');
document.getElementById("mode").innerHTML = "DIFF mode";

	 }
	 
	 
	   	 if (id == "django"){
	 
	 	      editor.setOption("mode", 'django');
document.getElementById("mode").innerHTML = "DJANGO mode";

	  }
	 
	 
	 	   	 if (id == "fortran"){
	 
	 	      editor.setOption("mode", 'fortran');
document.getElementById("mode").innerHTML = "FORTRAN mode";

	 }
	 
	 	 	   	 if (id == "go"){
	 
	 	      editor.setOption("mode", 'go');
document.getElementById("mode").innerHTML = "Go mode";

	 }
	 
	 
	 	 	 	   	 if (id == "html"){
	 
	 	      editor.setOption("mode", 'htmlmixed');
document.getElementById("mode").innerHTML = "HTML mixed mode";
	 }
	 
	 	 	 	   	 if (id == "javascript"){
	 
	 	      editor.setOption("mode", 'javascript');
document.getElementById("mode").innerHTML = "JavaScript mode";

	 }
	 
	  	 	 	   	 if (id == "lua"){
	 
	 	      editor.setOption("mode", 'lua');
document.getElementById("mode").innerHTML = "LUA mode";

	 }
	 
	  	 	 	   	 if (id == "pascal"){
	 
	 	      editor.setOption("mode", 'pascal');
document.getElementById("mode").innerHTML = "PASCAL mode";

	 }
	 	 	   	 if (id == "perl"){
	 
	 	      editor.setOption("mode", 'perl');
document.getElementById("mode").innerHTML = "PERL mode";

	 }
	 
	 
	 	 	   	 if (id == "php"){
	 
	 	      editor.setOption("mode", 'php');
document.getElementById("mode").innerHTML = "PHP mode";

	 }
	  	 	   	 if (id == "python"){
	 
	 	      editor.setOption("mode", 'python');
document.getElementById("mode").innerHTML = "PYTHON mode";

	 }
	   	 	   	 if (id == "r"){
	 
	 	      editor.setOption("mode", 'r');
document.getElementById("mode").innerHTML = "R language mode";

	 }
	    	 	   	 if (id == "ruby"){
	 
	 	      editor.setOption("mode", 'ruby');
			  document.getElementById("mode").innerHTML = "RUBY mode";


	 }	    	 	   	 if (id == "rust"){
	 
	 	      editor.setOption("mode", 'rust');
document.getElementById("mode").innerHTML = "RUST mode";

	 }
	 
	 
	  	 	   	 if (id == "swift"){
	 
	 	      editor.setOption("mode", 'swift');
document.getElementById("mode").innerHTML = "Swift mode";

	 }
		  	 	   	 if (id == "vbscript"){
	 
	 	      editor.setOption("mode", 'vbscript');
document.getElementById("mode").innerHTML = "VBScript mode";

	 } 
	 
	  if (id == "xml"){
	 
	 	      editor.setOption("mode", 'xml');
document.getElementById("mode").innerHTML = "XML mode";

	 } 
	   if (id == "yaml"){
	 
	 	      editor.setOption("mode", 'yaml');
document.getElementById("mode").innerHTML = "YAML mode";

	 } 
	 
	 
	 //undo redo
	 
	  if (id == "undo"){
	 
	 	      editor.undo();

	 }
	  if (id == "redo"){
	 
	 	      editor.redo();

	 }
	 
	
	 
});



        </script>
		<script>

	// Function to calculate the height of the browser window
function calculateBrowserHeight() {
  let windowHeight = window.innerHeight   || document.documentElement.clientHeight || document.body.clientHeight;
  console.log("Browser height: " + windowHeight + "px");
  // Perform any additional actions with the calculated height here
editor.setSize(null, windowHeight - 80 - 96);

}


function count() {

let test = editor.getValue().length;
document.getElementById("count_chars").innerHTML = test;
}
// Event listener for the window resize event
window.addEventListener('resize', calculateBrowserHeight);

   </script>	

  <script>
    var editor = CodeMirror.fromTextArea(document.getElementById("editor"), {
      lineNumbers: true,
      mode: "text/html",
      matchBrackets: true,
  spellcheck:true,
  extraKeys: {"Alt-F": "findPersistent","Ctrl-Space": "autocomplete"}
    });
	
		      editor.setOption("theme", 'ayu-dark');

	
	
editor.on('change', (args) => {  

count();
});
  </script>
  
	<script>
	function upload() {
		event.preventDefault(); // Prevent form submission

  var fileInput = document.getElementById("fileToUpload");
  var file = fileInput.files[0]; // Get the first file (assuming single file upload)

  var formData = new FormData();
  formData.append("fileToUpload", file);

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "process_upload.php", true); 
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var response = xhr.responseText;
	  
      console.log(response); // Handle the response from the server
	    
	editor.setValue(response);
	dhxwindow.hide();  //zavri okno a vypadni
    }
  };
  xhr.send(formData);

}






	</script>
	  
	  
	  <script>
	  const translations = {
  en: {
    title: "Welcome!",
    content: "This is a multilingual page."
  },
  fr: {
    title: "Bienvenue !",
    content: "Ceci est une page multilingue."
  }
};




	  </script>
	  
	  
	  <script>
	  
    var dummy = {
        attrs: {
          color: ["red", "green", "blue", "purple", "white", "black", "yellow"],
          size: ["large", "medium", "small"],
          description: null
        },
        children: []
      };

      var tags = {
        "!top": ["top"],
        "!attrs": {
          id: null,
          class: ["A", "B", "C"]
        },
        top: {
          attrs: {
            lang: ["en", "de", "fr", "nl"],
            freeform: null
          },
          children: ["animal", "plant"]
        },
        animal: {
          attrs: {
            name: null,
            isduck: ["yes", "no"]
          },
          children: ["wings", "feet", "body", "head", "tail"]
        },
        plant: {
          attrs: {name: null},
          children: ["leaves", "stem", "flowers"]
        },
        wings: dummy, feet: dummy, body: dummy, head: dummy, tail: dummy,
        leaves: dummy, stem: dummy, flowers: dummy
      };

      function completeAfter(cm, pred) {
        var cur = cm.getCursor();
        if (!pred || pred()) setTimeout(function() {
          if (!cm.state.completionActive)
            cm.showHint({completeSingle: false});
        }, 100);
        return CodeMirror.Pass;
      }

      function completeIfAfterLt(cm) {
        return completeAfter(cm, function() {
          var cur = cm.getCursor();
          return cm.getRange(CodeMirror.Pos(cur.line, cur.ch - 1), cur) == "<";
        });
      }

      function completeIfInTag(cm) {
        return completeAfter(cm, function() {
          var tok = cm.getTokenAt(cm.getCursor());
          if (tok.type == "string" && (!/['"]/.test(tok.string.charAt(tok.string.length - 1)) || tok.string.length == 1)) return false;
          var inner = CodeMirror.innerMode(cm.getMode(), tok.state).state;
          return inner.tagName;
        });
      }
				
				</script>
				
				
				
				<script src="https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.14.8/beautify-html.js"></script>
			    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.14.8/beautify.min.js"></script>
<script>
var dummy = {
        attrs: {
          color: ["red", "green", "blue", "purple", "white", "black", "yellow"],
          size: ["large", "medium", "small"],
          description: null
        },
        children: []
      };

      var tags = {
        "!top": ["top"],
        "!attrs": {
          id: null,
          class: ["A", "B", "C"]
        },
        top: {
          attrs: {
            lang: ["en", "de", "fr", "nl"],
            freeform: null
          },
          children: ["animal", "plant"]
        },
        animal: {
          attrs: {
            name: null,
            isduck: ["yes", "no"]
          },
          children: ["wings", "feet", "body", "head", "tail"]
        },
        plant: {
          attrs: {name: null},
          children: ["leaves", "stem", "flowers"]
        },
        wings: dummy, feet: dummy, body: dummy, head: dummy, tail: dummy,
        leaves: dummy, stem: dummy, flowers: dummy
      };

      function completeAfter(cm, pred) {
        var cur = cm.getCursor();
        if (!pred || pred()) setTimeout(function() {
          if (!cm.state.completionActive)
            cm.showHint({completeSingle: false});
        }, 100);
        return CodeMirror.Pass;
      }

      function completeIfAfterLt(cm) {
        return completeAfter(cm, function() {
          var cur = cm.getCursor();
          return cm.getRange(CodeMirror.Pos(cur.line, cur.ch - 1), cur) == "<";
        });
      }

      function completeIfInTag(cm) {
        return completeAfter(cm, function() {
          var tok = cm.getTokenAt(cm.getCursor());
          if (tok.type == "string" && (!/['"]/.test(tok.string.charAt(tok.string.length - 1)) || tok.string.length == 1)) return false;
          var inner = CodeMirror.innerMode(cm.getMode(), tok.state).state;
          return inner.tagName;
        });
      }
</script>
    </body>
</html>