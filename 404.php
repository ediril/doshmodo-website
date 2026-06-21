<?php
http_response_code(404);
require_once 'common.php';
$common = new Common();
$pageTitle = 'Page not found';
$pageSubtitle = 'That page is not available.';
?>
<?php echo $common->renderHead('Page not found', 'The requested DoshModo page was not found.'); ?>

    <?php echo $common->renderPageHeader($pageTitle, $pageSubtitle); ?>

    <main>
        <section class="features">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="feature-card text-center">
                            <div class="feature-icon">[404]</div>
                            <h2>Page not found</h2>
                            <p>The page may have moved, or it may no longer exist.</p>
                            <a href="/" class="btn btn-sm btn-outline-light mt-2">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php echo $common->renderFooter(); ?>

<?php echo $common->renderScripts(); ?>
