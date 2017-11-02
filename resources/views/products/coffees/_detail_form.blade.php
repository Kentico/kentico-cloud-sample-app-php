{!! Form::open(['url'=>'notimplemented', 'method' => 'post']) !!}

    <input type="hidden" name="product_url_slug" value="@ViewBag.UrlSlug" />

    @if(isset($free_taste_requested) && $free_taste_requested)
        <div class="alert alert-success center-text" style="margin-top: 50px;">
            Thank you for ordering your free sample of this great coffee!
        </div>
    @else
        <div class="col-lg-4 col-md-10 col-lg-push-1">
            <div class="row">
                <h2> Try a free sample </h2>
                <div>Sign up to get a coupon you can redeem at your nearest Dancing Goat cafe for a sample of this great coffee. We'll also make sure you don't miss out on news introducing the new coffees that we add to our store regularly.</div>
            </div>
            <div class="row" style="height: 20px;">
            </div>
            <div class="row">
                <div class="col-md-5 form-group">
                    <label for="first_name">First name</label>
                    <input type="text" maxlength="200" name="first name" id="first_name" class="form-control" required>
                </div>
                <div class="col-md-5 form-group col-md-push-1">
                    <label for="last_name">Last name</label>
                    <input type="text" maxlength="200" name="last name" id="last_name" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 form-group">
                    <label for="email">Email address</label>
                    <input maxlength="200" name="email" id="email" class="form-control" type="text" required>
                </div>
                <div class="col-md-5 form-group col-md-push-1">
                    <label for="address">Address</label>
                    <input type="text" maxlength="200" name="address" id="address" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 form-group">
                    <label for="city">City</label>
                    <input type="text" maxlength="200" name="city" id="city" class="form-control" required>

                </div>
                <div class="col-md-5 form-group col-md-push-1">
                    <label for="state">State (Optional)</label>
                    <input type="text" maxlength="200" name="state" id="state" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 form-group">
                    <label for="zipcode">ZIP code</label>
                    <input type="text" maxlength="200" name="zipcode" id="zipcode" class="form-control" required>
                </div>
                <div class="col-md-5 form-group col-md-push-1">

                    <label for="country">Country</label>
                    <select id="country" name="country" style="width: 173px;" required>
                        <option selected="selected" value="">(please select)</option>
                        <option value="AFG">Afghanistan</option>
                        <option value="ALB">Albania</option>
                        <option value="DZA">Algeria</option>
                        <option value="ASM">American Samoa</option>
                        <option value="AND">Andorra</option>
                        <option value="AGO">Angola</option>
                        <option value="AIA">Anguilla</option>
                        <option value="ATA">Antarctica</option>
                        <option value="ATG">Antigua and Barbuda</option>
                        <option value="ARG">Argentina</option>
                        <option value="ARM">Armenia</option>
                        <option value="ABW">Aruba</option>
                        <option value="AUS">Australia</option>
                        <option value="AUT">Austria</option>
                        <option value="AZE">Azerbaijan</option>
                        <option value="BHS">Bahamas</option>
                        <option value="BHR">Bahrain</option>
                        <option value="BGD">Bangladesh</option>
                        <option value="BRB">Barbados</option>
                        <option value="BLR">Belarus</option>
                        <option value="BEL">Belgium</option>
                        <option value="BLZ">Belize</option>
                        <option value="BEN">Benin</option>
                        <option value="BMU">Bermuda</option>
                        <option value="BTN">Bhutan</option>
                        <option value="BOL">Bolivia</option>
                        <option value="BIH">Bosnia-Herzegovina</option>
                        <option value="BWA">Botswana</option>
                        <option value="BVT">Bouvet Island</option>
                        <option value="BRA">Brazil</option>
                        <option value="IOT">British Indian Ocean Territory</option>
                        <option value="BRN">Brunei Darussalam</option>
                        <option value="BGR">Bulgaria</option>
                        <option value="BFA">Burkina Faso</option>
                        <option value="BDI">Burundi</option>
                        <option value="KHM">Cambodia</option>
                        <option value="CMR">Cameroon</option>
                        <option value="CAN">Canada</option>
                        <option value="CPV">Cape Verde</option>
                        <option value="CYM">Cayman Islands</option>
                        <option value="CAF">Central African Republic</option>
                        <option value="TCD">Chad</option>
                        <option value="CHL">Chile</option>
                        <option value="CHN">China</option>
                        <option value="CXR">Christmas Island</option>
                        <option value="CCK">Cocos (Keeling) Islands</option>
                        <option value="COL">Colombia</option>
                        <option value="COM">Comoros</option>
                        <option value="COG">Congo</option>
                        <option value="COD">Congo (Dem. Republic)</option>
                        <option value="COK">Cook Islands</option>
                        <option value="CRI">Costa Rica</option>
                        <option value="HRV">Croatia</option>
                        <option value="CUB">Cuba</option>
                        <option value="CYP">Cyprus</option>
                        <option value="CZE">Czech Republic</option>
                        <option value="DNK">Denmark</option>
                        <option value="DJI">Djibouti</option>
                        <option value="DMA">Dominica</option>
                        <option value="DOM">Dominican Republic</option>
                        <option value="TLS">East Timor</option>
                        <option value="ECU">Ecuador</option>
                        <option value="EGY">Egypt</option>
                        <option value="SLV">El Salvador</option>
                        <option value="GNQ">Equatorial Guinea</option>
                        <option value="ERI">Eritrea</option>
                        <option value="EST">Estonia</option>
                        <option value="ETH">Ethiopia</option>
                        <option value="FLK">Falkland Islands (Malvinas)</option>
                        <option value="FRO">Faroe Islands</option>
                        <option value="FJI">Fiji</option>
                        <option value="FIN">Finland</option>
                        <option value="FRA">France</option>
                        <option value="GUF">French Guiana</option>
                        <option value="PYF">French Polynesia</option>
                        <option value="ATF">French Southern Territories</option>
                        <option value="GAB">Gabon</option>
                        <option value="GMB">Gambia</option>
                        <option value="GEO">Georgia</option>
                        <option value="DEU">Germany</option>
                        <option value="GHA">Ghana</option>
                        <option value="GIB">Gibraltar</option>
                        <option value="GRC">Greece</option>
                        <option value="GRL">Greenland</option>
                        <option value="GRD">Grenada</option>
                        <option value="GLP">Guadeloupe</option>
                        <option value="GUM">Guam</option>
                        <option value="GTM">Guatemala</option>
                        <option value="GGY">Guernsey</option>
                        <option value="GIN">Guinea</option>
                        <option value="GNB">Guinea-Bissau</option>
                        <option value="GUY">Guyana</option>
                        <option value="HTI">Haiti</option>
                        <option value="HMD">Heard and McDonald Islands</option>
                        <option value="HND">Honduras</option>
                        <option value="HKG">Hong Kong</option>
                        <option value="HUN">Hungary</option>
                        <option value="ISL">Iceland</option>
                        <option value="IND">India</option>
                        <option value="IDN">Indonesia</option>
                        <option value="IRN">Iran</option>
                        <option value="IRQ">Iraq</option>
                        <option value="IRL">Ireland</option>
                        <option value="IMN">Island of Man</option>
                        <option value="ISR">Israel</option>
                        <option value="ITA">Italy</option>
                        <option value="CIV">Ivory Coast</option>
                        <option value="JAM">Jamaica</option>
                        <option value="JPN">Japan</option>
                        <option value="JEY">Jersey</option>
                        <option value="JOR">Jordan</option>
                        <option value="KAZ">Kazakhstan</option>
                        <option value="KEN">Kenya</option>
                        <option value="KIR">Kiribati</option>
                        <option value="PRK">Korea (Democratic Republic of)</option>
                        <option value="KOR">Korea (Republic of)</option>
                        <option value="">Kosovo</option>
                        <option value="KWT">Kuwait</option>
                        <option value="KGZ">Kyrgyz Republic</option>
                        <option value="LAO">Laos</option>
                        <option value="LVA">Latvia</option>
                        <option value="LBN">Lebanon</option>
                        <option value="LSO">Lesotho</option>
                        <option value="LBR">Liberia</option>
                        <option value="LBY">Libyan Arab Jamahiriya</option>
                        <option value="LIE">Liechtenstein</option>
                        <option value="LTU">Lithuania</option>
                        <option value="LUX">Luxembourg</option>
                        <option value="MAC">Macau</option>
                        <option value="MKD">Macedonia</option>
                        <option value="MDG">Madagascar</option>
                        <option value="MWI">Malawi</option>
                        <option value="MYS">Malaysia</option>
                        <option value="MDV">Maldives</option>
                        <option value="MLI">Mali</option>
                        <option value="MLT">Malta</option>
                        <option value="MHL">Marshall Islands</option>
                        <option value="MTQ">Martinique</option>
                        <option value="MRT">Mauritania</option>
                        <option value="MUS">Mauritius</option>
                        <option value="MYT">Mayotte</option>
                        <option value="MEX">Mexico</option>
                        <option value="FSM">Micronesia</option>
                        <option value="MDA">Moldavia</option>
                        <option value="MCO">Monaco</option>
                        <option value="MNG">Mongolia</option>
                        <option value="MNE">Montenegro</option>
                        <option value="MSR">Montserrat</option>
                        <option value="MAR">Morocco</option>
                        <option value="MOZ">Mozambique</option>
                        <option value="MMR">Myanmar</option>
                        <option value="NAM">Namibia</option>
                        <option value="NRU">Nauru</option>
                        <option value="NPL">Nepal</option>
                        <option value="NLD">Netherlands</option>
                        <option value="ANT">Netherlands Antilles</option>
                        <option value="NCL">New Caledonia</option>
                        <option value="NZL">New Zealand</option>
                        <option value="NIC">Nicaragua</option>
                        <option value="NER">Niger</option>
                        <option value="NGA">Nigeria</option>
                        <option value="NIU">Niue</option>
                        <option value="NFK">Norfolk Island</option>
                        <option value="MNP">Northern Mariana Islands</option>
                        <option value="NOR">Norway</option>
                        <option value="OMN">Oman</option>
                        <option value="PAK">Pakistan</option>
                        <option value="PLW">Palau</option>
                        <option value="PSE">Palestinian Territory</option>
                        <option value="PAN">Panama</option>
                        <option value="PNG">Papua-New Guinea</option>
                        <option value="PRY">Paraguay</option>
                        <option value="PER">Peru</option>
                        <option value="PHL">Philippines</option>
                        <option value="PCN">Pitcairn</option>
                        <option value="POL">Poland</option>
                        <option value="PRT">Portugal</option>
                        <option value="PRI">Puerto Rico</option>
                        <option value="QAT">Qatar</option>
                        <option value="REU">Re union</option>
                        <option value="ROU">Romania</option>
                        <option value="RUS">Russian Federation</option>
                        <option value="RWA">Rwanda</option>
                        <option value="BLM">Saint Barthelemy</option>
                        <option value="SHN">Saint Helena</option>
                        <option value="KNA">Saint Kitts and Nevis</option>
                        <option value="LCA">Saint Lucia</option>
                        <option value="MAF">Saint Martin</option>
                        <option value="SPM">Saint Pierre and Miquelon</option>
                        <option value="VCT">Saint Vincent and the Grenadines</option>
                        <option value="WSM">Samoa</option>
                        <option value="SMR">San Marino</option>
                        <option value="STP">Sao Tome and Principe</option>
                        <option value="SAU">Saudi Arabia</option>
                        <option value="SEN">Senegal</option>
                        <option value="SRB">Serbia</option>
                        <option value="SYC">Seychelles</option>
                        <option value="SLE">Sierra Leone</option>
                        <option value="SGP">Singapore</option>
                        <option value="SVK">Slovakia</option>
                        <option value="SVN">Slovenia</option>
                        <option value="SLB">Solomon Islands</option>
                        <option value="SOM">Somalia</option>
                        <option value="ZAF">South Africa</option>
                        <option value="SGS">South Georgia and South Sandwich Islands</option>
                        <option value="SSD">South Sudan</option>
                        <option value="ESP">Spain</option>
                        <option value="LKA">Sri Lanka</option>
                        <option value="SDN">Sudan</option>
                        <option value="SUR">Suriname</option>
                        <option value="SJM">Svalbard and Jan Mayen Islands</option>
                        <option value="SWZ">Swaziland</option>
                        <option value="SWE">Sweden</option>
                        <option value="CHE">Switzerland</option>
                        <option value="SYR">Syrian Arab Republic</option>
                        <option value="TWN">Taiwan</option>
                        <option value="TJK">Tajikistan</option>
                        <option value="TZA">Tanzania</option>
                        <option value="THA">Thailand</option>
                        <option value="TGO">Togo</option>
                        <option value="TKL">Tokelau</option>
                        <option value="TON">Tonga</option>
                        <option value="TTO">Trinidad and Tobago</option>
                        <option value="TUN">Tunisia</option>
                        <option value="TUR">Turkey</option>
                        <option value="TKM">Turkmenistan</option>
                        <option value="TCA">Turks and Caicos Islands</option>
                        <option value="TUV">Tuvalu</option>
                        <option value="UGA">Uganda</option>
                        <option value="UKR">Ukraine</option>
                        <option value="ARE">United Arab Emirates</option>
                        <option value="GBR">United Kingdom</option>
                        <option value="UMI">United States Minor Outlying Islands</option>
                        <option value="URY">Uruguay</option>
                        <option value="USA">USA</option>
                        <option value="UZB">Uzbekistan</option>
                        <option value="VUT">Vanuatu</option>
                        <option value="VAT">Vatican (Holy See)</option>
                        <option value="VEN">Venezuela</option>
                        <option value="VNM">Vietnam</option>
                        <option value="VGB">Virgin Islands (British)</option>
                        <option value="VIR">Virgin Islands (U.S.)</option>
                        <option value="WLF">Wallis and Futuna Islands</option>
                        <option value="ESH">Western Sahara</option>
                        <option value="YEM">Yemen</option>
                        <option value="ZMB">Zambia</option>
                        <option value="ZWE">Zimbabwe</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <input type="submit" name="send_me_free_coffee" value="Send me free coffee" id="free_cofee" class="btn btn-primary">
                    <div>[not implemented]</div>
                </div>
            </div>
        </div>
    @endif
{!! Form::close() !!}
