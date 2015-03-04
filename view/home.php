<!--<h1>This is Home</h1>

<h2>{{title}}</h2>

<ul>
    <li ng-repeat="item in items">{{item}}</li>
</ul>-->

<div id="home">
    <section id="aboutus">
        <div class="appointment-dropdown">
            <div class="container">
                <span class="title-appointment">Make an Appointment</span>
                <div class="triangle"></div>
                <div class="appointment-form">
                    <div style="width: 100%; height: 40px;"></div>
                    <div class="row">
                        <div class="col-sm-12 alert-content">
                            <div class="alert alert-success app-alert">
                                Success! Appointment is submitted
                            </div>
                        </div>
                        <form method="post" id="form-submit-appointment" name="form-submit-appointment">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label><span class="label-title">Name : </span></label>
                                    <input data-validation="required" data-validation-error-msg="Please enter your name !!" class="form-control" type="text" placeholder="Enter your name" id="inp_name" name="inp_name"/>
                                </div>
                                <div class="form-group">
                                    <label><span class="label-title">Email : </span></label>
                                    <input data-validation="email" data-validation-error-msg="Please enter your valid email !!" class="form-control" type="text" placeholder="Enter your email" id="inp_email" name="inp_email"/>
                                </div>
                                <div class="form-group">
                                    <label><span class="label-title">Phone Number : </span></label>
                                    <input data-validation="number" class="form-control" type="text" placeholder="Enter your phone number" id="inp_phone" name="inp_phone" data-validation-error-msg="Please enter your valid phone number !!"/>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label><span class="label-title">Address : </span></label>
                                    <input data-validation="required" class="form-control" type="text" placeholder="Enter your address" id="inp_address" name="inp_address" data-validation-error-msg="Please enter your address !!"/>
                                </div>
                                <div class="form-group">
                                    <label><span class="label-title">City : </span></label>
                                    <input data-validation="required" class="form-control" type="text" placeholder="Enter your city" id="inp_city" name="inp_city" data-validation-error-msg="Please enter your city !!"/>
                                </div>
                                <div class="form-group">
                                    <label><span class="label-title"></span>State / Province : </span></label>
                                    <input data-validation="required" class="form-control" type="text" placeholder="Enter your state / province" id="inp_state" name="inp_state" data-validation-error-msg="Please enter your state / province !!"/>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label><span class="label-title">Preffered Appointment Day : </span></label>
                                    <select class="form-control" id="inp_appointment_day" name="inp_appointment_day">
                                        <option>Monday</option>
                                        <option>Tuesday</option>
                                        <option>Wednesday</option>
                                        <option>Thursday</option>
                                        <option>Friday</option>
                                        <option>Saturday</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><span class="label-title">Preffered Appointment Time : </span></label>
                                    <select class="form-control" id="inp_appointment_time" name="inp_appointment_time">
                                        <option>10.00 – 11.00</option>
                                        <option>11.00 – 12.00</option>
                                        <option>12.00 – 13.00</option>
                                        <option>13.00 – 14.00</option>
                                        <option>14.00 – 15.00</option>
                                        <option>15.00 – 16.00</option>
                                        <option>16.00 – 17.00</option>
                                        <option>17.00 – 18.00</option>
                                        <option>18.00 – 19.00</option>
                                        <option>19.00 – 20.00</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><span class="label-title">Nature of Appointment : </span></label>
                                    <select class="form-control" id="inp_appointment_nature" name="inp_appointment_nature">
                                        <option>General Check Up</option>
                                        <option>Tooth Filling</option>
                                        <option>Crown and Bridges</option>
                                        <option>Dental Implant</option>
                                        <option>Extraction</option>
                                        <option>Invisalign</option>
                                        <option>Damon Braces</option>
                                        <option>Porcelain Veneer</option>
                                        <option>Root Canal Treatment</option>
                                        <option>Teeth Whitening</option>
                                        <option>Child Dentistry</option>
                                        <option>Scaling / Tooth Cleaning</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <hr class="appointment-hr"/>
                            </div>
                            <div class="col-sm-12">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="submit" id="submit-appointment" class="btn btn-appointment" value="MAKE APPOINTMENT"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="appointment-filler"></div>
        <div id="carouselAboutus" class="carousel slide carousel-fade">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carouselAboutus" data-slide-to="0" class="active"></li>
                <li data-target="#carouselAboutus" data-slide-to="1"></li>
                <li data-target="#carouselAboutus" data-slide-to="2"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/home/about-us-image-1.jpg">
                    <div class="about-float" style="margin-left:-400px;">
                        <div class="about-float-title">About Us</div>
                        <div class="about-float-desc">Located in Kebayoran, South Jakarta, Elite Dental Clinic’s highly trained and qualified professionals and our caring staff, provide the highest quality dental care through our comfortable dental office and lounge, using the latest state of the art technology dental equipments and materials.</div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/home/about-us-image-2.jpg">
                    <div class="about-float" style="margin-left:-400px;">
                        <div class="about-float-title">About Us</div>
                        <div class="about-float-desc">Our mission is to give the best dental care to our valued patients. We will listen to you carefully and examine your dental condition thouroughly. Our intra oral dental camera will give the pleasure of viewing your entire teeth condition, and how we treat them as well. You will be given treatment options based on the diagnosis, and we will provide you the best treatment with quality.</div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/home/about-us-image-3.jpg">
                    <div class="about-float" style="margin-left:-400px;">
                        <div class="about-float-title">About Us</div>
                        <div class="about-float-desc">We take special care to keep you comfortable, attend to any immediate issues you may have, answer all your questions, explain any procedures and teach you how to keep your mouth healthy. You’ll be impressed with the quality of our services and the caring of our staff.</div>
                    </div>
                </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#carouselAboutus" data-slide="prev">
                <span class="filler-middle"></span>
                <span class="arrow-left"></span>
            </a>
            <a class="carousel-control right" href="#carouselAboutus" data-slide="next">
                <span class="filler-middle"></span>
                <span class="arrow-right"></span>
            </a>
        </div>
    </section>
    <section id="treatment">
        <div style="width: 100%; height: 60px;"></div>
        <div id="carouselTreatment" class="carousel slide carousel-fade">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carouselTreatment" data-slide-to="0" class="active"></li>
                <li data-target="#carouselTreatment" data-slide-to="1"></li>
                <li data-target="#carouselTreatment" data-slide-to="2"></li>
                <li data-target="#carouselTreatment" data-slide-to="3"></li>
                <li data-target="#carouselTreatment" data-slide-to="4"></li>
                <li data-target="#carouselTreatment" data-slide-to="5"></li>
                <li data-target="#carouselTreatment" data-slide-to="6"></li>
                <li data-target="#carouselTreatment" data-slide-to="7"></li>
                <li data-target="#carouselTreatment" data-slide-to="8"></li>
                <li data-target="#carouselTreatment" data-slide-to="9"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="treatment-title">
                            Treatment
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-6 col-md-6 col-sm-0 col-xs-0"></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <img style="width: 100%; max-width: 300px;" src="images/treatment/icons/icon-general-dental-check-up.png"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div style="width:100%; height: 60px;"></div>
                                    <div class="treatment-item-title">General Dental Check Up</div>
                                    <ul class="treatment-item-list">
                                        <li>At your first visit, our goal is do a comprehensive risk based assessment at 4 major points : teeth, gums and bone, function and your esthetics. After that, we will tailor our treatment plan to your specific needs. A reguler check up will identify existing dental issues and diseases on the early stage, so we can prevent the bigger problems down the line</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="treatment-title">
                            Treatment
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-6 col-md-6 col-sm-0 col-xs-0"></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <img style="width: 100%; max-width: 300px;" src="images/treatment/icons/icon-preventive-dentistry.png"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div style="width:100%; height: 60px;"></div>
                                    <div class="treatment-item-title">Preventive Dentistry</div>
                                    <ul class="treatment-item-list">
                                        <li><span class="treatment-item-list-title">Scaling and Polishing</span> : we use ultrasonic equipment and special powder to remove tartar and stains on your teeth and root surfaces.</li>
                                        <li><span class="treatment-item-list-title">Pit and Fissure Sealant</span> : is a safe and painless way to protect your teeth from decay / caries. Sealant is a protective tooth colored layer, which is applied to the biting surfaces of the back teeth. The sealant forms a hard shield that keeps food and bacteria from getting into the tiny grooves in the teeth and causing decay.</li>
                                        <li><span class="treatment-item-list-title">Fluoride Application</span></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="treatment-title">
                            Treatment
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-6 col-md-6 col-sm-0 col-xs-0"></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <img style="width: 100%; max-width: 300px;" src="images/treatment/icons/icon-orthodontics.png"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div style="width:100%; height: 60px;"></div>
                                    <div class="treatment-item-title">Orthodontics</div>
                                    <ul class="treatment-item-list">
                                        <li><span class="treatment-item-list-title">Damon system</span> : The Damon system is an orthodontic treatment that uses “self-ligating” braces. This means that the brackets themselves hold the wire in place without the need for elastics or metal ties. Most patients dread the days when their orthodontists tighten their braces. Because the Damon system is a tieless technology, there is more freedom of movement and the need for tightening is eliminated.</li>
                                        <li><span class="treatment-item-list-title">Invisalign</span> : Invisalign is a series of clear, removable aligners to straighten your teeth without braces. You wear each set of the clear aligners for two weeks time period, and remove them only when you eat, drink and brush your teeth. With computer controlled movement every movement can be precisely planned in three dimensions.</li>
                                        <li><span class="treatment-item-list-title">Ceramic braces</span> : Braces that made of ceramic alloys that are match the color of your teeth. Because of their “transparency”, ceramic braces have gained a following among adult patients who wish to straighter their teeth without attracting much attention to their orthodontics.</li>

                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="treatment-title">
                            Treatment
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-6 col-md-6 col-sm-0 col-xs-0"></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <img style="width: 100%; max-width: 300px;" src="images/treatment/icons/icon-Esthetic-Dentistry.png"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div style="width:100%; height: 60px;"></div>
                                    <div class="treatment-item-title">Esthetic Dentistry
                                        <br/>
                                        <p class="treatment-item-title-small">A smile makeover is where dental expertise meets art. A smile makeover will improve the appearance of your smile through one or more esthetic dental procedure such as veneers, teeth whitening and gum contouring.</p>
                                    </div>
                                    <ul class="treatment-item-list">
                                        <li><span class="treatment-item-list-title">Teeth Whitening</span> : Teeth whitening or bleaching is a simple, non-invasive dental treatment used to change the color of natural tooth enamel and is an ideal way to enhance the brilliance of your smile.</li>
                                        <li><span class="treatment-item-list-title">Porcelain Veneers</span>  : are thin layer of porcelain that are bonded to the front surface of a tooth, to change their appearance and function. Veneers can be used to change the size, colour, shape and close space between teeth.</li>
                                        <li><span class="treatment-item-list-title">... (continues next)</span></li>

                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="treatment-title">
                            Treatment
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-6 col-md-6 col-sm-0 col-xs-0"></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <img style="width: 100%; max-width: 300px;" src="images/treatment/icons/icon-Esthetic-Dentistry.png"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div style="width:100%; height: 60px;"></div>
                                    <div class="treatment-item-title">Esthetic Dentistry
                                        <br/>
                                        <p class="treatment-item-title-small">A smile makeover is where dental expertise meets art. A smile makeover will improve the appearance of your smile through one or more esthetic dental procedure such as veneers, teeth whitening and gum contouring.</p>
                                    </div>
                                    <ul class="treatment-item-list">
                                        <li><span class="treatment-item-list-title">Tooth Colored Filling</span>  : a filling made of composite (tooth colored) used to repair a tooth that is affected by decay, caries, cracks, fractures or sometimes to improve the color and esthetics of a tooth.</li>
                                        <li><span class="treatment-item-list-title">Gum Counturing</span> : If you are unhappy with your smile, or if you feel that your gums is too low or too high, you may be need a gum contouring. This dental procedure can even out an uneven gum line and give you a smile you can be proud of.</li>

                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="treatment-title">
                            Treatment
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-6 col-md-6 col-sm-0 col-xs-0"></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <img style="width: 100%; max-width: 300px;" src="images/treatment/icons/icon-endodontics.png"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div style="width:100%; height: 60px;"></div>
                                    <div class="treatment-item-title">Endodontics / Root Canal Treatment</div>
                                    <ul class="treatment-item-list">
                                        <li>Sometimes deep decay can make a serious infection that affect pulp’s ability to stay healthy and it begins to atrophy, that leads to severe pain and sometimes an abcess. In this case, the nerves and vascular system in the center of your tooth have to be removed, cleaned and then filled.</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="treatment-title">
                            Treatment
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-6 col-md-6 col-sm-0 col-xs-0"></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <img style="width: 100%; max-width: 300px;" src="images/treatment/icons/icon-prosthodontics.png"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div style="width:100%; height: 60px;"></div>
                                    <div class="treatment-item-title">Prosthodontics
                                        <br/>
                                        <p class="treatment-item-title-small">It is very important to fixed you broken or fracture teeth and fill the empty space after you extract your teeth, to prevent remaining teeth from drifting out of position, to restore chewing ability and to restore your smile.</p>
                                    </div>
                                    <ul class="treatment-item-list">
                                        <li><span class="treatment-item-list-title">Crown and Bridges</span> : Crown and bridges can be made of metal, all porcelain ceramic, or a combination of porcelain fused to metal. Crown and bridges are highly durable and can last 5 years to a lifetime depends on the specific oral environment and your oral hygiene habits.</li>
                                        <li><span class="treatment-item-list-title">Dental Implants</span> : Dental implants are a titanium metal rod which is placed into the jawbone to replace one or more missing teeth. Of all dental restorarion solutions, dental implants have the highest rate of success to replace missing teeth, because they look, feel, and function just like a real teeth, and can last a lifetime with proper care.</li>
                                        <li><span class="treatment-item-list-title">Removable Denture</span> : when you lost a lot of teeth, in order to obtain a good speaking and chewing function, you may need to use a removable denture</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="treatment-title">
                            Treatment
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-6 col-md-6 col-sm-0 col-xs-0"></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <img style="width: 100%; max-width: 300px;" src="images/treatment/icons/icon-oral-surgery.png"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div style="width:100%; height: 60px;"></div>
                                    <div class="treatment-item-title">Oral Surgery</div>
                                    <ul class="treatment-item-list">
                                        <li><span class="treatment-item-list-title">Tooth Extraction</span> : there are many reason why teeth needs to be removed. The common reason is because of tooth decay that makes the tooth non-restorable. Sometimes we need to remove the baby teeth if they preventing the eruption of permanent teeth or have large cavities.</li>
                                        <li><span class="treatment-item-list-title">Wisdom Tooth</span> : Wisdom teeth often need to be removed because of issues they may cause in the future. We are always trying to prevent things like resorbed roots, sinus pain, headaches and large infections.</li>
                                        <li><span class="treatment-item-list-title">Minor Surgeries</span> : osteotomy</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="treatment-title">
                            Treatment
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-6 col-md-6 col-sm-0 col-xs-0"></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <img style="width: 100%; max-width: 300px;" src="images/treatment/icons/icon-children.png"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div style="width:100%; height: 60px;"></div>
                                    <div class="treatment-item-title">Pediatric/Child Dentistry</div>
                                    <ul class="treatment-item-list">
                                        <li>Hi parents and children. <br/>We are happy to see you and your little ones in our clinics. We work hard to make each dental visit fun and kid-oriented, because we believe that positive dental experiences during childhood builds a foundation of good oral health, and need not be a scary experience for your child. We will help your children to have a good oral hygiene, healthy teeth and great smile.</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="treatment-title">
                            Treatment
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-6 col-md-6 col-sm-0 col-xs-0"></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <img style="width: 100%; max-width: 300px;" src="images/treatment/icons/icon-full-mouth.png"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div style="width:100%; height: 60px;"></div>
                                    <div class="treatment-item-title">Full Mouth Rehabilitation</div>
                                    <ul class="treatment-item-list">
                                        <li>Dental treatment procedure that will creates a beautiful, healthy and functional smiles. Typically involves general or restorative dentists (performing procedures like crowns, bridges and veneers), and can incorporate dental specialists like periodontists (specializing in the gums), oral surgeons, orthodontists (specializing in tooth movements and positions) and endodontists (specializing in the tooth pulp)</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#carouselTreatment" data-slide="prev">
                <span class="filler-middle"></span>
                <span class="arrow-left"></span>
            </a>
            <a class="carousel-control right" href="#carouselTreatment" data-slide="next">
                <span class="filler-middle"></span>
                <span class="arrow-right"></span>
            </a>
        </div>
        <div style="width: 100%; height: 60px;"></div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="width:100%; height: 100px;"></div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="contact-title">
                                Contact Us
                            </div>
                            <table class="contact-table">
                                <tr>
                                    <td><img src="images/home/icon-address.png"/></td>
                                    <td>JL. Radio Dalam Raya No. 61C, Kebayoran Baru, Jakarta Selatan</td>
                                </tr>
                                <tr>
                                    <td><img src="images/home/icon-phone.png"/></td>
                                    <td>021 724 6706  / 0812 9839 0818</td>
                                </tr>
                                <tr>
                                    <td><img src="images/home/icon-email.png"/></td>
                                    <td>elitedental.jakarta@gmail.com</td>
                                </tr>
                                <tr>
                                    <td><img src="images/home/icon-office-hours.png"/></td>
                                    <td>Senin – Sabtu pk 10.00 – 20.00</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="position: relative;">

                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="position: relative;">
                            <img style="width: 100%;" src="images/home/contact-maps-mask.png"/>
                            <iframe style="position: absolute; width:100%; height:100%; top:0; left:0; border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=elite%20dental%20clinic&key=AIzaSyBZAx18fPZ10Mc9ajbnlh3jPbHqPEVbRx0"></iframe>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-0 col-xs-0"></div>

                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="width:100%; height: 100px;"></div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
            </div>
        </div>
        <div class="bottom-footer" style="display: none;">
            <div class="inside-footer">
                <div class="footer-text">Like / Follow us on :</div>
                <div class="fb-logo">&nbsp;</div>
                <div class="twitter-logo">&nbsp;</div>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">
    var appointment_dropdown = 0;
    $('.appointment-dropdown .title-appointment').click(function() {
        if(appointment_dropdown==0)
        {
            $('.appointment-dropdown').addClass('dropped');
            appointment_dropdown=1;
        }
        else if(appointment_dropdown==1)
        {
            $('.appointment-dropdown').removeClass('dropped');
            appointment_dropdown=0;
        }
    });
    $('.alert').hide();
    //    appointment form script
        $.validate({
            onSuccess : function() {
//                var dataString = 'name='+ name + '&email=' + email + '&phone=' + phone;
                var dataString = $('#form-submit-appointment').serialize();
                $.ajax({
                    type: "POST",
                    url: "controller/cn_setAppointment.php",
                    data: dataString,
                    success: function(data) {
                        console.log(data);
                    }
                });
                $('.alert-success').fadeIn(300);
                setTimeout(function() {
                    $('.alert-success').fadeOut(300);
                },3000);
                return false;
            }
        });

//        $('#submit-appointment').click(function() {
//            alert('test');
//        });

    //    end appointment form script
</script>
