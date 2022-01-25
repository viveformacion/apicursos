<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link href="./style.css" rel="stylesheet" />
<script src="./funciones.js"></script>
</head>     
<body>
<div class="container">
  <h2>Entrada Curso</h2>
  <!--Make sure the form has the autocomplete function switched off:-->
  <form autocomplete="off" action="/action_page.php">
     <div class="row">
		
		<div class="col autocomplete">
		<label>ID Curso</label>
		  <input id="idCurso" type="text" name="idCurso" placeholder="ID Curso">
		</div>
		<div class="col">
			<label>Tipo Curso</label>
			<select class="browser-default custom-select">
			  <option selected>Selecciona una opcion</option>
			  <option value="1">Curso</option>
			  <option value="2">Certificado</option>
			  <option value="3">Fp Prueba Libres</option>
			  <option value="3">Fp Titulacion Oficial</option>
			</select>
		</div>
		<div class="col">
			<label>Horas</label>
			<input type="number" name="total_horas" class="form-control" placeholder="horas">
		</div>
		<div class="col">
			<label>Libros</label>
			<input type="number" name="num_libros" class="form-control" placeholder="Libros">
		</div>
		<div class="col">
			<label>Cuadernos</label>
			<input type="number" name="num_cuadernos" class="form-control" placeholder="Cuadernos">
		</div>
	</div>
		<div class="row">
			<div class="col">
				<label>Tipo Tema</label>
				<select class="browser-default custom-select">
				  <option selected>Selecciona una opcion</option>
				  <option value="1">Modulo</option>
				  <option value="2">Tema</option>
				  <option value="3">Unidades Didactica</option>
				  <option value="3">Unidades Formativas</option>
				</select>
			</div>
			<div class="col">
				<label>Cod.Modulo</label>
				<input id="cod_tema" type="text" name="cod_tema" placeholder="Codigo del tema">
			</div>
		</div>
		</div>
		<div class="autocomplete" style="width:300px;">
		  <input id="myInput" type="text" name="myCountry" placeholder="Country">
		</div>
	</div>
   
    
    <input type="submit">
  </form>
  <script>
    /*An array containing all the country names in the world:*/
    var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
	var ids_cursos = ["ADF0001","ADF0002","ADM0001","ADM0002","ADM0003","ADM0004","ADM0005","ADM0006","ADM0007","ADM0008","AGR0001","AGR0002","AGR0003","ALI0001","ALI0002","ALI0003","BACHIL1","CAR0001","CICLOS1","COM0001","COM0002","COM0003","COM0004","COM0005","COM0006","COM0007","COM0008","COM0009","CPADF01","CPADF02","CPADF04","CPADF05","CPADF06","CPADM01","CPADM02","CPADM03","CPADM04","CPADM05","CPADM06","CPADM07","CPADM08","CPADM09","CPADM10","CPAFD03","CPAGF01","CPAGR01","CPAGR02","CPAGR03","CPAGR04","CPAGR05","CPALI01","CPALI02","CPALI03","CPALI04","CPALI05","CPCAR01","CPCAR02","CPDIC01","CPDIC02","CPEST01","CPEST02","CPEST03","CPEST04","CPFME01","CPFME02","CPFMN01","CPFMN01","CPFMN02","CPFMN03","CPFMN04","CPHOS01","CPHOS02","CPIMP01","CPIMP02","CPIMP03","CPIMS01","CPINF01","CPINF02","CPINF03","CPINF04","CPSAN01","CPSAN02","CPSEG01","CPSEG02","CPSEG03","CPSEG04","CPSEG05","CPSSO01","CPSSO02","CPSSO03","CPSSO04","CPSSO05","CPSSO06","CPSSO07","CPSSO08","CPSSO09","CPTEC01","CPTEC02","CPTEC03","CPTEC04","CPTEC05","CPTEC06","CPTEC07","CPTEC08","CPTEC09","CPTEC10","CPTEC11","CPTEC12","CPTEC13","CPTEC13","CPTEC14","CPTEC15","CPTEC16","CPTUR01","CPTUR02","CPTUR03","CPTUR04","CPTUR05","DIC0001","DIC0002","DIC0003","DIC0004","DIC0005","DIC0006","ESO0001","EST0001","EST0002","EST0003","FMN0001","FPADM01","FPADM02","FPADM03","FPAFD01","FPAGR01","FPCOM01","FPCOM02","FPELE01","FPEST01","FPEST02","FPINF01","FPINF02","FPINF03","FPMEC01","FPMEC02","FPSAN01","FPSAN02","FPSAN03","FPSAN04","FPSAN05","FPSAN06","FPSAN07","FPSAN08","FPSAN09","FPSAN10","FPSAN11","FPSSO01","FPSSO02","FPTUR01","FPTUR02","FPTUR03","FPTUR04","HOS0001","HOS0002","HOS0003","HOS0004","HOS0005","HOS0006","HOS0007","IMS0001","IMS0002","IMS0003","IMS0004","IMS0005","IMS0006","IMS0007","IMS0008","IMS0009","INF0001","OFPAD01","OFPAD01","OFPAD02","OFPAD02","OFPAD03","OFPAD03","OFPCO01","OFPCO01","OFPIM01",
"OFPIM01","OFPIM02","OFPIM02","OFPIN01","OFPIN01","OFPIN02","OFPIN02","OFPIN03","OFPIN03","OFPSA01","OFPSA01","OFPSA02","OFPSA02","OFPSA03","OFPSA03","OFPSA04","OFPSA04","OFPSA05","OFPSA05","OFPSA08","OFPSS01","OFPSS01","OFPSS02","OFPSS02",
"OFPTL01","OFPTL01","OFPTU01","OFPTU01","OPADMI1","OPADMI2","OPADMI3","OPADMI4","OPADMI5","OPCORR1","OPCUSE1","OPCUSE2","OPCUSE3","OPCUSE4","OPHACI1","OPINPE1","OPJUST1","OPJUST2","OPJUST3","OPSAAN1","OPSAAN2","OPSAAN3","OPSAAN4",
"OPSAAR1","OPSAAR2","OPSAAR3","OPSAAS1","OPSAAS2","OPSAAS3","OPSACL1","OPSACL2","OPSACL3","OPSACM1","OPSACM2","OPSACM3","OPSAEX1","OPSAEX2","OPSAEX3","OPSAGA1","OPSAGA2","OPSAGA3","OPSAIB1","OPSAIB2","OPSAIB3","OPSAMA1","OPSAMA2",
"OPSAMA3","OPSAMU1","OPSAMU2","OPSAMU3","OPSAPV1","OPSAPV2","OPSAPV3","OPSAVA1","OPSAVA2","OPSAVA3","SAN0003","SAN0004","SAN0005","SAN0006","SAN0007","SAN0008","SAN0009","SAN0010","SAN0011","SAN0012","SAN0013","SAN0014","SAN0015",
"SAN0016","SAN0017","SAN0018","SEG0001","SSO0001","SSO0002","SSO0003","SSO0004","SSO0006","SSO0007","SSO0008","SSO0009","SSO0010","SSO0011","TEC0001","TEC0003","TEC0006","TEC0007","TEC0008","TEC0009","TEC0010","TEC0011","TEC0012",
"TEC0013","TEC0014","TEC0016","TUR0001","TUR0002","TUR0003","TUR0004","TUR0005","TUR0006","TUR0007","UNIVER1","UNIVER2","VET0001","VET0002","VET0003"];
    /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
    autocomplete(document.getElementById("myInput"), countries);
    autocomplete(document.getElementById("idCurso"), ids_cursos);
     document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('input[type=text]').forEach( node => node.addEventListener('keypress', e => {
        if(e.keyCode == 13) {
          e.preventDefault();
        }
      }))
    });


  </script>
</div>


</body>
</html>
