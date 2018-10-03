<?php include "header.php"; ?>
<div id="content" name="contact">
	<form method="post" action="contact_submit.php">
		<table id="contact_table">
			<tr>
				<td width="150"><strong>姓名</strong></td>
				<td width="200"><input type="text" name="name" height="30px" required></td>
			</tr>
			<tr>
				<td><strong>Email</strong></td>
				<td><input type="text" name="email" required></td>
			</tr>
			<tr>
				<td><strong>聯絡電話</strong></td>
				<td><input type="text" name="phone" required></td>
			</tr>
			<tr>
				<td><strong>未定</strong></td>
				<td><input type="text" name="x"></td>
			</tr>
			<tr>
				<td valign="top"><strong>詢問內容</strong></td>
				<td><textarea name="question" rows="5" required></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button type="submit">送出</button></td>
			</tr>
		</table>
	</form>
</div>
<?php include "footer.php"; ?>