<div class="row clearfix divider4">
    <div class="span7">
        <?php echo $data['description'];?>
    </div>

    <div class="span5">
    <div id="alert-contact" class="alert" style="display:none;"></div>
        <h2>contact form</h2>
        <div id="note"></div>
        <div id="fields" class="contact-form">
        <?php 
                echo form_open('contact_us/save_inquiry',array(
                    'id' => 'form-contact',
                    'class' => 'form-horizontal'
                ));
            ?>
            <div class="control-group">
                <label class="control-label" for="inputName">Your name:</label>         
                <?php 
                    echo form_input(array(
                        'id' => 'name',
                        'name' => 'name',
                    ));
                ?>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail">Your Email:</label>
                <?php 
                    echo form_input(array(
                        'id' => 'email',
                        'name' => 'email'
                    ));
                ?>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputName">Subject:</label>
                <?php 
                    echo form_input(array(
                        'id' => 'subject',
                        'name' => 'subject'
                    ));
                ?>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputName">Message:</label>
                <?php 
                    echo form_textarea(array(
                        'id' => 'message',
                        'name' => 'message'
                    ));
                ?>
            </div>
            <button type="submit" class="btn btn_ btn-small_" id="myButtonContact" data-loading-text="Loading...">Submit</button>
            <?php echo form_close();?>
        </div>  
    </div>		  
</div>
<script>
$(document).ready(function(){
    $( "#form-contact" ).validate( {
        rules: {
            name: {
                required: true
            },
            subject: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true
            }
        },
        messages: {
            name: "Please enter your username",
            subject: {
                required: "Please enter your subject",
            },
            email: {
                required: "Please enter your email",
                email: "Please enter valid email"
            },
            message: {
                required: "Please enter your message"
            }
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
                url: $("#form-contact").attr( 'action' ),
                data: $("#form-contact").serialize(),
                dataType: 'json',
            beforeSend: function(e) {
                $("#myButtonContact").button('loading');
            },
            success: function(data) {
                if (data.code == 200) {
                    $("#alert-contact").removeClass('alert-error').addClass('alert-success').html(data.message);
                    $("#form-contact")[0].reset();
                } else {
                    $("#alert-contact").addClass('alert-success').addClass('alert-error').html(data.message);
                }
                $("#alert-contact").show();
                $("#myButtonContact").button('reset');
            },
            error: function(e) {
                //console.log(e);
            }
        });
        return false;
        }
    });
});
</script>