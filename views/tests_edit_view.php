<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/smoothness/jquery-ui.css"/>
<script>
	$(function () {
		$("#tabs").tabs();
	});
</script>
<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Üldine</a></li>
		<li><a href="#tabs-2">Proin dolor</a></li>
		<li><a href="#tabs-3">Aenean lacinia</a></li>
	</ul>
	<div id="tabs-1">
		<form method="post">
			<label>Küsimuse nimi</label>
			<input type="text" name="name" value="<?=$test['name']?>">
			<label>Sissejuhatus</label>
			<textarea name="introduction"><?=$test['introduction']?></textarea>
			<label>Kokkuvõte</label>
			<textarea name="conclusion"><?=$test['conclusion']?></textarea>
			<label>Passcode</label>
			<input type="text" name="passcode" value="<?=$test['passcode']?>">
		</form>
	</div>
	<div id="tabs-2">
		<label>Küsimus</label>
		<textarea name="question_text"><?=$test['question_text']?></textarea>
		<label>Tüüp</label>
		<select name="type_id" id="type_id">
			<option value="1">True/False</option>
			<option value="2" selected="selected">Multiple choice</option>
			<option value="3">Multiple response</option>
			<option value="4">Fill in the blank</option>
		</select>
		<div id="answer-template">
			<div id="type_id_1" class="answer-template">
				<label>Sisesta kaks vastust ja märgi ära õige vastus</label>
				<input type="radio" name="tf.correct" value="0" checked="checked">
				<textarea name="answer.0">True</textarea>
				<input type="radio" name="tf.correct" value="1">
				<textarea name="answer.1">False</textarea>
			</div>
			<div id="type_id_2" class="answer-template">
				<label>Sisesta vastusevariandid ja märgi ära missugune variant on õige</label>
				<div id="multiple-choice-options">
					<div class="answer-option">
						<input type="radio" name="mc.correct" value="0" checked="checked">
						<textarea name="mc.answer.0"></textarea>
					</div>
					<div class="answer-option">
						<input type="radio" name="mc.correct" value="1">
						<textarea name="mc.answer.1"></textarea>
					</div>
					<div class="answer-option">
						<input type="radio" name="mc.correct" value="2">
						<textarea name="mc.answer.2"></textarea>
					</div>
					<div class="answer-option">
						<input type="radio" name="mc.correct" value="3">
						<textarea name="mc.answer.3"></textarea>
					</div>
				</div>
			</div>
			<div id="type_id_3" class="answer-template">
				<label>Sisesta vastusevariandid ja märgi ära missugused variandid on õiged</label>
				<div id="multiple-response-answer-option">
					<div class="answer-option">
						<input type="checkbox" name="mr.correct" value="1">
						<textarea name="mr.answer.0"></textarea>
					</div>
					<div class="answer-option">
						<input type="checkbox" name="mr.correct" value="1">
						<textarea name="mr.answer.1"></textarea>
					</div>
					<div class="answer-option">
						<input type="checkbox" name="mr.correct" value="1">
						<textarea name="mr.answer.2"></textarea>
					</div>
					<div class="answer-option">
						<input type="checkbox" name="mr.correct" value="1">
						<textarea name="mr.answer.3"></textarea>
					</div>
				</div>
			</div>
			<div id="type_id_4" class="answer-template">
				<label>Sisesta võimalikud vastusevariandid(Üks vastus ühte kasti)</label>
				<div id="fill-in-the-blank-answer-option">
					<div class="answer-option">
						<input type="checkbox" name="fitb.correct" checked="checked" disabled="true">
						<textarea name="fitb.answer.0"></textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="tabs-3">
	</div>
</div>