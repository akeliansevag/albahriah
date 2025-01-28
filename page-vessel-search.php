<?php
$v = null;
$vessels = [];
$vessels_title = [];
$vessels_imo = [];
$args['post_type'] = "vessel";

if (isset($_GET['v']) && !empty($_GET['v'])) {
    $v = $_GET['v'];
}

if ($v) {
    $args['s'] = $v;
    $vessels_title = new WP_Query($args);
    $vessels_title = $vessels_title->posts;

    unset($args['s']);

    $args['meta_key'] = "imo";
    $args['meta_value'] = $v;
    $vessels_imo = new WP_Query($args);
    $vessels_imo = $vessels_imo->posts;
}
?>
<?php get_header(); ?>
<main>
    <div class="container margin_60">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form method="get" action="" id="contactform">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group text-center">
                                <label>Search for a vessel name or IMO: </label>
                                <input type="text" class="form-control" name="v" required>
                                <input type="submit" value="Search" class="btn_1 green medium add_bottom_30 mt-2" id="submit-contact" />
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div><!-- End row -->
        <?php if ($v): ?>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h2 class="text-center">Search Results for "<?= $v ?>"</h2>
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
        <?php if ($vessels_title || $vessels_imo): ?>
            <div style="overflow-x:auto;">
                <table>

                    <tr>
                        <th>Vessel</th>
                        <th>Imo</th>
                        <th>Gt</th>
                        <th>Flag</th>
                        <th>Type</th>
                        <th>Built</th>
                        <th>Blue Card</th>
                        <th>Shipowners</th>
                    </tr>
                    <?php if ($vessels_title): ?>
                        <?php foreach ($vessels_title as $vt): ?>
                            <tr>
                                <td><?= $vt->post_title; ?></td>
                                <td><?= get_field("imo", $vt->ID); ?></td>
                                <td><?= get_field("gt", $vt->ID); ?></td>
                                <td><?= get_field("flag", $vt->ID); ?></td>
                                <td><?= get_field("type", $vt->ID); ?></td>
                                <td><?= get_field("built", $vt->ID); ?></td>
                                <td><?= get_field("bluecard", $vt->ID); ?></td>
                                <td><?= get_field("shipowners", $vt->ID); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php if ($vessels_imo): ?>
                        <?php foreach ($vessels_imo as $vi): ?>
                            <tr>
                                <td><?= $vi->post_title; ?></td>
                                <td><?= get_field("imo", $vi->ID); ?></td>
                                <td><?= get_field("gt", $vi->ID); ?></td>
                                <td><?= get_field("flag", $vi->ID); ?></td>
                                <td><?= get_field("type", $vi->ID); ?></td>
                                <td><?= get_field("built", $vi->ID); ?></td>
                                <td><?= get_field("bluecard", $vi->ID); ?></td>
                                <td><?= get_field("shipowners", $vi->ID); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </table>
            </div>
        <?php else: ?>
            <?php if ($v): ?>
                <h4 class="text-center mt-3">No search results.</h4>
            <?php endif; ?>
        <?php endif; ?>
        <br>
        <hr>
        <br>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div id="intro">
                    <h2><?= get_field("section_1_title"); ?></h2>
                    <div class="text-justify">
                        <?= get_field("section_1_description"); ?>
                    </div>

                </div>
            </div>
        </div><!-- End row -->



    </div><!-- End container -->

</main><!-- End main -->
<?php get_footer(); ?>