<?php
/**
 * Created by IntelliJ IDEA.
 * User: godhepaer
 * Date: 3/22/2015
 * Time: 10:03 PM
 */
?>
    <style>
        .app-no {
            padding: 5px;
            border:2px solid #4F5155;
        }

        .inp-guidelines {
            color: #efab26;
            font-style: italic;
            margin-top:10px;
            font-weight: bold;
        }

        .guide-b {
            border-bottom: 1px solid #efab26;
        }
    </style>
<h1>Edit Appointment Data</h1>
<hr/>

<?php if($errors==true): ?>
    <div class="form-group">
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">
                &times;
            </a>
            <strong>Warning!</strong> There is some errors on your input.
            <div><?php echo validation_errors(); ?></div>
        </div>
    </div>
<?php elseif($success==true): ?>
    <div class="form-group">
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">
                &times;
            </a>
            <strong>Success!</strong> Successfully edited a data.
        </div>
    </div>
<?php endif; ?>


<?php echo form_open(''); ?>

<div class="form-group">
    <label>Appointment No : <span class="app-no"><?php echo $appointment->id; ?></span></label>
</div>
<div class="form-group">
    <label>Name</label>
    <input class="form-control" type="text" id="inp_name" name="inp_name" placeholder="Input Name..." value="<?php if($errors){ echo set_value('inp_name'); } else { echo $appointment->name; } ?>"/>
</div>

<div class="form-group">
    <label>Email</label>
    <input class="form-control" type="text" id="inp_email" name="inp_email" placeholder="Input Name..." value="<?php if($errors){ echo set_value('inp_email'); } else { echo $appointment->email; } ?>"/>
</div>

<div class="form-group">
    <label>Phone Number</label>
    <input class="form-control" type="text" id="inp_phone" name="inp_phone" placeholder="Input Name..." value="<?php if($errors){ echo set_value('inp_phone'); } else { echo $appointment->phone; } ?>"/>
</div>

<div class="form-group">
    <label>Address</label>
    <input class="form-control" type="text" id="inp_address" name="inp_address" placeholder="Input Name..." value="<?php if($errors){ echo set_value('inp_address'); } else { echo $appointment->address; } ?>"/>
</div>

<div class="form-group">
    <label>City</label>
    <input class="form-control" type="text" id="inp_city" name="inp_city" placeholder="Input Name..." value="<?php if($errors){ echo set_value('inp_city'); } else { echo $appointment->city; } ?>"/>
</div>

<div class="form-group">
    <label>State</label>
    <input class="form-control" type="text" id="inp_state" name="inp_state" placeholder="Input Name..." value="<?php if($errors){ echo set_value('inp_state'); } else { echo $appointment->state; } ?>"/>
</div>

<div class="form-group">
    <label>Appointment Day</label>
    <input class="form-control" type="text" id="inp_appointment_day" name="inp_appointment_day" placeholder="Input Name..." value="<?php if($errors){ echo set_value('inp_appointment_day'); } else { echo $appointment->appointment_day; } ?>"/>
</div>

<div class="form-group">
    <label>Appointment Time</label>
    <input class="form-control" type="text" id="inp_appointment_time" name="inp_appointment_time" placeholder="Input Name..." value="<?php if($errors){ echo set_value('inp_appointment_time'); } else { echo $appointment->appointment_time; } ?>"/>
</div>

<div class="form-group">
    <label>Appointment Nature</label>
    <input class="form-control" type="text" id="inp_appointment_nature" name="inp_appointment_nature" placeholder="Input Name..." value="<?php if($errors){ echo set_value('inp_appointment_nature'); } else { echo $appointment->appointment_nature; } ?>"/>
</div>

<div class="form-group">
    <label>Status</label>
    <input class="form-control" type="text" id="inp_status" name="inp_status" placeholder="Input Status [approved] / [not-approved]" value="<?php echo $appointment->status; ?>"/>
    <div class="inp-guidelines">
        Please edit status...<br/>
        "" (blank) => not yet approved,<br/>
        "approved" => approved by admin
    </div>
</div>

<div class="form-group" style="text-align: right;">
    <a href="<?php echo site_url("admin/appointment"); ?>"><input type="button" class="btn btn-default" value="Back"/></a>
    <input type="submit" class="btn btn-primary" value="Edit Appointment"/>
</div>

<?php echo form_close(); ?>