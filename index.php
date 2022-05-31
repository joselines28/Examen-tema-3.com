<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html> 
    <head>
        <meta charset="UTF-8">
        <title>CONV DIV Y DIST JSH</title>
          <h1 align="center"> <font face="Century Gothic" color="#FF9999">COVERTIDOR DE DISTANCIAS</h1></FONT>
  El programa debera hacer la conversion de Centimetros,Metros y Yardas.
<body>
    <CENTER>
            <STRONG>Conversor De Distancias</STRONG> 
       
                    <select name="Elija tipo de conversion">
                              <OPTION VALUE="0" onclick="select(this.value),borrar()">elija...</OPTION> 
                <OPTION VALUE="1" onclick="select(this.value),borrar()">Centimetros a Metros,
                <OPTION VALUE="2" onclick="select(this.value),borrar()">Centimetros a Yardas,
                     <OPTION VALUE="3" onclick="select(this.value),borrar()">Metros a Centimetros, 
                <OPTION VALUE="4" onclick="select(this.value),borrar()">Metros a Yardas,
                <OPTION VALUE="5" onclick="select(this.value),borrar()">Yardas a Centimetos</OPTION>                 
                <OPTION VALUE="6" onclick="select(this.value),borrar()">Yardas a Metros</OPTION> 
            </SELEC	T>

                        </select>
                       
                                     
                 <p> 
    Centimetros a convertir 
    </p>	 
    	<p><INPUT type=number id="num1" value="0">    </p>	 
 
    <p>Numero Convertido</p>	 	
    <p><INPUT type=number id="num2" value="0"></p>	     	
    </CENTER>	 		

    <table border=0 align=center> 
         <td colspan="3"> 
                        
        <tr> 
            <td> 
 
                <input type="Button" Id="1" value="1" onClick="display1('1')"/> 
            
                <input type="Button" Id="2" value="2" onclick="display1('2')"/> 
            
                <input type="Button" Id="3" value="3" onclick="display1('3')"/> 
            </td> 
            
        </tr> 
        
         <tr> 
            <td> 
                <input type="Button" Id="4" value="4" onClick="display1('4')"/> 
            
                <input type="Button" Id="5" value="5" onclick="display1('5')"/> 
            
                <input type="Button" Id="6" value="6" onclick="display1('6')"/> 
            </td> 
         </tr> 
        <tr> 
            <td> 
                <input type="Button" Id="7" value="7" onClick="display1('7')" /> 
  
                <input type="Button" Id="8" value="8" onclick="display1('8')"/> 
           
                 <input type="Button" Id="9" value="9" onclick="display1('9')"/>             </td> 
            
        </tr> 
       <td> 
        <input type="Button" Id="C" value="C" onClick="borrar()"/> 
                <input type="Button" Id="0" value="0" onClick="display1('0')"/> 
                <input type="Button" Id="," value="," onClick="display1(',')"/> 
        </td> 
        <tr> 
            <td colspan=0> 
           
            </td> 
        <CENTER> 
     <form action="<?PHP$php_SELF?>" method="POST" >  
        <textarea name="about" rows="5" cols="30"> </textarea> 
        <br> 
        <input type="SUBMIT" value="CONVERTIDO" /> 
        </form> 
              <input type="Button" Id="con" value="convertir" onClick="()"/> 
              <input type="reset" value="Clear" > 
        <!--<p> 
                    <input type="Button" Id="co" value="copyrigt" onClick="copyrigth()"/> 
                </p> --> 
        </CENTER> 
 
            
            
        
        </tr> 
        
    </table> 
</body> 
</html> 

                       