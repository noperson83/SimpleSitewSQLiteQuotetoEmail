<?php   

$pageTitle = 'Quote Form';
include('./templates/header.php');
?>

<section>
    <form name="htmlform" id="order_form" method="post" action="process.php">
    <h1>Quote</h1>
    <div class="blockquote">
        <p>Ready to order? Our brand new ordering system makes purchasing custom lathe cut records easier than ever before. Simply fill out your mailing and contact info, provide details for the project, and select your record options.</p>
        <p>An instant price will be provided for both the unit cost and total order cost (minus shipping). Double check that all information is correct, and click the "PLACE ORDER" button.</p>
        <p>A new screen will appear with the details of your order, and you should receive an order confirmation email to the address you provided. Next, click the "PAY FOR ORDER" button to be directed to the Paypal Checkout to make payment for the order.</p>
    </div>
    
    <div class="block-fifty">
        <div class="block">
            <div id="form-options">
                <h2>OPTIONS</h2>
                <label>QUANTITY:</label> <input id="quantity" value="" type="number" name="order_quantity"
                                                placeholder="Minimum quantity of 20"/>
                <br>
                
                <div id="frame-record-types-global">
                    <label>TYPE:</label>
                    <select id="record-types-global"
                            name="order[type]">
                        <option name="Choose Record Type" value="0.00">Choose Record Type</option>
                        <option name='CD-Record' value="CD-Record">CD-Record</option>
                        <option name='DVD-Record' value="DVD-Record">DVD-Record</option>
                        <option name='Postcard Record' value="Postcard Record">Postcard Record</option>
                        <option name='Square' value="Square">Square</option>
                        <option name='Round' value="Round">Round</option>
                        <option name='Semi Flexi' value="Semi-Flexi">Semi Flexi</option>
                        <option name='Picture Disc' value="Picture Disc">Picture Disc</option>
                    </select>
                </div>
                <br>

                <div id="frame-record-types">
                    <label>SIZE & OPTION:</label>
                    <select id="record_types" name="order_size">
                        <option name="Choose Size and Option" value="0.00">Choose Size & Option</option>

                        <option class="record-options cd-records" name='CD-Records' value="5.00">CD-Record</option>
                        <option class="record-options dvd-records" name='DVD-Records' value="6.00">DVD-Record</option>

                        <option class="record-options postcard-records" name='4" x 6" Postcard Record - 1-Sided'
                                value="4.00">4" x 6" Postcard Record - 1-Sided
                        </option>
                        <option class="record-options postcard-records" name='5" x 7" Postcard Record - 1-Sided'
                                value="5.00">5" x 7" Postcard Record - 1-Sided
                        </option>

                        <option class="runtime-4 record-options square-records" name='4" Square - Clear'
                                value="1.00">4" Square - Clear
                        </option>
                        <option class="runtime-5 record-options square-records" name='5" Square - Clear'
                                value="1.25">5" Square - Clear
                        </option>
                        <option class="runtime-6 record-options square-records" name='6" Square - Clear'
                                value="1.75">6" Square - Clear
                        </option>
                        <option class="runtime-7 record-options square-records" name='7" Square - Clear'
                                value="2.00">7" Square - Clear
                        </option>
                        <option class="runtime-7 record-options square-records" name='7" Square - Black'
                                value="3.00">7" Square - Black
                        </option>
                        <option class="runtime-7 record-options square-records" name='7" Square - White'
                                value="3.00">7" Square - White
                        </option>
                        <option class="runtime-8 record-options square-records" name='8" Square - Clear'
                                value="3.00">8" Square - Clear
                        </option>
                        <option class="runtime-8 record-options square-records" name='8" Square - White'
                                value="4.25">8" Square - White
                        </option>
                        <option class="runtime-8 record-options square-records" name='8" Square - Black'
                                value="4.25">8" Square - Black
                        </option>

                        <option class="runtime-7 record-options round-records" name='7" Round - Clear' value="5.00">
                            7" Round - Clear
                        </option>
                        <option class="runtime-7 record-options round-records" name='7" Round - White' value="5.00">
                            7" Round - White
                        </option>
                        <option class="runtime-7 record-options round-records" name='7" Round - Black' value="5.00">
                            7" Round - Black
                        </option>
                        <option class="runtime-8 record-options round-records" name='8" Round - Clear' value="5.00">
                            8" Round - Clear
                        </option>
                        <option class="runtime-9 record-options round-records" name='9" Round - Clear' value="5.00">
                            9" Round - Clear
                        </option>
                        <option class="runtime-10 record-options round-records" name='10" Round - Clear'
                                value="5.00">10" Round - Clear
                        </option>
                        <option class="runtime-10 record-options round-records" name='10" Round - White'
                                value="6.50">10" Round - White
                        </option>
                        <option class="runtime-10 record-options round-records" name='10" Round - Black'
                                value="6.50">10" Round - Black
                        </option>
                        <option class="runtime-11 record-options round-records" name='11" Round - Clear'
                                value="6.50">11" Round - Clear
                        </option>
                        <option class="runtime-12 record-options round-records" name='12" Round - Clear'
                                value="6.00">12" Round - Clear
                        </option>
                        <option class="runtime-12 record-options round-records" name='12" Round - White'
                                value="6.00">12" Round - White
                        </option>
                        <option class="runtime-12 record-options round-records" name='12" Round - Black'
                                value="6.00">12" Round - Black
                        </option>

                        <option class="runtime-5 record-options semiflexi-records"
                                name='5" Square - Clear Semi Flexi' value="1.00">5" Square - Clear Semi Flexi
                        </option>
                        <option class="runtime-7 record-options semiflexi-records"
                                name='7" Square - Clear Semi Flexi' value="1.75">7" Square - Clear Semi Flexi
                        </option>
                        <option class="runtime-8 record-options semiflexi-records"
                                name='8" Square - Clear Semi Flexi' value="2.50">8" Square - Clear Semi Flexi
                        </option>

                        <option class="runtime-4 record-options picturedisc-records"
                                name='4" Square - Picture Disc - 1 Side' value="2.00">4" Square - Picture Disc - 1
                            Side
                        </option>
                        <option class="runtime-4 record-options picturedisc-records"
                                name='4" Square - Picture Disc - 2 Sides' value="3.50">4" Square - Picture Disc - 2
                            Sides
                        </option>
                        <option class="runtime-5 record-options picturedisc-records"
                                name='5" Square - Picture Disc - 1 Side' value="2.25">5" Square - Picture Disc - 1
                            Side
                        </option>
                        <option class="runtime-5 record-options picturedisc-records"
                                name='5" Square - Picture Disc - 2 Sides' value="4.00">5" Square - Picture Disc - 2
                            Sides
                        </option>
                        <option class="runtime-6 record-options picturedisc-records"
                                name='6" Square - Picture Disc - 1 Side' value="3.00">6" Square - Picture Disc - 1
                            Sides
                        </option>
                        <option class="runtime-6 record-options picturedisc-records"
                                name='6" Square - Picture Disc - 2 Sides' value="5.00">6" Square - Picture Disc - 2
                            Sides
                        </option>
                        <option class="runtime-7 record-options picturedisc-records"
                                name='7" Square - Picture Disc - 1 Side' value="4.00">7" Square - Picture Disc - 1
                            Side
                        </option>
                        <option class="runtime-7 record-options picturedisc-records"
                                name='7" Square - Picture Disc - 2 Sides' value="6.00">7" Square - Picture Disc - 2
                            Sides
                        </option>
                        <option class="runtime-8 record-options picturedisc-records"
                                name='8" Square - Picture Disc - 1 Side' value="5.00">8" Square - Picture Disc - 1
                            Side
                        </option>
                        <option class="runtime-8 record-options picturedisc-records"
                                name='8" Square - Picture Disc - 2 Sides' value="7.00">8" Square - Picture Disc - 2
                            Sides
                        </option>
                    </select>
                    <br>
                </div>
                
                <div id="frame-record-sideone">
                    <label>SIDE ONE:</label>
                    <select id="record_sideone" name="order_sideone">
                        <option class="time time-4" id="quote-option-sideone-0000" name="00:00" value="0.00">00:00
                        </option>
                        <option class="time time-4" id="quote-option-sideone-0030" name="00:30" value="1.50">00:30
                        </option>
                        <option class="time time-4" id="quote-option-sideone-0100" name="01:00" value="1.50">01:00
                        </option>
                        <option class="time time-4" id="quote-option-sideone-0130" name="01:30" value="1.50">01:30
                        </option>
                        <option class="time time-4" id="quote-option-sideone-0200" name="02:00" value="1.50">02:00
                        </option>
                        <option class="time time-5" id="quote-option-sideone-0230" name="02:30" value="1.88">02:30
                        </option>
                        <option class="time time-5" id="quote-option-sideone-0300" name="03:00" value="1.95">03:00
                        </option>
                        <option class="time time-6" id="quote-option-sideone-0330" name="03:30" value="2.28">03:30
                        </option>
                        <option class="time time-6" id="quote-option-sideone-0400" name="04:00" value="2.60">04:00
                        </option>
                        <option class="time time-7" id="quote-option-sideone-0430" name="04:30" value="2.48">04:30
                        </option>
                        <option class="time time-7" id="quote-option-sideone-0500" name="05:00" value="2.75">05:00
                        </option>
                        <option class="time time-7" id="quote-option-sideone-0530" name="05:30" value="3.03">05:30
                        </option>
                        <option class="time time-7" id="quote-option-sideone-0600" name="06:00" value="3.30">06:00
                        </option>
                        <option class="time time-8" id="quote-option-sideone-0630" name="06:30" value="3.58">06:30
                        </option>
                        <option class="time time-8" id="quote-option-sideone-0700" name="07:00" value="3.85">07:00
                        </option>
                        <option class="time time-8" id="quote-option-sideone-0730" name="07:30" value="3.75">07:30
                        </option>
                        <option class="time time-8" id="quote-option-sideone-0800" name="08:00" value="4.00">08:00
                        </option>
                        <option class="time time-8" id="quote-option-sideone-0830" name="08:30" value="4.25">08:30
                        </option>
                        <option class="time time-8" id="quote-option-sideone-0900" name="09:00" value="4.50">09:00
                        </option>
                        <option class="time time-9" id="quote-option-sideone-0930" name="09:30" value="4.75">09:30
                        </option>
                        <option class="time time-9" id="quote-option-sideone-1000" name="10:00" value="5.00">10:00
                        </option>
                        <option class="time time-9" id="quote-option-sideone-1030" name="10:30" value="5.25">10:30
                        </option>
                        <option class="time time-9" id="quote-option-sideone-1100" name="11:00" value="5.50">11:00
                        </option>
                        <option class="time time-10" id="quote-option-sideone-1130" name="11:30" value="5.75">
                            11:30
                        </option>
                        <option class="time time-10" id="quote-option-sideone-1200" name="12:00" value="6.00">
                            12:00
                        </option>
                        <option class="time time-11" id="quote-option-sideone-1230" name="12:30" value="6.25">
                            12:30
                        </option>
                        <option class="time time-11" id="quote-option-sideone-1300" name="13:00" value="6.50">
                            13:00
                        </option>
                        <option class="time time-11" id="quote-option-sideone-1330" name="13:30" value="6.75">
                            13:30
                        </option>
                        <option class="time time-11" id="quote-option-sideone-1400" name="14:00" value="7.00">
                            14:00
                        </option>
                        <option class="time time-11" id="quote-option-sideone-1430" name="14:30" value="7.25">
                            14:30
                        </option>
                        <option class="time time-11" id="quote-option-sideone-1500" name="15:00" value="7.50">
                            15:00
                        </option>
                        <option class="time time-12" id="quote-option-sideone-1530" name="15:30" value="7.75">
                            15:30
                        </option>
                        <option class="time time-12" id="quote-option-sideone-1600" name="16:00" value="8.00">
                            16:00
                        </option>
                        <option class="time time-12" id="quote-option-sideone-1630" name="16:30" value="8.25">
                            16:30
                        </option>
                        <option class="time time-12" id="quote-option-sideone-1700" name="17:00" value="8.50">
                            17:00
                        </option>
                        <option class="time time-12" id="quote-option-sideone-1730" name="17:30" value="8.75">
                            17:30
                        </option>
                        <option class="time time-12" id="quote-option-sideone-1800" name="18:00" value="9.00">
                            18:00
                        </option>
                    </select>
                    <br>
                </div>

                <div id="frame-record-sidetwo">
                    <label>SIDE TWO:</label>
                    <select name="order_sidetwo" id="record_sidetwo">
                        <option class="time time-4" id="quote-option-sidetwo-0000" name="00:00" value="0.00">00:00
                        </option>
                        <option class="time time-4" id="quote-option-sidetwo-0030" name="00:30" value="1.50">00:30
                        </option>
                        <option class="time time-4" id="quote-option-sidetwo-0100" name="01:00" value="1.50">01:00
                        </option>
                        <option class="time time-4" id="quote-option-sidetwo-0130" name="01:30" value="1.50">01:30
                        </option>
                        <option class="time time-4" id="quote-option-sidetwo-0200" name="02:00" value="1.50">02:00
                        </option>
                        <option class="time time-5" id="quote-option-sidetwo-0230" name="02:30" value="1.88">02:30
                        </option>
                        <option class="time time-5" id="quote-option-sidetwo-0300" name="03:00" value="1.95">03:00
                        </option>
                        <option class="time time-6" id="quote-option-sidetwo-0330" name="03:30" value="2.28">03:30
                        </option>
                        <option class="time time-6" id="quote-option-sidetwo-0400" name="04:00" value="2.60">04:00
                        </option>
                        <option class="time time-7" id="quote-option-sidetwo-0430" name="04:30" value="2.48">04:30
                        </option>
                        <option class="time time-7" id="quote-option-sidetwo-0500" name="05:00" value="2.75">05:00
                        </option>
                        <option class="time time-7" id="quote-option-sidetwo-0530" name="05:30" value="3.03">05:30
                        </option>
                        <option class="time time-7" id="quote-option-sidetwo-0600" name="06:00" value="3.30">06:00
                        </option>
                        <option class="time time-8" id="quote-option-sidetwo-0630" name="06:30" value="3.58">06:30
                        </option>
                        <option class="time time-8" id="quote-option-sidetwo-0700" name="07:00" value="3.85">07:00
                        </option>
                        <option class="time time-8" id="quote-option-sidetwo-0730" name="07:30" value="3.75">07:30
                        </option>
                        <option class="time time-8" id="quote-option-sidetwo-0800" name="08:00" value="4.00">08:00
                        </option>
                        <option class="time time-8" id="quote-option-sidetwo-0830" name="08:30" value="4.25">08:30
                        </option>
                        <option class="time time-8" id="quote-option-sidetwo-0900" name="09:00" value="4.50">09:00
                        </option>
                        <option class="time time-9" id="quote-option-sidetwo-0930" name="09:30" value="4.75">09:30
                        </option>
                        <option class="time time-9" id="quote-option-sidetwo-1000" name="10:00" value="5.00">10:00
                        </option>
                        <option class="time time-9" id="quote-option-sidetwo-1030" name="10:30" value="5.25">10:30
                        </option>
                        <option class="time time-9" id="quote-option-sidetwo-1100" name="11:00" value="5.50">11:00
                        </option>
                        <option class="time time-10" id="quote-option-sidetwo-1130" name="11:30" value="5.75">
                            11:30
                        </option>
                        <option class="time time-10" id="quote-option-sidetwo-1200" name="12:00" value="6.00">
                            12:00
                        </option>
                        <option class="time time-11" id="quote-option-sidetwo-1230" name="12:30" value="6.25">
                            12:30
                        </option>
                        <option class="time time-11" id="quote-option-sidetwo-1300" name="13:00" value="6.50">
                            13:00
                        </option>
                        <option class="time time-11" id="quote-option-sidetwo-1330" name="13:30" value="6.75">
                            13:30
                        </option>
                        <option class="time time-11" id="quote-option-sidetwo-1400" name="14:00" value="7.00">
                            14:00
                        </option>
                        <option class="time time-11" id="quote-option-sidetwo-1430" name="14:30" value="7.25">
                            14:30
                        </option>
                        <option class="time time-11" id="quote-option-sidetwo-1500" name="15:00" value="7.50">
                            15:00
                        </option>
                        <option class="time time-12" id="quote-option-sidetwo-1530" name="15:30" value="7.75">
                            15:30
                        </option>
                        <option class="time time-12" id="quote-option-sidetwo-1600" name="16:00" value="8.00">
                            16:00
                        </option>
                        <option class="time time-12" id="quote-option-sidetwo-1630" name="16:30" value="8.25">
                            16:30
                        </option>
                        <option class="time time-12" id="quote-option-sidetwo-1700" name="17:00" value="8.50">
                            17:00
                        </option>
                        <option class="time time-12" id="quote-option-sidetwo-1730" name="17:30" value="8.75">
                            17:30
                        </option>
                        <option class="time time-12" id="quote-option-sidetwo-1800" name="18:00" value="9.00">
                            18:00
                        </option>
                    </select>
                    <br>
                </div>

                <div id="frame-record-labels">
                    <label>LABELS:</label>
                    <select id="record_labels" name="order_labels">
                        <option name="No Labels" value="0.00">No Labels</option>
                        <option name="Blank White" value="0.50">Blank White</option>
                        <option name="Full Color" value="1.00">Full Color</option>
                    </select>
                    <br>
                </div>

                <div id="frame-record-packaging">
                    <label>PACKAGING:</label>
                    <select id="record_packaging" name="order_packaging">
                        <option name='No Packaging' value="0.00">No Packaging</option>
                        <option name='7" Blank White cardboard outer sleeve' value="0.50">7" Blank White cardboard
                            outer sleeve
                        </option>
                        <option name='7" Blank Black cardboard outer sleeve' value="0.75">7" Blank Black cardboard
                            outer sleeve
                        </option>
                        <option name='7" Blank Kraft chipboard outer sleeve' value="0.75">7" Blank Kraft chipboard
                            outer sleeve
                        </option>
                        <option name='7" Heavy Duty Clear Picture Disc Sleeve' value="1.00">7" Heavy Duty Clear
                            Picture Disc Sleeve
                        </option>
                        <option name='10" Blank White jacket' value="1.00">10" Blank White jacket</option>
                        <option name='10" Blank Black linen cardstock foldover' value="1.00">10" Blank Black linen
                            cardstock foldover
                        </option>
                        <option name='10" Blank White cardstock foldover' value="0.50">10" Blank White cardstock
                            foldover
                        </option>
                        <option name='10" Heavy Duty Clear Picture Disc Sleeve' value="1.00">10" Heavy Duty Clear
                            Picture Disc Sleeve
                        </option>
                        <option name='12" Blank White jacket' value="1.00">12" Blank White jacket</option>
                        <option name='12" Blank Black jacket' value="1.00">12" Blank Black jacket</option>
                        <option name='12" Heavy Duty Clear Picture Disc Sleeve' value="1.00">12" Heavy Duty Clear
                            Picture Disc Sleeve
                        </option>
                    </select>
                    <br>
                </div>

                <div id="frame-record-rushjob">
                    <input type="checkbox" id="order_rushjob" name="order[rush]" value="Yes"/>
                    <label for="order_rushjob"><span>Rush Job (+$1.00 each)</span></label>
                </div>

                <h2>UNIT TOTAL</h2> <input type="text" id="result_unittotal" name="order[unit]" />
                <br>
                <h2>ORDER TOTAL</h2> <input type="text" id="result_ordertotal" name="order[total]" />
                <br>
                <p>NOTICE: Minimum order amount of $100 required.</p>
                <p class="shipping_note"></p>
            </div>
        </div>
    </div>

    <div class="block-fifty float-right">
        <div class="block">
            <div id="form-right">
                <h2>CONTACT</h2>
                <label><i class="fa fa-fw fa-user"></i> NAME:</label> <input id="order_customername"
                                                                             name="contact[name]"
                                                                             placeholder="Contact Name"/>
                <label><i class="fa fa-fw fa-envelope"></i> EMAIL:</label> <input id="order_email" name="contact[email]"
                                                                                  type="email"
                                                                                  placeholder="email@email.com"/>
                <label><i class="fa fa-fw fa-phone-square"></i> PHONE NUMBER:</label> <input id="order_phone"
                                                                                             name="contact[phone]"
                                                                                             type="telephone"
                                                                                             placeholder="123-456-7890"/>
                <label><i class="fa fa-fw fa-home"></i> ADDRESS 1:</label>
                <input id="order_address1" name="contact[address1]">
                <label><i class="fa fa-fw fa-home"></i> ADDRESS 2:</label>
                <input id="order_address2" name="contact[address2]">
                <span class="block-fifty input-padding">
                    <label><i class="fa fa-fw fa-map-marker"></i>CITY:</label>
                    <input id="order_city" name="contact[city]">
                </span>
                <span class="block-thirty input-padding">
                    <label><i class="fa fa-fw fa-map-marker"></i>STATE:</label>
                    <input id="order_state" name="contact[state]">
                </span>
                <span class="block-twenty">
                    <label><i class="fa fa-fw fa-map-marker"></i>ZIPCODE:</label>
                    <input id="order_zipcode" name="contact[zip]">
                </span>
                <span class="block-one">
                    <label><i class="fa fa-fw fa-globe"></i>COUNTRY:</label>
                    <input id="order_country" name="contact[country]">
                </span>
                <span class="block-fifty input-padding">
                    <label><i class="fa fa-fw fa-twitter"></i> TWITTER USERNAME:</label>
                    <input id="order_twitter" name="contact[twitter]" placeholder="username"/>
                </span>
			    <span class="block-fifty">
                    <label><i class="fa fa-fw fa-instagram"></i> INSTAGRAM USERNAME:</label>
                    <input id="order_instagram" name="contact[instagram]" placeholder="username"/>
                </span>
                <div class="clear"></div>
                <br>

                <h2>PROJECT</h2>
                <label><i class="fa fa-fw fa-user"></i> ARTIST:</label> <input id="order_artist" name="order[artist]"
                                                                               placeholder="Artist Name"/>
                <label><i class="fa fa-fw fa-pencil-square-o"></i> TITLE:</label> <input id="order_title" name="order[title]"
                                                                                         placeholder="Album Title"/>
                <label><i class="fa fa-fw fa-database"></i> GENRE:</label> <input id="order_genre" name="order[genre]"
                                                                                  placeholder="Genre"/>
                <label><i class="fa fa-fw fa-file-archive-o"></i> ART & AUDIO URL:</label> <input id="order_artandaudiourl"
                                                                                                  name="order[url]"
                                                                                                  placeholder="files.com"/>
                <br>

                <label><i class="fa fa-fw fa-comments"></i> EXTRA NOTES:</label> <input id="order_notes" name="order[notes]"
                                                                                        type="textarea"/>

                <input id="order_shippingcost" name="order[shipping]" type="hidden" value=""/>
            </div>
        </div>
    </div>

    <div class="block-one" style="display:none;">
        <div class="block">
            <div id="formorder">
                <label>QUANTITY:</label> <input id="order_quantity" name="order[quantity]" readonly/>
                <label>RECORD SIZE & TYPE:</label> <input id="order_recordtypes" name="order[size]" readonly/>
                <label>SIDE ONE RUNTIME:</label> <input id="order_sideone" value="00:00" name="order[sideone]" readonly/>
                <label>SIDE TWO RUNTIME:</label> <input id="order_sidetwo" value="00:00" name="order[sidetwo]" readonly/>
                <label>LABELS:</label> <input id="order_labels" value="No Labels" name="order[labels]" readonly/>
                <label>PACKAGING:</label> <input id="order_packaging" value="No Packaging" name="order[packaging]"
                                                 readonly/>
            </div>
        </div>
    </div>

    <div class="clear textaligncenter"><br><br><br>&nbsp;</div>

    <div id="acceptterms">
        <input type="checkbox" name="order_acceptterms" id="order_acceptterms" value="I Accept"/>
        <label for="order_acceptterms" style="padding:0;">
            <span>I have read the <a href="faq.php" target="_blank">FAQ</a> on the site and understand that, due to the experimental nature of the process, my lathe cut records will be of lower volume and fidelity than a pressed record. By clicking "Place Order" I am agreeing to pay for the order immediately through Paypal. I own all rights to the music submitted.</span>
        </label>
    </div>
    <br>
    <div id="errors"></div>
    <br>
    <button class="buttons-large"><i class="fa fa-arrow-circle-o-right"></i> Place Order</button>
    </form>
</section>

<?php
include('./templates/footer.php');
?>