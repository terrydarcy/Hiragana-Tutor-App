<!DOCTYPE html>
<html>
	<script type="text/javascript" src="board.js"></script>
	<script type="text/javascript" src="quiz.js"></script>
<link rel="stylesheet" href= "style.css">
<head>
	<title> Hiragana </title>
	<h1>Hiragana Tutor</h1>
</head>
<body>

<div class="row"> 

	<div class ="column1">
	<table id = "hiragana" cellspacing="0" align ="left">
		<tr>
			<td style="background-position:  0px   0px;"><div class="a"><input class='button' type='button' onclick="play('res/sound/a.mp3');"/></div></td>
			<td style="background-position: -64px  0px;"><div class="i"><input class='button' type='button' onclick="play('res/sound/i.mp3'); pick10('i');"/></div></td>
			<td style="background-position: -128px 0px;"><div class="u"><input class='button' type='button' onclick="play('res/sound/u.mp3'); pick10('u');" /></div></td>
			<td style="background-position: -192px 0px;"><div class="e"><input class='button' type='button' onclick="play('res/sound/e.mp3'); pick10('e');" /></div></td>
			<td style="background-position: -265px 0px;"><div class="o"><input class='button' type='button' onclick="play('res/sound/o.mp3'); pick10('o');" /></div></td>
		</tr>
		<tr>
			<td style="background-position: 0px    -64px;"><div class="ka"><input class='button' type='button' onclick="play('res/sound/ka.mp3'); pick10('ka');"/></div></td>
			<td style="background-position: -64px  -64px;"><div class="ki"><input class='button' type='button' onclick="play('res/sound/ki.mp3'); pick10('ki');" /></div></td>
			<td style="background-position: -128px -64px;"><div class="ku"><input class='button' type='button' onclick="play('res/sound/ku.mp3'); pick10('ku');" /></div></td>
			<td style="background-position: -192px -64px;"><div class="ke"><input class='button' type='button' onclick="play('res/sound/ke.mp3'); pick10('ke');" /></div></td>
			<td style="background-position: -265px -64px;"><div class="ko"><input class='button' type='button' onclick="play('res/sound/ko.mp3'); pick10('ko');" /></div></td>
		</tr>
		<tr>
			<td style="background-position: 0px    -128px;"><div class="sa"><input class='button' type='button' onclick="play('res/sound/sa.mp3'); pick10('sa');" /></td>
			<td style="background-position: -64px  -128px;"><div class="shi"><input class='button' type='button' onclick="play('res/sound/shi.mp3'); pick10('shi');" /></td>
			<td style="background-position: -128px -128px;"><div class="su"><input class='button' type='button' onclick="play('res/sound/su.mp3'); pick10('su');" /></td>
			<td style="background-position: -192px -128px;"><div class="se"><input class='button' type='button' onclick="play('res/sound/se.mp3'); pick10('se');" /></td>
			<td style="background-position: -265px -128px;"><div class="so"><input class='button' type='button' onclick="play('res/sound/so.mp3'); pick10('so');" /></td>
		</tr>
		<tr>
		    <td style="background-position: 0px    -192px;"><div class="ta"><input class='button' type='button' onclick="play('res/sound/ta.mp3'); pick10('ta');" /></td>
			<td style="background-position: -64px  -192px;"><div class="chi"><input class='button' type='button' onclick="play('res/sound/chi.mp3'); pick10('chi');" /></td>
			<td style="background-position: -128px -192px;"><div class="tsu"><input class='button' type='button' onclick="play('res/sound/tsu.mp3'); pick10('tsu');" /></td>
			<td style="background-position: -192px -192px;"><div class="te"><input class='button' type='button' onclick="play('res/sound/te.mp3'); pick10('te');" /></td>
			<td style="background-position: -265px -192px;"><div class="to"><input class='button' type='button' onclick="play('res/sound/to.mp3'); pick10('to');" /></td>
		</tr>
		<tr>
			<td style="background-position: 0px    -256px;"><div class="na"><input class='button' type='button' onclick="play('res/sound/na.mp3'); pick10('na');" /></td>
			<td style="background-position: -64px  -256px;"><div class="ni"><input class='button' type='button' onclick="play('res/sound/ni.mp3'); pick10('ni');" /></td>
			<td style="background-position: -128px -256px;"><div class="nu"><input class='button' type='button' onclick="play('res/sound/nu.mp3'); pick10('nu');" /></td>
			<td style="background-position: -192px -256px;"><div class="ne"><input class='button' type='button' onclick="play('res/sound/ne.mp3'); pick10('ne');" /></td>
			<td style="background-position: -265px -256px;"><div class="no"><input class='button' type='button' onclick="play('res/sound/no.mp3'); pick10('no');" /></td>
		</tr>
		<tr>
			<td style="background-position: 0px    -320px;"><div class="ha"><input class='button' type='button' onclick="play('res/sound/ha.mp3'); pick10('ha');" /></td>
			<td style="background-position: -64px  -320px;"><div class="hi"><input class='button' type='button' onclick="play('res/sound/hi.mp3'); pick10('hi');" /></td>
			<td style="background-position: -128px -320px;"><div class="fu"><input class='button' type='button' onclick="play('res/sound/fu.mp3'); pick10('fu');" /></td>
			<td style="background-position: -192px -320px;"><div class="he"><input class='button' type='button' onclick="play('res/sound/he.mp3'); pick10('he');" /></td>
			<td style="background-position: -265px -320px;"><div class="ho"><input class='button' type='button' onclick="play('res/sound/ho.mp3'); pick10('ho');" /></td>
		</tr>
		<tr>
			<td style="background-position: 0px    -384px;"><div class="ma"><input class='button' type='button' onclick="play('res/sound/ma.mp3'); pick10('ma');" /></td>
			<td style="background-position: -64px  -384px;"><div class="mi"><input class='button' type='button' onclick="play('res/sound/mi.mp3'); pick10('mi');" /></td>
			<td style="background-position: -128px -384px;"><div class="mu"><input class='button' type='button' onclick="play('res/sound/mu.mp3'); pick10('mu');" /></td>
			<td style="background-position: -192px -384px;"><div class="me"><input class='button' type='button' onclick="play('res/sound/me.mp3'); pick10('me');" /></td>
			<td style="background-position: -265px -384px;"><div class="mo"><input class='button' type='button' onclick="play('res/sound/mo.mp3'); pick10('mo');" /></td>
		</tr>
		<tr>
			<td style="background-position: 0px    -448px;"><div class="ya"><input class='button' type='button' onclick="play('res/sound/ya.mp3'); pick10('ya');" /></td>
			<td style="background-position: -64px  -448px;"></td>
			<td style="background-position: -128px -448px;"><div class="yu"><input class='button' type='button' onclick="play('res/sound/yu.mp3'); pick10('yu');" /></td>
			<td style="background-position: -192px -448px;"></td>
			<td style="background-position: -265px -448px;"><div class="yo"><input class='button' type='button' onclick="play('res/sound/yo.mp3'); pick10('yo');" /></td>
		</tr>	
		<tr>
			<td style="background-position: 0px    -512px;"><div class="ra"><input class='button' type='button' onclick="play('res/sound/ra.mp3'); pick10('ra');" /></td>
			<td style="background-position: -64px  -512px;"><div class="ri"><input class='button' type='button' onclick="play('res/sound/ri.mp3'); pick10('ri');" /></td>
			<td style="background-position: -128px -512px;"><div class="ru"><input class='button' type='button' onclick="play('res/sound/ru.mp3'); pick10('ru');" /></td>
			<td style="background-position: -192px -512px;"><div class="re"><input class='button' type='button' onclick="play('res/sound/re.mp3'); pick10('re');" /></td>
			<td style="background-position: -265px -512px;"><div class="ro"><input class='button' type='button' onclick="play('res/sound/ro.mp3'); pick10('ro');" /></td>
		</tr>	
		<tr>
			<td style="background-position: 0px    -576px;"><div class="wa"><input class='button' type='button' onclick="play('res/sound/wa.mp3'); pick10('wa');" /></td>
			<td style="background-position: -64px  -576px;"></td>
			<td style="background-position: -128px -576px;"></td>
			<td style="background-position: -192px -576px;"></td>
			<td style="background-position: -265px -576px;"><div class="wo"><input class='button' type='button' onclick="play('res/sound/o.mp3'); pick10('wo');" /></td>
		</tr>
		<tr>
			<td style="background-position: 0px    -640px;"><div class="n"><input class='button' type='button' onclick="play('res/sound/n.mp3'); pick10('n');" /></td>
			<td style="background-position: -64px  -640px;"></td>
			<td style="background-position: -128px -640px;"></td>
			<td style="background-position: -192px -640px;"></td>
			<td style="background-position: -265px -640px;"></td>
		</tr>
</div>



<div class ="column2">
<div id="selection">
<button class ="btn" onclick="beginQuiz('a')"> Quiz me on 'a' set </button><br>	
<button class ="btn" onclick="beginQuiz('i')"> Quiz me on 'i' set  </button><br>	
<button class ="btn" onclick="beginQuiz('u')"> Quiz me on 'u' set </button><br>	
<button class ="btn" onclick="beginQuiz('e')"> Quiz me on 'e' set </button><br>	
<button class ="btn" onclick="beginQuiz('o')"> Quiz me on 'o' set </button><br>	
</div>
<div id ="quiz">
</div>
<div id ="submit">
		<button class = "btn" onclick="start()">CLICK TO START QUIZ</button>
</div>
<div id ="results"></div>

</div>

</body>
</html>