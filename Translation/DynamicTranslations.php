<?php
namespace Victoire\Widget\MenuBundle\Translation;

use JMS\TranslationBundle\Model\Message;
use JMS\TranslationBundle\Translation\TranslationContainerInterface;
use JMS\TranslationBundle\Model\FileSource;

/**
 *
 * @author Thomas Beaujean
 *
 */
class DynamicTranslations implements TranslationContainerInterface
{
    /**
     * usage example: new Message('example.keymap')->addSource('path/to/source/file', '514', '10'),
     * @return array the keys to register in jms translation
     */
    public static function getTranslationMessages()
    {
        return array(
            new Message('modal.form.widget.type.menu.label', 'victoire'),
            new Message('widget.menu.new.action.label', 'victoire'),
        );
    }
}
