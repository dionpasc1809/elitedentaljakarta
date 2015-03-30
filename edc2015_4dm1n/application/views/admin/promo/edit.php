<?php
/**
 * Created by IntelliJ IDEA.
 * User: DELL
 * Date: 3/30/2015
 * Time: 8:56 AM
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
    <h1>Edit Promo</h1>

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

<div class="form-group">
    <label>Promo No : <span class="app-no"><?php echo $promo->id; ?></span></label>
</div>

<?php echo form_open(''); ?>
    <div class="form-group">
        <label>Promo Name</label>
        <input class="form-control" type="text" id="inp_promo_name" name="inp_promo_name" placeholder="Input Name..." value="<?php if($errors){ echo set_value('inp_promo_name'); } else { echo $promo->promo_name; } ?>"/>
    </div>

    <div class="form-group">
        <label>Promo Image</label>
        <input class="form-control" type="text" id="inp_promo_image" name="inp_promo_image" placeholder="Input tag..." value="<?php if($errors){ echo set_value('inp_promo_image'); } else { echo $promo->promo_image; } ?>"/>
        <div class="inp-guidelines">
            Please copy image url here... <span class="guide-b">eq: http://photobucket.org/..../...jpg</span>
        </div>
    </div>

    <div class="form-group">
        <label>Promo Link</label>
        <input class="form-control" type="text" id="inp_promo_link" name="inp_promo_link" placeholder="Input tag..." value="<?php if($errors){ echo set_value('inp_promo_link'); } else { echo $promo->promo_link; } ?>"/>
    </div>

    <div class="form-group" style="text-align: right;">
        <a href="<?php echo site_url("admin/promo"); ?>"><input type="button" class="btn btn-default" value="Back"/></a>
        <input type="submit" class="btn btn-primary" value="Edit Promo"/>
    </div>

<?php echo form_close(); ?>