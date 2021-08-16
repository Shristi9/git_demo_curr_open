
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
</head>
<body>
  <form id="_cstm_validate" method="POST" enctype="multipart/form-data">
    <div class="form-row cstm_form_row">
     <div class="form_title">
      <span class="icon"><img class="csmt_imag" src="http://localhost:8080/jobopening/wp-content/uploads/2021/05/form-avatar.png" /></span>
      <h4>Career Opportunity</h4>
    </div>
    <div class="form_title">

      <p>IBL INFOTECH is a one-stop shop solution provider web and mobile app development company. We offering niche expertise in web and mobile app development with a focus on the latest technologies.</p>
    </div>
    <div class="form-group">
      <label for="inputname">Name*</label>
      <input type="text" name="name" class="form-control" id="inputname" placeholder="Enter Name">
      <div class="show-error" id="id_input_name"></div>
    </div>

    <div class="form-group">
      <label for="phone">Phone*</label>
      <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone">

      <div class="show-error" id="id_input_phone" ></div>
    </div>
    <div class="form-group">
      <label for="inputEmail4">Email*</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Enter Email">
      <div class="show-error" id="id_input_email"></div>
    </div>
    <div class="form-group">
      <label for="linkedin">Linked In Profile*</label>
      <input type="text" name="linkedin" class="form-control" id="linkedin" placeholder="Enter URL">
      <div class="show-error" id="id_input_linkedin"></div>
    </div>
    <div class="form-group">
      <label for="college">College or University*</label>
      <input type="text"  name="college"class="form-control" id="college" placeholder="Enter College or University">
      <div class="show-error" id="id_input_college"></div>
    </div>
    <div class="form-group">
      <label for="education">Highest Education*</label>
      <select class="cstm_drop form-control" id="id_edu" name="education">
      	<option value="">-</option>
      	<option value="BE/BTech/BscIT">BE/BTech/BscIT</option>
      	<option value="MCA/MscIT/MTech">MCA/MscIT/MTech </option>
      	<option value="BBA">BBA</option>
      	<option value="MBA">MBA</option>
      	<option value="Other">Other</option>
      </select>
      <div class="show-error" id="id_input_edu"></div>
    </div>


    <div class="form-group">
      <label for="technology">Technology*</label>
      <select class="cstm_technology form-control" name="technology" id="technology">
        <option value="">-</option>
        <option value="QA/QC">QA/QC</option>
        <option value="UX/DESIGN">UX/DESIGN </option>
        <option value="DIGITAL MARKETING">DIGITAL MARKETING</option>
        <option value="WEB DESIGNING">WEB DESIGNING</option>
        <option value="ANGULAR JS">ANGULAR JS</option>
        <option value="VUE JS">VUE JS</option>
        <option value="REACT JS">REACT JS</option>
        <option value="PYTHON">PYTHON</option>
        <option value="WORDPRESS">WORDPRESS</option>
        <option value="LARAVEL">LARAVEL</option>
        <option value="CODEIGNITOR">CODEIGNITOR</option>
        <option value="ASP.NET">ASP.NET</option>
        <option value="MEVN">MEVN</option>
        <option value="MERN<">MERN</option>
        <option value="MEAN">MEAN</option>
        <option value="IOS">IOS</option>
        <option value="ANDROID">ANDROID</option>
        <option value="FLLUTTER">FLLUTTER</option>
        <option value="REACT NATIVE">REACT NATIVE</option>
        <option value="BUSINESS MANAGER">BUSINESS MANAGER</option>
        <option value="BUSINESS DEVELOPMENT EXECUTIVE">BUSINESS DEVELOPMENT EXECUTIVE</option>
        <option value="BUSINESS ANALYST">BUSINESS ANALYST</option>
        <option value="PHP">PHP</option>
        <option value="SEO">SEO</option>

      </select>
      <div class="show-error" id="id_input_techno"></div>
    </div>

    <div class="form-group">
      <label for="experience">Experience*</label>
      <select class="cstm_experience form-control" name="experience" id="experience">
        <option value="">-</option>
        <option value="1 year">1 year</option>
        <option value="2 years">2 years</option>
        <option value="3+ years">3+ years</option>
        <option value="5+ years">5+ years</option>
        <option value="None">None</option>
      </select>
      <div class="show-error" id="id_input_experience"></div>
    </div>


    <div class="form-group">
      <label for="current_comp">Current Company*</label>
      <input type="text" name="current_comp" class="form-control" id="current_comp" placeholder="Enter Current Company Name">
      <div class="show-error" id="id_input_current_comp"></div>
    </div>
    <div class="form-group">
      <label for="current_sal">Current CTC(Monthly)*</label>
      <input type="text" name="current_sal" class="form-control" id="current_sal" placeholder="Enter Current CTC(Monthly)">
      <div class="show-error" id="id_input_current_sal"></div>
    </div>

    <div class="form-group">
      <label for="expected_sal">Expected CTC(Monthly)*</label>
      <input type="text" name="expected_sal" class="form-control" id="expected_sal" placeholder="Enter Expected CTC(Monthly)">
      <div class="show-error" id="id_input_expected_sal"></div>
    </div>
    <div class="form-group">
      <label for="notice">Notice Periods*</label>
      <select class="_cstm_notice form-control" name="notice" id="notice">
        <option value="">-</option>
        <option value="Immediately">Immediately</option>
        <option value="Less than 1 Month">Less than 1 Month</option>
        <option value="1-2 Months">1-2 Months</option>
        <option value="More than 2 Months">More than 2 Months</option>
        <option value="10-15 days">10-15 days</option>
        <option value="2 Months">2 Months</option>
        <option value="3 Months">3 Months</option>
      </select>
      <div class="show-error" id="id_input_notice"></div>
    </div>
    <div class="form-group">
      <label for="reason">Reason behind change*</label>
      <input type="text" name="reason" class="form-control" id="reason" placeholder="Enter reason behind job change">
      <div class="show-error" id="id_input_reason"></div>
    </div>
    <div class="form-group">
      <label for="hobbies">Hobbies*</label>
      <input type="text" name="hobbies" class="form-control" id="hobbies" placeholder="Enter your hobbies">
      <div class="show-error" id="id_input_hobbies"></div>
    </div>
    <div class="form-group">
      <label for="branch">Preffered Branch*</label>
      <select class="_cstm_branch form-control" name="branch" id="branch">
        <option value="">-</option>
        <option value="Vesu">Vesu</option>
        <option value="Mota varachha">Mota varachha*</option>
      </select>
      <div class="show-error" id="id_input_branch"></div>
    </div>
    <div class="form-group">
      <label for="resume">Updated resume*</label>
      <input type="file" name="resume" class="form-control" id="resume"  accept="file_extension|.pdf/*|.docx/*|.xls/*" id="file">
      <div class="show-error" id="id_input_resume"></div>
    </div>
    
  </div>
  
  <input type="submit" class="btn btn-submit-cstm" name="submit" value="submit">
