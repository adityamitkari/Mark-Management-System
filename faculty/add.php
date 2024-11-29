

<!DOCTYPE html>
<html>
<style>
body {
  font-family: Arial;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

 <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" align="center"><font color="#00000">ADD STUDENT MARK</font> </h1>
                
            </div>


<div class="container">
  <form action='./mark_insert.php' method='post'>
    <label for="fname">CA1</label>
    <input type="text" id="fname" name="CA1" placeholder="CA1">

    <label for="lname">MIDSEM</label>
    <input type="text" id="lname" name="MIDSEM" placeholder="MIDSEM">

    <label for="lname">CA2</label>
    <input type="text" id="lname" name="CA2" placeholder="CA2">
	<tr>
					<td>Select Subject</td>
					<Td><select name="pro" class="form-control" required>
					
					<option>SE</option>
					<option>DBS</option>
					<option>TOC</option>
					<option>BC</option>
					<option>NM</option>
		
					</select>
					</td>
				</tr>
  
    <input type="submit" name='marks' value="Submit">
  </form>
</div>

</body>
</html>