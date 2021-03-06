<?php include('include/home_header.php'); ?>
<style type="text/css">
.margin_bot {
    margin-bottom: 5px !important;
}

.fieldGroupCopy {
    display: none;
}

input[type="text"],
input[type="email"] {
    font-size: 1.6rem;
    color: #010100;
    width: 100%;
    line-height: 40px;
    padding-left: 3rem;
}

select {
    width: 100%;
    height: 40px;
    color: #010100;
    padding-left: 3rem;
}

.text-white {
    color: #fff !important;
}

.font-w400 {
    font-weight: 400;
}

.padding-top-xl {
    padding-top: 5rem !important;
}

.padding-bottom-xl {
    padding-bottom: 5rem !important;
}

.margin-top-m {
    margin-top: 3rem !important;
}

.margin-bottom-m {
    margin-bottom: 3rem !important;
}

.section5 h2 {
    line-height: 35px;
}

.section5 p {
    font-size: 16px;
    line-height: 26px;
}

.has-error input[type="text"],
.has-error input[type="email"],
.has-error select {
    border: 1px solid #a94442;
}

.schedule-assessment {
    border: solid 1px #cacaca;
    padding: 15px;
    margin-bottom: 15px;
}
.schedule-assessment .form-group {
    margin-bottom: 25px;
}
.formError {
    opacity: 0.87;
    bottom: 0px!important;
    left: 10px!important;
    right: initial;
    margin-bottom: 0px!important;
    top: 0px!important;
    color: #f61616;
    text-align: left;
    font-size: 12px;
    margin-top: 45px!important;
}
.remove{
    margin-top: 30px;
}
</style>
<div class="template_home master_wrapper customewrap">
     <section id="" class="relative">
      <div class="aboutbanner relative">
         <img src="assets\images\EMPOWERING-big.jpg" class="img img-responsive maxwidth">
         <div class="">
            <div class="text-left about_bannertext">
               <h2 class="font_80 ebrima_bold   wow animated fadeIn animated animated" data-wow-duration="1s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fadeIn;">
                  Empowering Mind Enriching Life
               </h2>
            
               <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
         </div>
      </div>
      <div class="clearfix"></div>
   </section>
    <section class="footer-form padding-top-xl padding-bottom-xl" aria-label="Contact Form">
        <div class="wrapper">
            <div class="container">
              <div class="para">
               <p>
                 Empowering Mind-Enriching Life (EMEL) is a program by Lions Quest in India Foundation to enhance Social Emotional Competencies in adults. The program focuses on helping adults enhance and enrich their lives by Focusing on one’s self, bringing one’s thoughts, feelings and actions together in harmony to deal with life situations, understanding personal, social and ethical responsibilities, nurturing relationships and making wise decisions in life.</p>
<p>
This initiative is a reality check programme for knowing what you know and getting to the next level. It is an effort to help you to focus on your inner self, your relationships and your life experiences and then explore ways in which you can hone your skills to make your life and those of others more meaningful. Let’s take a big leap towards self fulfillment.</p>