</form>
</body>

</html>


<script type="text/javascript">
  $(document).ready(function(){

    $('#id_input_name').hide();
    $('#id_input_phone').hide();
    $('#id_input_email').hide();
    $('#id_input_linkedin').hide();
    $('#id_input_college').hide();
    $('#id_input_edu').hide();
    $('#id_input_techno').hide();
    $('#id_input_experience').hide();
    $('#id_input_current_comp').hide();
    $('#id_input_current_sal').hide();
    $('#id_input_expected_sal').hide();

    $('#id_input_notice').hide();
    $('#id_input_reason').hide();
    $('#id_input_hobbies').hide();
    $('#id_input_branch').hide();
    $('#id_input_resume').hide();
    var nameerr=true;
    var phoneerr=true;
    var nameerr=true;
    var phoneerr=true;
    var emailerr=true;
    var linkedinerr=true;
    var collegeerr=true;
    var educationerr=true;
    var technologyerr=true;
    var experienceerr=true;
    var current_comperr=true;
    var current_salerr=true;
    var expected_salerr=true;
    var noticeerr=true;
    var reasonerr=true
    var hobbieserr=true;
    var brancherr=true;
    var resumeerr=true;


// Name Validation

$("#inputname").keyup(function(){
  id_input_name_check();
});

function id_input_name_check(){

  var name=$("#inputname").val();
  if(name==''){
    $('#id_input_name').show();
    $('#id_input_name').html("This field is required");
    $('#id_input_name').focus();
    $('#id_input_name').css('color','red');
    nameerr=false;
    return false;
  }
  else{
    $('#id_input_name').hide();
    return true;
  }

}

// Phone Validation

$("#phone").keyup(function(){
  id_input_phone_check();
});

function id_input_phone_check(){

  var phone=$("#phone").val();
  if(phone==''){
    $('#id_input_phone').show();
    $('#id_input_phone').html("This field is required");
    $('#id_input_phone').focus();
    $('#id_input_phone').css('color','red');
    phoneerr=false;
    return false;
  }
  else{
    $('#id_input_phone').hide();
    return true;
  }

}

    // email Validation

    $("#inputEmail4").keyup(function(){
      id_input_email_check();
    });

    function id_input_email_check(){

      var email=$("#inputEmail4").val();
      if(email==''){
        $('#id_input_email').show();
        $('#id_input_email').html("This field is required");
        $('#id_input_email').focus();
        $('#id_input_email').css('color','red');
        emaileerr=false;
        return false;
      }
      else{
        $('#id_input_email').hide();
        return true;
      }

    }
// Linkedin Validation

$("#linkedin").keyup(function(){
  id_input_linkedin_check();
});

function id_input_linkedin_check(){

  var linkedin=$("#linkedin").val();
  if(linkedin==''){
    $('#id_input_linkedin').show();
    $('#id_input_linkedin').html("This field is required");
    $('#id_input_linkedin').focus();
    $('#id_input_linkedin').css('color','red');
    linkedinerr=false;
    return false;
  }
  else{
    $('#id_input_linkedin').hide();
    return true;
  }

}

// College Validation

$("#college").keyup(function(){
  id_input_college_check();
});

function id_input_college_check(){

  var college=$("#college").val();
  if(college==''){
    $('#id_input_college').show();
    $('#id_input_college').html("This field is required");
    $('#id_input_college').focus();
    $('#id_input_college').css('color','red');
    collegeerr=false;
    return false;
  }
  else{
    $('#id_input_college').hide();
    return true;
  }

}

// Education validation

$("#id_edu").change(function(){
  id_input_edu_check();
});

function id_input_edu_check(){

  var education=$("#id_edu").val();
  if(education==''){
    $('#id_input_edu').show();
    $('#id_input_edu').html("This field is required");
    $('#id_input_edu').focus();
    $('#id_input_edu').css('color','red');
    educationerr=false;
    return false;
  }
  else{
    $('#id_input_edu').hide();
    return true;
  }

}


// Experience validation

$("#experience").change(function(){
  id_input_experience_check();
});

function id_input_experience_check(){

  var experience=$("#experience").val();
  if(experience==''){
    $('#id_input_experience').show();
    $('#id_input_experience').html("This field is required");
    $('#id_input_experience').focus();
    $('#id_input_experience').css('color','red');
    experienceerr=false;
    return false;
  }
  else{
    $('#id_input_experience').hide();
    return true;
  }

}


// Technology Validation

$("#technology").change(function(){
  id_input_technology_check();
});

function id_input_technology_check(){

  var technology=$("#technology").val();
  if(technology==''){
    $('#id_input_techno').show();
    $('#id_input_techno').html("This field is required");
    $('#id_input_techno').focus();
    $('#id_input_techno').css('color','red');
    technologyerr=false;
    return false;
  }
  else{
    $('#id_input_techno').hide();
    return true;
  }

}

// Current company validation

$("#current_comp").keyup(function(){
  id_input_current_comp_check();
});

function id_input_current_comp_check(){

  var current_comp=$("#current_comp").val();
  if(current_comp==''){
    $('#id_input_current_comp').show();
    $('#id_input_current_comp').html("This field is required");
    $('#id_input_current_comp').focus();
    $('#id_input_current_comp').css('color','red');
    current_comperr=false;
    return false;
  }
  else{
    $('#id_input_current_comp').hide();
    return true;
  }

}

// Current salary validation

$("#current_sal").keyup(function(){
  id_input_current_sal_check();
});

function id_input_current_sal_check(){

  var current_sal=$("#current_sal").val();
  if(current_sal==''){
    $('#id_input_current_sal').show();
    $('#id_input_current_sal').html("This field is required");
    $('#id_input_current_sal').focus();
    $('#id_input_current_sal').css('color','red');
    current_salerr=false;
    return false;
  }
  else{
    $('#id_input_current_sal').hide();
    return true;
  }

}

// Expected salary validation

$("#expected_sal").keyup(function(){
  id_input_expected_sal_check();
});

function id_input_expected_sal_check(){

  var expected_sal=$("#expected_sal").val();
  if(expected_sal==''){
    $('#id_input_expected_sal').show();
    $('#id_input_expected_sal').html("This field is required");
    $('#id_input_expected_sal').focus();
    $('#id_input_expected_sal').css('color','red');
    expected_salerr=false;
    return false;
  }
  else{
    $('#id_input_expected_sal').hide();
    return true;
  }

}


// Notice validation
$("#notice").change(function(){
  id_input_notice_check();
});

function id_input_notice_check(){

  var notice=$("#notice").val();
  if(notice==''){
    $('#id_input_notice').show();
    $('#id_input_notice').html("This field is required");
    $('#id_input_notice').focus();
    $('#id_input_notice').css('color','red');
    noticeerr=false;
    return false;
  }
  else{
    $('#id_input_notice').hide();
    return true;
  }

}

// Reason validation
$("#reason").keyup(function(){
  id_input_reason_check();
});

function id_input_reason_check(){

  var reason=$("#reason").val();
  if(reason==''){
    $('#id_input_reason').show();
    $('#id_input_reason').html("This field is required");
    $('#id_input_reason').focus();
    $('#id_input_reason').css('color','red');
    reasonerr=false;
    return false;
  }
  else{
    $('#id_input_reason').hide();
    return true;
  }

}


// Hobbies validation
$("#hobbies").keyup(function(){
  id_input_hobbies_check();
});

function id_input_hobbies_check(){

  var hobbies=$("#hobbies").val();
  if(hobbies==''){
    $('#id_input_hobbies').show();
    $('#id_input_hobbies').html("This field is required");
    $('#id_input_hobbies').focus();
    $('#id_input_hobbies').css('color','red');
    hobbieserr=false;
    return false;
  }
  else{
    $('#id_input_hobbies').hide();
    return true;
  }

}
// Branch validation

$("#branch").change(function(){
  id_input_branch_check();
});

function id_input_branch_check(){

  var branch=$("#branch").val();
  if(branch==''){
    $('#id_input_branch').show();
    $('#id_input_branch').html("This field is required");
    $('#id_input_branch').focus();
    $('#id_input_branch').css('color','red');
    brancherr=false;
    return false;
  }
  else{
    $('#id_input_branch').hide();
    return true;
  }

}

// Resume validation
$("#resume").change(function(){
  id_input_resume_check();
});

function id_input_resume_check(){

  var resume=$("#resume").val();
  if(resume==''){
    $('#id_input_resume').show();
    $('#id_input_resume').html("This field is required");
    $('#id_input_resume').focus();
    $('#id_input_resume').css('color','red');
    resumeerr=false;
    return false;
  }
  else{
    $('#id_input_resume').hide();
    return true;
  }

}

// submit form

$('#_cstm_validate').on('submit',function(e){ 

  e.preventDefault();
  var nameerr= id_input_name_check();
  var phoneerr=id_input_phone_check();
  var emailerr=id_input_email_check();
  var linkedinerr=id_input_linkedin_check();
  var collegeerr=id_input_college_check();
  var educationerr=id_input_edu_check();
  var technologyerr=id_input_technology_check();

  var experienceerr=id_input_experience_check();
  var current_comperr= id_input_current_comp_check();
  var current_salerr=id_input_current_sal_check();
  var expected_salerr=id_input_expected_sal_check();
  var noticeerr=id_input_notice_check();
  var reasonerr=id_input_reason_check();
  var hobbieserr=id_input_hobbies_check();
  var brancherr=id_input_branch_check();
  var resumeerr=id_input_resume_check();

  if((nameerr==true)&&(phoneerr==true)&&(emailerr==true)&&(linkedinerr==true)&&(collegeerr==true)&&(educationerr==true)&&(technologyerr==true)&&(experienceerr==true)&&(current_comperr==true)&&(current_salerr==true)&&(noticeerr==true)&&(reasonerr==true)&&(hobbieserr==true)&&(brancherr==true)&&(resumeerr==true)){

    var formData = new FormData($(this)[0]);
    formData.append("action", 'post_word_count');
    
    $.ajax({  
      url:"<?php echo admin_url( 'admin-ajax.php' ); ?>",  
      method:"POST",  
      data:formData, 
      contentType: false,
      processData: false,   
      success:function(data){  
       console.log(data);



       swal("Applied Successfully"); 
       location.reload();




     }  
   }); 
  }









  return false; 
});   

});

</script>