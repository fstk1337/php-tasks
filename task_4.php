<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <?php
                                $container = [
                                    [
                                        "hdr-class" => " mt-2",
                                        "hdr-label" => "My Tasks",
                                        "caption" => "130 / 500",
                                        "pg-out-class" => " mb-3",
                                        "pg-in-class" => " bg-fusion-400",
                                        "pg-width" => "65%",
                                        "pg-value" => "65"
                                    ],

                                    [
                                        "hdr-class" => "",
                                        "hdr-label" => "Transfered",
                                        "caption" => "440 TB",
                                        "pg-out-class" => " mb-3",
                                        "pg-in-class" => " bg-success-500",
                                        "pg-width" => "34%",
                                        "pg-value" => "34"
                                    ],

                                    [
                                        "hdr-class" => "",
                                        "hdr-label" => "Bugs Squashed",
                                        "caption" => "77%",
                                        "pg-out-class" => " mb-3",
                                        "pg-in-class" => " bg-info-400",
                                        "pg-width" => "77%",
                                        "pg-value" => "77"
                                    ],

                                    [
                                        "hdr-class" => "",
                                        "hdr-label" => "User Testing",
                                        "caption" => "7 days",
                                        "pg-out-class" => " mb-g",
                                        "pg-in-class" => " bg-primary-300",
                                        "pg-width" => "84%",
                                        "pg-value" => "84"
                                    ]
                                ];
                            ?>
                            <?php foreach ($container as $item): ?>
                            <div class="d-flex<?php echo $item["hdr-class"]?>">
                                <?php echo $item["hdr-label"]?>
                                <span class="d-inline-block ml-auto"><?php echo $item["caption"]?></span>
                            </div>
                            <div class="progress progress-sm<?php echo $item["pg-out-class"]?>">
                                <div class="progress-bar<?php echo $item["pg-in-class"]?>" role="progressbar" style="width: <?php echo $item["pg-width"]?>;" aria-valuenow="<?php echo $item["pg-value"]?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
