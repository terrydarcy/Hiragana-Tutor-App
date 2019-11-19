var aset=["a", "ka", "sa", "ta" , "na" , "ha", "ma", "ya","ra", "wa", "n"];
var iset=["i", "ki", "shi", "chi" , "ni" , "hi", "mi","ri"];
var uset=["u", "ku", "su", "tsu", "nu", "hu", "mu", "yu", "ru"];
var eset=["e", "ke", "se", "te", "ne", "he", "me", "re"];
var oset=["o", "ko", "so", "to", "no", "ho", "mo", "yo", "ro", "o"];
var gid;
var finalSet;
function beginQuiz(id) {
	gid = id;
	var set = [];
	if(id == 'a') set = aset;
	if(id == 'i') set = iset;
	if(id == 'u') set = uset;
	if(id == 'e') set = eset; 
	if(id == 'o') set = oset;

	document.getElementById("selection").remove();

    
    var linebreak = document.createElement("br");
    document.getElementById("quiz").appendChild(linebreak);

    const shuffled = set.sort(() => 0.5 - Math.random());
    finalSet = shuffled.slice(0, 10);


    document.getElementById("hiragana").style.opacity = "0";
	document.getElementById("submit").style.opacity = "100";

    for (var i = 0; i < finalSet.length; i++) {
  	    display(finalSet[i]);
    }
}

function start() {
	document.getElementById("hiragana").style.opacity = "0";

	document.getElementById("results").innerHTML = "";
	for (var i = 0; i < finalSet.length; i++) {
  	    quiz(finalSet[i], i);
    }
    
}

var score = 0;
var index =1;

function display(id) {
	 var img = document.createElement("img");
    img.src = "res/quizelements/"+id + ".png";
    document.getElementById('quiz').appendChild(img);
    var text = document.createTextNode(index++);
    var linebreak = document.createElement("br");
    document.getElementById('quiz').appendChild(text);
    document.getElementById('quiz').appendChild(linebreak);
}

function quiz(id, index) {
	var i = index+1;
	console.log(Math.floor(Math.random()*(3-0+1)+0));
	var randomNum = Math.floor(Math.random()*(3-0+1)+0);
	var a = finalSet[Math.floor(Math.random()*(9-0+1)+0)];
	var b = finalSet[Math.floor(Math.random()*(9-0+1)+0)]; 
	var c = finalSet[Math.floor(Math.random()*(9-0+1)+0)];
	var d = finalSet[Math.floor(Math.random()*(9-0+1)+0)];
	if(a!=id && b!=id && c!=id && d!=id){
		if(randomNum == 0) a = finalSet[index];
        if(randomNum == 1) b = finalSet[index];
        if(randomNum == 2) c = finalSet[index];
        if(randomNum == 3) d = finalSet[index];
}
	var response = window.prompt
	("What is symbol : " + i + "\n"
      +"- " + a+"\n"
      +"- " + b+"\n"
      +"- " + c+" \n"
      +"- " + d+"\n"


		);
	if(response == id) {
		alert("Correct!");
		score++;
	}else {
		alert("False!");
	}
if(i == 10) {
	document.getElementById("hiragana").style.opacity = "100";
	document.getElementById("submit").style.opacity = "0";

    var result = (score/10)*100
    var linebreak = document.createElement("br");
    document.getElementById('results').appendChild(linebreak);

    var text = document.createTextNode("RESULT:  " +result + " %");
	document.getElementById("results").appendChild(text);
	    document.getElementById('results').appendChild(linebreak);

    var text1 = document.createTextNode("Refresh to select a new quiz.");
	document.getElementById("results").appendChild(text1);
}}
