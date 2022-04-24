<h1>Convert PDF into images</h1>

<form class="formClass" method="post" action="process.php" enctype="multipart/form-data">  
				   					<fieldset>
				   					

					   						  <label class="checkbox">
				                                PDF<input type="radio" name="pdf_file" value="1">
				                              </label>

<input type="file" name="img" id="files">
					   						
					   					<br>
					   						<p><b>Image Resolution</b></p>
				   						<select name="img_resolution">
				   							<option value="1920">1920</option>
				   							<option value="1280">1280</option>
				   							<option value="1024">1024</option>
				   							<option value="960">960</option>
				   							<option value="800">800</option>
				   							<option value="640">640</option>
				   						</select>


				   						<br>
					   					<p><b>Image Quality</b></p>
				   						<select name="img_resquality">
				   							<option>72</option>
				   							<option>100</option>
				   							<option>150</option>
				   							<option>200</option>
				   							<option>300</option>
				   							<option>400</option>
				   							<option>500</option>
				   							<option>700</option>
				   							<option>1000</option>
				   						</select>

				   						<p><b>Image Format</b></p>
				   						<select name="img_format">
				   							<option value="jpeg">JPG</option>
				   							<option value="png">PNG</option>
				   							<option value="gif">GIF</option>
				   						</select>

				   						<p><b>Compression Quality</b></p>
				   						<input type="text" name="img_cmpquality"> (only number e.g. 95)
				   						<br>
				   						<p><b>Number of Slides</b></p>
				   						<input type="text" name="img_count"> (only number)
				   						<br>

										<p><b>Slides Prefix(eg. ppt)</b></p>
				   						<input type="text" name="img_name_pre"> 
				   						<br>				   							
					   					<input name="create_slides" type="submit" value="Create Slides" />
					   					<hr>
				   					
				   					
		                    	
				   					</fieldset>
		                    	</form>
