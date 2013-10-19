
  <?php
    require 'header.php'
  ?>

  <!-- Documentation
  ================================================== -->
  <section id="documentation">
    <div class="container">
      
      <div class="clear"></div>

      <div class="desktop-2 columns">
      <div class="navbar-collapse collapse">
        <ul class="nav-documentation">
          <li><a href="/">Home</a></li>
          <li><a href="programa.php">Programa</a></li>
          <li><a href="participantes.php">Participantes</a></li>
          <li><a href="registo.php">Registo</a></li>
          <li><a href="contactos.php">Contactos</a></li>
          <li><a href="multimedia.php">Multimédia</a></li>
          <li><a href="/2012/">Edição 2012</a></li>
        </ul><!-- // ul.list -->
      </div>
      <div id='mySwipe' style='margin:20px auto' class='swipe'>
      <div class='swipe-wrap'>
        
        <?php
          foreach ($_SESSION['images'] as $key => $value) {
            echo "<div><a href='". $_SESSION['url'][$key] . "' target='_blank'><img src='/sponsors/" . $_SESSION['images'][$key] . "' class='img-responsive'/></a></div>";
          }
        ?>
      </div>
      </div>
      </div><!-- // .desktop-3 -->

      <div class="desktop-10 tablet-12 columns">
        
        <div class="box-documentation">
          <h3 class="first">Registo</h3>

          <script src="http://cdn.jotfor.ms/static/jotform.js?3.1.1535" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){
      $('input_4').hint('ex: myname@example.com');
      JotForm.alterTexts({"alphabetic":"This field can only contain letters","alphanumeric":"This field can only contain letters and numbers.","confirmClearForm":"Are you sure you want to clear the form","confirmEmail":"E-mail does not match","email":"Enter a valid e-mail address","incompleteFields":"There are incomplete required fields. Please complete them.","lessThan":"Your score should be less than","numeric":"This field can only contain numeric values","pleaseWait":"Please wait...","required":"This field is required.","uploadExtensions":"You can only upload following files:","uploadFilesize":"File size cannot be bigger than:"});
   });
</script>
<link href="http://cdn.jotfor.ms/static/formCss.css?3.1.1535" rel="stylesheet" type="text/css" />
<link type="text/css" media="print" rel="stylesheet" href="http://cdn.jotfor.ms/css/printForm.css?3.1.1535" />
<style type="text/css">
    .form-label{
        width:150px !important;
    }
    .form-label-left{
        width:150px !important;
    }
    .form-line{
        padding-top:10px;
        padding-bottom:10px;
    }
    .form-label-right{
        width:150px !important;
    }
    .form-all{
        width:516px;
        color:Black !important;
        font-family:'Verdana';
        font-size:12px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color:Black;
    }

</style>

