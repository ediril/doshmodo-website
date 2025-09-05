<?php 
require_once 'common.php';
$common = new Common();
?>
<?php echo $common->renderHead('Terms of Service - DoshModo', 'The rules and guidelines for using DoshModo'); ?>

    <?php echo $common->renderPageHeader('Terms of Service', 'The rules and guidelines for using DoshModo'); ?>

    <main>
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="bg-white p-5 rounded-4 shadow-sm">
                            <h2 class="h4 mb-3">Agreement to Terms</h2>
                            <p class="mb-4">By accessing and using DoshModo, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>

                            <h2 class="h4 mb-3">Description of Service</h2>
                            <p class="mb-4">DoshModo is a financial management application that helps users track their finances, monitor account balances, and build healthy financial habits through gamification and AI-powered insights.</p>

                            <h2 class="h4 mb-3">User Responsibilities</h2>
                            <p class="mb-3">As a user of DoshModo, you agree to:</p>
                            <ul class="mb-4">
                                <li>You must be 18+ to use DoshModo</li>
                                <li>Use for personal finance tracking only, not commercial use</li>
                                <li>You own your data but grant us permission to provide the service</li>
                                <li>We don't guarantee perfection and aren't liable for damages</li>
                                <li>You can stop using the service anytime</li>
                            </ul>

                            <h2 class="h4 mb-3">Account Security</h2>
                            <p class="mb-3">You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account. You agree to:</p>
                            <ul class="mb-4"></ul>
                                <li>Provide accurate and complete information when creating your account</li>
                                <li>Keep your account credentials secure and confidential</li>
                                <li>Notify us immediately of any security breaches or unauthorized use</li>
                            </ul>

                            <h2 class="h4 mb-3">Financial Data</h2>
                            <p class="mb-4">DoshModo helps you manage your financial information. You are responsible for the accuracy of the financial data you input. We provide tools and insights, but we are not financial advisors and our service does not constitute financial advice.</p>

                            <h2 class="h4 mb-3">Intellectual Property</h2>
                            <p class="mb-4">The DoshModo application, its original content, features, and functionality are owned by Newmoon Software and are protected by international copyright, trademark, patent, trade secret, and other intellectual property laws.</p>

                            <h2 class="h4 mb-3">Limitation of Liability</h2>
                            <p class="mb-4">In no event shall DoshModo or Newmoon Software be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses.</p>

                            <h2 class="h4 mb-3">Termination</h2>
                            <p class="mb-4">We may terminate or suspend your account and bar access to the service immediately, without prior notice or liability, under our sole discretion, for any reason whatsoever, including breach of these Terms.</p>

                            <h2 class="h4 mb-3">Changes to Terms</h2>
                            <p class="mb-4">We reserve the right to modify these terms at any time. We will notify users of any material changes to these terms through the app or email.</p>

                            <h2 class="h4 mb-3">Contact Information</h2>
                            <p class="mb-4">Questions about the Terms of Service should be sent to us at <a href="mailto:support@doshmodo.com" class="text-decoration-none" style="color: #ffd700;">legal@doshmodo.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php echo $common->renderFooter(); ?>

<?php echo $common->renderScripts(); ?>