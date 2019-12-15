<?php

require_once "funciones.php";
 
$arraydeerrores = "";
if($_POST) {
  $arrayDeErrores = validarRegistracion($_POST);
  if(count($arrayDeErrores) === 0)
  pre($arrayDeErrores); {
     $usuariofinal=[
      "nombre"=>trim($_POST["nombre"]),
      "apellido"=>trim($_POST["apellido"]),
      "email"=>$_POST["email"],
      "password"=>password_hash($_POST["password"], PASSWORD_DEFAULT),
      "ciudad"=>$_POST["ciudad"],
      "barrio"=>$_POST["barrio"],
      "postal"=>$_POST["postal"],
      "nacimiento"=>$_POST["nacimiento"]
     ];

    $jusuario=json_encode($usuariofinal);
    file_put_contents("usuario.json",$jusuario . PHP_EOL, FILE_APPEND);
    header("Location: index.php");
 /*    $usuariosguardados=file_get_contents("usuario.json");
    $explode=explode(PHP_EOL,$usuariosguardados);
    array_pop($explode);
    foreach($explode as $usuario){
      $user= json_decode($usuario, true);
      if ($user["email"]== $_POST["email"]) {
        if (password_verify($_POST["password"],$user["password"])) {
          // header("location:pag registro.php");
        }
      }
    } */
   }
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/Formuario Registro.css">
    <link href="https://fonts.googleapis.com/css?family=Tomorrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
   <script src="https://kit.fontawesome.com/67f61afa3e.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="css/style.css">
    <title>Registro</title>
</head>
<body >
<?php require_once"NAV.php" ?>
    <a href="Contacto.php" id="aa" > Contactanos</a>
  <!-- Header -->
 
 
  <div id="Todo">

  <form method="post"  action=""> <div id="titulo">Crear Cuenta</div>
    <div class="form-row">
      <div class="col-md-2 mb-3">
        <label for="validationDefault01">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="validationDefault01" placeholder="Nombre"
        value="<?= persistirDato($arraydeerrores, 'nombre'); ?>">
        <small><?= isset($arraydeerrores["nombre"])? $arraydeerrores["nombre"]:"" ?></small>
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationDefault02">Apellido</label>
        <input type="text" name="apellido" class="form-control" id="validationDefault02" placeholder="Apellido" value="<?= persistirDato($arraydeerrores, 'apellido'); ?>">
        <small><?= isset($arraydeerrores["apellido"])? $arraydeerrores["apellido"]:"" ?></small>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault01">Email</label>
        <input type="email" name="email" class="form-control" id="validationDefault01" placeholder="Email" value="<?= persistirDato($arraydeerrores, 'email'); ?>" >
        <small><?= isset($arraydeerrores["email"])? $arraydeerrores["email"]:"" ?></small>
      </div>

      <div class="col-md-2 mb-3">
        <label for="validationDefault01">Contraseña</label>
        <input type="password" name="password" class="form-control" id="validationDefault01" placeholder="Contraseña" value="<?= persistirDato($arraydeerrores, 'password'); ?>" >
        <small><?= isset($arraydeerrores["password"])? $arraydeerrores["password"]:"" ?></small>
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationDefaultUsername">Repetir Contraseña</label>
        <input type="password" name="repassword" class="form-control" id="validationDefaultUsername" placeholder="Contraseña" aria-describedby="inputGroupPrepend2"  value="<?= persistirDato($arraydeerrores, 'repassword'); ?>">
          <small><?= isset($arraydeerrores["repassword"])? $arraydeerrores["repassword"]:"" ?></small>

      </div>
    </div>

    <div class="form-row">
    <!-- <div class="form-row"> -->
      <div class="col-md-2 mb-3">
        <label for="country_id">Pais </label>
        <select name="country_id" id="country_id" class="form-control select2 select2-hidden-accessible" data-select2-id="country_id" tabindex="-1" aria-hidden="true">
                                            <option value="1" data-select2-id="3">AFGHANISTAN</option>
                                            <option value="2" data-select2-id="4">ALBANIA</option>
                                            <option value="3" data-select2-id="5">ALGERIA</option>
                                            <option value="4" data-select2-id="6">AMERICAN SAMOA</option>
                                            <option value="5" data-select2-id="7">ANDORRA</option>
                                            <option value="6" data-select2-id="8">ANGOLA</option>
                                            <option value="7" data-select2-id="9">ANGUILLA</option>
                                            <option value="8" data-select2-id="10">ANTARCTICA</option>
                                            <option value="9" data-select2-id="11">ANTIGUA AND BARBUDA</option>
                                            <option selected="selected" value="10" data-select2-id="12">ARGENTINA</option>
                                            <option value="11" data-select2-id="13">ARMENIA</option>
                                            <option value="12" data-select2-id="14">ARUBA</option>
                                            <option value="13" data-select2-id="15">AUSTRALIA</option>
                                            <option value="14" data-select2-id="16">AUSTRIA</option>
                                            <option value="15" data-select2-id="17">AZERBAIJAN</option>
                                            <option value="16" data-select2-id="18">BAHAMAS</option>
                                            <option value="17" data-select2-id="19">BAHRAIN</option>
                                            <option value="18" data-select2-id="20">BANGLADESH</option>
                                            <option value="19" data-select2-id="21">BARBADOS</option>
                                            <option value="20" data-select2-id="22">BELARUS</option>
                                            <option value="21" data-select2-id="23">BELGIUM</option>
                                            <option value="22" data-select2-id="24">BELIZE</option>
                                            <option value="23" data-select2-id="25">BENIN</option>
                                            <option value="24" data-select2-id="26">BERMUDA</option>
                                            <option value="25" data-select2-id="27">BHUTAN</option>
                                            <option value="26" data-select2-id="28">BOLIVIA</option>
                                            <option value="27" data-select2-id="29">BOSNIA AND HERZEGOVINA</option>
                                            <option value="28" data-select2-id="30">BOTSWANA</option>
                                            <option value="29" data-select2-id="31">BOUVET ISLAND</option>
                                            <option value="30" data-select2-id="32">BRAZIL</option>
                                            <option value="31" data-select2-id="33">BRITISH INDIAN OCEAN TERRITORY</option>
                                            <option value="32" data-select2-id="34">BRUNEI DARUSSALAM</option>
                                            <option value="33" data-select2-id="35">BULGARIA</option>
                                            <option value="34" data-select2-id="36">BURKINA FASO</option>
                                            <option value="35" data-select2-id="37">BURUNDI</option>
                                            <option value="36" data-select2-id="38">CAMBODIA</option>
                                            <option value="37" data-select2-id="39">CAMEROON</option>
                                            <option value="38" data-select2-id="40">CANADA</option>
                                            <option value="39" data-select2-id="41">CAPE VERDE</option>
                                            <option value="40" data-select2-id="42">CAYMAN ISLANDS</option>
                                            <option value="41" data-select2-id="43">CENTRAL AFRICAN REPUBLIC</option>
                                            <option value="42" data-select2-id="44">CHAD</option>
                                            <option value="43" data-select2-id="45">CHILE</option>
                                            <option value="44" data-select2-id="46">CHINA</option>
                                            <option value="45" data-select2-id="47">CHRISTMAS ISLAND</option>
                                            <option value="46" data-select2-id="48">COCOS (KEELING) ISLANDS</option>
                                            <option value="47" data-select2-id="49">COLOMBIA</option>
                                            <option value="48" data-select2-id="50">COMOROS</option>
                                            <option value="49" data-select2-id="51">CONGO</option>
                                            <option value="50" data-select2-id="52">CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
                                            <option value="51" data-select2-id="53">COOK ISLANDS</option>
                                            <option value="52" data-select2-id="54">COSTA RICA</option>
                                            <option value="53" data-select2-id="55">COTE D'IVOIRE</option>
                                            <option value="54" data-select2-id="56">CROATIA</option>
                                            <option value="55" data-select2-id="57">CUBA</option>
                                            <option value="56" data-select2-id="58">CYPRUS</option>
                                            <option value="57" data-select2-id="59">CZECH REPUBLIC</option>
                                            <option value="58" data-select2-id="60">DENMARK</option>
                                            <option value="59" data-select2-id="61">DJIBOUTI</option>
                                            <option value="60" data-select2-id="62">DOMINICA</option>
                                            <option value="61" data-select2-id="63">DOMINICAN REPUBLIC</option>
                                            <option value="62" data-select2-id="64">ECUADOR</option>
                                            <option value="63" data-select2-id="65">EGYPT</option>
                                            <option value="64" data-select2-id="66">EL SALVADOR</option>
                                            <option value="65" data-select2-id="67">EQUATORIAL GUINEA</option>
                                            <option value="66" data-select2-id="68">ERITREA</option>
                                            <option value="67" data-select2-id="69">ESTONIA</option>
                                            <option value="68" data-select2-id="70">ETHIOPIA</option>
                                            <option value="69" data-select2-id="71">FALKLAND ISLANDS (MALVINAS)</option>
                                            <option value="70" data-select2-id="72">FAROE ISLANDS</option>
                                            <option value="71" data-select2-id="73">FIJI</option>
                                            <option value="72" data-select2-id="74">FINLAND</option>
                                            <option value="73" data-select2-id="75">FRANCE</option>
                                            <option value="74" data-select2-id="76">FRENCH GUIANA</option>
                                            <option value="75" data-select2-id="77">FRENCH POLYNESIA</option>
                                            <option value="76" data-select2-id="78">FRENCH SOUTHERN TERRITORIES</option>
                                            <option value="77" data-select2-id="79">GABON</option>
                                            <option value="78" data-select2-id="80">GAMBIA</option>
                                            <option value="79" data-select2-id="81">GEORGIA</option>
                                            <option value="80" data-select2-id="82">GERMANY</option>
                                            <option value="81" data-select2-id="83">GHANA</option>
                                            <option value="82" data-select2-id="84">GIBRALTAR</option>
                                            <option value="83" data-select2-id="85">GREECE</option>
                                            <option value="84" data-select2-id="86">GREENLAND</option>
                                            <option value="85" data-select2-id="87">GRENADA</option>
                                            <option value="86" data-select2-id="88">GUADELOUPE</option>
                                            <option value="87" data-select2-id="89">GUAM</option>
                                            <option value="88" data-select2-id="90">GUATEMALA</option>
                                            <option value="89" data-select2-id="91">GUINEA</option>
                                            <option value="90" data-select2-id="92">GUINEA-BISSAU</option>
                                            <option value="91" data-select2-id="93">GUYANA</option>
                                            <option value="92" data-select2-id="94">HAITI</option>
                                            <option value="93" data-select2-id="95">HEARD ISLAND AND MCDONALD ISLANDS</option>
                                            <option value="94" data-select2-id="96">HOLY SEE (VATICAN CITY STATE)</option>
                                            <option value="95" data-select2-id="97">HONDURAS</option>
                                            <option value="96" data-select2-id="98">HONG KONG</option>
                                            <option value="97" data-select2-id="99">HUNGARY</option>
                                            <option value="98" data-select2-id="100">ICELAND</option>
                                            <option value="99" data-select2-id="101">INDIA</option>
                                            <option value="100" data-select2-id="102">INDONESIA</option>
                                            <option value="101" data-select2-id="103">IRAN, ISLAMIC REPUBLIC OF</option>
                                            <option value="102" data-select2-id="104">IRAQ</option>
                                            <option value="103" data-select2-id="105">IRELAND</option>
                                            <option value="104" data-select2-id="106">ISRAEL</option>
                                            <option value="105" data-select2-id="107">ITALY</option>
                                            <option value="106" data-select2-id="108">JAMAICA</option>
                                            <option value="107" data-select2-id="109">JAPAN</option>
                                            <option value="108" data-select2-id="110">JORDAN</option>
                                            <option value="109" data-select2-id="111">KAZAKHSTAN</option>
                                            <option value="110" data-select2-id="112">KENYA</option>
                                            <option value="111" data-select2-id="113">KIRIBATI</option>
                                            <option value="112" data-select2-id="114">KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF</option>
                                            <option value="113" data-select2-id="115">KOREA, REPUBLIC OF</option>
                                            <option value="114" data-select2-id="116">KUWAIT</option>
                                            <option value="115" data-select2-id="117">KYRGYZSTAN</option>
                                            <option value="116" data-select2-id="118">LAO PEOPLE'S DEMOCRATIC REPUBLIC</option>
                                            <option value="117" data-select2-id="119">LATVIA</option>
                                            <option value="118" data-select2-id="120">LEBANON</option>
                                            <option value="119" data-select2-id="121">LESOTHO</option>
                                            <option value="120" data-select2-id="122">LIBERIA</option>
                                            <option value="121" data-select2-id="123">LIBYAN ARAB JAMAHIRIYA</option>
                                            <option value="122" data-select2-id="124">LIECHTENSTEIN</option>
                                            <option value="123" data-select2-id="125">LITHUANIA</option>
                                            <option value="124" data-select2-id="126">LUXEMBOURG</option>
                                            <option value="125" data-select2-id="127">MACAO</option>
                                            <option value="126" data-select2-id="128">MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>
                                            <option value="127" data-select2-id="129">MADAGASCAR</option>
                                            <option value="128" data-select2-id="130">MALAWI</option>
                                            <option value="129" data-select2-id="131">MALAYSIA</option>
                                            <option value="130" data-select2-id="132">MALDIVES</option>
                                            <option value="131" data-select2-id="133">MALI</option>
                                            <option value="132" data-select2-id="134">MALTA</option>
                                            <option value="133" data-select2-id="135">MARSHALL ISLANDS</option>
                                            <option value="134" data-select2-id="136">MARTINIQUE</option>
                                            <option value="135" data-select2-id="137">MAURITANIA</option>
                                            <option value="136" data-select2-id="138">MAURITIUS</option>
                                            <option value="137" data-select2-id="139">MAYOTTE</option>
                                            <option value="138" data-select2-id="140">MEXICO</option>
                                            <option value="139" data-select2-id="141">MICRONESIA, FEDERATED STATES OF</option>
                                            <option value="140" data-select2-id="142">MOLDOVA, REPUBLIC OF</option>
                                            <option value="141" data-select2-id="143">MONACO</option>
                                            <option value="142" data-select2-id="144">MONGOLIA</option>
                                            <option value="143" data-select2-id="145">MONTSERRAT</option>
                                            <option value="144" data-select2-id="146">MOROCCO</option>
                                            <option value="145" data-select2-id="147">MOZAMBIQUE</option>
                                            <option value="146" data-select2-id="148">MYANMAR</option>
                                            <option value="147" data-select2-id="149">NAMIBIA</option>
                                            <option value="148" data-select2-id="150">NAURU</option>
                                            <option value="149" data-select2-id="151">NEPAL</option>
                                            <option value="150" data-select2-id="152">NETHERLANDS</option>
                                            <option value="151" data-select2-id="153">NETHERLANDS ANTILLES</option>
                                            <option value="152" data-select2-id="154">NEW CALEDONIA</option>
                                            <option value="153" data-select2-id="155">NEW ZEALAND</option>
                                            <option value="154" data-select2-id="156">NICARAGUA</option>
                                            <option value="155" data-select2-id="157">NIGER</option>
                                            <option value="156" data-select2-id="158">NIGERIA</option>
                                            <option value="157" data-select2-id="159">NIUE</option>
                                            <option value="158" data-select2-id="160">NORFOLK ISLAND</option>
                                            <option value="159" data-select2-id="161">NORTHERN MARIANA ISLANDS</option>
                                            <option value="160" data-select2-id="162">NORWAY</option>
                                            <option value="161" data-select2-id="163">OMAN</option>
                                            <option value="162" data-select2-id="164">PAKISTAN</option>
                                            <option value="163" data-select2-id="165">PALAU</option>
                                            <option value="164" data-select2-id="166">PALESTINIAN TERRITORY, OCCUPIED</option>
                                            <option value="165" data-select2-id="167">PANAMA</option>
                                            <option value="166" data-select2-id="168">PAPUA NEW GUINEA</option>
                                            <option value="167" data-select2-id="169">PARAGUAY</option>
                                            <option value="168" data-select2-id="170">PERU</option>
                                            <option  value="169" data-select2-id="2">PHILIPPINES</option>
                                            <option value="170" data-select2-id="171">PITCAIRN</option>
                                            <option value="171" data-select2-id="172">POLAND</option>
                                            <option value="172" data-select2-id="173">PORTUGAL</option>
                                            <option value="173" data-select2-id="174">PUERTO RICO</option>
                                            <option value="174" data-select2-id="175">QATAR</option>
                                            <option value="175" data-select2-id="176">REUNION</option>
                                            <option value="176" data-select2-id="177">ROMANIA</option>
                                            <option value="177" data-select2-id="178">RUSSIAN FEDERATION</option>
                                            <option value="178" data-select2-id="179">RWANDA</option>
                                            <option value="179" data-select2-id="180">SAINT HELENA</option>
                                            <option value="180" data-select2-id="181">SAINT KITTS AND NEVIS</option>
                                            <option value="181" data-select2-id="182">SAINT LUCIA</option>
                                            <option value="182" data-select2-id="183">SAINT PIERRE AND MIQUELON</option>
                                            <option value="183" data-select2-id="184">SAINT VINCENT AND THE GRENADINES</option>
                                            <option value="184" data-select2-id="185">SAMOA</option>
                                            <option value="185" data-select2-id="186">SAN MARINO</option>
                                            <option value="186" data-select2-id="187">SAO TOME AND PRINCIPE</option>
                                            <option value="187" data-select2-id="188">SAUDI ARABIA</option>
                                            <option value="188" data-select2-id="189">SENEGAL</option>
                                            <option value="189" data-select2-id="190">SERBIA AND MONTENEGRO</option>
                                            <option value="190" data-select2-id="191">SEYCHELLES</option>
                                            <option value="191" data-select2-id="192">SIERRA LEONE</option>
                                            <option value="192" data-select2-id="193">SINGAPORE</option>
                                            <option value="193" data-select2-id="194">SLOVAKIA</option>
                                            <option value="194" data-select2-id="195">SLOVENIA</option>
                                            <option value="195" data-select2-id="196">SOLOMON ISLANDS</option>
                                            <option value="196" data-select2-id="197">SOMALIA</option>
                                            <option value="197" data-select2-id="198">SOUTH AFRICA</option>
                                            <option value="198" data-select2-id="199">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</option>
                                            <option value="199" data-select2-id="200">SPAIN</option>
                                            <option value="200" data-select2-id="201">SRI LANKA</option>
                                            <option value="201" data-select2-id="202">SUDAN</option>
                                            <option value="202" data-select2-id="203">SURINAME</option>
                                            <option value="203" data-select2-id="204">SVALBARD AND JAN MAYEN</option>
                                            <option value="204" data-select2-id="205">SWAZILAND</option>
                                            <option value="205" data-select2-id="206">SWEDEN</option>
                                            <option value="206" data-select2-id="207">SWITZERLAND</option>
                                            <option value="207" data-select2-id="208">SYRIAN ARAB REPUBLIC</option>
                                            <option value="208" data-select2-id="209">TAIWAN, PROVINCE OF CHINA</option>
                                            <option value="209" data-select2-id="210">TAJIKISTAN</option>
                                            <option value="210" data-select2-id="211">TANZANIA, UNITED REPUBLIC OF</option>
                                            <option value="211" data-select2-id="212">THAILAND</option>
                                            <option value="212" data-select2-id="213">TIMOR-LESTE</option>
                                            <option value="213" data-select2-id="214">TOGO</option>
                                            <option value="214" data-select2-id="215">TOKELAU</option>
                                            <option value="215" data-select2-id="216">TONGA</option>
                                            <option value="216" data-select2-id="217">TRINIDAD AND TOBAGO</option>
                                            <option value="217" data-select2-id="218">TUNISIA</option>
                                            <option value="218" data-select2-id="219">TURKEY</option>
                                            <option value="219" data-select2-id="220">TURKMENISTAN</option>
                                            <option value="220" data-select2-id="221">TURKS AND CAICOS ISLANDS</option>
                                            <option value="221" data-select2-id="222">TUVALU</option>
                                            <option value="222" data-select2-id="223">UGANDA</option>
                                            <option value="223" data-select2-id="224">UKRAINE</option>
                                            <option value="224" data-select2-id="225">UNITED ARAB EMIRATES</option>
                                            <option value="225" data-select2-id="226">UNITED KINGDOM</option>
                                            <option value="226" data-select2-id="227">UNITED STATES OF AMERICA</option>
                                            <option value="227" data-select2-id="228">UNITED STATES MINOR OUTLYING ISLANDS</option>
                                            <option value="228" data-select2-id="229">URUGUAY</option>
                                            <option value="229" data-select2-id="230">UZBEKISTAN</option>
                                            <option value="230" data-select2-id="231">VANUATU</option>
                                            <option value="231" data-select2-id="232">VENEZUELA</option>
                                            <option value="232" data-select2-id="233">VIET NAM</option>
                                            <option value="233" data-select2-id="234">VIRGIN ISLANDS, BRITISH</option>
                                            <option value="234" data-select2-id="235">VIRGIN ISLANDS, U.S.</option>
                                            <option value="235" data-select2-id="236">WALLIS AND FUTUNA</option>
                                            <option value="236" data-select2-id="237">WESTERN SAHARA</option>
                                            <option value="237" data-select2-id="238">YEMEN</option>
                                            <option value="238" data-select2-id="239">ZAMBIA</option>
                                            <option value="239" data-select2-id="240">ZIMBABWE</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="245" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-country_id-container"><span class="select2-selection__rendered" id="select2-country_id-container" role="textbox" aria-readonly="true" title="PHILIPPINES"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
      </div>

        <div class="col-md-2 mb-3">
          <label for="validationDefault03">Ciudad</label>
          <input type="text" class="form-control" id="validationDefault03" placeholder="Ciudad" name="ciudad" value="<?= persistirDato($arraydeerrores, 'ciudad'); ?>">
          <small><?= isset($arraydeerrores["ciudad"])? $arraydeerrores["ciudad"]:"" ?></small>
        </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault04">Barrio</label>
        <input type="text" class="form-control" id="validationDefault04" placeholder="Barrio" name="barrio" value="<?= persistirDato($arraydeerrores, 'barrio'); ?>" >
        <small><?= isset($arraydeerrores["barrio"])? $arraydeerrores["barrio"]:"" ?></small>
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationDefault05">Codigo Postal</label>
        <input type="number" min="1000"  max="9999" class="form-control" id="validationDefault05" placeholder="Codigo Postal" name="postal" value="<?= persistirDato($arraydeerrores, 'postal'); ?>" >
        <small><?= isset($arraydeerrores["postal"])? $arraydeerrores["postal"]:"" ?></small>
      </div>
      <div class="col-md-2 mb-3">
          <label for="validationDefault05" >Año de Nacimiento</label>
          <input type="number" min="1950"  max="2019" class="form-control" id="validationDefault05" placeholder="2000" name="nacimiento" value="<?= persistirDato($arraydeerrores, 'nacimiento'); ?>">
          <small><?= isset($arraydeerrores["nacimiento"])? $arraydeerrores["nacimiento"]:"" ?></small>
        </div>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1" require>
            <label class="custom-control-label" for="customSwitch1" require>Tengo más de 18 años</label>
          </div>

    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2" required>
          He Leido y acepto Terminos y Condiciones
        </label>
      </div>
      <a href="terminos.html" id="Terminos" style="margin: 1%;" >Terminos y Condiciones</a>





    </div>


    <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Revisa la informacion antes de Enviar">
     Enviar
    </button></div>
  </form>
</div>



<!-- FOOTER: EMPIEZA -->
<?php require_once 'footer.php';  ?>
<!-- FOOTER: TERMINA -->

</div>





</body>
</html>
