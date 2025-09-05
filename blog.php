<?php 
require_once 'common.php';
$common = new Common();
?>
<?php echo $common->renderHead('Blog - DoshModo', 'Financial insights and tips for your money journey'); ?>

    <?php echo $common->renderPageHeader('Blog', 'Financial insights and tips for your money journey'); ?>

    <main>
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <?php 
                        $blogPosts = [
                            /*[
                                'title' => '5 Simple Steps to Start Building Your Emergency Fund',
                                'content' => 'An emergency fund is your financial safety net. Learn how to build one from scratch, even on a tight budget, and discover the peace of mind that comes with financial preparedness.',
                                'date' => '2024-12-15',
                            ],*/
                        ];
                        
                        foreach ($blogPosts as $post): 
                        ?>
                        <article class="bg-white rounded-4 shadow-sm mb-4 overflow-hidden">
                            <div class="p-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex gap-3 text-muted small">
                                        <span><?php echo date('M j, Y', strtotime($post['date'])); ?></span>
                                    </div>
                                </div>
                                
                                <h3 class="h4 mb-3">
                                    <a href="#" class="text-decoration-none text-dark stretched-link"><?php echo htmlspecialchars($post['title']); ?></a>
                                </h3>
                                
                                <p class="text-muted mb-0"><?php echo htmlspecialchars($post['content']); ?></p>
                            </div>
                        </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php echo $common->renderFooter(); ?>

<?php echo $common->renderScripts(); ?>