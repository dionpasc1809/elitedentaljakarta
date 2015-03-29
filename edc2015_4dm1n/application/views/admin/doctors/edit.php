<?php
/**
 * Created by IntelliJ IDEA.
 * User: godhepaer
 * Date: 3/29/2015
 * Time: 11:21 PM
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
        <label>Name</label>
        <input class="form-control" type="text" id="inp_name" name="inp_name" placeholder="Input Name..." value="<?php if($errors){ echo set_value('inp_name'); } else { echo $doctors->name; } ?>"/>
    </div>

    <div class="form-group">
        <label>Tag Name</label>
        <input class="form-control" type="text" id="inp_tag" name="inp_tag" placeholder="Input tag..." value="<?php if($errors){ echo set_value('inp_tag'); } else { echo $doctors->tag; } ?>"/>
    </div>

    <div class="form-group">
        <label>Image (inside Popup)</label>
        <input class="form-control" type="text" id="inp_image" name="inp_image" placeholder="Input Image..." value="<?php if($errors){ echo set_value('inp_image'); } else { echo $doctors->image; } ?>"/>
        <div class="inp-guidelines">
            For Image, please copy links from uploaded image to here.
        </div>
    </div>

    <div class="form-group">
        <label>Image (thumbnail)</label>
        <input class="form-control" type="text" id="inp_small_image" name="inp_small_image" placeholder="Input Small Image..." value="<?php if($errors){ echo set_value('inp_small_image'); } else { echo $doctors->small_image; } ?>"/>
        <div class="inp-guidelines">
            For Image, please copy links from uploaded image to here.
        </div>
    </div>

    <div class="form-group">
        <label>Title</label>
        <input class="form-control" type="text" id="inp_small_title" name="inp_small_title" placeholder="Input Title..." value="<?php if($errors){ echo set_value('inp_small_title'); } else { echo $doctors->small_title; } ?>"/>
    </div>

    <div class="form-group">
        <label>Role</label>
        <input class="form-control" type="text" id="inp_small_role" name="inp_small_role" placeholder="Input Role..." value="<?php if($errors){ echo set_value('inp_small_role'); } else { echo $doctors->small_role; } ?>"/>
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" id="inp_description" name="inp_description" style="resize: none;"><?php if($errors){ echo set_value('inp_description'); } else { echo $doctors->description; } ?></textarea>
        <div class="inp-guidelines">
            For Description, please group individual paragraphs with <span class="guide-b">&lt;p&gt; content here &lt;/p&gt;</span>
        </div>
    </div>

    <div class="form-group" style="text-align: right;">
        <a href="<?php echo site_url("admin/doctors"); ?>"><input type="button" class="btn btn-default" value="Back"/></a>
        <input type="submit" class="btn btn-primary" value="Edit Appointment"/>
    </div>

<?php echo form_close(); ?>