<!-- Tools box -->
<nav>
	<input id="bold" type="button" onclick="command('bold');" value="B"/>
	<input id="italic" type="button" onclick="command('italic');" value="I"/>
	<input id="underline" type="button" onclick="command('underline');" value="U"/>
	<input id="strikethrough" type="button" onclick="command('strikethrough');" value="S"/>
	<span>&nbsp;&nbsp;</span>
	<img src="editor-images/superscript.png" onclick="command('superscript');"/>
	<img src="editor-images/subscript.png" onclick="command('subscript');"/>
	<span>&nbsp;&nbsp;</span>
	<img src="editor-images/bullets.png" onclick="command('insertunorderedlist');"/>
	<img src="editor-images/numbers.png" onclick="command('insertorderedlist');"/>
	<span>&nbsp;&nbsp;</span>
	<img src="editor-images/text_align_left.png" onclick="command('justifyLeft');"/>
	<img src="editor-images/text_align_center.png" onclick="command('justifyCenter');"/>
	<img src="editor-images/text_align_right.png" onclick="command('justifyRight');"/>
	<img src="editor-images/text_align_justify.png" onclick="command('justifyFull');"/>
	<span>&nbsp;&nbsp;</span>
	<span id="font-selection">
		<span style="display: none">
			<input type="button" style="font-family: Helvetica,Arial,sans-serif;" onclick="changeFont(this);" value="Helvetica"></input>
			<input type="button" style="font-family: Arial Black,Gadget,sans-serif;" onclick="changeFont(this);" value="Arial Black"></input>
			<input type="button" style="font-family: Comic Sans MS,cursive" onclick="changeFont(this);" value="Comic Sans"></input>
			<input type="button" style="font-family: Courier,monospace;" onclick="changeFont(this);" value="Courier New"></input>
			<input type="button" style="font-family: Impact,Georgia,serif;" onclick="changeFont(this);" value="Impact"></input>
			<input type="button" style="font-family: Monaco,Lucida Console,monospace;" onclick="changeFont(this);" value="Monaco"></input>
			<input type="button" style="font-family: Lucida Sans Unicode,Lucida Grande,sans-serif;" onclick="changeFont(this);" value="Lucida Sans"></input>
			<input type="button" style="font-family: Palatino Linotype,Book Antiqua,Palatino,serif;" onclick="changeFont(this);" value="Palatino Linotype"></input>
			<input type="button" style="font-family: Tahoma,Geneva,sans-serif;" onclick="changeFont(this);" value="Tahoma"></input>
			<input type="button" style="font-family: Times New Roman,Times,serif;" onclick="changeFont(this);" value="Times New Roman"></input>
			<input type="button" style="font-family: Trebuchet MS,Helvetica,sans-serif;" onclick="changeFont(this);" value="Trebuchet MS"></input>
			<input type="button" style="font-family: Verdana,Geneva,sans-serif;" onclick="changeFont(this);" value="Verdana"></input>
		</span>
		<input type="button" onclick="selectFont('font-selection');" value="Font"></input>
	</span>
	<span id="font-size">
		<span style="display: none">
			<input type="button" style="font-size: 10px;" onclick="changeFontSize(10);" value="10"></input>
			<input type="button" style="font-size: 12px;" onclick="changeFontSize(12);" value="12"></input>
			<input type="button" style="font-size: 14px;" onclick="changeFontSize(14);" value="14"></input>
			<input type="button" style="font-size: 16px;" onclick="changeFontSize(16);" value="16"></input>
			<input type="button" style="font-size: 18px;" onclick="changeFontSize(18);" value="18"></input>
			<input type="button" style="font-size: 22px;" onclick="changeFontSize(22);" value="22"></input>
			<input type="button" style="font-size: 24px;" onclick="changeFontSize(24);" value="24"></input>
			<input type="button" style="font-size: 32px;" onclick="changeFontSize(32);" value="32"></input>
			<input type="button" style="font-size: 48px;" onclick="changeFontSize(48);" value="48"></input>
			<input type="button" style="font-size: 64px;" onclick="changeFontSize(64);" value="64"></input>
		</span>
		<input type="button" onclick="selectFontSize();" value="Size"></input>
	</span>
	<span id="font-colour">
		<span style="display: none">
			<input type="button" style="background: #fff;" onclick="changeFontColour('#fff');"></input>
			<input type="button" style="background: #E6B8AF;" onclick="changeFontColour('#E6B8AF');"></input>
			<input type="button" style="background: #F4CCCC;" onclick="changeFontColour('#F4CCCC');"></input>
			<input type="button" style="background: #FCE5CD;" onclick="changeFontColour('#FCE5CD');"></input>
			<input type="button" style="background: #FFF2CC;" onclick="changeFontColour('#FFF2CC');"></input>
			<input type="button" style="background: #D9EAD3;" onclick="changeFontColour('#D9EAD3');"></input>
			<input type="button" style="background: #D0E0E3;" onclick="changeFontColour('#D0E0E3');"></input>
			<input type="button" style="background: #C9DAF8;" onclick="changeFontColour('#C9DAF8');"></input>
			<input type="button" style="background: #CFE2F3;" onclick="changeFontColour('#CFE2F3');"></input>
			<input type="button" style="background: #CFE2F3;" onclick="changeFontColour('#CFE2F3');"></input>
			<input type="button" style="background: #EAD1DC;" onclick="changeFontColour('#EAD1DC');"></input>
			
			<input type="button" style="background: #bbbbbb;" onclick="changeFontColour('#bbbbbb');"></input>
			<input type="button" style="background: #DD7E6B;" onclick="changeFontColour('#DD7E6B');"></input>
			<input type="button" style="background: #EA9999;" onclick="changeFontColour('#EA9999');"></input>
			<input type="button" style="background: #F9CB9C;" onclick="changeFontColour('#F9CB9C');"></input>
			<input type="button" style="background: #FFE599;" onclick="changeFontColour('#FFE599');"></input>
			<input type="button" style="background: #B6D7A8;" onclick="changeFontColour('#B6D7A8');"></input>
			<input type="button" style="background: #A2C4C9;" onclick="changeFontColour('#A2C4C9');"></input>
			<input type="button" style="background: #A4C2F4;" onclick="changeFontColour('#A4C2F4');"></input>
			<input type="button" style="background: #9FC5E8;" onclick="changeFontColour('#9FC5E8');"></input>
			<input type="button" style="background: #B4A7D6;" onclick="changeFontColour('#B4A7D6');"></input>
			<input type="button" style="background: #D5A6BD;" onclick="changeFontColour('#D5A6BD');"></input>
			
			<input type="button" style="background: #999999;" onclick="changeFontColour('#999999');"></input>
			<input type="button" style="background: #CC4125;" onclick="changeFontColour('#CC4125');"></input>
			<input type="button" style="background: #E06666;" onclick="changeFontColour('#E06666');"></input>
			<input type="button" style="background: #F6B26B;" onclick="changeFontColour('#F6B26B');"></input>
			<input type="button" style="background: #FFD966;" onclick="changeFontColour('#FFD966');"></input>
			<input type="button" style="background: #93C47D;" onclick="changeFontColour('#93C47D');"></input>
			<input type="button" style="background: #76A5AF;" onclick="changeFontColour('#76A5AF');"></input>
			<input type="button" style="background: #6D9EEB;" onclick="changeFontColour('#6D9EEB');"></input>
			<input type="button" style="background: #6FA8DC;" onclick="changeFontColour('#6FA8DC');"></input>
			<input type="button" style="background: #8E7CC3;" onclick="changeFontColour('#8E7CC3');"></input>
			<input type="button" style="background: #C27BA0;" onclick="changeFontColour('#C27BA0');"></input>
			
			<input type="button" style="background: #666666;" onclick="changeFontColour('#666666');"></input>
			<input type="button" style="background: #A61C00;" onclick="changeFontColour('#A61C00');"></input>
			<input type="button" style="background: #CC0000;" onclick="changeFontColour('#CC0000');"></input>
			<input type="button" style="background: #E69138;" onclick="changeFontColour('#E69138');"></input>
			<input type="button" style="background: #F1C232;" onclick="changeFontColour('#F1C232');"></input>
			<input type="button" style="background: #6AA84F;" onclick="changeFontColour('#6AA84F');"></input>
			<input type="button" style="background: #45818E;" onclick="changeFontColour('#45818E');"></input>
			<input type="button" style="background: #3C78D8;" onclick="changeFontColour('#3C78D8');"></input>
			<input type="button" style="background: #3D85C6;" onclick="changeFontColour('#3D85C6');"></input>
			<input type="button" style="background: #674EA7;" onclick="changeFontColour('#674EA7');"></input>
			<input type="button" style="background: #A64D79;" onclick="changeFontColour('#A64D79');"></input>
			
			<input type="button" style="background: #444444;" onclick="changeFontColour('#444444');"></input>
			<input type="button" style="background: #85200C;" onclick="changeFontColour('#85200C');"></input>
			<input type="button" style="background: #990000;" onclick="changeFontColour('#990000');"></input>
			<input type="button" style="background: #B45F06;" onclick="changeFontColour('#B45F06');"></input>
			<input type="button" style="background: #BF9000;" onclick="changeFontColour('#BF9000');"></input>
			<input type="button" style="background: #38761D;" onclick="changeFontColour('#38761D');"></input>
			<input type="button" style="background: #134F5C;" onclick="changeFontColour('#134F5C');"></input>
			<input type="button" style="background: #1155CC;" onclick="changeFontColour('#1155CC');"></input>
			<input type="button" style="background: #0B5394;" onclick="changeFontColour('#0B5394');"></input>
			<input type="button" style="background: #351C75;" onclick="changeFontColour('#351C75');"></input>
			<input type="button" style="background: #741B47;" onclick="changeFontColour('#741B47');"></input>
			
			<input type="button" style="background: #000000;" onclick="changeFontColour('#000000');"></input>
			<input type="button" style="background: #5B0F00;" onclick="changeFontColour('#5B0F00');"></input>
			<input type="button" style="background: #660000;" onclick="changeFontColour('#660000');"></input>
			<input type="button" style="background: #783F04;" onclick="changeFontColour('#783F04');"></input>
			<input type="button" style="background: #7F6000;" onclick="changeFontColour('#7F6000');"></input>
			<input type="button" style="background: #274E13;" onclick="changeFontColour('#274E13');"></input>
			<input type="button" style="background: #0C343D;" onclick="changeFontColour('#0C343D');"></input>
			<input type="button" style="background: #1C4587;" onclick="changeFontColour('#1C4587');"></input>
			<input type="button" style="background: #073763;" onclick="changeFontColour('#073763');"></input>
			<input type="button" style="background: #20124D;" onclick="changeFontColour('#20124D');"></input>
			<input type="button" style="background: #4C1130;" onclick="changeFontColour('#4C1130');"></input>
		</span>
		<input type="button" onclick="selectFontColour();"></input>
	</span>
	<span>&nbsp;&nbsp;</span>
	<input id="h1" type="button" onclick="command('formatBlock','h1');" value="H1"/>
	<input id="h2" type="button" onclick="command('formatBlock','h2');" value="H2"/>
	<input id="h3" type="button" onclick="command('formatBlock','h3');" value="H3"/>
	<span>&nbsp;&nbsp;</span>
	<img src="editor-images/outdent.png" onclick="document.execCommand('outdent',false, null);"/>
	<img src="editor-images/indent.png" onclick="document.execCommand('indent',false, null);"/>
	<!-- headings, font/background color, font family, font size, text align/justification, links, images -->
	<span id="savestatus">-</span>
	<span id="public">Public Access <input type="checkbox" id="publicCheckbox" onchange="publicAccess(this);"></span>
	<ul id="doclist"></ul>
</nav>