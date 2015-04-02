<html>
	
	<!--******************************************************************
	**********************************************************************
	 
	  Conor Walsh 2015
	     Website: http://www.conorwalsh.net
	     GitHub:  https://github.com/conorwalsh
	  
	  Version 1
	  
	  First created: 1st April 2015
	  Last modified: 2nd April 2015
	  
	 **************************** LICENCE *******************************
	 
	 Copyright (c) 2015 Conor Walsh
	
	 Permission is hereby granted, free of charge, to any person obtaining
	 a copy of this software and associated documentation files (the
	 "Software"), to deal in the Software without restriction, including
	 without limitation the rights to use, copy, modify, merge, publish,
	 distribute, sublicense, and/or sell copies of the Software, and to
	 permit persons to whom the Software is furnished to do so, subject to
	 the following conditions:
	
	 The above copyright notice and this permission notice shall be included
	 in all copies or substantial portions of the Software.
	
	 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
	 OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
	 MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
	 IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
	 CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
	 TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
	 SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
	  
	**********************************************************************
	*******************************************************************-->
	
	<head>
		<title>Collatz Conjecture</title>
	</head>
	
	<body>
		
		<form method="get"action="">
			<label for="i">Number: </label>
			<input type="number" min="2" value="<?php echo $_GET["i"]; ?>" name="i" id="i"/>
			<label for="a">Show operations: </label>
			<input type="checkbox" value="1" name="a" id="a" <?php $a = $_GET["a"]; if($a==1){echo "checked";} ?>/>
			<button type="submit">Go</button>
		</form>
		
		<?php
		
		  	$n = $_GET["i"];
						
			$times = 0;
			
			if($a==1){
				echo $times . ": " . $n . "<br />";
			}
			
			while ($n != 1 && $n > 0) {
				if($n % 2 == 0){
					$n = $n / 2;
					$times++;
					if($a==1){
						echo $times . ": " . $n . "<br />";
					}
				}
				else {
					$n = ($n * 3) + 1;
					$times++;
					if($a==1){
						echo $times . ": " . $n . "<br />";
					}
				}
			}
			
			echo "<br />Number of operations: " . $times;
						
		?>
		
	</body>
	
</html>