<strong>Program Content</strong>
<p>
The whole curriculum is divided into six interactive sessions:
The small group interactive virtual sessions will be conducted by International Trainers.</p>
               </p>
               </div>
                <div class="row">
                    <div class="col-xs-12 section5 text-center">
                        <h2 class="h1 font-w400">Enroll Here</h2>
                        <p class="margin-top-m margin-bottom-m">Please fill the form to join our EMEL Course</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <form name="contentForm" class="contentForm" method="post" action="payment.php">
                            <div class="form schedule-assessment">
                                <label>Participant: <span>1</span></label>
                                <div class="row margin-top-l">
                                    <div class="form-group col-md-4">
                                        <label class="sr-only">Name: </label>
                                        <input name="full_name[]" class="full_name validate[required,custom[onlyLetterSp]]" placeholder="Name" type="text" value=""  data-error="Please enter your full name.">

                                    </div><!-- close col-->
                                    <div class="form-group col-md-4">
                                        <label class="sr-only">Gender </label>
                                        <select name="gender[]" class="validate[required]">
                                            <option value="">Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="sr-only">Age: </label>
                                        <input name="age[]" class="age validate[required]" minlength="1" maxlength="3" placeholder="Age" type="text">
                                    </div>
                                    <!-- close col-->
                                </div>
                                <!-- close row-->
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="qualification" class="sr-only">Qualification </label>
                                        <select name="qualification[]" class="validate[required]">
                                            <option value="">Select Qualification</option>
                                            <option value="Under graduation">Under graduation</option>
                                            <option value="Graduate">Graduate</option>
                                            <option value="Post Graduation">Post Graduation</option>
                                            <option value="Professional">Professional</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="occupation" class="sr-only">Occupation </label>
                                        <select name="occupation[]" class="validate[required]">
                                            <option value="">Select Occupation</option>
                                            <option value="Student">Student</option>
                                            <option value="Employed">Employed </option>
                                            <option value="Business">Business</option>
                                            <option value="Home Maker">Home Maker</option>
                                            <option value="Retired">Retired</option>
                                        </select>

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="language" class="sr-only">Preferred Language </label>
                                        <select name="language[]" class="validate[required]">
                                            <option value="">Preferred language</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="English">English </option>
                                        </select>

                                    </div>
                                </div>
                                <!-- close row-->
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label class="sr-only">City: </label>
                                        <input name="city[]" class="city validate[required,custom[onlyLetterSp]]" placeholder="City" type="text">

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="sr-only">Phone Number: </label>
                                        <input name="phone_number[]" class="phone_number validate[required,custom[phone]]" minlength="10" maxlength="10" placeholder="Phone number" type="text">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="sr-only">Email Address: </label>
                                        <input name="email[]" class="email validate[required,custom[email]]" placeholder="Email Id" type="email">

                                    </div>
                                </div>
                                <!-- close row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>ELEM Program slot selection (Total six sessions will be there in each slot).</label>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="text-left">
                                            <select name="batch[]" class="validate[required]">
                                                <option value="">Select Your Batch</option>
                                                <option value="Mon-Sat: 18:00 to 19:30PM">Mon-Sat: 18:00 to 19:30PM</option>
                                                <option value="Mon,Wed,Fri:15:30 to 17:00PM">Mon,Wed,Fri:15:30 to 17:00PM</option>
                                                <option value="Sat-Sun:17:00 to 18:30PM">Sat-Sun:17:00 to 18:30PM</option>
                                            </select>
                        
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="text-left">
                                            <select name="participant" id="participant">
                                                <option value="1">Individual Participant</option>
                                                <option value="2">Early Bird Participant</option>
                                                <option value="3">Group Booking</option>
                                            </select>
                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Total Fee Amount:</label>
                                    <input name="totalfee" id="totalfee" value="0.00" disabled="disabled" type="text" value="" >
                                </div>
                                <input name="numberOfUser" id="numberOfUser" value="1" type="hidden" value="">
                            </div>
                            <!-- close row-->
                            <div class="form-group">
                                <input class="submit text-left btn btn-primary" value="Pay Now" type="submit">
                                <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add More Studnets</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- copy of input fields group -->
    <div class="form-group fieldGroupCopy">
        
            <div class="row margin-top-l">
                <div class="form-group col-md-4">
                    <label class="sr-only">Name: </label>
                    <input name="full_name[]" class="full_name validate[required,custom[onlyLetterSp]]" placeholder="Name" type="text" value=""  data-error="Please enter your full name.">

                </div><!-- close col-->
                <div class="form-group col-md-4">
                    <label class="sr-only">Gender </label>
                    <select name="gender[]" class="validate[required]">
                        <option value="">Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>

                </div>
                <div class="form-group col-md-4">
                    <label class="sr-only">Age: </label>
                    <input name="age[]" class="age validate[required]" minlength="1" maxlength="3" placeholder="Age" type="text">
                </div>
                <!-- close col-->
            </div>
            <!-- close row-->
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="qualification" class="sr-only">Qualification </label>
                    <select name="qualification[]" class="validate[required]">
                        <option value="">Select Qualification</option>
                        <option value="Under graduation">Under graduation</option>
                        <option value="Graduate">Graduate</option>
                        <option value="Post Graduation">Post Graduation</option>
                        <option value="Professional">Professional</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="occupation" class="sr-only">Occupation </label>
                    <select name="occupation[]" class="validate[required]">
                        <option value="">Select Occupation</option>
                        <option value="Student">Student</option>
                        <option value="Employed">Employed </option>
                        <option value="Business">Business</option>
                        <option value="Home Maker">Home Maker</option>
                        <option value="Retired">Retired</option>
                    </select>

                </div>
                <div class="form-group col-md-4">
                    <label for="language" class="sr-only">Preferred Language </label>
                    <select name="language[]" class="validate[required]">
                        <option value="">Preferred language</option>
                        <option value="Hindi">Hindi</option>
                        <option value="English">English </option>
                    </select>

                </div>
            </div>
            <!-- close row-->
            <div class="row">
                <div class="form-group col-md-4">
                    <label class="sr-only">City: </label>
                    <input name="city[]" class="city validate[required,custom[onlyLetterSp]]" placeholder="City" type="text">

                </div>
                <div class="form-group col-md-4">
                    <label class="sr-only">Phone Number: </label>
                    <input name="phone_number[]" class="phone_number validate[required,custom[phone]]" minlength="10" maxlength="10" placeholder="Phone number" type="text">
                </div>
                <div class="form-group col-md-4">
                    <label class="sr-only">Email Address: </label>
                    <input name="email[]" class="email validate[required,custom[email]]" placeholder="Email Id" type="email">

                </div>
            </div>
            <!-- close row-->
            <div class="row">
                <div class="col-md-12">
                    <label>ELEM Program slot selection (Total six sessions will be there in each slot).</label>
                </div>
                <div class="form-group col-md-4">
                    <div class="text-left">
                        <select name="batch[]" class="validate[required]">
                            <option value="">Select Your Batch</option>
                            <option value="Mon-Sat: 18:00 to 19:30PM">Mon-Sat: 18:00 to 19:30PM</option>
                            <option value="Mon,Wed,Fri:15:30 to 17:00PM">Mon,Wed,Fri:15:30 to 17:00PM</option>
                            <option value="Sat-Sun:17:00 to 18:30PM">Sat-Sun:17:00 to 18:30PM</option>
                        </select>
    
                    </div>
                    <a href="javascript:void(0)" class="btn btn-danger remove">Remove</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<?php include('include/footer.php'); ?>
