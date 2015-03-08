<?php
include("../lib/meekrodb.2.3.class.php");

$doctors = DB::query("SELECT * FROM tb_doctors");

?>
<div id="thedoctors">
    <section id="doctor-container">
        <div class="container">
            <div style="width: 100%; height: 50px;"></div>
            <div class="doctor-head">
                <div class="doctor-logo">
                    <img src="images/home/logo.png"/>
                </div>
                <div class="doctor-head-title">
                    The Doctors
                </div>
            </div>
            <div class="doctor-content">
                <div class="row">
                    <?php foreach($doctors as $d): ?>
                    <div class="col-sm-4">
                        <div class="doctor-outside-item">
                            <div class="doctor-item">
                                <img class="doctor-item-photo" src="<?php echo $d['small_image']; ?>"/>
                                <div class="doctor-btn">
                                    <a href="#" data-doctor="<?php echo $d['tag']; ?>"><img src="images/doctors/btn-lup.png"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <!--<div class="col-sm-4">
                        <div class="doctor-outside-item">
                            <div class="doctor-item">
                                <img class="doctor-item-photo" src="images/doctors/photos/drg-putut.jpg"/>
                                <div class="doctor-btn">
                                    <a href="#" data-doctor="putut"><img src="images/doctors/btn-lup.png"/></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="doctor-outside-item">
                            <div class="doctor-item">
                                <img class="doctor-item-photo" src="images/doctors/photos/drg-kayla.jpg"/>
                                <div class="doctor-btn">
                                    <a href="#" data-doctor="kayla"><img src="images/doctors/btn-lup.png"/></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="doctor-outside-item">
                            <div class="doctor-item">
                                <img class="doctor-item-photo" src="images/doctors/photos/drg-dyta.jpg"/>
                                <div class="doctor-btn">
                                    <a href="#" data-doctor="dyta"><img src="images/doctors/btn-lup.png"/></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="doctor-outside-item">
                            <div class="doctor-item">
                                <img class="doctor-item-photo" src="images/doctors/photos/drg-david.jpg"/>
                                <div class="doctor-btn">
                                    <a href="#" data-doctor="david"><img src="images/doctors/btn-lup.png"/></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="doctor-outside-item">
                            <div class="doctor-item">
                                <img class="doctor-item-photo" src="images/doctors/photos/drg-teuku.jpg"/>
                                <div class="doctor-btn">
                                    <a href="#" data-doctor="teuku"><img src="images/doctors/btn-lup.png"/></a>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="popupDoctors" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!--<div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">
                                This Modal title
                            </h4>
                        </div>-->
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                            Add some text here
                            <div class="data-doctors"></div>
                        </div>
                        <!--<div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary"> Submit changes</button>
                        </div>-->
                    </div><!-- /.modal-content -->
                </div><!-- /.modal -->
            </div>
        </div>
    </section>
    <script type="text/javascript">
        $('.doctor-btn a').click(function(e) {
            var doctor_attr = $(this).attr('data-doctor');
            $.ajax({
                type: "POST",
                url: "controller/cn_getDoctors.php",
                data: { tag : doctor_attr },
                dataType : 'json',
                success: function(data) {
//                    $('.data-doctors').append(data);
                    console.log(data);
                }
            });

//            $('#popupDoctors .modal-header .modal-title').html(doctor_attr);
            $('#popupDoctors').modal('show');
            e.preventDefault();
        });
    </script>
</div>