<?php get_header(); ?>

<?php
$countries = [
    "Afghanistan",
    "Albania",
    "Algeria",
    "Andorra",
    "Angola",
    "Antigua and Barbuda",
    "Argentina",
    "Armenia",
    "Australia",
    "Austria",
    "Azerbaijan",
    "Bahamas",
    "Bahrain",
    "Bangladesh",
    "Barbados",
    "Belarus",
    "Belgium",
    "Belize",
    "Benin",
    "Bhutan",
    "Bolivia",
    "Bosnia and Herzegovina",
    "Botswana",
    "Brazil",
    "Brunei",
    "Bulgaria",
    "Burkina Faso",
    "Burundi",
    "Cabo Verde",
    "Cambodia",
    "Cameroon",
    "Canada",
    "Central African Republic",
    "Chad",
    "Chile",
    "China",
    "Colombia",
    "Comoros",
    "Congo (Congo-Brazzaville)",
    "Costa Rica",
    "Croatia",
    "Cuba",
    "Cyprus",
    "Czechia (Czech Republic)",
    "Denmark",
    "Djibouti",
    "Dominica",
    "Dominican Republic",
    "Ecuador",
    "Egypt",
    "El Salvador",
    "Equatorial Guinea",
    "Eritrea",
    "Estonia",
    "Eswatini (fmr. 'Swaziland')",
    "Ethiopia",
    "Fiji",
    "Finland",
    "France",
    "Gabon",
    "Gambia",
    "Georgia",
    "Germany",
    "Ghana",
    "Greece",
    "Grenada",
    "Guatemala",
    "Guinea",
    "Guinea-Bissau",
    "Guyana",
    "Haiti",
    "Holy See",
    "Honduras",
    "Hungary",
    "Iceland",
    "India",
    "Indonesia",
    "Iran",
    "Iraq",
    "Ireland",
    "Israel",
    "Italy",
    "Jamaica",
    "Japan",
    "Jordan",
    "Kazakhstan",
    "Kenya",
    "Kiribati",
    "Korea (North)",
    "Korea (South)",
    "Kosovo",
    "Kuwait",
    "Kyrgyzstan",
    "Laos",
    "Latvia",
    "Lebanon",
    "Lesotho",
    "Liberia",
    "Libya",
    "Liechtenstein",
    "Lithuania",
    "Luxembourg",
    "Madagascar",
    "Malawi",
    "Malaysia",
    "Maldives",
    "Mali",
    "Malta",
    "Marshall Islands",
    "Mauritania",
    "Mauritius",
    "Mexico",
    "Micronesia",
    "Moldova",
    "Monaco",
    "Mongolia",
    "Montenegro",
    "Morocco",
    "Mozambique",
    "Myanmar (formerly Burma)",
    "Namibia",
    "Nauru",
    "Nepal",
    "Netherlands",
    "New Zealand",
    "Nicaragua",
    "Niger",
    "Nigeria",
    "North Macedonia (formerly Macedonia)",
    "Norway",
    "Oman",
    "Pakistan",
    "Palau",
    "Palestine State",
    "Panama",
    "Papua New Guinea",
    "Paraguay",
    "Peru",
    "Philippines",
    "Poland",
    "Portugal",
    "Qatar",
    "Romania",
    "Russia",
    "Rwanda",
    "Saint Kitts and Nevis",
    "Saint Lucia",
    "Saint Vincent and the Grenadines",
    "Samoa",
    "San Marino",
    "Sao Tome and Principe",
    "Saudi Arabia",
    "Senegal",
    "Serbia",
    "Seychelles",
    "Sierra Leone",
    "Singapore",
    "Slovakia",
    "Slovenia",
    "Solomon Islands",
    "Somalia",
    "South Africa",
    "South Sudan",
    "Spain",
    "Sri Lanka",
    "Sudan",
    "Suriname",
    "Sweden",
    "Switzerland",
    "Syria",
    "Tajikistan",
    "Tanzania",
    "Thailand",
    "Timor-Leste",
    "Togo",
    "Tonga",
    "Trinidad and Tobago",
    "Tunisia",
    "Turkey",
    "Turkmenistan",
    "Tuvalu",
    "Uganda",
    "Ukraine",
    "United Arab Emirates",
    "United Kingdom",
    "United States of America",
    "Uruguay",
    "Uzbekistan",
    "Vanuatu",
    "Venezuela",
    "Vietnam",
    "Yemen",
    "Zambia",
    "Zimbabwe"
];
$c = null;
$correspondents = [];
$country = [];
$args['post_type'] = "correspondent";

