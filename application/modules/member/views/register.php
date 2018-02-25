<div class="row">
    <div class="span4 offset4">
        <div class="alert" style="display:none;">
            
        </div>
    </div>
    <div class="span6 offset4">
    <h2>Sign Up</h2>
    <div id="note"></div>
        <div id="fields" class="contact-form">
            <?php 
                echo form_open('member/save_register',array(
                    'id' => 'form-register',
                    'class' => 'form-horizontal'
                ));
            ?>
                <div class="control-group">
                    <label class="control-label" for="inputName">Your first name:</label>         
                    <?php 
                        echo form_input(array(
                            'id' => 'first_name',
                            'name' => 'first_name',
                        ));
                    ?>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputName">Your last name:</label>
                    <?php 
                        echo form_input(array(
                            'id' => 'last_name',
                            'name' => 'last_name'
                        ));
                    ?>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Your Email:</label>
                    <?php 
                        echo form_input(array(
                            'id' => 'email',
                            'name' => 'email',
                            'type' => 'email'
                        ));
                    ?>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Your Phone:</label>
                    <?php 
                        echo form_input(array(
                            'id' => 'phone',
                            'name' => 'phone'
                        ));
                    ?>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Password:</label>
                    <?php 
                        echo form_password(array(
                            'id' => 'password',
                            'name' => 'password'
                        ));
                    ?>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Confirm Password:</label>
                    <?php 
                        echo form_password(array(
                            'id' => 'confirm_password',
                            'name' => 'confirm_password'
                        ));
                    ?>
                </div>      
                <button type="submit" class="btn btn_ btn-small_" id="myButton" data-loading-text="Loading...">submit</button>
            <?php echo form_close();?>
        </div>  		 
    </div>		  
</div>
<script type="text/javascript">
$( document ).ready( function () {
    $( "#form-register" ).validate( {
        rules: {
            first_name: "required",
            last_name: "required",
            username: {
                required: true,
                minlength: 2
            },
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                minlength: 10,
                digits: true
            }
        },
        messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            username: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 2 characters"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            },
            email: "Please enter a valid email address",
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
            // Add the `help-block` class to the error element
            error.addClass( "help-block" );

            if ( element.prop( "type" ) === "checkbox" ) {
                error.insertAfter( element.parent( "label" ) );
            } else {
                error.insertAfter( element );
            }
        },
        highlight: function ( element, errorClass, validClass ) {
            $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
            $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: $("#form-register").attr( 'action' ),
                data: $("#form-register").serialize(),
                dataType: 'json',
            beforeSend: function(e) {
                $("#myButton").button('loading');
            },
            success: function(data) {
                if (data.code == 200) {
                    $(".alert").removeClass('alert-error').addClass('alert-success').html(data.message);
                    $("#form-register")[0].reset();
                } else {
                    $(".alert").addClass('alert-success').addClass('alert-error').html(data.message);
                }
                $(".alert").show();
                $("#myButton").button('reset');
            },
            error: function(e) {
                //console.log(e);
            }
        });
        return false;
        }
    });

    //if (formValidation) {
        
    //}
});

</script>