<?php
require_once 'collectiq/component/WaitlistComponent.php';

class Common {
    private $waitlist;
    
    public function __construct() {
        $this->waitlist = new WaitlistComponent();
    }
    
    public function renderHead($title = 'DoshModo - Monthly money review', $description = 'See what changed across your bank, card, statement, CSV, and Stripe activity: vendors, recurring spend, renewals, unusual charges, and review items.') {
        $waitlist = $this->waitlist;
        ob_start();
        include 'partials/head.php';
        return ob_get_clean();
    }
    
    public function renderMainHeader($headerTitle, $headerSubtitle) {
        $isMainHeader = true;
        ob_start();
        include 'partials/header.php';
        return ob_get_clean();
    }
    
    public function renderPageHeader($headerTitle, $headerSubtitle) {
        $isMainHeader = false;
        ob_start();
        include 'partials/header.php';
        return ob_get_clean();
    }
    
    public function renderFooter() {
        ob_start();
        include 'partials/footer.php';
        return ob_get_clean();
    }
    
    public function renderScripts() {
        $waitlist = $this->waitlist;
        ob_start();
        include 'partials/scripts.php';
        return ob_get_clean();
    }
    
    public function renderWaitlistForm($placeholder = 'email@example.com') {
        return $this->waitlist->renderForm($placeholder);
    }
}
