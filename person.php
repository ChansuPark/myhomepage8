<!DOCTYPE html>
<html>
<head>
	<title>회원가입</title>
	<meta charset="utf-8">
</head>
<body>
	
	<style>
		body
		{
		background-image:url('bg1.png'); 	
		}
	</style>
	<div style="padding-bottom:50%;" align="center">
		<table><br>
			<tr><br>
				<td>이름</td><br>
				<td><input type="text" name="user_name">></td><br>
			</tr><br>
			<tr><br>
				<td>아이디</td><br>
				<td><input type="text" name="user_id">></td><br>
			</tr><br>
			<tr><br>
				<td>비밀번호</td><br>
				<td><input type="password" name="user_pw">></td><br>
			</tr><br>
			<tr><br>
				<td>비밀번호 확인</td><br>
				<td><input type="text" name="user_pw2">></td><br>
			</tr><br>
			<tr><br>
				<td>생년월일</td><br>
				<td><select name="user_birth_year"><br>
					<option value="2000" selected>2000</option><br>
					<option value="2001" selected>2001</option><br>
					<option value="2002" selected>2002</option><br>
					<option value="2003" selected>2003</option><br>
					<option value="2004" selected>2004</option><br>
				</select>
			년<br>
			<select name="user_birth_month"><br>
				<option value="1">1</option><br>
				<option value="2">2</option><br>
				<option value="3">3</option><br>
				<option value="4">4</option><br>
				<option value="5">5</option><br>
				<option value="6">6</option><br>
				<option value="7">7</option><br>
				<option value="8">8</option><br>
				<option value="9">9</option><br>
				<option value="10">10</option><br>
				<option value="11">11</option><br>
				<option value="12">12</option><br>
			</select><br>
			월<br>
			<select name="user_birth_day"><br>
				<option value="1">1</option><br>
				<option value="2">2</option><br>
				<option value="3">3</option><br>
				<option value="4">4</option><br>
				<option value="5">5</option><br>
				<option value="6">6</option><br>
				<option value="7">7</option><br>
				<option value="8">8</option><br>
				<option value="9">9</option><br>
				<option value="10">10</option><br>
				<option value="11">11</option><br>
				<option value="12">12</option><br>
				<option value="13">13</option><br>
				<option value="14">14</option><br>
				<option value="15">15</option><br>
				<option value="16">16</option><br>
				<option value="17">17</option><br>
				<option value="18">18</option><br>
				<option value="19">19</option><br>
				<option value="20">20</option><br>
				<option value="21">21</option><br>
				<option value="22">22</option><br>
				<option value="23">23</option><br>
				<option value="24">24</option><br>
				<option value="25">25</option><br>
				<option value="26">26</option><br>
				<option value="27">27</option><br>
				<option value="28">28</option><br>
				<option value="29">29</option><br>
				<option value="30">30</option><br>
				<option value="31">31</option><br>
			</select><br>
			일<br>
		</td><br>
		</tr><br>
		<tr><br>
			<td>직업</td><br>
			<td><select name="user_job"><br>
				<option value="student">학생</option><br>
				<option value="teacher">교사</option><br>
				<option value="salerman">회사원</option>
				<option value="none">무직</option>		
			</select><br>
			</td><br>
		</tr><br>
		<tr><br>
			<td></td><br>
			<td><input type="submit" name="submit" value="완료"/><br>
			<input type="reset" name="reset" value="리셋"></td><br>
		</tr><br>	
		</table><br><br>
	</div>
</body>
</html>