if (isset($_GET['c']) && !empty($_GET['c'])) {
    $c = $_GET['c'];
}

if ($c) {
    $args['meta_key'] = "country";
    $args['meta_value'] = $c;
    $args['posts_per_page'] = -1;
    $correspondents = new WP_Query($args);
    $correspondents = $correspondents->posts;
}
?>
<main>
    <div class="pt-5">
        <div class="">
            <form method="get" action="" id="contactform">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-sm-6">
                        <div class="text-center mb-2 text-lg">
                            <label>Select country to search for a correspondent: </label>
                        </div>

                        <div class="form-group text-center" style="max-width: 300px;margin:0 auto;">
                            <select name="c" class="form-select">
                                <option value="">Select Country</option>
                                <?php foreach ($countries as $co): ?>
                                    <option <?= $co == $c ? 'selected' : '' ?> value="<?= $co ?>"><?= $co ?></option>
                                <?php endforeach; ?>
                            </select>
                            <input type="submit" value="Search" class="btn_1 green medium add_bottom_30 mt-2" id="submit-contact" />
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div><!-- End row -->
    <?php if ($c): ?>
        <div class="">
            <div class="">
                <h2 class="text-center mb-4"><?= $c ?></h2>
            </div>
        </div><!-- End row -->
    <?php endif; ?>
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
    <?php if ($correspondents): ?>
        <div class="px-5">
            <div style="overflow-x:auto;">
                <table>

                    <tr>
                        <th>Company Name</th>
                        <th>Person in Charge</th>
                        <th>Address</th>
                        <th>Office Phone</th>
                        <th>Emergency Phone</th>
                        <th>Fax Phone</th>
                        <th>P.O. Box</th>
                        <th>Email</th>
                        <th>Website</th>
                    </tr>
                    <?php if ($correspondents): ?>
                        <?php foreach ($correspondents as $cr): ?>
                            <tr>
                                <td><?= $cr->post_title; ?></td>
                                <td><?= get_field("person_in_charge", $cr->ID); ?></td>
                                <td><?= get_field("address", $cr->ID); ?></td>
                                <td><?= get_field("office_phone", $cr->ID); ?></td>
                                <td><?= get_field("emergency_phone", $cr->ID); ?></td>
                                <td><?= get_field("fax_phone", $cr->ID); ?></td>
                                <td><?= get_field("po_box", $cr->ID); ?></td>
                                <td><?= get_field("email", $cr->ID); ?></td>
                                <td><?= get_field("website", $cr->ID); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </table>
            </div>
        </div>

    <?php else: ?>
        <?php if ($c): ?>
            <h4 class="text-center mt-3">No search results.</h4>
        <?php endif; ?>
    <?php endif; ?>
    <br>
    <br>
    <br>
    <div class="container margin_60">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="intro">
                    <h2><?= get_field("section_1_title"); ?></h2>
                    <p class="lead text-justify">
                        <?= str_replace(['<p>', '</p>'], '', get_field("section_1_description")); ?>
                    </p>
                    <?php
                    $image = get_field("section_1_image");
                    ?>
                    <p><img src="<?= $image['url'] ?>" alt="" class="img-fluid"></p>
                </div>
            </div>
        </div><!-- End row -->
        <br>
        <hr>
        <br>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="intro">
                    <h2><?= get_field("section_2_title"); ?></h2>
                    <p class="lead text-justify">
                        <?= str_replace(['<p>', '</p>'], '', get_field("section_2_description")); ?>
                    </p>
                    <?php
                    $image = get_field("section_2_image");
                    if ($image):
                    ?>
                        <p><img src="<?= $image['url'] ?>" alt="" class="img-fluid"></p>
                    <?php endif; ?>
                </div>
            </div>
        </div><!-- End row -->

    </div><!-- End container -->

</main><!-- End main -->
<?php get_footer(); ?>