<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

if (!isset($preview)) {
    $preview = false;
}


echo $view->render(
    'MauticRecombeeBundle:Builder\Email:generator-header.html.php',
    [
        'recombee' => $recombee,
        'settings' => $settings,
        'preview'  => $preview,
    ]
);
?>
</tr>
            <?php for ($i = 0; $i < $recombee->getNumberOfItems(); $i++): ?>
                <?php
                echo $view->render(
                    'MauticRecombeeBundle:Builder\Email:generator-body.html.php',
                    [
                        'recombee' => $recombee,
                        'settings' => $settings,
                        'preview'  => $preview,
                        'index'=> $i
                    ]
                );
                ?>
            <?php endfor; ?>

<?php
echo $view->render(
    'MauticRecombeeBundle:Builder\Email:generator-footer.html.php',
    [
        'recombee' => $recombee,
        'settings' => $settings,
        'preview'  => $preview,
    ]
);
?>