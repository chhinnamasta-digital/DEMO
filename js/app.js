$(function(){

    // sign-up Form on key up
    // var walletDataArray = [];
    // $.getJSON("https://algoindexer.algoexplorerapi.io/v2/assets/805862344/balances", function(data){
    //     $.each(data['balances'], function(index, value){
    //         walletDataArray.push(value['address']);
    //     }) 
        
        // let signUpKeyUp = document.getElementById('sign-up');
        // let TotalFields = $(signUpKeyUp).find("input, textarea");
        // console.log("element lenght", TotalFields.length)
        // $(document).find("#signUp-btn").attr("disabled", "disabled");
        var emailPattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,7}\b$/i;
        var passPattren = /^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9!@#$%^&*]{6,15}$/;
    
        // for(let i = 0; i < TotalFields.length; i++){
        //     let getAttrId = $(TotalFields[i]).attr("id");
    
        //     // if(signUpKeyUp){
        //         $(document).on("keyup, keypress", "#"+getAttrId, function(){
        //             let thisElm = $(this);  
        //             let fieldLength = $(thisElm).val().replace(/\s+/g, '').length;
    
        //             if($(thisElm).val() == ""){
        //                 $(thisElm).next().html("<p>This field is required</p>");
        //                 $("#signUp-btn").attr("disabled");
        //                 // return false;
        //             }
        //             // else if(getAttrId == 'signupName'){
        //             //     if(fieldLength <= 3){
        //             //         $(thisElm).next().html("<p>Charcter Length Atleast 3</p>");
        //             //     }
        //             //     else{
        //             //         $(thisElm).next().html("");
        //             //     }
        //             // }
        //             // else if(getAttrId == 'signupWalletAddress'){
        //             //     // console.log(walletDataArray);
        //             //     let result = walletDataArray.includes($(thisElm).val(), 0);
        //             //     // console.log("result", result);
        //             //     if(fieldLength <= 10){
        //             //         $(thisElm).next().html("<p>Charcter Length Atleast 10</p>");
        //             //     }
        //             //     else if(!result){
        //             //         $(thisElm).next().html("<p>Please Enter Valid Address</p>");
        //             //     }
        //             //     else{
        //             //         $(thisElm).next().html("");
        //             //     }
        //             // }
        //             // else if(getAttrId == 'sigiupEmail'){
        //             //     if(!emailPattern.test($(thisElm).val())){
        //             //         $(thisElm).next().html("<p>Please Enter Valid Email Address</p>");
        //             //     }
        //             //     else{
        //             //         $(thisElm).next().html("");
        //             //     }
        //             // }
        //             // else if(getAttrId == 'signupPassword'){
        //             //     if(fieldLength < 4){
        //             //         $(thisElm).next().html("<p>Your password must be at least 8 characters</p>");
        //             //     }
        //             //     else if(!($(thisElm).val().match(passPattren))){
        //             //         $(thisElm).next().html("<p>Your password must contain at least 6 max 15  (<strong>One Special characters, one digit, one Uppercase Letters </strong>.</p>");
        //             //     }
        //             //     // else if(!(/[0-9]/).test($(thisElm).val())){
        //             //     //     $(thisElm).next().html("<p>Your password must contain at least one digit.</p>");
        //             //     // }
        //             //     else{
        //             //         $(thisElm).next().html("");
        //             //     }
        //             // }
                    
        //             // else if(getAttrId == 'signupConfirmpassword'){
        //             //     if($(thisElm).val() != $("#signupPassword").val()){
        //             //         $(thisElm).next().html("<p>Your password Not Match</p>");
        //             //     }
        //             //     else{
        //             //         $(thisElm).next().html("");
        //             //     }
        //             // }
        //             else{

        //                     $("#signUp-btn").removeAttr("disabled");
        //             }
        //         })
        //     // }
        // }
        
    // });
    
    

    
    // See password
    $(document).on("click", ".seePass", function(){
        if($(this).children('i').is(".fa-eye")){
            $(this).children('i').removeClass("fa-eye").addClass("fa-eye-slash");
            $(this).parent("label").next("input").attr("type", "text");
        }
        else{            
            $(this).children('i').addClass("fa-eye").removeClass("fa-eye-slash");
            $(this).parent("label").next("input").attr("type", "password");
        }
    })
    

    // $("#signUp-btn").on("click", function(){
    //     let signupName = $("#signupName").val();
    //     let signupWalletAddress = $("#signupWalletAddress").val();
    //     let sigiupEmail = $("#sigiupEmail").val();
    //     let signupPassword = $("#signupPassword").val();
    //     let signupConfirmpassword = $("#signupConfirmpassword").val();
    //     let walletDataArray = [];
    //     let message = ""
        
    //     // console.warn(signupPassword, signupConfirmpassword);

    //     if(signupName == "" || signupWalletAddress == "" || sigiupEmail == "" || signupPassword == "" || signupConfirmpassword == ""){            
    //         // $(".response_msg .appendText").html("All Fields Required"); 
    //         // $(".response_msg").addClass("AlertMess"); 
    //         // $(".response_msg").slideDown();
    //         $(document).find("input")

    //     }
    //     else if(signupConfirmpassword != signupPassword){
    //         $(".response_msg .appendText").html("Password no Match"); 
    //         $(".response_msg").addClass("AlertMess"); 
    //         $(".response_msg").slideDown();
    //     }
    //     else{
    //         // compare Wallet Address

    //         $.ajax({
    //             url: "https://algoindexer.algoexplorerapi.io/v2/assets/805862344/balances",
    //             method: "GET",
    //             data: {"walletAddress": signupWalletAddress},
    //             dataType: "JSON",
    //             success: function(compateWaletAddress){
    //                 $.each(compateWaletAddress['balances'], function(index, value){
    //                     walletDataArray.push(value['address']);
    //                 }) 

    //                 let result = walletDataArray.includes(signupWalletAddress, 0);

    //                 if(result == true){
    //                     $(".spinner_modal").removeClass('d-none');
    //                     $(this).attr("disabled", true);

    //                     $.post("ajaxDir/novAuSignUp.php", $("#sign-up").serialize(), function(data){
    //                         let jsonFormat = JSON.parse(data);
    //                         // let formData = JSON.stringify(data);
    //                         console.warn(jsonFormat['message'])
    //                         if(jsonFormat['status'] == true)
    //                         {        
    //                             $("#sign-up").trigger("reset");
    //                             $(".spinner_modal").addClass('d-none');
    //                             $("#signin-btn").attr("disabled", false);
    //                             $(".response_msg").slideDown();
    //                             $(".response_msg .appendText").html(jsonFormat['message']); 
    //                             $(".response_msg").addClass("SuccessMess"); 
    //                             setTimeout(function(){
    //                                 $(".response_msg").slideUp();
    //                             }, 3000);
    //                         }
    //                         else{                                
    //                             $(".response_msg").slideDown();
    //                             $(".response_msg .appendText").html(jsonFormat['message']); 
    //                             $(".response_msg").addClass("ErrorMess"); 
    //                         }
    //                     })
    //                 }
    //                 else{
    //                     $(".response_msg").slideDown();
    //                     $(".response_msg .appendText").html("Please Enter Correct Wallet Address");
    //                     $(".response_msg").addClass("ErrorMess"); 
    //                 }
    //             }
    //         })
    //     }
    // })
    // close alert message
    $(document).on("click", ".messageClose", function(){
        $(".response_msg").slideUp();
    })

    // Login page

    

    $("#signin-btn").on("click", function(e){
        e.preventDefault();
        let signInPassword = $("#signInPassword").val();
        let signInEmail = $("#signInEmail").val();

        if(signInEmail == '' && signInPassword == ''){
            $(".response_msg .appendText").html("All Fields Required"); 
            $(".response_msg").addClass("AlertMess"); 
            $(".response_msg").slideDown();
            // console.log("all field blank");
        }
        else{
            
            $.get("ajaxDir/novAuLogIn.php", $("#sign-in").serialize(), function(data){
                let jsonFormatLogin = JSON.parse(data);
                if(jsonFormatLogin['status'] == true){
                    location.reload(); 
                }
                else{               
                    $(".response_msg").slideDown();
                    $(".response_msg .appendText").html(jsonFormatLogin['message']); 
                    $(".response_msg").addClass("ErrorMess"); 
                    
                }
                
            });
        }
    })

    
        
})