<script type="text/javascript">
$(document.body).on('change', "#participant", function(e) {
    if (this.value == 3) {
        var fee = 900;
        $('.addMore').show();
        $("#totalfee").val(fee);
    } else if (this.value == 2) {
        var fee = 999;
        $('.addMore').hide();
        $("#totalfee").val(fee);
    } else {
        var fee = 1099;
        $('.addMore').hide();
        $("#totalfee").val(fee);
    }
});
$(document).ready(function() {
    $('.addMore').hide();
    var fee = 1099;
    $("#totalfee").val(fee);
    //group add limit
    var maxGroup = 25;
    //add more fields group
    $(".addMore").click(function() {

        var getLength = $('body').find('.schedule-assessment').length + 1;

        $('.addMore').show();
        var fee = 900;
        $("#totalfee").val(fee * getLength);
        $("#numberOfUser").val(getLength);
        if (getLength < maxGroup) {
            var fieldHTML = '<div class="form schedule-assessment"><label>Participant: <span>'+getLength+'</span></label>' + $(".fieldGroupCopy").html() + '</div>';
            $('body').find('.schedule-assessment:last').after(fieldHTML);
        } else {
            alert('Maximum ' + maxGroup + ' groups are allowed.');
        }
    });

    //remove fields group
    $("body").on("click", ".remove", function() {

        $(this).parents(".schedule-assessment").remove();
        var getLength = $('body').find('.schedule-assessment').length;
        var fee = 900;
        $("#totalfee").val(fee * getLength);
        $("#numberOfUser").val(getLength);
    });
});
</script>
<!---------------------------------------------------------------------------->
<script type="text/javascript">
$(window).load(function() {
    setTimeout(function() {
        var $container = $('.suryoday_container');
        $container.masonry({
            itemSelector: '.image_column',
        });

    }, 1000);

});
//
// payment Form submit
//
function getFormCount(users){
    if(users > 2){
        return true;
    }else{
       return false; 
    }
}
$('.contentForm').on('submit',function(e){
    var participant = $("#participant").val();
    var getUsers = $('body').find('.schedule-assessment').length + 1;
    if(participant == 3){
        if(getFormCount(getUsers) != true){
            alert('Min 5 participant required for group booking!');
            return false;
            e.preventDefault(); //STOP default action
        }
    }
    });
// payment Form submit
// $('body').delegate('.contentForm','submit',function(e){
//     var participant = $("#participant").val();
//     var getUsers = $('body').find('.schedule-assessment').length + 1;
//     if(participant == 3){
//         if(getFormCount(getUsers) != true){
//             alert('Min 5 participant required for group booking!');
//             return false;
//         }
//     }
//     var data = $(this).serialize();
//     alert(data);
//     return false;
//     var formURL = '../mail/mail_contact.php';
//     $.ajax( {
//         type: "POST",
//         url : formURL,
//         data : data,
//         beforeSend:function(){
//             $('#contact_form button').addClass('disabled');
//         },
//         success:function(data, textStatus, jqXHR)
//         {
//             if(data==0){
//                 $('#contact_form button').removeClass('disabled');
//             }else if(data == 2){
//             alert('Invalid captcha!');
//         }else{
//             $('#contact_form')[0].reset();
//                 alert('Inquiry form successfully submited!');
//                 document.location.href = 'index.php';
//                 $('#contact_form button').removeClass('disabled');
//             }
//         },
//         error: function(jqXHR, textStatus, errorThrown)
//         {
//         $('#contact_form button').removeClass('disabled');
//         //if fails
//         }
//     });
//     e.preventDefault(); //STOP default action
//     // e.unbind();
//     });
</script>