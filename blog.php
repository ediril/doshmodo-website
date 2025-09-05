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
                            [
                                'title' => 'Hello World',
                                'content' => "
                                            I've been busy building the basic functionality of a money management app, such as setting up accounts, tracking and modifying expenses, tagging, calculating balances. While these features are essential, they are the bare minimum for a useful app.

                                            The fun is beginning now. I have several other ideals planned to make this a more effective and fun application to use. Tracking expenses, creating budgets and handling money in general is not exactly thrilling, but here are some of my ideas to make it more engaging:

                                            • Gamify the experience: Earn points for taking certain actions and completing quests.
                                            • Visualize your progress: Use charts and graphs to understand your financial journey.
                                            • AI-driven insights: Leverage artificial intelligence to provide personalized financial advice and tips.

                                            Stay tuned for more to come. Sign up to get the latest updates in your email!",
                                'date' => '2025-09-05',
                            ],
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
                                
                                <p class="text-muted mb-0"><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
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