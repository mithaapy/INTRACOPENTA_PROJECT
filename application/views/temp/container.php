<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $head; ?>	
    </head>
    <body class="pace-done skin-black fixed sidebar-toggle">
        <?php echo $navbar; ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <?php echo $sidebar; ?>
            <aside class="right-side">
                <section class="content-header">
                    <h1 class='ekunfontslide'>
                        <?php echo $header_title; ?> -
                        <small><?php echo $this->session->userdata['companies_name']; ?></small>
                    </h1>
                </section>
                <section class="content"> 
                    <?php echo $content; ?>
                </section>
            </aside>
        </div>
        <?php echo $footer; ?>
    </body>
</html>