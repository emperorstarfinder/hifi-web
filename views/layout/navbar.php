<?php
$docs_url = 'http://docs.highfidelity.com';
$download_url = 'https://highfidelity.com/download';
if (class_exists('View')) {
    $page = View::read('page');
    $base_path = 'https://highfidelity.com/';
    $worklist_url = WORKLIST_URL;
} else {
    $page = 'blog';
    $base_path = 'https://highfidelity.com/';
    $worklist_url = 'https://worklist.net/';
}
?>
<header id="navbar" class="navbar navbar-static-top hifi-web-nav" id="top" role="banner">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".hifi-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="logo <?php echo ($page == 'home' ? 'selected' : ''); ?>" href="<?php echo $base_path; ?>" title="High Fidelity"></a>
        </div>
        <nav class="navbar-collapse hifi-navbar-collapse collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li id="logo" class="<?php echo ($page == 'home' ? 'selected' : ''); ?>">
                    <a class="logo" href="<?php echo $base_path; ?>" title="High Fidelity"></a><i></i>
                </li>
                <li>
                    <a href="<?php echo $base_path; ?>directory" title="Directory">Directory</a><i></i>
                </li>
                <li>
                    <a href="<?php echo $download_url; ?>" title="Download">Download</a><i></i>
                </li>
                <li>
                    <a href="<?php echo $base_path; ?>market" title="Market">Market</a><i></i>
                </li>
                <li>
                    <a href="https://blog.highfidelity.com/blog" title="Blog">Blog</a><i></i>
                </li>
                <li>
                    <a href="https://github.com/highfidelity" title="Code">Code</a><i></i>
                </li>
                <li>
                    <a href="<?php echo $docs_url; ?>" title="Docs">Docs</a><i></i>
                </li>
                <li>
                    <a href="https://worklist.net" title="Worklist">Worklist</a><i></i>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Company <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo $base_url; ?>jobs" title="Jobs">Jobs</a><i></i>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>press" title="Press">Press</a><i></i>
                    </li>
                    <li>
                        <a href="<?php echo $base_url; ?>team" title="Team">Team</a><i></i>
                    </li>
                    <li>
                        <a href="mailto:contact@highfidelity.com" title="Contact">Contact</a><i></i>
                    </li>
                  </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
<?php if ($page != 'home' && $page != 'names') { ?>
    <div id="container">
<?php } ?>
