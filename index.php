<!doctype html>
<html lang="en">
 <head>
  
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/print.css" media="print">
 </head>
 <style>
     @page{
	   size: landscape;
	   margin: 0;
	   page-break-inside: avoid;
      }
	  @media print{
	     pre,blockquote {page-break-inside: avoid;}
	  }
     img{
	    width:100%;
	 }
	 #div1{
	    height: 230px;
		width: 180px;
		 position: absolute;
		left: 70%;
		top: 50%;
		border: 2px solid #6600ff;
		
	 
	 }

	 .c1{ 
		  width: 50%;
		  height: 200px;
		  position: absolute;
		  left: 10%;
		  
		  font: serif;
		padding: 50px;
		text-align: center;
		font-size: 22px;
		color: #6633ff;
		font-weight: bold;

	 }
	 .c1,form{
	   page-break-inside: avoid;
	 }
	 .c1 input{
	    
		border: none;
    border-bottom: 1px solid #6633ff;
    background: transparent;
    outline: none;
    height: 40px;
    color: black;
    font-size: 24px;
	text-align: center;
	font: serif;
	 }
	 .but{
	     width:35%;
		 height: 35px;
		 background-color: #6666ff;
		 font-size: 24px;
		 font: serif;
		 color: black;
		 cursor: pointer;
	 }
 </style>

 <body>

<div><img src="fino.jpg" ></div> 

<div class="c1">

 <form action="addaction.php" method="post" enctype="multipart/form-data">
	Customer Name: <input type="text"  name="name"></br></br>
	Account Number: <input type="text" name="contact"></br></br>
	Cif Number: <input type="text" name="contact"></br></br>
	Aadhar Number: <input type="text" name="contact"></br></br>
	Mobile Number: <input type="text" name="contact"></br></br>
	IFSC Code: <input type="text" name="roll"></br></br>
 </form> 
 <button onclick="window.print();" class="but">Print</button></td>
 </div>
<div id="div1"></div>