<form class="jotform-form" action="http://submit.jotformeu.com/submit/22767995882375/" method="post" enctype="multipart/form-data" name="form_22767995882375" id="22767995882375" accept-charset="utf-8">
  <input type="hidden" name="formID" value="22767995882375" />
  <div class="form-all">
    <ul class="form-section">
      <li class="form-line form-line-column" id="id_3">
        <label class="form-label-top" id="label_3" for="input_3">
          Nome<span class="form-required">*</span>
        </label>
        <div id="cid_3" class="form-input-wide"><span class="form-sub-label-container"><input class="form-textbox validate[required]" type="text" size="10" name="q3_fullName3[first]" id="first_3" />
            <label class="form-sub-label" for="first_3" id="sublabel_first"> Primeiro Nome </label></span><span class="form-sub-label-container"><input class="form-textbox validate[required]" type="text" size="15" name="q3_fullName3[last]" id="last_3" />
            <label class="form-sub-label" for="last_3" id="sublabel_last"> Apelido </label></span>
        </div>
      </li>
      <li class="form-line" id="id_7">
        <label class="form-label-top" id="label_7" for="input_7">
          Relação com o ISCTE-IUL:<span class="form-required">*</span>
        </label>
        <div id="cid_7" class="form-input-wide">
          <div class="form-single-column"><span class="form-radio-item" style="clear:left;"><input type="radio" class="form-radio validate[required]" id="input_7_0" name="q7_iscteiulRelationship" value="PhD" />
              <label for="input_7_0"> PhD </label></span><span class="clearfix"></span><span class="form-radio-item" style="clear:left;"><input type="radio" class="form-radio validate[required]" id="input_7_1" name="q7_iscteiulRelationship" value="DBA" />
              <label for="input_7_1"> DBA </label></span><span class="clearfix"></span><span class="form-radio-item" style="clear:left;"><input type="radio" class="form-radio validate[required]" id="input_7_2" name="q7_iscteiulRelationship" value="MsC / MBA" />
              <label for="input_7_2"> MsC / MBA </label></span><span class="clearfix"></span><span class="form-radio-item" style="clear:left;"><input type="radio" class="form-radio validate[required]" id="input_7_3" name="q7_iscteiulRelationship" value="Bachelor" />
              <label for="input_7_3"> Bachelor </label></span><span class="clearfix"></span>
          </div>
        </div>
      </li>
      <li class="form-line" id="id_15">
        <label class="form-label-top" id="label_15" for="input_15"> Ano </label>
        <div id="cid_15" class="form-input-wide">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_15" name="q15_year" size="5" value="" />
        </div>
      </li>
      <li class="form-line" id="id_8">
        <label class="form-label-top" id="label_8" for="input_8">
          Morada<span class="form-required">*</span>
        </label>
        <div id="cid_8" class="form-input-wide">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_8" name="q8_address" size="20" value="" />
        </div>
      </li>
      <li class="form-line" id="id_9">
        <label class="form-label-top" id="label_9" for="input_9">
          País de residência<span class="form-required">*</span>
        </label>
        <div id="cid_9" class="form-input-wide">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_9" name="q9_residenceCountry" size="20" value="" />
        </div>
      </li>
      <li class="form-line form-line-column" id="id_4">
        <label class="form-label-top" id="label_4" for="input_4">
          Email de contacto<span class="form-required">*</span>
        </label>
        <div id="cid_4" class="form-input-wide"><span class="form-sub-label-container"><input type="email" class=" form-textbox validate[required, Email]" id="input_4" name="q4_email4" size="30" value="" /></span>
        </div>
      </li>
      <li class="form-line" id="id_10">
        <label class="form-label-top" id="label_10" for="input_10">
          Contacto telefónico<span class="form-required">*</span>
        </label>
        <div id="cid_10" class="form-input-wide">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_10" name="q10_phoneContact" size="20" value="" />
        </div>
      </li>
      <li class="form-line" id="id_6">
        <label class="form-label-top" id="label_6" for="input_6"> Mini CV (6 linhas no máximo) </label>
        <div id="cid_6" class="form-input-wide"><span class="form-sub-label-container"><textarea id="input_6" class="form-textarea" name="q6_description" cols="57" rows="6"></textarea>
            </span>
        </div>
      </li>
      <li class="form-line" id="id_5">
        <label class="form-label-top" id="label_5" for="input_5"> Upload fotografia </label>
        <div id="cid_5" class="form-input-wide"><span class="form-sub-label-container"><input class="form-upload" type="file" id="input_5" name="q5_uploadFile" file-accept="*" file-maxsize="1024" />
            <label class="form-sub-label" for="input_5"> You can upload any type of image. Max: 300 KB </label></span>
        </div>
      </li>
      <li>
        Por favor escolha as actividades em que vai efectivamente participar. Precisamos dessa informação já que temos de reservar as salas, restaurant e eventualmente transporte para o evento.
      </li>
      <li class="form-line" id="id_11">
        <label class="form-label-top" id="label_11" for="input_11"> November, 29th </label>
        <!--<div id="cid_11" class="form-input-wide">
          <div class="form-single-column"><span class="form-checkbox-item" style="clear:left;"><input type="checkbox" class="form-checkbox" id="input_11_0" name="q11_november29th11[]" value="Clique para editar" />
              <label for="input_11_0"> Clique para editar </label></span><span class="clearfix"></span>
          </div>
        </div>-->
      </li>
      <li class="form-line" id="id_26">
        <label class="form-label-top" id="label_26" for="input_26"> 15:00 ISCTE Alumni Mundi Presentation </label>
        <div id="cid_26" class="form-input-wide">
          <div class="form-single-column"><span class="form-radio-item" style="clear:left;"><input type="radio" class="form-radio" id="input_26_0" name="q26_1500Iscte" value="Sim" />
              <label for="input_26_0"> Sim </label></span><span class="clearfix"></span><span class="form-radio-item" style="clear:left;"><input type="radio" class="form-radio" id="input_26_1" name="q26_1500Iscte" value="Não" />
              <label for="input_26_1"> Não </label></span><span class="clearfix"></span>
          </div>
        </div>
      </li>
      <li class="form-line" id="id_27">
        <label class="form-label-top" id="label_27" for="input_27"> 15:30 Energy Potential of Mozambique - challenges for the creation of an energy block CPLP / Macau-China </label>
        <div id="cid_27" class="form-input-wide">
          <div class="form-single-column"><span class="form-radio-item" style="clear:left;"><input type="radio" class="form-radio" id="input_27_0" name="q27_1530Energy" value="Sim" />
              <label for="input_27_0"> Sim </label></span><span class="clearfix"></span><span class="form-radio-item" style="clear:left;"><input type="radio" class="form-radio" id="input_27_1" name="q27_1530Energy" value="Não" />
              <label for="input_27_1"> Não </label></span><span class="clearfix"></span>
          </div>
        </div>
      </li>
      <li class="form-line" id="id_28">
        <label class="form-label-top" id="label_28" for="input_28"> 20:00 Dinner </label>
        <div id="cid_28" class="form-input-wide">
          <div class="form-single-column"><span class="form-radio-item" style="clear:left;"><input type="radio" class="form-radio" id="input_28_0" name="q28_2000Dinner" value="Sim" />
              <label for="input_28_0"> Sim </label></span><span class="clearfix"></span><span class="form-radio-item" style="clear:left;"><input type="radio" class="form-radio" id="input_28_1" name="q28_2000Dinner" value="Não" />
              <label for="input_28_1"> Não </label></span><span class="clearfix"></span>
          </div>
        </div>
      </li>
      <li class="form-line" id="id_12">
        <label class="form-label-top" id="label_12" for="input_12"> November, 30th </label>
        <!--<div id="cid_12" class="form-input-wide">
          <div class="form-single-column"><span class="form-checkbox-item" style="clear:left;"><input type="checkbox" class="form-checkbox" id="input_12_0" name="q12_november30th[]" value="----" />
              <label for="input_12_0"> ---- </label></span><span class="clearfix"></span>
          </div>
        </div>-->
      </li>
      <li class="form-line" id="id_29">
        <label class="form-label-top" id="label_29" for="input_29"> 10:00 Touristic visit and lunch </label>
        <div id="cid_29" class="form-input-wide">
          <div class="form-single-column"><span class="form-radio-item" style="clear:left;"><input type="radio" class="form-radio" id="input_29_0" name="q29_1000Touristic" value="Sim" />
              <label for="input_29_0"> Sim </label></span><span class="clearfix"></span><span class="form-radio-item" style="clear:left;"><input type="radio" class="form-radio" id="input_29_1" name="q29_1000Touristic" value="Não" />
              <label for="input_29_1"> Não </label></span><span class="clearfix"></span>
          </div>
        </div>
      </li>
      <li class="form-line" id="id_30">
        <label class="form-label-top" id="label_30" for="input_30"> 17:00 Final Remarks </label>
        <div id="cid_30" class="form-input-wide">
          <div class="form-single-column"><span class="form-radio-item" style="clear:left;"><input type="radio" class="form-radio" id="input_30_0" name="q30_1700Final" value="Sim" />
              <label for="input_30_0"> Sim </label></span><span class="clearfix"></span><span class="form-radio-item" style="clear:left;"><input type="radio" class="form-radio" id="input_30_1" name="q30_1700Final" value="Não" />
              <label for="input_30_1"> Não </label></span><span class="clearfix"></span>
          </div>
        </div>
      </li>
      <li class="form-line" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="text-align:left" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button">
              Submeter
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <input type="hidden" id="simple_spc" name="simple_spc" value="22767995882375" />
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "22767995882375-22767995882375";
  </script>
</form>
        </div><!-- // .box-documentation -->

      </div><!-- // .desktop-10 -->
    </div><!-- // .container -->
  </section><!-- // section#documentation -->

  <?php
    require 'footer.php'
  ?>

