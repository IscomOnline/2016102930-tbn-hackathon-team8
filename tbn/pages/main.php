
<div id="tabs">
	<ul>
		<li><a href="#tabs-1">查詢</a></li>
		<li><a href="#tabs-2">測試2</a></li>
		<li><a href="#tabs-3">測試3</a></li>
	</ul>
	<div id="tabs-1">
		<table  cellpadding="20">
			<tr>
				<th>查詢地點</th>
				<th>查詢種類</th>
				<th>查詢名字(關鍵字ex:蝶)</th>
				<th>查詢英文名字(關鍵字ex:dog)</th>
				<th>數量最大限制</th>

			</tr>
			<tr>
				<td>
					<select id="selectArea" class="form-control">

					</select>
				</td>
				<td>
					<select id="selectSpecies" class="form-control">

					</select>
				</td>
				<td>
					<input type='text' id="selectName" class="form-control" />
				</td>
				<td>
					<input type='text' id="selectEngName" class="form-control" />
				</td>
				<td>
					<select id="selectNum" class="form-control">
						<option value="請選擇">請選擇</option>
					</select>
				</td>
				<td colspan="2" >
					<input type='button' class='btn btn-info' value="重新輸入" />
					<input type='button' class='btn btn-success' value="查詢" />
				</td>
			</tr>
			<tr>
				<td colspan="7">
					<p>主頁面</p>
					<div class="fakewindowcontain">

						<!-- ui-dialog -->
						<div class="ui-overlay">
							<div class="ui-widget-overlay">
							</div>

						</div>
					</div>
				</td>
			</tr>
		</table>






	</div>
	<div id="tabs-2">Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.</div>
	<div id="tabs-3">Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.</div>
</div>

<input type='button' value='test' id='test' class='btn btn-default' />
<input type='button' value='test' id='test1' class='btn btn-primary' />
<input type='button' value='test' id='test2' class='btn btn-success' />
<input type='button' value='test' id='test3' class='btn btn-info' />
<input type='button' value='test' id='test4' class='btn btn-warning' />
<input type='button' value='test' id='test5' class='btn btn-danger' />
<input type='button' value='test' id='test6' class='btn btn-link' />

<br/>


<link rel="stylesheet" href="stylesheets/page/main.css">
<script src="javascripts/page/main.js"></script>	<!-- js -->
